<?php
  function getfiles($location){
    $scan = scandir($location);
    $count = sizeof($scan);
    for($i = 0; $i<$count; $i++){
      if($scan[$i] != "." && $scan[$i] != ".."){
        if(is_dir($location."/".$scan[$i])){
          echo "<div><div class=\"folder\">".$scan[$i]."</div>";
          getfiles($location."/".$scan[$i]);
          echo "</div>";
        } else {
          echo "<div><a href=\"".$location."/".$scan[$i]."\">".$scan[$i]."</a></div>";
        }
      }
    }
  }
  getfiles("../assets");
?>
