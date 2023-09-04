<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_POST["filename"];
    $content = $_POST["content"];

    if (isset($_POST["write"])) {
       
        $file = fopen($filename, "a"); 
        if ($file) {
            fwrite($file, $content);
            fclose($file);
            echo "Content has been written to $filename.";
        } else {
            echo "Failed to open the file.";
        }
    } elseif (isset($_POST["read"])) {
    
        if (file_exists($filename)) {
            $fileContent = file_get_contents($filename);
            echo "<h2>File Content:</h2>";
            echo "<pre>$fileContent</pre>";
        } else {
            echo "File $filename does not exist.";
        }
    }
}
?>
