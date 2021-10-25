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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'N32<E;gn~VUI#(hbJk3y(9+rV*vd^@lpq?+  KkEH1]551:d!U{a}X=T NtQqigD' );
define( 'SECURE_AUTH_KEY',  '*7W~zS$uu:g5QKWV&lm9}v8XM}Oqi5BE=jnK9E_~,scoqUxw):@RJct&vi<9B~9_' );
define( 'LOGGED_IN_KEY',    '0PjSUD(sYiMg*l;W#a<l9li$aoSETPOL^w]Ze:NHO)I-n=w(/=ARv@a1mL]{8)Xq' );
define( 'NONCE_KEY',        'Cfh%3^(.:SX.,9OV{tJRR<wpjX2DuhZG`!?;m/p_fODoyjO ~vaY~Z5L0%-]J7pg' );
define( 'AUTH_SALT',        'dkalvv38dU6Gz,GkOpYDGAY:!![fI;Z.9%n~Sb5E<OcYhuj?fx}(-1Lggxh}V/d8' );
define( 'SECURE_AUTH_SALT', '_C_scac 6XB~[q-X}QOG{~I-fctQ/.p%+v<r~P$52GKc@x 1*ho(n4}jhq?7|!^9' );
define( 'LOGGED_IN_SALT',   'R@ci79j{:cKe~F)[X^0rP6nI%3.Y5|#1OQk4L;^:~c_6/eux_v{X(b8?Bvf8Mh&!' );
define( 'NONCE_SALT',       '}nEjDw!P@Wjm(tH&h.W?-F7>]}Kxc02Pcz0-[flcP(0J{!`[z`;IQQg!PtZO?.Hb' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
