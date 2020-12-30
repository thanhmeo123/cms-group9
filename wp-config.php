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
define( 'DB_NAME', 'nhomH' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'M@]MV,j$dVk]cT/L2?Tp8+2[CJyx8avGDQOjW#/aF>(sAR!@==O|/^s]NitVYn>:' );
define( 'SECURE_AUTH_KEY',  'n7YJGZMYAZzB&|40!st+dX:uiEHTh*p;%fjcu!8NoX!66Gc>nt>IJ  +`b@iB4G[' );
define( 'LOGGED_IN_KEY',    'pPSnR~aMKn~YEWM-OQfz-i__tuz<N%;(#2<<+}ORA./M-A^HBchBl^Qj[>F!(&26' );
define( 'NONCE_KEY',        '&ZSL^0sR5C.2*hC2kIfU~tefJak|jDi{wkqZK>u@W{DF^mlqt9f]hhiAT$m,X]`L' );
define( 'AUTH_SALT',        '0z8eWoX r=EH`1-sK:C2wE(oS0m~]1jY>A,xfehHE)D$fe8b`RTI}/5mR8qtDon/' );
define( 'SECURE_AUTH_SALT', 'ed[][EP{6nUrC:Cz,{TGP1/UaMIBjM8xxbU58+cgQ{UX``4p<z8c^@tfwhQEU-D-' );
define( 'LOGGED_IN_SALT',   'qWMe)YP>GCC)wvA0uZ*Url$FQb$NW!m2k?n7lgd@WO29NNFj8)Fq_bqOj_1s@#},' );
define( 'NONCE_SALT',       ':V @~/t)-Ygd$<hrKtiH~o5CpGIhST=JWXAa9[eL<Z<oic`|wbWED)T[5Ij &LPw' );

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
