<?php
 $arr= [1,2,2,3,3,4,4,5,6];

$addArr=[];

for($i=0;$i<count($arr)-1;$i++){

echo ";".$arr[$i],"==".$arr[$i+1];
    if($arr[$i]==$arr[$i+1]){
        
        
        $addArr[]=$arr[$i];
        $addArr[]=$arr[$i+1];
        
    
      
    }
    
  $result =array_diff($arr,$addArr);
}

print_r($result);
