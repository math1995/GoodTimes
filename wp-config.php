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
define('DB_NAME', 'libanais');

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
define('AUTH_KEY',         'sA,q4,EE?WAM]q4i+zxC+&DDpUc 2#K?k:fkho_*PxvRlIbAMx(-|>=8v5HEvx8N');
define('SECURE_AUTH_KEY',  'y )|Kql7<AIB>6Hx_!z*DcBb9H+QcYg(_B+pA|f~,GY:g(p?DQRnrJ_/W mvrH>X');
define('LOGGED_IN_KEY',    'L3k9w,<MbrfJg;1&D0wmdzGtKY+#Yd!04 _L??b&h,mw:Oj.+j(+DyF-bA9t!k9!');
define('NONCE_KEY',        '%8AM[i{z)k< aQUd*82NkLW06E~,})?w`WvENd:tef$W6^X[W!,H.D{M50> c^;2');
define('AUTH_SALT',        'yI!.C))ESkO~e#.M|H2xAk*wz51CR63Zet|*0pUbS|V*CA>8j!.9eaAU?~J!kq*m');
define('SECURE_AUTH_SALT', '3`Do@h+-^K$Ri)8tsDgBvu[]7[x/~&/gxx*U]wc4xJZk[E9!`TSrmPF-ewa~x2lH');
define('LOGGED_IN_SALT',   'iP]S}N>c)y+1RW*4yZXg`:kU.)g@y~@$/|+`O&-~CGE_g~__a:4|k+f-[4H_|)E}');
define('NONCE_SALT',       'euJ>5RWrGWTS}i5.~0(uu+9P=)zH}OfLKLrCuJL>adZ&q)mru74-dr:N>r,9(2wJ');

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
