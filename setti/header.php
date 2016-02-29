<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
		<link href='//fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>

        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-61038226-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
	<body>
	<div id="header">
		<hr class="red-line"></hr>
		<div class="wrapper">
			<div id="hold-photo-header">
				<img src="<?= site_url() ?>/wp-content/themes/setti/images/foto-setti-topo.png">
			</div>
			<h1 id="blog-title"><span><a href="<?php echo site_url(); ?>" title="Ricardo Setti" rel="home">Ricardo Setti</a></span></h1>
			<form id="searchform" class="blog-search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div>
					<input id="s" name="s" type="text" class="text" value="" size="10" tabindex="1" />
					<input type="submit" id="search-button" class="button" value="Find" tabindex="2" />
				</div>
			</form>
			<div id="access">
				<div id="menu">
					<ul>
						<li><a href="<?php echo site_url(); ?>">Home</a></li>
						<li><a href="<?php echo site_url('bio'); ?>">Bio</a></li>
						<!--<li><a href="<?php echo site_url('textos'); ?>">Textos</a>
							<?php $taxonomy = get_terms( 'categoria_veiculos', 'orderby=count&hide_empty=0' );?>
							<!--<?php $taxonomy = get_terms('categoria_veiculos');?>
                            <ul class='children'>
                            	<? foreach ( $taxonomy as $tax ) : ?>
									<li>
                                    	<a href="<?= site_url() ?>/textos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
                                    </li>
                                <? endforeach ?>
							</ul>
						</li>-->
						
						<li ><a href="<?php echo site_url('textos'); ?>">Textos</a>
							<ul class="children">
								<li><a href="<?php echo site_url()?>/textos/?categoria=49&slug=blog-veja">Blog Veja</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=50&slug=nominimo">nominimo.com.br</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=51&slug=exame">Exame</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=52&slug=no-ponto-com">NO.com</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=53&slug=observatorio-da-imprensa">Observatório da imprensa</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=54&slug=o-globo">O Globo</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=55&slug=folha-de-sao-paulo">Folha de S. Paulo</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=63&slug=estadao">O Estado de S. Paulo</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=56&slug=jornal-do-brasil">Jornal do Brasil</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=38274&slug=notas-em-colunas">Notas em colunas</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=57&slug=playboy">Playboy</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=66&slug=istoe">Istoé</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=60&slug=veja">Veja</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=61&slug=visao">Visão</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=62&slug=jornal-da-tarde">Jornal da Tarde</a></li>
								<li><a href="<?php echo site_url()?>/textos/?categoria=65&slug=outras-publicacoes">Outras publicações</a></li>
							
							</ul>                           
						</li>
						<li ><a href="<?php echo site_url('fotos'); ?>">Fotos</a>
							<ul class="children">
								<li><a href="<?php echo site_url()?>/fotos/?categoria=49&slug=blog-veja">Blog Veja</a></li>
								<!--<li><a href="<?php echo site_url()?>/fotos/?categoria=52&slug=portal-terra">Portal Terra</a></li>-->
								<li><a href="<?php echo site_url()?>/fotos/?categoria=52&slug=no-ponto-com">NO.com</a></li>
								<!--<li><a href="<?php echo site_url()?>/fotos/?categoria=52&slug=direcao-editora-abril">Direção Editora Abril</a></li>-->
								<li><a href="<?php echo site_url()?>/fotos/?categoria=57&slug=playboy">Playboy</a></li>
								<li><a href="<?php echo site_url()?>/fotos/?categoria=63&slug=estadao">O Estado de S. Paulo</a></li>
								<li><a href="<?php echo site_url()?>/fotos/?categoria=56&slug=jornal-do-brasil">Jornal do Brasil</a></li>
								<li><a href="<?php echo site_url()?>/fotos/?categoria=66&slug=istoe">Istoé</a></li>
								<li><a href="<?php echo site_url()?>/fotos/?categoria=60&slug=veja">Veja</a></li>
								<li><a href="<?php echo site_url()?>/fotos/?categoria=61&slug=visao">Visão</a></li>
								<li><a href="<?php echo site_url()?>/fotos/?categoria=62&slug=jornal-da-tarde">Jornal da Tarde</a></li>
								<!--<li><a href="<?php echo site_url()?>/fotos/?categoria=64&slug=interpress">Interpress</a></li>-->
							</ul>                           
						</li>
						<li ><a href="<?php echo site_url('videos'); ?>">Vídeos c/ Setti</a>
							<ul class="children">
								<li><a href="<?php echo site_url()?>/videos/?categoria=49&slug=blog-veja">Blog Veja</a></li>
								<li><a href="<?php echo site_url()?>/videos/?categoria=57&slug=playboy">Playboy</a></li>
								<!--<li><a href="<?php echo site_url()?>/videos/?categoria=58&slug=blog-veja">Direção Editora Abril</a></li>-->
								<li><a href="<?php echo site_url()?>/videos/?categoria=59&slug=estadao">O Estado de S. Paulo</a></li>
								<li><a href="<?php echo site_url()?>/videos/?categoria=56&slug=jornal-do-brasil">Jornal do Brasil</a></li>
								<li><a href="<?php echo site_url()?>/videos/?categoria=60&slug=veja">Veja</a></li>
								<li><a href="<?php echo site_url()?>/videos/?categoria=62&slug=jornal-da-tarde">Jornal da Tarde</a></li>
							</ul>                           
						</li>
						<li><a href="<?php echo site_url('audios'); ?>">Áudios</a>
							<ul class="children">
								<li><a href="<?php echo site_url()?>/audios/?categoria=49&slug=blog-veja">Blog Veja</a></li>
								<li><a href="<?php echo site_url()?>/audios/?categoria=57&slug=playboy">Playboy</a></li>
								<li><a href="<?php echo site_url()?>/audios/?categoria=59&slug=estadao">O Estado de S. Paulo</a></li>
								<li><a href="<?php echo site_url()?>/audios/?categoria=56&slug=jornal-do-brasil">Jornal do Brasil</a></li>
								<li><a href="<?php echo site_url()?>/audios/?categoria=60&slug=veja">Veja</a></li>
								<li><a href="<?php echo site_url()?>/audios/?categoria=61&slug=visao">Visão</a></li>
								<li><a href="<?php echo site_url()?>/audios/?categoria=62&slug=jornal-da-tarde">Jornal da Tarde</a></li>
							</ul>  
						</li>
						<li><a href="<?php echo site_url('livros'); ?>">Livros</a></li>
						<!--<li><a href="<?php echo site_url('contato'); ?>">Contato</a></li>-->
					</ul>
				</div>
			</div><!-- #access -->
		</div>
	</div><!--  #header -->
