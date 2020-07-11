<?php

namespace WPMVC\MVC;

use Exception;

/**
 * MVC engine.
 *
 * @author Alejandro Mostajo <http://about.me/amostajo>
 * @copyright 10Quality <http://www.10quality.com>
 * @license MIT
 * @package WPMVC\MVC
 * @version 2.1.4
 */
class Engine
{
    /**
     * Path to where controllers are.
     * @since 1.0.0
     * @var string
     */
    protected $controllers_path;

    /**
     * Plugin namespace.
     * @since 1.0.0
     * @var string
     */
    protected $namespace;

    /**
     * View class object.
     * @since 1.0.0
     * @var string
     */
    protected $view;

    /**
     * Default engine constructor.
     * @since 1.0.0
     * @since 2.1.0 Added views_relative_path
     *
     * @param string $views_path              Primary path in which views are located.
     * @param string $controllers_path        Path in which controllers are located.
     * @param string $namespace               Project namespace.
     * @param string $alt_views_relative_path Alternate relative path (for themes) in which views can be located.
     */
    public function __construct( $views_path, $controllers_path, $namespace, $alt_views_relative_path = null )
    {
        $this->controllers_path = $controllers_path;
        $this->namespace = $namespace;
        $this->view = new View( $views_path, $alt_views_relative_path );
    }

    /**
     * Calls controller and function.
     * Echos return.
     * @since 1.0.0
     * @since 1.0.3 Renamed to exec to run, for WP theme validation pass.
     *
     * @param string $controller_name Controller name and method. i.e. DealController@show
     */
    public function call( $controller_name )
    {
        $args = func_get_args();
        unset( $args[0] );
        echo $this->run( $controller_name, $args );
    }

    /**
     * Calls controller and function. With arguments are passed by.
     * Echos return.
     * @since 1.0.2
     * @since 1.0.3 Renamed to exec to run, for WP theme validation pass.
     *
     * @param string $controller_name Controller name and method. i.e. DealController@show
     * @param array  $args              Function args passed by. Arguments ready for call_user_func_array call.
     */
    public function call_args( $controller_name, $args )
    {
        echo $this->run( $controller_name, $args );
    }

    /**
     * Returns controller results.
     * @since 1.0.0
     * @since 1.0.3 Renamed to exec to run, for WP theme validation pass.
     *
     * @param string $controller_name Controller name and method. i.e. DealController@show
     *
     * @return mixed
     */
    public function action( $controller_name )
    {
        $args = func_get_args();
        unset( $args[0] );
        return $this->run( $controller_name, $args );
    }

    /**
     * Returns controller results. With arguments are passed by.
     * @since 1.0.2
     * @since 1.0.3 Renamed to exec to run, for WP theme validation pass.
     *
     * @param string $controller_name Controller name and method. i.e. DealController@show
     * @param array  $args              Function args passed by. Arguments ready for call_user_func_array call.
     *
     * @return mixed
     */
    public function action_args( $controller_name, $args )
    {
        return $this->run( $controller_name, $args );
    }

    /**
     * runutes controller.
     * Returns result.
     * @since 1.0.0
     * @since 1.0.3 Renamed to exec to run, for WP theme validation pass.
     *
     * @param string $controller_name Controller name and method. i.e. DealController@show
     * @param array  $args               Controller parameters.
     */
    private function run( $controller_name, $args )
    {
        // Process controller
        $compo = explode( '@', $controller_name );
        if ( count( $compo ) <= 1 ) {
            throw new Exception( sprintf( 'Controller action must be defined in %s.', $controller_name ) );
        }
        // Get controller
        require_once(  $this->controllers_path . $compo[0] . '.php' );
        $classname = sprintf( $this->namespace . '\Controllers\%s', $compo[0]);
        $controller = new $classname( $this->view );

        if ( !method_exists( $controller, $compo[1] ) ) {
            throw new Exception( sprintf( 'Controller action "%s" not found in %s.', $compo[1], $compo[0] ) );
        }
        return call_user_func_array( [ $controller, $compo[1] ], $args );
    }

    /**
     * Getter function.
     * @since 1.0.1
     *
     * @param string $property
     *
     * @return mixed
     */
    public function __get( $property )
    {
        switch ($property) {
            case 'view':
                return $this->$property;
        }
        return null;
    }
}