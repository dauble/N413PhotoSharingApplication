<?php
/*
 * Author: Kailey Hart
 * Date: 02-23-2021
 * Name: add_gallery.class.php
 * Description: Let's a user add a gallery 
*/

class AddGallery extends MainView
{
  function show()
  {
    parent::header();
?>
<h2> Add Gallery</h2>
      <form method="POST" action="index.php?action=single_gallery_view">
    <div class="row mt-5">
        <div class="col-4"></div>
        <div id="form-container" class="col-4">
            Gallery Name: <input type="text" id="galleryName" name="galleryName" class="form-control" value="" placeholder="Gallery Name" required /><br />
            <label for="tag">Image Tag</label>
            <br>
            <select name="tag" id="tag">
                <option value="family">family</option>
                <option value="friends">friends</option>
                <option value="fashion">fashion</option>
                <option value="nature">nature</option>
                <option value="architecture">architecture</option>
                <option value="animal">animal</option>
                <option value="food">food</option>
                <option value="technology">technology</option>
                <option value="travel">travel</option>
                <option value="art">art</option>
                <option value="drinks">drinks</option>
                <option value="patterns">patterns</option>
                <option value="spirituality">spirituality</option>
                <option value="business">business</option>
                <option value="interiors">interiors</option>
            </select>
            <br>
            <button type="submit" id="submit" class="btn btn-dark float-right">Submit</button>
        </div>
    </div>
</form>

<?php
    parent::footer();
  }
}
