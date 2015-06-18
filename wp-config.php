<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kcttheme');

/** MySQL database username */
define('DB_USER', 'tuekc');

/** MySQL database password */
define('DB_PASSWORD', 'tuekc');

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
define('AUTH_KEY',         '/`RWKV&IWyj-hYYgABY[5Zqz;SRu[x|(YfeRX $V z#40:%HsWz^?pZfj2yp^ w_');
define('SECURE_AUTH_KEY',  'RM^BG=He6{iXbO1M.U_ANaC ,}Ej)O@GZ2?f*dy{ *%GBHe-^@?;{+o oc)i.2<W');
define('LOGGED_IN_KEY',    '*Hck-<iYp/zD/|~gU^2xb2udwV7ND~0a&s}`C@wXPiG)zmq#&H!3q~1c<S5SAeuy');
define('NONCE_KEY',        'Yel`x*Y/-B.D)[:K{C&x]:,@OL<u,L-UNf{P[ yA(q:|!l3p-)`&a]VL?}_aan~i');
define('AUTH_SALT',        'HccF$aX;/[<Zky@$`_{[Mcu(ym(o4&;7MB;~i(FbJ9 ^go1=B}25E3N]$nl:QKg8');
define('SECURE_AUTH_SALT', '#`HVsP!o-R.(o7}[KZn&wI#*VR<o*<;kX$ SNT5vb/^G96&aTt[/1f&i]/#pvQ8T');
define('LOGGED_IN_SALT',   'A=>P|B!p7J<S@4-jN^ML@To8:on;j2aX:r,>)Y=eXwGg hm4Wq.kQjqi1Dh*5emr');
define('NONCE_SALT',       'bOeI:tK+GBM7`XVknLk9vV(TX@;f^vh(gGWK9k=TaT0Az]=,YKwjJ9A[{s~Wlmg#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
