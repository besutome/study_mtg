<?php

//バブルソート関数
function bubble_sort($sort,$N){
    $key = 0;
   do{
        $flag = 0;
        for($i = 0; $i < $N-1-$key; $i++){
            //先頭から順に見ていく
            if($sort[$i] > $sort[$i+1]){
                //i+1がiよりも大きければ入れ替える
                $flag = 1;
                $x = $sort[$i];
                $sort[$i] = $sort[$i+1];
                $sort[$i+1] = $x;
            }
        }
       $key++;
       //一度も入れ替えることなく見終わったら終了
    }while($flag == 1);
    return $sort;
}
$sort = array();
$N = 10000;

//ソート準備
for($i = 0; $i < $N; $i++){
    $sort[$i] = rand();
}
$result = bubble_sort($sort,$N);

print_r($result);