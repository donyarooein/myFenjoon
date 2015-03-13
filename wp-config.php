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
define('DB_NAME', 'fenjoon');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'NkhL Fn(Hh@[W|!Jcq!ysM-wDh4 S{A1QaJYq-=ZHQ4KV;cP%lFM5;2)nKe[cSm,');
define('SECURE_AUTH_KEY',  'CH86.p!HFZp<HnK$:P}&X0y!D+}B,rbv5lJGfB48GUAzc6oUAA*3$prd1-d+[|hZ');
define('LOGGED_IN_KEY',    'n9UvnE(o,s^nME# =7$5!N>LGx|{xV$4a<^a>1@(IjkIikQSx_*j`F6&d](]/-,O');
define('NONCE_KEY',        '{^7Ckr%h 9msbrZ(pG).,{5K&HF&S9qFssc%P{dW-k *go+WUUi;kuQk}MlK@t/B');
define('AUTH_SALT',        '[xlK7`C5suk8iG:?Yee/*~GhXx<}%!&J)+c27>(|sIqn%q89V;uaPIE?;[ryo;JP');
define('SECURE_AUTH_SALT', '*b6$+@0qGr%,w%S!hn}eWu#.$GtOqOMQ;@FP|o{#SmnBw|zAd-+^ 3,^evTb:H!d');
define('LOGGED_IN_SALT',   'V=:{88yF$5u.15joVv3`^8v-,8W{[I 9pXX.Km~Yr.cG,fSZ*GT0nC;EV&8^A!L&');
define('NONCE_SALT',       'tb<7%0=|@H)2zJ;z|e$*:S$okdlfh7^rwrRsDnDPqF#8-<w+FfNbXc!)~c2=0&bE');

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
