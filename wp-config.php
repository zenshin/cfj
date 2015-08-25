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
define('DB_NAME', 'reseau_cfj');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'PtdU{bF)4o/U(Gm>=FM,wy`iwvY*fY[KWgW|/UDgJ]E+p0*|hp[:3@(LRrF=Fih8');
define('SECURE_AUTH_KEY',  'C96Xc0K3C=kF1yK9gre()eRAR|Pf1LOqzNM4l,bG2^rzD66f)6=1NQeTpL(XJ+Q+');
define('LOGGED_IN_KEY',    '<dnpi|@+]{)UHZStWH<Lh~uE0^j;b^q/-9k6~oZc6>-Tqn:>l5/%YJ#PVSnGgd0:');
define('NONCE_KEY',        't3x0%n{y9l)]vh]$>bvf_NLj8T&7yjK%uXh9L^mQ[RD!]ADmI.++6m<:b |RT}OU');
define('AUTH_SALT',        'uQvG+X)zKx{7s5}qmmu@1tx@`zXS]+o8Hw-UJ||<!TShz/MD{:d/5K0-lK:i$ #c');
define('SECURE_AUTH_SALT', '9+4NC5w]zHIwC[$IHfqkG6cYyk@zO #,ova35x9b-4 Z6/,$nqw{6W:O5H>Vkb0T');
define('LOGGED_IN_SALT',   'cYpRY-Q>q/w*uJz6gAZT[+35c t1#-_[tL&pV+IUq#n@<|&d8d$^+DR/Kvy`-Bt5');
define('NONCE_SALT',       'Mb|,+m!DX&ok=dQd>Z3L6.`Ak-Le1u]bP{5diU0c59kV`*PVj99ap b+,rq%+hw+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cfj_';

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
