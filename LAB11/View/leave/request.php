<!DOCTYPE html>
<html>

<head>
    <title>Request Leave</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Request Leave</h1>
        <form action="index.php?page=leave&action=submit_request" method="post">
            <!-- Leave request form fields -->
            <div class="form-group">
                <label for="leave_date">Leave Date:</label>
                <input type="date" class="form-control" id="leave_date" name="leave_date" required>
            </div>
            <div class="form-group">
                <label for="leave_reason">Leave Reason:</label>
                <textarea class="form-control" id="leave_reason" name="leave_reason" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Request</button>
        </form>
    </div>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
