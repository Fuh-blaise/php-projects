<?php  
    include 'config/constants.php';
    session_start();
    $message = "";
    if(isset($_POST['login'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM tbl_user WHERE user_name = '$name'";
        $result = mysqli_query($conn, $sql);
        //$user = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)>0){
        while($user = mysqli_fetch_assoc($result)){
            $verify_password = $user['password_hash'];
            $category = $user['user_category'];
            $user_id = $user['user_id'];
            $name = $user['user_name'];
            if(password_verify($password, $verify_password)){
                if($category == "admin"){
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['category'] = $category;
                    $_SESSION['name'] = $name;
                    header("Location: admin.php");
                }
                if($category == "user"){
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['category'] = $category;
                    $_SESSION['name'] = $name;
                    header("Location: user.php");
                }
            }
        }
    }else{
            $message = "Invalid Login";
        }
    }
    
?>


<?php include('partials/menu.php');?>
    <div class="form-container">
        <form action="" method="post">
        <br><br><br>
 
            <h3>Login</h3>
            <?php echo $message; ?>
            <input type="text" name="name" required placeholder="username" required="yes">
            <input type="password" name="password" required placeholder ="Enter password" required="yes">
            <input type="submit" value="GET IN" name="login" class="form-btn">
            <p>Not a registered member? <a href="index.php">Register now</a></p>
        </form>
    </div>


    <?php include('<partials/footer.php'); ?>


