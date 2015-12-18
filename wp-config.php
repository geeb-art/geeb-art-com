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
define('DB_NAME', 'dev.geebart');

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
define('AUTH_KEY',         '.0!=NVYM6jApr(& bEyk>0<hs*{UWe^:*.arbTX#f6&dj?Px+5V(Y<.X=tsyC4#x');
define('SECURE_AUTH_KEY',  '2I0vKO[=MJw-]GdDLyC~&Wfp5GcLa&NcalU 19ieqOjz?*4x3-e1PKI:vrE7~i{L');
define('LOGGED_IN_KEY',    'w2t1eu>_E;+vWyvQmTDV9IfB+EB<H_aKcPgs6]9GFk4>kb6ij^/KhF0cpRGq k1]');
define('NONCE_KEY',        'PtD)))-|Zg7UXMk1{e=7>[P!fQcdM4XBPi^>Oe+k@gn3@.9{v8kh#5 <Uz!pVr+s');
define('AUTH_SALT',        'qPSif@gmI!9R 42Z]SuixxM!cQ)V3&<rx.&*=?wt#s=9RZk>{N#iLPYIY*tGG7M<');
define('SECURE_AUTH_SALT', '9W0uLAs9W9/t)6U{&/;rDY!$,<)c.^Ghni3H@f0:6#h9~:jqU$@1feZ!vCC>3a64');
define('LOGGED_IN_SALT',   'E+EWjM?J6/f]~*S;:vE+jFQ@FlkyL;TiG$V6vh#bLe{GGWH7:,=Bf?b6{T%p$U:t');
define('NONCE_SALT',       '^k7$n>~:osN%xHgzEL`q$#?~PsWGb.2PIm+k{;Y-wb]zo9-8zhjl9.8#1x=K5*TA');

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
define('WP_DEBUG', FALSE);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
