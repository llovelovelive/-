<?php
function print_title(){
  if(isset($_GET['id'])) {
    echo htmlspecialchars($_GET['id']);
  } else {
    echo "Welcome";
  }
}
 ?>
<?php
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i<count($list)){
    $title = htmlspecialchars($list[$i]);
    if($list[$i] != '.')
    {
      if($list[$i] != '..')
      echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
    }
    $i++;
}
}
 ?>
 <?php
 function print_description(){
   if(isset($_GET['id'])){
   echo
   htmlspecialchars(file_get_contents("data/".$_GET['id']));
   } else{
   echo "좋은하루되세요!!!";
   }
 }
  ?>
