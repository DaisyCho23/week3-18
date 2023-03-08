<meta charset="utf8">

<?php
if(isset($_POST["id"])){
   $id = $_POST["id"];
   $pwd = $_POST["pwd"];
   $gender = $_POST["gender"];
   $dorm = $_POST["dorm"];
   $barbecue = $_POST["barbecue"];

echo "您的ID是:".$id."<br/>";
echo "您的密碼是:".$pwd."<br/>";}

if($dorm =="yes"){
    echo "您住的是學校宿舍<br/>";
}
else{
    echo "您住校外<br/>";
}

if($barbecue =="yes"){
    echo "您會參加本學期系烤<br/>";
}
else{
    echo "您不參加本學期系烤<br/>";
}

if($gender=="male"){
    echo "您的性別是:男性<br/>";
}
else if($gender=="female"){ 
    echo "您的性別是:女性 <br/>";
}
else{
    echo "您的性別是:其他 <br/>";
}

$grade=$_POST["grade"];
echo "您的年級是:";
foreach ($grade as $value) {
    echo $value." ";
}

echo "<br>";
echo "您想吃的食材是:";
if(isset($_POST["ham"])){
    $ham=$_POST["ham"];
    echo "火腿";
}
if(isset($_POST["oden"])){
    $oden=$_POST["oden"];
    echo "黑輪";
}
if(isset($_POST["toast"])){
    $toast=$_POST["toast"];
    echo "吐司";
}
if(isset($_POST["StickyRiceSausage"])){
    $StickyRiceSausage=$_POST["StickyRiceSausage"];
    echo "米血";
}
if(isset($_POST["marshmallow"])){
    $marshmallow=$_POST["marshmallow"];
    echo "棉花糖";
}
if(isset($_POST["greenBeans"])){
    $greenBeans=$_POST["greenBeans"];
    echo "四季豆";
}

// for($i=0; i<$city.length;)
//for($i=0; $i<count($city); $i++){
 //   echo $city[$i]." ";
//}

echo "<br>";
$comment=$_POST["comment"];
echo "有什麼建議想對我們說:<br/>";
echo nl2br(strip_tags($comment));          //new line 2 br
//用strip_tags移除留言的links，避免誤點links中毒

?>