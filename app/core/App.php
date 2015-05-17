<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 13/05/15
 * Time: 00:14
 */

/*
|--------------------------------------------------------------------------
| Application core App
|--------------------------------------------------------------------------
|
| Handles the request for each call to the application and calls the chosen
| controller and method after splitting the URL
|
*/

/**
 * Class App
 */
class App {

    /**
     * Stores the controller from the split URL
     *
     * @var string
     */
    protected $controller = 'homeController';

    /**
     * Stores the method from the split URL
     *
     * @var string
     */
    protected $method = 'index';

    /**
     * Stores the parameters from the split URL
     *
     * @var array
     */
    protected $params = [];

    /**
     * App default construct method
     */
    public function __construct()
    {
        // Call parseUrl and get broken URL array
        $url = $this->parseUrl();

        // Check if the current controller. If so, set it and unset from URL array
        if (file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php'))
        {
            // Set default controller to this one
            $this->controller = $url[0].'Controller';
            unset($url[0]);
        }

        // Load the controller and instantiate it
        require_once '../app/controllers/' . ucfirst($this->controller) . '.php';
        $this->controller = new $this->controller();

        // Check if the method exists in current controller. If so, set it and
        // unset from URL array
        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                // Set default method to this one
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Set parameters with the rest of the URL if exists or an empty array
        $this->params = $url ? array_values($url) : [];

        // Call the chosen method on the chosen controller, passing in the parameters
        // array (or empty array otherwise)
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /**
     * Parse the URL for the current request, splits it, stores the controller
     * and the method for that controller
     *
     * @return void
     */
    public function parseUrl()
    {
        if (isset($_GET['url']))
        {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
    }
}
