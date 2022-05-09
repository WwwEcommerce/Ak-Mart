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
define( 'DB_NAME', 'ak-mart_db' );

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
define( 'AUTH_KEY',         'AD{L(2k+J!9c%YbPS7>,%_3:-N{*o`-F9BzTmW7NRT_^,2sH6aiv(zxhZlvt{D(y' );
define( 'SECURE_AUTH_KEY',  'XCCmQv-X04,@P@p<hc}+|Vo@^<HxS^2L)i[g61HnSbh$MYh[QG<1o@iE*g4@Z#I1' );
define( 'LOGGED_IN_KEY',    'qUmta)mnz_y|@%E.zc9PB0M@=L$JDO#(}3eOv08#^p>my84l;uRmWP`WxQ^fqoav' );
define( 'NONCE_KEY',        '!S%f&/rWDb4Hm>dv<ck^!8 )B3xYj7b<E@H[N2A9W?&i))V>0fA<V]29w?p&d#V ' );
define( 'AUTH_SALT',        'BxpvX*B][5d63y)EpvY_[ps<%KPI_R[{hm5;}BVW9LaU[QQed<UfEJh5i,YG3HnQ' );
define( 'SECURE_AUTH_SALT', 'O2(!~@nq/mT#f6 Fw9y%Gx>p`P@x5voEzY%-ardn3WNtgO3};rwc5Vpn4v4(VJ|l' );
define( 'LOGGED_IN_SALT',   'o6$1waUt?a];QB^D ^PZC!G~un@PtGEE!*Bsg_&6sD|Y);?pMYljBADeCQ2C%1{D' );
define( 'NONCE_SALT',       ']Rg=:3RF6/6[j#q<r^;*pau&pz#!k+9jqD3qC^UP}GQ?yp^mdBR=dId@?,^MEC}i' );

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
