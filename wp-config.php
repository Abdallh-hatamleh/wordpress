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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         'KF,OIe3uq,gR}ODcb-xArFHzl,jg/lk4Q,7%1B&@Cw=Vb7R2Vsn>fv^YB^SAD/:K' );
define( 'SECURE_AUTH_KEY',  '_C(!Wde%F=)c#.AC$vdRSp<;+]Z(dJ/ZlF)6Y~pfviu?n1PZtsyn$gjPK(1G{g)(' );
define( 'LOGGED_IN_KEY',    'x:7z a+6rZ0Z$20YyVxc^-y=zwQS72M;R>DOr~+Fi)^b,I>6D_Q X1a9)0rGV[>>' );
define( 'NONCE_KEY',        'CRj#B]etPU-8GbI_j!I:F%ag[`V4isL~^@;zk*7!.1{yZs;wH;>7+7f3KG;5<S 1' );
define( 'AUTH_SALT',        '=ZMFV osUX8D!t0,VMpMXaQ_hSn8%gCb/|,1cBdW*<83jrlURN:~7E(V6Zg$y_0k' );
define( 'SECURE_AUTH_SALT', 'Mo3jLgW/VAiLAb5E@-HY?&T!>IbrB%RU`vg_{XIiOQkl;UcHEyzJ8yk0@u<u4PUh' );
define( 'LOGGED_IN_SALT',   '},bln{cIY!xS^11A!m*,f8<-3W<6kBr5[sU_9ar#<JTsPT*i,#zL/ai3iQ><U!`Z' );
define( 'NONCE_SALT',       '7BDCIou4.8PW/s$s<c<U66DXrr: #txGH7)5V*GCJ^tg0  6nZy(~YY5oaFXqhgL' );

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
