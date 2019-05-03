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
define( 'DB_NAME', 'wordpressTable' );

/** MySQL database username */
define( 'DB_USER', 'newuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password123.' );

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
define( 'AUTH_KEY',         'W,*&zIUPv<tr2+P!m .I0E?[5Iv>vp,S@rY_wq]CA{s+k:<K7--e385REJz>/T1R' );
define( 'SECURE_AUTH_KEY',  'Z90CCbhWA%>rd|S`p!,3Aq_nj,2t)}PSoo8@])e@}Oh@rS4>./{hMT{$}$PJEl4;' );
define( 'LOGGED_IN_KEY',    '1B-FsrzeafmaOp/dDsdWPN9t=K2jyl?j2Ph_(2AkrRBe/d4&IJlF-z&O =y?_`$b' );
define( 'NONCE_KEY',        'B5L!KnO7O*`n}$gbM#o:k8u$4Kzn:2g(_n>cNUY.B6JQ/+W2J.>sVC1?E;+l;KH2' );
define( 'AUTH_SALT',        '$`M])at|iv9#vYVonkU/@`c6Q9(6:RJ_d*{U KLjtJDL54%PXH_r64LFU?oq({90' );
define( 'SECURE_AUTH_SALT', 'qI{vd5V9SbVadYM<c,#Q:3pk0g>YoG42hn42s7%S{6CoIqLyG)x7Iz(bppoNE9jI' );
define( 'LOGGED_IN_SALT',   '4D{0i234ZR82SVPC#(wYIQ/|I_n&.ThDY0BoRl~fd 8bLlnQ6@`3A@G7(s8yljAQ' );
define( 'NONCE_SALT',       '%OU2P$h44$4sK5&SnBY8M.Fl8Vqt;y`A|Dcg&X4WxSc511*fv;Wm,=;D;vxR%F[_' );

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
