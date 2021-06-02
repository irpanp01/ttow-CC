<?php
    ini_set('allow_url_fopen',1);
    switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
        case '/':
            require 'index.php';
            break;
        case '/index':
            require 'index.php';
            break;
        case '/index.php':
            require 'index.php';
            break;
        case '/semar':
            require 'semar.php';
            break;
        case '/search/getsemar':
            require __DIR__.'/search/getsemar.php';
            break;   
        case '/semar.php':
            require 'semar.php';
            break; 
        case '/gareng':
            require 'gareng.php';
            break;
        case '/search/getgareng':
            require __DIR__.'/search/getgareng.php';
            break;
        case '/gareng.php':
            require 'gareng.php';
            break;
        case '/petruk':
            require 'petruk.php';
            break;
        case '/search/getpetruk':
            require __DIR__.'/search/getpetruk.php';
            break;
        case '/petruk.php':
            require 'petruk.php';
            break;
        case '/bagong':
            require 'bagong.php';
            break;
        case '/search/getbagong':
            require __DIR__.'/search/getbagong.php';
            break;
        case '/bagong.php':
            require 'bagong.php';
            break;
    }
?>