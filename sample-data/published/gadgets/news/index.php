<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/apple/news/2007/08/two-more-iphone-ads-all-these-years-and-all-the-parts.php', 'http://kurt.staging.arstechnica.com/published/apple/news/2007/06/att-some-stores-will-have-more-iphones-than-others.php'));//Category
      $_resource->date = false;
      $_resource->name = 'Gadgets/News';
      $_resource->children = new ResourceList(array(
    
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 2;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/gadgets/news/';
      $_resource->archives = new ResourceList(array('http://kurt.staging.arstechnica.com/published/gadgets/news/2007/', ));
      $_resource->basename = 'news';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/gadgets/news/';
      $_resource->journal_name = false;
      $_resource->id = 22;
      $_resource->type = 'Category';
      $_resource->parents = new ResourceList(array_reverse(array(
    'http://kurt.staging.arstechnica.com/published/gadgets/'
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>