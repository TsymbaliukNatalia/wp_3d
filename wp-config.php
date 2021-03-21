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
define( 'DB_NAME', 'musikkbryggeriet3d_bd' );

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
define( 'AUTH_KEY',         ')rkrn7^-1`XNV8G6SN?hYrN_(7m.^*NDU4dKrx,bi36>tFs1G6!<<~1C.|#4]M*C' );
define( 'SECURE_AUTH_KEY',  '@SsxeTMR878vLD;AmQt!G% N_@Z6Q=of>)ZEN69T, [0W},pVYB=!(KAkQ/uwk&2' );
define( 'LOGGED_IN_KEY',    'W`Xj{b|=V],^X>YY~UmX(?0iF3t.Aq|F[IOSAXqHU)+gVM.XS2m+g? IE]0Rl=iT' );
define( 'NONCE_KEY',        'KW.SQ]h9*iLsteDv9|Ytt!P=7IL7N|T.jH@_o${YLkhI&4t|NYJE(:B^k1%P@kc@' );
define( 'AUTH_SALT',        'gak=6&wG,(S2e~oA069!o5Nd>QW~eN~g}O9UggLQjB9CM{jfyM<f>swF^LK.h6,v' );
define( 'SECURE_AUTH_SALT', 'f=B2]0NG9{6qcH7W7j{@Q&tq=eTVWE,^ZjgKsF%~g/f~}ug^y)5$.x,,P.1k {h,' );
define( 'LOGGED_IN_SALT',   'X~n+NMG[8#C2AR9JXl&H6+9ArK}cvB<m!Fmr;g 9VX@/|x= )O`K@Lrc/Q_BqZe.' );
define( 'NONCE_SALT',       '0BajDJG}9nr8Hss1,3reYKP&M+6v(* ( Epoj~yZJY@kb%0~hDp]XnZ?$.$la91e' );

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
