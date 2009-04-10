<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
      $_resource = new Entry();
      $_resource->excerpt = 'Congress has just overhauled the Freedom of Information Act, adding all sorts of useful new protections and provisions. One of the most substantial? It\'s now easier for Internet journalist to get at internal government documents without paying a cent.';
      $_resource->listing_image = false;
      $_resource->date = 1198159260;
      $_resource->primary_category = count($_resource->categories) > 0 ? $_resource->categories[0] : false;
      $_resource->body = '';
      $_resource->next_url = false;
    $_resource->next_url = 'http://kurt.staging.arstechnica.com/published/apple/news/2009/01/this-is-a-test-of-the-blah-blah-blah-system.php';
      $_resource->original_url = 'http://kurt.staging.arstechnica.com/published/tech-policy/news/2007/12/foia-reform-bloggers-are-journalists-too.php';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/tech-policy/news/2007/12/foia-reform-bloggers-are-journalists-too.php';
      $_resource->id = 34;
      $_resource->authors = array(
    array('http://kurt.staging.arstechnica.com/published/author/kurt-1/', 'Beer Bong'), array('http://kurt.staging.arstechnica.com/published/', 'Amadou Diallo'), array('http://kurt.staging.arstechnica.com/published/', 'Clint Ecker'), array('http://kurt.staging.arstechnica.com/published/', 'Doctor Who'), array('http://kurt.staging.arstechnica.com/published/', 'Beer')
   );
      $_resource->ad_category = false;
    $_resource->ad_category = 'itbiz_general_computing';
      $_resource->categories = array(
    'http://kurt.staging.arstechnica.com/published/news/', 'http://kurt.staging.arstechnica.com/published/tech-policy/news/', 'http://kurt.staging.arstechnica.com/published/tech-policy/'
    );
      $_resource->intro_image = false;
      $_resource->tags = array(
    
    );
      $_resource->title = 'FOIA reform: Bloggers are journalists, too!';
      $_resource->pages = array(
    '<iframe src="http://www.coveritlive.com/index2.php/option=com_altcaster/task=viewaltcast/altcast_code=869f678773/height=750/width=640"
                   scrolling="no" height="750px" width="640px" frameBorder ="0" ><a
                   href="http://www.coveritlive.com/mobile.php?option=com_mobile&task=viewaltcast&altcast_code=869f678773" >Test Event</a></iframe>
'
    );
      $_resource->discussion_url = 'http://episteme.arstechnica.com/eve/forums/a/tpc/f/174096756/m/511003606931';
      $_resource->previous_url = false;
    
      $_resource->previous_url = 'http://kurt.staging.arstechnica.com/published/security/news/2007/11/fbi-edu-security-partnership-trying-to-overcome-decades-of-mistrust.php';
      
  

    
    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>