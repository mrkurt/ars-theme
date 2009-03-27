<?
class _helpers_formatters{
    function title($res){
        $title = '';
        if(get_class($res) == 'Category'){
            $date_formats = array(
                "Category-Daily" => "F d, Y",
                "Category-Monthly" => "F, Y",
                "Category-Yearly" => "Y"
            );
            $title = $res->name;
            if($res->date){
                $format = $date_formats[$res->type];
                $date = date($format, $res->date);
                $title .= " ($date)";
            }
        }
        return $title;
    }

    function timestamp($time){
        if(get_class($time) == 'Entry'){
            $time = $time->date;
        }
        return '<abbr class="datetime" title="' . date('c', $time) . '">' . date('F j, Y g:i A', $time) . '</abbr>';
    }

    function container_link($entry, $text = false){
        if(!$entry->categories || count($entry->categories) == 0){
            return false;
        }
        $cat = $entry->categories[0];
        if(!$text){
            $text = data::get_resource($cat)->name;
        }
        return "<a href=\"$cat\">$name</a>";
    }

    function more_text($entry){
        $text = "Read More";
        $page_count = count($entry->pages);
        if($page_count > 1){
            $text .= " ($page_count pages)";
        }
        return $text;
    }

    function author_list($authors){
        if(get_class($authors) == 'Entry'){
            $authors = $authors->authors;
        }
        $links = array();
        foreach($authors as $author){
            $links[] = "<a href=\"${author[0]}\">${author[1]}</a>";
        }
        return implode($links, ", ");
    }
}
?>