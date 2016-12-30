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
define('DB_NAME', 'testplugin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'cuncon');

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
define('AUTH_KEY',         ':yNCmT1#Pz1fWq.6fiS(0C2=fkv[9V Um}gPI#b12+9ipjJ`-(s{vHpJQS6_0pz3');
define('SECURE_AUTH_KEY',  '50}DPE@OnH&Za5s7&ZS$0P[-Pv8SiqlBj6{3*uf6.T-4@keY%];es#B!.81z6sPP');
define('LOGGED_IN_KEY',    'R)rCFGl =Ik6b9?i5[_UE?T_MZ1tn7_([LuaTM@yh-osyW5d[ZF@:@!WzmF]laYv');
define('NONCE_KEY',        'w#~9^2K%nuRna2K?4@&C}j:n.Gz}+JUX>uAeSfPNG9lzQf9Eb.bM@O]U:alKOc4^');
define('AUTH_SALT',        ']?aonaT!_E9P~F!cY)tP22~2sHw<FgueA_Z+HLD[ ]/o?FuV7IezgA?JPB.U#u!_');
define('SECURE_AUTH_SALT', 'C{MZQ@pf{{sSRZs]OPveeLV,xI~j++`F9$5(YjG58V)ef$7n+]T^x!r}&#O[X[9b');
define('LOGGED_IN_SALT',   'i|;zCtOde)aego_w=l8d#=hUriRHB{tlYC:&`z4ZXg#Qs-J-aa5K.kGey`Og]M#<');
define('NONCE_SALT',       '+%iLYt5PY;K9BFFnItRzxOUksG/mB-/Ol5k3w&jp}k:>gG=eSZXMVRs]X&G;wtLD');

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
