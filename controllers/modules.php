<?php

  class modules extends AppController
  {

    public function __construct()
    {
      $this->getView('header', array('title' => 'api'));
      $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/welcome/contact', 'modules'=>'/modules'));

      $this->getView('modules');

      $this->getView('footer');
    }
  }


?>
