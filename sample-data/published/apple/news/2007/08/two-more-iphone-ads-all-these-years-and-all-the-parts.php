<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
      $_resource = new Entry();
      $_resource->excerpt = 'Two new iPhone ads have been posted to Apple\'s website, which once again focus on the many uses of the iPhone. Who knew you\'d ever need all those parts of the Internet?';
      $_resource->listing_image = false;
      $_resource->date = 1187275093;
      $_resource->primary_category = count($_resource->categories) > 0 ? $_resource->categories[0] : false;
      $_resource->body = '<p>
<img class="ImageRight Bordered" src="http://media.arstechnica.com/journals/apple.media/200/iphonead_alltheseyears.png" />Hey guys, what&#39;s goin&#39; on in this Apple journal today? 
</p>
<p>
Seriously though, news is pokey and all of our writers are apparently dead, and that&#39;s why I&#39;m here to tell you about two new iPhone ads that have been posted to Apple&#39;s website. <a href="http://www.apple.com/iphone/ads/ad8/">All the Parts</a> and <a href="http://www.apple.com/iphone/ads/ad9/">All These Years</a> focus, naturally, on the many functions of the iPhone. They follow the same format as the previously-debuted iPhone ads, with the hand and the voice making up the majority of the instructional content. 
</p>
<p>
All The Parts emphasizes that you never really know which part of the Internet you need when you&#39;re out and about, which is why the iPhone is great: it has all the parts! All These Years, on the other hand, addresses a sentiment that curmudgeonly phone users (such as our own Nate Anderson) keep saying: &quot;I&#39;ve gone this long without all that stuff, why do I need it now!&quot; Apple understands and acknowledges this&mdash;sure, you&#39;ve gone all these years without all this cool stuff, but why?&nbsp;
</p>
<p>
Both can be found on Apple&#39;s website. Have fun. &nbsp;
</p>';
      $_resource->next_url = false;
    $_resource->next_url = 'http://kurt.staging.arstechnica.com/published/open-source/news/2007/08/shared-source-projects-accused-of-being-trashware.php';
      $_resource->original_url = 'http://kurt.staging.arstechnica.com/published/apple/news/2007/08/two-more-iphone-ads-all-these-years-and-all-the-parts.php';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/apple/news/2007/08/two-more-iphone-ads-all-these-years-and-all-the-parts.php';
      $_resource->id = 11;
      $_resource->authors = array(
    array('http://kurt.staging.arstechnica.com/published/author/kurt-1/', 'Kurt')
   );
      $_resource->ad_category = false;
    $_resource->ad_category = 'itbiz_general_computing';
      $_resource->categories = array(
    'http://kurt.staging.arstechnica.com/published/apple/news/', 'http://kurt.staging.arstechnica.com/published/gadgets/news/', 'http://kurt.staging.arstechnica.com/published/news/', 'http://kurt.staging.arstechnica.com/published/apple/', 'http://kurt.staging.arstechnica.com/published/gadgets/'
    );
      $_resource->intro_image = false;
      $_resource->tags = array(
    
    );
      $_resource->title = 'Two more iPhone ads: All These Years and All the Parts';
      $_resource->pages = array(
    'Error: no part found'
    );
      $_resource->discussion_url = 'http://episteme.arstechnica.com/eve/forums?a=dl&f=111003685931&x_id=mtid11';
      $_resource->previous_url = false;
    
      $_resource->previous_url = 'http://kurt.staging.arstechnica.com/published/apple/news/2007/06/att-some-stores-will-have-more-iphones-than-others.php';
      
  

    
    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>