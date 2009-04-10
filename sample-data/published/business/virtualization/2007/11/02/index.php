<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
      $_resource = new Category();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/gaming/news/2007/11/soul-calibur-legends-goes-gold-to-much-skepticism.php'));//Category-Daily
      $_resource->date = 1193983200;
      $_resource->name = 'Virtualization';
      $_resource->children = new ResourceList(array(
    
    ));
      $_resource->ad_category = 'ms_virtualization';
      $_resource->entry_count = 1;
      $_resource->category_root_url = 'http://kurt.staging.arstechnica.com/published/business/virtualization/';
      $_resource->archives = false;
      $_resource->basename = 'virtualization';
      $_resource->feed_url = false;
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/business/virtualization/2007/11/02/';
      $_resource->journal_name = false;
      $_resource->id = 77;
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