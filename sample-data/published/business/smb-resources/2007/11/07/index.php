<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/security/news/2007/11/fbi-edu-security-partnership-trying-to-overcome-decades-of-mistrust.php'));//Category-Daily
      $_resource->date = 1194415200;
      $_resource->name = 'Infotech / SMB Resources';
      $_resource->children = new ResourceList(array(
    
    ));
      $_resource->ad_category = 'small_business';
      $_resource->entry_count = 3;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/business/smb-resources/';
      $_resource->archives = false;
      $_resource->basename = 'smb-resources';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/business/smb-resources/2007/11/07/';
      $_resource->journal_name = false;
      $_resource->id = 75;
      $_resource->type = 'Category-Daily';
      $_resource->parents = new ResourceList(array_reverse(array(
    'http://kurt.staging.arstechnica.com/published/business/'
    )));
      
  

    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>