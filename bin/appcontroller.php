<?php
// echo "</br>appcontroller.php loaded";

class AppController
{

  public function __construct($urlPathParts, $config)
  {
    // db information
    $this->urlPathParts = $urlPathParts;

    // var_dump($this->urlPathParts);

    if($urlPathParts[0]){
      include './controllers/'.$urlPathParts[0].'.php';

      $appcon = new $urlPathParts[0]($this);

      if (isset($urlPathParts[1])) {
        $appcon->$urlPathParts[1]($this);
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

  }

  public function getModels(){
    // do later
  }

}


?>
