<?php

    for($bil = 1; $bil <= 50; $bil++){
        if($bil % 3 == 0){
            echo "$bil = ";echo "Foo <br>";
        }
        else if ($bil % 5 == 0){
            echo "$bil = ";echo "Bar <br>";
        }
        else if ($bil % 3 && $bil % 5 == 0){
            echo "$bil = ";echo "FooBar <br>";
        }
        else{
            echo "$bil";echo "<br>";
        }
    } 
?>
