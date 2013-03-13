<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'plugins_wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '54qb*h)QiyJGhQx^r8$OzN;it^Pb-[Ek}A&F~/XR8dttoXsM0m>V>5pn0-dg-Eey');
define('SECURE_AUTH_KEY',  '8k*Denp1hc;a1J} Wfd7Y[2[]t7>-~qY+VCN-[;M[gMZl!|k?Gl[dcf /u4{tAvz');
define('LOGGED_IN_KEY',    'bO`<P/`kq5Pd3,;;6ri7b4INu,!C1[622{`A__ukGRczwCw{(*h[+DZdw5<#8kNf');
define('NONCE_KEY',        'w Hm04EV9:)9I;7)CC,8Hp@LwAl{J_BU2iCqe%|p^eC]{(^Epu/qg(f#{3_Wz|oN');
define('AUTH_SALT',        'wPQpgk7!!2%9c%saMwkH_z-S6)C[k4rRJ6TkH{/4+heGIrX>cK&27k288%ysuSVH');
define('SECURE_AUTH_SALT', 'k}u6+2D641=5r&i}^[$tBm^E_X(Kyo-0:?:A[Z6jMT`}K%{Yy[sj`?#J,aCMp}K9');
define('LOGGED_IN_SALT',   '4iQZh0N7!>|X{8B5:JGO-myKR>3_Mv.}G6;tf/r)l=!hUScm;}4Z%?GLg;beMfe@');
define('NONCE_SALT',       'UX^Ug4BL1**=g.F4%?fMDo2p~O/eTl4 _Im!$kqEH`xrChsrE>GM@XUh&ig:k7}d');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');