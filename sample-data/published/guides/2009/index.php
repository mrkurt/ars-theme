<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = false;
      $_resource->date = 1230789600;
      $_resource->name = 'Guides';
      $_resource->children = new ResourceList(array(
    
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 1;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/guides/';
      $_resource->archives = new ResourceList(array('http://kurt.staging.arstechnica.com/published/guides/2009/01/', ));
      $_resource->basename = 'guides';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/guides/2009/';
      $_resource->journal_name = false;
      $_resource->id = 67;
      $_resource->type = 'Category-Yearly';
      $_resource->parents = new ResourceList(array_reverse(array(
    
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>