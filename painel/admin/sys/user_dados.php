<? 
	define('ID_MODULO',31,true);
	include('../includes/Config.php');
	include('../includes/Topo.php');
 

	$Config = array(
		'arquivo'=>'user',
		'tabela'=>'user',
		'titulo'=>'nome',
		'id'=>'id',
		'urlfixo'=>'', 
		'pasta'=>'user',
	);


	if ($_GET['ID']>0) $dados = db_dados("SELECT *

, DATE_FORMAT(data,'%d/%m/%Y') as data
, DATE_FORMAT(nascimento,'%d/%m/%Y') as nascimento
, DATE_FORMAT(datafe,'%d/%m/%Y') as datafe
, DATE_FORMAT(databatismo,'%d/%m/%Y') as databatismo
, DATE_FORMAT(dataentrou,'%d/%m/%Y') as dataentrou

FROM ".$Config['tabela']." WHERE ".$Config['id']."=".(int)$_GET['ID']." LIMIT 1;");
 
	if (empty($dados['nascimento'])) $dados['nascimento']=date('d/m/Y');
	if (empty($dados['datafe'])) $dados['datafe']=date('d/m/Y');
	if (empty($dados['databatismo'])) $dados['databatismo']=date('d/m/Y');
	if (empty($dados['dataentrou'])) $dados['dataentrou']=date('d/m/Y');
	if (empty($dados['data'])) $dados['data']=date('d/m/Y');
?>
<?
include('../includes/Mensagem.php');
?>
                	<div class="conthead">
                        <h2>Cadastro de Membros</h2>
                    </div>
<div id="conteudo">

<?


	# Estado civil
	$Estadocivil=array();
	$tmp1s = db_consulta("SELECT * FROM z_estadocivil_categoria ORDER BY categoria ASC");
	while ($tmp1 = db_lista($tmp1s)) {
		$Estadocivil[$tmp1['categoria']]=$tmp1['id_categoria'];
	}
	
	# SIM NAO
	$Simnao=array();
	$tmp1s = db_consulta("SELECT * FROM z_simnao_categoria ORDER BY id_categoria ASC");
	while ($tmp1 = db_lista($tmp1s)) {
		$Simnao[$tmp1['categoria']]=$tmp1['id_categoria'];
	}
	
	# grau de instrucao
	$Grauinst=array();
	$tmp1s = db_consulta("SELECT * FROM z_grau_categoria ORDER BY id_categoria ASC");
	while ($tmp1 = db_lista($tmp1s)) {
		$Grauinst[$tmp1['categoria']]=$tmp1['id_categoria'];
	}
	
	# Ministérios
	$Minist=array();
	$tmp1s = db_consulta("SELECT * FROM z_ministerios_categoria ORDER BY categoria ASC");
	while ($tmp1 = db_lista($tmp1s)) {
		$Minist[$tmp1['categoria']]=$tmp1['id_categoria'];
	}
	
	# Cargo
	$Cargo=array();
	$tmp1s = db_consulta("SELECT * FROM z_cargos_categoria ORDER BY categoria ASC");
	while ($tmp1 = db_lista($tmp1s)) {
		$Cargo[$tmp1['categoria']]=$tmp1['id_categoria'];
	}
 
	if (empty($dados['nascimento'])) $dados['nascimento']=date('d/m/Y');
	if (empty($dados['datafe'])) $dados['datafe']=date('d/m/Y');
	if (empty($dados['databatismo'])) $dados['databatismo']=date('d/m/Y');
	if (empty($dados['dataentrou'])) $dados['dataentrou']=date('d/m/Y');
	if (empty($dados['data'])) $dados['data']=date('d/m/Y');

	# Montando os Dados
	$campos = array(
		#	0=>Tipo			1=>Titulo		2=>Nome Campo		3=>Tamanho(px)	4=>CampoExtra		5=>Comentário								6=>Atributos
	
	
	# Informações pessoais
    array('','','','','','<a id="btnalt">Dados de acesso</a>',''),
	array('text',		'Login',		'login',			'500',			'',					'',											''),
	array('text',		'Senha',		'senha',			'500',			'',					'acima de 6 dígitos',											''),
    
	array('','','','','','',''),	
    array('','','','','','<a id="btnalt">Informa&ccedil;&otilde;es Pessoais</a>',''),
	array('text',		'Nome',		'nome',			'500',			'',					'',											''),
    array('text',		'Sobrenome',		'sobrenome',			'500',			'',					'',											''),
    array('text',		'Nome do Pai',		'pai',			'500',			'',					'',											''),
    array('text',		'Nome da Mãe',		'mae',			'500',			'',					'',											''),
    array('text',		'Naturalidade',		'naturalde',			'255',			'',					'',											''),
    array('text',		'Nacionalidade',		'nacional',			'255',			'',					'',											''),
    array('data',		'Data de Nascimento',		'nascimento',			'',			'',					'<- Clique no calendário',											''),
    array('select',		'Estado Civil',		'estadocivil',			'',			$Estadocivil,					'',											''),
    array('text',		'Nome do Conjuge',		'conjuge',			'500',			'',					'',											''),
    array('select',		'Conjuge é crente?',		'conjugecrente',			'',			$Simnao,					'',											''),
    array('text',		'Conjuge é de qual igreja?',		'igrejaconjuge',			'500',			'',					'',											''),
    array('textarea',	'Filhos',		'filhos',			'',			'',					'',											''),

	array('','','','','','',''),
	
	# Informações Profissional
    array('','','','','','<a id="btnalt">Informa&ccedil;&otilde;es Profissional</a>',''),
	array('text',		'Profissão',		'profissao',			'255',			'',					'',											''),
    array('text',		'Empresa que trabalha',		'empresa',			'255',			'',					'',											''),
    array('text',		'Telefone Comercial',		'telcomercial',			'255',			'',					'',											''),
	array('text',		'Endereço da empresa',		'enderecoempresa',			'500',			'',					'',											''),
    array('text',		'RG',		'identidade',			'150',			'',					'Só números',											''),
    array('text',		'CPF',		'cpf',			'150',			'',					'Só números',											''),
    array('select',		'Grau de Instrução',		'grau',			'',			$Grauinst,					'',											''),
    
 	
	array('','','','','','',''),

	# Contatos
    array('','','','','','<a id="btnalt">Informa&ccedil;&otilde;es de Contato</a>',''),
	array('text',		'Endereço',		'endereco',			'500',			'',					'',											''),
    array('text',		'CEP',		'cep',			'150',			'',					'Só números',											''),
    array('text',		'Bairro',		'bairro',			'255',			'',					'',											''),
    array('text',		'Cidade',		'cidade',			'255',			'',					'',											''),
	array('text',		'Estado',		'estado',			'30',			'',					'ex: DF',											''),
    array('text',		'Telefone',		'telefone',			'255',			'',					'',											''),
    array('text',		'Celular',		'celular',			'255',			'',					'',											''),
    array('text',		'E-mail',		'email',			'500',			'',					'',											''),
	array('text',		'Twiter',		'twitter',			'255',			'',					'',											''),
    array('text',		'Facebook',		'facebook',			'255',			'',					'',											''),
    array('text',		'Orkut',		'orkut',			'255',			'',					'',											''),

    
	array('','','','','','',''),
	
	# Informações Religiosas
    array('','','','','','<a id="btnalt">Informa&ccedil;&otilde;es Religiosas</a>',''),
	array('data',		'Data de Profissão de Fé',		'datafe',			'',			'',					'<- Clique no calendário',											''),
    array('data',		'Data do Batismo',		'databatismo',			'',			'',					'<- Clique no calendário',											''),
    array('text',		'Igreja em que foi batizado',		'igrejabatismo',			'500',			'',					'',											''),
    array('text',		'Cidade da Igreja',		'cidadeigreja',			'255',			'',					'',											''),
    array('text',		'Estado da Igreja',		'estadoigreja',			'30',			'',					'',											''),
	array('text',		'Pastor que batizou',		'pastorbatismo',			'500',			'',					'',											''),
    array('data',		'Data que chegou na igreja',		'dataentrou',			'',			'',					'<- Clique no calendário',											''),
    array('text',		'Modo como entrou na igreja',		'modocomoentrou',			'500',			'',					'',											''),
    array('text',		'Música Preferida',		'musicapreferida',			'255',			'',					'',											''),
	array('text',		'Texto Bíblico preferido',		'bibliapreferida',			'500',			'',					'',											''),
    array('select',		'É dizimista?',		'dizimista',			'',			$Simnao,					'',											''),
    array('select',		'Ministério',		'ministerio',			'',			$Minist,					'<a href="ministerios_categorias.php">Clique aqui para editar as opções</a>',											''),
    array('text',		'Qual é o seu talento?',		'talentos',			'255',			'',					'Ex: Eu toco violão e canto',											''),
    array('select',		'Qual o seu cargo na igreja?',		'posicaoeclisiastica',			'',			$Cargo,					'<a href="cargos_categorias.php">Clique aqui para editar as opções</a>',											''),
    array('select',		'Onde gostaria de trabalhar na igreja?',		'gostariatrabalhar',			'',			$Minist,					'<a href="ministerios_categorias.php">Clique aqui para editar as opções</a>',											''),
  	array('file',		'Foto',		'imagem',			'350',			0,					'',											''),

 
	
    );
    

	# Exibindo os campos
	echo adminCampos($campos,$Config,$dados);






?>
</div>
<?
	include('../includes/Rodape.php');
?>