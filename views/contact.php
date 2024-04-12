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
            array("name" => "Abder Bess", "linkedin" => "https://www.linkedin.com/in/abder-bess/", "image" => "https://media.licdn.com/dms/image/D4E35AQETrKt3vIS7YQ/profile-framedphoto-shrink_400_400/0/1711068674736?e=1713056400&v=beta&t=x1hzAcc3rYq6xDvezoyC96vmy364pPnjL4NBEhXcRdk"),
            array("name" => "Rayan Toumert", "linkedin" => "https://www.linkedin.com/in/rayan-toumert/", "image" => "https://media.licdn.com/dms/image/D4E35AQHS_CWSK4FaJA/profile-framedphoto-shrink_400_400/0/1707215678462?e=1713056400&v=beta&t=9N-RYeXdkgXmJ-BZ-9defBxGotdzxtDEQmKWYkG60Aw"),
            array("name" => "Karim FEKI", "linkedin" => "https://www.linkedin.com/in/karim-feki-18ab66249/", "image" => "https://media.licdn.com/dms/image/D4E35AQERucGERcc6fQ/profile-framedphoto-shrink_200_200/0/1708616595189?e=1713506400&v=beta&t=V-xds82k4OjpFWDlXoeTTUJOH3n1g6NbvEyb7DaCix4"),
            array("name" => "Ilyès Manai", "linkedin" => "https://www.linkedin.com/in/ily%C3%A8s-manai-a76649266/", "image" => "https://cdn.discordapp.com/attachments/906308019711787020/1228191489197211668/IMG_2651.jpg?ex=662b2575&is=6618b075&hm=fdd9bf254847a934613db305a90ca454f00e41c46bf2201a70e7c342d5dc1373&"),
            array("name" => "Ervin Goby", "linkedin" => "https://www.linkedin.com/in/ervin-goby-b52b25235/", "image" => "https://media.licdn.com/dms/image/D4E35AQHabs_X83QYCg/profile-framedphoto-shrink_800_800/0/1700214075352?e=1713056400&v=beta&t=yaTVT2Ie5uhXBu6OHZ4SDBPVAAFuXIlRnzjA16UOFzs")
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
