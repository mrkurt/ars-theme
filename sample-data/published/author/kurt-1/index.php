<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
    
    
      $_resource = new Author();
      $_resource->entries = new ResourceList(array('http://kurt.staging.arstechnica.com/published/apple/news/2009/01/asdf.php', 'http://kurt.staging.arstechnica.com/published/apple/news/2009/01/this-is-a-test-of-the-blah-blah-blah-system.php', 'http://kurt.staging.arstechnica.com/published/tech-policy/news/2007/12/foia-reform-bloggers-are-journalists-too.php', 'http://kurt.staging.arstechnica.com/published/security/news/2007/11/fbi-edu-security-partnership-trying-to-overcome-decades-of-mistrust.php', 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/11/soul-calibur-legends-goes-gold-to-much-skepticism.php', 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/10/lego-star-wars-wii-with-lightsaber-motion-control-to-debut-on-october-26.php', 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/10/virtual-console-monday-10-01-07-japanese-games-hit-the-virtual-console.php', 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/09/fatal-fury-cyberball-land-on-the-xbox-live-arcade.php', 'http://kurt.staging.arstechnica.com/published/science/news/2007/08/lipid-making-enzymes-work-in-a-test-tube-may-help-biofuels-production.php', 'http://kurt.staging.arstechnica.com/published/open-source/news/2007/08/shared-source-projects-accused-of-being-trashware.php', 'http://kurt.staging.arstechnica.com/published/apple/news/2007/08/two-more-iphone-ads-all-these-years-and-all-the-parts.php', 'http://kurt.staging.arstechnica.com/published/apple/news/2007/06/att-some-stores-will-have-more-iphones-than-others.php'));//Author
      $_resource->date = false;
      $_resource->name = 'Kurt';
      $_resource->display_name = 'Kurt';
      $_resource->image = false;
      $_resource->archives = new ResourceList(array('http://kurt.staging.arstechnica.com/published/author/kurt-1/2009/', 'http://kurt.staging.arstechnica.com/published/author/kurt-1/2007/', ));
      $_resource->basename = 'kurt_1';
      $_resource->email = 'kurt@arstechnica.com';
      $_resource->author_root_url = 'http://kurt.staging.arstechnica.com/published/author/kurt-1/';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/author/kurt-1/';
      $_resource->id = 1;
      $_resource->type = 'Author';
      
  
 
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>