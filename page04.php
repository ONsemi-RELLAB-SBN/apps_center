<?php
include './class/db.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Rel Lab</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <link href="image/logo/onsemi_logo.ico" rel="icon">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="css/style04.css" rel="stylesheet">
    </head>
    <body>
        <header id="header" class="fixed-top ">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">

                    </div>
                </div>
            </div>
        </header>

        <main id="main">
            <section id="app01" class="portfolio">
                <div class="container">

                    <div class="section-title">
                        <h2>Rel Lab Application</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".RELLAB">Rel Lab</li>
                                <li data-filter=".ONSEMI">onsemi</li>
                                <li data-filter=".SSO">SSO</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container">
                        <?php
                        $sqlData = "SELECT * FROM apps_info";
                        $ress = mysqli_query($con, $sqlData);
                        while ($row = mysqli_fetch_array($ress)): ?>
                            <div class="col-lg-2 col-md-6 portfolio-item filter-web <?php echo $row['type']; ?>" style="height:200px;">
                                <a href="<?php echo $row['link']; ?>" target="_blank">
                                    <img src="<?php echo $row['logo']; ?>" class="img-fluid" alt="">
                                </a>
                                <div class="portfolio-info">
                                    <h4><?php echo $row['name']; ?></h4>
                                    <a href="<?php echo $row['link']; ?>" class="details-link" title="<?php echo $row['value']; ?>" target="_blank"><i class='bx bxs-paper-plane bx-fw'></i></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                </div>
            </section>
        </main>

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <h3>Application Centre</h3>
                <p>Application under onsemi.</p>
                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
                <div class="copyright">
                    &copy; Copyright <strong><span>Rel Lab</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">Ayep</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <script src="vendor/glightbox/js/glightbox.min.js"></script>
        <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="js/main04.js"></script>
    </body>
</html>