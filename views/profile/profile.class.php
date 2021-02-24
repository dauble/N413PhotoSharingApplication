<?php
/*
 * Author: Kailey Hart
 * Date: 02-23-2021
 * Name: profile.class.php
 * Description: Profile page -- where user can view their galleries, add an image to each gallery, add a gallery, edit their profile, and sort their galleries
*/

class Profile extends MainView
{
    function show()
    {
        parent::header();
?>

        <div class="profile__container">
            <div class="left">
                <h2>Your Profile</h2>
                <div class="left__container">
                    <div class="left__image">
                       <img class="left__image" alt="profile image" src="dist/images/profile-img.jpg"> 
                    </div>
                    <div class="left__buttons">
                        <p>Username</p>
                        <button><a href="index.php?action=add_gallery"> + Add gallery</a> </button>
                        <button><a href="index.php?action=edit_profile">Edit Profile</a> </button>
                    </div>
                    
                </div>
            </div>



            <div class="middle">
                <h2>Your Galleries</h2>
                <div class="gallery"></div>
            </div>

            <div class="right">
                <h4>Filter by tag</h4>
                <div class="right__container">
                    <div class="row"></div>
                    <div class="row"></div>
                    <div class="row"></div>
                    <div class="row"></div>
                    <div class="row"></div>
                </div>
            </div>
        </div>


<?php
        parent::footer();
    }
}
