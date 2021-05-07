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

// ================================
// ============ NOTE ==============
// ================================
// this is a sample local build.
// in production builds, we would
// NOT upload passwords that are 
// clearly visible on github!
// ================================
// ================================
// ================================
define( 'DB_NAME', 'test05072021' );

// ================================
// ============ NOTE ==============
// ================================
// this is a sample local build.
// in production builds, we would
// NOT upload passwords that are 
// clearly visible on github!
// ================================
// ================================
// ================================

/** MySQL database username */
define( 'DB_USER', 'root' );

// ================================
// ============ NOTE ==============
// ================================
// this is a sample local build.
// in production builds, we would
// NOT upload passwords that are 
// clearly visible on github!
// ================================
// ================================
// ================================

/** MySQL database password */
define( 'DB_PASSWORD', '' );

// ================================
// ============ NOTE ==============
// ================================
// this is a sample local build.
// in production builds, we would
// NOT upload passwords that are 
// clearly visible on github!
// ================================
// ================================
// ================================

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

// ================================
// ============ NOTE ==============
// ================================
// this is a sample local build.
// in production builds, we would
// NOT upload passwords that are 
// clearly visible on github!
// ================================
// ================================
// ================================

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
define( 'AUTH_KEY',         '7<odBSDqXxNb7v:2ppTSs/$Q-x%Ai@<i0}ST}lZo{@7n`2&6$NIRLSxHzfZ?XAQH' );
define( 'SECURE_AUTH_KEY',  '8fx0YH#jDuhs0swWjsm$PP}r))n41{hoaBXl1#}@DORe6 MWUy,A1outTE,k~@uf' );
define( 'LOGGED_IN_KEY',    '~3D7QtwPKP8m+_0b9Qzm9q)fK+,hTJoxtmSXX|7e4DW`k$-6i.hmb@X#s:Wz4sul' );
define( 'NONCE_KEY',        '8V.C@6udDLi7Lrrhp)gjv-S:F1~:Me+s#`3VGzdA(Ev@o*M)f]?DI/R:1BP,,(qK' );
define( 'AUTH_SALT',        '=V*Q&,eh,Tq]]Sc+pab9w:9^7hL?pg}yvzVnYjQe)DuW+NVmn-jp!YN)HG;F=:7b' );
define( 'SECURE_AUTH_SALT', 'L`Pd/hL_PI=?? )+i!*)na&cKFF#]nJw@gu6+oRTRm0;OpZ$:1sMqX.^]%Nn;=?D' );
define( 'LOGGED_IN_SALT',   'emNxY+kzIW4}Z80C~!O]BYsCF!!>MM?*tT,[n7BdEJS/9Y8n9>r;iBk<dfLtW F.' );
define( 'NONCE_SALT',       'y^Tc~s3:?ih&g>;fa5-EM. F,!CPg|>zgenJfVV_ygMaR^XnkR)@^w*LEZg F(UR' );

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
