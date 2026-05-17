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
define( 'DB_NAME', 'db_wordpress' );

/** Database username */
define( 'DB_USER', 'user@wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password@123' );

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
define( 'AUTH_KEY',         ' CmTl],Vq+|9t!+xk4{&@IyU1g_<fikL4C3fdTK9l+m2n$LX`/Z~nU#4whE|)m)C' );
define( 'SECURE_AUTH_KEY',  '!C1s:&[TsEb#PaD0~q^T#16~)/:XUq*tIZ/6sRUTYF8NGCa$NU7c K`aU=1<SdQD' );
define( 'LOGGED_IN_KEY',    '-]q!C:~MSvFMag+]`~A|9`jvU-,:c%o6t8A(s9O^1#]:.TzPtOo*}b^lOL@3[DOJ' );
define( 'NONCE_KEY',        'rb,[Lu]o1H2$-C,/~scH,kz|k$=3VD:=mWP3j{GoWS@U`d-7d_Ha}E%vb7-}5G<S' );
define( 'AUTH_SALT',        '{6D#hQ-,^h@z) )$lM;$)k%94y}|1TBYUW7)6$;[(:y-hHn*-}h[OJ B-gv.!L{E' );
define( 'SECURE_AUTH_SALT', ')Ipd}0eLj5T1O0<I-BG&lKD@qaY!?}t$,-[k+j+vBb:CZOTpDJ|dW-Q?@/:xj3Jd' );
define( 'LOGGED_IN_SALT',   '<:9dk`?I)H)y-4M.Q/r*)-wo83;I ^LRwnFW|Hm@?75nMBgY|57I&whn9PpVA8Q>' );
define( 'NONCE_SALT',       'J_2RD(Xd9j1EcBMqE*.o@4aHws84CHlgbJS)^M`HvLh KbsB8Ez,J9.Y1y.tr2Uo' );

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
