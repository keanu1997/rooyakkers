<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_rooyakkers');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-bf[!$Qrs0K0~9YCD<#^{^eDf3p~nCu|jz~3qOP=ST|!7XrA NnJ;JpHm0*^> (D');
define('SECURE_AUTH_KEY',  'y[SU#lr5{Yu0x /;-B-6R;~*VYh(Ogwu9]Ixc4KsqAAkM `R`-H[Ob*L5l=h*#SJ');
define('LOGGED_IN_KEY',    'bap}8k?gdgsPm9+~c3>5ecg:LfFFCPY-1^Un!cc`lzG2nko#Jnk;xqht0B={_]:6');
define('NONCE_KEY',        'o1%(?ltzDT_To|k[J=.$?>RTI(kNWDJHmw~b0we]:ijz|l_Czh:fkG7k@Thj$UC?');
define('AUTH_SALT',        'F*wETbr}=oD95SDTGdfMrPlTwxZxF^lkQ#/G!E[<.rID73EnQsHM-;_2],WJw^:r');
define('SECURE_AUTH_SALT', 'tE_i}5V]taulWI>}8LmV-.aJC|Eh_zYhA8+ZhuQn:yw(K+&v5RYuHIJ]SZUq_< c');
define('LOGGED_IN_SALT',   '50DXf[~*nuShI/cT1L`{_2,1B)/YfQvM&E|0#e3 gN!0HM!3 6Tj%Lf1NQJk+[;z');
define('NONCE_SALT',       'v(0zhJ=7I:RGvT[:)d`=~^%[f?Tv4j.%XN}RMwd|9n*C+)k@o+vZpY}DCE(M{/aW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'RR_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
