<?php
	defined( 'ABSPATH' ) || die( 'Sorry, but you cannot access this page directly.' );

	class Xml_Feedback extends Feedback_Abstract {
		protected $mime = 'application/json';

		public function asOutput( bool $exit = true ) {
			header( sprintf( 'Content-Type: %s', $this->mime ) );
			http_response_code( $this->code );
			echo $this->xml_encode( $this );
			if ( true == $exit ) {
				exit();
			}
		}

		private function xml_encode( $input ) {
			return '';
		}
	}