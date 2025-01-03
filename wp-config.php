<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '3RZ@n){CpMhdCrWx6grIHmpF@nVBivKWk|vh#8,1rfU?fCWj.cy]PJJI)xR1|MU7' );
define( 'SECURE_AUTH_KEY',  '_ADnf0oE3T??$bR:q [9BtHhc$^gW@<ZN1#ew:A1O;D<NYE^R)!6]yF(kQK9&bS~' );
define( 'LOGGED_IN_KEY',    'j$!!9Sw.od)D|9?WSG|`5ZTrIEq}^ZE}}c.N<6w^OS!8+)1f.vz<Lf{N=FCh_z:J' );
define( 'NONCE_KEY',        '{hVLPa%B$pqguEKywkhdHN~fmMC_Z#uIo;M8Iw!cTsnSfqM3F9i6%s(:?PH,N9#A' );
define( 'AUTH_SALT',        'F},y?Rb8?r2B##I;]By3lgJl0VEUp/ODSWIPDY9%c)47{U88C-Hf7kb|wh]jEp!9' );
define( 'SECURE_AUTH_SALT', 'Ri{7Yxd?`zE$2!N*aXeX%tFPN1W@Jp6*3x?#:Z?9GPw2Jq#]5<aGvd{/5L$m5-g1' );
define( 'LOGGED_IN_SALT',   '_;Hc8[+63Y^Sk<kM1}M %o8Wp]+SQgl=/}VG-=rhJq)IztBb4xdt3|jc4 Azgm^f' );
define( 'NONCE_SALT',       '/6^IY?M}JX&3>WHMbh:w,S}p^Sy*us-AArO}4hT|@)+%38F,;g@Km5a#W@q!CA>w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );





/* Add any custom values between this line and the "stop editing" line. */

// Enregistrement des erreurs dans un fichier de log
define( 'WP_DEBUG_LOG', true );

// Désactivation de l'éditeur de fichier de thème et de plugin
define( 'DISALLOW_FILE_EDIT', true );

// Désactivation des mises à jour automatiques
define( 'AUTOMATIC_UPDATER_DISABLED', true );

// Désactivation des mises à jour de plugin
define( 'DISALLOW_FILE_MODS', true );

// Désactivation des mises à jours mineures
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

// Utilisation du cache natif de wp
define( 'WP_CACHE', true );

// Activation des compressions
define( 'COMPRESS_CSS', true );
define( 'COMPRESS_SCRIPTS', true );
define( 'ENFORCE_GZIP', true );

/* That's all, stop editing! Happy publishing. */





/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
