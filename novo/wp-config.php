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
define( 'DB_NAME', 'roger209_wp758' );

/** MySQL database username */
define( 'DB_USER', 'roger209_wp758' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xT59LS)3)p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'owaqbe8arfqkbbsrpyc44zj9gjw3myddivopqkgklxpp8mcdgfhgmldtkviz0ils' );
define( 'SECURE_AUTH_KEY',  'ogccbhv3fe9vhaxrgbaty1b4mqrxm0kacxstalsjfxlwzudp7nlhnk47ggpcepju' );
define( 'LOGGED_IN_KEY',    'zeznrseal4t4shp4flqlyimtq3eogomokupq2dgiyiekjjrm9rxiu8hlf5zyy4ja' );
define( 'NONCE_KEY',        'l0jllgwqsn8r5bzxen1ffyu0qboxhb6a3faxhngsxlfdcm15qfaosbzh1uwcq4jg' );
define( 'AUTH_SALT',        'ok3o2gdhhgfqxrmuovbzjkwfuymrhj3cjpfd85tzaq4rvlnk1djuuoio2aoftrnj' );
define( 'SECURE_AUTH_SALT', 'hjwvppmxgwmjxyawy5z3a3ncwbzgafphoxuqbtmwf7v5hlzgdu6ojaip3ucj1mm7' );
define( 'LOGGED_IN_SALT',   'd8xqvvnbb9qe6pklpappbfpl01uvrud3e0nkvgsb8lt9jmgpeffm6fjnjqgcfvrx' );
define( 'NONCE_SALT',       'bxgiv0crfeyultwhopa7zeu8dqkvr9sfbps9ugbunljv79zewx9mczo1axhb0xhr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxi_';

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
