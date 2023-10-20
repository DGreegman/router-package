<?php

use Greegman\Route\Route;

require 'vendor/autoload.php';

    Route::handle('GET', '/contact', 'contact.php');
    Route::handle('GET', '/pricing', 'pricing.php');
    
    // using callback function 
    Route::get('/test', function(){
        echo "good day";
    });

// testing using function 

    function testing(){
        echo "I'm testing";
    }    

    Route::get('/testing', 'testing');

