<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
    
      $_resource = new Author();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/science/news/2007/08/lipid-making-enzymes-work-in-a-test-tube-may-help-biofuels-production.php', 'http://kurt.staging.arstechnica.com/published/open-source/news/2007/08/shared-source-projects-accused-of-being-trashware.php', 'http://kurt.staging.arstechnica.com/published/apple/news/2007/08/two-more-iphone-ads-all-these-years-and-all-the-parts.php'));//Author-Monthly
      $_resource->date = 1185948000;
      $_resource->name = 'Kurt';
      $_resource->display_name = 'Kurt';
      $_resource->image = false;
      $_resource->archives = false;
      $_resource->basename = 'kurt_1';
      $_resource->email = 'kurt@arstechnica.com';
      $_resource->author_root_url = 'http://kurt.staging.arstechnica.com/published/author/kurt-1/';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/author/kurt-1/2007/08/';
      $_resource->id = 1;
      $_resource->type = 'Author-Monthly';
      
  
 
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>