<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'protfolio');

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
define('AUTH_KEY',         'X(GU~gg S|G-7sBi22L+Q<9%W:;1WTjCX3S&XQBCD;kO>`j)N-o(7u)}pTv+$yO^');
define('SECURE_AUTH_KEY',  'q F2[ kdTDgo5j4hS>17N-Dn@ig}/hZM13cR6?a(o><UaNTP~wN#>]h2`.S?(U9Z');
define('LOGGED_IN_KEY',    'UQg4l<.*aJ%}#}*sI<Xl.7X=u:7a6;GHnplv[4{Kd14`wb&F+s[h1`@-x)L-xkNp');
define('NONCE_KEY',        'RJGZR[Y>;z(Gx;>yE@ih(fuoDJ,i8`}T}]UR0#XUD)T;`8m8umn?;|}$VT3bjj~u');
define('AUTH_SALT',        'nf^*2BPU}i)NvCgwk!ma@kY.sgd{g.;M-`?Hd!/Mh{m!;kOsEq{Gm`qC]_ZdF?lT');
define('SECURE_AUTH_SALT', 'hsH^=P.0mV>$,!+u+(O;GcC5,Tx]tn@r(N::^e3H?,KbBrLM@uDTSUI,4v.#51pA');
define('LOGGED_IN_SALT',   'R4E}M-q4`^q`N_gzV-}G|?haI[DRMHo^st+VH[7?9|%(v~K|qd;j(RB<,,;@M3(x');
define('NONCE_SALT',       'MKT/{WPVZsgym}(bN|A!m>:,Yv>Imq(e{P4k2zlPCPiV1AFD@Fx{ RJxpxd+*(qu');

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
