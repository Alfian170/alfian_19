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
define( 'DB_NAME', 'website_alfian' );

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
define( 'AUTH_KEY',         '[$r`8;}K*D./|K{U;z|v$5@LOtg(7i3Ba8x6zj1]kBf04G>s|h)N`EU}=#{<m$:Y' );
define( 'SECURE_AUTH_KEY',  'S:V{Q[I BA-_+{??%}+I<7_9]RobQ+&yTWA?wmip4/_X<(NNalmP#0$BDC%&apk)' );
define( 'LOGGED_IN_KEY',    'O!L5e,.]f98M^TC?0M77K5-{8sbK,OPnVHup %+qP_w9}=k^)`)qH{,07{w0-g#y' );
define( 'NONCE_KEY',        '0Ba1iP<1&o)^JTEsh:3 6xH^[cE}_N/>TsZF<TngXe&i-$bib_w3N.79eimo;K+r' );
define( 'AUTH_SALT',        'u)Vf4uI;-Y$4!^l@K+Z>`$U1sBG.,CV5 Cs+@c*~c?/WeF.pX9@?nj(CS<,!H[<<' );
define( 'SECURE_AUTH_SALT', 'Z^]Xj$Gh4_T3F7[t(7u&U^ehV}hwkAJy?{{=^~qW+eho$}`,;$]Eg(U8X]pl]81>' );
define( 'LOGGED_IN_SALT',   'FV5Fo~xDu;/XPR~2(*v;xbb9,84:upVOf:g^r|J7t/D_O%UyT*1dLA_[?a[HgzB%' );
define( 'NONCE_SALT',       'QkOQ5U/As$E;#B{3GEVPLY[Uw/yI-IK<R]:4>&3vXuZ=jk2Qo~gIXc+-CI}]6?[l' );

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
