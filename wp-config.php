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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portafolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '=88&<>*-9G<2EV=yu{qJVH4wFVx1O~Q%rjIrY7OC`<6lWCk60=BwT:W%W9c`D]$K' );
define( 'SECURE_AUTH_KEY',  ')$..B+YwjyYYD?u#4cq:V=jx;`k]rsj1WI{Gmq)$.$hI]8/:cQVg:XVv!5P3zD8.' );
define( 'LOGGED_IN_KEY',    'z`kVguW@h@@bIjTc.KU)>}v)@xi|hzy.,Q=4g#e9LsVQ[rz.;c/ nz8Ws-{c}hJ=' );
define( 'NONCE_KEY',        'P|f(.B_Pw`LjE$lq=t;E2$} ~!B66fjgRN(c>^j}ou]z_G>q1yIKR|xdh!j# G`4' );
define( 'AUTH_SALT',        '<nb~}[wiqa?Qak{u%.qtHQmwU55QdL2X=Gf#V5Ti+y]c+?sYw:z[-g!9F1L![`lg' );
define( 'SECURE_AUTH_SALT', '4.5-.ONjwSf6%Uvu[&4rM_xJ+C*C;/kezODSy(msYf5u2[tbWH=F35riD)<`#fX ' );
define( 'LOGGED_IN_SALT',   '7X6h|Ua]SotwIMDwUr;H@m(%17>kd[x>E+V9EHj~aD6:o*42&:=~dEndci9;k#C?' );
define( 'NONCE_SALT',       '0NlFFEf,!&k]!^_9uI*t8sSv.B$GR[l>mxj8f=CD]:K&}npZ>4N~tH%r]FrhV3.6' );

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
