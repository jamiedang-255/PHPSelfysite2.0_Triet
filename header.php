<?php
    $currentPage = basename($_SERVER["SCRIPT_NAME"], '.php');
    $navLinks = ['home','resume', 'gallery'];
    
    function outputNav($navLinks, $currentPage) {
        $theClass = '';
        foreach ($navLinks as $link) {
            if ($link == 'home' && $currentPage == 'index') {
                $theClass = 'clicked';
            } elseif ($link == $currentPage) {
                $theClass = 'clicked';
            } else {
                $theClass = '';
            }
    
            if ($link == 'home') {
                echo "<li><a href=index.php class='{$theClass}'>" . ucfirst($link) . "</a></li>";
            } else {
                echo "<li><a href={$link}.php class='{$theClass}'>" . ucfirst($link) . "</a></li>";
            }
    
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Triet' Selfy</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&family=Yeon+Sung&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./home.css">
  <style>
      .main-nav >* {
    
    text-transform: lowercase;
    font-family: 'Padauk', sans-serif;
    margin-top: 15px;
    margin-right: 40px;

}
nav ul {
display: inline-flex;
float: right;
list-style: none;
}
.main-nav a {
    font-size: 28px;
}
.logo {
padding: 14px;
}

  </style>
  </head>
  <body>
  
      <header>
        <div class="logo">
          <a href="./home.php"><img src="https://seeklogo.com/images/B/balenciaga-logo-E5702D8ECC-seeklogo.com.png" width="150px" alt=""> </a>
        </div>
        <div class="main-nav">
          <nav class="main-nav">
            <ul>
              <?php   outputNav($navLinks, $currentPage);?>
              <li><a href="https://www.facebook.com/minh.trieest/">Facebook</a></li>
            </ul>
          </nav>
        </div>
      </header>