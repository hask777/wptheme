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
define( 'DB_NAME', 'uza' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+/!gBO1HszdA8)>&A?1dZ1{e$A+#_0DV-a+opHa,luZf=T:O{lC2FiN0bk#&|-Qt' );
define( 'SECURE_AUTH_KEY',  'j(p,OqA^q]99-5r:f=QsK8K6d]d=+=H-TvkQu(0;%_z|eC.ZV,1_3&hf?=gRh=O;' );
define( 'LOGGED_IN_KEY',    '}bRccup#`shHGGW r,1ekunN#a?aO#n]5r.AY+hr0IoXQMv*f*ckBiqEI;s!FZz-' );
define( 'NONCE_KEY',        '*a2#-,B][prvZEQvTO2*eLZSeVREQYh3k>pwTLcZdf%1_^0aAF2Kp7_bjC?gyqQ!' );
define( 'AUTH_SALT',        'E|>[N7tN96ME5pZ8]3D7R-3Xz8bP+[V75t=PXLI#SC!Vmls#{Y+Tx3Z44u{:8&D6' );
define( 'SECURE_AUTH_SALT', 't[jZq}/uCE&bPH,9tZR}0IXg Vvnd8p1?82T#pEqrNZT#Q%nRrB:hV5+RkALK*d3' );
define( 'LOGGED_IN_SALT',   'Eor Y >YW1vYW[@#QrYs^h[;byjI8n|pa8HZ/BLEc3|>rFG.YC|A3G4AWR]p?~<7' );
define( 'NONCE_SALT',       '2xZA2m+iK=a1l$Tgh&2U%u<TtW~p#`+3Bjm6JSGf!qRm H*)8N526JrJ_ueRM7/F' );

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
