<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ecommerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CX=sF2<wN}=.`6nGl9T0,%gwI~Ntn9[YUKt]TI1aHL^4m+54Yy#>o)o8IztkaSap');
define('SECURE_AUTH_KEY',  'AANLHlqU+SbVa`:Ig#e{S=FikPvN2;,Q(%F}xqLf@v^_]6Wh?mrpR0y^Y)Pa&iE@');
define('LOGGED_IN_KEY',    'Q.RfMlC@mYeGuqK$JVeo&#X@pAwH5Ie4F7,eGEjrcQBZ>S3`M[ZXgrMAoW3tbQkR');
define('NONCE_KEY',        'vXVH[(fM,@umkdln}:(pdW=N2h6g6GeX&gXA8z?[tj_a4S5}Pqd}5J:rsc[t[ECe');
define('AUTH_SALT',        'G9l<w!|1SMPjO$;]*1A)qOf5R|nE5x)_XQ}N2X~aH#$AUkrk`pn$w~cw3_L6hhP4');
define('SECURE_AUTH_SALT', 'P(bzh;+4N]1_.x+xN.jT=bcc]>408%#4<wX8sbxsf<g70ORlPTYPE y)@ ;~1r*N');
define('LOGGED_IN_SALT',   'N hokDF&bWoXB[YM$-s#<b_<[-.NP^OR_`}I6_caoNWYG!|w;.Y/iVCX//n~ZDz[');
define('NONCE_SALT',       '0PO^4~N9J0sVu(Co2Yl^7_9FYN2=OBoEPZkJ#zZUJMF1<e46*EI:8IM Yf}:~D]t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
