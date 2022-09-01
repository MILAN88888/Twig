<?php
declare(strict_types=1);
require_once('./vendor/autoload.php');
require_once('index.php');

use Twig\Environment;
use Twig\Loader\FilesystemLoader;



$loader = new FilesystemLoader(__DIR__.'./src/view/templates');
$twig = new Environment($loader);

$arr1 = array('name'=>'milan','addres'=>'Nawalparasi');
echo $twig->render('index.html.twig', ['usr'=>$arr,'usr1'=>$arr1]);
?>