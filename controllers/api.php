<?php

  class api extends AppController
  {

    public function __construct()
    {
      $this->getView('header', array('title' => 'api'));
      $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/welcome/contact'));

      $this->getView('api');
      // echo "you are in api";
      $this->getView('footer');
    }
  }


?>
