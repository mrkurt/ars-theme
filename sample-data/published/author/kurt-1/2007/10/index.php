<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
    
      $_resource = new Author();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/gaming/news/2007/10/lego-star-wars-wii-with-lightsaber-motion-control-to-debut-on-october-26.php', 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/10/virtual-console-monday-10-01-07-japanese-games-hit-the-virtual-console.php'));//Author-Monthly
      $_resource->date = 1191218400;
      $_resource->name = 'Kurt';
      $_resource->display_name = 'Kurt';
      $_resource->image = false;
      $_resource->archives = false;
      $_resource->basename = 'kurt_1';
      $_resource->email = 'kurt@arstechnica.com';
      $_resource->author_root_url = 'http://kurt.staging.arstechnica.com/published/author/kurt-1/';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/author/kurt-1/2007/10/';
      $_resource->id = 1;
      $_resource->type = 'Author-Monthly';
      
  
 
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>