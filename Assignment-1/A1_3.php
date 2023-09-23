<!DOCTYPE html>
<html>
<head>
    <title>File Functions Demo</title>
</head>
<body>

<?php
$filename = "example.txt"; // Replace with the path to your file

$functions = [
    // Function: basename() - Returns the filename component of a path
    'basename' => [$filename],

    // Function: copy() - Copies a file
    'copy' => [$filename, "new_example.txt"],

    // Function: dirname() - Returns the directory name from a path
    'dirname' => [$filename],

    // Function: fclose() - Closes an open file
    'fclose' => [],

    // Function: file_exists() - Checks if a file or directory exists
    'file_exists' => [$filename],

    // Function: file_get_contents() - Reads entire file into a string
    'file_get_contents' => [$filename],

    // Function: file_put_contents() - Writes a string to a file
    'file_put_contents' => ["new_example.txt", "This is new content."],

    // Function: fileatime() - Gets last access time of a file
    'fileatime' => [$filename],

    // Function: filectime() - Gets inode change time of a file
    'filectime' => [$filename],

    // Function: fileowner() - Gets file owner
    'fileowner' => [$filename],

    // Function: fileperms() - Gets permissions of a file
    'fileperms' => [$filename],

    // Function: filesize() - Gets file size in bytes
    'filesize' => [$filename],

    // Function: filetype() - Gets file type
    'filetype' => [$filename],

    // Function: fopen() - Opens a file or URL
    'fopen' => [$filename, "r"],

    // Function: fgetc() - Reads a character from an open file
    'fgetc' => [],

    // Function: fgetcsv() - Reads a line from an open file and parses CSV fields
    'fgetcsv' => [],

    // Function: fgets() - Reads a line from an open file
    'fgets' => [],

    // Function: is_dir() - Checks if a path is a directory
    'is_dir' => ['C:\Users\kaush\Downloads'],

    // Function: is_executable() - Checks if a file is executable
    'is_executable' => [$filename],

    // Function: is_readable() - Checks if a file is readable
    'is_readable' => [$filename],

    // Function: is_writable() - Checks if a file is writable
    'is_writable' => [$filename],

    // Function: mkdir() - Creates a directory
    'mkdir' => ["new_directory"],

    // Function: rmdir() - Removes a directory
    'rmdir' => ["new_directory"],

    // Function: unlink() - Deletes a file
    'unlink' => ["new_example.txt"],
];


// Sort the array by function name
ksort($functions);


foreach ($functions as $functionName => $params) {
    $output = '';

    if ($functionName === 'fgetc' || $functionName === 'fgetcsv' || $functionName === 'fgets') {
        $fileHandle = fopen($filename, "r");
        $output = call_user_func_array($functionName, [$fileHandle]);
        fclose($fileHandle);
    } elseif ($functionName === 'fclose') {
        if (isset($fileHandle)) {
            fclose($fileHandle);
            $output = "File handle closed";
        } else {
            $output = "File handle not defined";
        }
    } else {
        $output = call_user_func_array($functionName, $params);
    }

    echo "<p>$functionName() - Output: $output</p>";

}
?>

</body>
</html>