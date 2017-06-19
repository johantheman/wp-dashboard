<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-dashboard');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QqKR.$Bt&=KHjYIgM5Ore4$wj~S7 ^)}zYjRg-y3k6{R=xWVKI3V$JZa+KRzfahG');
define('SECURE_AUTH_KEY',  '%H w;i]`_@l{Us[/()y]HIg.K|(/!JCD>DaS/`L:<v&}$gu|.#I;;Sg{B1(go&$(');
define('LOGGED_IN_KEY',    'XA|_j[Bd240QB{}G0)Npi~AGBNsfTR7>gt*_cH/sZ=c?a2.{+_(&E30!G$U:kUI0');
define('NONCE_KEY',        '3nAde6!aVUwdJO!Ha/:mZE~I6`FwgzYDRmWQ#M^0<VFpF:gfOz/lO4IcD4;wu&E9');
define('AUTH_SALT',        '*gWzN,,fy5dPybG:8d_.SPbDXGW42g:q07R.{{uLRIV,O}]+~G=v~l@s>Vvt6wT)');
define('SECURE_AUTH_SALT', 'm;J+)n]B1ux*P:(oKVH,)oN!{Yof{s|0V%(EE&qcHcyZ b^v=?]W>z,sq#Q|iV0I');
define('LOGGED_IN_SALT',   'smDE@Ep{;9ysC{)7p?{cv}_Tk9BC<M/}|MxjFjQ. 4gklPa,({BikyosJ%l<v1fK');
define('NONCE_SALT',       '=%|oqe-C+68_yA]&+UeqDr0jVGs7YA{|Lueav#d]/;X2xPVo2`J$EVd!nFW]s{Jd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
