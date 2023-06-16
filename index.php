<?php 
include "config/constants.php";
$erro='';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(!empty($name) or !empty($email) or !empty($password) or !empty($user_type)){
        if($password !== $cpassword){
            $erro = "Password mismatch";
        }else{
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            //check if email already used or taken
            $sql = "SELECT * FROM tbl_user WHERE user_email = '$email'";
            $result = mysqli_query($conn, $sql);
            $num_row = mysqli_num_rows($result);
            if($num_row>0){
                 echo "<script>alert('Email already exist')</script>";
                 echo "<script>window.open('register.php','_self')</script>";
            }else{
                //insert into databse
            $query = "INSERT INTO tbl_user (user_name, user_email, password_hash, user_category) VALUES (?,?,?,?)";

            $stmt = mysqli_stmt_init($conn);
            if(!$stmt->prepare($query)){
            die('SQL error: '.$conn->error);
           }
            
            $stmt->bind_param("ssss", $name, $email, $password_hash, $user_type);
            if(!$stmt->execute()){
                echo mysqli_errno($conn, $stmt);
            }else{
                echo "<script>alert('Registration successful')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }
            $stmt->close();
            $conn->close();
        }
    }
  }  
}   
?>
<?php include('partials/menu.php'); ?>
   <br><br><br>

    <div class="form-container">
        <form action="" method="post">
            <h3>Register Now</h3>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="email" name="email" required placeholder ="Enter email">
            <input type="password" name="password" required placeholder ="Enter password">
            <input type="password" name="cpassword" required placeholder = "Confirm password">
            <select name="user_type">
                <option value="user">user</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" value="register now" name="submit" class="form-btn">
            <p>Already have an Account? <a href="login.php">Login now</a></p>
        </form>
</div>




<?php include('<partials/footer.php');?>
