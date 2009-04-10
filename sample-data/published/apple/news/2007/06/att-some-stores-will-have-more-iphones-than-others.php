<?

    require_once('/home/kurt/ars-technica-mt-bits/published/includes_c/classes.inc.php');
    
      $_resource = new Entry();
      $_resource->excerpt = 'AT&T senior VP of sales Larry Carter let a few more details loose this morning regarding iPhone stock in various stores (hint, it won\'t all be equal) and iPhone data plans.';
      $_resource->listing_image = false;
      $_resource->date = 1182434400;
      $_resource->primary_category = count($_resource->categories) > 0 ? $_resource->categories[0] : false;
      $_resource->body = '<p>
<img class="ImageRight Bordered" src="http://media.arstechnica.com/journals/apple.media/165/chicago_cityview.jpg" />Not all AT&amp;T stores in all markets will have the same number of iPhones upon launch, according to a <a href="http://www.usatoday.com/money/industries/telecom/2007-06-20-at&amp;t-iphone-push_N.htm">report</a> in today&#39;s <em>USAToday</em>. The newspaper cites AT&amp;T&#39;s senior VP of sales, Larry Carter, as staying tight-lipped on exact stock numbers in different markets, but pointing out that large concentrations of iPod users are the &quot;natural market&quot; for smartphones. Therefore, stores located in metro areas that contain the largest iPod-using populations will have more stock of iPhones than tiny towns in Nowheresville.
</p>
<p>
That means markets like New York, Chicago, and &quot;much of California&quot; will be pretty well covered. 
</p>
<blockquote>
	<p>
	Does that mean that those stores will have more iPhones than stores in,
	say, Richmond, Va., or Florida? &quot;Yes,&quot; he says. &quot;It&#39;s just common
	sense.&quot; 
	</p>
</blockquote>
<p>
If I lived in Florida and was dying to get an iPhone on launch day, I&#39;d be a little nervous right now.
</p>
<p>
Carter also points out that if the local store sells out, they will be happy to take (get this) mail orders for the devices which will ship in roughly 3 to 5 days, &quot;inventory permitting.&quot; He does, however, reaffirm that they will meet demand for all customers who want an iPhone some way or another.
</p>
<p>
The <em>USAToday</em> article also outlines a few other details, such as the fact that AT&amp;T plans to announce the service plans for the iPhone on June 29 alongside the launch. According to Carter, the plans won&#39;t be anything AT&amp;T is currently offering, but custom-tailored to the iPhone itself and will include fees for both voice and data use (like everything else).&nbsp;
</p>
<p>
<strong>Update: </strong>Everyone&#39;s favorite AT&amp;T spokesperson Mark Siegel <a href="http://www.ilounge.com/index.php/news/comments/att-denies-6-29-rate-plan-claim-will-announce-earlier/10375">told iLounge</a> that the <em>USAToday</em> report is inaccurate regarding the date at which the company will disclose the new data plans.&nbsp; &quot;We will disclose before the 29th,&quot; he told them, noting that &quot;it&rsquo;s not going to be anything exotic.&quot; I didn&#39;t really expect it to be, Mark.<br />
</p>
';
      $_resource->next_url = false;
    $_resource->next_url = 'http://kurt.staging.arstechnica.com/published/apple/news/2007/08/two-more-iphone-ads-all-these-years-and-all-the-parts.php';
      $_resource->original_url = 'http://kurt.staging.arstechnica.com/published/apple/news/2007/06/att-some-stores-will-have-more-iphones-than-others.php';
      $_resource->url = 'http://kurt.staging.arstechnica.com/published/apple/news/2007/06/att-some-stores-will-have-more-iphones-than-others.php';
      $_resource->id = 30;
      $_resource->authors = array(
    array('http://kurt.staging.arstechnica.com/published/author/kurt-1/', 'Kurt')
   );
      $_resource->ad_category = false;
      $_resource->categories = array(
    'http://kurt.staging.arstechnica.com/published/apple/news/', 'http://kurt.staging.arstechnica.com/published/gadgets/news/'
    );
      $_resource->intro_image = false;
      $_resource->tags = array(
    
    );
      $_resource->title = 'AT&T: Some stores will have more iPhones than others (Updated)';
      $_resource->pages = array(
    'Error: no part found'
    );
      $_resource->discussion_url = '';
      $_resource->previous_url = false;
      
  

    
    
    
    
    $GLOBALS['request_cache'][$_instance->url] = $_resource;
    if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
      require_once('/home/kurt/ars-technica-mt-bits/published/app/engine.php');
      render($_resource);
    }
?>