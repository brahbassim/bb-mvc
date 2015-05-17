<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 13/05/15
 * Time: 00:38
 */

/*
|--------------------------------------------------------------------------
| Application core Controller
|--------------------------------------------------------------------------
|
| The base controller for all other controllers. Extend this for each
| created controller and get access to it's wonderful functionality
|
*/

/**
 * Class Controller
 */
class Controller
{
    /**
     * Render a view
     *
     * @param string $view : The rendered view name
     * @param array  $data : Data passed to the views
     *
     * @return void
     */
    public function view($view,$data = [] )
    {
        require_once '../app/views/' .$view. '.php';
    }

    /**
     * Load the specified model and return a new instance of them
     *
     * @param string $model : The name of the model to load
     *
     * @return object
     */
    public function model($model)
    {
        require_once '../app/models/' . ucfirst($model) . '.php';
        return new $model();
    }
}
