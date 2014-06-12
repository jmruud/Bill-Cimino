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
define('DB_NAME', 'billCimino_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'UWm%)MAEO6GsS5z4{!~;?-Bo;Glt-o7:n(])/|]x[~rtU<wRvhm9a#h&7t-+(^aq');
define('SECURE_AUTH_KEY',  '^j.K<[hayFq]Rl~XYu9~ cM>xrBhZ)MQ:_-*Cz~h: ;dar[|j[XL!mf@n7/STg[l');
define('LOGGED_IN_KEY',    '>[q-9)9q+vp]|<|NQ+%2=e}&sL>7JW5B]5{r1(#_wVCFvdlw!t|$QUqRPa`b}6E5');
define('NONCE_KEY',        'K_oY.s-~dseeuvslbS>`H?S -xKe9x:jx,y_ny+*vXtQ})z!|H?jXc1ffr,fXuP-');
define('AUTH_SALT',        ')x3#.%5+0d1{`u-:?(O M8AQuwQd95s./-awXInphRU$5T?<S_DG?Nlmr--$5ZDB');
define('SECURE_AUTH_SALT', '*.G!SG!7 cJ{~}-{N mhbF[:&G-HB6$CP:zM,.If($OW dgrN,lN!v=+Bn~|1g*|');
define('LOGGED_IN_SALT',   'c)fPHVB`lS6/$Tv|SL:w8 Qx#YVUeCPw_9Y34_FXlkUG3#[[%rW?{R|L>I_@KU_R');
define('NONCE_SALT',       'A|~NaPx86J_mP*+q`DEsS,+mxVj>B2TRU+wF}-EegKxFUVex-`^oLN>EdIv6Wt{.');

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
