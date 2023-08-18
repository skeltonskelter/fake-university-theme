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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
if (strstr($_SERVER['SERVER_NAME'], 'fake-university.local')) {
	define('DB_NAME', 'local');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');
} else {
	define('DB_NAME', 'id21157993_fake_university_database');
	define('DB_USER', 'id21157993_fakeuniversity');
	define('DB_PASSWORD', 'Slowdive_14');
	define('DB_HOST', 'localhost');
}

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'GMf9blpGIov7/7k4O9Qkgi4RmOD2SyIZvL40O8RAeP/dmC046uO6E19KCt2ybiFaYe0KK9+9RpZMXhFpjS5mkA==');
define('SECURE_AUTH_KEY',  '4x35F15Ft1vfD8zWQGbei9nb2qAvMKrS2rpwDg0gGFEH5GGbf0jRHyO4w9c8L4fZejDZjIK4EReJI5x//fb/1Q==');
define('LOGGED_IN_KEY',    '4P+tecnnVqJtvCVGOZ9HjT4cDJxvjjMpisjuF8Gt+bbqkvrzifAcgyavq0ehnqxglwPjuXQnWSyJJE20ZdcALA==');
define('NONCE_KEY',        '7KIMQQmvxLDt9SHnJ7d7fjLpOM+IjiPBRt9/XaKyW7nOc0IE+xI55NX/L51nZRuaxCsxqbUWjSrA2aJwRVBQng==');
define('AUTH_SALT',        'y6PZHQI+D/4Mynk0U7J4ifIdeX8UCBaPelUqiCH0Z36NLr1h9EzNrVlfvUrdEAN4yb7CJb27I9FXXiiUA9hZ4Q==');
define('SECURE_AUTH_SALT', 'NmEV+WJWETbLbdz6ktmSa/4Gbv8HyJO7P+VHrUak203RBDGHzYqTt5WdA1h2dZ4mC8AC6My478ICEdEqxwebYA==');
define('LOGGED_IN_SALT',   '9ifuqOMbLZ8AC81v8ZThMxK+vccdS9iXnC3TOGLgMjsDftEVme6Kk1+bBSMU5OfTT4da4Ypcpy6OowuBvT1oCg==');
define('NONCE_SALT',       'Ka24Ni39pDl1xH87ixSz7ygmHNPMeJtCKGcYHuXyn94NLJ7YTg+GQCocqVAnLpObCieGgIFcI2Spiwcu2MDLtA==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
