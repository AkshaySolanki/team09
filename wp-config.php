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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'QSbU[>%A V)b1u6q_+WQjo,#*/:Ae],OKxtEUh.H/u3/]1fIIkm|tVdu.r*.S@^>');
define('SECURE_AUTH_KEY',  'VA!y1 N@e]vb4`XKx=Mmioh`sTaRY7<5MekeMh|8#>%,Z=tVeDm!~lA)_dR8SV30');
define('LOGGED_IN_KEY',    '&7*]L*AJxsP&s|Z7lRbVDUp)l>yx~aE76WL(=y.D0bpXUVPj|@z&B/O45)fdpb=k');
define('NONCE_KEY',        '=Y;O0cc7)zR_5#+I?uk4yQjwZj[e!)=wwv`.uAKm&c:&C^GN$MTwk#[EhXOdVk|o');
define('AUTH_SALT',        '6)ou[_/f~O3D5a`^4|1<~}[=6?-t$QKA[d(MgQ[f~d`Qw6|y=|$;K+<[SR})p`=-');
define('SECURE_AUTH_SALT', 'BBKsGZ|.UMjs/+x4x%l[L}j^E3Rh2Lt7CUB<u`y6QXJ32uvzuJIIze!H$GM?^(SC');
define('LOGGED_IN_SALT',   'dj[hmQhe%O0iw^0KT]*;)nJwh>lB%xqn(dbba,D6^E6W}r.b__y`&41`(GlVe`mF');
define('NONCE_SALT',       'ammN[VXR}9<n5XD,kzM[Ip,<~EvDlgrra7%&6cC*XQ+VhKARugy*+&Fzch_-l8z5');

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
