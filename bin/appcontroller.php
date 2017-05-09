<?php
// echo "</br>appcontroller.php loaded";

class AppController
{

  public function __construct($urlPathParts, $config)
  {
    // db information
    $this->urlPathParts = $urlPathParts;

    // var_dump($this->urlPathParts);

    //  0      /   1
    // welcome/contact
    if($urlPathParts[0]){
      include './controllers/'.$urlPathParts[0].'.php';
      // include './cotrollers/welcome.php'

      $appcon = new $urlPathParts[0]($this);
      // $appcon = new welcome($this);

      if (isset($urlPathParts[1])) {
        $appcon->$urlPathParts[1]($this);
        //$appcon->contact();
      } else {
        $methodVariable = array($appcon, 'index' );
        if (is_callable($methodVariable, false, $callable_name)) {
          $appcon->index($this);
        }
      }

    } else {
      include './controllers/'.$config['defaultController'].'.php';
      $appcon = new $config['defaultController']($this);

      if (isset($urlPathParts[1])) {
        $appcon->config['defaultController'][1]();
      } else {
        $methodVariable = array($appcon, 'index' );
        if (is_callable($methodVariable, false, $callable_name)) {
          $appcon->index($this);
        }
      }
    }

  }

  public function getView($page, $data = array()){
    require_once './views/'.$page.'.php';
    // require_once '.views/header.php'

  }

  public function getModels(){
    // do later
  }

}


?>
