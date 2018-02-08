<?php
/**
 * @package  ZGM
 */
namespace ZGM\Frontend;

class Frontend
{

	private $plugin_name;

	
	private $version;


	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) 
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	public function enqueue_styles() 
	{

		wp_enqueue_style( $this->plugin_name, PLUGIN_ROOT . 'dist/main.css', array(), $this->version, 'all' );

	}

	public function enqueue_scripts() 
	{


		wp_enqueue_script( $this->plugin_name, PLUGIN_ROOT . 'dist/main.js', array( 'jquery' ), $this->version, false );

	}


}