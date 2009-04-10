<?
  $GLOBALS['blog_url'] = 'http://kurt.staging.arstechnica.com/published/';
  $GLOBALS['blog_file_extension'] = '.php';
  $GLOBALS['request_cache'] = array();

  class ResourceList extends ArrayObject{
    private static $resolver = '';
    private $resolved = false;

    public static function set_resolver($method){
      self::$resolver = explode('::', $method);
    }
    public function load(){
      if($this->resolved !== false) return $this->resolved;
      $this->resolved = array();
      $method = self::$resolver;
      foreach($this as $url){
        $this->resolved[] = call_user_func($method, $url);
      }
      return $this->resolved;
    }
  }

class Category{
  var $entries;
  
    var $date;
  
    var $name;
  
    var $children;
  
    var $ad_category;
  
    var $entry_count;
  
    var $category_root_url;
  
    var $archives;
  
    var $basename;
  
    var $feed_url;
  
    var $url;
  
    var $journal_name;
  
    var $id;
  
    var $type;
  
    var $parents;
  
  public function is_parent_of($res){
    $url = $res;
    if(is_object($res)){
      $url = $res->url;
    }
    return strpos($url, $this->category_root_url) === 0;
  }

  }
class Entry{
  var $excerpt;
  
    var $listing_image;
  
    var $date;
  
    var $primary_category;
  
    var $body;
  
    var $next_url;
  
    var $original_url;
  
    var $url;
  
    var $id;
  
    var $authors;
  
    var $ad_category;
  
    var $categories;
  
    var $intro_image;
  
    var $tags;
  
    var $title;
  
    var $pages;
  
    var $discussion_url;
  
    var $previous_url;
  
  public function page_count(){
    $count = count($this->pages);
    return $count > 0 ? $count : 1;
  }

  }
class Image{
  var $entry;
  
    var $caption;
  
    var $credit;
  
    var $url;
  
    var $credit_url;
  
    var $id;
  
    var $sizes;
  
    var $size;
  
    var $mime_type;
  
  public function get_size($width){
    foreach($this->sizes as $w => $url){
      if($width == $w){
        return $url;
      }
    }
    return false;
  }

  }
class Author{
  var $entries;
  
    var $date;
  
    var $name;
  
    var $display_name;
  
    var $image;
  
    var $archives;
  
    var $basename;
  
    var $email;
  
    var $author_root_url;
  
    var $url;
  
    var $id;
  
    var $type;
  
  public function get_size($width){
    foreach($this->sizes as $w => $url){
      if($width == $w){
        return $url;
      }
    }
    return false;
  }

  }
?>