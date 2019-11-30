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
define( 'DB_NAME', 'wp-blog-2019' );

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
define( 'AUTH_KEY',         '>4m]S(;CcwK49 9IXBm,w~F_apPUapMfWX8y]>3>W7v;@t;#F6C<*A)v&p/$ptF,' );
define( 'SECURE_AUTH_KEY',  't5UcQof@7X{)[&||{HK289Nr[{na7OlC9 V7.P*pu} oP eSBU@zL^DRa%|vriE=' );
define( 'LOGGED_IN_KEY',    'q3Ll,1#_/ym]qfb!I3Kn|luWN2Wxj[$!o5UjK`K5R.s9=Xv O@j!sez71.G^:9]:' );
define( 'NONCE_KEY',        '?_}i2LpnS{rgHZci|0$t=%cE(M+OWx1:J{VPu $}DqtRQ0KpJ**g2C@+&VK>#.(L' );
define( 'AUTH_SALT',        '<n>lp43ses:E`#o_0vLWXIQnk>b;C:1pxhMj%<3X1J;nSeh&|!r;$5c^H!T>,X5=' );
define( 'SECURE_AUTH_SALT', 'EG<Xe!rmU>9?]>Qxj-+eP8eJf=50l:uL/AnE2+F9(@tc(SQV!i7.[.&Em:8nW5c9' );
define( 'LOGGED_IN_SALT',   'fMl;K]VpYIfLqO9(ibp:QS9|1]jQ9y(v3tw#! :(_F}?U;CwoO(Wda-i[G0z!^kb' );
define( 'NONCE_SALT',       'MQ6bXg/LpaZwuL~.!l-z4*1m/D^:M%(l bo,[`7l0WY>:)EiF|p_}~V*0}q7i6fJ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
