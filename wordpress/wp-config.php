<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_rafaramos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ny1 +IqB,A+XMS2wE{k~qSA,MUq:NO:O iR(htb6q!Z7D|PNDz!uFN*c|2?z(55s');
define('SECURE_AUTH_KEY',  '2v@k]r22|)J`h^yB!6B oKeg[-5U7)/fa*3[w+>(?m(E!xn2z%t{>+.FD]V+Q*Lt');
define('LOGGED_IN_KEY',    '#~t}DQaoB+4u$rs#k9+S90@B3]4GS}R?H}W-:zj9 fuS&C]6 lot@G)N+9o+8iDQ');
define('NONCE_KEY',        'FK~J8D==^Mc2&k{)BUH@.hS%1LC@za@Vr}</i]0[7$^2~^g9J;l3,``$jLe9rbMT');
define('AUTH_SALT',        'X](|=WC$*~%;26_rB3xS~,x]& j|RVLM5)Jhra]]QN[gm{oyoR+?Q+ (r?jEO=H^');
define('SECURE_AUTH_SALT', 'Sd?!?+?dE0I2AJ;eFY<8#M+#1Zjs3-|5/s1+{+RP&+|2sNxM50G4N(|MT]`f!`lK');
define('LOGGED_IN_SALT',   'LmgWnTbq4Aup?PP`]<_xr6I4 iG3dw<Z`+yRN%=S|nSrkc&pw <+1_Q)0I11!#ze');
define('NONCE_SALT',       'c$n`fMuNS(xTC$-a4[paj>+hLs4({Nr^Jkz]+:8~-k(-OTQz23qD``n. Xf6Zpj:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
