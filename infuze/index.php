<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="INFUZE ENERGIE">
    <meta name="author" content="Adam Nita">
    <meta name="keywords" content="INFUZE ENERGIE">
<title>INFUZE</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
   <header>
    <nav class ="menu">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="producten.html">PRODUCTEN</a></li>
            <li><a href="komende evenementen.html">KOMENDE EVENEMENT</a></li>
            <li><a href="Artiesten.html">ARTIESTEN</a></li>
                  </ul>

  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

  <div id="id01" class="modal">

  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images\logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
  </div>

  <script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
  </script>
    </nav>
    <img class="logo" src="images/logo.png" alt="logo">

   </header>
    <body>
      <div class="wel">
        <h1>WELCOME</h1>
      </div>
        <img class="lineup" src="images/line up voorbeeld.png" alt="line up">
       <article class="blok">
       </article>

    </body>
