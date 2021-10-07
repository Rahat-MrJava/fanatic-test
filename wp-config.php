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
define( 'DB_NAME', 'fanatic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'NpbPN.91_AR}=(7UF?$D*!i1AUwyI*BVR3J0U*(vxF%UAY.Q-EI2d(2X[U 8ziR#' );
define( 'SECURE_AUTH_KEY',  'p56VP/n:6pF9)sh*7{*fo=]W!Xf^Txu/xAmpEX6,z?HTU]lW >btakt0xdHhB>s(' );
define( 'LOGGED_IN_KEY',    'f?ZTth!YZnky?N%Y-1nt7iMVo5:3U_tB{V43qmeqoQ8MD_0wIM6[tr3 jT;*(kE*' );
define( 'NONCE_KEY',        'Em*+7*g<Gu5!f~%3DQZHK_1AeyaJY&T;m {DnH!U~v}5&N;skJAw3&HD#)Uqo8ei' );
define( 'AUTH_SALT',        'EuqH_%Wl0%*pIo&}Z[q4AO+9S:m#HFI;|m?(uOZofJyN6,Vp`s*Lhz*;pF!MfB9q' );
define( 'SECURE_AUTH_SALT', 'i=VLp6|9nX7X/U 7Z_jdQ~v]/#c26-]%4v8,5qURj2Lom`09FuDTF:A`zD AIEm;' );
define( 'LOGGED_IN_SALT',   'm<cDg1QGUz )fES)aS]aZ-;/rOx*Jwm= }b8eVkK#VLW)U>uJB(s@LE>U]Y.^:kL' );
define( 'NONCE_SALT',       '..PW[zs<yFmVi7})zwr)EGuCo[I.Op{h@=n~E2O*w:dct37>-1,$F4FB>:q)&0,l' );

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
