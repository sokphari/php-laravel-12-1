<?php
//function type : pop push shirt unshirt merge sort in_array
$friut = ["Banana","apple","mango","coconat"];
for($i = 0; $i < 4; $i++){
    echo $i.'.'.$friut[$i]."<br>";
}
echo '<br>';
$functionCount = count($friut);
echo 'Element After user funciton Count : '.$functionCount.'<br>';

$functionPop = array_pop($friut);
echo "Element After use function POp : ".$functionPop.'<br>';

foreach($friut as $value){
    echo $value.'<br>';
}

echo '<br>';

$functionPush = array_push($friut,"blueberry");
foreach($friut as $value){
    echo $value.'<br>';
}

echo '<br>';
$functionShirt = array_shift($friut);
echo 'Element After User Function Shirt : '.$functionShirt.'<br>';
foreach($friut as $value){
    echo $value.'<br>';
}
echo '<br>';
$functionUnshirt = array_unshift($friut,"Sayon");
echo 'Element After user Function Unshirt : '.$functionUnshirt.'<br>';
foreach($friut as $value){
    echo $value.'<br>';
}

$color = ['red','blue','green','gray','orange'];

$functionMerged = array_merge($friut,$color);
foreach($functionMerged as $arrmerge){
    echo 'Element After Merged : '.$arrmerge.'<br>';
}
echo '<br>';

$letter = [5,3,2,1,0];
$functionSort = sort($letter);
foreach($letter as $arr){
    echo $arr.'<br>';
}

$letters = ['A','B','C'];
$letters = array_reverse($letters);
print_r($letters);


if(in_array("apple",$friut)){
    echo "Apple it in fruit array";
}else{
    echo 'Apple It not in array';
}


