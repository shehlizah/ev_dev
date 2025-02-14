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
define( 'AUTH_KEY',         'q.`HJ~vIan(>zm__V-W*5@cPXJ85pg98fT%73<6S2#BE[+D$w^w&2sm/Gq~2t7fv' );
define( 'SECURE_AUTH_KEY',  'Q!}&=R8D03V^bVqrYAzM&wg4G.nnAF h!7dc7`<hvCxuI^aM9jmZK&$?K;*zdm0q' );
define( 'LOGGED_IN_KEY',    'K3WC#uN+J!(y<j!4OV5W:V4L9?bnbmtIpuX+^$u|ZL>!Sx)D8BPf+8F<Rub,eX;}' );
define( 'NONCE_KEY',        'hL?=lj-/~.IUfRz2[R9N_oesps*%u)bDrwz8A/_ZZ:2)v3kr6&g`[fflYg/6YXnA' );
define( 'AUTH_SALT',        '[j;XtmZ]s8`+>B`1}=m|Z3!G@-9aY4+rPsLJtTslHRZ`G5_@6i#ghFj*P%Sk8W+4' );
define( 'SECURE_AUTH_SALT', 'TeiAnprCWWfxxR!%MuEbsl;;-iP+/Xo=]`<#re&ka3*|pAPpx~^4b0$L17Ri.k;0' );
define( 'LOGGED_IN_SALT',   'nBeyA*~VBTx^,)55RD#~zYSY#`kA%FL4tl<z`ew(^N$/!_eNy@qg)y_]q9A>,Oai' );
define( 'NONCE_SALT',       ' ?[LZCWSgkDkFEfJC15w#%vK_gVA;.fO}vXi@GzIt[Z=HuzKzly7FD3(^j^/<E;E' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
