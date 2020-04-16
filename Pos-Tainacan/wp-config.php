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
define( 'DB_NAME', 'tainacan_pos' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',bxAEa`KSf^7?0n_k(5-Z9bmj#E>O}>_B7bQ)G@Z}NG?28K#hKbpG8j4Wy{CBOug' );
define( 'SECURE_AUTH_KEY',  'QH~Tr7T6262#<c?6S(_4p6lP4J>E_5&55W![0dN0pm0ob/:(5_FsjsHu6yi7j.C!' );
define( 'LOGGED_IN_KEY',    'U5bs<d<LJb>}_WxQE*Q%:U_wO,5|C[Y%ZT 820qb)4Nj$*J{$GUYT;(gcLbX4kiB' );
define( 'NONCE_KEY',        'N  |L?ntoH8N|>#]%+v^|PyhQP|,z_|5G*_W+Sa@$]&kC <-2[5cL9B(C#pJ,f*l' );
define( 'AUTH_SALT',        '?o0wGWh!;FCDsnM-Je8<tFPf(}F*yDY}_C_wZzrMJ)vPyQ.^2I;Wks;G]+ml(*6u' );
define( 'SECURE_AUTH_SALT', ']T*@rpobfryrH0=&{&=9saYd-^%z#-/)H=a^#H[m/&|_Q3Q I1#NtgZ3%,:yQWUc' );
define( 'LOGGED_IN_SALT',   '_23WI57#w6j!{`H(%(cO7$.12F|1#B@Z# h;>mA+a,SrTUU?rk8M/K30<,g*4OOP' );
define( 'NONCE_SALT',       '.=FxJ4K^94cBEuK B;tB3.*g&LeJdt1LOOd,ve^o^dIPK:oXU Pb4i{o&@i*?|%}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
