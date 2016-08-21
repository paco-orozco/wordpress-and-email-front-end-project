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
define('DB_NAME', 'Eaze');

/** MySQL database username */
define('DB_USER', 'Eaze');

/** MySQL database password */
define('DB_PASSWORD', 'tLphwNfvE6ZWdBjS');

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
define('AUTH_KEY',         ':i#@ejN3cy;2)Kk}=v+*0KR ?=}69[$+ xz!#>DkGQOrM_uRmNFTD-Arzn{iIP3I');
define('SECURE_AUTH_KEY',  '7yy$PS4JK`G1]aej%ELRg31*H0bRnu*1r58kt>(9O:J zF^1rQYEo@]9)q(hn$f6');
define('LOGGED_IN_KEY',    '3RQ_SxFTC_,O=bN-oaFa7&68a+3.Yx1@A7;&Exv}V|C+(6y^At_6dcAi/-:>m2%o');
define('NONCE_KEY',        'JaHVFl,4nz*rV]`>19fg{ni)JX^~sQI+.>lK8qXVj;qin. *!YSL!2]SHRHP.9X2');
define('AUTH_SALT',        '.qbcdS$YLio{T~!,q;zN;gMFoj6]rm^YA6%;tEDJL|HjaPHJJX<agQ~2Ip(=E3@+');
define('SECURE_AUTH_SALT', 'VUMgo~dK.C$hf`7T;Lfb}Fe$n2gA9Y~yGaG{_3`/eXrSt1CRS<O.w]]CNG]TZR{v');
define('LOGGED_IN_SALT',   'Bhu|{< d{uyM ]NFb+m/]wW@sU9.~IB8Do]_6[e|o&p<~S_s/)#t1XY2mYHH]H`@');
define('NONCE_SALT',       'm&Ck`>>P+-s_.b8_HWVTg[tiYTFk/$[/$H;V.&vsI^tSCWxbm}YFvtpsN)FW!Y5N');

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
