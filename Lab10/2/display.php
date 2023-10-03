<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <?php
    $query = "SELECT * FROM empinfo";

    if ($result = mysqli_query($conn, $query)) {
    ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Salary</th>
                <th>Operation</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_row($result)) {
            ?>
              
                <a href="form.css">
              
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row[0] ?>">Update </a>
                        <a href="delete.php?id=<?php echo $row[0] ?>">Delete </a>
                        <a href="s_emp.php?id=<?php echo $row[0] ?>">Show Details </a>
                    </td>
                </tr>
            </a>
            <?php
            }

            mysqli_free_result($result);
        }
        mysqli_close($conn);
        ?>
        </table>
</body>

</html>
