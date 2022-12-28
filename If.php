<?php
//if文
//==で等しい、!=で等しくない
//elseif if文が実行されなかった場合(つなげてOK)
// \nで改行

    $name = trim(fgets(STDIN));  //標準入力された文字によって分岐
    echo "Hello " . $name . "\n";

    if ($name == "PHP") {
        echo "Welcome\n";
    } elseif ($name == "php") {
        echo "Good morning\n";
    } else {
        echo "Goodbye\n";
    }
?>
