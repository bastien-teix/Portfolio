<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'portfolio');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Oz%oa&l<1ubY8Ey0D>(=7H<C7B<=HHDW+}:rnO:<h0WNE1^Q3f*mUbBR5A(G:SZ>');
define('SECURE_AUTH_KEY',  '$^f:=l}W<]E bH-U1E62+lbl~~a^0u0.|$AOb>:U?fRA@-B+>rIfNGTUgk!}I-n8');
define('LOGGED_IN_KEY',    '2<orawkc(F]Q37~5[oEaL3hr:bAN Glz}/QZI*E)*/7LS$gIHn{H[J|g6DCEv5qe');
define('NONCE_KEY',        '0f(dyoeHXGEfIIUL:Qa;$%i010Fsef ^29QCYDSYCNpBkXqx_sBP~#:t%=Vf]43o');
define('AUTH_SALT',        '#f1vDYY]pJ=c!FOtU2[=?_%78b6:AQ+iVb}K>>6FAU+DSg*na/Zu%j$DP]Hueq@]');
define('SECURE_AUTH_SALT', 'XEx~KE#r-?(0O1W5R%LKdCrzZ{t>@5}vs1`-Y>C(hx DfDtGhIUv>`ti~QR?B{?.');
define('LOGGED_IN_SALT',   'mNI.(*y53lE W?!DDaO^n_-l.yWacLF5{^8.Gxz(-!Ml&SK9d=CYAs-VHq[!G,Y]');
define('NONCE_SALT',       'YM}&fi3UJzAN,vp[roVzZg#C{SiR(9p6- E4#(JHP]cW8/n;C%=,3S`Ez6Ej5_Yh');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'bt2018_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');