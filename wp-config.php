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
define( 'DB_NAME', 'project' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '0pI7.5*-8Gg<e=ywv%n0sGTvq~.xE7`O(0)h{gA7IRKO[9Zb~ALm276>>,5]vQ+U' );
define( 'SECURE_AUTH_KEY',  '=w?41zEAQ:km/pK(Gz]Jl]M}<cf_U:fIQHakC:,|rQ8aNTq,<),3#3(~_>5}8SyB' );
define( 'LOGGED_IN_KEY',    '}~yNeJLG3Sv8~8]2eJ&@&..64K(+4KpTA@j),1cKi<cfM`~[pVDoZ-,$(?N8g~>.' );
define( 'NONCE_KEY',        '%KUa]kEMZ`{#EWs]UIQJngKL8/R}e hCfpYqMP]CtsDwLdJuryn5g p^mXQ!6Q$z' );
define( 'AUTH_SALT',        'r9,mYwp>oAX|ICFYxMkTI$pdQO%)hk2x<uj,x+!d0FW%7!N4F?@`O8IJ19_m$-sN' );
define( 'SECURE_AUTH_SALT', '0rD(bP&JoIwxRo#FHazfW39Ai5&YaG->$KiKY$l9(_?{kk9Y;0L(;!nRq.rSe]+R' );
define( 'LOGGED_IN_SALT',   'a_Zi4,B *{<Z[Iua&|~Ems(=!RKIXH5{7SH&}bOCie@9kkw#@m&%%yIeLctiE`b8' );
define( 'NONCE_SALT',       'p}PWmJpQbVYDZk!`O#NEq.KCyx_5]m[L7Gec;eRf.B-oNgg=X>|<|7{[,N(/5U;I' );

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
