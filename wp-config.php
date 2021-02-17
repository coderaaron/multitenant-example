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
define( 'DB_NAME', 'database' );

/** MySQL database username */
if ( ! defined( 'DB_USER' ) ) {
define( 'DB_USER', 'wp' );
}

/** MySQL database password */
if ( ! defined( 'DB_PASSWORD' ) ) {
define( 'DB_PASSWORD', 'wp' );
}

/** MySQL hostname */
if ( ! defined( 'DB_HOST' ) ) {
define( 'DB_HOST', 'localhost' );
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '<0uJ>Qq7%4m[M!0Mz4$qqzII/YzKn&r81g%N5vl(?#a#T%#)zLBjRH.8@7ABtzrS' );
define( 'SECURE_AUTH_KEY',   'X2|xrmarU1rX}U;qcHV`)AX85Xru`UT5HKepYHJfGI,*6LWZ%D1Q-Ca)m9;_CuK]' );
define( 'LOGGED_IN_KEY',     'grc>5zxhn-{e{5_]_>l%a(k($P60n%n(wK3d1$uA.=iz>Ap$uzu+ww=B%jAPf53T' );
define( 'NONCE_KEY',         's =j~MG5y:h<hD[;:!h_:Tvv(u^B+ZsZT9==l-3PqYW+s~1^4hsM.}(NxsZw@xSj' );
define( 'AUTH_SALT',         'nggUMg#H1J!,}WpoFQ*]q#nT6_fu(Z3*g0HWO{?-~;1-V3zgOTDSwNz*+,G{$FWs' );
define( 'SECURE_AUTH_SALT',  'A)f]4`7)I3nPox(ox@?SBGFQKrGLce-(7`aAc#b&h>]$X9w_/UYc3`hPZ.*C<Po_' );
define( 'LOGGED_IN_SALT',    '@KOtyiiUH+&k!a(nxABt0P~+N9g+`YFiTD;&0ORp?-M9xqv1tR*w,?AUb7/rHd3D' );
define( 'NONCE_SALT',        'I1$H|8o8Y896/_zl1o9+0Fq40fUl}%U2E/>t*50?{wF !!z,Gq[y?{03/@~z@8|#' );
define( 'WP_CACHE_KEY_SALT', 'Tbr&z}%bOCH1fY#(H@A@UG4z]u3!xY9wOB=ox){*YS-Q]B$_gInlxhg,Q+v[|#^r' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_HOME', 'https://site.test' );
define( 'WP_SITEURL', 'https://site.test/wp' );
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'https://site.test/wp-content' );
define( 'FORCE_SSL_ADMIN', true );

define( 'SCRIPT_DEBUG', true );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
if ( ! ( defined( 'WP_CLI' ) && WP_CLI ) ) { require_once ABSPATH . 'wp-settings.php'; }
