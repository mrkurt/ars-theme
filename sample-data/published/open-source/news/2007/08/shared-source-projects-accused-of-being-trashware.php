<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
      $_resource = new Entry();
      $_resource->excerpt = 'An article at eWeek accuses open source projects licensed under Microsoft\'s shared source licenses of being trashware, but is that assessment really fair?';
      $_resource->listing_image = false;
      $_resource->date = 1187965560;
      $_resource->primary_category = count($_resource->categories) > 0 ? $_resource->categories[0] : false;
      $_resource->body = '<img src="http://media.arstechnica.com/journals/linux.media/codeplex_logo.png" class="Bordered ImageRight" />
<p>Steven Vaughan-Nichols over at <i>eWeek</i> is <a href="http://www.eweek.com/article2/0,1895,2174730,00.asp">convinced</a> that open source projects released under Microsoft\'s shared source licenses are crap. It\'s not hard to understand how he arrives at this conclusion. He directs our attention to the 25 most active open source projects at Microsoft\'s CodePlex site and points out that they aren\'t really all that active or interesting.
</p><p>He\'s not exaggerating; the top 25 at CodePlex really do fail to impress. Although I agree with his assessment in that respect, I\'m not sure if its fair to make judgements about all of the software available under Microsoft\'s permissive and community licenses on the basis of what shows up at the top of the list at CodePlex--especially this early in Microsoft\'s efforts to build its open source ecosystem.
</p><p>"Think of some of the most popular open-source programs. I\'ll bet you thought of at least one of these: Linux, Firefox, Thunderbird and Apache. Now, name some of Microsoft\'s most active open-source projects," writes Vaughan-Nichols. Not a single one of those open source projects is in the list of most active projects at Sourceforge. They are all hosted at other sites where they have their own collaborative development infrastructure. Look at some of the top projects at Sourceforge and tell me if you seriously think that those are representative of all open source software. Gimp-Print and SquirrelMail? Ironically, VMukti&mdash;one of the programs from the CodePlex top list that Vaughn-Nichols dismisses because it is Windows-only&mdash;is actually number 6 in SourceForge\'s top ten most active projects for the past week, and is distributed under the GPL, not one of Microsoft\'s shared source licenses.
</p><p>My point here isn\'t to attack the conclusions that Vaughan-Nichols draws from his analysis. I don\'t question his critical assessment of Microsoft\'s absurdly inconsistent attack/embrace strategy, and I agree that Microsoft\'s inane patent allegations make it difficult to give the company the benefit of the doubt. My point is just that CodePlex isn\'t a fair metric for Microsoft\'s shared source licenses. Personally, I think that if you do a close reading of the licenses themselves, it seems pretty clear that Microsoft\'s primary goal is to create an open source ecosystem around development infrastructure that can also be used by proprietary and commercial software, much like the LGPL does. Microsoft\'s strategy with the shared source licenses is about using open source principles to incubate and promote adoption of .NET development technologies. Obviously, this doesn\'t preclude the possibility that Microsoft could attempt to use these licenses to create confusion in the market or create the false appearance that the company is embracing open source, but I think that there is more to it than that.
</p><p>"Show me something real and open-source, Microsoft, then maybe I\'ll listen to your open-source claims," writes Vaughan-Nichols. That\'s a fair request. The bottom line is that the only way to really determine whether or not Microsoft\'s shared source licenses provide something of tangible value to the open source software community will be whether or not existing mainstream open source software projects can adopt and use code released under those licenses, and looking at CodePlex doesn\'t tell you that.
</p><p>Guess what? Firefox developers are using Microsoft\'s <a href="http://arstechnica.com/news.ars/post/20070430-microsoft-reveals-dynamic-language-runtime-for-net.html">Dynamic Language Runtime</a>&mdash;which is licensed under the shared source permissive license&mdash;as the basis for the <a href="http://arstechnica.com/journals/linux.ars/2007/07/27/firefox-to-support-scripting-with-ironpython-and-ironruby">IronMonkey project</a>, which aims to add IronPython and IronRuby scripting support to <a href="http://arstechnica.com/news.ars/post/20061107-8170.html">Tamarin</a>, the browser\'s next-generation ECMAScript virtual machine. I\'d say that a mainstream open source program like Firefox leveraging Microsoft\'s DLR is a pretty strong validation of Microsoft\'s permissive license.
</p>';
      $_resource->next_url = false;
    $_resource->next_url = 'http://kurt.staging.arstechnica.com/published/science/news/2007/08/lipid-making-enzymes-work-in-a-test-tube-may-help-biofuels-production.php';
      $_resource->original_url = 'http://kurt.staging.arstechnica.com/published/open-source/news/2007/08/shared-source-projects-accused-of-being-trashware.php';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/open-source/news/2007/08/shared-source-projects-accused-of-being-trashware.php';
      $_resource->id = 39;
      $_resource->authors = array(
    array('http://kurt.staging.arstechnica.com/published/author/kurt-1/', 'Kurt')
   );
      $_resource->ad_category = false;
    $_resource->ad_category = 'itbiz_general_computing';
      $_resource->categories = array(
    'http://kurt.staging.arstechnica.com/published/microsoft/news/', 'http://kurt.staging.arstechnica.com/published/news/', 'http://kurt.staging.arstechnica.com/published/open-source/news/', 'http://kurt.staging.arstechnica.com/published/software/news/', 'http://kurt.staging.arstechnica.com/published/microsoft/', 'http://kurt.staging.arstechnica.com/published/open-source/', 'http://kurt.staging.arstechnica.com/published/software/'
    );
      $_resource->intro_image = false;
      $_resource->tags = array(
    
    );
      $_resource->title = 'Shared source: don\'t throw the babysteps out with the bathwater';
      $_resource->pages = array(
    'Error: no part found'
    );
      $_resource->discussion_url = 'http://episteme.arstechnica.com/eve/forums?a=dl&f=111003685931&x_id=mtid39';
      $_resource->previous_url = false;
    
      $_resource->previous_url = 'http://kurt.staging.arstechnica.com/published/apple/news/2007/08/two-more-iphone-ads-all-these-years-and-all-the-parts.php';
      
  

    
    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>