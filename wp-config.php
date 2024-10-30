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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '-*DZEPu^n.*hO2Fv^n%j /mPO~NcXb&$hXqdTs0jt9 Zl(]Y`t$i?R*?{/,wGXOt' );
define( 'SECURE_AUTH_KEY',  '$~)7,~dITxE!u&}0`hc5G*^<%FU;c>cd!%].O3<:%p<)YLAQX/PxTSkyoPMQC_~Q' );
define( 'LOGGED_IN_KEY',    'e/io?uisGzEg7!URv KiXC2(ajl^=*d>)y=WW?GmtOBX)[klc?*&osn33-Yd!dBr' );
define( 'NONCE_KEY',        'qeDA4}v7T/E!cInexZ>6:~&)i(|oFCTgnssGVVO%%j$8Q:L56uax-jAq,SLE$M@m' );
define( 'AUTH_SALT',        'L6@pE;ZhvF`gW^cR3Kq]8(%#$Pa#,kStBLtu^ji{l%}-D~h%;fW%4bQ1`4_ ywq%' );
define( 'SECURE_AUTH_SALT', '`y3}LH8Npb?bCGt3eSH:@2C-9/YPyn}/RpELd@AV~|?HV:oK=eE~r2];N4AzP=G6' );
define( 'LOGGED_IN_SALT',   ';[ME^3)C?y^7R{Y(YDdA_J:Q;^ydp{Y6_V%S;c#;6|HgI9`@1eAs9-_y?1;`<AWc' );
define( 'NONCE_SALT',       '75iFB7Qt,sM7)Dl%@Y$9Oyi &J{J1!l!vEQvjZiYAgVuR&9)fGc5xlE?F~xN<+zz' );

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
