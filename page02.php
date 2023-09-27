<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include_once "class/db.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>REL Application Centre</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="image/logo/onsemi_logo.ico">
        <link href="css/googleapis-raleway.css" rel="stylesheet" />
        <link href="css/googleapis-montserrat.css" rel="stylesheet" type="text/css" />
        <link href="css/style-apps.css" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="right row">
            <div class="column imej1">
                <header class="header_section text-center text-orange">
                    <div class="desk">
                        <nav>
                            <a class="navbar-brand">
                                <span class="desk">ONSEMI APPLICATION</span>
                            </a>
                        </nav>
                    </div>
                </header>
                <div class="container">
                    <?php
                        $get_slides = "SELECT * FROM apps_info WHERE type = 'ONSEMI' ORDER BY NAME ASC";
                        $run_slides = mysqli_query($con, $get_slides);

                        while ($row_slides = mysqli_fetch_array($run_slides)):
                            $name = $row_slides['name'];
                            $desc = $row_slides['value'];
                            $link = $row_slides['link'];
                            $logo = $row_slides['logo'];
                            ?>
                                <div class="stock">
                                    <div>
                                        <a href="<?= $link; ?>" target="_blank" rel="noopener noreferrer" title="Go to <?= $desc; ?>"><img src="<?= $logo; ?>" alt="" class="baruHover discover__img" /></a>
                                    </div>
                                    <div class="stock-info">
                                        <div class="stock-name"><?= $name; ?></div>
                                        <div class="stock-fullname"><?= $desc; ?></div>
                                    </div>
                                </div>
                            <?php
                        endwhile;
                    ?>
                </div>
            </div>
            <div class="column imej2">
                <header class="header_section text-center text-orange">
                    <div class="desk2">
                        <nav>
                            <a class="navbar-brand">
                                <span class="desk2">REL LAB APPLICATION</span>
                            </a>
                            <a href="page01.php" class="toggle-icon"><i class='bx bx-toggle-right bx-lg' ></i></a>
                        </nav>
                    </div>
                </header>
                <div class="container">
                    <?php
                        $get_slides = "SELECT * FROM apps_info WHERE type = 'RELLAB' ORDER BY NAME ASC";
                        $run_slides = mysqli_query($con, $get_slides);

                        while ($row_slides = mysqli_fetch_array($run_slides)):
                            $name = $row_slides['name'];
                            $desc = $row_slides['value'];
                            $link = $row_slides['link'];
                            $logo = $row_slides['logo'];
                            ?>
                                <div class="stock">
                                    <div>
                                        <a href="<?= $link; ?>" target="_blank" rel="noopener noreferrer" title="Go to <?= $desc; ?>"><img src="<?= $logo; ?>" alt="" class="baruHover discover__img" /></a>
                                    </div>
                                    <div class="stock-info">
                                        <div class="stock-name"><?= $name; ?></div>
                                        <div class="stock-fullname"><?= $desc; ?></div>
                                    </div>
                                </div>
                            <?php
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
        <footer>
            <div class="copyright py-4 text-center text-white">
                <small>Copyright &copy; <a id="link" href="https://onsemiconductor.us.beekeeper.io/profiles/48e4e29b-95c8-4ef6-92ba-87bd2e7f9c74" target="_blank" rel="noopener noreferrer">Reliability Engineer</a> @ 2023</small>
                <a href="page03.php" class="toggle-icon2"> <i class='bx bxl-html5' style="float: right; padding-right: 20px;"></i> </a>
            </div>
        </footer>
    </body>
</html>