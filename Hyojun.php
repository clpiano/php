<?php
//標準入力
//STDINは標準入力の機能を表す(引数)
//fgetsはデータを1行受け取る関数(命令)
//trimは文字列の先頭や末尾にある空白や改行を削除する関数(命令)
//fgetsの戻り値がtrimの引数になる

    $name = trim(fgets(STDIN));
    echo "Hello " . $name . "\n";
?>
