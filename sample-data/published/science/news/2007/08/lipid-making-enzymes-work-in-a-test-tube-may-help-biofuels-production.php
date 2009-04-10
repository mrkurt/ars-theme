<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
      $_resource = new Entry();
      $_resource->excerpt = 'Researchers identify a key enzyme needed for creating lipids, and get the process to work in a test tube.  Mixing and matching components allow them to make hydrocarbons of custom lengths.';
      $_resource->listing_image = false;
      $_resource->date = 1187970087;
      $_resource->primary_category = count($_resource->categories) > 0 ? $_resource->categories[0] : false;
      $_resource->body = '<p>
Most of us don&#39;t give much thought to lipids except in terms of their being a component of fat (and best avoided, accordingly).  But they&#39;re essential components of all membranes in cells, and specialized versions of lipids mediate cell signaling and protein targeting.  The many roles they adopt mean that cells have to be able to make lipids of different sizes, but we&#39;ve not understood how the cell manages that trick.  But <a href="http://www.sciencedirect.com/science?_ob=ArticleURL&amp;_udi=B6WSN-4PGR38D-H&amp;_user=10&amp;_coverDate=08%2F24%2F2007&amp;_rdoc=15&amp;_fmt=summary&amp;_orig=browse&amp;_srch=doc-info(%23toc%237051%232007%23998699995%23666483%23FLA%23display%23Volume)&amp;_cdi=7051&amp;_sort=d&amp;_docanchor=&amp;_ct=23&amp;_acct=C000050221&amp;_version=1&amp;_urlVersion=0&amp;_userid=10&amp;md5=a5718034b8e08a202f5081819d416e05">a paper</a> that appears in <em>Cell</em> reports on new findings that have allowed researchers to produce custom-length lipids in a test tube.
</p>
<p>
Lipids are deceptively simple molecules, consisting of an acetyl group followed by an chain of carbon and hydrogen atoms.  They&#39;re manufactured in an equally simple manner, with two carbon atoms at a time being tacked on to the end of the growing chain.  But each addition goes through a cycle of four enzyme-catalyzed reactions, and not all of those enzymes had been identified.  Meanwhile, a key part of the process, the step that stops the additions once a specific length has been reached, remained a mystery.
</p>
<p>
As with many scientific advances, this one came when the researchers were studying something else; in the process, they stumbled on to a gene that was key to one of the catalytic steps in lipid production.  With the protein made by that gene in hand (or, more accurately, in tube), they were able to get the complete lipid reaction to go using isolated proteins.  More significantly, they were able to swap in different versions of a single protein and found that the length of the final product would vary depending on which version was present.
</p>
<p>
The authors then performed what&#39;s called a &quot;domain swap&quot; experiment:  they took parts of two of these versions and fused them into a single protein in order to determine which part was the key to determining lipid length.  Once they identified the key region, they were able to make lipids with 16, 18, 22, and 30 carbon atoms simply by slightly changing the protein sequence.  In short, they could tweak a single protein, and produce a hydrocarbon with a length of their choice.
</p>
<p>
The authors present a number of cases where having a customized lipid might be advantageous, but it almost seems as if they&#39;re avoiding the obvious.  With the current focus on decreasing our reliance on petroleum and the possibility that biofuels could play a role in our future, the ability to make custom sized hydrocarbons might prove to be very valuable.  Lipids might not be ideal for every use&mdash;they still contain an acidic group on one end&mdash;but I would be surprised if there&#39;s not an enzyme out there that would get rid of it.
</p>
';
      $_resource->next_url = false;
    $_resource->next_url = 'http://kurt.staging.arstechnica.com/published/gaming/news/2007/09/fatal-fury-cyberball-land-on-the-xbox-live-arcade.php';
      $_resource->original_url = 'http://kurt.staging.arstechnica.com/published/science/news/2007/08/lipid-making-enzymes-work-in-a-test-tube-may-help-biofuels-production.php';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/science/news/2007/08/lipid-making-enzymes-work-in-a-test-tube-may-help-biofuels-production.php';
      $_resource->id = 17;
      $_resource->authors = array(
    array('http://kurt.staging.arstechnica.com/published/author/kurt-1/', 'Kurt')
   );
      $_resource->ad_category = false;
      $_resource->categories = array(
    'http://kurt.staging.arstechnica.com/published/science/news/'
    );
      $_resource->intro_image = false;
      $_resource->tags = array(
    
    );
      $_resource->title = 'Lipid making enzymes work in a test tube; may help biofuels production';
      $_resource->pages = array(
    'Error: no part found'
    );
      $_resource->discussion_url = '';
      $_resource->previous_url = false;
    
      $_resource->previous_url = 'http://kurt.staging.arstechnica.com/published/open-source/news/2007/08/shared-source-projects-accused-of-being-trashware.php';
      
  

    
    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>