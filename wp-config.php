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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yahyaoffice' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'EG#Yi/@f@+ktq^lP+{O %w_}HD?T5S8wiK7O{-Vn^N>IVKL^aOk<Ig?bp)T7$M1X' );
define( 'SECURE_AUTH_KEY',  '|DH3SRu-_:$JfH#i]qv [IIf,q(sIhwOMhvUyVIq2I`|pQsqwgg4uP)N}GDRqEC/' );
define( 'LOGGED_IN_KEY',    '(Pex,$Lz!)-aH}#Hu6zWYa/o FsB=)r#$B*mn[4<9J5A&Lrv]sMBHSaFChd`NYNV' );
define( 'NONCE_KEY',        't*H5GLfQ95VNU{G6F?,$mPiJ^*;Ns4#MbV70%L%)oILU<*Gs</|P}dYidvX;-RQ3' );
define( 'AUTH_SALT',        'KQmv1+p6}F65GR9n5i8%C+sn~V)Ne<t0FXwCVgd{g]{1?&RI]ajSPUt{U~($Fa0n' );
define( 'SECURE_AUTH_SALT', 'T_3d v8tC+qIP+LwJ/&/.)MqC4Rr#VrI`V#j%k[4#]`:end|W}a0.}oiwm?o**K{' );
define( 'LOGGED_IN_SALT',   'mU6]1_XT5:lTP.OW$L&/!-2_^5GgNVXs~T>F/k1I>Tx15<5-WyUThu(CS){XO5=,' );
define( 'NONCE_SALT',       'L67mOD9`rHNUgQCrlmzM3uhuK5DFTo,/a9FH.DJ.vAYH#qG5igW#y2(3j*{VlkV<' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
