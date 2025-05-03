<?php
namespace Padma_Advanced;

// TGMPA einbinden
require_once __DIR__ . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', __NAMESPACE__ . '\\register_required_plugins' );

function register_required_plugins() {

	$plugins = array(
		array(
			'name'     => 'PSOURCE Shortcodes',
			'slug'     => 'psource-shortcodes',
			'source'   => 'https://github.com/cp-psource/psource-shortcodes/releases/download/v1.0.1/psource-shortcodes.zip',
			'required' => true,
		),
	);

	$config = array(
		'id'           => 'padma-advanced',
		'menu'         => 'install-required-plugins',
		'has_notices'  => true,
		'dismissable'  => false,
		'is_automatic' => true,
	);

	\tgmpa( $plugins, $config );
}
