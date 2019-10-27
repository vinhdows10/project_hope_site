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
define('DB_NAME', 'project_hope_site_2');

/** MySQL database username */
define('DB_USER', 'projecthopesite2');

/** MySQL database password */
define('DB_PASSWORD', 'BPw?pKPc');

/** MySQL hostname */
define('DB_HOST', 'mysql.project-hope.site');

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
define('AUTH_KEY',         'V4C5faLF^STYRIz;c;s0dn(WW3@ncVonE5Mk%r)O)dpP%;O1%163;8BXA;SrIZQt');
define('SECURE_AUTH_KEY',  '`|Gv(l;I;YG#h$h$fe_kD1yZl!M5B&&Jja|?@Pl4GNmdOFHVH+HBj*(Govsnm3(W');
define('LOGGED_IN_KEY',    '4hji&`_yNUsk$5X$@Dl6hf*8^bpt38?/X)Q;)vB_XlHGtAEdheG)OZVP$CAZiO7D');
define('NONCE_KEY',        ':bFiOJPu?U^wB5$7^_|^qoW;hG3ZS)iXj%69P22K4v?_ixw^1/G$i^p:b$*_5TT&');
define('AUTH_SALT',        'sgd|xsOLvnj8VU__HP/aqjPHCXasnO@#H/^5K&G8_z)k)8Y19)9Z;+3Z;`0&YWko');
define('SECURE_AUTH_SALT', '"?H#$YzWxBw%5GuN#Z4Nqkny0nH6U~$obJd63Yq^|Ey6efd8icvghN&Rx)i&|Qby');
define('LOGGED_IN_SALT',   '$wc^&3G)g|?md%yTmCCr*jQ6_YMs8"c6$o|d8:ZZZ0j!QIP"th!yi6YMj0r;*!nI');
define('NONCE_SALT',       '(C/6a4QPKqOqC?El"iA48TgfbogZfl4|@h2txUn&b#I@qDFwCP(z07Jx04c05y0g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_zzzmi7_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

