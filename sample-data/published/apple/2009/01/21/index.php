<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/apple/guides/2009/01/i-am-testing-stuff-here8.php', 'http://kurt.staging.arstechnica.com/published/apple/news/2009/01/this-is-a-test-of-the-blah-blah-blah-system.php'));//Category-Daily
      $_resource->date = 1232517600;
      $_resource->name = 'apple';
      $_resource->children = new ResourceList(array(
    'http://kurt.staging.arstechnica.com/published/apple/guides/', 'http://kurt.staging.arstechnica.com/published/apple/news/', 'http://kurt.staging.arstechnica.com/published/apple/reviews/', 'http://kurt.staging.arstechnica.com/published/apple/iphone/', 'http://kurt.staging.arstechnica.com/published/apple/mwsf/', 
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 4;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/apple/';
      $_resource->archives = false;
      $_resource->basename = 'apple';
      $_resource->feed_url = 'http://feedburner.com/Ars/Apple';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/apple/2009/01/21/';
      $_resource->journal_name = 'Infinite Loop';
      $_resource->id = 1;
      $_resource->type = 'Category-Daily';
      $_resource->parents = new ResourceList(array_reverse(array(
    
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>