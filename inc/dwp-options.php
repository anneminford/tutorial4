<?php
/**
 * @package bootstrapwp
 */
 
if ( ! function_exists('dwp_option') ) {
	function dwp_option($id, $fallback = false, $param = false ) {
		global $dwp_options;
		if ( $fallback == false ) $fallback = '';
		$output = ( isset($dwp_options[$id]) && $dwp_options[$id] !== '' ) ? $dwp_options[$id] : $fallback;
		if ( !empty($dwp_options[$id]) && $param ) {
			$output = $dwp_options[$id][$param];
		}
		return $output;
	}
}