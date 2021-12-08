<?php
/* function to create and store notes after writing notes*/
function createFile($filename,$title,$note){
    if (file_exists($filename . ".txt")){
        echo "File is updated!";
    }
    else {
        echo "File is created!";
    }
    $fh = fopen($filename . ".txt", 'w') or die("Failed to create file");
    $text = <<<_END
Title: $title
Note: $note
_END;

    fwrite($fh, $text) or die("Could not write to file");
    fclose($fh);
}
 /* function to read a single textfile to retrieve notes*/
function read($file){
    $myfile = fopen($file, "r") or die("Unable to open file!");
    // Output one line until end-of-file
    echo "<span style=font-size:30px>" . $file . "</span><br>";
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
}

/* function to open all text file in a directory to retrieve all notes*/
function allFile($dir,$files){
    foreach($files as $file) {
        $file = str_replace("$dir","",$file);
        echo "<span style=font-size:30px>" . $file . "</span><br>";
        $myfile = fopen($file, "r") or die("Unable to open file!");
        while(!feof($myfile)) {
            echo fgets($myfile) . "<br>";
        }
        echo "<hr align='center' width='100%'>";
    }
}