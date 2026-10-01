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
define( 'DB_NAME', 'real_estate' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'u;4}yX:BZNHyfxl,j0n8$a<Z|eKc6]p;t7<FPkJQ<n7D?2_b4yLC,WX|2<8^?H^5' );
define( 'SECURE_AUTH_KEY',   '2Dj_J>F7Zs@rm#&*;[Ks?Bf=}[,`I*;52}H1(=P~/;kd?&EfGds%3XG2lsZb/9wf' );
define( 'LOGGED_IN_KEY',     'A@7p. c5#_hQ+PNabF&DPwnf=6IjNFmbC(.5hHp&-[CFUFm_tY%AZ3<d@x=ulIaG' );
define( 'NONCE_KEY',         '7_+(d!Gh!;~QfwoIUm[.c:Xt399Jpdxf7dF]>A1N%$m>uH7T.D~#HP5e^ ~!gQ(G' );
define( 'AUTH_SALT',         'jTneBLm3=@bI(e,93*&AC-%!D&)oDKx.-xY2#rSH ^x1!}sg4y4JsPLv ygFm1*d' );
define( 'SECURE_AUTH_SALT',  '%J4$Unz}RnYrWho!Ev.ohZy4 .vyf65|0a?x#a{}j:9n6EUGK(py_`vLH_y)g`b[' );
define( 'LOGGED_IN_SALT',    'X7_tH0!*BbrBB:<_xS]y0r*Th(?uKq=8 7`q8%`m`:^]+,+4/kNX!nPsa*@+GZ<%' );
define( 'NONCE_SALT',        '1<H|&8I3[-n6F>n=P5f*.HrYjoT,.Kj0Ty5/^o_d84~_srnrD`Yxc5njy!).]]WL' );
define( 'WP_CACHE_KEY_SALT', '-8D0WbSUh0Q1jKWLxG^.hNF~=hUZ[<w}d&l256 Tii3^w9{=g cu9+R_]lGI5b*g' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
