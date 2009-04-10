<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
      $_resource = new Entry();
      $_resource->excerpt = 'asdfasdfasdfasdfasdfasdfasdf asdfasdf asdf asdf asdf asdf asdf asdf /cdn/ asdfasdf...';
      $_resource->listing_image = false;
    $_resource->listing_image = new Image();
      $_resource->listing_image->entry = false;
      $_resource->listing_image->caption = '';
      $_resource->listing_image->credit = '';
      $_resource->listing_image->url = 'http://kurt.staging.arstechnica.com/published/cdn/olpc_xo%5B1%5D.jpg';
      $_resource->listing_image->credit_url = '';
      $_resource->listing_image->id = 23;
      $_resource->listing_image->sizes = array(
        '230' => '',
        '133' => '',
        '106' => '',
        '640' => ''
        );
      $_resource->listing_image->size = array(1024, 576);
      $_resource->listing_image->mime_type = 'image/jpeg';
      
  

        $_resource->listing_image->entry = $_resource;
      $_resource->date = 1232573157;
      $_resource->primary_category = count($_resource->categories) > 0 ? $_resource->categories[0] : false;
      $_resource->body = 'asdfasdfasdfasdfasdfasdfasdf
asdfasdf
asdf
asdf

<span class="mt-enclosure mt-enclosure-image" style="display: inline;"><img alt="analog_vs_digital-thumb-small.jpg" src="http://kurt.staging.arstechnica.com/published/cdn/analog_vs_digital-thumb-small.jpg" width="230" height="129" class="mt-image-none" style="" /></span>

asdf
asdf
asdf
asdf

/cdn/

asdfasdf';
      $_resource->next_url = false;
    $_resource->next_url = 'http://kurt.staging.arstechnica.com/published/apple/news/2009/01/asdf.php';
      $_resource->original_url = 'http://kurt.staging.arstechnica.com/published/apple/reviews/2009/01/i-am-testing-stuff-there.php';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/apple/guides/2009/01/i-am-testing-stuff-here8.php';
      $_resource->id = 47;
      $_resource->authors = array(
    array('http://kurt.staging.arstechnica.com/published/author/ars-staff/', 'Kurtz Mackaby'), array('http://kurt.staging.arstechnica.com/published/', 'Doctor Who'), array('http://kurt.staging.arstechnica.com/published/', 'Clint Ecker')
   );
      $_resource->ad_category = false;
    $_resource->ad_category = 'itbiz_smb';
      $_resource->categories = array(
    'http://kurt.staging.arstechnica.com/published/apple/guides/', 'http://kurt.staging.arstechnica.com/published/apple/iphone/apps/', 'http://kurt.staging.arstechnica.com/published/guides/', 'http://kurt.staging.arstechnica.com/published/business/smb-resources/', 'http://kurt.staging.arstechnica.com/published/apple/mwsf/', 'http://kurt.staging.arstechnica.com/published/apple/'
    );
      $_resource->intro_image = false;
      $_resource->tags = array(
    'App Store', 'iPhone', 'MWSF'
    );
      $_resource->title = 'I am testing some stuff there!';
      $_resource->pages = array(
    'Error: no part found'
    );
      $_resource->discussion_url = 'http://episteme.arstechnica.com/eve/forums?a=dl&f=111003685931&x_id=mtid47';
      $_resource->previous_url = false;
    
      $_resource->previous_url = 'http://kurt.staging.arstechnica.com/published/apple/news/2009/01/this-is-a-test-of-the-blah-blah-blah-system.php';
      
  

    
    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>