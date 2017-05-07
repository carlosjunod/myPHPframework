<?php

class welcome extends AppController
{

  public function __construct()
  {
    $this->getView('header', array('pagename' => 'welcome'));
    $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/contact'));

    $this->getView('welcome');
    $this->getView('footer');
  }
}


?>
