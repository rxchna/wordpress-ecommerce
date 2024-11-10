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
define( 'DB_NAME', 'coolwatchstore' );

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
define( 'AUTH_KEY',         '_eC34  3%r+ +Kh,{ .&Y1:?CPspi C^ICT 1e^;QBv(/OJ-%>I57XPp]W;$S6R8' );
define( 'SECURE_AUTH_KEY',  'u@UE-c0riosNu*mCaqTR3~x;L-`hkv+35RnViE4g?-|V lD3no]!MYg*J]r`E5F7' );
define( 'LOGGED_IN_KEY',    'XN5,l&=R3<vn1)XBfH8 _1hGNTRs(:wG4sq8[DK%n~mj[Y[dYW%f jB >Q,E4`C!' );
define( 'NONCE_KEY',        ']]{%Ym;xvdF^/=_Desadt[^P>.VJzvbycA !&K&&~;qN>:aH5dloZ^l>iqU^i-$}' );
define( 'AUTH_SALT',        'th$PUfS)$)pY-%lot~~M/b)84u|QQB359PoiYuX]VS^T i($TGU{(r&OT(+6ukha' );
define( 'SECURE_AUTH_SALT', 'r9H%)i=u]|$m8+nQ)(Ai[I|yJ|O;0,o+`a>m=EZ|Eh]krI-/WoG`lNt]U:#G<iAt' );
define( 'LOGGED_IN_SALT',   'Df*wsS[rwFv~604I!u:@u%{q%sZPkIrBS}Xe )M<h;qoZt.,_3R3nNY$nt{~q(V$' );
define( 'NONCE_SALT',       '`ZKl];a8:|Bb]IsO|KdpJ=wbzQ=GSPPHOl.gD:#%:SrJC7jRCm,4.x^_F~{:Z8EB' );

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
