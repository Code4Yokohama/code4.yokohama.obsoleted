<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Common\Grav;
use Grav\Common\Page\Collection;
use Grav\Common\Page\Page;
use Grav\Common\Debugger;
use Grav\Common\Taxonomy;
use RocketTheme\Toolbox\Event\Event;

class RecentPostsPlugin extends Plugin {
    /**
     * @var string
     */
    protected $month_taxonomy_name;

    /**
     * @var string
     */
    protected $year_taxonomy_name;

    /**
     * @return array
     */
    public static function getSubscribedEvents() {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize configuration
     */
    public function onPluginsInitialized() {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onPageProcessed' => ['onPageProcessed', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ]);
    }

    /**
     * Add current directory to twig lookup paths.
     */
    public function onTwigTemplatePaths() {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    /**
     * Add
     *
     * @param Event $event
     */
    public function onPageProcessed(Event $event) {
        // Nothing to do here :)
    }

    /**
     * Set needed variables to display breadcrumbs.
     */
    public function onTwigSiteVariables() {
        $page = $this->grav['page'];
        // If a page exists merge the configs
        if ($page) {
            $this->config->set('plugins.recent-posts', $this->mergeConfig($page));
        }

        /** @var Taxonomy $taxonomy_map */
        $taxonomy_map = $this->grav['taxonomy'];
        $taxonomies = [];
        $find_taxonomy = [];

        // Get current datetime
        $start_date = time();

        $recent_posts = array();

        // get the plugin filters setting
        $filters = (array)$this->config->get('plugins.recent-posts.filters');
        $operator = $this->config->get('plugins.recent-posts.filter_combinator');
        $new_approach = false;
        $collection = null;

        $relevant_pages = null;
        if (isset($filters['page']) && count($filters['page']) > 0) {
            $relevant_pages = new Collection();
            foreach ($filters['page'] as $p) {
                $children = $this->grav['pages']->find($p)->children();
                $relevant_pages->append($children);
            }
            unset($filters['page']);
        }

        if (!isset($filters['category']) || count($filters['category']) < 1) {
            $collection = (is_null($relevant_pages))? $this->grav['pages']->all():$relevant_pages;
        } else {
            foreach ($filters as $key => $filter) {
                // flatten item if it's wrapped in an array
                if (is_int($key)) {
                    if (is_array($filter)) {
                        $key = key($filter);
                        $filter = $filter[$key];
                    } else {
                        $key = $filter;
                    }
                }
                // see if the filter uses the new 'items-type' syntax
                if ($key === '@self' || $key === 'self@') {
                    $new_approach = true;
                } elseif ($key === '@taxonomy' || $key === 'taxonomy@') {
                    $taxonomies = $filter === false ? false : array_merge($taxonomies, (array)$filter);
                } else {
                    $find_taxonomy[$key] = $filter;
                }
            }
            if ($new_approach) {
                $collection = $page->children();
            } else {
                $collection = new Collection();
                $collection->append($taxonomy_map->findTaxonomy($find_taxonomy, $operator)->toArray());
            }
            // Connect the filtered pages/taxonomies using OR
            if (!is_null($relevant_pages))
                $collection = $relevant_pages->append($collection);
            // TODO: Allow to connect them using AND
            // TODO: (therefore we need to find out if there is a way of filtering collections)
        }

        // reorder the collection based on settings
        $collection = $collection->order($this->config->get('plugins.recent-posts.order.by'), $this->config->get('plugins.recent-posts.order.dir'));
        $date_format = $this->config->get('plugins.recent-posts.date_display_format');

        // loop over new collection of pages that match filters
        foreach ($collection as $page) {
            // update the start date if the page date is older
            $start_date = $page->date() < $start_date ? $page->date() : $start_date;

            $recent_posts[] = $page;
        }

        // slice the array to the limit you want
        $recent_posts = array_slice($recent_posts, 0, intval($this->config->get('plugins.recent-posts.limit')), is_string(reset($recent_posts)) ? false : true);

        // add the archives_start date to the twig variables
        $this->grav['twig']->twig_vars['recent_posts'] = $recent_posts;
    }
}
