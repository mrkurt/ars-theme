<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
      $_resource = new Entry();
      $_resource->excerpt = 'The unproven, though wholly unique title <em>Soul Calibur Legends</em> has gone gold and will hit the Wii on November 20.';
      $_resource->listing_image = false;
      $_resource->date = 1194000180;
      $_resource->primary_category = count($_resource->categories) > 0 ? $_resource->categories[0] : false;
      $_resource->body = '<p>
<img class="ImageRight Bordered" src="http://media.arstechnica.com/journals/thumbs.media/SoulCaliburLegends.jpg" /> Fighting fans awaiting a beat-&#39;em-up fix on the Wii should be glad to hear that <em>Soul Calibur Legends</em>, the unique 3D action-adventure game set in the <a href="http://arstechnica.com/journals/thumbs.ars/2007/06/26/soul-calibur-iv-to-offer-online-multiplayer"><em>Soul Calibur</em> universe</a>, has gone gold, and will be available exclusively for the Wii on November 20. 
</p>
<p>
<em>Soul Calibur Legends</em> has had a rather interesting lifespan since it was first announced back in May. Originally, the thought of&nbsp;using&nbsp;the IP solely for the Wii was a tantalizing one for fans of the series, myself included. However, as the game slowly became <a href="http://arstechnica.com/journals/thumbs.ars/2007/07/05/namco-bandai-shows-off-its-2007-e3-lineup">available at trade shows</a>,&nbsp;negative press began to arise. The controls were reportedly spotty, the graphics subpar, and the production values not befitting&nbsp;the franchise. These apprehensions have persisted; gold reports are being coupled <a href="http://www.joystiq.com/2007/11/01/questionable-soulcalibur-legends-for-wii-goes-gold/">with discouraging remarks</a>.
</p>
<p>
We never did get the chance to spend any quality time with the title this year, so your guess is as good as ours as to whether this will be a game worth owning. Judging by the title&#39;s story, though&mdash;which takes place &quot;between the events of <em>Soul Blade</em> and Soul <em>Calibur</em>&quot; and &quot;follows the exploits of Siegfried and other familiar characters from the series as they find themselves on a quest for the ultimate power&quot;&mdash;there could be some merit&nbsp;to the game&nbsp;for true fans of the franchise.
</p>
';
      $_resource->next_url = false;
    $_resource->next_url = 'http://kurt.staging.arstechnica.com/published/security/news/2007/11/fbi-edu-security-partnership-trying-to-overcome-decades-of-mistrust.php';
      $_resource->original_url = 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/11/soul-calibur-legends-goes-gold-to-much-skepticism.php';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/11/soul-calibur-legends-goes-gold-to-much-skepticism.php';
      $_resource->id = 5;
      $_resource->authors = array(
    array('http://kurt.staging.arstechnica.com/published/author/kurt-1/', 'Kurt')
   );
      $_resource->ad_category = false;
    $_resource->ad_category = 'itbiz_general_computing';
      $_resource->categories = array(
    'http://kurt.staging.arstechnica.com/published/gaming/news/', 'http://kurt.staging.arstechnica.com/published/news/', 'http://kurt.staging.arstechnica.com/published/business/virtualization/', 'http://kurt.staging.arstechnica.com/published/gaming/'
    );
      $_resource->intro_image = false;
      $_resource->tags = array(
    'virtualization'
    );
      $_resource->title = 'Soul Calibur Legends goes gold to much skepticism';
      $_resource->pages = array(
    'Error: no part found'
    );
      $_resource->discussion_url = '';
      $_resource->previous_url = false;
    
      $_resource->previous_url = 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/10/lego-star-wars-wii-with-lightsaber-motion-control-to-debut-on-october-26.php';
      
  

    
    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>