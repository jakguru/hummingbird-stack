<?php
	require_once realpath( dirname( __FILE__ ) ) . '/hbs/hbs.php';

	try {
		$hba = new \Hummingbird\HummingbirdApp();
	}
	catch ( Exception $e ) {
		echo '<pre>';
		print_r( $e->getMessage() );
		echo '</pre>';
	}

	$hba->setConfig( array(
		'session' => array(
			'enabled' => true,
		),
	) );


	try {
		$hba->run();
	}
	catch ( Exception $e ) {
		echo '<pre>';
		print_r( $e->getMessage() );
		echo '</pre>';
	}

	echo '<pre>';
	print_r( $hba );
	echo '</pre>';