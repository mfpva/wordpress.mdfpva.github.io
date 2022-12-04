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
define( 'DB_NAME', 'newwebsite_db' );

/** Database username */
define( 'DB_USER', 'shalom_habibi' );

/** Database password */
define( 'DB_PASSWORD', '_zi1-c@g/J6!ezUp' );

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
define( 'AUTH_KEY',         '1}MVi{Xa:gN!kuzw3HvzIV%mRsTgmw~;#EE.p&fZ#^6[NLG]Vg`^M)tZjz$H*6_0' );
define( 'SECURE_AUTH_KEY',  '2lc/#D=]XMT+KV_XiRr|G:@0/k+NrN~GbKw}sZm@FgBJWiwOXCVC<UCJP=8SE4av' );
define( 'LOGGED_IN_KEY',    'pH,w$f{ZkPH(,W5RiHhmt7;:ft5G9Z/(ggtu^-34s8,TyUGGUlkL[g[WosJ-~NTz' );
define( 'NONCE_KEY',        ' w=%M(7k1PVgNY1?o<tawP!HR nYvX6uNdntfF,Z_^BKM.%Z[F:%JRZ94Tbo/Qxv' );
define( 'AUTH_SALT',        '8L$w&e&b0LLpT1+4,nX/|A4yd-::17lvB&{*BhpC)r6<<Z(G9k;aTvu$mMY@S69x' );
define( 'SECURE_AUTH_SALT', 'F,Bz42=plumbvyJCx02,piNDs3QDI%Y1+)-[(&BnL|:!zn%$rW7o2kbfS:T{A9tX' );
define( 'LOGGED_IN_SALT',   '{W]?s[JK#VF!]2DY;u(udtq,2gUoHUF~GPwlZ^K7 /^RO5b$pUK{ he+D1^oa%qp' );
define( 'NONCE_SALT',       '-jyOeJ.1*`s!M&P/r1W*j;+=/;f}7-Lcg<G+=xDM@#Zcwu?~}_danZ9tL8]aT1xP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nwclient_';

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
