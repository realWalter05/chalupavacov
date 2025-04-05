<?php
    $title = "Chalupa Vacov";
    if(isset($_GET['p'])) {
        $p = $_GET['p'];
        if($p == "rooms") {
            $title = "Pokoje";
        } elseif($p == "prices") {
            $title = "Ceny";
        } elseif ($p == "reservation") {
            $title = "Rezervace";
        } elseif ($p == "home") {
            $title = "Chalupa Vacov";
        }
    } else {
        $title = "Chalupa Vacov";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Nabídka ubytování v chalupě na Šumavě">
        <meta name="keywords" content="ubytování, chalupa, Vacov, chalupa Vacov, chalupa ve Vacově, ubytování na Šumavě">
        <meta name="author" content="Miroslava Foltýnová">
        <link href="https://fonts.googleapis.com/css2?family=Signika  :wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./includes/chalupavacovStyle.css">
        <link rel="stylesheet" href="./includes/galleryStyle.css">
        <link rel="stylesheet" href="./includes/headerStyle.css">
        <link rel="stylesheet" href="./includes/roomsStyle.css">
        <link rel="stylesheet" href="./includes/tableStyle.css">
        <link rel="icon" href="./img/icons/logo_tab.png">
    </head>
    <body id="body">
        <?php
        include("./include_pages/header.php");
         ?>
        <main>
            <?php
            if(isset($_GET['p'])) {
                $p = $_GET['p'];
            } else {
                $p = 'home';
            }
            if(preg_match('/^[a-zA-Z0-9]+$/', $p)) {
                $p = include("./include_pages/".$p.".php");
                if(!$p) {
                    $p = "home";
                }
            } else {
                $p = "home";
                $p = include("./include_pages/".$p.".php");
            }
            ?>
        </main>
        <?php
        include("./include_pages/footer.php");
        ?>
    </body>
    <script src="js/main.js"></script>
    <script src="js/gallery.js"></script>
</html>