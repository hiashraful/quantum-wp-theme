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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quantum-digital' );

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
define( 'AUTH_KEY',         'E5NHVuLeAWwmhQoYSeTOtM7Jazv7ZsbHHh73xoG76YRMKkxCz6PDtTKbV0fiMWw2' );
define( 'SECURE_AUTH_KEY',  'IEN28Fv8bBLhi6ZrqIXl4tSx3ybjY7DrbqT8cCKxtuJKPtBUxQe8hgCdrLZwikJb' );
define( 'LOGGED_IN_KEY',    'xpnRwjlwpGf2VNYxPmahC3xmJzouNjq8McgB6ht9RwWI1gxmVE7hG8EMelod1FfV' );
define( 'NONCE_KEY',        'vvlYwxyLRnjaDnS82CAHL7xB60KYqlSH2Tr9zHYdfYeYQ7Yi5RzkKpsL1Fh5sTic' );
define( 'AUTH_SALT',        'wfZej5rrpo0uSofX8H7RcUJzNZDCXMEI7z3IPZRxD9znwtat6LllDqDshQpuhz8J' );
define( 'SECURE_AUTH_SALT', 'DuFHjxSK8nbBr5jFz1h95lG6ZfSZRPrUpHfPh7kd3ntur9Y1Vd4MfwSdhkoiap79' );
define( 'LOGGED_IN_SALT',   'QdmnvWPGZknuio6fnw8vooobHUt88ueiYh4uV3mgrHWkC7qTzdHDBIb217et8qfq' );
define( 'NONCE_SALT',       'hKrxtSG6eSkzyguckTQtKzegzwwhxyHKpgiMkxLaRv40Ip1CM0TOkrjktUpbSu78' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
