<?php
include 'conn.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == "GET") {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listUsers') {
            // List all users
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $users = [];
                while ($row = $result->fetch_assoc()) {
                    $users[] = $row;
                }
                echo json_encode($users);
            } else {
                echo json_encode([]);
            }
        } elseif ($_GET['action'] == 'getUserById' && isset($_GET['id'])) {
            // Get user by ID
            $userId = $_GET['id'];
            $sql = "SELECT * FROM users WHERE user_id = $userId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                echo json_encode($user);
            } else {
                echo json_encode(["message" => "User not found"]);
            }
        } elseif ($_GET['action'] == 'getUserPosts' && isset($_GET['user_id'])) {
            // Get posts created by user
            $userId = $_GET['user_id'];
            $sql = "SELECT * FROM user_posts WHERE user_id = $userId AND post_isdeleted = 0";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $posts = [];
                while ($row = $result->fetch_assoc()) {
                    $posts[] = $row;
                }
                echo json_encode($posts);
            } else {
                echo json_encode([]);
            }
        }
    }
}
if ($requestMethod == "POST") {
    $data = json_decode(file_get_contents("php://input"));

    if(isset($data->action)) {
        if ($data->action == 'createPost' && isset($data->user_id, $data->post_content)) {
            // Create post for a particular user
            $userId = $data->user_id;
            $postContent = $conn->real_escape_string($data->post_content);
            $sql = "INSERT INTO user_posts (user_id, post_content, post_date, post_time) VALUES ('$userId', '$postContent', CURDATE(), CURTIME())";

            if ($conn->query($sql) === TRUE) {
                echo json_encode(["message" => "Post created successfully"]);
            } else {
                echo json_encode(["error" => $conn->error]);
            }
        }
    }
}

if ($requestMethod == "PUT") {
    $data = json_decode(file_get_contents("php://input"));

    if(isset($data->action) && isset($data->post_id) && isset($data->post_content)) {
        if ($data->action == 'editPost') {
            // Edit post for a particular user
            $postId = $data->post_id;
            $postContent = $conn->real_escape_string($data->post_content);
            $sql = "UPDATE user_posts SET post_content = '$postContent', post_last_edited_time = CURRENT_TIMESTAMP, post_edit_count = post_edit_count + 1 WHERE id = $postId";

            if ($conn->query($sql) === TRUE) {
                echo json_encode(["message" => "Post edited successfully"]);
            } else {
                echo json_encode(["error" => $conn->error]);
            }
        }
    }
}


if ($requestMethod == "DELETE") {
    $data = json_decode(file_get_contents("php://input"));

    if(isset($data->action) && isset($data->post_id)) {
        if ($data->action == 'deletePost') {
            // Delete post for a particular user
            $postId = $data->post_id;
            $sql = "UPDATE user_posts SET post_isdeleted = 1 WHERE id = $postId";

            if ($conn->query($sql) === TRUE) {
                echo json_encode(["message" => "Post deleted successfully"]);
            } else {
                echo json_encode(["error" => $conn->error]);
            }
        }
    }
}



$conn->close();
?>
