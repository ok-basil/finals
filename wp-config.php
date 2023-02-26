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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'finals' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         't_w;;DLtUPq~KR^exq@mB0,N`L(UHB}b>]RG@(.|oK)=yg/W&>ut}p.db]%K{hek' );
define( 'SECURE_AUTH_KEY',  'SI<xWsUGJ <aS;9ukW3KRlr-2J~=,~#X)Gy0]~)_(S3m3yu,TOyFBGOaBA:O;#rM' );
define( 'LOGGED_IN_KEY',    'N#e/SxXp6SX5Y/iG;C&OPJ8+^_~BR6zYvx#oIU]V@91}*PS]7tQd/+tZ4[t#sL!t' );
define( 'NONCE_KEY',        'yqn2Do4oD ZluE5N; =m*7TrES4WRQ2m@Kxq!(A+=16?y7|1Nw~,k4Fn2F!IcJ.u' );
define( 'AUTH_SALT',        'vDp!f=7CWU`xSg:*7plULN>o+%H6<6?hQx&}pPU<<2bImVV*R)p7Dt_sHx gm0qi' );
define( 'SECURE_AUTH_SALT', 'L!`9IC=33K%g)B5@Vhcl6R*=iK+I0+g8DC%9Ed,!3W#^o0BON<JXa(jHl5TQ{h/.' );
define( 'LOGGED_IN_SALT',   '9vRac8+1}*tl6.NBf^|c m`!lf2E7GnO@e#m0Tl8?9K33)j^:$/:*{k%HG|wI|_&' );
define( 'NONCE_SALT',       'r8+lXNF@>m/O45TP/Zj8RsNgC*:&B,`-)KVma[4**0=lR*S;z}nIDUbNS1WC(U}d' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
