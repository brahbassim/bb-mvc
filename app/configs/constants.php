<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 16/05/15
 * Time: 22:15
 */

/*
|--------------------------------------------------------------------------
| Application constants
|--------------------------------------------------------------------------
|
| Add constants here to make them accessible in the wall of application
|
*/

// Root INC
define('INC', dirname(dirname(__DIR__)));

// Root URL
define('URL',
    'http://'.$_SERVER['HTTP_HOST'].'/'.
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', INC).'/public'
    )
);

// Root ASSET
define('ASSET',
    'http://'.$_SERVER['HTTP_HOST'].'/'.
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', INC).'/public'
    )
);
