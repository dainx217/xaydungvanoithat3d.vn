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
//define('WP_CACHE', true); //Added by WP-Cache Manager
#define( 'WPCACHEHOME', '/home/xaydun14/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
//define('DB_NAME', 'xaydun14_3d');
//define('WP_HOME','http://xaydungvanoithat3d.vn/');
//define('WP_SITEURL','http://xaydungvanoithat3d.vn/');
/** MySQL database username */
//define('DB_USER', 'xaydun14_3d');

/** MySQL database password */
//define('DB_PASSWORD', 'noithat3dd3@');
//define('WP_CACHE', true); //Added by WP-Cache Manager
/** MySQL hostname */
//define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');

define('DB_NAME', 'xaydung');
define('WP_HOME','http://xaydungvanoithat3d.vn/');
define('WP_SITEURL','http://xaydungvanoithat3d.vn/');
/** MySQL database username */
define('DB_USER', 'xaydung');

/** MySQL database password */
define('DB_PASSWORD', 'xaydung');
//define('WP_CACHE', true); //Added by WP-Cache Manager
//** MySQL hostname *//
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
define('AUTH_KEY',         '`qFlEJx+^X3*sVBVk-2h6w>#Y%r%d-s(|/{^m~^+r#<KuFMSK&Ry;qF>~d: =Aly');
define('SECURE_AUTH_KEY',  '0+L&3C|pAnJ7N`r9ET-+ kc=Bfld3L|j&|P(AgxVQ4K>u*8i-V]zaA!#$->6)xga');
define('LOGGED_IN_KEY',    'yK3zP_Mc]8<C7sz(I-/Mn{;|</t}.|-}|<6psjAZ|W:`XteL[qC*%ef}udR:nv77');
define('NONCE_KEY',        '=s@cZ-/9VjMW>o}--%6z)jtx{6|+c({U5cX&2!Na7e)|-0$W^A)~_H4Y)K<wRT(i');
define('AUTH_SALT',        '[K{%.o:ww_ LjqKipH&Ur}*@?~+M8Z--hy_ Ex+B3PgF+F)$ r3uuf?2K: cKCWO');
define('SECURE_AUTH_SALT', '57#7.++VQ`zTKgOIzIby{PptvhScVB*/IY]j*& KsLJ5PvueAXp Q;8xp-{[sN{n');
define('LOGGED_IN_SALT',   '>:z`34|SvE.sDHoUz6llV^HZDCDHL]-:{p):}qt#iFoCq^&$+M8cPXeIBUkW|j|D');
define('NONCE_SALT',       '(+A8kHBc1VSsCmJ~#;$(4dlnAz?Uo[Gz#sFG:d&chKx[zlCHu?ua>$zcBEd*+F,k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vnt_';

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
