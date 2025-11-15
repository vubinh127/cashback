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
define( 'DB_NAME', 'cashback' );

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
define( 'AUTH_KEY',         '>H6FNLeIGO`AQH+NJ4SNbL/<cL(]nQJd@PK>Qw>ZH;!(BXcn_GBM$ua%lVz]Z$Hj' );
define( 'SECURE_AUTH_KEY',  'ivoi/ZKebiRqw[<Bl$yN~lgZ|eT80K#ObA<}ctK)Xy2Z:Ru9MKb6.-^@38.HsmRn' );
define( 'LOGGED_IN_KEY',    'f0h,}r^s:lThzfB[ayW/t5MU[K=+`AW{4K5]G:eyx;Yg,)3d4YF3`p^}6@V8Q}zW' );
define( 'NONCE_KEY',        'uGn-hCI_K<J}|9*/+KUs[[j0iX+usOCtYgWT2W7_-<CV8mSzIPF7>ARQ/158*(i,' );
define( 'AUTH_SALT',        ']=Ze{]s7g@EdEX0Ti`OfN<UkMbw@Z*SaU2;ogyP,$tF3GpO]~ Ls%sl*H1Mw7^-X' );
define( 'SECURE_AUTH_SALT', 'W;Y/s*z{Mnw$5uv<e]qFjjBR.LyqDcD=VeCioTNvEtH}{l_QtP#ICl.bBa@592Kg' );
define( 'LOGGED_IN_SALT',   '3tN 6GE-&:0].2t{F$l>>I!>D,o,sK/Q=xLk*w^!o.MIgFiPKb|q2ltCH`>=|RFJ' );
define( 'NONCE_SALT',       'K/2&]n#Ao`HA:mdt~_~0mqwOb,MyV8rHX6$VwB`32v=zgN(l9xpeM#|!U3d~Xvbr' );

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
