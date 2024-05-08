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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tuyendung' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'XWQJzp]ng!|V([&9M(F><{zAb!$I?YbGtDYA$.Dx(k4m[~o!HgA@PjP[{6KZhh<:' );
define( 'SECURE_AUTH_KEY',  '6OSN{UTWn,8$x<,</>Bs@deUon@8uV9;iez<M)Zt5!X8<A$SGzAMwFjN0E_$IJ$ ' );
define( 'LOGGED_IN_KEY',    '/QEn2ZC`j_7Nf_<CBo,Zjk&SI>Y:z}]r(PxkdPjW/zq(Z)*h&}K0Q!AMD@k`myH/' );
define( 'NONCE_KEY',        'TTV<?5[P8HA!%qY{1w)cjAc+O@YWGcZ/Rk?Ca3o[=Bh]Hm!yGN|@P}A1YqMxfUX%' );
define( 'AUTH_SALT',        '=3+Blz*/T$~FQP^,9mO}zm`TsU6vP8_tCY~dFrk$^Zz)$!nkbOH|&A}{p:#sTpc]' );
define( 'SECURE_AUTH_SALT', '2lH*&s8C^,!F`Ju}LS`d5u5Yg~u|b(yc$o}{T5YY/P-/D<1T|ai0.$c+Ev!<8r,*' );
define( 'LOGGED_IN_SALT',   'M|+UrXna4<kSMW*QHVM[w0^@@p=W4./+VB_sKo/R<pn$U,N4FqFRh 8oAL+Uf~~f' );
define( 'NONCE_SALT',       'J+N{AGN+^tT<$1eMh6Cz+~_[#d>%tdOpT@LcLU)rNO>P&-Rp%SHnj_j9@KoZ&73%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
