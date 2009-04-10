<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = new ResourceList(array());//Category
      $_resource->date = false;
      $_resource->name = 'hardware';
      $_resource->children = new ResourceList(array(
    'http://kurt.staging.arstechnica.com/published/hardware/guides/', 'http://kurt.staging.arstechnica.com/published/hardware/news/', 'http://kurt.staging.arstechnica.com/published/hardware/reviews/', 
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 0;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/hardware/';
      $_resource->archives = new ResourceList(array());
      $_resource->basename = 'hardware';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/hardware/';
      $_resource->journal_name = false;
      $_resource->id = 5;
      $_resource->type = 'Category';
      $_resource->parents = new ResourceList(array_reverse(array(
    
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>