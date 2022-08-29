<?php
require_once('./vendor/autoload.php');
require_once('index.php');

use Twig\Environment;
use Twig\Loader\FilesystemLoader;



$loader = new FilesystemLoader(__DIR__.'./src/view/templates');
$twig = new Environment($loader);

$arr1 = array('name'=>'milan','addres'=>'Nawalparasi');
echo $twig->render('header.html.twig', ['usr'=>$arr,'usr1'=>$arr1]);
echo $twig->render('footer.html.twig');

?>