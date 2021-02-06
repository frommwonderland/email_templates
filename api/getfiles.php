<?php
  function getfiles($location){
    $output = "";
    $scan = scandir($location);
    $count = sizeof($scan);
    for($i = 0; $i<$count; $i++){
      if($scan[$i] != "." && $scan[$i] != ".."){
        if(is_dir($location."/".$scan[$i])){
          $output .= "<div><div class=\"folder\">".$scan[$i]."</div>";
          $output .= getfiles($location."/".$scan[$i]);
          $output .= "</div>";
        } else {
          $output .= "<div><a href=\"".$location."/".$scan[$i]."\">".$scan[$i]."</a></div>";
        }
      }
    }
    return $output;
  }
  echo getfiles("../assets");
?>
