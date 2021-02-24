<?php
/*
 * Author: Kailey Hart
 * Date: 02-12-2021
 * Name: auth.class.php
 * Description: The Auth Page 
*/

class LoginConfirm extends MainView
{
    function show()
    {
        parent::header();
        if(isset($_SESSION["pk_user_id"])){
            echo '<h3>Congrats! You Logged In.</h3>';
        }else{
            echo '<h3>Uh oh...The Log-In was not successful. Check your credentials and try again.</h3>
                  <a href="index.php?action=login"><button class="btn btn-dark mt-5">Try Again</button></a>';
        }
?>


           
        <div class="top-row"> This is the login page</div>
      
               
       
         
<?php
        parent::footer();
    }
}
