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
define('AUTH_KEY',         'l8eDAstDL9MXDyQz3S2v0dRx7gi8Q/BlS8V++aoRaEYp/7vWSvvszxOzd72G/XhkX+KZgPmC1oIffA6QEHTWCw==');
define('SECURE_AUTH_KEY',  'U5dCOLCJLAqWowTM36ZY7bYybaehm2XNq7/vubUOI9QmwPVAf4TEd/5O1Id+XdiPkbs1K/5cImjHoINseQUchQ==');
define('LOGGED_IN_KEY',    'qYyg7/NnUjV8VwsDatqNaLRHJlVY+f5OP8uAyVe1Eg87GgT9FpM+DDB9IE6S5u/KhEGthHJ67xfd3brtW/EhNQ==');
define('NONCE_KEY',        'u9LEUTn782QISvNOEyKn9ohPAdDbixz+1C/bHaeHgMiAZnlm3qyFVS3WPUPfjBAkeke4GUte4KwzXygvZzkquA==');
define('AUTH_SALT',        'kSeSNAz8LAkzrgvo7Wb/5JDcZiDMnP3dQfYBuL9zrq8Em1clkrFI19bAHqKe90PKEZfOqsroLc/f3i8JHLDxig==');
define('SECURE_AUTH_SALT', '6Z3BMMdcv2h7vYGEvs81PZBcTOmlWxZ/ZnSkiiWrk4yGVpRa1cZ14L7NfsHLT4a5ldTxyr9naMRpSjqUpbvZNQ==');
define('LOGGED_IN_SALT',   'Ms6NBchrxlYZ2boK1NmdDHm2PD5K50iQo2gVQ4748zYI3FvyWGCEZBiCF9qaj9mEKzc8UWQ7mTtOGp4nuGLbiQ==');
define('NONCE_SALT',       'xAEbegTcrLyEbhMnBbvAPLLZv08N6l3P1h0w2Crhsfr+Q1yZTUIrlO5l8fjDelHK8H/0IoXb6Qhaf3UANn1i8A==');

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
