<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bcemedical' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Wt0RdphNzbYk0HmeaytFLL1xNxE4H2vl9u9x3bj9nGw5zOH0siKGnr5iw5WDO6e3' );
define( 'SECURE_AUTH_KEY',  'BmyLKz2pTkfDs7SwHNL4O2O1au0OOZZ5GpjWRjeJTqXbUXrzemepFj4qyJh0lm0f' );
define( 'LOGGED_IN_KEY',    '8WAoG0ob2QWyGCsjqoQXiLf4SSwf7aOUzoGi8HnQpKi1A4Guf38djJh8AF9w8JwV' );
define( 'NONCE_KEY',        'CGhXd6UK5IfS8VOtHBnvCE7fq987X9Y14SR8X9kQUI8gQm4ilSmy4NPsoan6cnvY' );
define( 'AUTH_SALT',        'io3W0UuzsvUMcxyoGedgOLuzXdorwj9s2hf3bdrzqO4WBhGO4NvJf2uVFhlppnON' );
define( 'SECURE_AUTH_SALT', '4Ms5S2LOWCmROBMxzGaKjD3BQzeVZUDnNE3ZcbWxXD3KcI4ADpVShZx7qexi1OTS' );
define( 'LOGGED_IN_SALT',   'eMFabcP1bVjicIgrLPRqRKQD4PZwOktqnPGaKi0bwskzCRH2lVrF62efDfpfbmnL' );
define( 'NONCE_SALT',       'wfUuGjqPAcqwUvscjcddQsqdLv7RZmjFbsWTtdVc6ma7jiYPSZTSB0Zrzz9zr62w' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
