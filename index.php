<?php
    // 1 buuval eelj n soligdono
    // 50 onoo turuulj hursen n hojno

    $activePlayer = 0;
    // 0 gedeg n player 1
    // 1 gedeg n player 2
    $score = array(0,0);

    // hojliin onoog todorhoiloh
    $win = 50;

    $won = 0;

while($won < $win){
    // shoo buuh toonuud
    $random = rand(1,6);
    // shoog hed buusniig hevleh
    echo "SHOO: " . $random . "<br>";

    // shoog haysniih daraah toglogchiin onoog tootsooloh
    if($random > 1){
        // toglogchiin dugaariin zov haruulna
        $act = $activePlayer + 1;

        // toglogchiin onoog hadgalah
        $score[$activePlayer] = $score[$activePlayer] + $random;

        // toglogchiin onoog haruulah
        echo $act ."r toglogchiin onoo: ".$score[$activePlayer]."<br>";

        // hojson toglogchiih zarlah
        if($score[$activePlayer] > 49){
            echo $act . "-r toglogch WINNNER!!!!";
        }

        // davtaltiig zogsooh onoond hurseniig shalgah
        $won = $score[$activePlayer];
    } else {
        // eelj soligdsniig zarlah
        echo "Eelj soligdloo <br>";

        // toglogchiin eeljiig solih
        if($activePlayer === 0){
            $activePlayer = 1;
        } else {
            $activePlayer = 0;
        }
    }
    }



?>
