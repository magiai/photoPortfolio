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
define('DB_NAME', 'photoPortfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'coderslab');

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
define('AUTH_KEY',         'p<-dlkFEg#Cp-M.Ck+I$ZawE<GR;1M:vRc+N,P9zA~=?Fh%q.T^c]y:B#r}ew>4;');
define('SECURE_AUTH_KEY',  '$+!wL)Z%W[D?FQU#*ZFE8>[OdO4FD: egw$NobeSZpZK7I{> 2ELj!#CR4*pTM8s');
define('LOGGED_IN_KEY',    '3v%4I$g=P(j?Zu7xEJ0c@T ():U]szrUfG|h_L}=p!a!]m2s)Dva)~jffhK>S?rX');
define('NONCE_KEY',        '{BMb)v@R?}dk}wuH6<^07aHo<dNVNpk3(BIj!NDAIt.0:*O=wI=pG4W|-83@bFDJ');
define('AUTH_SALT',        '`L,Lv`H/?WxTLjpLo7h% vbi$AS485hFtvo*/:ib3fe&s%`_D~*_8Tv2*k]<xe@&');
define('SECURE_AUTH_SALT', 'mR#Yx}:Ja[1geh9r}>,NRBqUgUEMOA,/tjefacSn<L:galE|PXYM/6wV7f(+q~[f');
define('LOGGED_IN_SALT',   'u/yFEWT40h/47?!b*S uX?E=5M4V <pU-(i)sR)wzCcou$>`d3e<r)iBz0=BbB^+');
define('NONCE_SALT',       '-S0p)<1]lsL3?g%8|yky*]`3}o#9>{u|DpSlrd5DP}:-$3jpwBRB<lU!CoL(vCXR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'photoP';

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

