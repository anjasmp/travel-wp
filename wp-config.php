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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'csm-travel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yAoEOEKbViXU9cTUln75N7zlg4IOXvInXNvrSYIHPys2mZS9xYIjnLoEveepDk1k' );
define( 'SECURE_AUTH_KEY',  'uX3SQW6DEImq0nBXqZKeQ6WplFjTfw4ljlXzq3qjUbIFnzTkQ7FecK9Ytdjfpkzh' );
define( 'LOGGED_IN_KEY',    '5cVlu70KMUqpG0J0x7jlhrP4BMkByj3k9ya2EMZBYUf2OKhdPTtVZLioJqzpDmTk' );
define( 'NONCE_KEY',        'rbly8ri9gvkgtoIVVpHGnEq63jRNbaIsgTsoKZoU6yOEF3z7gVuvAPFF9sjj2tR6' );
define( 'AUTH_SALT',        'Ykt8J2Ez1ob88JRQzJRScdYpiwiT63JctEMkOULPeYY0C0fAnbLsJIuILF0bQcLZ' );
define( 'SECURE_AUTH_SALT', 'lRPA75LGb1E3yYjAm4X4YoqQ4pNCenLwOxAczblZq4c5NUziOoxevoUk1wIncs7Q' );
define( 'LOGGED_IN_SALT',   'j5OTx1WkX5raknfgT4aBaenKjabhYAMdAyfQwcfJw4ZhfgtC4n9DeLk1dWp1Ea4q' );
define( 'NONCE_SALT',       'QKRIUhhvpXR5CIR9Xo2CGMLtVKBTnW0aZR5ifaMvJVO4vRbWbP0MyfcoHY50r3kq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
