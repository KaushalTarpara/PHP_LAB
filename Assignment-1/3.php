<!DOCTYPE html>
<html>
<head>
    <title>File Functions Demo</title>
</head>
<body>

<?php
$filePath = 'example.txt';
$csvFilePath = 'csvfile.csv'; 

function displayFileFunctionDemo($functionName, $purpose, $input = '', $output = '') {
    echo "<h2>$functionName()</h2>";
    echo "<p><strong>Purpose:</strong> $purpose</p>";   
    echo "<p><strong>Input:</strong> $input</p>";
    echo "<p><strong>Output:</strong> $output</p>";
    echo "<br>";
}


displayFileFunctionDemo(
    'file_exists',
    'Check if a file or directory exists.',
    $filePath,
    file_exists($filePath)
);


$handle = fopen($filePath, 'r');
displayFileFunctionDemo(
    'fopen',
    'Open a file or URL.',
    $filePath,
    $handle ? 'Resource ID' : 'Failed to open file'
);

$filename = basename($filePath);
displayFileFunctionDemo(
    'basename',
    'Get the filename from a path.',
    $filePath,
    $filename
);


$directory = dirname($filePath);
displayFileFunctionDemo(
    'dirname',
    'Get the directory name from a path.',
    $filePath,
    $directory
);


$copySuccess = copy($filePath, 'copy_of_example.txt');
displayFileFunctionDemo(
    'copy',
    'Copy a file.',
    $filePath,
    $copySuccess ? 'File copied successfully' : 'Failed to copy file'
);


$fileContents = file_get_contents($filePath);
displayFileFunctionDemo(
    'file_get_contents',
    'Read the entire file into a string.',
    $filePath,
    $fileContents
);


$writeSuccess = file_put_contents('new_example.txt', 'This is a new file.');
displayFileFunctionDemo(
    'file_put_contents',
    'Write a string to a file.',
    'This is a new file.',
    $writeSuccess ? 'File written successfully' : 'Failed to write file'
);


$lastAccessTime = fileatime($filePath);
displayFileFunctionDemo(
    'fileatime',
    'Get the last access time of a file.',
    $filePath,
    date('Y-m-d H:i:s', $lastAccessTime)
);


$inodeChangeTime = filectime($filePath);
displayFileFunctionDemo(
    'filectime',
    'Get the inode change time of a file.',
    $filePath,
    date('Y-m-d H:i:s', $inodeChangeTime)
);


$fileOwner = fileowner($filePath);
displayFileFunctionDemo(
    'fileowner',
    'Get the owner of a file.',
    $filePath,
    $fileOwner
);


$filePermissions = fileperms($filePath);
displayFileFunctionDemo(
    'fileperms',
    'Get the permissions of a file.',
    $filePath,
    decoct($filePermissions)
);


$fileSize = filesize($filePath);
displayFileFunctionDemo(
    'filesize',
    'Get the size of a file in bytes.',
    $filePath,
    $fileSize . ' bytes'
);


$fileType = filetype($filePath);
displayFileFunctionDemo(
    'filetype',
    'Get the type of a file.',
    $filePath,
    $fileType
);


$handle = fopen($filePath, 'r');
$character = fgetc($handle);
fclose($handle);
displayFileFunctionDemo(
    'fgetc',
    'Read a character from a file pointer.',
    $filePath,
    $character
);



$csvLine = fgetcsv(fopen($csvFilePath, 'r'));
displayFileFunctionDemo(
    'fgetcsv',
    'Read a line from a CSV file and parse it into an array.',
    $csvFilePath,
    print_r($csvLine, true)
);




$deleteSuccess = unlink('new_example.txt');
displayFileFunctionDemo(
    'unlink',
    'Delete a file.',
    'new_example.txt',
    $deleteSuccess ? 'File deleted successfully' : 'Failed to delete file'
);
?>

</body>
</html>
