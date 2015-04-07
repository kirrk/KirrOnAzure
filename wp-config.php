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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kkirrAO1oflSXkhk');

/** MySQL database username */
define('DB_USER', 'bddd4c534264a8');

/** MySQL database password */
define('DB_PASSWORD', 'c557dacb');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-azure-west-a.cloudapp.net');

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
define('AUTH_KEY',         '2EnubA4hebe2e8rapanesuCuTAs4U8r4');
define('SECURE_AUTH_KEY',  'MuTejuK4TePhu4tajeXefRUCHAt3phuB');
define('LOGGED_IN_KEY',    'nAchEZes4uM5xADaHafe45Dr5Bruphu6');
define('NONCE_KEY',        '8eTruspEbRacraPaFrUThuthEMucumAp');
define('AUTH_SALT',        '2h2j3b2azetazaxadeswaraprEfecreb');
define('SECURE_AUTH_SALT', '8espeCe2EmatrATRenamAWAnatuWru7u');
define('LOGGED_IN_SALT',   'kaqetre5Pafr8bech3jubREx7wAyestE');
define('NONCE_SALT',       'ze6rUs6dadrEh7ZakUtHe8A2r8ChAfur');

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
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'kkirr.azurewebsites.net');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
