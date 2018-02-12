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
define('DB_NAME', 'cl57-a-wordp-tum');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '1rn-o/WteQDYKe8YQM-uR/PjBN7I21/yM1YY^/TsV!9Wm65gDR3l#w-goFD(MSXl');
define('SECURE_AUTH_KEY',  'tcss9LZgKGgN0M^tGsi1IEeUpR4ENGOwx6-+vsvW/w8+Ht)OINkhaUznj#q^doRD');
define('LOGGED_IN_KEY',    'oiu(CQPI0VYA1da)BUt!3w!=nWTKs1PTGB#9F(ky+!NE82+FZK!+lacqemihir3O');
define('NONCE_KEY',        'DQZPe!ibR)olydg2pAjIs+YOEQE(h6syjO^/+qFt#4fT)-I!7kabzurNQEKQDfhA');
define('AUTH_SALT',        'hwdI7pYNUEuBVA8m568C#ga6^4Y#o9lFzXpeV)qsI^PFXx4LoDex#UALiQlEk(1F');
define('SECURE_AUTH_SALT', 'i-y8DkQ0iH6eFgQ3StnZnJLbX=9vj69x=Pnnb)CR8OxkqbKFn2t-px1b#y=Qq0z9');
define('LOGGED_IN_SALT',   'NrcxT+Q/urRnGEEI6sB1djI=Z/S22IZI49USxK(hgThd_(pJ2V1eJ818heldYFS/');
define('NONCE_SALT',       'UWdd+a-P-+wuv_B=zh7ICBHCHf8Uo2jEt1U20NxuRN5m)=y5owaV6vjOPh3+Bw!Q');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

