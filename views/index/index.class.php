<?php 
/*
 * Author: Kailey Hart
 * Date: 02-12-2021
 * Name: index.class.php
 * Description: The homepage 
*/
//require_once('views/main_view.class.php');

class Index extends MainView {
    function show() {
        parent::header();
    ?>
    <div></div>

    <?php
    parent::footer();
    }
}