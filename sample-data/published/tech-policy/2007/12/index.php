<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = false;
      $_resource->date = 1196488800;
      $_resource->name = 'tech_policy';
      $_resource->children = new ResourceList(array(
    'http://kurt.staging.arstechnica.com/published/tech-policy/guides/', 'http://kurt.staging.arstechnica.com/published/tech-policy/news/', 'http://kurt.staging.arstechnica.com/published/tech-policy/reviews/', 
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 2;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/tech-policy/';
      $_resource->archives = new ResourceList(array('http://kurt.staging.arstechnica.com/published/tech-policy/2007/12/20/', ));
      $_resource->basename = 'tech-policy';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/tech-policy/2007/12/';
      $_resource->journal_name = false;
      $_resource->id = 9;
      $_resource->type = 'Category-Monthly';
      $_resource->parents = new ResourceList(array_reverse(array(
    
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>