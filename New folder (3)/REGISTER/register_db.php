 <?php
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($mysqli, $_POST['username']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $password_1 = mysqli_real_escape_string($mysqli, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($mysqli, $_POST['password_2']);

        if(empty($username)){
            array_push($error, "Username is required");
            $_SESSION['error'] = "Username is required";
        }
        if(empty($email)){
            array_push($error, "Email is required");
            $_SESSION['error'] = "Email is required";
        }
        if(empty($password_1)){
            array_push($error, "Password is required");
            $_SESSION['error'] = "Password is required";
        }
        if($password_1 != $password_2){
            array_push($error, "The two passwords do not match");
            $_SESSION['error'] = "The two passwords do not match";
        }

        $user_check_query = "SELECT * FROM users username = '$username' OR email = '$email' LINMIT 1";
        $query = mysqli_query($mysqli, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){
            if($result['username'] === $username){
                array_push($errors, "Username already exists");
            }
            if($result['email'] === $email){
                array_push($errors, "Email already exists");
            }
        }

        if(count($errors) == 0){
            $password = md5($password_1);

            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($mysqli, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
        else{
            header('location: register.php');
        }
    }
?> 