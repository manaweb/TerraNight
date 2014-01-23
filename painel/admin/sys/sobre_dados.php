<? 
	define('ID_MODULO',99,true);
	include('../includes/Config.php');
	include('../includes/Topo.php');
 

	$Config = array(
		'arquivo'=>'sobre',
		'tabela'=>'historico',
		'titulo'=>'sobre',
		'id'=>'id',
		'urlfixo'=>'', 
		'pasta'=>'informacoes',
	);


	if ($_GET['ID']>0) $dados = db_dados("SELECT * FROM ".$Config['tabela']." WHERE ".$Config['id']."=".(int)$_GET['ID']." LIMIT 1;");

?>
<?
include('../includes/Mensagem.php');
$ondeestou = 'videos';
?>
 <div class="conthead">
                        <h2>Editar Texto "Informa&ccedil;&otilde;es"</h2>
                    </div>
<div id="conteudo">
	<style>
	img{
		max-width: 350px;
	}
	.btnExcluirImagem {
		margin-left: 11px;
	}
	#fundoPreto{
		background: #000;
		opacity: 0.7;
		filter: alpha(opacity=70);
		position: absolute;
		width: 100%;
		top: 0;
		z-index: 999999999;
	}
	#fundoPreto img{
		position: fixed;
		left: 50%;
		margin-left: -20px;
		top: 50%;
		margin-top: -20px;
		width: 40px;
	}

</style>
<?
 


	# Montando os Dados
	$campos = array(
		#	0=>Tipo			1=>Titulo					2=>Nome Campo				3=>Tamanho(px)		4=>CampoExtra		5=>Comentário								6=>Atributos
		array('textarea',	'Texto',					'texto',					'500',				'',					'',											'jqte'),
	);


	# Exibindo os campos
	echo adminCampos($campos,$Config,$dados);






?>
</div>
<?
	include('../includes/Rodape.php');
?>
<script>
	$(function(){
		$(".btnExcluirImagem").click(function(){
			if(!confirm('Deseja mesmo excluir essa foto?'))
				return false;
			var altura = $("html").height();
			$("body").append("<div id='fundoPreto' style='height: "+altura+"px !important';><img src='http://rfcasaecia.com.br/img/loader.gif'></div>").css('overflow', 'hidden');
			var campoImagem = $(this).attr('id');
			var imagem = $(this).attr('name');
			$.ajax({
				url: "excluirImagemInformacoes.php?campo="+campoImagem+"&imagem="+imagem+"&id="+<?php echo(int)$_GET['ID']?>,
				success: function(html) {
					alert("Imagem removida com sucesso");
					window.location.reload();
						
				}
			});
		})
	})
</script>