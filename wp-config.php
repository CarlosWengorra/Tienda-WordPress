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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'pSNj:4]A4JvfJ6.XqOX~&8/=oh[.&W- kj=`3&,;05 ,lmcX+by79(EGH[MeI=`P' );
define( 'SECURE_AUTH_KEY',  'nasI[u0&4YBlpq(f8^]]$3p?EU(C)=/<5Obeyd{F PUGJDnO0* k$`#n+0H.35sL' );
define( 'LOGGED_IN_KEY',    'VaGCzG!37w5WH1Kz#pAA;T0Fi:N%BvBl! pAfJa!:G)1iBRVZSR]j  :&-k4H_-h' );
define( 'NONCE_KEY',        'a B-1PUzQh^Q<q5M,fq@uXD:;|Xq494y`+Ob?]^B(&8ymXDPewPf<n]q|L1`,V@D' );
define( 'AUTH_SALT',        ')%4^Igj(o:J)pVutQ;S?!RIQ$BvNd{,&|M6nTQATI] IoXMnGML@zhW1;-I7{5 F' );
define( 'SECURE_AUTH_SALT', ' :k(~0e0$qG8gvFV~wE7XG84A}IA@2QvevD)qqVHBu=jU{&)KV;N[se./~P)F@#,' );
define( 'LOGGED_IN_SALT',   'Q0mlGrkDe`k`V|Ck/:n4ty&aG $ K6J:_6OagT?>kF5gBBg_f^0n7MN%(rB#Q8Ou' );
define( 'NONCE_SALT',       'Bn/6}:+RvUiC 0R+v~&aG3v4C:S^Ay,C[=1F-?/T!|/f=?XB<*(|M)o?<A 5=/?)' );

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
