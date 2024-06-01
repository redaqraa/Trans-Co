<?php
session_start();

include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION["loggedin"] = true;
            $_SESSION["name"] = $name;
            echo "<script>
                    alert('Login successful!');
                    window.location.href = 'index - conected.php';
                  </script>";
        } else {
            echo "<script>alert('Invalid password.');</script>";
        }
    } else {
        echo "<script>alert('No user found with that name.');
        window.location.href = 'signin.php';
        
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
