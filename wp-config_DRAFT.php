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
define('DB_NAME', 'u317759753_arnie');

/** MySQL database username */
define('DB_USER', 'u317759753_arnie');

/** MySQL database password */
define('DB_PASSWORD', 'o99bmvnh');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.com.ua');

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
define('AUTH_KEY',         '!~3+ooVqh2gSCG3MP+G0%p$;ln3DI@5|e9bTV$C#@-~0F9R],NBm~%y?FX4OYk[a');
define('SECURE_AUTH_KEY',  'u6NNiIs8NAKf7[TYqY>d97ZYFv}^riz@1s6EHds?jsIA<QS;|Q^S|q;BA[hIfeoF');
define('LOGGED_IN_KEY',    ',+5|NSLF`+zo~e{H#=YeJ]+sOK%k/+4GchrXRFmO-mt-g^(5:*Ag,Lqtsa G3|z/');
define('NONCE_KEY',        '*LG tCQaW6/<|jWw,IrwZidFE):;@+)>He65EFK8bMyIzAL%wdZ_U2f.rUJ|_57E');
define('AUTH_SALT',        'M9ux;=s,8}7+[9K3>5L4NrAroNhG6>,S6?66>0 $|g`3HE0]B/Q2-#Y8v$;(+Fv[');
define('SECURE_AUTH_SALT', '@:jEjTej?El[J,eYL`hE9rt>-k(P|:l?^D{N8Oax-Y3V]%6>!a^!_;]F|1&xWrRl');
define('LOGGED_IN_SALT',   'nqG0P>I,-|!rL}cv12DL]P]+yfy|JM}uwNo0LYY|qwHWN:^[PgEZ,&(D!w+||4aS');
define('NONCE_SALT',       '^?KVk1=)V#Ys W7z00lrROzbs&?f@I}|{)9A@o(:e^gB4A;DXaO-Onivg4I)i@>j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'arnie_';

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
	define('ABSPATH', dirname(__FILE__) . '/it/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
