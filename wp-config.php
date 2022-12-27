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
define( 'DB_NAME', 'newpractice' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1V*G ,o$PA(BK)$g_c8i3^FcnsvAX?]6!/Eu_xz~3%g8$OA,&t^x(|}+h%zObR;w' );
define( 'SECURE_AUTH_KEY',  'y=%,E8/~-xoQf%$.TG~}nL^K)H2V+`z,r~Aj}q<V:5F mtRoT[sZj4=:26)E|I1N' );
define( 'LOGGED_IN_KEY',    '>v]-yhr6p&Tv!O(_9&h|E<gm.np;};jo|!svDQ*-RQ3S29caO:tHpR3bQuS^mdS ' );
define( 'NONCE_KEY',        'doXZQuo*)9,[.<4sc^jNs&Sls_>j)6B3B81&U2VxY9Coh%K?S6V#F,k{Hl>F2&m&' );
define( 'AUTH_SALT',        'S#J=iH){oUo cB)_&z~#gmBrTL[K:WU*cu00Os&17Y}eFW)6?~9Jf}-YtYlGK_|N' );
define( 'SECURE_AUTH_SALT', 'N@@Ff5.5X5+wVI41r7<nlq{fcv5!uhD<`NfEup(.A2r@i#m/3~?`N?BA|MsLf#nV' );
define( 'LOGGED_IN_SALT',   '=jN,{Y+Ybi4bvvSkS@!2cS>)NXRH$s7vzXX)#K8*:fL7[3YixeVyKkF*d[e_Mu_$' );
define( 'NONCE_SALT',       '@Q@.@Sr1JZ>`^cW|OvskTST@(to5q]!7hX8qF2|ZtzpO/cZ8LyStbp?+2*P2%s1:' );

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
