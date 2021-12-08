<!DOCTYPE html>
<html lang="en">
<head>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jura">
    <link rel="icon" href="Penguin 2.png" sizes="16x16" type="png">
    <link rel="stylesheet" href="Style.css">
    <script src="script.js"></script>
    <?php include 'function.php' ?>
    <title>Note Space</title>
</head>

<body>
<div class="header">
    <p style="font-family: Jura; font-size: 40px; color: black">Note and Pen</p>
    <p style="font-family: Jura; color: black">Now everyone can write.</p>
</div>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="trans">
        <p style="font-family: Jura; text-align: center">CAT 201 Assignment 1</p>
        <div class="penguin">
            <div class="penguin-bottom">
                <div class="right-wing"></div>
                <div class="left-wing"></div>
                <div class="right-leg"></div>
                <div class="left-leg"></div>
            </div>
            <div class="penguin-top">
                <div class="right-cheek"></div>
                <div class="left-cheek"></div>
                <div class="belly"></div>
                <div class="right-eye">
                    <div class="sparkle"></div>
                </div>
                <div class="left-eye">
                    <div class="sparkle"></div>
                </div>
                <div class="blush-right"></div>
                <div class="blush-left"></div>
                <div class="beak-top"></div>
                <div class="beak-bottom"></div>
            </div>
        </div>
        <p style="font-family: Jura; text-align: center">Hello There!</p>
        <p style="font-family: Jura; font-size: 15px; text-align: justify; width: 95%">This is a simple webpage created from us, Cheah
            Chin Xiong and Elwin Chiong Zhen Hui, for our CAT 201 assignment. Using HTML to create this page was not easy
            as we are just some beginners but it was exciting. We would love to hear more to improve our webpage!</p>
        <p style="font-family: Jura; font-size: 15px; text-align: justify; width: 95%">Cheah Chin Xiong 148507<br>Elwin Chiong Zhen Hui 146528</p>
    </a>
</div>

<div id="navbar">
    <script src="script.js"></script>
    <a id="trans">
        <span style="font-size: 16px; cursor: pointer" onclick="openNav()" > &#9776; About Us</span>
    </a>
    <a href="notespace.php"><i class="fa fa-globe"></i> NoteSpace</a>
    <div class="dropdown">
        <button class="dropbtn">
            <i class="fa fa-fw fa-sticky-note"></i> Menu
        </button>
        <div class="dropdown-content">
            <a href="main.php"><i class="fas fa-plus-square"></i> New Note</a>
            <a href="opennote.php"><i class="fas fa-folder-open"></i> Open Note</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="side">
        <p style="font-family: Jura">Note Space</p>
        <p style="font-family: Jura; font-size: 15px">You are doing the best you can and it is making a difference
            even if it can yet to been seen.</p>
        <p style="font-family: Jura; font-size: 15px">Believe in your progress.</p>
        <img src="TTT.jpg" style="width:400px;max-width:100%;height:500px;"/><br>
        <h1 style="font-family: Jura; font-size: 30px">Follow us on: </h1>
        <h2 style="font-size: 14px; font-family: Jura">Cheah Chin Xiong</h2>
        <a href="https://www.facebook.com/eric.cheah575/"><img src='facebook2.png' style="width:40px;height:40px;" /></a>
        <a href="mailto:cheahcx10@student.usm.my"><img src='outlook2.png' style="width:40px;height:40px;" /></a><br>
        <h2 style="font-size: 14px; font-family: Jura">Elwin Chiong Zhen Hui</h2>
        <a href="https://www.facebook.com/elwin.chiong/"><img src='facebook2.png' style="width:40px;height:40px;" /></a>
        <a href="mailto:elwinczh@student.usm.my"><img src='outlook2.png' style="width:40px;height:40px;" /></a><br><br>
        <footer class="footer_copyright" style="font-size: 10px; font-family: Jura">Copyright <span>&#169;</span> 2020 USM Malaysia. All rights reserved.</footer>
    </div>

    <!-- main section, open all text file to retrieve all notes-->
    <div class="maincol">
        <p style="font-family: Jura; font-size: 30px">All Notes</p>
        <div class="w3-card-4">
            <div class="w3-container w3-pale-green">
                <h1 style="font-family: Jura">Folder</h1>
            </div>
            <form role="form" class="w3-container" name="addNote" id="addSticky" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <label class="w3-text-black" style="font-family: Jura" for="file"><b>Key in your folder directory:</b></b></label>
                <input type="text" id="directory" name="directory" class="w3-input w3-animate-input" type="text" style="width:50%; font-family: Jura; font-size: 20px" placeholder="Title"
                       class="form-control" required data-validation-required-message="You must enter a directory" maxlength="999"><br>
                <button type="submit" value="Submit" class="btn btn-primary pull-right" style="margin-bottom:10px; width:20%; font-family: Jura; font-size: 20px">Confirm</button><br>
            </form>
            <hr align="center" width="100%" >
            <div required style="resize: none; font-family: Jura; font-size: 25px; padding:10px ">
                <!-- allFile php function-->
                <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $dir = $_POST['directory'];
                    $files = glob ($dir . "/*.txt");
                    $dir = $dir . "/";
                    if (empty($files)){
                        echo "No text file!";
                    }
                    else {
                        allFile($dir,$files);
                    }

                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>

</html>