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
define( 'AUTH_KEY',          '#&I3N4igJw/+29-}R5`|C-$:<YMUTtW=|[],/}2Ovm0@ANL>g.=,<|Xxhl/dU?5w' );
define( 'SECURE_AUTH_KEY',   '+SRr$-IB.,Zp-roMk;-1!+U.zD`Y~7Qr(!`QGxG%+CDW|UdNh{)JsOb1_ay}b2N+' );
define( 'LOGGED_IN_KEY',     '^AG<T*&+xx^jWGC@L18hp&28)G/ahLg`s>mDhm5t48:Ruu?md4V!jW>=JNcv~UyN' );
define( 'NONCE_KEY',         'VT:_PFKA)p6[(6}SD53ln}ku4M4t/Q9[AV?Y3TZfTy^VP0_S~D)nv/qsmb3tto|%' );
define( 'AUTH_SALT',         '2a8<m3p)tgcX]6?Dk.Qz y+_Y7j.N @F^M))+?E}4r_Tp$?O$&a=]NxFEw1b%M@D' );
define( 'SECURE_AUTH_SALT',  'CmHtM_lZrQ0.6P&oZSyX8!+TSp&T?b I;=}~wT4~@;Lx[g:@??lX0}v.8 Uq+~;g' );
define( 'LOGGED_IN_SALT',    's-1n.Ei$7;:gx}1`w-$CrD05rq&0t<=7An4Iu@EV,QQMj:Dbn7Lufj()&}(JMJ4S' );
define( 'NONCE_SALT',        ']^_!K=x%{}>s{6<HMAavWv,,ueCe(J/11$ &,dbc0o+:T6yc =SCwbor,SCZtCxY' );
define( 'WP_CACHE_KEY_SALT', 'yu?:+Tb:I3Fq2S@vC$CW9UM$p_Sn)N7C[AzZ*/;kwjeYBiOF.2}G3<+n@QrA#9l:' );


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
