<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Planetarium - Lab</title>

    <link rel="stylesheet" href="/planetarium/css/style.css" class="stylesheet">

    <!-- Importowanie Font Awesome i Google Fonts -->
    <?php require '../utils/fonts.php' ?>
</head>
<body>

    <!-- Importowanie Headera -->
    <?php require '../templates/header.php' ?>

    <div id="container">

        <div class="quote">
            <h2>lab</h2>
            <p style="text-align:end;">~ Napoleon Bonaparte</p>
        </div>

        <div class="panels">

            <div class="panel-left">
                <p class="info-text">Ilość ciał niebieskich:</p>
                <p class="number">0</p>
            </div>

            <div class="panel-right">
                <p class="info-text">Nowi użytkownicy:</p>
                <p class="number">0</p>
            </div>

        </div>

    </div>

    <!-- Importowanie Footera -->
    <?php require '../templates/footer.php' ?>

</body>
</html>
