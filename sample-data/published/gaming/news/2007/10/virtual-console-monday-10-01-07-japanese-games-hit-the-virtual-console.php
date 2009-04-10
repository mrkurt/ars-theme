<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
      $_resource = new Entry();
      $_resource->excerpt = 'With the release of the obscure <i>Super Mario Bros.: The Lost Levels</i> and the previously import-only N64 game <i>Sin and Punishment</i>, the Virtual Console goes after hardcore gamers. ';
      $_resource->listing_image = false;
      $_resource->date = 1191230728;
      $_resource->primary_category = count($_resource->categories) > 0 ? $_resource->categories[0] : false;
      $_resource->body = '<p>
Nintendo has something of a surprise for us this week: two games that were never released outside of Japan. This is a departure from the usual weekly business of giving us games we&#39;ve most likely already played or heard about; these games may be news to younger gamers or non-obsessive Mario fans. Let&#39;s see what we have:&nbsp;
</p>
<p>
<img class="ImageRight Bordered" src="http://media.arstechnica.com/journals/thumbs.media/Smb2j1.png" /><strong><em>Super Mario Bros.: The Lost Levels </em>(NES, 600 point or $6)&nbsp;</strong>
</p>
<p>
This was <em>Super Mario Bros. 2</em> in Japan, but it was deemed too hard for American audiences. In this game there is no two-player option, but the player can control either Mario or Luigi, who now control differently. This game was previously available in the Super Nintendo collection <em>Super Mario All-Stars</em>, but this is a great way to play a <em>Mario Bros.</em> variations that may be obscure to many people. A very neat addition to the Virtual Console. &nbsp;
</p>
<p>
<strong><em>Sin and Punishment</em> (N64, 1200 point or $12)&nbsp;</strong>
</p>
<p>
Pretty expensive for a Virtual Console game, but when you start to talk about Treasure shooters that you have to import, downloading a game like this directly for $12 starts to sound like a steal. From the people who brought you <em>Radiant Silvergun</em> and<em> Ikaruga</em>, this is a rail-based shooter where your main goal is to dodge the incoming bullets while hopefully somehow finding the time to fire back. While not the prettiest game, this still features the hard-as-nails Treasure gameplay and should satisfy shooter fans. If nothing else, it&#39;s a game that North America has yet to have access to, and now anyone can play it. That&#39;s progress.&nbsp;
</p>
<p>
Not a bad Monday, even with only two games. I hope Nintendo reaches back in the vaults of their systems more often for games like these; while collectors may be annoyed by how easy these games can now be bought, the mainstream player now has more choices than ever when it comes to playing games they&#39;ve missed the first time around. &nbsp;
</p>
';
      $_resource->next_url = false;
    $_resource->next_url = 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/10/lego-star-wars-wii-with-lightsaber-motion-control-to-debut-on-october-26.php';
      $_resource->original_url = 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/10/virtual-console-monday-10-01-07-japanese-games-hit-the-virtual-console.php';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/10/virtual-console-monday-10-01-07-japanese-games-hit-the-virtual-console.php';
      $_resource->id = 22;
      $_resource->authors = array(
    array('http://kurt.staging.arstechnica.com/published/author/kurt-1/', 'Kurt')
   );
      $_resource->ad_category = false;
      $_resource->categories = array(
    'http://kurt.staging.arstechnica.com/published/gaming/news/'
    );
      $_resource->intro_image = false;
      $_resource->tags = array(
    
    );
      $_resource->title = 'Virtual Console Monday (10-01-07): Japanese games hit the Virtual Console!';
      $_resource->pages = array(
    'Error: no part found'
    );
      $_resource->discussion_url = '';
      $_resource->previous_url = false;
    
      $_resource->previous_url = 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/09/fatal-fury-cyberball-land-on-the-xbox-live-arcade.php';
      
  

    
    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>