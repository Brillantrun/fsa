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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u833278747_9xXrJ' );

/** Database username */
define( 'DB_USER', 'u833278747_xVvPP' );

/** Database password */
define( 'DB_PASSWORD', 'NVzQ0OaxGX' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Z2Y?Kc;XJ0*pEMG_dnV3?R0DTXEpiEhU&-{&a3-R[0FsX+]x3 b2Q}@F[]sp1x]M' );
define( 'SECURE_AUTH_KEY',   'D9HA^r@it[BDQ$Hod0RxoT^.Pj)ImTEH<(]Y7evT<3M)C]U@-rn<Z,~K)zXUdNqo' );
define( 'LOGGED_IN_KEY',     'k}D[!*&Nj_n,:#,IhvmV*)qp8O|s!e^9pZ:!`tA6~;fyP1A-@Df>KQ^]c]L;W8QJ' );
define( 'NONCE_KEY',         'NW CSv71Q>I$nK{d&4P}iVs$tVGB=5I*R=?Vp=N<G Gb!=EV$EK2ebQu{=goe>Wp' );
define( 'AUTH_SALT',         '_e_Ln8<[O5q/4:&Ar1r,;Q4aXRGzNI$>ieXnx~+kl#2Qqi!2!y%~^|~zOIcFas^,' );
define( 'SECURE_AUTH_SALT',  'nw2U;14t<#vvJ.}})LLf@.-J8<)0BFOEH2B%$Z-vNz@cLJ8Ns&11/A3ZBX%2:T<n' );
define( 'LOGGED_IN_SALT',    'w?XcEDLiyR/D,32D:UIy^*$e$.yjxshJ2I@Fo#9?m*=zfJcqt&M&y`*=S9`XiI{q' );
define( 'NONCE_SALT',        'i9r]!Q`LF=#vw~U56FB2Yg%8ZZ<E@=RnL*)Ye/)hm9?Mn{)K#-|/G|4tJ~vh*LSK' );
define( 'WP_CACHE_KEY_SALT', '?T^zUhzjW(>Amfp Mf`%@LMnZ(VIeSyblZei=c_:}kV,ToVYf:;gN52K!bi0>LpX' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
