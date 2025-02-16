<?php

include('connect.php');

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $stmt = $con->prepare("SELECT * FROM login WHERE username = ?");
        if (!$stmt) {
            throw new Exception("Error preparing statement: " . $con->error);
        }
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if (!$result) {
          throw new Exception("Error executing query: " . $stmt->error);
        }

        $user = $result->fetch_assoc();

if ($username === "admin" && $password === "admin") {

            session_start();
            $_SESSION['username'] = $user['username'];
            session_start();
            $_SESSION['username'] = $username; 
            header('Location: welcome.php'); 

            exit();
        } else {
            $error_message = "Invalid username or password.";  

        }

        $stmt->close(); 

    } catch (Exception $e) {
        error_log($e->getMessage());
        $error_message = "An error occurred. Please try again later."; 
    }

    if (isset($error_message)) {
      echo '<script>
            window.location.href = "index.php?error=' . urlencode($error_message) . '"; 
            alert("' . $error_message . '");
            </script>';
    }
    $con->close(); 
}
?>
