<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="./style.css">
    <title>Properties Showcase</title>
</head>

<body>

<?php include "../header.php"; ?>


<main>
    <h1>PROPERTIES SHOWCASE</h1>

    <div class="dFlex justifyCenter optionsContainer">
        <div class="option-buttons">
            <button class="active">BUY</button>
            <button>RENT</button>
            <button>SELL</button>
        </div>

        <div class="search-wrapper">
            <input type="text" placeholder="SEARCH">
        </div>
    </div>

    <div class="slider">
        <?php
        $images = [
            "../assets/img/4.jpg",
            "../assets/img/4.jpg",
            "../assets/img/4.jpg",
            "../assets/img/4.jpg",
            "../assets/img/4.jpg",
            "../assets/img/4.jpg",
            "../assets/img/4.jpg",
            "../assets/img/4.jpg"
        ];

        foreach ($images as $img) {
            echo '
                <a href="../Properties/properties.php">
                    <img src="'.$img.'" alt="Property">
                </a>
            ';
        }
        ?>
    </div>
</main>

<?php include "../footer.php"; ?>


</body>
</html>