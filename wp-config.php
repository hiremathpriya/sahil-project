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
define('DB_NAME', 'sahil_db');

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
define('AUTH_KEY',         '-fcW/o/L#^}x8sJVC]|uJb<r5|c6z wj1`s*({d$Cret_N6SOMuejbGllbFn5n=C');
define('SECURE_AUTH_KEY',  'Vde`zk4bYSYYKv9Zz]VR (bvrdLm1D`Za9~@nxRC,LTv4blV@i5C,t6#IwSoh&]N');
define('LOGGED_IN_KEY',    '+,waK@9(Xwg}HfH3CJF=hKS}*) -0s7]{oGUr*ThDXxQ@T4E0RN8v!,L3!N}|Zec');
define('NONCE_KEY',        'T{V/L8SOSa+Y#vHw6!vl;ST~}+oGlFq,F.-[Im6P5A9![#L Ux6^^_ `*$_6Heo ');
define('AUTH_SALT',        'y@$CXji?]<b;KG$_&1Gte~<l.v[L)eZQVf^t))uqpbej%D;8P$xpBc9l*V9mNG:l');
define('SECURE_AUTH_SALT', 'rNm@0m&aCWHsb9=_{P(avfbyIw0#>s zxPyEEKyzm$_?-P4PMrVXkmph{gIaVk(Z');
define('LOGGED_IN_SALT',   ')?klRhD.QelvH:7LH!uS+2`AVcZk;+3)[JvY3()aNfV[xw=d_-y3SQ13Os4]jT7O');
define('NONCE_SALT',       'xdj:$D:~BRap8@u%J!*%,xF.e[wBB18.9U&n_y*1!:eW)a%0o50 Sv1nbNm$`[OH');

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
