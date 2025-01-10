<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'petrotech' );

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
define( 'AUTH_KEY',         'dffqvg38caz2oz5z8bvn9cetuhrvdjwds2l5hq2mps89nsohstcchvvtqgzedhya' );
define( 'SECURE_AUTH_KEY',  'wmuj8nwrixlhap78nab7wpfdnmgfxreczomjprlyrwdzjim4mf4es0stzgcaab3w' );
define( 'LOGGED_IN_KEY',    'aibi2psadoky9ctgvor2ie9d94bpordgxzxlv2qqthvvmg3ke8vwm6mjajidmcwl' );
define( 'NONCE_KEY',        'bakcq9taxjw0e2pkpssut28byvamhnnlb6ybpwkwtocoedyfm5chhxheolfkcrce' );
define( 'AUTH_SALT',        'fgw0xlpohyi5r163838l9lvfxgg3q6i4wdvt50aoiqbkeny4jhthg9wj3e5bsukc' );
define( 'SECURE_AUTH_SALT', 'erklyakcyy3b4n8obpjm2oldikd0h6y7b3a3ipulp2ofirdlmu0406u2es1ppxjz' );
define( 'LOGGED_IN_SALT',   '9tjdtvvhvmzawkcy72vjwwydxauace0m5mrtt79loqaaggrc3naeuvagepv9mdnq' );
define( 'NONCE_SALT',       'ccgwgwb4iswbwrjaqiv6cvspsijasal4wayaon7o24bkbqxtofehc81hf2th9sci' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpok_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
