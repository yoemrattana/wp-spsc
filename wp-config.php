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
define('DB_NAME', 'wp_spsc');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'EGyY`}kszmYGP*RG}?%>dDcq!G[z@CN-a^m0NzYMKt3FCB!B{P;I-Jnb}27nnml#');
define('SECURE_AUTH_KEY',  'VxYQ.So&4riV#-[t0B@ tj-s@}uQ~T<$ 7$HBjr[4@?wG0%H-s}JWCpx(H;s<F4Z');
define('LOGGED_IN_KEY',    'mN<,]8S*4u/;P7:mCO!|1KCy WM=]z6|!t/0Ftg&YY,^SK]w!a|8ga|g6aLh*wj{');
define('NONCE_KEY',        '7L:&qiw=-n%6J[n_K3SC 9d$lEsppYT{)?2j[&|?_km96>-N)*-N$e2J4]!fSTi?');
define('AUTH_SALT',        's|yq_e3c~hz9%k&Hf6&U[gGbdU]sZc[#(K2q g,!-Lg0a2Kk7k-[a+^`S@[-<$Is');
define('SECURE_AUTH_SALT', 'Ncz1NvTeyTtD8[pAU7FQ7Y+VRWZ<KP|yq{Q|@Sth;oIaL+>F+d,~`/x4]22kJqX0');
define('LOGGED_IN_SALT',   'hddbKvR^ogGT00D{|ideP4;XyK|L|A}OA6K<!kUL]eK<sj.;-_5K B<bO/HR&`15');
define('NONCE_SALT',       'HTIL}29?|dcnqCzokju5|RYi2e>mitCT>DbJWE{kvL6E-TM`|C+1HK9B.r/B51|#');

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
