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
//define( 'WPCACHEHOME', '/home/aurisdiz/public_html/jeftinepozivnice.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'aurisdiz_jeftinepozivnice');

/** MySQL database username */
define('DB_USER', 'aurisdiz_admin');

/** MySQL database password */
define('DB_PASSWORD', 'oH_dsaF}fX1v');

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
define('AUTH_KEY',         'njzL>zcuE=*&T6hi09GZVE@$u m}fwsF}VVQmLRYC0h~%xB$pZd3wmHKhkPoRgBo');
define('SECURE_AUTH_KEY',  'KxLxbfl8:]m@kCS2~qYMz`!E({4xoG3v[uoKD5dhgBSe9MR/Eni_p{v_ C*cD|C{');
define('LOGGED_IN_KEY',    '-VFl$zt?gMD<cDhc]K9ZG$Ke!L~)6bq,1|gdK)K_/DB*T7UpN9ua:+!G@+WLzxab');
define('NONCE_KEY',        '4[9WLrSW>~41{6I])3A5h7KlOI0}<}h/HH~#z k@l~z_C{o=fkwXxt/2_[FJSSCa');
define('AUTH_SALT',        'B:)1>S{)T!&8%98wECzCMyO?c$kpi5D?jm:2(bZE!t*&9yQ!^{^ir0jlJMI6s9n2');
define('SECURE_AUTH_SALT', 'Y;IJ}{~5QlTP^FzB^CE((>m62+$Kg?OW^[oL]Syc.3d@wV;C}+^i0|8|<m]b mkZ');
define('LOGGED_IN_SALT',   '}N([Iq2let(pM_?#sn!2)0REZe`ZX/jtUE#1=XTq~}IqEi/<~[[=Y9chO]_I>!L1');
define('NONCE_SALT',       'ert:EVF/{}D>RE9eejX*Lx81X2U!1Vog[Bz.SY_Q8[YRCx@tlDnGX]S@DS9v@%V_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ad_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'hr');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);


/**
 * Custom constants
 */

define('WP_SITEURL',	'http://www.pozivnicelalinea.dev');
define('WP_HOME',	'http://www.pozivnicelalinea.dev');

define('WPCF7_LOAD_JS', true);
define('WPCF7_LOAD_CSS', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
