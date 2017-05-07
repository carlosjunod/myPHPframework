<?php

class welcome extends AppController
{

  public function __construct()
  {

  }

  function index(){
    $this->getView('header', array('title' => 'welcome'));
    $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/welcome/contact'));

    $this->getView('welcome');
    $this->getView('footer');
  }

  function contact(){
    $this->getView('header', array('title' => 'contact'));
    $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/welcome/contact'));

    $this->getView('contact');
    $this->getView('footer');
  }
}




?>
