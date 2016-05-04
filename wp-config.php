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
define('DB_NAME', 'u915126445_pres');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'u915126445_admin');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'ejwkh24$');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'AKI%YpVIgp}SfPKZYU$k&fuq0,_(^4-r,e;kB:$)<@@^8KN[R#C$epL4.2BD|TDs');
define('SECURE_AUTH_KEY',  '9Nh$FOm>U)F$1&2`:RXUV1,ykH``4J|%|n8J5E.C{Q5(#sQ?W24Jx}NLX7zk9mNP');
define('LOGGED_IN_KEY',    '/Pcl!-DF|WZ:L]Y eX;.pVdac]b$CVADgu_0|mRr|sKQWk&q3j./LPT]!0p/-74o');
define('NONCE_KEY',        'FX08]h3A<b9gVQ[8bC<9ScM<ge}Pw>|:<_+{M 2r**BbNLz5snp6kG@GOHd6#%jB');
define('AUTH_SALT',        '||;Z0|:l~4_@+U/rJYC|^Wd4=TT`-k~||$Q2>6dD.Eb&m!z.VMnfZ<*+-yWpE#D4');
define('SECURE_AUTH_SALT', '!gZ5.3x| i$.Yl`Zse@!+rXM^F-wQLl)FUZ7PB5<xYuM+fJ3**W7&;Wl+ERgN1%V');
define('LOGGED_IN_SALT',   '/+eRV>q!+^jvYE{ _<5bq[l*M6hiRxgJO4>hM:WycA5s*PSh;.)2|J2cwXg$&+eG');
define('NONCE_SALT',       'mUrcr[ h5{245v`xIRrTN<-d12OQ 2%+9d~f)E*!6X@L-PHGTj<0;SUIzH~O9,mS');

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
