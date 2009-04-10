<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
    
      $_resource = new Author();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/apple/guides/2009/01/i-am-testing-stuff-here8.php'));//Author-Monthly
      $_resource->date = 1230789600;
      $_resource->name = 'staff';
      $_resource->display_name = 'Ars Staff';
      $_resource->image = false;
      $_resource->archives = false;
      $_resource->basename = 'ars_staff';
      $_resource->email = 'staff@arstechnica.com';
      $_resource->author_root_url = 'http://kurt.staging.arstechnica.com/published/author/ars-staff/';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/author/ars-staff/2009/01/';
      $_resource->id = 3;
      $_resource->type = 'Author-Monthly';
      
  
 
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>