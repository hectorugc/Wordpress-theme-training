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
define('AUTH_KEY',         'tgMrBz+9fPJtm120ONQa744Rm11GkSxhFQ5Snk9feJqTiEpEFvdcPPBcheRYJLJsxw7rjtjohuo7doB6y7ShOg==');
define('SECURE_AUTH_KEY',  'vQjRuHDeSgmkzxOTsi6ucycfZ0Rxv5TMU10g8qE5/8rhJrfXg7CtUpvcZW6QiOSzFpeq/akPdnMUYz2JMIzZHg==');
define('LOGGED_IN_KEY',    'xbr3EGrTOrEUrlnrToPhtktN1c9OWdOcjzrAhLJNhQFimn0HEU3hacFx7z6JFR5oZElFzFEWNvhKe2rzi/bYtw==');
define('NONCE_KEY',        'sFcSK7jLMsVFaSvRo2YNTUCh6erwHBUKuDIWOaaudAX8ZHG23pnEpYML6eL7mWJoTY+h2kJUqkfX2ULTvKKF9Q==');
define('AUTH_SALT',        'pDhYsr/NsJzr4G+Pfv+2OpRduyjV3U+QgmCL4cEMsKIJVXy7JtLdSBwlKH4Vz99jDvsXUUqhc3w1km7Tv4kWWg==');
define('SECURE_AUTH_SALT', 'FBqphUNnIhIvlD2VpzT80aIc7OxLsS5nXB+ezx8U/xhF1yzrQwuF9hRDj9295QVXyvWmmxknhFFptAMMW3K/Ag==');
define('LOGGED_IN_SALT',   'A4+q+MHzOXCtKkhE11Iom4Z8oWlSHBZAbEdK8SswpQpc6I0eA57KDQLAjFwJOI0YXpX6O7GNvh9Q74MPk0rC5A==');
define('NONCE_SALT',       'AFdHZJl/w/vgTI+VE65WXrSZGe2SlKPaS11LSUYv8eYkgrCJXCxhFBH8SVxXTgJZ/9U4K7IskhWgHoTwS6I2ag==');

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
