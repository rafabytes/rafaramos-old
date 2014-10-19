<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'rafaramos');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_O,Hl@ylDk|#Y)bF::-%t.[+-ihg_lJ`6]]y7Y`BN(t2lk hN7er2PH:L,D6QE={');
define('SECURE_AUTH_KEY',  'ozgs_dP2|-!9?j3DyWWM%K&TO-Fy2@K7|S,QzOFE_nsp59B1!1H7%Eg +v+;gse:');
define('LOGGED_IN_KEY',    'N^n(Wd7q=?2E.%cBZl$=H4:#0xzjMmB_l|+?*[}oP#1O5]i-iJMOQfG:Gh+oZuxu');
define('NONCE_KEY',        '[*L#N2$eubP2HfD{/hiC}0w>fd1Q7*dvgxWMWr*LZ~(6c#cKvE&EK>K-&;k#MFh|');
define('AUTH_SALT',        '5*Qfr/-h!>U3rRSOSoQr-tG+EQ%@1^GC5JW|7Bz?.52|O/GJ?0Ce(<4P|+SZF-_^');
define('SECURE_AUTH_SALT', '&CT1bx([:K/W>^~~G6-JnEaitP7b>j*q?+B7:u)pjp#/!`3vdh9+@)#jfJQua3Kc');
define('LOGGED_IN_SALT',   'lvU)--~|SQ]Dgl=x 3W}^tO5A-Od3f ]d*a:s3|d)Ff9n+JzwLnxALLvemh-u>gu');
define('NONCE_SALT',       'AlP+SCV.kqo^.6Ysk+86pxMhRK-g-JR>r<-92;51/]9iiAOT8VWgLrT{PlVV2UK3');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
