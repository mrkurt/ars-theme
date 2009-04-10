<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/gaming/news/2007/09/fatal-fury-cyberball-land-on-the-xbox-live-arcade.php', 'http://kurt.staging.arstechnica.com/published/open-source/news/2007/08/shared-source-projects-accused-of-being-trashware.php'));//Category
      $_resource->date = false;
      $_resource->name = 'microsoft';
      $_resource->children = new ResourceList(array(
    'http://kurt.staging.arstechnica.com/published/microsoft/guides/', 'http://kurt.staging.arstechnica.com/published/microsoft/news/', 'http://kurt.staging.arstechnica.com/published/microsoft/reviews/', 
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 2;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/microsoft/';
      $_resource->archives = new ResourceList(array('http://kurt.staging.arstechnica.com/published/microsoft/2007/', ));
      $_resource->basename = 'microsoft';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/microsoft/';
      $_resource->journal_name = false;
      $_resource->id = 8;
      $_resource->type = 'Category';
      $_resource->parents = new ResourceList(array_reverse(array(
    
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>