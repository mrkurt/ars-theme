<? $GLOBALS['category'] = $category; ?>
<? $render->open_layout('standard'); ?>

    <h1><?= $category->name ?></h1>
    <? if($category->archives){ ?>
        <h4>Archives:</h4>
        <ul>
            <? foreach($category->archives->load() as $archive){ ?>
            <li><a href="<?= $archive->url ?>"><?= $render->title($archive) ?></a></li>
            <? } ?>
        </ul>
    <? } ?>
    <? if($category->entries){ ?>
        <h4>Entries:</h4>
        <? $render->collection($category->entries, 'listing') ?>
    <? } ?>

<? $render->close_layout(); ?>