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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'JbI@w:G4iG|kW4(g0qXyif94rL6Nl+{N|hVeMLJ;=HYO/et1XZhzz!/^?&JTR:&_');
define('SECURE_AUTH_KEY',  'PK6v FEs@w/4omtCPW@2:&`)x)aLTTGqxJmk{{cnWLZZPcOG7G2,|^>=ia3mP>7l');
define('LOGGED_IN_KEY',    'ppcy^dw#80KT!koV>@yGY2nMHZyjhl;U-,n@m<|QKje{IeqcR1e|:YbSG#d&:Gf@');
define('NONCE_KEY',        '3OVr21dQs?rG/lnPUn&>Og@XMbc9:Z-4)Lin+rL-wRoJfrnzpEOQSyaE7$~7ct60');
define('AUTH_SALT',        'xe6FfX +2(mA&/yfvzJrsbLM]U)XPc)p(mI6(W=@` {s^`x;FYY,Xi0`>.PESiW&');
define('SECURE_AUTH_SALT', 'pA:L9K{#K`2MqX:G_<!n?Aa)>gdn?}j1|IqnLDa:FVkz}nW3FP(1?yR<%kSW#-Z2');
define('LOGGED_IN_SALT',   '6{Tg=&3#1AnAfj@@K`A=w`k+;#k}Y9UD(.&=>tG<*nF%f&0<%iI}3B]tHE/@9:5]');
define('NONCE_SALT',       '5M*V=ms$9k^lo?O/.fr`[D<w!._90g{-u|I3:0~~%h8NyCeymG!BBX),U,mRxY6Y');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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