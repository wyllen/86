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
define('DB_NAME', '86');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '43xmTO6#*7z}Q@M+gRpOy8Vbs/Oe4Cm4Xq{21*4?`8.3hT>y#BEGj-?_Zabve^,g');
define('SECURE_AUTH_KEY',  'fpU9~;&2v2[J&W:g?PSiRW8&]Rv/T~8ziTJJR(K/OVsqkwCRqV]2<4Ex.T|brlpa');
define('LOGGED_IN_KEY',    '=KzOQO>f:jsNBQ{w!FwhK]s-jH|k.Q*K#w(GxswvB1^p[.mb2LRzt]:bBoMjJ<G(');
define('NONCE_KEY',        '-G[CC5h6 TnZG,NCtvdXZ$:QMC)ngXT,75FAZKLf:aYAuC!%-^P2A`~fa5JdHl1o');
define('AUTH_SALT',        'F,C`CCvyJ{3Zu+oW!_ZLT[^>rsMm{4*~F!(c&mT5d:?p`tSU@xk%>)H<Zj_h;,rF');
define('SECURE_AUTH_SALT', 'm<~CQOx>Z:6.pXvGMa,,kFN%T>9Ihky.CxW3fP~0hra@5|jN4jr}L+n;mt-5[cr~');
define('LOGGED_IN_SALT',   'd&_NzX1>.u@1M0-SsO]+hO:Q(9Q<2&{E__GE_rV.n-PD(;~8M6`A+Ary9SKZL7@d');
define('NONCE_SALT',       '`YAN=4Zo:I2$zi!D/=UB]op+zJbN%jUsX@Sle^%63HKe|hIynqO[orCRxeIF1$j,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = '86_';

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