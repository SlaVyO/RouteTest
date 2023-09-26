<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello, World!</title>
</head>
<body>
        <h3><?php
          if ( isset ($_GET["urlQuery"])){
          $urlQuery = $_GET["urlQuery"];
          //echo $urlQuery;
          if ($urlQuery=='show/me/your/love/') {
          require_once('../show.php');
            exit();
          }
          $queryArray = explode("/", $urlQuery);
          $queryArray = array_diff($queryArray, array('', NULL, false));
           // var_dump($queryArray);
          echo 'Welcome to '.$queryArray[0].' controller.';
           //if (count($queryArray) >1 && $queryArray[1] != '') {
             if (count($queryArray) >1) {
          echo "</br>";
          echo 'You want to see how '.$queryArray[1].' model is work.';
          }
         // if (count($queryArray) >2 && $queryArray[2] != '') {
          if (count($queryArray) >2) {
            //var_dump($queryArray);
          $string.= $queryArray[2];
            $s='';
          for ($i=3; $i< count($queryArray); $i++){
          $string.= ', '.$queryArray[$i];
            $s='s';
             }
         echo "</br>";
         echo 'With '.$string.' method'.$s.'.';
          }
          } else {echo 'Welcome to Hello, World! page';
                  echo "</br>";
                  echo 'You may visit <a href="./news/">News page.</a>';
                  echo "</br>";
                  echo 'Or <a href="./news/papper/">News Papper page</a>';
                  echo "</br>";
                  echo 'Or <a href="./news/papper/one/two/new">Some page</a>';
                  echo "</br>";
                  
                 $razreshenniye_simvoli = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$rand =  substr(str_shuffle($razreshenniye_simvoli), 0, 20);
$a = "./".substr($rand, 0, 5)."/".substr($rand, 5, 5)."/".substr($rand, 10, 5)."/".substr($rand, 15, 5)."/";
                  echo 'Or <a href="'.$a.'">Randome page</a>';
//echo $a;
                 }
          
          ?></h3>
<?php 
//echo $_SERVER['PHP_SELF'] ?? 'nobody1';
//echo "</br>";
//echo basename(__FILE__) ?? 'nobody2';
//echo "</br>";
//echo $_SERVER['REQUEST_URI'] ?? 'nobody';
//echo "</br>";
//if ( isset ($_GET)) var_dump($_GET);

// if it does not exist.
//$username = $_GET['user'] ?? 'nobody';
// This is equivalent to:
//$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
  
  echo "</br>";
  echo "</br>";
  echo "</br>";
 ?>
</br>
</br>
  <a href="/">Index</a>
</body>
</html>




