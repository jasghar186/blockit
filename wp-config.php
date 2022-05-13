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
define( 'DB_NAME', 'blocky' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']aw!&dZ`K&%|/48wS,FYl[VUFy@0SUhq&s)?%*tspTDro8.Zh}&F5aU@z@.G+D%=' );
define( 'SECURE_AUTH_KEY',  '@a6o:j=b1{(MCcfA-e/G^`%3:6b&iQ?c?~CL81}O`N,*-?/U8tIoY[ptjMRUdv|t' );
define( 'LOGGED_IN_KEY',    '& Tq#KA(`#*}2&+bi}N,|vP`yf7A%OH_1XahuyqC>kVa9}b3Rn0D9?$hj!?<nw/=' );
define( 'NONCE_KEY',        'E6[{ZYL MJ6f T?IU!}2^jbwOz..+h1X?bzZP#IC(HT]qo*@+j#!u7_sMnE,*.X~' );
define( 'AUTH_SALT',        'd.]W84I=/-, 7Q-U&,!g<3:d.f41@+PoBJAX9pr&Bf81DiIzcU*g*P],c<6qyYp]' );
define( 'SECURE_AUTH_SALT', 'U#S8&8JOOfJv3FLDSj^>4;H|!)d{.MW:{s`{G76&[%<LjDl26U!i:~q4jSHpmIa)' );
define( 'LOGGED_IN_SALT',   'Qs-19@wa_V C3/uAnis-G%HsCW?$s-vhh2&.B*k#hRQKvcHW(tP+PvuIV)Tipod1' );
define( 'NONCE_SALT',       '>~*r[vkU}lAK%ID._LRQWm_9SmN60UcA1>#]DAD)&K:_;Rz.$A9_T7r=u|k>^!jn' );

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
