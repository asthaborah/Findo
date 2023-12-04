<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'Findo' );

/** Database username */
define( 'DB_USER', 'Findo' );

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
define( 'AUTH_KEY',         'tkHNeuzk~Oq9rfIRLy65D[+N +_%pqXfslB.&cO6>Xt6#NI5P.^NQg#|an:an:XI' );
define( 'SECURE_AUTH_KEY',  'sTdr&jZ]S2(uH0Xp!P6zL8#?3:JsG#4=|#zUB=0iQ0g1e=e.}.s3D?Mb[`#s1A7s' );
define( 'LOGGED_IN_KEY',    '!-12$b8gq 1r$/f0)0xs_`L_qu>hv5/W`r =Bp=g`l*mfFga(+6FdSq$tt0ImxA5' );
define( 'NONCE_KEY',        'A0Dxg8]M}y9}:ySDvmJV</)`|NeGoNSvsvc]vErc6V7j-5omhvLM?r> GFWmYe1I' );
define( 'AUTH_SALT',        '(G1g90B@ImkLgUZ6b1%x>qp7tswiazIM(X&PC}tNm&)j2H^)*nlC(qpvR4(|S{%R' );
define( 'SECURE_AUTH_SALT', 'i3zp256l?zL|vN.,(0#j9T98A`d,?YK<F!]t:0T9BU.ndQ3uqdF@w`[ wNQL~+1A' );
define( 'LOGGED_IN_SALT',   '/Od<U?/u[j{WSXmkPBmy`#o8HBy7kw,w&?|u4BrmDY$vR7G=#2@;(uRipgY73xM|' );
define( 'NONCE_SALT',       'ugjCIWf:fVwj/B7+hybq=gT*Z&tvWRX?64Od-!yFkR[[{S(cohsyr[v0.kU !+N4' );

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
