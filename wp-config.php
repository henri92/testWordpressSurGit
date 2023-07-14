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
define( 'DB_NAME', 'test_mautic_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'm+FiN^n_hWx;$/CLi|=qcd;_#+#J+Bvy1 jlbRRnA]J,^2^PmHinHtCT[X4.NbbJ' );
define( 'SECURE_AUTH_KEY',  'VfSO,?zQ,K{n%?|wk^p*K8jt%x*)H_;8BaU,6SXHi5CI{A..lXR2CIvoKPKsv.?,' );
define( 'LOGGED_IN_KEY',    'YZ1?lAb6hYh-Dw]@=`lDiITUfG fBZ~5yH[Ge*a?NHWaJ;:ah5kD$FXEsZLtf~{+' );
define( 'NONCE_KEY',        'Z>G-&36-hbjA[]`69 OnEh* XsF;hq7->7naI>0$Av&2)z)<(SNsLI#C]~$21J89' );
define( 'AUTH_SALT',        'z+{ox iHL7_n?[dZ9<_{kpnyR-t7?O}~HeYW06B,QcC$.&a)M&p>SR,)<t9~W;Io' );
define( 'SECURE_AUTH_SALT', '}rC^){:n0Z{OB_5R*fX&ZW]k;zJ|URuZT:EG93Ga}Ky>$LAq#y*<4Zjy m5[ljyb' );
define( 'LOGGED_IN_SALT',   'XKm&xUk7vfh6m7t B{(.[pLNHH)]B@7ETOtg%OjzGH+OFdT%Z18;5$yttm~Wezu#' );
define( 'NONCE_SALT',       ']N/3t^/{8+yF6<XK!kl@1)0<CP3nSynpR~y50h!]FttPJonie7X&JOhvH#q1On_o' );

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
