<?php
define( 'WP_CACHE', true );

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

require_once dirname(__FILE__) . '/../etc/php/lib/CloudezSettings.php';

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', CEZ_DBNAME);

/** MySQL database username */
define('DB_USER', CEZ_DBUSER);

/** MySQL database password */
define('DB_PASSWORD', CEZ_DBPASS);

/** MySQL hostname */
define('DB_HOST', CEZ_DBHOST);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', CEZ_DBCHARSET);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', ini_get('memory_limit'));


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7Cp|.4Ru}z ;Lb2M;9ptf{T}+T)6pRCH%_$%#mPDa#Bq :9/]eat_Nym1Sx}');
define('SECURE_AUTH_KEY',  'QqzdY,<#b }Gs1r^YzB`7}pet>X7Jb>XpW6#2n7tn`<9n>:j[7s]j#WEHy:<');
define('LOGGED_IN_KEY',    '3_bgrF+M^}B$VfJnWes9 Mhk{@UDjS^U[b+eBfxjT,!B`FaWzQ94)KUrmV<w');
define('NONCE_KEY',        ')2u.]B}V(#(}^Y27gB`a7:xS[az84[| NxZwxpqEPw.+%$TwC}3n]Z}{!rx<');
define('AUTH_SALT',        'dt5$>ECJ7!};V[)7G)ty%SeMY]B|GSCK>>jK/vY.|zZ(}e;hR)A4ca.$kss+');
define('SECURE_AUTH_SALT', '2xk7mLp%b$Czs|8as+9uPz@Pj2p(0.t`<X@*!G8xpA1|+qk7mntH!k5LMPJ@');
define('LOGGED_IN_SALT',   'p5D(zxsk7ucTKM]{F8d<!%8Hb}|>5vE*q{Vm@4mdsjcaX0*GpUD#15<jhm;S');
define('NONCE_SALT',       '^,xCxH^JEK_;%yWz/aPuj^Ws%.z3P<_:4v.6ap_jq(q}!(]XxLMBW>9a%M68');

define('WP_SITEURL', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://pronutro.com.br');
define('WP_HOME', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://pronutro.com.br');

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
define('WP_DEBUG', false);
define("DISABLE_WP_CRON", true); # CLOUDEZ-WP-CRON

/**
 * security
 */
define('DISALLOW_FILE_EDIT', true);
define('CONCATENATE_SCRIPTS', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
