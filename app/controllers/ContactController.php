<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 16/05/15
 * Time: 23:29
 */

/**
 * Class Contact
 */
class ContactController extends Controller
{
    /**
     * Render contact page
     *
     * @return void
     */
    public function index()
    {
        $this->view('home/contact');
    }
}
