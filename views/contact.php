<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de contact</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .pageTitle {
            text-align: center;
            margin-top: 30px;
        }

        .contactPhotos {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .contactimage {
            margin: 10px;
        }

        .contactImage {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <h1 class="pageTitle">L'équipe de développement</h1>
    <div class="contactPhotos">
        <?php
        $team = array(
            array("name" => "Karim FEKI", "linkedin" => "https://www.linkedin.com/in/karim-feki-18ab66249/", "image" => "images/karim.png"),
            array("name" => "Abder Bess", "linkedin" => "https://www.linkedin.com/in/abder-bess/", "image" => "images/abder-bess.png"),
            array("name" => "Rayan Toumert", "linkedin" => "https://www.linkedin.com/in/rayan-toumert/", "image" => "images/rayan.png"),
            array("name" => "Ilyès Manai", "linkedin" => "https://www.linkedin.com/in/ily%C3%A8s-manai-a76649266/", "image" => "images/ilyes.png"),
            array("name" => "Ervin Goby", "linkedin" => "https://www.linkedin.com/in/ervin-goby-b52b25235/", "image" => "images/ervin.png")
        );

        foreach ($team as $member) {
            echo "<a href='" . $member['linkedin'] . "' class='contactimage'>";
            echo "<img src='" . $member['image'] . "' alt='" . $member['name'] . "' class='contactImage sameSize'>";
            echo "</a>";
        }
        ?>
    </div>
</body>
</html>

<?php include 'footer.php'; ?>
