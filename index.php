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
                            <span class="sub-head">01 Departments</span>
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
    <!-- jquery-->
    <script src="js/jquery/jquery-3.6.0.min.js"></script>
    <!-- bootstrap-->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- slik slider-->
    <script src="js/slik/slick.min.js"></script>
    <!-- main script-->
    <script src="js/script.js"></script>
</body>

</html>