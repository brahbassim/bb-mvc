<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 16/05/15
 * Time: 21:25
 */

/*
|--------------------------------------------------------------------------
| Application default Controller
|--------------------------------------------------------------------------
|
| The default home controller, called when no controller/method has been
| passed to the application
|
*/

/**
 * Class Home
 */
class HomeController extends Controller
{
    /**
     * The default controller default method, witch render a view
     *
     * @param string $name : The param passed to the rendered view
     *
     * @return void
     */
    public function index($name = 'Bassim Brah')
    {
        $this->view('templates/header');
        $this->view('home/index',['name' => $name]);
        $this->view('templates/footer');
    }
}
