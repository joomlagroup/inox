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
define('DB_NAME', 'inox');

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
define('AUTH_KEY',         'Ug#FY#v%^wYpoU?c>vTcd6}SBa2[mb`*id *%Lz?b&aKO(ty)*ktA{6Y_zkt*LKG');
define('SECURE_AUTH_KEY',  'IzF%I 70X>v9%0:-}tchQw|[gn51<D`>z(Wr(IEQ2cMr:<O!3-IX(Z9EQUPW<8c<');
define('LOGGED_IN_KEY',    '~Ct%J.m+LvHw{4/+eEw:y%>k.:5RB#DCu]8UC$L~*5s#w<u/,z&)p1:!~5.dm5(N');
define('NONCE_KEY',        'ngDX0@TTb9U0N5s8mZ,`:}/WCe1%l|n,w/4K:4Y0onwQ*@7(.k:E,t@:Gu3A1/rL');
define('AUTH_SALT',        'g~T4SE/?@BIYgFe1U[HI_v9DqDt0WN{&5YfSQXC;.]|bOV->(s!Q{/8|t!pNaI:,');
define('SECURE_AUTH_SALT', ',YMxj|7]erA?9GW%{wziS/rRTVJL#UBg5qj/c?/c3%s_b^KJta8|6:mTE>,CWa<Q');
define('LOGGED_IN_SALT',   'P1M2g1|)JS}K|hK5[~u`6W>1*fja[Lss9#n;Z_vUyN9kXG|`r{!C0MIA;pZkC^QD');
define('NONCE_SALT',       'ER~//pU,U$,;aZ^&mCI)i!bPaEv@YgWg(8Pf5aD]83{^b#r[ k~BNYm/Ij_gtKdN');

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
