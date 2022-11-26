<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Planetarium - Lab</title>

    <link rel="stylesheet" href="/planetarium/css/style.css" class="stylesheet">

    <!-- Font Awesome 6.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
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
