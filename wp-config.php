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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'example' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '];@Sf&7>x3A:K{dT}<<_6Ckr-x6%/|a5Nl`<)UC!daVrXCPLGNMt]#+E{U%!&W7U' );
define( 'SECURE_AUTH_KEY',  'HD/Lj_jg%Mxy[?[J3LWo|J[Q=uY^  uytW**?(TqKEL*r[K6}:q/1zrMw2[qhXf0' );
define( 'LOGGED_IN_KEY',    'Mr>-L{0blRn[t9w4hR{8wD X?<is*XM0<!Xu**T@pxqRJp/BCR|&#Zh7?J#l=GlO' );
define( 'NONCE_KEY',        'KH&lw2dVNm5E8QpHb$z~28JQ=l<,.!Wmd~d+:FAPwxi;[^X-_ ^GLZ@f{i`6r8,W' );
define( 'AUTH_SALT',        '~hN&4y?)bBns(7>FWQiXA1lOk:6NoD0yH823ayin9MD>lP:{1PD5 Yl6%{Sc204c' );
define( 'SECURE_AUTH_SALT', 'o[[#jis<|1hJGYpHw8]3q^yO)>-s|7#l3cOZN?EuZ3pg0QeF;^i`BFh1E<j_a@h+' );
define( 'LOGGED_IN_SALT',   '=|Fi2if#]bM[kDy0+[/`Cu_en-VFYMEy78s:0NUx!p-/cJZx&5.l4]yfLe~&T+?a' );
define( 'NONCE_SALT',       'ZtAWh{nv2 0VlqKGZ`A=/>K7<DhNe%77~_&rr(Q$/D.1k>#WrLgZt!oxz0YdfvP~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
