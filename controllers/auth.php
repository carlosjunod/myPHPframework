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

      if($_REQUEST['username'] && $_REQUEST['password']){

        for ($i=0; $i < count($usersData); $i++) {
          if ($usersData[$i][0] == $_REQUEST['username'] && $usersData[$i][1] == $_REQUEST['password']) {
              $_SESSION['loggedin']=1;
              // var_dump($usersData);
              $_SESSION['bio'] = $usersData[$i][2];
              header("Location:/profile");

              break 1;
          }else {
              header("Location:/welcome?msg=Bad Login username or password");
          }
        }

      } else {
        header("Location:/welcome?msg=Bad Login username doesn't exists");
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
