<?php

  class auth extends AppController
  {

    public function __construct()
    {

    }

    public function login(){

      if($_REQUEST['username'] && $_REQUEST['password']){

        if($_REQUEST['username']=='joe@gmail.com' && $_REQUEST['password']=='123'){

          $_SESSION['login']=1;
          header('location/profile');

        } else {
          header("Location:/welcome?msg=Bad Login");
        }
      } else {
        header("Location:/welcome?msg=Bad Login");
      }
    }

    public function logout(){
      $_SESSION['loggedin']=0;
      header('location:/');
    }

    function ajaxLog(){
      if ($_REQUEST['username']=='joe' && $_REQUEST['password'] == '123') {
        $_SESSION['loggedin']=1;
        echo "true";
      } else {
        $_SESSION['loggedin']=0;
        echo "not valid user";
      }

    }

    public function ajaxLogout(){
      $_SESSION['loggedin']=0;
      echo "Thanks for visit us!";
    }

  }


?>
