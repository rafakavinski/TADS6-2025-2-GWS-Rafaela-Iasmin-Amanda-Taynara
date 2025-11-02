<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'purepink_db' );

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
define( 'AUTH_KEY',         'erWCR~g`0qW xd.*6.LtMgExG8Jlz8HY)(oATy2S0NwNVGsook:{[cO30Z~bU 88' );
define( 'SECURE_AUTH_KEY',  ' Tu=bNj5UF~k8K6-C@9UIi;qv}&*-N(aGm]]wz;ZY!X]M]ve0+GK`:!992RP$$bM' );
define( 'LOGGED_IN_KEY',    'nr,?MJGL{}rjPFs0ecqBNXTf].AZ?.zZe6fe6bFd}LKMyF<z:.e2f wHRiw7F _9' );
define( 'NONCE_KEY',        '6awHMGt^ceGYq-$X%qs!+qkE?$qq%I1w,Tt&$z+T2x3iX#EbGv@XcEpP8?Gj=/3Z' );
define( 'AUTH_SALT',        'KPPPeonqt<NV[x_50*3`O&~pcVbp2sz>[Cp!pw(C*0oVS):]H;W[4kdIJAOnHx{c' );
define( 'SECURE_AUTH_SALT', '357IW%3B2-C`_7>nx&!9cuwAXfB6`}Amm,7]]YoD&L:&%:i?TINbPdNO,<%VZ073' );
define( 'LOGGED_IN_SALT',   ' 1zpYWsEg3yU 5VX-z&8lZw<7h|SvVWOc8N(Du]iE +q&|x-^92gY[<oq/d-Yp?2' );
define( 'NONCE_SALT',       '3.8!_)7aOM$|{$R!XFSvXuL%.t?SWr%Zg;};4$g$VjB*VlYo>L+(yrwQ}cuIoYRd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
