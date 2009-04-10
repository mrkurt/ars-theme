<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/gaming/news/2007/11/soul-calibur-legends-goes-gold-to-much-skepticism.php', 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/09/fatal-fury-cyberball-land-on-the-xbox-live-arcade.php'));//Category
      $_resource->date = false;
      $_resource->name = 'gaming';
      $_resource->children = new ResourceList(array(
    'http://kurt.staging.arstechnica.com/published/gaming/guides/', 'http://kurt.staging.arstechnica.com/published/gaming/news/', 'http://kurt.staging.arstechnica.com/published/gaming/reviews/', 
    ));
      $_resource->ad_category = false;
      $_resource->entry_count = 2;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/gaming/';
      $_resource->archives = new ResourceList(array('http://kurt.staging.arstechnica.com/published/gaming/2007/', ));
      $_resource->basename = 'gaming';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/gaming/';
      $_resource->journal_name = false;
      $_resource->id = 2;
      $_resource->type = 'Category';
      $_resource->parents = new ResourceList(array_reverse(array(
    
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>