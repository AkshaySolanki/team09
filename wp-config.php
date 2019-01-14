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
define('DB_NAME', 'homepowe_wp154');

/** MySQL database username */
define('DB_USER', 'homepowe_wp154');

/** MySQL database password */
define('DB_PASSWORD', 'Host@963!');

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
define('AUTH_KEY',         'wd30r74kwoqvtgx8w0nspnootvup5ebefsanmqanlkumkt6hqf0dprmhbjxuntio');
define('SECURE_AUTH_KEY',  'fmpcit4feut8xfn4amvwqcnxrbjmzaqzszi9oaacl3i1uzjkvu5jimukfgljflxv');
define('LOGGED_IN_KEY',    'jemgrfkbgfk4lnx97xzwx2b1xtbm9y3vtjyxf2cc7g5uycwp6udqdqnhnnfpn1ny');
define('NONCE_KEY',        'beqgdjkfwgjj3svrzv6roe76fnlkhvrhymug3weesq28rtqb1aueug9erubf26iy');
define('AUTH_SALT',        'y3i6fluxxjfobxhpmrzineqcslf1jguipqebcda6bamggbohlhz34imlrzjjglk0');
define('SECURE_AUTH_SALT', 'z1xc4cejcoftnuhfjp6ddhbzmgdtgnvuov2wlffv6gn5usk7yxoa5ty9chszjoa0');
define('LOGGED_IN_SALT',   'fostjzuixeh6qb9g1qfket7pd0tgds4gdpzboixhzgl3jfzby6hiu95pnkyv9lx5');
define('NONCE_SALT',       'j4uar15hq2cku4wfc7aqnsslgljjfucira9zyl1oqaysuqgxgnopgcmuytpo6ahy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpkt_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
