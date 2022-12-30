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
define( 'DB_NAME', 'blogs' );

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
define( 'AUTH_KEY',         'c-CZ}]tj!L<u~6zSM/9.q,rn8X(QK%-L) oXa9|3z=->*{HShd</SkwIJ1l)tZ!>' );
define( 'SECURE_AUTH_KEY',  'ZOLe_0&J3GxDcS%4(kP2Ok?T3VuSJ-ONWN8XjW^U6YOM8]sL].Qm0I*VRr1NeJB3' );
define( 'LOGGED_IN_KEY',    'XzU< #9)XUrpA5]*/cfBYYHS&x:)^MX0-&K:eUWALw)?Y1*Ye r]pCX(?LLNF/6u' );
define( 'NONCE_KEY',        'XV,0wd!=[5BL>(M|kYsX=4Wl0nsei#UF&Z(6?i}/R; [=clL{e=kk0}0<Y0ue$!/' );
define( 'AUTH_SALT',        '_xIX(B/KQsm<elJgGIW,-8TD btmdLbN.FrYb}G4qsi-p^e3e0}mjk<!b@DS-USq' );
define( 'SECURE_AUTH_SALT', '6W<XvqdpNycbw30QyS6;_q)jGa$P!^lkz8]<$b7rHE; 5:H@qU]~eDs{YiMah;`B' );
define( 'LOGGED_IN_SALT',   'Nl~e^p<W}.|v$@GNI0?HL8D+jgZ:e+oNR>UeI8)>YZ+3t8^XU`z0vcW5u~ub,RQp' );
define( 'NONCE_SALT',       'kZpXL[:qoYRs8lHpG7OdxwY@nIdmHY-D M)a:9RE ]DoHg.~L$2!BtYs&x%rGWg8' );

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
