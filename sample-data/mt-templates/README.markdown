This directory contains some rough Movable Type templates we use to generate PHP data files for use with our site engine.  The files are an ugly, tag based markup language that's specific to movable type.

These templates also build the actual classes that each data file is an instance of.  The class.builder.mtml file is included several times in the classes.mtml file to generate the PHP classes.

The resource.mtml file takes whatever is being request (an author, an entry, entry listing, etc) and generates a file containing an instance of the appropriate class, populated with all the necessary data to do the work.