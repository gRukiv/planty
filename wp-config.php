<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')>zbOqG{^2f8oB3KKCLMsV=z?B :Fk=(z=b?TbR~Lm?EJ4.izw:Rf*Zn{]qzvT}Q' );
define( 'SECURE_AUTH_KEY',   '_`1(V0:o((K=Fns0Vy=as|@2A9AQq=cFtS3e1mxqT fm%,?z:5}:iz&{H}Ex#3BF' );
define( 'LOGGED_IN_KEY',     'EF}t>3Y4^SO6MUKrgMrYEP>|6Yl7.t8fs= aS3/C(Jacq1(6!L;70oP(dUtkC.U]' );
define( 'NONCE_KEY',         '%}:fK0Lg!4 .:rO9=%rUq`}W-su&.wG+QCLa)GgRayvnP VT:,9F!4zdyiUU5 wF' );
define( 'AUTH_SALT',         '5kD(QnUI1~KC*O}bpv.7+_oAaaG1meHkvLIEh(CvZ]ad &b7uFiK^][d?I_#Q<vV' );
define( 'SECURE_AUTH_SALT',  'Y~d`Zlp4^TvpC`_4!}e^x{k4D{/^bB7Kk@sNbG&;Rg`.)%)]nY-zf<0+9LBs|)v*' );
define( 'LOGGED_IN_SALT',    '!g*/VjwB/ <&8-Z5|LGO4SNRV}jcBZP(]Q*o^p5!84pKEue:QIG;BNsAvDmV1i&d' );
define( 'NONCE_SALT',        '0l-6PgGfno_:dU8fls*kbAhD12%1K)0~t:;gPR!atz:8$XEnm6PXXfIhI~AK(;Eu' );
define( 'WP_CACHE_KEY_SALT', 'dR 7i`s~,!)_Rd-u]r-ltQ^-iYxcOC8fzTv3//F6R6o@(fFlt-@6PRMeK+btV{h=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
