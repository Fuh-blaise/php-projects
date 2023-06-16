
<?php include('partials/menu.php'); ?>
   <br><br><br>
   <CENTER><h1>WELCOME TO USER PAGE</h1></CENTER>
<?php 
    include 'config/constants.php';
    //check if login credentials match admin if not redirect to home
    session_start();
    if(isset($_SESSION['category'])){
        if($_SESSION['category']!='user'){
         header("Location: home.php");
        }
     } 
?>

<h1>Hi <span style="background-color:red;" >USER,</span><br>Welcome <span style="background-color:teal;"><?php echo $_SESSION['name'];?></span> </h1><br><br><br>

<?php include('<partials/footer.php');?>