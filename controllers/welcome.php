<?php

class welcome extends AppController
{

  public function __construct()
  {

  }

  public function index(){
    $this->getView('header', array('title' => 'welcome'));
    $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/welcome/contact', 'modules'=>'/modules', 'active'=>''));

    $this->getView('welcome');
    $this->getView('footer');
  }

  public function contact(){
    $this->getView('header', array('title' => 'contact'));
    $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/welcome/contact', 'modules'=>'/modules', 'active'=>'contact'));

    $this->getView('contact');
    $this->getView('footer');
  }

  function ajaxLog(){
    if ($_REQUEST['username']=='joe' && $_REQUEST['password'] == '123') {
      echo "true";
    } else {
      echo "not valid user";
    }

  }
}




?>
