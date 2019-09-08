<?php
  include('stdlib.php');


  $site = new csite();

  initialize_site($site);

  $page = new cpage("Welcome to this page");
  $site->setPage($page);

  $content = "Welcome to my personal web site!";
  $page->setContent($content);

  $site->render();

?>
