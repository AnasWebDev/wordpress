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
define( 'DB_NAME', 'onlinetutorials' );

/** Database username */
define( 'DB_USER', 'onlinetutorials' );

/** Database password */
define( 'DB_PASSWORD', 'x)P?v!fa4qWT,?KKI\\tE<bsjAgsH&[' );

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
define( 'AUTH_KEY',         'F-{^P}!nbm1;Vqllj}C;=@t/U;e}#+ESTpAd1a::64AyZ1f]}6J0.&nMjL:7taBA' );
define( 'SECURE_AUTH_KEY',  ']/Y|1AQ+|0LZG2BC&Mtq45?Ry!49fc%~`wy+Z|_K$wOG38c4H$JFg(muj6PsxeI[' );
define( 'LOGGED_IN_KEY',    'M:L#Es,Ju3Ne%ZX>|n!gcOh,6(UY2L.*>fF,)p4>KCPH|P6g1i;84ek,rno&wqc+' );
define( 'NONCE_KEY',        'Fst.PHRPr/_k%SDiA3T2iL7?$hiiYqv(&/dUUVTNWB)d_w~as$m?9F9XbZL%3UD|' );
define( 'AUTH_SALT',        '_^jmoe2N1>+q<N6_HgtFJX?|g(]KyM4xUS!74-y`,#/af<spANv=L$yBMYY/ r _' );
define( 'SECURE_AUTH_SALT', '17hX*JC}#~-KvKWezp1[CA+$n!`67L$>ud:LJz7hf6=yY:L`1a@veLiG.]:i{GQ,' );
define( 'LOGGED_IN_SALT',   '.7Y88{DqoAd^Y&HMiu57K&MB[Z@? j_NF?OCc;%ErPng~FGpE{;%8/H7vH<&Q9Kr' );
define( 'NONCE_SALT',       '$LUtl7MCo>SjHb)%!E+G#@7GXa/*-IO+MxiZ,LYza4b?$l/7AV4<ZV*^4*NLy%%H' );

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
