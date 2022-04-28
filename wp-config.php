<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'webshop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/LxdwCGw:^h+1o(A<4V7g.&j{adf:UDP/8Z>Nh~,k<,9{A0hH7KPvv`*CJX5G ;#' );
define( 'SECURE_AUTH_KEY',  'S/8g(eSGy{vP.NHeqvk7|tj,_i*bM4-hdB4R#~moX,Qx~,i:in{](6u+*9J^_Y4p' );
define( 'LOGGED_IN_KEY',    'ZJ42EdZKwU2W^,Mxde(M`|:~k0^IQzpw(8Q|1]0W%eVLG]D#9<w4$h,bRk1_o;b0' );
define( 'NONCE_KEY',        '`|Y kB;6LE2Z2 i.OF(f?A{v>B>}FA0aOXLY|?iaL_@v~T#b}*6/[R[5vn,z8?{`' );
define( 'AUTH_SALT',        'hL!p<AYXz5#a+. tp0^Gr;.kAB$#c[:Xn=0z|%tF9Hc.yutq9<M9i18-1>RF`O *' );
define( 'SECURE_AUTH_SALT', 'O9cK>2n,(A,YL>.$i,>t&,s`z;1b$RC7ABxRpBjWdstcBM*PvdwJl~e$yI$W89T%' );
define( 'LOGGED_IN_SALT',   '^2&fbp1c]7J+W2t.1_Wb6Qy7G(oH}:`AIM1q`l8p](#QU#(KfW)y{Hf0p_J1,CQ@' );
define( 'NONCE_SALT',       '}+Y/&!}L*1::VSt|@{{QP)MBS,zz_6$TM $om (g9ygsrUE/iupTZ=Tx7z#6s(0 ' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
