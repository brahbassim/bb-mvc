<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 10/05/15
 * Time: 17:17
 */

/*
|--------------------------------------------------------------------------
| Application Hash Helper
|--------------------------------------------------------------------------
|
| The Hash class is a helper to  handle hashing
|
*/

/**
 * Class Hash
 */
class Hash {
    /**
     * Disallow creating a new object of the class with new Hash()
     */
    private function __construct() {}

    /**
     * Disallow cloning the class
     */
    private function __clone() {}

    /**
     * Make a hash
     *
     * @var string $str : the string to be hashed
     *
     * @return string
     */
    public static function make($str)
    {
        return password_hash($str, PASSWORD_BCRYPT, ['cost' => 10]);
    }

    /**
     * Verify if a hash correspond
     *
     * @var string $str : the string to verify
     * @var string $hash  : the hash
     *
     * @return boolean
     */
    public  static function check($str, $hash)
    {
        return password_verify($str, $hash);
    }

}