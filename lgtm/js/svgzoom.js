//SVGをズーム、パンできるようにするツールを設定する
// svg_holder_selector: SVGが格納されているDOM
//  このDOMの中での操作が有効
//  ドラッグでパン、スクロールでズーム
// scaleFactor: ズームのスピード調整
// マウスイベントを元にsvgのviewBoxを更新することで実現する
function initSVGTools(svg_holder_selector, scaleFactor=1.001){

	const svg_holder = $(svg_holder_selector);
	const svg = $(svg_holder_selector+' svg');
	var prevX, prevY;

	// display initial condition
	
	if($(svg).data('viewBox')){
	}else{
		$(svg).data('viewBox', $(svg).attr('viewBox'));
	}

	$(svg_holder).css('cursor', 'move');
	// setup pan
	$(svg_holder).on('mousedown', function(md){
		prevX = md.clientX;
		prevY = md.clientY;
		//console.log('mousedown');
	});
	$(svg_holder).on('mouseup mouseout', function(md){
		prevX = undefined;
		prevY = undefined;
		//console.log('mouseup');
	});
	$(svg_holder).on('mousemove', function(mm){
		if(prevX){
			const delta = {
			  x: mm.clientX - prevX,
			  y: mm.clientY - prevY
			};
			prevX = mm.clientX;
			prevY = mm.clientY;
			updateViewBoxMin(delta.x, delta.y);
		}
	});

	const updateViewBoxMin = (dx, dy) => {
		//console.log("updateViewBoxMin: dx="+dx + " dy="+dy);
		const viewBoxList = $(svg).attr('viewBox').split(' ');
		viewBoxList[0] = '' + (parseInt(viewBoxList[0]) - dx);
		viewBoxList[1] = '' + (parseInt(viewBoxList[1]) - dy);
		const viewBox = viewBoxList.join(' ');
		$(svg).attr('viewBox', viewBox);
	};

	const getEventPosition = (ev) => {
		let x, y;
		if (ev.offsetX) {
			/*
			Check the browser compatibility
			https://developer.mozilla.org/en-US/docs/Web/API/MouseEvent/offsetX
			*/
			x = ev.offsetX;
			y = ev.offsetY;
		} else {
			const { left, top } = ev.srcElement.getBoundingClientRect();
			x = ev.clientX - left;
			y = ev.clientY - top;
		}
		return { x, y };
	};

	const zoomAtPoint = (point, svg, scale) => {
		// normalized position from 0 to 1
		const sx = point.x / svg.width();
		const sy = point.y / svg.height();

		// get current viewBox
		const [minX, minY, width, height] = $(svg).attr('viewBox')
			.split(' ')
			.map(s => parseFloat(s));

		const x = minX + width * sx;
		const y = minY + height * sy;

		const scaledWidth = width * scale;
		const scaledHeight = height * scale;
		const scaledMinX = x + scale * (minX - x);
		const scaledMinY = y + scale * (minY - y);

		const scaledViewBox = [scaledMinX, scaledMinY, scaledWidth, scaledHeight]
			.map(s => s.toFixed(2))
			.join(' ');

		$(svg).attr('viewBox', scaledViewBox);
	};

	//setup zoom
	$(svg).on('wheel', function(ev){
		ev.preventDefault();
		const position = getEventPosition(ev);
		//console.log(position);
		//console.log(ev.originalEvent.deltaY);
		const scale = Math.pow(scaleFactor, ev.originalEvent.deltaY);
		zoomAtPoint(position, svg, scale);
	});
}

function resetSVGTools(svg_holder_selector){
	const svg_holder = $(svg_holder_selector);
	const svg = $(svg_holder_selector+' svg');
	$(svg).attr('viewBox', $(svg).data('viewBox'));
}
