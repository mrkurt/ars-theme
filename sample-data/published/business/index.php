<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = new ResourceList(array());//Category
      $_resource->date = false;
      $_resource->name = 'Business';
      $_resource->children = new ResourceList(array(
    'http://kurt.staging.arstechnica.com/published/business/guides/', 'http://kurt.staging.arstechnica.com/published/business/news/', 'http://kurt.staging.arstechnica.com/published/business/reviews/', 'http://kurt.staging.arstechnica.com/published/business/smb-resources/', 'http://kurt.staging.arstechnica.com/published/business/virtualization/', 
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 0;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/business/';
      $_resource->archives = new ResourceList(array());
      $_resource->basename = 'business';
      $_resource->feed_url = 'http://feeds.arstechnica.com/arstechnica/business/';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/business/';
      $_resource->journal_name = false;
      $_resource->id = 6;
      $_resource->type = 'Category';
      $_resource->parents = new ResourceList(array_reverse(array(
    
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>