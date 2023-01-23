
<?php
$fortunenum = [
    0 => "凶",
    1,2,3 => "小吉",
    4,5,6 => "中吉",
    7,8 => "吉",
    9 => "大吉"
];

$number = $_POST["number"];
$array = str_split($number);
$key = array_rand($array,1);
$num = $array["$key"];
?>



<p><?php echo date("Y/m/d", time()); ?>の運勢は </p>
<p>選ばれた数字は<?php echo $num; ?> </p>

<?php
if($num == 0){

echo "凶";
}elseif($num >= 1 and $num <= 3){

echo "小吉";
}elseif($num >= 4 and $num <= 6){

echo "中吉";
}elseif($num >= 7 and $num <= 8){

echo "吉";
}else{

echo "大吉";
}
?>
