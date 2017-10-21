<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'a1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%577|U$FAd6H|0i$OIarUOm&5;z?/V)oQm!|*:?& WPZq|Bk>chk]8n?C[}4z<9`');
define('SECURE_AUTH_KEY',  ' >:J@TrfHicR9`2YCI#m [hFfi-g9{JwMz~JlXfMjzbkD!/cz_)+:x}^[]W;71$Q');
define('LOGGED_IN_KEY',    '&w/^^)U%?<Z-q)Fi-]b1#X{l GHJnjDDzDxt};}t?*{w=rM$(E=/cgqV u@YjPK|');
define('NONCE_KEY',        'B?f7O;4Z~oT&r+ O44AmWG^p^6junM r7~VnrFb.Bj]-D0{R+@ttvi-2jGd,<`3l');
define('AUTH_SALT',        'f0,|txOHe*#DL)<2wx~5!&O(&N6s%&|=6^{_RMO0.*oW,s~-K1D2I.rgL}A[(@r&');
define('SECURE_AUTH_SALT', 'lEw6D2;FX8=TQo}Nya0R<-@0bx9umU3q+rf*<}X+o1=;H8)X,ti8,OD|pYcT1v.Q');
define('LOGGED_IN_SALT',   'fY5x[n#2YTq81Ch@F$nu5{LB=(#lJ<Hp;s#6xVqAcvf:7RhtJV[j^4kaw<S9Yg>:');
define('NONCE_SALT',       'AKC?wd+6wzmQl^w:0fx|CEW/OMU9l7YJ[9/_C}q1zaby[B3Dp8^]<5{SvY.XlN[<');

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
