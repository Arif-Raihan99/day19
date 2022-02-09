<?php

require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\Word;

if (isset($_GET['pages'])){
    if ($_GET['pages']== 'home'){
        include 'pages/home.php';
    }
    elseif ($_GET['pages']== 'series'){
        include 'pages/home.php';
    }
}
elseif (isset($_POST['btn'])){
    $arif = new Word($_POST);
    $result = $arif->count();
    extract($result);
    include 'pages/home.php';

}
elseif (isset($_POST['btn'])){
    $word = new Word();
    $result = $word->series();

}

