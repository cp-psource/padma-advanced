<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://cp-psource.github.io/ps-padma/
 * @since      1.0.0
 *
 * @package    Padma Advanced
 * @subpackage Padma Advanced/admin/partials
 */

namespace Padma_Advanced;

$load = true;

/**
 * Detect required Padma or plugins.
 */
if ( ! class_exists( 'Padma' ) ) {
	require_once PADMA_ADVANCED_DIR . 'admin/partials/padma-advanced-require-padma.php';
}


if ( $load ) {

	$settings = new Padma_Advanced_Admin( __( 'Settings', 'padma-advanced' ) );
	$settings->set_settings();

	/**
	 * Process Form
	 */
	$settings->process_settings();


	/**
	 * Display settings form
	 */
	$settings->display();

}
