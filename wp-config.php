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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'J7?mr& wM;&+&8uDWWK.EE?^Pi$G:pU%#/9Gl6(NhAr76~R)d,tHuy,T`-H0vsf4' );
define( 'SECURE_AUTH_KEY',  '(&rf@CXjb+z/H36Jh[ox[QPw&!S}SGs]L#a[V2305PR=I g+@0D=P (*8VN6Bu<S' );
define( 'LOGGED_IN_KEY',    'Z^j=hONQ,3&eME51|y 9tt(/3[jH`,&KpE)&45{o7v@0m-8nikiG$JIQJDO)%g3G' );
define( 'NONCE_KEY',        'S}.c[uSQ[t[!E{=7D+;NafrFoseTVaN.cnq?a/D$S=gV/6T,3d`R8YMri@w7*PLx' );
define( 'AUTH_SALT',        'z_Q]CqU JaW2&;5mEG>2.tlIb5Q5+/oe]QLUP}Lq6&TZ!Y?#KMKtR~[`l}>]%cbe' );
define( 'SECURE_AUTH_SALT', 'hR,~qNSNTmwr9{~>)YFZZ+S#.KhE0VH;2OE!p>`V0E70` }uq%~dpy}j>hI5l4}]' );
define( 'LOGGED_IN_SALT',   'OuqJ|<w)m,Mbur>fGj6[qb$7uhyq2d=*hhrl9-&7%SEqoZ,EjA]~x;nGEo8uq7(D' );
define( 'NONCE_SALT',       'tegD{y`)$yN<Ax=8FVAJLzsu<qz2rF9duX.509gaCys0QOWgb7kiR{B:aW_/;k>&' );

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
