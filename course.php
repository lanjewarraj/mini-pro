<?php require("config/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "course"; ?></title>
    <?php include("include/header.php"); ?>
</head>

<body>
    <?php include("include/navigation.php"); ?>
    <section id="course">
        <div class="courses-container">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="content">
                                <div class="text">
                                    <h5>Explore our courses</h5>
                                    <h1>Find your courses</h1>
                                    <form action="course" method="get">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-md-4">
                                                <select name="year" required>
                                                    <option value="0">-Select year-</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="semester" required>
                                                    <option>-Select semester-</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" name="course-search">Search &#10141;</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-xl-4 mt-4">
                    <?php 
                    if(isset($_GET['year'])){
                        $year = $_GET['year'];
                        $sem = $_GET['semester'];
                    $q = "select * from courses where year='$year' and semester='$sem'";
                    $r = mysqli_query($connection,$q);
                    echo "<h5>Showing result for:> <u>Year: $year </u>, <u>Semester: $sem </u></h5>";
                    if($r){
                        if(mysqli_num_rows($r) > 0){
                            while($row = mysqli_fetch_array($r)){
                                $id = $row['id'];
                                $title = $row['heading'];
                                $cat = $row['category'];
                                $desc = $row['description'];
                                $link = $row['video_link'];
                                $thumb = $row['video_thumb'];
                                $added_at = $row['added_at'];
                                ?>
                    <div class="item-video">
                        <div class="video">
                            <div class="row mb-4 g-0">
                                <div class="card-deck col-9">
                                    <div class="card">
                                        <a data-fancybox href="<?php echo $link; ?>">
                                            <img class="card-img-top img-fluid" src="assets/images/video-thumb/<?php echo $thumb;?>" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="meta">
                            <span><?php echo $added_at;?></span>
                            <h3><?php echo $title; ?></h3>
                        </div>
                    </div>
                    <?php
                            }
                        }else{
                            echo "No course founds";
                        }
                    }
                    }
                    ?>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <?php
                    $q = "select * from courses order by id desc";
                    $r = mysqli_query($connection,$q);
                    if($r){
                        if(mysqli_num_rows($r) > 0){
                            while($row = mysqli_fetch_array($r)){
                                $id = $row['id'];
                                $title = $row['heading'];
                                $cat = $row['category'];
                                $desc = $row['description'];
                                $link = $row['video_link'];
                                $thumb = $row['video_thumb'];
                                $added_at = $row['added_at'];
                                ?>
                <div class="col-md-3">
                    <div class="item-video">
                        <div class="video">
                            <div class="card-deck">
                                <div class="card">
                                    <a data-fancybox href="<?php echo $link; ?>">
                                        <img class="card-img-top img-fluid" src="assets/images/video-thumb/<?php echo $thumb;?>" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="meta">
                            <span><?php echo $added_at;?></span>
                            <h3><?php echo $title; ?></h3>
                            <a href="view_details?id=<?php echo $id;?>">Read more</a>
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
    </section>



    <?php
    if(isset($_GET['vid']) && isset($_GET['vname'])){
        $vid =  $_GET['vid'];
        $vname = $_GET['vname'];
        
        $q = "select * from courses where id='$vid' limit 1";
        $r = mysqli_query($connection,$q);
        if($r){
            if(mysqli_num_rows($r) > 0){
                while($rows = mysqli_fetch_assoc($r)){
                    $category = $rows['category'];
                    $heading = $rows['heading'];
                    $description = $rows['description'];
                    $instructor = $rows['instructor'];
                    $video_link = $rows['video_link'];
                    $video_thumb = $rows['video_thumb'];
                    $duration = $rows['vid_duration'];
                    
                    $at = $rows['added_at'];
                ?>
    <div class="course-name border">
        <div class="container">
            <div class="row p-1">
                <div class="col-xl-6">
                    <div class="c-name pt-2">
                        <h3 class="h5"><?php echo $vname; ?></h3>
                    </div>
                </div>
                <div class="col-xl-6 pt-2">
                    <a href="index" class="text-dark">Home</a>/ <a href="index" class="text-dark">Courses</a> / <p class="text-dark"><?php echo $vname; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h3 class="h3 mr-2 mt-4 mb-4"><?php echo $heading; ?></h3>
                <div class="insrtuctor-info">
                    <div class="row mb-4 mt-4">
                        <div class="col-xl-2">
                            <img src="assets/images/user.png" class="img-fluid" width="40px" height="40px">
                        </div>
                        <div class="col-xl-5">
                            <h6 class="h6">Category</h6>
                            <p><?php echo $category; ?></p>
                        </div>
                        <div class="col-xl-5">
                            <h6 class="h6">Instructor</h6>
                            <p><?php echo $instructor; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="vid-thumb">
                                <img src="assets/images/video-thumb/<?php echo $video_thumb; ?>" class="img-fluid">
                                <div class="vid-overlay">
                                    <a href="<?php echo $video_link; ?>" data-fancybox="video" data-caption="<?php echo $heading; ?>"><i class="fa fa-play" title="watch <?php echo $heading." video";?>"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-xl-12">
                            <div class="responsiveTabsDemo">
                                <ul>
                                    <li><a href="#tab-1"> Description </a></li>
                                    <li><a href="#tab-2"> Lesson Material </a></li>
                                </ul>

                                <div id="tab-1">
                                    <p><?php echo $description; ?></p>
                                </div>
                                <div id="tab-2"> ....... </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="video-comment">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="social-share">
                                <p>Share: </p>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="row mb-2">
                    <div class="col-xl-12">
                        <p class="h4 mb-4 mt-4">Course features</p>
                        <div class="video-meta">
                            <p><strong>Duration: </strong><?php echo $duration; ?></p>
                            <p><strong>Instructor: </strong><?php echo $instructor; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="h5 mb-4">Related lecture</p>
                        <div class="rel-meta">
                            <?php
                           $vname = $_GET['vname'];
                            $vid = $_GET['vid'];
                            $q1 = "select * from courses where heading like '%$vname%'";
                            $r1 = mysqli_query($connection,$q1);
                            if($r){
                                if(mysqli_num_rows($r1) > 0){
                                while($rows1 = mysqli_fetch_assoc($r1)){
                                $heading = $rows1['heading'];
                                $video_thumb = $rows1['video_thumb'];
                            ?>
                            <div class="row">
                                <div class="col-xl-6">
                                    <img src="assets/images/video-thumb/<?php echo $video_thumb; ?>" width="80px" height="80px">
                                </div>
                                <div class="col-xl-6">
                                    <a href="?vid=<?php echo $vid?>&vname=<?php echo $vname;?>">
                                        <h6 class="h6"><?php echo $heading; ?></h6>
                                    </a>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        }
    }
    }else{
            echo mysqli_error($connection);
        }
    } 
    }
?>
    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
</body>

</html>