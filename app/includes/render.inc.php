<?
    class render{
        var $set;
        public static function create_and_render($set, $data){
            $tmpl = render::_get_template_for_resource($set, $data);

            $render = new render();
            $render->set = $set;

            render::_template($render, $tmpl, $data);

            return $render;
        }

        private static function _get_full_template_path($set, $name){
            $base = dirname(__FILE__);
            return "$base/../templates/$set/$name.tmpl.php";
        }
        private static function _get_template_for_resource($set, $res, $variant = false){
            $base = dirname(__FILE__);
            $tmpl = strtolower(get_class($res));
            if($variant){
                $tmpl .= ".$variant";
            }
            return render::_get_full_template_path($set, $tmpl);
        }

        private static function _template($render, $_template_path, $_data, $params = false){
            $_class_name = strtolower(get_class($_data));
            ${$_class_name} = $_data;
            $resource = $_data;
            $_locals_eval = '';
            if($params){
                foreach($params as $k => $v){
                    $_locals_eval .= '$' . $k . ' = $params[\'' . $k . '\'];';
                }
            }
            eval($_locals_eval);
            unset($_locals_eval);
            include($_template_path);
        }

        public function resource($res, $tmpl = false, $params = false){
            if(is_string($res)){
                $res = data::get_resource($res);
            }
            if($res){
                $tmpl = render::_get_template_for_resource($this->set, $res, $tmpl);
                render::_template($this, $tmpl, $res);
            }
        }

        public function template($tmpl){
            $resource = $GLOBALS['resource'];
            $path = render::_get_full_template_path($this->set, $tmpl);
            render::_template($this, $path, $resource);
        }
        
        private $_current_layouts = array();
        public function open_layout($tmpl){
            $resource = $GLOBALS['resource'];
            if(strpos('layouts/', $tmpl) !== 0){
                $tmpl = "layouts/$tmpl";
            }

            $this->_current_layouts[] = array($tmpl, $resource);
            ob_start(); //Need to capture what's between here and the close_layout
        }

        public function close_layout(){
            $contents = ob_get_contents();
            ob_end_clean();
            $layout = array_pop($this->_current_layouts);
            
            $path = render::_get_full_template_path($this->set, $layout[0]);
            render::_template($this, $path, $layout[1], array('contents' => $contents));
        }

        public function collection($list, $tmpl = false, $glue = false){
            if(get_class($list) == 'ResourceList'){
                $list = $list->load();
            }
            foreach($list as $res){
                if($res){
                    $this->resource($res, $tmpl);
                    if($glue) echo($glue);
                }
            }
        }

        static $__mixins__ = array();

        function __call($func, $args) {
            if ($function = @self::$__mixins__[$func]) {
                //array_unshift($args, $this);
                return call_user_func_array($function, $args);
            }
        }
    }

require(dirname(__FILE__) . '/../templates/_helpers/formatters.inc.php');
$methods = get_class_methods('_helpers_formatters');
foreach ($methods as $method) {
    eval("render::\$__mixins__['$method'] = array('_helpers_formatters','$method');");
}
?>