<?php
// Settigs
include 'includes/config.php';

// head section <head>
include 'views/head.php';

// header section here.
include 'views/header.php';

// navigation
include 'views/menu.php';

// content here
$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
  case 'home':
    include 'views/content.php';
    break;
  case 'contact':
    include 'views/contact.php';
    break;
  case 'articles':
    include 'views/articles.php';
    break;
  case 'about':
    include 'views/about.php';
    break;
}

// footer
include 'views/footer.php';
?>
