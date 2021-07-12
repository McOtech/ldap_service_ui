<?php 
  namespace Paudel\App\Traits;

  trait Utils {
    public function url($route, $params = []) {
      try {
        $url = "?r={$route}";
        if (count($params) > 0) {
          foreach ($params as $param => $value) {
            $url += "&{$param}={$value}";
          }
        }
        return $url;
      } catch (\Throwable $th) {
        header('location: ?r=page-not-found');
      }
    }
  }
?>