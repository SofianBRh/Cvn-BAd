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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5dLM/tYp1ETWHWQkOA+g6m6dBj5YmLlheWy25Pgag8pD3ua74zC0FUr2VdeXUtHGsT2v6jVPeqF5qtz+/dtN4Q==');
define('SECURE_AUTH_KEY',  'zweYRL1+HaRfak+uemqpvc53UTONFf/YV3HqIJIgk0cgyKIjhSD+f83FqkKcoXwJjpqIng2kwnnqgjmX3DZBCA==');
define('LOGGED_IN_KEY',    'pXQn8nH9/rgSbMpVO9ntqgwKo5yPrzZsEFTuS2XgC/FGhwMH+VwASKnd9ksDup/WQ8m14cQIdPBQyAgIBPQVFQ==');
define('NONCE_KEY',        'RA/8kPTX4DQx8K9W/SIlS+NQqxg46wER5SwDj0ymU0CUbgqYVBdNmjLEwSfnfz7TUxQOucFlOs5u1PqXxqfc3Q==');
define('AUTH_SALT',        'ZVpY1rlXywJSHT0mxw8PrVpzEaYOvGdLB5kC/X3pKWMn2ybwAKJbkgzdUYakwJOLqphbT+EEVcYnFH+46cb6pw==');
define('SECURE_AUTH_SALT', '8OsQPaHFjAaTmT9OzjGIu+/Wsn2UMK1gDg+8rHcxKnB0VhuD2Bh4AwVTIj3G6XMQzzwL4IyKC+6d7MQrZ5ZXew==');
define('LOGGED_IN_SALT',   '4Rswkpd0atSycfDAACxIDXkrIgn7fKEg1f14Q/7DeMdCHmifFGg5UKjO0Lg1bvIver5eUzlX2pCEAoPZNA5AXA==');
define('NONCE_SALT',       'ICab2iAC597079Cy36KCw4hFI5dF0BDGjjdOcDXqe0BMxBTMVdn3Za7UNdgqnM9X1l6bPiMosi/kAXKtv2SvKw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
