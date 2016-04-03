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
define('DB_NAME', 'enaf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '1zhTm4JR!-lES|~r1z3.V^Ki+b:vQ@Qh@P_/K(T;|HL4>{S!6AK5}SqyE0F+&{+n');
define('SECURE_AUTH_KEY',  '($77;8epQM&FvLIGI+-xiP93hp%!=8xT)4a:upY!E?Hu#2IKi=Ra_x2M|UC<Ku-I');
define('LOGGED_IN_KEY',    'KM%yx-<a^*mD.H<$V:!.pCi[(d$Y^@|8%i]c&4|)oF7hu<~F-O)Hozn,Ma0Sg0 |');
define('NONCE_KEY',        'vd~q3.X<V|h*4sZh:iUv)Ysy3IOx|J(W/+Z|fW-ZW@Z!i![}QQvxul1 R%U;Y64i');
define('AUTH_SALT',        '-7$99(ttxJyjrrt,[[j+6KbuVBsRsoqDy:,b*7J)Qx0($<c|Z!*&-z7m)e)T1%E/');
define('SECURE_AUTH_SALT', '/K$f+%Bxad+Qf+OC8|q?Pr]%V4G>UQ7.q0RsZ^$(JJ>Q)VAguA+~t<hUk@JjYWR%');
define('LOGGED_IN_SALT',   'aEim$7Cr2iClUm-R=mnOMfwb5+b$|7k8URN+&dgf_+~S! -4{r:}&Fm pPtGRxmM');
define('NONCE_SALT',       '9O7rZ?3z4:NT<9{k&*`Azc,<8yOlb;h-4WSR|X{2uOar{uc&009MDp3v+!*W#kYL');

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
