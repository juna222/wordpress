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
define( 'DB_NAME', 'MyWordPress' );

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
define( 'AUTH_KEY',         't1N%WlM#;U8gySQ~[Eiv}0of.;5Q/<CcYi=nL9?*U<d`E[.IWlXY3.% }iGxy%5:' );
define( 'SECURE_AUTH_KEY',  'Xky,uG!.G!hS_U>:mdN1(T8L<Npk^dw@IS*/!zkL*e:nbJ)4mt,A03%s37H[Sc)F' );
define( 'LOGGED_IN_KEY',    '`f8VJt(Yi<Td8<-6INR^=b98zagdNG>,<N`ttI%>%`2k+bp_0!,TSS^N%!h1iNYh' );
define( 'NONCE_KEY',        'd)>jY_XW|XYokp lpXC,Yf_S.t$.`.E(l2lJd61RaR)rjZ eSrLJnx8>JHKy<jz%' );
define( 'AUTH_SALT',        '|wK!?xwKqA7/nZ;vPMGnI*Q!.y;U7kAj]4.:.>b [hJ3m0,[4J8tA}N:W>%6@Y.C' );
define( 'SECURE_AUTH_SALT', 'xlfS1,KRF]rpF0YJzW1LFx~PDy@UdSQW2xTZ2@HTnLdS&9c %S~.Yygq`.S]56@p' );
define( 'LOGGED_IN_SALT',   '{guTF{V)Vx^zy|rfrjA~f?t-``k#.ir3s+Uu6e&! vY,!xlB6w@M}$OU.(AG6I~9' );
define( 'NONCE_SALT',       'Ox0cq=#T2:XeM{vGIYDWE[*[C5 X.PY}iz2XS4>gdH]JPN7~}8,L[x>9CsPX$d!b' );

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
