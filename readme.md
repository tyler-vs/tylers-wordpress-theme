# [tylers wordpress theme](https://github.com/tyler-vs/tylers-wordpress-theme)
---

## About

A WordPress theme for learning the ins-and-outs of wordpress themes. Built on top of [underscores theme](https://github.com/Automattic/_s). 

Explores the following concepts:

- [Designing Themes](https://codex.wordpress.org/Designing_Themes_for_Public_Release)
- [Site Structure](https://codex.wordpress.org/Site_Architecture_1.5)

## Installation

1. Download the zip file and upload into the `themes` directory of a WordPress install.

## Documentation

### Theme Filters

- Action Hooks
  + tvs_before_header
  + tvs_header
  + tvs_after_header
  + tvs_before_container
  + tvs_after_container
  + tvs_before_sidebar
  + tvs_after_sidebar
  + tvs_before_footer
  + tvs_after_footer
- Filter Hooks
  + __tvs_blog_header_classes__ - modifies the default class applied to the blog-header.
  + __tvs_site_title_tag__ - modifies how the website's title tag is displayed.
  + __tvs_blog_colophone_content__ - modifies the colophone, or site footer's HTML content.
  + 
  + __tvs_main_container_class__ - default is __container__ class used by Bootstrap. Can override to __container-fluid__ or supply your own container class with additional CSS.
- 404 Page
  + __tvs_404_page_title__    
  + 


## TODO

- Favicon support


## Colophon

- [initializr](http://www.initializr.com/)
- [Bootstrap Blog Example](http://getbootstrap.com/examples/blog/)