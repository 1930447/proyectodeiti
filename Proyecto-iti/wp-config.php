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
define( 'DB_NAME', 'proyectoiti' );

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
define( 'AUTH_KEY',         '6A=px3332w/i[$L%`|!I)2@Yz|]/1>dEY%>_7x^J@xa7DQ)QUoQM`O#4WM+63%~J' );
define( 'SECURE_AUTH_KEY',  'dVAG~_D[E~eU!:qBht f0p{udug[-T,3f#WvSgH/1/bV)Rj]dJG;pMUEG92H=kf8' );
define( 'LOGGED_IN_KEY',    'YNQ}zqv*Wol^LjtGBFr<pM;glg.o<m3:f.~;Z[>M#UZt=vLoZ#6o4#ytR/(J%GN,' );
define( 'NONCE_KEY',        '/718k{H36FKq#2?hP`nl`s=C=)JkGUjp{B;&(%+S^1eLi*gy$a@SV2yf?c G*7Rr' );
define( 'AUTH_SALT',        '9d[CI1OZ^Fv3+F&CA@TX5MjsL%~jYont;gTTs{[I(_:eaXPh~dR/yZXWrO)hT#8k' );
define( 'SECURE_AUTH_SALT', 'v>SwXzpVdL,Y=/[S5zFY8C4b:BU35agt+@]A?N[@ZL~/OteEsH(xKh>?IC~E)=*U' );
define( 'LOGGED_IN_SALT',   '[3{C T^Ug!&s6Pb_v_4dHU6gY>b)m2jf>=?F7,WiyNfh@Jnfi}?[23o;Ea<:.6vq' );
define( 'NONCE_SALT',       '>9Amn[> =QW6}tK_K~C^8s1mg&qt%sLn(9}@WOX>]$f+[&ucf6B-KVTKVv>c_FIH' );

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
