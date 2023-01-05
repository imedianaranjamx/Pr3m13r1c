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
define( 'DB_NAME', 'clini385_pr3m13r1cw3b' );

/** Database username */
define( 'DB_USER', 'clini385_pr3m13r1c4dm1n' );

/** Database password */
define( 'DB_PASSWORD', 'Po~mK;pWZ2K&nEcJ9-' );

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
define( 'AUTH_KEY',         'VyVV6]LhyWi#v76<M+)JIl>4Hr@*<Mal}1]wW4U/fzO0V/ne^ghZ|&EQ{G0Vw}gs' );
define( 'SECURE_AUTH_KEY',  '/0b{9s%+/jbAtl^_QKh*{6@:Y3kDPp?9U4eKAt4(E2T+}e8#2h0jvEY-M:gaiOtz' );
define( 'LOGGED_IN_KEY',    '5|t1-[$#WEZo-t[)f3b3gy`n%92Z$~T)1yI~s{1Y-G[#1Wenj[L:?OTzbG<FO=8Y' );
define( 'NONCE_KEY',        '-^6bWh^J9U0MWZ<d0:PFM&M>mx6[#7zU/` m?^LC/$/hHk=x|i1W|J#C2!$?:odk' );
define( 'AUTH_SALT',        'k@2_>2+j=Yc.Xz`-.BB8Vs$J6`<vsD)%+$$(G]Nf(L(=BJ86l/1z~8YVIzNtQc]R' );
define( 'SECURE_AUTH_SALT', 'sPFW1%w1ZhjaVlKSF4+Q02YlP0t4K]5zK%G>:8&;CoJl8mC9Dm8#:iS?u+tfD0q ' );
define( 'LOGGED_IN_SALT',   '7Iz:x(A0;r:)4-!.J52acz( e2s|ffU-b?K/f_P1H{NWK%?wnsY2*}oEOSip`c!W' );
define( 'NONCE_SALT',       '6>-7-u)nvC;KI(2BA muD,zLv}+wy9zMQ~E,{S:HNQMJkgdqhO&}.g1?~KJeOHx]' );

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
