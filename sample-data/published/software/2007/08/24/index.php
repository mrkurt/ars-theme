<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/open-source/news/2007/08/shared-source-projects-accused-of-being-trashware.php'));//Category-Daily
      $_resource->date = 1187935200;
      $_resource->name = 'software';
      $_resource->children = new ResourceList(array(
    'http://kurt.staging.arstechnica.com/published/software/guides/', 'http://kurt.staging.arstechnica.com/published/software/news/', 'http://kurt.staging.arstechnica.com/published/software/reviews/', 
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 1;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/software/';
      $_resource->archives = false;
      $_resource->basename = 'software';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/software/2007/08/24/';
      $_resource->journal_name = false;
      $_resource->id = 11;
      $_resource->type = 'Category-Daily';
      $_resource->parents = new ResourceList(array_reverse(array(
    
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>