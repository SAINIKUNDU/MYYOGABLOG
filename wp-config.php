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
define( 'DB_NAME', 'blogdb' );

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
define( 'AUTH_KEY',         'hP]AnMyg?B$yJAjhx;Bu!E.Ghxyj_4ix<Gp &4pa%@]cc1NGegPb`~aXuCKqT<SK' );
define( 'SECURE_AUTH_KEY',  'n-*A$KB4+od_Vd9<*<Sh$hq&)=w:%!=uxPx(@u%2*6uVj)4%5 <o`+)AKFK5DL-s' );
define( 'LOGGED_IN_KEY',    '{C-dhH6P<#ujI{i|9Ym:a~CF?WP-UKF_5(=:krGn%EdH6P$4mawA0|<FDqs)oY-F' );
define( 'NONCE_KEY',        ',U Nf(Vm>UNJE?9^Gxr(D$Bt/f[0? 0{eEE`#kyR~SzgfOr?G?4oJH(8!|U1`9@P' );
define( 'AUTH_SALT',        ' I7RcyvNs,5qQhV:DYURNvN00HimyOUoI`mq4z_EQ4{A95EAFQirYt<*PK7c@S]6' );
define( 'SECURE_AUTH_SALT', 'eZCydXs37gnEkJ@dB^X[sv&0MlL=~~[vW^R<Z @%A_?YJ>9<z-qnKlOJK_60cBAt' );
define( 'LOGGED_IN_SALT',   '$fX$f(zr%N5?UZ+YBpg&UNkc 8^,:E6?u9$eRq1;sx+-P`J)KJ9u9XZ`tr,BdgwZ' );
define( 'NONCE_SALT',       'B0BTY@)m+-{WqC^a$wi{ML0f0iz-%4xVSSjSAlx$F?Jh-OwTlq[q>cszAGwNOX9Y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
