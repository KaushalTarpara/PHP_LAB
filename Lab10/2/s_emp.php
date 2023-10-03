<?php
include 'conn.php';

if(isset($_GET['id'])) {
    $employeeId = $_GET['id'];
    
  
    $query = "SELECT * FROM empinfo WHERE eid = $employeeId";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0) {
        $employee = mysqli_fetch_assoc($result);
    } else {
       
        echo "Employee not found!";
        exit();
    }
} else {
  
    echo "Invalid request!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
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

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .details {
            margin-bottom: 20px;
        }

        .details strong {
            margin-right: 10px;
        }

        .back-button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Employee Details</h1>
        <div class="details">
            <p><strong>ID:</strong> <?php echo $employee['eid']; ?></p>
            <p><strong>Name:</strong> <?php echo $employee['name']; ?></p>
            <p><strong>Age:</strong> <?php echo $employee['age']; ?></p>
            <p><strong>Salary:</strong> <?php echo $employee['sal']; ?></p>
        </div>
        <a href="home.php" class="back-button">Back to Home</a>
    </div>
</body>

</html>
