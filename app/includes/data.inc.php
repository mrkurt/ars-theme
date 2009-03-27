<?
    class data{
        public static function get_resource($url){
            if(array_key_exists($url, $GLOBALS['request_cache'])){
                return $GLOBALS['request_cache'][$url];
            }
            $file = parse_url($url, PHP_URL_PATH);
            if($file[strlen($file)-1] == '/'){
                $file .= 'index' . $GLOBALS['blog_file_extension'];
            }
            $file = $_SERVER['DOCUMENT_ROOT'] .  $file;
            if(file_exists($file)){
                include($file);
                $GLOBALS['request_cache'][$url] = $_resource;
                if(isset($_resource)){
                    return $_resource;
                }else{
                    return false;
                }
                return isset($_resource) ? $_resource : false;
            }else{
                return false;
            }
        }
    }
?>