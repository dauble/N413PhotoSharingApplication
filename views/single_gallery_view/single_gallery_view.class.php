<?php
/*
 * Author: Kailey Hart
 * Date: 02-23-2021
 * Name: single_gallery_view.class.php
 * Description: Shows all the images in one gallery
*/

class SingleGallery  extends MainView
{
    function show()
    {
        parent::header();
?>

       <h2> Single Gallery </h2>


<?php
        parent::footer();
    }
}
