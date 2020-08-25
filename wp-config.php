<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wooCommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2.42FW*^U)JL+n=JJWH$[6s*xo=fr[UV?w>9M0sL0D,O@TWd*R/K~okTUn5NNX%~' );
define( 'SECURE_AUTH_KEY',  'Ex;Yk6fW;xC[8qX%9G[dt&;Pm)#$_[:.Dd0p=Q Hc~Zyro;zU=9SvN>a~J{O)1ZO' );
define( 'LOGGED_IN_KEY',    'D)pTuL|ft-x Qy2hrXTQ&0-uO2k_+T{j6nW(;=HE6h2EQ<<}@ExM,yu:r$YqcC$G' );
define( 'NONCE_KEY',        'xI~1i#aH?n6!wbqB@o5-&L;F%ezae`/OX-hm_(<>UrtK^~]cM;t~Ei_:x2Ybr5or' );
define( 'AUTH_SALT',        '`l5QDDwn#`p![6-#gmTA0_V3x]Uiz]D47D+tFFGsfbZzyfK^X*mmH0xQ(Efd{9#2' );
define( 'SECURE_AUTH_SALT', '&)_NEgA~SaaoNV{3?_m!%!oOZ|]o:QXQ@Q{>6t*<&5+x|+v5PnwiW` -ky[Q=MD-' );
define( 'LOGGED_IN_SALT',   'Vq)[h*U6ZWwc|6M0nB<HbF!8)}/IVZ-X^p|,1_5JHa9<mxDE*k3iafO5{^dbFlki' );
define( 'NONCE_SALT',       'M`xEnC&lQm;)d;Y<VUB1Gg=$ };/L,?K1/F.&VI|fG(%YO*u&`{gRo@g-Of|{`Yk' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
