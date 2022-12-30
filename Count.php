<?php
//$countに数値を代入し、その数だけ繰り返す
//for文の中にtrimを入れることで、標準入力を繰り返すことが

    $count = trim(fgets(STDIN));
    
    for ($i = 0; $i < $count; $i++) {
        $name = trim(fgets(STDIN));
        echo "Hello " . $name . "\n";
    }
    
?>
