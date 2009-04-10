#The Site Engine
This is an engine that consumes Movable Type produced content

##Internals
There are only two files at the moment, this will be fleshed out a bit further as necessary:

* data.inc.php
	This class is responsible for gathering data from the filesystem, putting it in a per request cache, and returning it as necessary
* render.inc.php
	This class is really the core of the template engine.  It receives instances of our MT data, chooses a template based on convention, and provides helpers for the template so it can do its thing.  
	
	Of particular note are the open\_layout and close\_layout functions.  These allow templates to "wrap" themselves in layouts.  There's an example in /app/templates/full/category.tmpl.php

##Templating "language"
We looked a number of PHP template packages (like Smarty) but ultimately decided to use vanilla PHP since PHP is... basically a templating language.

This system is heavily convention driven.  For instance, it chooses which template to render based on the type of data and whatever variant a user passes in.  When a user requests an entry URL, the engine finds and uses entry.tmpl.php.  When a dev requests an entry to include, and specifies the "listing" variant, the system renders entry.listing.tmpl.php.

There is a master \_helpers directory within the templates directory that gets mixed in to the render instance passed to each template.  This is where site specific formatting goes.  At the moment, we call $render->title($category) to return a human readable version of the category names, including date information (if any).

Other helpers include a nice $render->collection function that takes a list of resources, a template variant, and renders them each.  This is useful for the listing pages.

For times when we don't want a separate template to pass to the collection function, we simply use the built in PHP foreach function to iterate over our populated data.  We really miss Ruby's blocks, here, because it would be fantastic to pass a block to the standard $render->collection function and have it use that rather than an external template.