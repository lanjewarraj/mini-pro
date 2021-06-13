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
                        <div class="col-xl-4">
                            <img src="assets/images/user.png" class="img-fluid" width="40px" height="40px">
                        </div>
                        <div class="col-xl-8">
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
                        <p class="h5 mb-1">Course features</p>
                        <div class="video-meta">
                            <p><strong>Duration:</strong><?php echo $duration; ?></p>
                            <p><strong>Instructor:</strong><?php echo $instructor; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="h5 mb-4">Related lecture</p>
                        <div class="rel-meta">
                            <div class="row">
                                <div class="col-xl-6">
                                    <img src="assets/images/video-thumb/<?php echo $video_thumb; ?>" width="80px" height="80px">
                                </div>
                                <div class="col-xl-6">
                                    <h6 class="h6"><?php echo $heading; ?></h6>
                                </div>
                            </div>
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
?>
    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
</body>

</html>