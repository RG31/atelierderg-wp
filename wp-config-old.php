<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'atelierdxo386');

/** MySQL database username */
define('DB_USER', 'atelierdxo386');

/** MySQL database password */
define('DB_PASSWORD', 'bZbUkk5SVTvz');

/** MySQL hostname */ 
//define('DB_HOST', 'atelierdxo386.mysql.db:localhost');
//define('DB_HOST', 'atelierdxo386.mysql.db:3306');
//define('DB_HOST', 'localhost');
define('DB_HOST', '3308');

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
define('AUTH_KEY',         'COehBYC/LmWYuG46u78H4+8CTdOlLO+3KaGFJA3m1WyMivan7QVATAc1YjBN');
define('SECURE_AUTH_KEY',  'YL3DhU+xBCzS7yNnweJN3z7buQqMPStyFkuc1uzIB3S4Rn/Xb+2uWmKdXc3p');
define('LOGGED_IN_KEY',    'pECPdYQu4NPnqVMkrLjK9XFoBd5Vz93ePcdd9XD0oi6wnZP4Z13rNSVIiLhY');
define('NONCE_KEY',        'hxqklk7jcMMw3cCsiBzY4654SOFGxsN3isyWq6FIshMe1bW/ABBpzlK5pGmV');
define('AUTH_SALT',        'pR/7Ajg3YjAKfb238lWTbOdlkG1NhV+ULGWrGpinP41HqJ8ZqKOm/xy5AZ8c');
define('SECURE_AUTH_SALT', 'nKdUFEVUtYGqAnhM7/23kq0c4oasZsv5fy+Gs7ViRP9H4QyGbiABXhb3Lq5z');
define('LOGGED_IN_SALT',   'E1MKyHJdkEO/tTtqrJ0GvjaqHUVel++7guVUaNQkemKHuh9ljZBL4CPWJ08B');
define('NONCE_SALT',       'OK6EfsV+yoASnqWjurzvecg/A8yvwVXD6LE4M1ffPYT/CDrQ9Fh724YIOcMF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod864_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

