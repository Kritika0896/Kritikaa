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
define( 'DB_NAME', 'Kritika' );

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
define( 'AUTH_KEY',         'pF$J8n%Ld#sQft]qD}+ra4=p.,|d]JY^!6i[/*o27@8ZFM}E=f0oORcwG]uUQMT<' );
define( 'SECURE_AUTH_KEY',  '(!,JDdj]VzT VD?7GhFr_;qQ)_J7;kG/b9Ntq!xCOJb x|3$0h6h r9M|a@A/i7j' );
define( 'LOGGED_IN_KEY',    'm^KRAI@IVlw-18#e`yhX0z`wIRb? e|&2X6PE=~+XN2q|Gcf4+$THMt[h?|YWN!{' );
define( 'NONCE_KEY',        'ZiqCx`DB`D0Xkw#h:Sb^g{j+Z|c=>Guw-h-)}Z]uI[w9@dx{V2V$ZG({OO|EZgk?' );
define( 'AUTH_SALT',        'k5)iD+wA(F*CT,QdIx:Q#j0Uv>>)zoSvKN:0[R+S5sW?i#BUd!p6H%-In |O;&nl' );
define( 'SECURE_AUTH_SALT', 'wwXtmg&-|Y(DjsA%2)ig/!{No|w72$ID +:{/_|r?BUWmk?p5$94@uQdB%8NBJ{Q' );
define( 'LOGGED_IN_SALT',   '11:X2kL$O/ FYzd,4THSOJ34{T/)Bd_Y%wwDH@4~!MM~5C6PUv&w<yFntxi}Ll3:' );
define( 'NONCE_SALT',       '5/g4kBX-.JMq^GFD5qtH2DsCq9A3%#-a(5@kh+YeW{bAPVkp?W&/pzkD7WxT3X%]' );

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
