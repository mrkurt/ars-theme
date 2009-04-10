<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/security/news/2007/11/fbi-edu-security-partnership-trying-to-overcome-decades-of-mistrust.php'));//Category
      $_resource->date = false;
      $_resource->name = 'security';
      $_resource->children = new ResourceList(array(
    'http://kurt.staging.arstechnica.com/published/security/guides/', 'http://kurt.staging.arstechnica.com/published/security/news/', 'http://kurt.staging.arstechnica.com/published/security/reviews/', 
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 1;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/security/';
      $_resource->archives = new ResourceList(array('http://kurt.staging.arstechnica.com/published/security/2007/', ));
      $_resource->basename = 'security';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/security/';
      $_resource->journal_name = false;
      $_resource->id = 12;
      $_resource->type = 'Category';
      $_resource->parents = new ResourceList(array_reverse(array(
    
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>