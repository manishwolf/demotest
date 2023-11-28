<?php
$arr1 = ['EVO 80'];       ddf ddfdf
$arr2 = ['Delevan'];
$notfound = [];
foreach ($arr1 as $key => $value) {
   if(!in_array($value,$arr2)) {
    $notfound[] = $value;
   }
}
echo implode(',',array_unique($notfound));
?>