<?php

/**
 * Static functions for the plugin.
 */
class Select2Functions {

	/**
	 * Outputs the required <script> and <link> tags
	 *
	 * @return void
	 */
	public static function htmlHead() : void 
	{
		$random_hex = RANDOM_HEX;
		$resdir = plugin_geturl('select2').'res/select2/4.0.13';
		echo '
		<!-- BOF SELECT2 head -->

		<script nonce="' . $random_hex . '" src="' . $resdir . '/js/select2.min.js" defer></script>
		<link media="screen" href="' . $resdir . '/css/select2.min.css" type="text/css" rel="stylesheet">
		<link media="screen" href="' . $resdir . '/../fixes.css" type="text/css" rel="stylesheet">

		<!-- EOF SELECT2 head -->
		';
	}

	/**
	 * Outputs the required <script> tag
	 *
	 * Uses a nonce for CSP compatibility.
	 *
	 * @return void
	 */
	public static function htmlFooter() {
		$random_hex = RANDOM_HEX;
		echo '
		<!-- BOF SELECT2 footer -->

		// activate select2 - a search filter for select boxes

		<script nonce="' . $random_hex . '">
			jQuery(document).ready(function() {

				var aSelect2options={placeholder: "🔎 ..."};

				// ----- admin -> entries -> manage entries - tag filter 
				$(\'select.alignleft\').select2(aSelect2options);

				// ----- admin -> entries -> manage entries - edit entry
				$(\'select#bb_attach\').select2(aSelect2options);
				$(\'select#bb_image\').select2(aSelect2options);
				$(\'select#bb_gallery\').select2(aSelect2options);

				// ----- admin -> configuration
				$(\'select#lang\').select2(aSelect2options);
			});
		</script>
		<!-- EOF SELECT2 footer -->';
	}

}
