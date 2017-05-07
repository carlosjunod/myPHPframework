<?php

  class api extends AppController
  {

    public function __construct()
    {
      $this->getView('header', array('pagename' => 'api'));
      $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/contact'));

      // $this->getView('welcome');
      echo "you are in api";
      $this->getView('footer');
    }
  }


?>
