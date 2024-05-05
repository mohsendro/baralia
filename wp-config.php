<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'baralia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^{kgV3w5+pXtau/u-(,P/86|XpdGjs<?ZpPcN,s|nf7`z{0m%!QSaF9~g(U+HzTu');
define('SECURE_AUTH_KEY',  'C0w-qH1}`i(eoX0|$n].v}we`>A^5evftRwt| :h{%n#,-)f|Q}vB8ar}H2AvY+:');
define('LOGGED_IN_KEY',    'k+3# #TU7Y_+2DTq1|NK1=q-[pdHJ=&HkeVl}MF)ptkc_EZ#nnUWx6l>vWdx=-=+');
define('NONCE_KEY',        'eqQj0e*1{-Dc{.#I)NfUWZ!{zaIioU.lxDrvAePkp[%W9ruHcF#Av_d%LlR5[ze-');
define('AUTH_SALT',        'M44;^s*C<ax-c7H2m7-D8[6@Zm6a{ |<?C 1~&_;AARi-sYl7{=x, E-Z~u#{D5i');
define('SECURE_AUTH_SALT', '7fZ6v`fZU ]$^58DQC?j*=:, C^}BGRhN|(ORH.wR[gZ]*AC*~Du.nEyxNo0_Xc(');
define('LOGGED_IN_SALT',   '!9L0j^:e/!^[|owm8mX.W$_|anslY+`3?4VpG-JhQh*-_+;;2_UEwl6m;R{R^A4i');
define('NONCE_SALT',       '>,p4R69N>l1reV6nE +6,`q(LM=3VHr2dhzE,)umX/49J|p)[FUI;M8;wTw3617i');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'br_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG',     false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG',     false );
define( 'SAVEQUERIES',      false );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );   // 5.2 and later
@ini_set( 'log_errors', 'Off' );
@ini_set( 'display_errors', 'Off' );
@ini_set( 'error_log', '/home/example.com/logs/php_error.log' );

/* Add any custom values between this line and the "stop editing" line. */
/* Custom WordPress URL. */
// define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/extensions' );
// define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . 'wpplus-content' );
// define( 'UPLOADS',        'wpplus-uploads' );
// define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/extensions/plugins' );
// define( 'WP_PLUGIN_URL',  'http://' . $_SERVER['HTTP_HOST'] . 'wpplus-plugins' );
// define( 'PLUGINDIR', dirname(__FILE__) . '/blog/wp-content/plugins' );
// register_theme_directory( dirname( __FILE__ ) . '/themes-dev' );
// define('WP_DEFAULT_THEME', 'twentyeleven');
// define( 'WPMU_PLUGIN_DIR', dirname(__FILE__) . '/extensions/builtin' );
// define( 'WPMU_PLUGIN_URL', 'http://mywebsite.com/extensions/builtin' );
// define( 'NOBLOGREDIRECT', 'http://example.com' );

/* Disable Post Revisions. */
define( 'WP_POST_REVISIONS', false );
// define( 'WP_POST_REVISIONS', 3 );
define('AUTOSAVE_INTERVAL', 86400 );
/* Media Trash. */
define( 'MEDIA_TRASH', true );
/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '14' );

/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/* WordPress Cache */
// define( 'WP_CACHE', true );

/* Compression */
// define( 'COMPRESS_CSS',        true );
// define( 'COMPRESS_SCRIPTS',    true );
// define( 'CONCATENATE_SCRIPTS', true );
// define( 'ENFORCE_GZIP',        true );
// define( 'DO_NOT_UPGRADE_GLOBAL_TABLES', true );

/* CRON */
// define( 'DISABLE_WP_CRON', false );
// define( 'WP_CRON_LOCK_TIMEOUT', 30 );

/* Updates */
// define( 'WP_AUTO_UPDATE_CORE', false );
// define( 'DISALLOW_FILE_MODS', true );
// define( 'DISALLOW_FILE_EDIT', true );
// define( 'AUTOMATIC_UPDATER_DISABLED', true );

/* CURL */
// define( 'WP_HTTP_BLOCK_EXTERNAL', true );
// define( 'WP_ACCESSIBLE_HOSTS', 'api.wordpress.org,*.github.com' );
// define( 'IMAGE_EDIT_OVERWRITE', true );

/* SSL */
// define( 'FORCE_SSL_LOGIN', true );
// define( 'FORCE_SSL_ADMIN', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
