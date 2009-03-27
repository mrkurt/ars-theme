<? 
    $cat_type = $GLOBALS['resource']->is_parent_of($entry) ? 'primary' : 'secondary';
    $page_count = count($entry->pages);
    $multipage = ($page_count > 1);
    $has_extended_body = ($page_count > 0);
?>
<div class="journal-item <?= $cat_type ?> opened"> 
  <h3 class="journal-title">
  <? if($cat_type == 'secondary'){ ?><a href="#" class="disclosure collapse">&nbsp;</a><? } ?>
  <a href="<?= $entry->url ?>" name="<?= $entry->id ?>" class="<?= $multipage ? "multipage" : "onepage" ?> article-headline"><?= $entry->title ?></a></h3> 
  <div class="journal-not-title">
    <div class="journal-byline">
    <? if($cat_type == 'primary'){ ?>
        By <?= $render->author_list($entry) ?> | Last updated <?= $render->timestamp($entry) ?> 
    <? }else{ ?>
        Cross linked from: <?= $render->container_link($entry) ?> | <a href="#" class="collapse">Collapse excerpt</a>
    <? } ?>
    </div>

    <? 
    //Renders the listing image using image.listing.tmpl.php
    $render->resource($entry->listing_image, 'listing'); 
    ?>

    <div class="journal-content">
    <?= strlen($entry->body) > 0 ? $entry->body : $entry->excerpt ?>
    </div>

    <? if(strlen($entry->discussion_url) > 0) { ?>
    <div class="journal-comment-button"><a href="<?= $entry->discussion_url ?>">Comment</a></div> 
    <? } ?>

    <? if($page_count > 0) { ?>
    <div class="journal-read-more"><a href="<?= $entry->url ?>"><?= $render->more_text($entry) ?></a></div>
    <? } ?>
  </div> 
</div>