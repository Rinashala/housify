<?php 
session_start();

// Kontroll session: nëse nuk është loguar, ridrejtim te logIn
if(!isset($_SESSION['username'])){
    header("Location: ../Log in/logIn.php");
    exit;
}
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
        <h1 class="">PROPERTY SHOWCASE</h1>
        <div class="propertyDscpCard">
            <img src="../assets/img/e.jpg" alt="">
            <div class="detailsContainer">
                <p><b>A premium 180m² modern residence with elegant architecture, 3 bedrooms, 2 bathrooms, and a
                        beautifully
                        landscaped 250m² garden — designed for elevated living.</b></p>
                <div>
                    <p>Extra Features (neutral & professional)</p>
                    <ol>
                        <li>Modern design and high-quality finishes</li>
                        <li>Large windows for natural light</li>
                        <li>Private parking space</li>
                        <li>Quiet and family-friendly neighborhood</li>
                        <li>Close to schools, shops, and main roads</li>
                    </ol>
                </div>
            </div>
        </div>
    </main>
<?php include "../footer.php"; ?>

</body>

</html>