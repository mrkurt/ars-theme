<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
    
      $_resource = new Author();
      $_resource->entries = false;
      $_resource->date = 1230789600;
      $_resource->name = 'Kurt';
      $_resource->display_name = 'Kurt';
      $_resource->image = false;
      $_resource->archives = new ResourceList(array('http://kurt.staging.arstechnica.com/published/author/kurt-1/2009/01/', ));
      $_resource->basename = 'kurt_1';
      $_resource->email = 'kurt@arstechnica.com';
      $_resource->author_root_url = 'http://kurt.staging.arstechnica.com/published/author/kurt-1/';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/author/kurt-1/2009/';
      $_resource->id = 1;
      $_resource->type = 'Author-Yearly';
      
  
 
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>