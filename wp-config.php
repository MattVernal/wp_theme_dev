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
define('DB_NAME', 'wordpress_theme_development');

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
define('AUTH_KEY',         'LIXA7AK+s7n=rpthP^XVvU0NCYO,uew9?k[dxCCAlP1s[kBp;Ni#>CqJ5Ux S:3Z');
define('SECURE_AUTH_KEY',  'vFjR!2/!@4R1O`XJ T^yeQAkrHs|ZSt)^Zqs9DNb!1l^~$6-Kn^o^iM2{Y4EUgS1');
define('LOGGED_IN_KEY',    '>6_Nk$Y/Xj}>z_?::DvsjF?WQfj+C$1*o1H_7&Z!+z[-LWK=yZadlfHt3zm%Nqn9');
define('NONCE_KEY',        '1b<VN],2 -v=1CVM&^ed/Wun&f[9Kf9F&7=UbvWx3UE(4mx<vO%EP:ikCOHQ?c0h');
define('AUTH_SALT',        'gW5A#?!SSFDAIim9ffDP8bu }d JF!]UgQyo9/?f4fd.3+ZW@NOvj{vll`+}7ro(');
define('SECURE_AUTH_SALT', 'tB7|+dvtnRl?skaY!)f~d=r:i6a,Bs;6XrewvPObSPm|fo{OP-ly+}h<!}I_1mdH');
define('LOGGED_IN_SALT',   's0,L,W<P:`=x5dm1`[YxRC71/~N]Hl*%=JN%AK/lst[NHIQT5-{Le`Z[+p6C6jn`');
define('NONCE_SALT',       's]Y!CvR0+Ja9sv+N1EOCW/KjX9X ]QhwZ!(X-d(nw[H_Ik!IvM,*an.QXg=I|[}r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
