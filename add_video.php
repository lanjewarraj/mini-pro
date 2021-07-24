<?php require("config/security.php"); ?>
<?php require("config/connection.php"); ?>
<?php
if(isset($_POST['add-video-btn'])){
    $category = mysqli_real_escape_string($connection,$_POST['category']);  
    $heading = mysqli_real_escape_string($connection,$_POST['heading']); 
    $description = mysqli_real_escape_string($connection,$_POST['description']); 
    $instructor = mysqli_real_escape_string($connection,$_POST['instructor']); 
    $vidlink = mysqli_real_escape_string($connection,$_POST['vidlink']); 
    $video_dur = mysqli_real_escape_string($connection,$_POST['duration']); 
    $year = mysqli_real_escape_string($connection,$_POST['year']);
    $semester = mysqli_real_escape_string($connection,$_POST['sem']);
    
    $thumbnail = $_FILES['thumb']['name']; 
    $thumbnail_tmp = $_FILES['thumb']['tmp_name']; 
    $thumbnail_size = $_FILES['thumb']['size'];
    $thumbnail_type = $_FILES['thumb']['type'];
    
    $fileExt = explode('.',$thumbnail);
	$actualFileExt = strtolower(end($fileExt));
	$allowedFile = array('jpg','png','jpeg');
    
    $sql = "INSERT INTO `courses`(`category`, `heading`, `description`, `instructor`, `video_link`, `video_thumb`, `vid_duration`, `year`, `semester`) VALUES ('$category','$heading','$description','$instructor','$vidlink','$thumbnail','$video_dur','$year','$semester')";
    
    if($thumbnail_size < 102400){
        if(in_array($actualFileExt,$allowedFile)){
            if(move_uploaded_file($thumbnail_tmp,"assets/images/video-thumb/$thumbnail")){
            $run = mysqli_query($connection,$sql);
                if($run){
                    ?>
                    <script>
                        const d = new Date();
                        alert("Successfully added video on:==> " + d);
                    </script>
                    <?php
                }else{
                echo mysqli_error($connection);    
            }
        }else{ ?>
            <script>
                alert("Fails to upload file");
            </script>
            <?php }
        }else{ ?>
           <script>
            alert("This type of file not allowed, please choose a JPEG,JPG or PNG file.");
            </script>
       <?php }
    }else{ ?>
        <script>
            alert("Please upload file less than 100kb");
        </script>
    <?php } 
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload video</title>
    <?php include("include/header.php"); ?>
</head>

<body>
    <?php include("include/navigation.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 border p-2 mt-4">
                <h3 class="text-center">Add Video</h3>
                <form action="add_video" method="post" enctype="multipart/form-data">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Category (like Artificial Intelligence, Operating System, Cloud Computing)</label>
                        <input type="text" id="form1Example1" class="form-control" name="category" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Heading or Video title</label>
                        <input type="text" id="form1Example1" class="form-control" name="heading" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Description (short information about video)</label>
                        <input type="text" id="form1Example1" class="form-control" name="description" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Instructor name</label>
                        <input type="text" id="form1Example1" class="form-control" name="instructor" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Video link</label>
                        <input type="text" id="form1Example1" class="form-control" name="vidlink" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Add video thumbnail</label>
                        <input type="file" id="form1Example1" class="form-control" name="thumb" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Video duration (in minute)</label>
                        <input type="number" id="form1Example1" class="form-control" name="duration" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Year</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="year">
                            <option value="0">-select year-</option>
                            <option value="1">1st year</option>
                            <option value="2">2nd year</option>
                            <option value="3">3rd year</option>
                            <option value="4">4th year</option>
                        </select>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Semester</label>

                        <select class="form-control" id="exampleFormControlSelect1" name="sem">
                            <option value="0">-select semester-</option>
                            <option value="1">1st semester</option>
                            <option value="2">2nd semester</option>
                            <option value="3">3rd semester</option>
                            <option value="4">4th semester</option>
                            <option value="5">5th semester</option>
                            <option value="6">6th semester</option>
                            <option value="7">7th semester</option>
                            <option value="8">8th semester</option>
                        </select>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block" name="add-video-btn">Add video</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
</body>

</html>