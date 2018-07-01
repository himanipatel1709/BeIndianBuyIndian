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
define('DB_NAME', 'beindianbuyindian');

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
define('AUTH_KEY',         '[a*B5!:*)oEctYYgRKG=uZ&]r27$~4E vph+ _PoR;jAof0.CHPN1&?^oPv3V]gn');
define('SECURE_AUTH_KEY',  '_M2R,%BvimOmTgrCmo1o$fr$:CDP)=xH07u`aS52L%tB}n2#i)%o>TR*m)kg-dkW');
define('LOGGED_IN_KEY',    'fxb,7`>*W~@[ mV#psr6,;R@i[g-ss@2NH`*N1cjNkb||3HgRMH,GDHOR^IoMhkX');
define('NONCE_KEY',        '~KF91v]KhdbI[I=_7Qj<LMKIl[/dO,j|M(YGc5p87R$px#%=-opL}qm)1{>#@Izh');
define('AUTH_SALT',        '[8Ie~[`P.>5vrmOZ%o[7DzY$^w0 DxdAn$Z9l!i@.mcbNwY<iXh{q)$GZ/@$R;c+');
define('SECURE_AUTH_SALT', 'P9.8+@I1b`+NT%QMYdU(Jb0RXpRTTA.[i@jBum;/)HY35MN^9f$7j g /z+oN+kG');
define('LOGGED_IN_SALT',   '2hT#`zy}F7nfcNzKTB{r1aBm1P@IZhI90l</^.bAG8+#u1?ma)vA$[Nqsc)rXOsO');
define('NONCE_SALT',       '5RDx)&kx3=0XIT9<b4/3mKTYwcInMp]3O{/p{lT4$Rn~dNhGh+<`%}6;Bl}rL;^]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bibi_';

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
