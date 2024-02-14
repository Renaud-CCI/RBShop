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
define( 'DB_NAME', 'rbshop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'b6n<bcR!x7.k&9gNeT-5JJf<T4,QbK,8<}z_d4Jh*Wr$ai`Mf,a3p6Col?!l!T[:' );
define( 'SECURE_AUTH_KEY',  '7nC7GPOKf(+w~=t!vZ@/#6Ia4E;*dKRjZm,y)AjH.ov;xzhWc?dy-D)d0|[P[_[(' );
define( 'LOGGED_IN_KEY',    '}qs:F#?2rOoE+IM)=hV-7ZV]+Jr`7NuU|a1t4[AKt xW(}LO|!_^~,K.[mSmxWm<' );
define( 'NONCE_KEY',        '@]FJ`O2I4]u-ZdItx1Tl+E~#R,DAON~A^@^SBpSY#{lW zA6.MLwKxPwrxnHz~F)' );
define( 'AUTH_SALT',        'hC,W(7&zSP{1zEm*Y~74!YLPWU)w~r:+WD^2m&r+[CQF0iS:RdU;8/%55|n3aj~A' );
define( 'SECURE_AUTH_SALT', 'jilDcanrOD#MxC<k^,tS8,3Iw@ztU(-3yfi-<7=86}XYg}m8C8`{Idz(%1^}}~*2' );
define( 'LOGGED_IN_SALT',   '^3)B2XT2WM3KsY7N,?*W}L!vpm]-?fA#+l)ICq$J+zx,&Q*wE@`>m}je-AQqtDWr' );
define( 'NONCE_SALT',       'Nvty{J8L;nlY (yV5bMZ.mmxd61:,})<]{t0Q|uWtFJuB=WJaGsqC-`0|.M4sf.D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rbshopwp_';

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
