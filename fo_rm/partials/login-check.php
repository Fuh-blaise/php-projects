
<?php
    // Authorisation /Access control
    // check wether the user is logged in or not
    if(isset($_SESSION['user'])) //if user session is not set,means the user is not logged in

    // redirect to log in page with message
    {
      $_SESSION['no-login-message'] = "<div class='error text-center'>Please Login to Access the platform</div>";

      // redirect to log in page
      header('location:'.SITEURL.'login.php');
    }
   


?>