WordPress Taiga Boilerplate theme
=================================

I am using the Taiga Boilerplate te work on a WordPress theme, so you always have a responsive WordPress framework to build great WordPress themes. 
I am using the Hybrid Core of Justin Tadlock for some WordPress awesomeness. See http://themehybrid.com/hybrid-core.
All the WordPress awesomeness is put in the functions.php and some are used in theme already. Some you can put in yourself. If you are familiair with Hybrid Core then go and rebuild it yourself. 

The Hybrid core functionality I did put in is:
1. Theme support for the framework widgets.

2. Theme support for the framework shortcodes.

3. Theme support for the Hybrid Template Hierarchy which is more flexible.

4. Theme support for sidebars from Hybrid core (you can also put in sidebars yourself in the functions.php.) 	Put in are primary, secondary and subsidiary. If you want more, put in the template files for these 		sidebars. 
	*	primary: Typically shown on the side of the page as the main sidebar.
	*	secondary: Typically shown on the side of the page within three-column layouts or as an alternative 
	*	to the primary sidebar.
	*	subsidiary: Typically shown somewhere above, within, or below the footer area.
	*	header: Easy enough. Put it within the header.
	*	before-content: Should be shown directly before the post content on a page.
	*	after-content: Should be shown directly after the post content on a page.
	*	after-singular: all post types that are displayed on the front end of the site.

5. Theme support for menus. (Put in are: primary, secondary and subsidiary.)
	*	primary:    Typically located before, within, or after the header area.
	*	secondary:    Typically located before, within, or after the header area. However, it should be
	 					displayed after the primary menu.
	*	subsidiary:    Typically located before, within, or after the footer area. 	
5. Theme support for breadcrumbs.
6. Theme support for images.
7. Theme support for Hybrid core stylesheets. Put in are Drop-downs and gallery.
	*	18px:    A base reset stylesheet that set margins and line heights for 18 pixels.
	*	20px:    A base reset stylesheet that set margins and line heights for 20 pixels.
	*	21px:    A base reset stylesheet that set margins and line heights for 21 pixels.
	*	22px:    A base reset stylesheet that set margins and line heights for 22 pixels.
	*	24px:    A base reset stylesheet that set margins and line heights for 24 pixels.
	*	25px:    A base reset stylesheet that set margins and line heights for 25 pixels.
	*	drop-downs:    Starter set of style rules for drop-down menus.
	*	nav-bar:    Starter set of style rules for nav-bar style drop-down menus.
	*	gallery:    A complete stylesheet for handling gallery layouts. For use with the Cleaner Gallery 					extension. Cleaner Gallery is PHP script that fixes the WordPress [gallery] 							shortcode’s invalid HTML and removes its inline styles. It also gives you greater 						control and flexibility over how the gallery is output as a theme author.
	*	parent:    Parent theme’s style.css file. This is only loaded if a child theme is active.
	*	style:    Active theme’s style.css file. This is the child theme stylesheet if a child theme is 					active. 
8. Theme layouts (need to add stylesheet support) (NOT YET!) 

The first part of the functions.php is Hybrid core functionality, after that part you can put in your own functionality.

Changes of the Taiga Boilerplate put into this WP theme
--------------------
https://github.com/studiowolf/taiga-boilerplate/commits/master
Starting point: november 4th 2013
* up to february 27th

TODO
--------------------
* making the theme well accessible (until then use the wpaccessibility plugin)
* Grunt toevoegen (http://remcotolsma.nl/2014/02/wordpress-plugins-en-grunt/):
	- pot bestand aanmaken. https://github.com/blazersix/grunt-wp-i18n
	- php testen
	- afbeelding optimalisatie
	- http://www.danielauener.com/yeoman-wordpress-theme-generator/ en https://github.com/claudiosmweb/wordpress-plugin-boilerplate en http://themergency.com/grunt-for-wordpress-developers/ en http://mattbanks.me/grunt-wordpress-development-deployments/ en http://www.khoapham.me/blog/set-up-grunt-with-wordpress/ en https://www.npmjs.org/search?q=wordpress Bekijken.
	-

Beneath is the story of the Taiga Boilerplate builder Aljan of Studio Wolf.

Taiga Boilerplate
====================

Taiga Boilerplate is the extended version of Taiga Grid for starting a new web project. With a clean folder structure and basic modules it's a head start for UI designers who code.

* Includes Taiga Grid (https://github.com/StudioWolf/taiga-grid)
* Mobile first
* Set of simple mixins
* Modular with Smacss
* Touch and mobile ready
* Basic components like forms, tables, buttons etc.

Changes
---------------------

* 25 october: buttons, forms etc can be found in the folder 'shared-components'. Modules like 'product', 'blog-article', 'shopping-cart' can be created in the folder 'modules'.


Why Taiga Boilerplate?
---------------------

As an interface designer I had the problem with most other boilerplates that they are created for developers. You'll get everything you need to build a prototype rapidly, but adjusting and adding components and design can be difficult. That's why we build our own boilerplate and shaped Taiga while looking at HTML5Boilerplate, Twitter Bootstrap, Zurb Foundation and others.

Set up Taiga Boilerplate
---------------------

* Taiga Grid: The core of Taiga Boilerplate is Taiga Grid, so please read how to work with the grid first.
* Sass: Download Sass and runn `sass --watch stylesheets:stylesheets --style compressed`.
* Modular CSS: Taiga Boilerplate works with modular CSS. To fully understand this principle you should read the Smacss book by Jonathan Snook.

Thanks
---------------------

Taiga was inspired by these awesome people: Miller Medeiros, Paul Irish, Olav Bjørkøy and Jonathan Snook.
If you have any questions or suggestions, e-mail me at aljan@studiowolf.nl or ask it on github.

And please let me know if you're using Taiga! :-)

For more information: http://taigaboilerplate.com/taiga-boilerplate