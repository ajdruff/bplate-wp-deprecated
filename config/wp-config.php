<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

include('wp-config-db.php');

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
define('AUTH_KEY',         'KJlX(^.>P8s@{Q+5uIg[ZAM4$>Bf@`2qx9)+,eY|5-A+FXHec+%cc%d0j]?AcPbP');
define('SECURE_AUTH_KEY',  '`t|LvCn%jn1M*&+5{LV(4zR[SC,w1v|%x4n</fn-G8-YDo8=9vcB/c/9swS0[r^S');
define('LOGGED_IN_KEY',    '`^SD+|%$zJOKRLz{BXZ]{ST!~OGgaOE([R cPLl?]cr`UwSnU;y]w$11}RE/xzx5');
define('NONCE_KEY',        'ZH,Z3UJ;^XU92[fu_T-L<DTs*+6%06e8C?/Jemu0J>i[r}Y#K%rOK!g/|s*k$/>/');
define('AUTH_SALT',        'zPv.,(]ld14k-_)b852t{o$`j*if4%pz*@/Oq6F$-cg{[FDME3@/u|5dOlREBc&E');
define('SECURE_AUTH_SALT', '}bXayGQ}m>irL3lwk0ij=EX/4-d_WT#z{@UMD(Gs;EjF*_P*?x91Tgcg(m0-/1|2');
define('LOGGED_IN_SALT',   'CCP +*k^$3|x)IlH>S-Sy!Ikh.7d`_qa0wmde?0!_tcp@>)?(:;? }{q/iEQ,lQ8');
define('NONCE_SALT',       'V-LL*HXK&ggK1wYwSHRrNA:~tvl|Oz6RUGamG>i6zFhYR0oH?/LkM~>b_c*F3Z+5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
?>