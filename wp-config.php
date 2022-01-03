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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'sCx^=6xR/PUqT7iD&u>rSBj!SXxfQlEtc!3Ms&&kAYotA6E0]>:jWJ{EM=Yia{02' );
define( 'SECURE_AUTH_KEY',  '0X;aRza7oh.<_Hn3uicYNi$k~5h-.Mx+xS=^r/}KOl|H!;$Y4ROmz[}B0s%>f&+x' );
define( 'LOGGED_IN_KEY',    'c`U>b5{y!Q0Pcaj<*N]&36l)(Ec$~}*q=sd3%~Uc~y$`>%Ddl CSi(V<H#hDigPb' );
define( 'NONCE_KEY',        '.HuWE*05e? 2TPU~vIf@wgJRX(Y3;nH} n/DOxite4iWr#lyql62Lx8<j%JO6YAJ' );
define( 'AUTH_SALT',        'Df7+%n5PBauo! &yM)!fkT7P9AJ7r%])w#r[yM$@auOO$z]45:Z~rXROT~v>]X7>' );
define( 'SECURE_AUTH_SALT', ' Y<;N&=<#edzG9,I$_T6+:zk`gWKsI9w73~uQDgu$J>KtSzPG/(sm34r5Nr[voX<' );
define( 'LOGGED_IN_SALT',   'tqXxH4XHc,f!QJUZ)Xg6IfEH/d4/)H4*sPL+Ott_0Wtz{sS[^=<b7X 40f*jDQ7(' );
define( 'NONCE_SALT',       ')TO*yf2{L)i8?9b6qC*u?j1p7h.D<xOsHdvJwv6QsK|]Glt YPvIK,z3,bX|{R&r' );

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
