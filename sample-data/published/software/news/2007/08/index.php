<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = false;
      $_resource->date = 1185948000;
      $_resource->name = 'Software/News';
      $_resource->children = new ResourceList(array(
    
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 1;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/software/news/';
      $_resource->archives = new ResourceList(array('http://kurt.staging.arstechnica.com/published/software/news/2007/08/24/', ));
      $_resource->basename = 'news';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/software/news/2007/08/';
      $_resource->journal_name = false;
      $_resource->id = 46;
      $_resource->type = 'Category-Monthly';
      $_resource->parents = new ResourceList(array_reverse(array(
    'http://kurt.staging.arstechnica.com/published/software/'
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>