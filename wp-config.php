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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'n&*C^6:JG1%tNGW:?Je_|~tB*Z5-z94!Znwi`cN-#2yT c1~XQ!FPj<^=K<TMdt&' );
define( 'SECURE_AUTH_KEY',  '1*.y1ugiJtbxGT6dC4N<hb*`Lqs1~>l_OU$*Q?M}0sH.gzY{M5Bl[G?gjL9eWvg>' );
define( 'LOGGED_IN_KEY',    'WD2RtU_,7H6c4n2IEkw!Ta>@oHKT^y^zytpljoJ(!;_L#G5_>[EvltFfFLyIr6`P' );
define( 'NONCE_KEY',        '`LSYtW A0W@T.>+]Svi|g0qz&/flQxDlYvOf=,0@;%ldi9|N~]xysO0^gV)J1B1f' );
define( 'AUTH_SALT',        '@4_#?x2voCMI?Bz89F5YvPjBt$ioJ`>]Y<vU4f!^L(<tAXghr1^hF9,OM_P;nUfN' );
define( 'SECURE_AUTH_SALT', 'X5OqhcRR~6!TT@XFstj!3)^]{:{Md2xqhNQ,Tw%z#a3Yotk4z<L,wLkb!sinM*+X' );
define( 'LOGGED_IN_SALT',   'cMZW^&R>.5Q_CC(UiYPY7h-8<IKB90xK/nFq:0 pk<t>5>](}$oKj/w0%W,t0!ka' );
define( 'NONCE_SALT',       'UV*&<@:K]w$0J}}pkFPa5PF4~@PV,400}]1jZL157jtS37^FhhbW$(vxS&s~-fq*' );

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
@ini_set('upload_max_size' , '256M' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
