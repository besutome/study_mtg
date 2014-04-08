<?php

//番兵を使った改良版リニアサーチ
function linearSearch($x, $y, $num){
    $n = 0;

    //配列の最後の値を検索する値と入れ替える番兵作成
    //入れ替えた値は$tに保存
    $t = $y[$num-1];
    $y[$num-1] = $x;

    //目的の値を探す
    while($y[$n] != $x){
        $n++;
    }
    //配列最後の値を元に戻す
    $y[$num-1] = $t;

    //見つかったら表示
    //$t == $xのとき、一番最後の値が一致している
    if($n < $num-1  or $t == $x){
        $n++;
        echo $x . "は" . $n ."番目です";
        return;
    }
    //見つからなかったら以下を表示
    echo 'NOT FOUND';
}

$target_array = array();

//配列の要素数を指定
$N = 100000;
//適当な配列を作る
for($i = 0; $i < $N; $i++){
    $target_array[$i] = mt_rand(1,50000);
}

//検索する値
$search = 7;
linearSearch($search,$target_array,$N);