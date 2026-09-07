<?php
/**
 * SolveBeam Boilerplate
 *
 * @author    SolveBeam
 * @copyright 2026 SolveBeam
 * @license   GPL-2.0-or-later
 * @package   SolveBeam\WordPressPluginBoilerplate
 *
 * @wordpress-plugin
 * Plugin Name:       SolveBeam Boilerplate
 * Plugin URI:        https://www.solvebeam.com/
 * Description:       A modern WordPress plugin boilerplate by SolveBeam, providing a structured foundation for building scalable and maintainable plugins.
 * Version:           1.0.0
 * Requires at least: 6.7
 * Requires PHP:      8.2
 * Author:            SolveBeam
 * Author URI:        https://www.solvebeam.com/
 * Text Domain:       solvebeam-boilerplate
 * Domain Path:       /languages/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * GitHub URI:        https://github.com/solvebeam/solvebeam-wordpress-plugin-boilerplate
 */

declare(strict_types=1);

namespace SolveBeam\WordPressPluginBoilerplate;

if ( ! defined( 'ABSPATH' ) ) exit;

( static function (): void {
	$autoload_path = __DIR__ . '/vendor/autoload_packages.php';

	if ( \file_exists( $autoload_path ) ) {
		require_once $autoload_path;
	}

	Plugin::instance( __FILE__ );
} )();
