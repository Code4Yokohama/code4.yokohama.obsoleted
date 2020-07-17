var DEFAULT_FONT_URL = "./NotoSansCJKjp-Regular.otf";

//ダウンロードボタンにSVGデータを埋め込む
// source: SVGを示すセレクター
// filename: ファイル名
// btn: ダウンロードボタン(Aタグ)のセレクター
// 埋め込まれているかはsettedクラスで判断可能
function setDownloadSVG(source, filename, btn) {
	var svgData = $(source).html();
	url = "data:image/svg+xml;charset=utf-8;base64," + btoa(unescape(encodeURIComponent(svgData)));
	$(btn).attr("download", filename).attr("href", url).addClass("setted");
}

//ダウンロードボタンを初期化
// btn: ダウンロードボタン(Aタグ)のセレクター
// 埋め込まれているかはsettedクラスで判断可能
function clearDownloadSVG(btn) {
	$(btn).removeAttr("download").removeAttr("href").removeClass("setted");
}

//SVGデータをPDFに変換してダウンロードさせる
// source: SVGを示すセレクター
// filename: ファイル名
function convSVG2PDF(source, filename) {
	const svgElement = $(source).find('svg')[0];
	const width = svgElement.width.baseVal.value, height = svgElement.height.baseVal.value;
	// create a new jsPDF instance
	const pdf = new jsPDF({
		orientation:'l',
		unit:'px',
		format:[width, height],
		putOnlyUsedFonts:true
	});
	// render the svg element
	svg2pdf(svgElement, pdf, {
		xOffset: 0,
		yOffset: 0,
		scale: 1
	});
	// get the data URI
	const uri = pdf.output('datauristring');
	// or simply save the created pdf
	pdf.save(filename);
}


//SVG内のテキストを指定したフォントに従ってアウトライン化する
//APIを使ってサーバ側で実施する
// text: アウトライン化するテキスト
// selector: アウトライン化したSVGのGタグを配置する場所
// fontname: Web Font名
// fontfile: input[type=file]で指定されたfiles
// logfunc: エラーメッセージを受け取る関数
// Defferredによる並列処理,待ち合わせが可能
function text2svg_api(text, selector, fontname, fontfile, logfunc){
	var d = $.Deferred();
	var formData = new FormData();
	formData.append('text', text);
	formData.append('fontname', fontname);
	formData.append('fontfile', fontfile);

	var text_anchor = $(selector).attr('text-anchor');
	if(text_anchor=="middle"){
		formData.append('text_align', "center");
	}else if(text_anchor=="end"){
		formData.append('text_align', "right");
	}
	var font_size = parseInt($(selector).css('font-size'));
	//formData.append('char_size', '10,1000,300,300');
	var scale = 0.0005;
	formData.append('scale', font_size*scale);

	$.ajax({
		type: 'post',
		url: 'http://153.127.39.37/lgtm/text2svg-api.php',
		data: formData,
		processData: false,
		contentType: false,
		success: function(data) {
			var svg = $(data).find('g');
			if(svg){
				$(selector).html(svg);
			}else{
				message = "サーバ側の処理で文字列をSVGに変換できませんでした。";
				logfunc(message);
			}
			d.resolve();
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			message = "AJAXエラーで文字列をSVGに変換できませんでした。";
			logfunc(message);
			d.resolve();
		}
	});

	return d.promise();
}

function text2svg_url(text, selector, fonturl, logfunc, d = $.Deferred()) {
	opentype.load(fonturl, function(err, font) {
		if (err) {
			logfunc('Font could not be loaded: ' + err);
		} else {
			$(selector).each(function(){
				var style = getComputedStyle(this,'');
				console.log(text+" @"+style.fontSize);
				console.log(text+" !"+this.style.fontSize);
				size = (this.style.fontSize!="") ? this.style.fontSize : style.fontSize;
				var path = font.getPath(text, 0, 0, parseFloat(size));
				var g = document.createElementNS("http://www.w3.org/2000/svg","g");
				$(g).html(path.toSVG());
				$(this).html(g);
			});
		}
		d.resolve();
	});
	return d.promise();
}

function text2svg_file(text, selector, fontfile, logfunc, d = $.Deferred()) {
	var reader = new FileReader();
	reader.addEventListener('load', function(event){
		fonturl = event.target.result;
		text2svg_url(text, selector, fonturl, logfunc, d);
	});
	reader.readAsDataURL(fontfile);

	return d.promise();
}

function text2svg_css(text, selector, logfunc, d = $.Deferred()) {

}

function text2svg(text, selector, fontname, fontfile, logfunc) {
	var d = $.Deferred();
	if(fontfile != undefined && fontfile != "") {
		text2svg_file(text, selector, fontfile, logfunc, d);
	} else {
		if(fontname == undefined || fontname == "") {
			fontname = DEFAULT_FONT_URL;
		}
		text2svg_url(text, selector, fontname, logfunc, d);
	}
	return d.promise();
}


//スケールの変更
// selector: 対象
// scale: 拡縮率(1:等倍,>1:拡大,0<1:縮小,<0:反転)
function changeScale(selector, scale){
	var font_size = 1;//parseInt($(selector).css('font-size'));
	var array = [scale*font_size,0,0,scale*font_size,0,0];
	var txt = 'matrix('+array.join(',')+')';
	$(selector).attr('transform',txt);
	//$(selector).removeAttr('transform').css('transform', txt);
}

function setText2svg(text, selector, fontname, fontfile, logfunc) {
	var d = $.Deferred();
	$(selector).html(text);
	d.resolve();
	return d.promise();
}