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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         ';kn|`w/UD o*w2Hn+PlW!s3>1x[0`c7?b3};U^wo07PvR{,2VHAa9Ok(!iRD:`K9' );
define( 'SECURE_AUTH_KEY',  '^F?IV7!RPL;jsW{$)jwa/@gsC359v^9b-#(v<7TeI H(=v]}s=Me{B&t$*DBTx%Y' );
define( 'LOGGED_IN_KEY',    'nT8Ixq4I/[+s a~Woh?G@&XQ!sB.Sk=zbupeW!-F<[ %yL~1PCMRK~6!geoCbY~`' );
define( 'NONCE_KEY',        ',,~!t}}a],#=2[j.~k>0dXYAHP$TV[}/]e7enWm^WOj&p&Ks+0_[?nKPs%KQC:[?' );
define( 'AUTH_SALT',        '(w]-SUwbC%[TTe4[D@DxUm8UW5h>6M~MIi6IKS7B%PEit{*$D)4u+8P=?L*y)s(8' );
define( 'SECURE_AUTH_SALT', '0#]EAHG9a|4>vow^lFB`5IMZ{7<O(ls[=<z+}_5<lP+{Q?_]6`vo=nD{I-2z;MpI' );
define( 'LOGGED_IN_SALT',   'RU%}BCOQYU5K4]60|4}kX[%yg;$KSPF}x~T#1*93%;e,m 2on0P6;J7[cWRQZiOg' );
define( 'NONCE_SALT',       '24)^z_&ae=PdBQO}&P79n{/aNA pU$*dXwDV9b*cws5T]~p`5=tfwPAD<R9fMO#6' );

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
