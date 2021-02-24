<?php 
/*
 * Author: Kailey Hart
 * Date: 02-12-2021
 * Name: login.class.php
 * Description: The Login Page 
*/
//require_once('../main_view.class.php');

class Login extends MainView {
    function show() {
        parent::header();
    ?>
    <form method="POST" action="index.php?action=login_confirm">
    <div class="row mt-5">
        <div class="col-4"></div>
        <div id="form-container" class="col-4">
            User Name: <input type="text" id="username" name="username" class="form-control" value="" placeholder="Enter User Name" required /><br />
            Password: <input type="password" id="password" name="password" class="form-control" value="" placeholder="Enter Password" required /><br />
            <button type="submit" id="submit" class="btn btn-dark float-right">Submit</button>
        </div>
    </div>
</form>

    <?php
    parent::footer();
    }
}