<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 10/05/15
 * Time: 17:43
 */

/*
|--------------------------------------------------------------------------
| Application Session Helper
|--------------------------------------------------------------------------
|
| The Session class is a helper to  handle sessions
|
*/

/**
 * Class Session
 */
class Session {
    /**
     * Disallow creating a new object of the class with new Session()
     */
    private function __construct() {}

    /**
     * Disallow cloning the class
     */
    private function __clone() {}

    /**
     * Check if session exists
     *
     * @param $key
     *
     * @return bool
     */
    public static function exists($key)
    {
        return (isset($_SESSION[$key])) ? true : false;
    }

    /**
     * Set a session
     *
     * @param $key
     * @param $value
     *
     * @return void
     */
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Get specified session
     *
     * @param $key
     *
     * @return mixed
     */
    public static function get($key)
    {
        if(self::exists($key))
        {
            return $_SESSION[$key];
        }
    }

    /**
     * Delete a given session
     *
     * @param $key
     *
     * @return void
     */
    public static function delete($key)
    {

        if (self::exists($key))
        {
            unset($_SESSION[$key]);
        }
    }

    /**
     * Destroy all sessions
     *
     * @return void
     */
    public static function destroy()
    {
        if(isset($_SESSION))
        {
            $_SESSION = array();
            session_destroy();
        }
    }

    /**
     * Flash a given session
     *
     * @param $key
     *
     * @return mixed
     */
    public static function flash($key)
    {
        if(self::exists($key))
        {
            $session = self::get($key);
            self::delete($key);
            return $session;
        }
    }

    /**
     * Generate session id
     *
     * @return void
     */
    public static function genId()
    {
        session_regenerate_id();
    }
}