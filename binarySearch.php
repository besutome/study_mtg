<?php

//バイナリサーチ
function binarySearch($x, $a, $left, $right){
    //検索範囲が配列の範囲外でエラー
    if($left < 0 or $right+1 > count($a)){
        return 'NOT FOUND';
    }
    while($left <= $right){
        //配列の真ん中の番号を変数$midでもつ
        $mid = (int)(($left + $right) / 2);
        var_dump($a[$mid]);
        //見つかったら配列番号を返す
        if($a[$mid] == $x){
            return $mid;
        }
        elseif($a[$mid] < $x){
            //ループ開始位置が真ん中から右になる
            $left = $mid + 1; //配列$aはソートされているので$xより$a[$mid]が小さければそれより左側に$xは存在しない

        }
        else{
            //ループ開始位置が真ん中から左になる
            $right = $mid - 1; //配列$aはソートされているので$xより$a[$mid]が大きければそれより右側に$xは存在しない
        }
    }
    //見つからなかったら以下を返す
    return "NOT FOUND";
}

//配列の要素数を指定
$N = 100000;

//検索する配列を作成
$target_array = array();
$target_array[0] = mt_rand(1, 50) % 3;

for($i = 1; $i < $N; $i++){
    $target_array[$i] = $target_array[$i-1] + mt_rand(1,50) % 3;
}

//検索する値を指定
$search = 77;

$r = binarySearch($search, $target_array, 0, $N-1);

//結果を表示
if($r == 'NOT FOUND'){
    echo $search . "は見つかりません";
}
else{
    $r++; //表示用に1をプラス
    echo $search . "は" . $r . "番目です";
}