<?php
    include 'arrays.php'
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <title>Spot The Differences</title>
</head>
<body>
    <main id="main">
    <div class = "header">Pick the letter originally written large!</div>
    <?php
    //initialize the images the player gets to pick between
    $randomIndex = rand(0,count($letterImagesLarge)-1);
    $largeImage = $letterImagesLarge[$randomIndex];
    $smallImage = $letterImagesSmall[$randomIndex];

    //randomise the order they're shown in
    $randomOrder = rand(0,1);
    switch($randomOrder) {
        case 0: {
            $left = $largeImage;
            $right = $smallImage;
            break;
        }
        case 1: {
            $left = $smallImage;
            $right = $largeImage;
            break;
        }
    }
    ?>
    <script>
        // handle the button and show the result.
        // Parameter 1 is the url of the image on the side the user picked, p2 is the url of the correct image
        function showResult(clicked, large) {
            var text;
            console.log(clicked);
            console.log(large);
            if (clicked == large) {
                text = document.createTextNode("Correct!");
            }
            else {
                text = document.createTextNode("Incorrect...");
            }
            main = document.getElementById("main");
            letter1 = document.getElementById("letter1");
            letter2 = document.getElementById("letter2");
            resultDiv = document.createElement("div");
            resultDiv.setAttribute("id","result");
            resultDiv.appendChild(text);
            main.removeChild(letter1);
            main.removeChild(letter2);
            main.appendChild(resultDiv);
            window.setTimeout(window.location.reload.bind(window.location), 2000);
        }
    </script>

    <div class="letter" id="letter1"><img src=<?php echo $left;?>></div>
    <div class="letter" id="letter2"><img src=<?php echo $right;?>></div>
    <button class="button" onclick="showResult('<?php echo $left.'\',\''.$largeImage;?>')" id="left">Left</button>
    <button class="button" onclick="showResult('<?php echo $right.'\',\''.$largeImage;?>')" id="right">Right</button>
</main>
</body>
</html>
    