<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ev_dev' );

/** Database username */
define( 'DB_USER', 'balance' );

/** Database password */
define( 'DB_PASSWORD', 'b@l@nc3' );

/** Database hostname */
define( 'DB_HOST', '18.236.118.191:56331' );

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
define( 'AUTH_KEY',         'YaNP%@i`VQTg[jE;nofLS60[SrSD.|jIW:$qC% Zrt%`Dqe&XIM<^`J#7$41FewL' );
define( 'SECURE_AUTH_KEY',  '%g&,c.E5er;y!UzZF!(&Dm!ds)5ytKXTHak,v?C4.@:=a)qN3{utFGi@jr^W>K]Y' );
define( 'LOGGED_IN_KEY',    '3(}@N4nIQ}h$X{q6LORyvmydQE<8owgP8]7^vxxjKhbh+j%Wc5T)#(Y` ArV?)sP' );
define( 'NONCE_KEY',        ',wi>JrEN;$_o.QNoZQ*^#ONzDr-I,2mOJ/pIO@GuSG)K=nww34_S8/rse_bhvQ_m' );
define( 'AUTH_SALT',        'iyc!yW_c?m8!|jFNxC2K@izi NO]N5C~3>fW07n%-,!3~.$4&v3z(;u[1DnM+?D<' );
define( 'SECURE_AUTH_SALT', '6UQ:U31Bf4WBtv Hf6DttRQxmdCGvY>VLBKa%PC]m~DyJh=WSFb>zwKBuY|YpzAy' );
define( 'LOGGED_IN_SALT',   '7G:d6c`fyQ|L)hDVdd$/Idc$#.+]hacxp46_p:KV/}_:Ix#3&@T$?mSM3jKn>2eJ' );
define( 'NONCE_SALT',       'X1bq>^8xXho19[Ry@>A(stY&HO5ozP-({:KRI0Lj%Kn4pJ=!yIaq;$j ;2ZFl8XY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
