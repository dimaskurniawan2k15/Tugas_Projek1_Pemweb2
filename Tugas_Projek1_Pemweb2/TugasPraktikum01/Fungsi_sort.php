<!DOCTYPE html>
<html>
<body>

<?php
$ar_buah = ["j"=>"Jeruk","p"=>"Pier","r"=>"Rambutan","j"=>"Jambu" ];
echo '<ol>';
foreach($ar_buah as $k =>$v){
echo '<li>'.$k.' - ' . $v .'</li>';
}
echo '</ol>';
sort($ar_buah);
echo '<hr/>';
echo '<ol>';
foreach($ar_buah as $k =>$v){
echo '<li>'.$k.' - ' . $v .'</li>';
}
echo '</ol>';
?>
</body>
</html>