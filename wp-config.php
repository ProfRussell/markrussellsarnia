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
define('DB_NAME', 'vvu_j1fj2bhhao');

/** MySQL database username */
define('DB_USER', '2YNH4Etepp86NB4');

/** MySQL database password */
define('DB_PASSWORD', 'p5mrg4OY');

/** MySQL hostname */
define('DB_HOST', 'gaaargh.ipagemysql.com');

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
define('AUTH_KEY',         '~v[3N=|b^W5!qid})+Uv+wu;$}k>89YsK_^2_!|k~tezl>%.ry._%_r9~_Dd-Gud');
define('SECURE_AUTH_KEY',  '/#*4|VF,73*$[OfB7&mEhYm8uV.xC>O$^`Zb_%Yxqzx }qL-&^SS`1+l0|K9pb|J');
define('LOGGED_IN_KEY',    'W>~FvD32$08DuZ<D+(|[i!tkdXoigCGP6@)8Rdvy0`7<:!.(:fa{fmG?YyYI=69-');
define('NONCE_KEY',        'od`mi6GzshFXiGUY@J^O3M9~33`]>ui~LygfJCqZAEhO&vC[ZlcJ;%#q/a|^pRnE');
define('AUTH_SALT',        ' bRhJh7MZj UqyB_SG E-!+mHeHl;8S#y|s|ww3ox)NO%u M]6nISNA:}7i+rpxI');
define('SECURE_AUTH_SALT', 'q_J_z[,iG;%*e[:|l+rM[K2H+<r|6QN iPF>TUllY#d4{Y^j&_?Tz~bJtI2z[D:9');
define('LOGGED_IN_SALT',   '1=Hzq2;|0HTYIvTRNzf7(Un!(SNS}AH;Yc!|uX!w5*a|ACl:_hie<1]c+Gs!E}A6');
define('NONCE_SALT',       'CP-{`1+0!`7UX{|p<bi(oK+!%;Dg>xu)t6t+bz70dI-%lh:*dhD+.oJqtD.|3$ c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vvu_';

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
