<?php require_once("config/connection.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning</title>
    <!-- bootstrap-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <!-- font awesome-->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <!-- slik slider-->
    <link rel="stylesheet" href="css/slik/slick.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="css/owl_caresoul/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl_caresoul/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/fancybox/jquery.fancybox.min.css">
    <!-- main style-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- navigation-->
    <header>
        <div class="nav-left">
            <img src="assets/images/svg/online-course.svg" alt="logo" class="logo" width="45px" height="45px">
        </div>
        <nav>
            <div class="nav">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Courses</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="nav-right">
            <i class="fa fa-user"></i> <a href="login">Login</a>
        </div>
    </header>

    <!-- hero section-->
    <section id="hero">
        <div class="hero">
            <div class="hero-slider">
                <div class="slider-1">
                    <div class="inner-left"></div>
                    <div class="inner-right">
                        <div class="text">
                            <span class="number">01</span>
                            <h2>Tulsiramji Gaikwad-Patil College of Engineering and Technology (TGPCET)</h2>
                            <p>Tulsiramji Gaikwad-Patil College of Engineering and Technology (TGPCET) was established in the year 2007 by Vidarbha Bahu-uddeshiya Shikshan Sanstha (VBSS), a registered society. affiliated to Rashtrasant Tukadoji Maharaj Nagpur University (RTMNU) Nagpur and approved by AICTE.</p>
                            <button type="button" class="hero-btn">Take a tour <span class="arrow"> &#8594;</span></button>
                        </div>
                        <div class="map">
                            <ul>
                                <li><a href="https://goo.gl/maps/BTzrnUu95LfVRnjq6" target="_blank"><i class="fa fa-map-marker"></i> Mohagaon, Wardha Rd, Nagpur, Maharashtra 441108</a>
                                </li>
                                <li><a href="tel:9922966176"><i class="fa fa-phone"></i> 9922966176</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slider-2">
                    <div class="inner-left">

                    </div>
                    <div class="inner-right">text</div>
                </div>
                <div class="slider-3">
                    <div class="inner-left">

                    </div>
                    <div class="inner-right">text</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses-->
    <section id="course">
        <div class="container">
            <div class="row content-box">
                <div class="col-md-6">
                    <div class="course-left">
                        <div class="header">
                            <span class="sub-head">01 Courses</span>
                            <h2>The Courses</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis</p>
                            <a href="" class="custom-btn">Show more <span class="arrow">&#8594;</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0">
                        <?php
                    $q = "select * from courses order by id asc limit 6";
                    $r = mysqli_query($connection,$q);
                    if($r){
                        if(mysqli_num_rows($r) > 0){
                            while($row = mysqli_fetch_array($r)){
                                $id = $row['id'];
                                $title = $row['heading'];
                                $cat = $row['category'];
                                $desc = $row['description'];
                                $link = $row['video_link'];
                                ?>
                        <div class="col-md-6">
                            <div class="course-right">
                                <div class="course-box">
                                    <span class="sub-head"><?php echo $cat; ?></span>
                                    <h3><?php echo $title; ?></h3>
                                    <p><?php echo $desc; ?></p>
                                    <a href="view_video?<?php echo $link; ?>$vid=<?php echo $id; ?>">View More <span class="arrow">&#8594;</span></a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        }else{
                            echo "no record founds";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="latest-tut">
        <div class="container">
            <div class="row content-box">
                <div class="col-md-12">
                    <div class="latest-tut">
                        <div class="head">
                            <span class="sub-head">02 tutorial video</span>
                            <h2>Latest video</h2>
                        </div>
                        <div class="latest-tut-slider owl-carousel owl-theme">
                            <?php
                    $q = "select * from courses order by id asc limit 10";
                    $r = mysqli_query($connection,$q);
                    if($r){
                        if(mysqli_num_rows($r) > 0){
                            while($row = mysqli_fetch_array($r)){
                                $id = $row['id'];
                                $title = $row['heading'];
                                $cat = $row['category'];
                                $desc = $row['description'];
                                $link = $row['video_link'];
                                $added_at = $row['added_at'];
                                ?>
                            <div class="item-video">
                                <a class="owl-video" href="https://www.youtube.com/watch?v=LTT4MYQqz4o" data-fancybox data-caption="<?php echo $title;?>">play</a>
                                <div class="meta">
                                    <span><?php echo $added_at;?></span>
                                    <h3><?php echo $title; ?></h3>
                                    <a href="view_details?id=<?php echo $id;?>">Read more</a>
                                </div>
                            </div>
                            <?php
                            }
                        }else{
                            echo "no record founds";
                        }
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <footer>
            <div class="footer">
                <div class="footer-container">
                    <div class="footer-left">
                        <span class="sub-head">Get in touch</span>

                        <h3>Contact</h3>
                        <p>Contact for all of your admission related queries
                        </p>
                        <p>Mohagaon, Wardha Rd, Nagpur, Maharashtra 441108</p>

                        <p>9922966176</p>

                        <a href="">mukulpande@tgpcet.com</a>
                    </div>
                    <div class="footer-middle">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119225.53368540492!2d78.94467397495087!3d20.96062859913691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd497d972e508c9%3A0x3bef2f11476a08b9!2sTulsiramji%20Gaikwad%20Patil%20College%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1623172009708!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="footer-right">
                        <span class="sub-head">Subscribe</span>
                        <h3>Newsletter</h3>
                        <div class="input">
                            <input type="text" name="name" placeholder="enter your name">
                            <input type="email" name="email" placeholder="enter your email">
                            <button type="submit" name="sbt-btn" class="custom-btn">Submit <span class="arrow"> &#8594;</span></button>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container-fluid">
                        <div class="row p-4">
                            <div class="col-md-6 p-2 footer-logo">
                                <img src="assets/images/svg/online-course.svg" alt="logo" class="logo" width="45px" height="45px">
                                <h3>ELearning System</h3>
                            </div>
                            <div class="col-md-6 text-right p-2 footer-text">
                                <p>© <?php echo date('Y');?> Tulsiramji Gaikwad-Patil College of Engineering and Technology, All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3" style="background-color:#8EE3BA;height:14px">

                            </div>
                            <div class="col-md-5" style="background-color:#FDEBE1;height:14px">

                            </div>
                            <div class="col-md-4" style="background-color:#FFE399;height:14px">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <!-- jquery-->
    <script src="js/jquery/jquery-3.6.0.min.js"></script>
    <!-- bootstrap-->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- slik slider-->
    <script src="js/slik/slick.min.js"></script>
    <!-- owl caousel-->
    <script src="js/owl_caresoul/owl.carousel.min.js"></script>
    <!--fancybox-->
    <script src="js/fancybox/jquery.fancybox.min.js"></script>
    <!-- main script-->
    <script src="js/script.js"></script>
</body>

</html>