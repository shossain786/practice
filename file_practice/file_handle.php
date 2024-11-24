<?php

// readFileDemo();
write_file();


function write_file() {
    $fileName = "practice.txt";
    $file = fopen($fileName, "w");
    if ($file) {
        $content = "File Opened Successfully in wirte mode";
        echo "<h3>$content</h3>";
        echo "<br>";
        fwrite($file, $content);
        echo "File Written Successfully!";
        fclose($file);
    } else {
        echo "unable to open the file!";
    }
}


function readFileDemo() {
    $fileName = "my_file.txt";
    if(file_exists($fileName)) {
        $file = fopen($fileName, "r");
        while(!feof($file)) {
            echo fgets($file) . "<br>";
        }
        fclose($file);
    } else {
        echo "File does not exist";
    }

}


?>