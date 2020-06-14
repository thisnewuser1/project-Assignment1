<?php
    session_start();
    if(!isset($_SESSION['email']))
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Image</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: rgba(222, 255, 247, 0.151);">
    <div class="sessoion_image_people">
        <?php echo '<img class="class_img2" src="'.$_SESSION["img"].'">';?>
        <?php echo '<img class="class_img2" src="'.$_SESSION["img"].'">';?>
        <?php echo '<img class="class_img2" src="'.$_SESSION["img"].'">';?>
        <?php echo '<img class="class_img2" src="'.$_SESSION["img"].'">';?>
        <a href="#" class="img5">&nbsp;&nbsp;+1</a>
    <div class="tag_css_button_type">
        <a href="#" class="present_tag"><i class="fa fa-play"></i>&nbsp;&nbsp; Present &nbsp;<i class="fa fa-caret-down"></i></a>
        <a href="#" class="share"><i class="fa fa-user"></i>Share</a>
        <a href="logout.php"><i class="fa fa-power-off"></i></a>
    </div>
    <div class="head_element">
            <h1>Hi welcome <?php echo $_SESSION['username'] ?> in our project</h1>
        </div>
</div>
<div class="body_part">
    <textarea name="data_wite" id="data_wite" cols="100" rows="100" style="margin-left: 400px;"></textarea>
</div>
</body>
</html>