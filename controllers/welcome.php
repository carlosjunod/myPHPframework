<?php

class welcome extends AppController
{

  public function checkLogin(){
    // if ($usergood==1) {
    //   $_SESSION['loggedin']=1;
    // } else {
    //   $_SESSION['loggedin']=0;
    // }
  }


  public function __construct()
  {
    // var_dump($_SESSION['loggedin']);
    // if (!empty($_SESSION['loggedin'])) {
    //     if ($_SESSION['loggedin']) {
    //       header('location://welcome/login');
    //     }
    // }
  }

  public function index(){
    $this->getView('header', array('title' => 'welcome'));
    $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/welcome/contact', 'modules'=>'/modules'), 'home');

    $this->getView('welcome', array('code' => $this->getRandomText()));
    $this->getView('footer');
  }

  public function contact(){

    $this->getView('header', array('title' => 'contact'));
    $this->getView('nav', array('home' => '/', 'api'=> '/api', 'contact'=>'/welcome/contact', 'modules'=>'/modules'), 'contact');

    $this->getView('contact');
    $this->getView('footer');
  }

  function getRandomText(){
    $string = '';

    for ($i = 0; $i < 7; $i++) {
        $string .= chr(rand(97, 122));
    }

    $_SESSION['captcha'] = $string;
    return $string;
  }

}

// public function getView($page, $data = array()){
//   require_once './views/'.$page.'.php';
// }




?>
