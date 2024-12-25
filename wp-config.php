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
define( 'DB_NAME', 'db_sukatani_village' );

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
define( 'AUTH_KEY',         '.c>GTDWL/ahc|`~hdVjCx%t{^PECz2T.S`_CCE(kk&/:nJM }? `W:jTfZbe`R:G' );
define( 'SECURE_AUTH_KEY',  'r={.&U]-lRn.gG.-T|1D8*]^};&[<Fk-KkH-2LJO|0VW9k<nR*)mRHAQm7&4%KS8' );
define( 'LOGGED_IN_KEY',    'apepm5iS`aTg({p#}:MabkRD@)Z$@awj67F/},{vqe2GPh4`00:/H[%dL4Y]YBh|' );
define( 'NONCE_KEY',        '*e<N8n<p.[;x?YzK0uK=A}XQEwA}{eD@2%Qb*g`{f&dP)|9cUMiFMS0%g_ Kf}{/' );
define( 'AUTH_SALT',        'O$sMTJ+?6n%%36|Az<^[e@qsr%W-!q=9b8Zn4)481YaQt7H,<cj (+m,xy{QMf6o' );
define( 'SECURE_AUTH_SALT', 'eo~.#gG[qK4%/mSlwx-`H2)Qp+ `]vxLGhS*a3wN([& ~j8zGDvKrwi$4E?$jCDY' );
define( 'LOGGED_IN_SALT',   'TS0L)jTC:)YrTY 6[k.Z_iO{Tk,<K>AT*W8 ^C=i-9vYx*_OsjkzX,;|2vEcG1ry' );
define( 'NONCE_SALT',       't`Tg)a!>vK{+VB7?N@<8#SS)7*^;|0J/zVC9{}O^)e]m&,;o{?.q]1><3vob |Bm' );

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
