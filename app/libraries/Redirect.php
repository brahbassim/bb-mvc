<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 17/05/15
 * Time: 00:07
 */

/*
|--------------------------------------------------------------------------
| Application Redirect Helper
|--------------------------------------------------------------------------
|
| The Redirect class is a helper to  handle urls redirection
|
*/

/**
 * Class Redirect
 */
class Redirect {

    /**
     * Disallow creating a new object of the class with new Redirect()
     */
    private function __construct() {}

    /**
     * Disallow cloning the class
     */
    private function __clone() {}

    /**
     * Redirect to specified location
     *
     * @param string $location
     */
    public static function to($location)
    {
        header('Location: '.URL.$location);
        exit;
    }

    /**
     * Redirect back to intended location
     *
     * @param $location
     */
    public static function back($location)
    {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . $location);
        exit;
    }

    /**
     * Deny access by sending an HTTP 403 header and outputting a message
     *
     * @return void
     */
    public static function denyAccess()
    {
        header('HTTP/1.0 403 Forbidden');
        header('Location: '.URL.'/views/errors/403.php');
        exit;
    }

    /**
     * Not found by sending an HTTP 404 header and outputting a message
     *
     * @return void
     */
    public static function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        header('Location: '.URL.'/views/errors/404.php');
        exit;
    }
}