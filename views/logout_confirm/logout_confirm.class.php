<?php
/*
 * Author: Kailey Hart
 * Date: 02-23-2021
 * Name: logout_confirm.class.php
 * Description: Tells user they logged out
*/

class LogoutConfirm extends MainView
{
  function show()
  {
    parent::header();
    ?>

<p>You logged out.</p>
    <?php



    parent::footer();
  }
}