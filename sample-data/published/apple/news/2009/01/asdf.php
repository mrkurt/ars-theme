<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
      $_resource = new Entry();
      $_resource->excerpt = '';
      $_resource->listing_image = false;
      $_resource->date = 1232685814;
      $_resource->primary_category = count($_resource->categories) > 0 ? $_resource->categories[0] : false;
      $_resource->body = ' ';
      $_resource->next_url = false;
      $_resource->original_url = 'http://kurt.staging.arstechnica.com/published/apple/news/2009/01/asdf.php';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/apple/news/2009/01/asdf.php';
      $_resource->id = 48;
      $_resource->authors = array(
    array('http://kurt.staging.arstechnica.com/published/author/kurt-1/', 'Kurt')
   );
      $_resource->ad_category = false;
    $_resource->ad_category = 'itbiz_general_computing';
      $_resource->categories = array(
    'http://kurt.staging.arstechnica.com/published/apple/news/', 'http://kurt.staging.arstechnica.com/published/news/', 'http://kurt.staging.arstechnica.com/published/apple/'
    );
      $_resource->intro_image = false;
      $_resource->tags = array(
    
    );
      $_resource->title = 'asdf OMG DEAD BIRDS ARE SO SAD AND I DON"T WANT TO LOOK AT THEM';
      $_resource->pages = array(
    'Error: no part found'
    );
      $_resource->discussion_url = '';
      $_resource->previous_url = false;
    
      $_resource->previous_url = 'http://kurt.staging.arstechnica.com/published/apple/guides/2009/01/i-am-testing-stuff-here8.php';
      
  

    
    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>