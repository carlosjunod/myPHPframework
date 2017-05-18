<?php

  class auth extends AppController
  {

    public function __construct()
    {

    }

    public function login(){

      $file = fopen('./assets/myTxt.txt', "r");
      $lines = array();
      $usersData = array();

      while(!feof($file)){
        array_push($lines, fgets($file));
      }

      foreach ($lines as $line) {
        $fields= explode('|', $line);
        array_push($usersData, $fields);
      }

      // print_r($usersData);

      // echo "<br/>";
      // print_r($usersData[0][0]);
      // print_r($_REQUEST['username']);
      // echo "<br/>";
      // print_r($usersData[0][1]);
      // print_r($_REQUEST['password']);




      if($_REQUEST['username'] && $_REQUEST['password']){

        for ($i=0; $i < count($usersData); $i++) {
          if ($usersData[i][0] == $_REQUEST['username'] && $usersData[i][1] == $_REQUEST['password']) {
              $_SESSION['loggedin']=1;
              // header('location:/profile');
          }else {
            echo "ELSE <br/>";
            print_r($usersData[i][0]);
            print_r($_REQUEST['username']);
            echo "<br/>";
            print_r($usersData[i][1]);
            print_r($_REQUEST['password']);
              // header("Location:/welcome?msg=Bad Login username or password");
          }
        }

      } else {
        // header("Location:/welcome?msg=Bad Login username doesn't exists");
      }


      // if($_REQUEST['username'] && $_REQUEST['password']){
      //
      //   if($_REQUEST['username']=='joe@gmail.com' && $_REQUEST['password']=='123'){
      //
      //     var_dump($_FILES);
      //
      //     $_SESSION['loggedin']=1;
      //     // header('location:/profile');
      //
      //   } else {
      //     // header("Location:/welcome?msg=Bad Login");
      //   }
      // } else {
      //   // header("Location:/welcome?msg=Bad Login");
      // }
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
