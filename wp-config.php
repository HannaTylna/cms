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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}?.f$fGaJpJE:!lOr&}]AV}5hKLPv`DQXdH_A7`^6bpL~1|1Lv2&)`:,Q^kM8=b!' );
define( 'SECURE_AUTH_KEY',  'D?,-i&==h25f?q!{ P<[(7J:zs<gN9/;?L<B;:sv;Z?+PkZAC6#[!$CHi:(^s=q^' );
define( 'LOGGED_IN_KEY',    'M4!4:%Tb,#?D^}owe+U,=3qB 0D$8z=N-2BPbPV(_?JdvZ1SGi4VHC1x_XO|+`jT' );
define( 'NONCE_KEY',        '-S={{ZeGBYQY4Q:F:Z5Gz9$?Ed[Hho=!|K#AQd6j|7_?dFzb)Wj`QxT3`;(74p)6' );
define( 'AUTH_SALT',        '&fi< T}Y6#FQeVOQ<V(f>6h#YuLN,3dEL9pJ6G=mI)a`)W2b$}Kr;jI}H N-W x8' );
define( 'SECURE_AUTH_SALT', 'u.JE>0~+@:8yQM3QeLS%In(7/#5;EmZzZI&K^sWytSxk^KcaKNuq?S5oy4u+GZXr' );
define( 'LOGGED_IN_SALT',   'pe=YbKVB>.mAC`lN;W1 Qrr^1%%Mb(*]5jtLp2<knT[C$f?sIbQm68?vpvHAj{[g' );
define( 'NONCE_SALT',       '~G%;w%}tG>g_cK_wT5@EjJ=6g.W%j6Lvu~ L+B6VX8K=yf*I4=+l*VdLtYaKSPdu' );

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
