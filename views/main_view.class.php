<?php
/*
 * Author: Kailey Hart
 * Date: 02-12-2021
 * Name: main_view.class.php
 * Description: Inscludes header and footer
*/

class MainView
{
  //Header Template
  function header()
  {
?>
    <!DOCTYPE html>
    <html>

    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
      <title>Phototastic</title>

      <!--JQuery-->
      <script src="dist/js/jquery-3.4.1.min.js" type="application/javascript"></script>
      <!--Bootstrap-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <!--Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link rel="stylesheet" href="dist/css/profile.css" type="text/css"/>



      <script>
        function navbar_update(this_page) {
          $('#' + this_page + "_item").addClass('active');
          $('#' + this_page + "_link").append('<span class="sr-only">(current)</span>');
        };
      </script>

      <style>
        nav {
          padding: 20px;
        }

        .nav-right {
          margin-left: 500px;
        }

        .navbar-center {
          display: flex;

          margin: 0 auto;
        }

        .nav-icons {
          font-size: 20px;
        }

        .nav-icons-plus {
          font-size: 20px;
        }

        .btn {
          padding: 2px 10px;
          vertical-align: center;
          margin-top: 8px;
        }
      </style>
    </head>

    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-center">
        <a class="navbar-brand" href="index.php">Phototastic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> -->
          </ul>
          <ul class="navbar-nav  ms-auto">
            <li class="nav-item">
              <a class="nav-link nav-icons-plus active" href="#"><i class="fa fa-fw fa-plus"></i></a>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-fw fa-user-circle"></i><span class="sr-only">
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="index.php?action=login">Login</a></li>
                <li><a class="dropdown-item" href="index.php?action=register">Register</a></li>
                <li><a class="dropdown-item" href="index.php?action=logout_confirm">Logout</a></li>
                <li><a class="dropdown-item" href="index.php?action=profile">Profile</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </nav>




    <?php
  }

  function content()
  {
    ?>
      <h2>This is the page content</h2>
    <?php
  }


  function footer()
  {
    ?>

    </body>

    </html>
<?php


  }
}
