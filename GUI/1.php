#!/usr/bin/php
<?php

  function shutdown() {
    gtk::main_quit();
  }

  function btnClick($button) {
    print "Hello, Sami!\n";
  }

  $window = new GtkWindow();
  $window->connect("destroy", "shutdown");
  $button = new GtkButton("Hello, GTK");
  $button->connect("clicked", "btnClick");
  $window->add($button);
  $window->show_all();


  gtk::main();

?>
