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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '$;I.j~:Gu#h@u(tj%Qz (!k1rKba1AO+:?re0k(`g(I&:jlE{fE./rY9Tt|m~l4v' );
define( 'SECURE_AUTH_KEY',   '@krfY9k_9:!StJ+D]fn|Ux)Tggv0GP@6t#@51qGyS!Pa5]xfla%JQTyVOXZG,-s{' );
define( 'LOGGED_IN_KEY',     '4 c*5eNrLdE|L,kAXC*$%DgwpSB}*H[T@ErbnT|GXnWV>4I~8|.6`t.cySNKOZXE' );
define( 'NONCE_KEY',         'WO!x3<-3@OXTtwyEF247RRerkF.>BJC,%2fdf&FEh;{PV?SJ3 `64[!G%l$W|C3,' );
define( 'AUTH_SALT',         'Y6BlIf$QPw%Nem&MReK-6niwnkDv<4gmdKk1@fk.X~}+5WtCl_HgQ.12Vxv2 -c#' );
define( 'SECURE_AUTH_SALT',  'g)J5!At/|IOw.9*v7dp[s`B<j@(<S|$FPQzv{k!r*3^8}`;fIZCGvhz}& y{y{{}' );
define( 'LOGGED_IN_SALT',    '_[2?5|#CsIJ(]xp S&BF$F) 9aM0l27.9B@;1exgAZqKXij E<,]qXLypV0M*2V{' );
define( 'NONCE_SALT',        '(I{9sl[A82bE?jJ.J37~tn,t.tpQ@dYoaIO)HAdl-%r^I-o| ng:qs~daej]BCzc' );
define( 'WP_CACHE_KEY_SALT', 'xZ=JT]r[+K9A Sa-fAHKfqeh|)$h<t#)+!I<Z:6RP#B>{+{.iG<Bch]4U9{W5u$~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
