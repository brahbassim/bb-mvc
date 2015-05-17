<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 11/05/15
 * Time: 00:03
 */

/*
|--------------------------------------------------------------------------
| Application Str Helper
|--------------------------------------------------------------------------
|
| The Str class is a helper to  handle str operations
|
*/

/**
 * Class Str
 */
class Str {

    /**
     * Disallow creating a new object of the class with new Str()
     */
    private function __construct() {}

    /**
     * Disallow cloning the class
     */
    private function __clone() {}

    /**
     * Generate a slug
     *
     * @var string $str : the string to slugify
     *
     * @return string
     */
    public static function slug($str)
    {
        $lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
        $spacesDuplicateHypens = '/[\-\s]+/';

        $slug = preg_replace($lettersNumbersSpacesHypens,'',mb_strtolower($str,'UTF-8'));
        $slug = preg_replace($spacesDuplicateHypens,'-',$slug);
        $slug = trim($slug,'-');

        return $slug;
    }

    /**
     * Make random string of 60 caracters
     *
     * @return string
     */
    public static function random()
    {
        $result = "";

        $chars = str_shuffle("abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ1234567890@#$%&");

        $i = 0;

        while ($i < 46) {

            $char = substr($chars, mt_rand(0, strlen($chars)-1), 1);

            if (!strstr($result, $char))
            {
                $result .= $char;
                $i++;
            }
        }

        $date = new DateTime();

        return $result.$date->format('YmdHis');
    }

}
