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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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

define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')sH;?KW};|IV@~!IHB.sAtI0(20];omNX8Z9FPd]pSo!xu+i0&`0@@6p*4%D36m|' );
define( 'SECURE_AUTH_KEY',  'Dm(#h0x*im09wsTo&Ifl_h!]q[sVTlR7Bdi-)Y6X8T,i(x%F<^)Ia1o(s2MP$9b8' );
define( 'LOGGED_IN_KEY',    'i,6nv,]JRT Pww,MFVwts=&{+=Fphfc=~N}hG.?9;,:{gdGg(T+{;p&&O]af24r:' );
define( 'NONCE_KEY',        'mNC;-ex)He:#&4m~2|GOr-mL%zZo%aFX7PCZK;>M6LH+-%U[]u(c@,REZbGk}Zb ' );
define( 'AUTH_SALT',        'd),i9_CsvT6raNlJ8A7WM~aWI</mF>-Apr^uvpm51,5CnUk%V99zKb7iTL4-WB]c' );
define( 'SECURE_AUTH_SALT', 'abuFO/3+7X83n91`X:uCI<K~5BfF&DbRj3H%yDA!(!ctq{cIcAC :XA~MvJQhbb}' );
define( 'LOGGED_IN_SALT',   '4@?=P)a^{dQw^Yw}s3T@rxo@oMGJTeVWtLg.;BYNLZ<6AR!^DLn?+`JXo]cmE@sq' );
define( 'NONCE_SALT',       'FfbI%P]J2a#N@#gNDCRYXofOK_a@Xw{<g{4m+dr<98j?k/StgeIqM8]_O%u^C|2Z' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
