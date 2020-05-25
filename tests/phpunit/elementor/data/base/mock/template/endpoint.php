<?php
namespace Elementor\Tests\Phpunit\Elementor\Data\Base\Mock\Template;

class Endpoint extends \Elementor\Data\Base\Endpoint {

	/**
	 * @var \Elementor\Tests\Phpunit\Elementor\Data\Base\Mock\Template\Controller
	 */
	protected $controller;

	use BaseTrait;

	public function get_type() {
		return 'endpoint';
	}

	protected function register() {
		// Can be part of BaseTrait.
		if ( ! $this->controller->bypass_register_status ) {
			parent::register();
		}
	}
}
