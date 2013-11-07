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
define('DB_NAME', 'ksivamco_wrd1');

/** MySQL database username */
define('DB_USER', 'ksivamco_wrd1');

/** MySQL database password */
define('DB_PASSWORD', 'RUx5RRH63k');

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
define('AUTH_KEY',         'e4PRJ3rlQC4V9M3USh9oGjbTO57wzJ3ngwsgPEClrH0M7v13mlHR66oUrZXVeSvt');
define('SECURE_AUTH_KEY',  'lSFe0NRcgw5xrNpxnhyL1hrJJHPhOZdjSTqtofZetzOAA2dVxqZEKK1i8dCOEoej');
define('LOGGED_IN_KEY',    'syfiinUFGPgaCHsICzanxwIXkNQ2sTCdKMlFJJHRIzdJA7uLOnL3j4Xi2yxKic0K');
define('NONCE_KEY',        'MgBjlRwl7t450UfiPNoCYdenvkiPFtHzjmvp9bwoJpP0Kbp3b3eA0nT69RWtBfW5');
define('AUTH_SALT',        'VLFqdAwVHIBFMPUltcj04zepyOYrnyCDNa0kokgIMfQ1V11Ws8DBI9BJHeGSBc4Z');
define('SECURE_AUTH_SALT', '3ZrHHNMttqyZEb83wolzwgP3vAmDf4jOcVE0s4VIIXj2oH9vN4jbcBYYPI8Tl681');
define('LOGGED_IN_SALT',   'FSD9NFb9la1IsVDHVTP2qFFYNM6GZiZyp6WS6yQM9oDCX4bHmQv0plUbm3l3vIFD');
define('NONCE_SALT',       'BWy8tYF9hN6qNXxaT64hRuQkg9vvx1qNkBiBnc1tKK3HGxyeOXx8eOJhKhpu7WpD');

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
