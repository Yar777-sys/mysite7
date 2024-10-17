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
define( 'DB_NAME', 'my_bd17' );

/** Database username */
define( 'DB_USER', 'Admin18' );

/** Database password */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         '+AonS[L{_vkMimrjNwqxnC<H<n)@$?erY1xh]x.jl<~e?VDW)5%gV5:E$V?#v$~i' );
define( 'SECURE_AUTH_KEY',  'G*t]bXnQNMGAqPEi=b%,R3Mqd.6/;oYW[]H;t=(H$RE!Ry<m=KG!ce$c`^uEn!@[' );
define( 'LOGGED_IN_KEY',    'A:z1Bpil&9(d$V^)n-I= waor6b}m<&WUq)Meh6y2,]zx7*0CfQG3QN5>+SKNsPT' );
define( 'NONCE_KEY',        '&UR9s1shbqvB#y`IW4%rr}P;tPDJp(@,uq=4[q4:xzbZmTX+5ug&DxR}SnZUYX-y' );
define( 'AUTH_SALT',        '<$w8sS#IX=D2_%Nf9qyd8~NL L]|OvhpSA55ha^IUK0w7(^&Hvsc)NJ]U[BjB5Hd' );
define( 'SECURE_AUTH_SALT', 'Q8z/!GFP[usWz`?BQnAS}AEa,Ie ,MeFa%)1HQ}d(9o<,7<s>wM3/VMN?pIYG-c&' );
define( 'LOGGED_IN_SALT',   '6(9%=MJge.[`BNBIsegN`7Sc>whvwhuelGvp)O4dq@)i:DHi$tl2khP`kB#S_LdA' );
define( 'NONCE_SALT',       'NEeP_QdtcZqVm84Z5<PH,JW),#!2MJ{bC;k9]IzjH5r-y7{%Lwa q<,Y^)=`]nJ(' );

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
