<? $GLOBALS['entry'] = $entry; ?>
<h1><?= get_class($entry->title) ?></h1>
<h4>In categories:</h4>
<ul>
    <? foreach($entry->categories as $c) { 
        $category = data::get_resource($c);
    ?>
    <li><a href="<?=$category->url?>"><?=$category->name?></a></li>
    <? } ?>
</ul>