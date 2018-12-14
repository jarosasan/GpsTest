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
define('DB_NAME', 'daruna');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'v/vc#e,3F{?Cir3iBIGdlgqv7l*l+P-fsII;rm<D|.:mDALCib0@bMYBq=s:/y-U');
define('SECURE_AUTH_KEY',  'WLXJV_|lZ(`SDWXzpb`id/^2&T}s?8C39!R.xP49l4I} 8%)] =>U>%i}$5.vZoX');
define('LOGGED_IN_KEY',    '3+e+`wWXXoXck*`|7klZK-YiH2h2V5Ifg* U2sE+:#H3a_%f]7CN$N,XVi@5-|nH');
define('NONCE_KEY',        ' :?jyr&%Gi[/`Qnupw%exJ79<0Jp4-h {./]E~d*xGvirI@^hG*CCyHJKA7~^[%,');
define('AUTH_SALT',        'yZR7A4[jf|w-8UEE6x2CNlnn`Au!IU0]#ZW{UV_CcND+DSzP;An>,%5cjN~_A*&l');
define('SECURE_AUTH_SALT', '~xuA-4)Sk@^L$a=NEg~9iq3#2[quTb@ @mJUFR+Wmto5=?yO90Tu*g+@/.uIo-%v');
define('LOGGED_IN_SALT',   'ndGUA$a>fGy87Oy&y1wVS?#IEXA,wHXetz={=K)H+bc2yz7h=;I$RL;r7uF2QNc@');
define('NONCE_SALT',       'e(ip`0A ~n;et3[y?~WrQ~@}D%F dgdaYQn0 i2`VAFwFJWpW/H(n=s-_zsy)b$9');

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
