<?php 
class Paging{
protected $_total;
protected $_pages;
protected $_link;

  public function __construct($count,$link){
    //tổng số mẫu tin
    if(isset($_GET['total'])){
        $this->_total = $_GET['total'];
    }else{
        $this ->_total = $count;
    }
    $this->_link = $link;
    
  }
// Phương thức tìm tổng số mẫu tin
/*public function findTotal($db, $table){
  if(isset($_GET['total'])){
   $this->_total = $_GET['total'];
  }else{
   $sql= 'SELECT COUNT(*) FROM '.$table;
   $result = $db->query($sql);
   $row = $db->fetch_array($result);
   $this ->_total = $row[0];
  }
}*/

// Phương thức tính số trang
public function findPages($limit){
  $this->_pages = ceil($this->_total / $limit);
  return $this->_pages;
}

// Phương thức tính vị trí mẫu tin bắt đầu từ vị trí trang
function rowStart($limit){
  return (!isset($_GET['page'])) ? 0 :  ($_GET['page']-1) * $limit;
}

public function pagesList($curpage){
  $total = $this->_total;
  $pages = $this->_pages;
  if($pages <=1){return '';}
  $page_list="";
  $page_list .= '<div class="paging">';

  // Tạo liên kết tới trang đầu và trang trang trước
  if($curpage!=1){
   //$page_list .= '<a href="'.$this->_link.'&p1&t'.$total.'" title="trang đầu">First </a>';
  }
  if($curpage  > 1){
   $page_list .= '<a href="'.$this->_link .'&p'.($curpage-1).'&t'.$total.'" title="trang trước"><span aria-hidden="true">&laquo;</span> </a>';
  }

  // Tạo liên kết tới các trang
  for($i=1; $i<=$pages; $i++){
   if($i == $curpage){
    $page_list .= '<a href="#">'.$i.' <span class="sr-only1"></span></a>';
   }
   else{
    $page_list .= '<a href="'.$this->_link.'&p'.$i.'&t'.$total.'" title="Trang '.$i.'">'.$i.'</a>';
   }
   $page_list .= " ";
  }

  // Tạo liên kết tới trang sau và trang cuối
  if(($curpage+1)<=$pages){
   $page_list .= '<a href="'.$this->_link.'&p'.($curpage+1).'&t'.$total.'" title="Đến trang sau"> <span aria-hidden="true">&raquo;</span> </a>';
  }
  if(($curpage != $pages) && ($pages != 0)){
   //$page_list .= '<a href="'.$this->_link.'&p'.$pages.'&t'.$total.'" title="trang cuối"> Last</a>';
  }

  $page_list .= '</div>';
  return $page_list;
}// end pagesList
public function pagesList1($id,$curpage){
  $total = $this->_total;
  $pages = $this->_pages;
  if($pages <=1){return '';}
  $page_list="";
  $page_list .= '<div class="pagination">';

  // Tạo liên kết tới trang đầu và trang trang trước
  if($curpage!=1){
   $page_list .= '<a class="page larger" href="'.$this->_link.'&i'.$id.'&p1&t'.$total.'" title="trang đầu">First </a>';
  }
  if($curpage  > 1){
   $page_list .= '<a class="page larger" href="'.$this->_link .'&i'.$id.'&p'.($curpage-1).'&t'.$total.'" title="trang trước">&laquo;</a>';
  }

  // Tạo liên kết tới các trang
  for($i=1; $i<=$pages; $i++){
   if($i == $curpage){
    $page_list .= '<a class="current">'.$i.'</a>';
   }
   else{
    $page_list .= '<a class="page larger" href="'.$this->_link.'&i'.$id.'&p'.$i.'&t'.$total.'" title="Trang '.$i.'">'.$i.'</a>';
   }
   $page_list .= " ";
  }

  // Tạo liên kết tới trang sau và trang cuối
  if(($curpage+1)<=$pages){
   $page_list .= '<a class="page larger" href="'.$this->_link.'&i'.$id.'&p'.($curpage+1).'&t'.$total.'" title="Đến trang sau">&raquo;</a>';
  }
  if(($curpage != $pages) && ($pages != 0)){
   $page_list .= '<a class="page larger" href="'.$this->_link.'&i'.$id.'&p'.$pages.'&t'.$total.'" title="trang cuối"> Last</a>';
  }

  $page_list .= '</div>';
  return $page_list;
}
}// end class

