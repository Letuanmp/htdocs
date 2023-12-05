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
define( 'DB_NAME', 'banbanhmy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'gIJ3f%.te`/ww>9IXa+n4-p-,=X!UM~zEyR~zIc>d`H8u|^Jh1E9>#X$r@,Vg=V!' );
define( 'SECURE_AUTH_KEY',  ']Meqd=eK]U6<T~bj< A+Ul][.X2kU3P?^_OXR,uG[I=5p6oy!RCe.ksxC/6~D`B[' );
define( 'LOGGED_IN_KEY',    '8OWf_&b&fvrH4p(4,jKkm,kkQ,]2,JmfP<bm Pa!`3PEu/7TfwC:_>^;=LA&DpJn' );
define( 'NONCE_KEY',        'h<VbS05H7{I21_UN?4kLc [f`HF>A0 Iw2j}z,J->GEu+x~GE)J~)+J;l,tIghY!' );
define( 'AUTH_SALT',        '~`VqRKt1N@P<zNJuCT`_,4C%@hkQT2Xh{-5g>,>doI.77cv/muTN3kMJmasc#PbI' );
define( 'SECURE_AUTH_SALT', 'B[:4#j{60rnEPCYO$HEfXHB![6BdjlB(x/z*^/X$5B34g5$G?/YW_41CI1Z>Ut[w' );
define( 'LOGGED_IN_SALT',   '}]++iw(yMs{0AmF;45*.aJ-*&:RvgBMZ+~?Q0(&V}76/MW;Z0p8I8Ee!6dUow&?B' );
define( 'NONCE_SALT',       '@Rq^H9VqCFGHlo0RMi0S*L8Cud?R;LSK(F3~}.#A>Gia~@tH24w0JNo&e,#KtH/>' );

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
