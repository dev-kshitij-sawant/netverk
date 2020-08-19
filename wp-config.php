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
define( 'DB_NAME', 'netverk' );

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
define( 'AUTH_KEY',         '>>1%)&whdyL2M8BKgV-a%Edx`xOX(+h_Q&krHlg_%*NYOe$|;Kru]/aK>r QcQaH' );
define( 'SECURE_AUTH_KEY',  '62-{>4ENe=T%j^rR.ZqR[W(mxlT4(^tE{E%]Bfpw(6hV57Jtp{ww+)>FznEQt=OE' );
define( 'LOGGED_IN_KEY',    '`Bdz#YQso!.eQcRCG;VF5]a/NGAMP@()S$Eh!)?xcFUeqjGY[e1qO*81O|R=<jyL' );
define( 'NONCE_KEY',        'q^VX PSi|TiP$jy]xY:WGbV:;XlP4zS~z>kp3.X?(:s@ZR,!(OpLJj[s&yxx=OYw' );
define( 'AUTH_SALT',        '&c-:w:1MDV=InEeE,~o.d(%TW7G@wv4QMpUYtksjgmo`c=<o=zWAU1~k25EFz_J#' );
define( 'SECURE_AUTH_SALT', 'Jz/!pY_NW _`-J~~5D=jtD.~QfAP*a#3f(rpG(SwCPH!ao4sY592>DI1J2=Y54gl' );
define( 'LOGGED_IN_SALT',   '[Ym^-r4gmY41z;jfZCu{;xuw)!(DUm$khh[*xDd~WeY#Je?6N^82Thx=UOG|qXu7' );
define( 'NONCE_SALT',       '>?d]h7qnQ!/{9&tCFX?jz!U;|WX{)X>e|.Hm;wa~v%*Wc}V=Z{E73Az 8oZc^8aT' );

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
