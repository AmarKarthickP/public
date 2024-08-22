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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ' XE5XNc9U0_w9fS`OaI`_%<>W*@*gy7.$|otP_g<){LF}bCl6m:g/vouK05@.7sp' );
define( 'SECURE_AUTH_KEY',   'x.vql -LI=/aL1r)avWg)!Es`z,B(f0umX-a7[_?Da ]OZn5dXOjcN7s=OdayM$n' );
define( 'LOGGED_IN_KEY',     'cCU{PDKeMUz5~s_bTN~e^y@vR X3$f^b?vQ!HbzQ*OH-=a2nlvQ:R+;{|6+N6s`j' );
define( 'NONCE_KEY',         'xMSg1Sl4.E}}oJOczj#S9pf J(]T?}PHu!j>y=[W]c)8KV|pIw-v/o3G_83-ZYzZ' );
define( 'AUTH_SALT',         'zZz)?LmlN2Xo<ZWxhlME`;;s@(f@f@OT3puuSBZGMGma$c>L7btP)Ug [(>xJV}y' );
define( 'SECURE_AUTH_SALT',  '>?y#.j3<]yDrV<^BR0=qE~UI`xQ(0Y8wL? =t^6H={VURhzHHjm)ZsU#TqbJW t?' );
define( 'LOGGED_IN_SALT',    'c/.Mh}&h&Xxdd~rhnP+#P3I!||vx{vewk-Xpegs*;5|(pUd(GE1_(<G}iJ}G%qs*' );
define( 'NONCE_SALT',        '0}?lHo80zFVL6nrt, ^2M=~Z~_d/8U*i}(%$cF#P`:A1zi)(lC8PrNa=4}vIraJp' );
define( 'WP_CACHE_KEY_SALT', 'F{s&^iN`U#iZw#.dDHLKY?#:]x2:J)L{#CO>e(=jYuN$`4fNn$+_x^b:(oEG!u-f' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
