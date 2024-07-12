<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'sql3719440' );

/** Database username */
define( 'DB_USER', 'sql3719440' );

/** Database password */
define( 'DB_PASSWORD', 'PKgPr4JbDu' );

/** Database hostname */
define( 'DB_HOST', 'sql3.freesqldatabase.com' );

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
define( 'AUTH_KEY',         '%<V!Mi:yG3ovLFli_bDTvYegK%ARG{vu[=ed?s;+Ckxn:)^cAgO>SnYl2Ch){|=J' );
define( 'SECURE_AUTH_KEY',  '1&n8^asq9qjG _6M{+-*RpLOK=hV{B,#?7RZ8DmynrI,8npnp.F9yd=`]H%g8$o]' );
define( 'LOGGED_IN_KEY',    ',y>Rb?:+5__;yQ+)# Nw#,>3y8Qf%5C1>+<(/!:at$f-;QaPG&0l@f#r(q.Fo t,' );
define( 'NONCE_KEY',        '<>ss>BT)x:xDxc^vADi0f0(<g]yVQ4m9USJ41VhaNm*W5M/#Y)4GM~<pHu;TF#Y.' );
define( 'AUTH_SALT',        '(:2=fR}f|I{cit4Hm9OftNXH_|Y;}~3.( 6 k|oI(|>0WQQj</sXB7$^pN}nHx[X' );
define( 'SECURE_AUTH_SALT', '#d1IXp?L6p_{qkqO6:h5m<~Eve<do6tUJ^egW[9d!8#.t2+$mCFeb4g}OX!01P$3' );
define( 'LOGGED_IN_SALT',   'F#[Jb=x0$]d|%%q`8P~[Cv5?Lxe[4jHURn5y6AJRVMy}a7,nuuM|h@=jhr0;K/8+' );
define( 'NONCE_SALT',       'Cnn_2_^4C4]sZT&mlAI^(XHL|Y{rOgG m6]{-2{qF3/bJf X{Re|+tbDE@%QNxOw' );

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
