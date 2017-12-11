Recent Posts Plugin for Grav
======
Based on the `Archives` Plugin, this plugin lists the most recent posts from your Grav Blog.

## Settings
* Select the pages where your blogs posts are listed – only their child pages will be shown
* List categories: In addition to the posts from the blog pages, pages with the category will be shown

# Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `recent-posts`. You can find these files on [GitHub](https://github.com/GittiHab/grav-recent-posts).

You should now have all the plugin files under

    /your/site/grav/user/plugins/recent-posts

>> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav), the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) plugins, and a theme to be installed in order to operate.

# Usage

The `recent-posts` plugin comes with some sensible default configuration, that are pretty self explanatory:

# Config Example

```
enabled: true
built_in_css: true
date_display_format: 'F Y'
limit: 12
order:
    by: date
    dir: desc
filter_combinator: and
filters:
  category:
    - sidebar
  page:
    - /blog

```

If you need to change any value, then the best process is to copy the [recent-posts.yaml](recent-posts.yaml) file into your `users/config/plugins/` folder (create it if it doesn't exist), and then modify there.  This will override the default settings.

You can also list the current collection, without having to search for a taxonomy term by using

```
filters:
    - '@self'
```

# Template Override

Something you might want to do is to override the look and feel of the recent posts, and with Grav it is super easy.

Copy the template file [templates/partials/recent-posts.html.twig](templates/partials/recent-posts.html.twig) into the `templates/partials` folder of your custom theme, and that is it.

```
/your/site/grav/user/themes/custom-theme/templates/partials/recent-posts.html.twig
```

You can now edit the override and tweak it however you prefer.

# Update

Manually updating Recent Posts is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/plugins/recent-posts` directory.
* Download the new version of the Recent Posts plugin from [GitHub](https://github.com/GittiHab/grav-recent-posts).
* Unzip the zip file in `your/site/user/plugins` and rename the resulting folder to `recent-posts`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/plugins`) will remain intact.
