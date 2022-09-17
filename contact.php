<?php

include("connection.php");




?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Algotoolz">
    <!-- Title -->
    <title>Amrex Therapy PM</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.png">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Icons -->
    <link rel="stylesheet" href="assets/fonts/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/images/icons/flaticon.css">
    <!-- AOS Plugin -->
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ========= Preloader ========= -->
    <div id="loading">
        <div id="loading-center"></div>
    </div>
    <!-- ========= Header ========= -->
    <header class="inner-page">
        <!-- Navigation -->
        <my-navigation></my-navigation>
    </header>
    <!-- ========= Contact ========= -->
    <section class="contact" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="contact-part">
                        <h3 class="main-title text-white">Contact</h3>
                        <form action="contact_form.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" placeholder="Phone" name="phone" required>
                                        <label>Phone</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Message" name="message" required></textarea>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn" name="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


<?php

$sql="SELECT * FROM amrex_detail WHERE id='1'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);

$mon=date('h:i A', strtotime($row['mon_from'])).' - '.date('h:i A', strtotime($row['mon_to']));
$tues=date('h:i A', strtotime($row['tues_from'])).' - '.date('h:i A', strtotime($row['tues_to']));
$wed=date('h:i A', strtotime($row['wed_from'])).' - '.date('h:i A', strtotime($row['wed_to']));
$thurs=date('h:i A', strtotime($row['thurs_from'])).' - '.date('h:i A', strtotime($row['thurs_to']));
$fri=date('h:i A', strtotime($row['fri_from'])).' - '.date('h:i A', strtotime($row['fri_to']));
$sat=date('h:i A', strtotime($row['sat_from'])).' - '.date('h:i A', strtotime($row['sat_to']));
$sun=date('h:i A', strtotime($row['sun_from'])).' - '.date('h:i A', strtotime($row['sun_to']));

?>
                <div class="col-md-5">
                    <div class="contact-single">
                        <h3 class="main-title">We're here to help you</h3>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="mailto:<?php echo $row["email"];?>"
                                    target="_blank"><i class="far fa-envelope"></i>
                                    <?php echo $row["email"];?></a></li>
                            <li class="nav-item"><a class="nav-link" href="tel:(469) 215-1101"><i
                                        class="fas fa-phone-alt"></i>
                                    <?php echo $row["phone"];?></a></li>
                            <li class="nav-item"><a class="nav-link" href="https://goo.gl/maps/nepLWKc2234sHL6j8"
                                    target="_blank"><i class="fas fa-map-marker-alt"></i><?php echo $row["address"];?></a></li>
                        </ul>
                        <h6>Timing</h6>
                        <div class="table-responsive">
                            <table class="table table-sm table-borderless">
                                <tr>
                                    <th>Monday</th>
                                    <td><?php echo $mon;?></td>
                                </tr>
                                <tr>
                                    <th>Tuesday</th>
                                    <td><?php echo $tues;?></td>
                                </tr>
                                <tr>
                                    <th>Wednesday</th>
                                    <td><?php echo $wed;?></td>
                                </tr>
                                <tr>
                                    <th>Thursday</th>
                                    <td><?php echo $thurs;?></td>
                                </tr>
                                <tr>
                                    <th>Friday</th>
                                    <td><?php echo $fri;?></td>
                                </tr>
                                <tr>
                                    <th>Saturday</th>
                                    <td><?php echo $sat;?></td>
                                </tr>
                                <tr>
                                    <th>Sunday</th>
                                    <td><?php echo $sun;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= Footer ========= -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <my-footer></my-footer>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <small>&copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script> | Amrex Therapy PM</small>
            </div>
        </div>
    </footer>
    <!-- ========= Js Files ========= -->
    <!-- Jquery Js -->
    <script src="assets/js/jquery-1.12.4.js"></script>
    <!-- Popper Js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- AOS Plugin -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/aos/aos-activation.js"></script>
    <!-- Preloader Js -->
    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/base.js"></script>
</body>
</html>