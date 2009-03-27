<?
    $GLOBALS['page_start_time'] = microtime(true);
    require_once('/home/kurt/ars-theme/app/includes/data.inc.php');
    require_once('/home/kurt/ars-theme/app/includes/render.inc.php');
    

    ResourceList::set_resolver('data::get_resource');
    function render($resource){
        ob_start();
        $GLOBALS['resource'] = $resource;
        render::create_and_render("full",  $resource);
        ob_end_flush();
    }
?>