<?php
/*
 * Author: Kailey Hart
 * Date: 02-12-2021
 * Name: register_confirm.class.php
 * Description: Confirms user registration and outputs username
*/

class RegisterConfirm extends MainView
{
  function show($username )
  {
    parent::header();

    echo "<pre>";
    print_r($username);
    echo "</pre>";

    echo "<p>The last user added was: " . $username['username'] . "</p>";

    if(isset($_SESSION["pk_user_id"])){
      echo '<h3>Congrats! You registered.</h3>';
  }else{
      echo '<h3>Uh oh...The Registration was not successful. Check your credentials and try again.</h3>
            <a href="index.php?action=register"><button class="btn btn-dark mt-5">Try Again</button></a>';
  }

    parent::footer();
  }
}
