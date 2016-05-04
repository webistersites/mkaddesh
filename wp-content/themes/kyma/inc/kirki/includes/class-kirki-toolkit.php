<?php
/**
 * The main Kirki object
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Kirki_Toolkit' ) ) {
	final class Kirki_Toolkit {

		/** @var Kirki The only instance of this class */
		public static $instance = null;

		public static $version = '2.0.7';

		public $font_registry = null;
		public $scripts       = null;
		public $api           = null;
		public $styles        = array();

		/**
		 * Access the single instance of this class
		 * @return Kirki
		 */
		public static function get_instance() {
			if ( null == self::$instance ) {
				self::$instance = new Kirki_Toolkit();
			}
			return self::$instance;
		}

		/**
		 * Shortcut method to get the translation strings
		 */
		public static function i18n() {

			$i18n = array(
				'background-color'      => esc_attr__( 'Background Color', 'kyma' ),
				'background-image'      => esc_attr__( 'Background Image', 'kyma' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'kyma' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'kyma' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'kyma' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'kyma' ),
				'inherit'               => esc_attr__( 'Inherit', 'kyma' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'kyma' ),
				'cover'                 => esc_attr__( 'Cover', 'kyma' ),
				'contain'               => esc_attr__( 'Contain', 'kyma' ),
				'background-size'       => esc_attr__( 'Background Size', 'kyma' ),
				'fixed'                 => esc_attr__( 'Fixed', 'kyma' ),
				'scroll'                => esc_attr__( 'Scroll', 'kyma' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'kyma' ),
				'left-top'              => esc_attr__( 'Left Top', 'kyma' ),
				'left-center'           => esc_attr__( 'Left Center', 'kyma' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'kyma' ),
				'right-top'             => esc_attr__( 'Right Top', 'kyma' ),
				'right-center'          => esc_attr__( 'Right Center', 'kyma' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'kyma' ),
				'center-top'            => esc_attr__( 'Center Top', 'kyma' ),
				'center-center'         => esc_attr__( 'Center Center', 'kyma' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'kyma' ),
				'background-position'   => esc_attr__( 'Background Position', 'kyma' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'kyma' ),
				'on'                    => esc_attr__( 'ON', 'kyma' ),
				'off'                   => esc_attr__( 'OFF', 'kyma' ),
				'all'                   => esc_attr__( 'All', 'kyma' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'kyma' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'kyma' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'kyma' ),
				'greek'                 => esc_attr__( 'Greek', 'kyma' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'kyma' ),
				'khmer'                 => esc_attr__( 'Khmer', 'kyma' ),
				'latin'                 => esc_attr__( 'Latin', 'kyma' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'kyma' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'kyma' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'kyma' ),
				'arabic'                => esc_attr__( 'Arabic', 'kyma' ),
				'bengali'               => esc_attr__( 'Bengali', 'kyma' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'kyma' ),
				'tamil'                 => esc_attr__( 'Tamil', 'kyma' ),
				'telugu'                => esc_attr__( 'Telugu', 'kyma' ),
				'thai'                  => esc_attr__( 'Thai', 'kyma' ),
				'serif'                 => _x( 'Serif', 'font style', 'kyma' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'kyma' ),
				'monospace'             => _x( 'Monospace', 'font style', 'kyma' ),
				'font-family'           => esc_attr__( 'Font Family', 'kyma' ),
				'font-size'             => esc_attr__( 'Font Size', 'kyma' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'kyma' ),
				'line-height'           => esc_attr__( 'Line Height', 'kyma' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'kyma' ),
				'top'                   => esc_attr__( 'Top', 'kyma' ),
				'bottom'                => esc_attr__( 'Bottom', 'kyma' ),
				'left'                  => esc_attr__( 'Left', 'kyma' ),
				'right'                 => esc_attr__( 'Right', 'kyma' ),
				'color'                 => esc_attr__( 'Color', 'kyma' ),
				'add-image'             => esc_attr__( 'Add Image' , 'kyma' ),
				'change-image'          => esc_attr__( 'Change Image' , 'kyma' ),
				'remove'                => esc_attr__( 'Remove' , 'kyma' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'kyma' ),
			);

			$config = apply_filters( 'kirki/config', array() );

			if ( isset( $config['i18n'] ) ) {
				$i18n = wp_parse_args( $config['i18n'], $i18n );
			}

			return $i18n;

		}

		/**
		 * Shortcut method to get the font registry.
		 */
		public static function fonts() {
			return self::get_instance()->font_registry;
		}

		/**
		 * Constructor is private, should only be called by get_instance()
		 */
		private function __construct() {
		}

		/**
		 * Return true if we are debugging Kirki.
		 */
		public static function kirki_debug() {
			return (bool) ( defined( 'KIRKI_DEBUG' ) && KIRKI_DEBUG );
		}

	    /**
	     * Take a path and return it clean
	     *
	     * @param string $path
		 * @return string
	     */
	    public static function clean_file_path( $path ) {
	        $path = str_replace( '', '', str_replace( array( "\\", "\\\\" ), '/', $path ) );
	        if ( '/' === $path[ strlen( $path ) - 1 ] ) {
	            $path = rtrim( $path, '/' );
	        }
	        return $path;
	    }

		/**
		 * Determine if we're on a parent theme
		 *
		 * @param $file string
		 * @return bool
		 */
		public static function is_parent_theme( $file ) {
			$file = self::clean_file_path( $file );
			$dir  = self::clean_file_path( get_template_directory() );
			$file = str_replace( '//', '/', $file );
			$dir  = str_replace( '//', '/', $dir );
			if ( false !== strpos( $file, $dir ) ) {
				return true;
			}
			return false;
		}

		/**
		 * Determine if we're on a child theme.
		 *
		 * @param $file string
		 * @return bool
		 */
		public static function is_child_theme( $file ) {
			$file = self::clean_file_path( $file );
			$dir  = self::clean_file_path( get_stylesheet_directory() );
			$file = str_replace( '//', '/', $file );
			$dir  = str_replace( '//', '/', $dir );
			if ( false !== strpos( $file, $dir ) ) {
				return true;
			}
			return false;
		}

		/**
		 * Determine if we're running as a plugin
		 */
		private static function is_plugin() {
			if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( get_stylesheet_directory() ) ) ) {
				return false;
			}
			if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( get_template_directory_uri() ) ) ) {
				return false;
			}
			if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( WP_CONTENT_DIR . '/themes/' ) ) ) {
				return false;
			}
			return true;
		}

		/**
		 * Determine if we're on a theme
		 *
		 * @param $file string
		 * @return bool
		 */
		public static function is_theme( $file ) {
			if ( true == self::is_child_theme( $file ) || true == self::is_parent_theme( $file ) ) {
				return true;
			}
			return false;
		}
	}
}
