<?php

$students = array(
    array(
        'Item' => 'Item 1',
        'price' => 2500,
        'quentity' => 500
    ),
    array(
        'Item' => 'Item 2',
        'price' => 3500,
        'quentity' => 100
    ),
    array(
        'Item' => 'Item 3',
        'price' => 500,
        'quentity' => 5000
    ),
    array(
        'Item' => 'Item 4',
        'price' => 5000,
        'quentity' => 1000
    ),
    array(
        'Item' => 'Item 5',
        'price' => 200,
        'quentity' => 5000
    ),
    
);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Item</th>
            <th>price</th>
            <th>quentity</th>
        </tr>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student['Item']; ?></td>
                <td><?php echo $student['price']; ?></td>
                <td><?php echo $student['quentity']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
