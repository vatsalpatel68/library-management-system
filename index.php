<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Library at aiie</title>
    <meta name='viewport' content = 'width = device-width,initial-scale = 1.0'>
    <style><?php include './index.css'?></style>
    <script src = 'jquery-3.4.1.min.js'></script>
    <script src='index.js' type='text/javascript'>
    
    </script>
    </head>
    <body>
        <div class='nav-container'>
          <a href='index.php'>
          <img src='logo.png' class='logo-image' type='image/png' alt ='logo is here'/>
          </a>
        </div>
        <div class='login-button'><h1 class='login-text'>Login</h1></div>
        <ul class='login-list'>
          <a href='librarianlogin_index.php'><li class='login-button2' id='login-librarian'><h1 class='login-text2'>Librarian Login</h1></li></a>
          <a href='facultylogin_index.php'><li class='login-button2' id='login-faculty'><h1 class='login-text2'>Faculty Login</h1></li></a>
          <a href='studentlogin_index.php'><li class='login-button2' id='login-student'><h1 class='login-text2'>Student Login </h1></li></a>
          <a href='index.php'><li class='login-button2' id='logout'><h1 class='login-text2'>Log Out</h1></li></a>
        </ul>
       <?php include 'index-photo.php'?>
      </body>
      <?php include 'footer.php'?>
</html>