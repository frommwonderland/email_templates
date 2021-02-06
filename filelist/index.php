<html>
<head>
  <style type="text/css">
  body{
    margin: 25px 0px 0px 0px;
    font-family: monospace;
  }
  .title{
    font-size: 24px;
    font-weight: bold;
    font-family: sans-serif;
  }
  .filelist{
    margin: 25px;
  }
  div{
    margin-left: 25px;
  }
  div.folder{
    margin-left: 0px;
    font-weight: bold;
  }
  a{
    color:inherit;
  }
  </style>
  <base target="_blank">
</head>
<body>

<div class="title">email template assets</div>

<div class="filelist">
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
</div>

</body>
</html>
