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
define('DB_NAME', 'eaze');

/** MySQL database username */
define('DB_USER', 'eaze');

/** MySQL database password */
define('DB_PASSWORD', 'NbnVXxFBrrnnBHKW');

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
define('AUTH_KEY',         '*-^@-Vw$qjUCTwTb#s7qALTu0v<  ft2D0MNXaz[[kocvo9!?C@r]0AUlOFqR)+R');
define('SECURE_AUTH_KEY',  ',,HHmfYQ(IXBV&E]V*RFVyIIrzj7vTiM)M+Ij9kpQU5xzZ81%$H*3#4|$Da7QP?[');
define('LOGGED_IN_KEY',    'V590N:$@LA7C3xJ-nse?Fq1Jw/bXm^%i;PsllyP^q<V/oDg#fuO#}AO5C$1,|O@L');
define('NONCE_KEY',        'l8Y5LGU+k]D^i:8^020Fl>$g3=TB|%/>V019D:;FwW@a}D6ie6vyl+78L0rpof+u');
define('AUTH_SALT',        'eBRG{q@(_n,|i2AE{QBfj~*os4[e7xaqnhNr!^{>.nqtuDnRZlj@J9va>cgw8WxL');
define('SECURE_AUTH_SALT', 'YuS0;&[-*s=T2^`g:&CMMg;^,cNPryI@1d KQx`=cnqdv:;24SP;E8Zv;SWv2aXh');
define('LOGGED_IN_SALT',   'x7;g+=4~)ed(;OLBUY#5,i2^|Dw}!Th[9- e[<dGSQgGm06W[WBxGsgzY-rF*X+(');
define('NONCE_SALT',       '|r>!cV;7Bnb!la:gJ2T%iPLJ|4eOnV>,%&uj2( %$y0~eK#An*5OG0hGii I(R-I');

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
