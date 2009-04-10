#Rendering Movable Type content
This is the rendering engine and Movable Type templates we're going to be using to run Ars Technica.

##Old and Busted
Movable Type generates static files (html, php, whatever) for various elements in the system, including entries, pages, authors, categories, and indexes.  This has its limits, and it's difficult to manage sites with 10s of thousands of entries this way.  Our first attempt, while functional, ended in a relatively unmaintainable mix of Movable Type's markup language, non-uniform PHP, and HTML all mixed into one.

##The new hotness
The new approach is designed to minimize the amount of rebuilds necessary to make layout changes, speed up rebuilds in general, and handle custom ad campaigns better.  Each MT element will end up in what we call a PHP data file, which is just an instance of a particular class with all relevant information in it.  These instances can include references (by URL) to other data files, which can be loaded as necessary to render any page.

###Other notes
We're in the midst of performance testing all of this with xcache, Lighttpd, and our virtualized environment.  We're somewhat concerned that the sheer number of includes per page and the size of each PHP data item might cause us problems.  Logically, it seems like it will work fine, but we'll be testing more.

###Directory Structure
* /app/ -> The site engine
	* /app/includes/ -> Site engine functionality
	* /apple/templates/ -> Templates used to render each bit of content
* /sample-data/ -> Stuff the engine uses
	* /sample-data/mt-templates/ -> The Movable Type Templates we're using
	* /sample-data/published/ -> Test published PHP data files