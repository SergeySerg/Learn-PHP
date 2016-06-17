<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Учеба по PHP</title>
</head>
<body>
<p>привет мир</p>
<?php
echo +strlen("Hello");
?>
</body>
</html>


<!--/*$arr =["id"=>'3',"name"=>"Vor","decsription"=>"Short"];
foreach ($arr as $key=>$val){
    echo "$val"."</br>";
}


?>
<!--
$arr = [0,1,6];
    function my_count($var){

    for ($i=0;isset($var[$i]);$i++)
    {
    $res=strlen($var[$i]);


     }
        echo $res;
     }
my_count($arr);

/*$top_Menu = [
    ["link"=>"О нас","href"=>"about_us.php"],
    ["link"=>"Доставка и оплата","href"=>"delevery.php"],
    ["link"=>"Контакты","href"=>"contact.php"]
            ];
echo "<ul>";
foreach ($top_Menu as $val)
{
echo "<li><a href='{$val['href']}'>{$val['link']}</a></li></br>";

}
echo "</ul>";
var_dump($top_Menu);
?>*/

<!--/*$arr =["id"=>'3',"name"=>"Vor","decsription"=>"Short"];
foreach ($arr as $key=>$val){
    echo "$val"."</br>";
}
*/
/*
}*/
/*$var = 'HELLO';
$i = 0;
$len = strlen($var);
while ($i <= $len){
echo $var{$i++}."</br>";
}*/
/*for($i=1;$i <= 50;$i += 2){
    echo "Число = $i </br>";
}
/*<table style="border:1px solid red";>
  </table>*/

  $top_Menu = [
    ["link"=>"О нас","href"=>"about_us.php"],
    ["link"=>"Доставка и оплата","href"=>"delevery.php"],
    ["link"=>"Контакты","href"=>"contact.php"]
];
function drawMenu($menu,$vertical=true){
    echo "<ul style='width:450px;border:1px solid red;min-height: 300px;'>";
    foreach ($menu as $val)
    {
        if ($vertical == true)
        {
            echo "<li style='float:left; border:1px dotted red;margin-right:10px;'><a href='{$val['href']}'>{$val['link']}</a></li>";
        }
        else
        {
            echo "<li><a href='{$val['href']}'>{$val['link']}</a></li>";
        }
    }
    echo "</ul>";
}
drawMenu($top_Menu,1);
  -->


