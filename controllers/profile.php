<?php

  class profile extends AppController
  {

    public function __construct()
    {

      // var_dump($_SESSION['loggedin']);
      if (!empty($_SESSION['loggedin'] && $_SESSION['loggedin']==1)) {

      } else {
        header("Location:/welcome");
      }

    }
    function index(){
      $this->getView('header', array('title' => 'Registration'));
      $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/welcome/contact', 'modules'=>'/modules'), 'profile');
      $this->getView('profile');

      $this->getView('footer');
    }
  }


?>
