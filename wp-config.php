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
define( 'DB_NAME', 'demodesi_wp432' );

/** Database username */
define( 'DB_USER', 'demodesi_wp432' );

/** Database password */
define( 'DB_PASSWORD', '00Y7[S(p4r' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'lzco3fm2ejhcxsgxccrf60zm0zwyaxtawrkjggvodcqweudwnqnrbopi3wyylgru' );
define( 'SECURE_AUTH_KEY',  '79hprbkhwluc83tcsnmvyscq6xehawa4l7ggaw2jsv6mcyeur0xvqtzcurqtmcc9' );
define( 'LOGGED_IN_KEY',    '8zfkfro8k41vmhzarreyy0sck6mai7gcjwxy95zqourrkznzaap2g3sepryk4sql' );
define( 'NONCE_KEY',        'k24urnmbguomgrinsyjxonhuyphqyrq6z58dxbuvlxqpwxxlxjuguj1aiokml8oy' );
define( 'AUTH_SALT',        'nyyrkxutafjpkl8tnaklo2ahhlp6jardqs6slhdnp2jjsfqbriutmjkqj7rowr8r' );
define( 'SECURE_AUTH_SALT', '8defosabdyuezbrvd9a3oqbdym7yrqbc2vnirr9mpotgzcf3v0jwqnlt35zrsyfn' );
define( 'LOGGED_IN_SALT',   'ue1lvse4vlg6r9iuww75fxuriga0balus2vflirdonnwelyuihtoiulbtcbv61pb' );
define( 'NONCE_SALT',       'ce5llqw6ucktvyppxi76ix4flor7pce1bdxazt7clfckiuiqbx2zwxjriqhisyc3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjn_';

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
