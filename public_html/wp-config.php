<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'bmcqxaZ2QVetQH' );

/** MySQL database username */
define( 'DB_USER', 'bmcqxaZ2QVetQH' );

/** MySQL database password */
define( 'DB_PASSWORD', '745hTMGVQYQziQ' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8wEz{zms{y8cDK@.Vd8[Z.N6ol* -s.:+:1[=||0a6j@)LVUTh9dGO@Vuys~Zm&j' );
define( 'SECURE_AUTH_KEY',  '0aeciY23TJL3hP7BZat+7t/Nk{?@5ebD-^|XV,]+oX(@2t4K2O&TJ/d^_K{~BY2}' );
define( 'LOGGED_IN_KEY',    '$dzo<]Ua0!?8UEf]-2n(T+f!?Pa^zD8(~,RB[Xw2geOQ[0Fh#Lp}-:6x/1/r^|hY' );
define( 'NONCE_KEY',        'Z4;.6L*FDGeBlGP+4<*RLxhDJB-mN]T(kN@,o$0uv=8YuTpRmHy{mb~@_RN%Jz0a' );
define( 'AUTH_SALT',        'NQk4an(OIg0<dhXZ3{|$3YM_Pa2uQVZb.8F;rGATMJfy%(F)%D%izIz9U}zu-[=l' );
define( 'SECURE_AUTH_SALT', '_XsoI9u;yRQ68fA%pnf;[`&y(0)MdR$n=G7lq~F[F9)|RH%QG&8g!Q+E|oD?/HAm' );
define( 'LOGGED_IN_SALT',   'j83(U_8b&Njt<P4sJAd+hr6w(p=-jx=t`L_CWUIGCX+r+~Fk4$]V<8%Rt_v13=H ' );
define( 'NONCE_SALT',       'KNH]e$LCD[XYKc|K[=rc[-N-f2wr3xVYq;TjF*KP7Eh(4IC/`+t2oAx)IClqg+XC' );

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
