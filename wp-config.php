<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'hlfDB3zkh6');

/** MySQL database username */
define('DB_USER', 'hlfDB3zkh6');

/** MySQL database password */
define('DB_PASSWORD', '1iulGUzr4a');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'hUk3N@r,Unc}Bv,zIc{^3Voc>Fv|zJc}!4k@7U,z0uj^PEb{*3mbuI6*2<Xq6;Hfy');
define('SECURE_AUTH_KEY',  'YQB>vNZG:z|sZJ0C[vcoVB>4!ojTfIA<ybMXE{y.qXEP6.cMYF}y,rYF7,r$fMXB');
define('LOGGED_IN_KEY',    'fUA<3^nTfQ3*{$UB>3^nUgM3^}yfMYFyjrqbIT6<u*mTAL2*mXi2D]jqXEM3^nub');
define('NONCE_KEY',        'A3.qXEP6.q$i5_:~lR8K1~kwdK1C[wdoV;~lxdK1D]wdpWD[-_VhOFR8!}zgnUBJ0');
define('AUTH_SALT',        'c7,v$6.q+iP6H;+taH;9#taLWy.qbI6.qbmPA<2*mTeLG:9sZlO5G[w_lSdG:8!');
define('SECURE_AUTH_SALT', 'thS9#1~lSdK1~[w}zkvcJ0B>vcnUB>3^nUgM|s@oVCJ4!oVgN4!}zgYF7Iy,nTfI');
define('LOGGED_IN_SALT',   'Q0!nzgN7F}@jQcJ0$>vcJUP6.;+iTAL;*mxeL2D]xeAM$<ufIA<u$jPXE{6*myfx');
define('NONCE_SALT',       '$MXEaH2D]xepWD]5_pWhO5_:~XE]6.qXiP6.;*mT9L2*mxZGR4!:wdoV8K:-|sVgN');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
