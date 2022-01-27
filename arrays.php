<?php
    //initialize the arrays
    $letterImagesSmall = array();
    $letterImagesLarge = array();
    $lettersUsed = array("a", "b", "c", "d", "e", "f", "g", "h", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t");

    foreach($lettersUsed as $letter) {
        $letterImagesSmall[] = '/data/small/' . $letter . '.jpg';
        $letterImagesLarge[] = '/data/big/' . $letter . '.jpg';
    }

    foreach($letterImagesLarge as $l) {
        echo $l . "\n";
    }
?>