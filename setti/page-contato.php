<?php get_header(); ?>

<div class="wrapper">
	<div id="container">
		<div id="content" class="contato">
			<div>
				<ul id="breadcrumb">
					<li><a href="<?php echo site_url(); ?>">Início</a><span>></span></li>
					<li>Contato</li>
				</ul>
				<h2 class="entry-title">Contato</h2>
				<div class="entry-content">


				<form id="form-contato" onsubmit="enviarMensagem();return false;" >
					<label>Nome:</label><br>
					<input type="text" name="nome" id="nome"><br>
					<label>E-mail:</label><br>
					<input type="text" name="email" id="email"><br>
					<label>Assunto:</label><br>
					<input type="text" name="assunto" id="assunto"><br>
					<label>Mensagem:</label><br>
					<textarea name="mensagem"></textarea><br>
					<input type="submit" id="send-msg" value="Enviar">
				</form>

			</div>

		</div>
	</div><!-- #content -->
</div><!-- #container -->


<script>

var url = '<?=site_url('wp-content/themes/setti/contato.php');?>';

function enviarMensagem()
{
	$.post( url, $("#form-contato").serialize(), function(result) {
		alert(result);
	});
}

</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>