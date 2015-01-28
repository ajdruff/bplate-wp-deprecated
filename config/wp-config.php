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

 /* Nomstock Custom Settings */



define('FORCE_SSL_ADMIN', false);
define ('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 600); // One hour should be long enough!
error_reporting(E_ALL);
ini_set('display_errors', 'on');


/* End Nomstock Custom Settings */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


include(dirname(__FILE__) . '/wp-config-db.php');



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
define('AUTH_KEY',         'B+:)F[=)0F#_;+tg#S^n4BOV{Ym]vSvDrPU-amS|Ub$ZT~KDwJJU`2X-3+BtFXx-');
define('SECURE_AUTH_KEY',  'cNyCRu-xR?8+>vUvQw#Hp9e8x4o)4QF-C-G)KyVsR12Fx+KEDN{/=.:<gBl5s9<3');
define('LOGGED_IN_KEY',    'KG {./UV^<(ISEHZ1.u]{!cor=bQ`LKQwqKau%f(?1zT=p-I5u]x;pr.|~= 1W1^');
define('NONCE_KEY',        '1$XP>Ht%FXD|? x*a%|Dq51PNG0qx/|`RppZ=co#]Db?[+L|cimBlf e6Y[(SZ@y');
define('AUTH_SALT',        '{D43;p2}YT:=0&ca-3|+(X%*#=-J-I?-}5e5=#^@Ujq-dHm-94+f7>2 $7&E5e{]');
define('SECURE_AUTH_SALT', '%:pMx5OvC;l_[j$RH+k4>?{RiAi2PpJn[rL#B;&pxdF.30=W=|u5Vb6?);[5IWy}');
define('LOGGED_IN_SALT',   'Bu9orYzXj3N3i=PRw`x+3s@NEhF-q/8Xg%EIwB-v|{`D-#1e*Z3qC(N]3`V}G9)R');
define('NONCE_SALT',       '>`XFs-y3hlWpekBb^m~IBZq}qP+ A}Fsu|zT=gO]o*$#_C{/:6#SpN+K1_yH6_hS');


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
