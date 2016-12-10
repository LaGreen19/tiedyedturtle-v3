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
define('DB_NAME', 'tiedyedtwo');

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
define('AUTH_KEY',         'W;1qKXu8S/X |Oj/,]=GH#]lm&ei,G<mH}.mlF6CH]rwa523fC+~3I=fO<Lc#q;`');
define('SECURE_AUTH_KEY',  'ee34SC^n&f:lb$&#a/j$6?DboW/CG/1v{#;*j]JC07]{v#r~SG%9:>v@?DH_|OhU');
define('LOGGED_IN_KEY',    'L(1zwYV#Ku,?:/^Rkl!{X#:L>&n(`h3tbVSl+6=oh8] GA~,/>d]Bejq{&]kXZ~B');
define('NONCE_KEY',        'Jc{<HBuNP~%>TF><n$2zlfoB1eVlvM}RaL2S^s*k#G2dh1uvaAd@4dJ+E`CrHS&P');
define('AUTH_SALT',        '<!XUI9,!TId^Tle~O0nq`Zf]tQ&+0HbV%(RDU.c<7 ?r?wxpUn-bZ_>FdhB9Z_:s');
define('SECURE_AUTH_SALT', 'a)<0hHMf/:.M4YLt=D~a#+|1pdrWZa};m/I,-5fcam4h[tpYu}]aEvR#*.]HS(`x');
define('LOGGED_IN_SALT',   'dq75]3P(G)#v:_))*TO|:s~nhHI6Rx&@gQ%R#?/B]M{Y$f]rFr=@W]5OwVzv<d]y');
define('NONCE_SALT',       'B-nL~$Kue&dID^3?>{^jYj9L#5pX,eeR3>@c<bX/31BkFe2,GS sNRaw$:,7Pe$I');

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
