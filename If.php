<?php
//if文
//==で等しい、!=で等しくない

    $name = trim(fgets(STDIN));
    echo "Hello " . $name . "\n";

    if ($name == "PHP") {
        echo "Welcome\n";
    }
?>
