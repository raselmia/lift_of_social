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
define('DB_NAME', 'lift');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'Hx$=M*MZ3E)g!-KF<U#h5y$Q|^7Km^0>mB7_0|9C0yFqY}iGXsH XdF66gpV8.,S');
define('SECURE_AUTH_KEY',  '?btzb72Us:(+SzbD:J!KP~o(k]VM{tKk!jg_$b.x~u--=KAh1v{]$.gq4|S/LJqX');
define('LOGGED_IN_KEY',    '] !)aT(w#ei,(fuTV5fgqkgT5_U[-+|vZbXC>b6r3[R@gY-?Hc);$O[0-l^*+)p=');
define('NONCE_KEY',        'Nh3}|+R&}M0~+r%xL>uq}dcl[zYXnv|HFuIfTMnpnVzAT-/+)rW0Y)d{^47|W2|@');
define('AUTH_SALT',        'qg}VYR)sWiqJME60|Br=i=XPl~Y=g5t.~m#0%-pd%,^d[_fB!Ne!+B>QN@+1kWY&');
define('SECURE_AUTH_SALT', 'e!@0ym+MN`s+G%e3)zNx_9uRyRBys$#+(zu&Kb%*KJ|4TdeH=>m0+t7Cv,5xUy|p');
define('LOGGED_IN_SALT',   ';}Q|~I;]c$wvI(WDRa`18|>|$Z!f*M;/6IHT(9[;O5IkAb,/ 6+mP2|Vo3-/Ao95');
define('NONCE_SALT',       '.~$XNlKoGw,q:9A|;(M4z>w[&uq9={Yv}0bv-J8=h]e1_!]t-CU}x(uJ|-n^>&&Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lfs_';

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
