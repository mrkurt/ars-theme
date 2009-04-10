<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
      $_resource = new Entry();
      $_resource->excerpt = 'Clint is cool [What now!](http://google.com) Blah blah blah...';
      $_resource->listing_image = false;
    $_resource->listing_image = new Image();
      $_resource->listing_image->entry = false;
      $_resource->listing_image->caption = '';
      $_resource->listing_image->credit = '';
      $_resource->listing_image->url = 'http://kurt.staging.arstechnica.com/published/analog_vs_digital.jpg';
      $_resource->listing_image->credit_url = '';
      $_resource->listing_image->id = 21;
      $_resource->listing_image->sizes = array(
        '230' => '',
        '133' => '',
        '106' => '',
        '640' => ''
        );
      $_resource->listing_image->size = array(580, 326);
      $_resource->listing_image->mime_type = 'image/jpeg';
      
  

        $_resource->listing_image->entry = $_resource;
      $_resource->date = 1232551036;
      $_resource->primary_category = count($_resource->categories) > 0 ? $_resource->categories[0] : false;
      $_resource->body = 'Clint is cool

[What now!](http://google.com)

Blah blah blah';
      $_resource->next_url = false;
    $_resource->next_url = 'http://kurt.staging.arstechnica.com/published/apple/guides/2009/01/i-am-testing-stuff-here8.php';
      $_resource->original_url = 'http://kurt.staging.arstechnica.com/published/apple/news/2009/01/this-is-a-test-of-the-blah-blah-blah-system.php';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/apple/news/2009/01/this-is-a-test-of-the-blah-blah-blah-system.php';
      $_resource->id = 46;
      $_resource->authors = array(
    array('http://kurt.staging.arstechnica.com/published/author/kurt-1/', 'Kurt'), array('http://kurt.staging.arstechnica.com/published/', 'Scott'), array('http://kurt.staging.arstechnica.com/published/', 'Keith')
   );
      $_resource->ad_category = false;
    $_resource->ad_category = 'itbiz_smb';
      $_resource->categories = array(
    'http://kurt.staging.arstechnica.com/published/apple/news/', 'http://kurt.staging.arstechnica.com/published/apple/iphone/apps/', 'http://kurt.staging.arstechnica.com/published/business/smb-resources/', 'http://kurt.staging.arstechnica.com/published/news/', 'http://kurt.staging.arstechnica.com/published/apple/'
    );
      $_resource->intro_image = false;
      $_resource->tags = array(
    'App Store', 'iPhone'
    );
      $_resource->title = 'This is a test of the blah blah blah system!';
      $_resource->pages = array(
    '<p>Now with extended body action</p>'
    );
      $_resource->discussion_url = 'http://episteme.arstechnica.com/eve/forums?a=dl&f=111003685931&x_id=mtid46';
      $_resource->previous_url = false;
    
      $_resource->previous_url = 'http://kurt.staging.arstechnica.com/published/tech-policy/news/2007/12/foia-reform-bloggers-are-journalists-too.php';
      
  

    
    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>