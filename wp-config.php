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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         '2hKt>,2sTVM0*-Jfk$W<70JTPKqU6[g>ZR;-8NFHNMJNue>Tu?.e.*p{mg^]Zc/B' );
define( 'SECURE_AUTH_KEY',  'Mx`Hb7g&`fj)ez3dm f2#2Y?m=G^d++_*Ej[,g6{_ymIbqoEME6brwd<Wbc1iH!,' );
define( 'LOGGED_IN_KEY',    'l8x-d7}A 52C0dIj~B2{?rZ(_7FC+l2}me0VDgh4yoCDwUDLxV6GK]f9q0_J4xUu' );
define( 'NONCE_KEY',        '/:t>dCt5f@}mPZ^tNIfp$ORvBd @B)$0#)Cl|w}w=DP%<l-o1F0PR](yV18Jt01f' );
define( 'AUTH_SALT',        '4PkX-F<-h-r^87LNmkpY!FE6<v :F/Hk&o tF:U#H2,2j4s)Kbm^u@OGQ)dd}l9.' );
define( 'SECURE_AUTH_SALT', 'eMhqF- BJ&HDe@oLgSqb54nkOCGW?ixC|bBN1vl>HL*sZ6p%RF`bhM0[.4~n{7b%' );
define( 'LOGGED_IN_SALT',   'H.8ip&phE|#%7,MRKf@~:lPJxyrN= aUdtw5iEpq6wqnfmUEy_Quo4|Ik5X4GcsZ' );
define( 'NONCE_SALT',       'Hb(u`d!EHu1G.)*<RAY [D56!;8]I`^5xrMg&G752;e&aXJ@qE!1H,[9*C$,}xAk' );

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
