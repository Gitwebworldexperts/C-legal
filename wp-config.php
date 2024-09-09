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
define( 'DB_NAME', 'myprojec_certified_legal' );

/** Database username */
define( 'DB_USER', 'myprojec_certified_legal' );

/** Database password */
define( 'DB_PASSWORD', '(ieIk&X]SYLP' );

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
define( 'AUTH_KEY',         '1Q6TJ#tGRG?x7K`}!W6M#pC?FVbVxwLD[<o1C*67;wYC7ONlP&0a+_DUWQYPEj,8' );
define( 'SECURE_AUTH_KEY',  '{W-$>_Za|Wh:+zCz;N/jz )!,jN0jpVR_u(s!!&7*`gVv6o0P<t*Uma2-$OUA.!_' );
define( 'LOGGED_IN_KEY',    'Evi23ltapg,!3gml+ni%UE&w]80L;xaX7iv<@UZBzFy`dD(s[,JH!jv)iNV#Q/Ho' );
define( 'NONCE_KEY',        'T[SsCo2?.v7,[W3E]r$4sDx=O]SC9`H_;FF{R94&;*UG,T|-B;oa)nYUp=Kq]jLy' );
define( 'AUTH_SALT',        'Q~+e/CA]0JW4pE1D>9TlbCPu).Q^*Im.?a#vun4DKc]OepE~@gk}6@3Qko_|9]ZN' );
define( 'SECURE_AUTH_SALT', 'ig[r<@F!D=IUG+}t{?-WXw)GKR5E (<1$ak=Pd<3,*1-q8a[xa0J<DN|o_Tnki$`' );
define( 'LOGGED_IN_SALT',   'VA`hPb}HJVxQa{]rM/l?!fs!4RtEMcYHZ%0Q  *;_=r2&Z%rU_JsFPcKllIBl,xF' );
define( 'NONCE_SALT',       ',#jD}{&0ZB.}@B#xrWt8{}{Yj?Az%}ZwjH!BP`6{oe,oH#zDJ->;f&V,Kg=oe@70' );

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
