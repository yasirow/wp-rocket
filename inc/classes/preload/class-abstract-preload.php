<?php
namespace WP_Rocket\Preload;

/**
 * Abstract preload class
 *
 * @since 3.2
 * @author Remy Perona
 */
abstract class Abstract_Preload {
	/**
	 * Background Process instance
	 *
	 * @since 3.2
	 * @var Full_Process
	 */
	protected $preload_process;

	/**
	 * Constructor
	 *
	 * @since 3.2
	 * @author Remy Perona
	 *
	 * @param Full_Process $preload_process Background Process instance.
	 */
	public function __construct( Full_Process $preload_process ) {
		$this->preload_process = $preload_process;
	}

	/**
	 * Cancels any preload process running
	 *
	 * @since 3.2
	 * @author Remy Perona
	 *
	 * @return void
	 */
	public function cancel_preload() {
		if ( \method_exists( $this->preload_process, 'cancel_process' ) ) {
			$this->preload_process->cancel_process();
		}

		$this->preload_process->complete();
	}
}
