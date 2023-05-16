<?php
    $page=(isset ($_GET ['page'])) ? $_GET['page']:"main";
    switch ($page) {
    case 'home':include "page/home.html";break;
    case 'about':include "page/about.html";break;
    case 'menumasakan':include "page/menumasakan.html";break;
    case 'menuhariraya':include "page/menuhariraya.html";break;
    case 'request':include "page/request.html";break;
    case 'galery':include "page/galery.html";break;
    case 'testimoni':include "page/testimoni.html";break;
    case 'main':
    default:include "page/home.html";
    }
?>