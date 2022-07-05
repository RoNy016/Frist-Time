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
define( 'DB_NAME', 'wordon' );

/** Database username */
define( 'DB_USER', 'wordon' );

/** Database password */
define( 'DB_PASSWORD', 'Anika8080@@' );

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
define( 'AUTH_KEY',         '<t !hFOKcr/vDVs~crf3re(E$c# 3c([GSl{+[o~,Q&{oiShRXWKx&pO|OUYl|T ' );
define( 'SECURE_AUTH_KEY',  'Y533J[FZ3xURCl(9x`2)cGw.3V-_;=A~cgmIh#Pm,wJD2jak]f2G4 k?Yz-]?&|=' );
define( 'LOGGED_IN_KEY',    '(cHp+niTRK%*Ee[nmq#M[R![61yKRGr[seL]00?q:8zi61b~2d=;:@c8_Irur2d_' );
define( 'NONCE_KEY',        'j69>?JC7U~Z)`p?&0iQHQAw~J~qlJ=w~<q6tYzxO;P%Iq+6*Q51b`SxP}QP7q=5*' );
define( 'AUTH_SALT',        '/kaNn:Ad|9?@5$/pXYB@S[j}5&_T/ix/qo^+|=vX<[cy(|a LnOj5~m}V+,$5kh*' );
define( 'SECURE_AUTH_SALT', 'cv(-x+C_r.*ZZ(]d|C&g*yjPZo9xK,?QYNX*>H>.q8kFP;mig|pUcI_a~q.%tcn#' );
define( 'LOGGED_IN_SALT',   'xo51W.>yR<0lA$MIZ9JHY5wSP9OEH=y$ZpZ,]3`o9{/WA7~.&k2M^=mhD`qh,%2J' );
define( 'NONCE_SALT',       '#kF2V}uPZ]/W[+l^wTw4.2GV*Z-5^@Jv{-:OcPlWa *%)$&15sKHc-<;nICt?T+k' );

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
