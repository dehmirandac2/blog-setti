<?php get_header(); ?>
	
	  <?php

	  			$count_value = new WP_Query( array(
					'post_type'      => 'fotos',
            		'post_status'    => 'publish',
            		'posts_per_page' => 1000000000000,		
            		'orderby' 		 => 'post_date',
            		'order' 		 => 'desc',
            		'offset'         => $offset,
            		'taxonomy'		 => 'categoria_veiculos',
					'term' 			 => $_GET['slug']
	  			));

	  			$loop = new WP_Query( array(
					'post_type'      => 'fotos',
            		'post_status'    => 'publish',
            		'posts_per_page' => 10,		
            		'orderby' 		 => 'post_date',
            		'order' 		 => 'desc',
            		'offset'         => $offset,
            		'taxonomy'		 => 'categoria_veiculos',
					'term' 			 => $_GET['slug'],
					'paged'			 => $paged
				) ); 

				$count = $count_value->post_count;

	            if ( get_query_var( 'paged' ) )
					$paged = get_query_var('paged');
				else if ( get_query_var( 'page' ) )
					$paged = get_query_var( 'page' );
				else
					$paged = 1;

				$per_page    = 10;
				$total_terms = 12; // This needs to be the total number of series (count the number of terms in the series with a function)
				$offset      = $per_page * ( $paged - 1) ;

				if ( $_GET['categoria'] )
				{
				   $args['taxonomy'] = 'categoria_veiculos';
				   $args['term'] = $_GET['slug'];
				}

				$titulo = get_term($_GET['categoria'], 'categoria_veiculos');

			?>

	<div class="wrapper">
		<div id="container">
			<div id="content" class="fotos">
				
					<ul id="breadcrumb">
						<li><a href="<?php echo site_url(); ?>">Início</a><span>></span></li>
						<li><a href="<?php echo site_url('fotos'); ?>">Fotos</a></li>
						<li><? echo (isset($_GET['categoria']) ? '>  ' .$titulo->name : ''); ?></li>
					</ul>
					<div class="second-header-intern">
						<h2 class="entry-title" style="margin-bottom: 10px">Fotos
							<?php if ( $_GET['categoria'] ) {?>
								- <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $args['term']?>.jpg">
							<?php } ?>
						</h2>
						<div class="wrap open-text">
							

	<?php if ($args['term'] == "blog-veja"){ ?>
								<p>O desafio sedutor, irresistível, apareceu na fase madura de minha carreira, depois de haver deixado por vontade própria a Editora Abril e funções executivas exercidas por longos anos ali e em outros veículos: criar um blog no site da revista <i>Veja</i> , para tratar dos assuntos que bem entendesse, e da forma que achasse melhor.
</p>
								<p>Por convite de Eurípedes Alcântara, diretor da revista, lá fui eu: já sessentão, vi-me alçado à total contemporaneidade na profissão, atuando apenas na internet. Ritmo intenso, resposta imediata dos leitores, todo um aprendizado, um recomeço revigorante -- e divertido.
</p>
								<p>Foram quase cinco anos extraordinários, mais de 10 mil posts publicados, 50 milhões de acessos, 300 mil comentários.
</p>
								<p>Uma seleção desse trabalho você encontra nesta área do site.</p>

							<?php } ?>
							<?php if ($args['term'] == "nominimo"){ ?>
								<p>Trabalhar por puro prazer, na companhia só de amigos, num veículo em que não havia patrões -- só colegas. Quer coisa melhor?</p>

								<p>O título www.nominimo.com.br era uma brincadeira de seus idealizadores, Alfredo Ribeiro, o Tutty Vasques, e Xico Vargas, e ironizava a fracassada experiência ambiciosa de empresários que haviam investido no portal NO.com (Notícia e Opinião) mas não tiveram a coragem de bancar seu conteúdo. </p>

								<p>Os executivos financeiros que supervisionavam o NO aporrinhavam os jornalistas o tempo todo com a ladainha de que os custos e a estrutura precisavam ser "mínimos". Então, quando acabou o NO, Alfredo e Xico criaram o Nomínimo.</p>

								<p>Nesse site delicioso, com amigos queridos com quem já convivera por anos a fio na <i>Veja</i> e no <i>Jornal do Brasil</i> -- além de Alfredo e Xico, gente do quilate de Marcos Sá Corrêa, que fora o diretor de Redação do NO, Augusto Nunes, Zuenir Ventura, Villas-Boas Corrêa, Sérgio Rodrigues, Guilherme Fiúza, Arthur Dapieve e tantos outros -- produzi de 2002 a 2007 uma coluna semanal de informações e comentários, sobretudo políticos, que depois se tornaria um blog, "Política & Cia".</p>

								<p>Era bom demais para durar, e acabou em junho de 2007, por sufocação financeira.</p>
							<?php } ?>
							<?php if ($args['term'] == "exame"){ ?>
								<p>Eu tinha velha admiração pela revista Exame, extremamente bem feita, com uma abordagem positiva da economia e dos negócios no país, com apuração impecável e texto de primeira.  </p>

								<p>Foi, assim, com alegria que recebi convite do diretor do Grupo Exame da Editora Abril, Sidnei Basile -- ótimo jornalista e figura humana impecável, prematuramente falecido em 2011 --, para escrever na revista. Eu havia deixado um pesado cargo executivo na Editora Abril e a própria empresa, depois de vinte anos de trabalho em três "encarnações" em diferentes épocas, desejoso de ser mais dono de meu tempo.</p>

								<p>Ali surgiu a coluna "De Olho no Poder", que mantive do final de 2001 até meados de 2004. Muitos dos temas ali tratados mantêm atualidade. Espero que os eventuais visitantes desta área do site tenham, se lerem algumas delas, o mesmo prazer que tive ao escrevê-las.</p>
							<?php } ?>
							<?php if ($args['term'] == "no-ponto-com"){ ?>
								<p>O portal NO.com (Notícia e Opinião) foi um projeto ambicioso financiado pelos grupos Opportunity, GP investimentos e La Fonte com o compromisso de os empresários e executivos não interferirem na linha editorial.</p>

								<p>Surgiu em abril de 2000, no auge da "bolha da internet", e investiu em talentos.</p>

								<p>Teve como editor um dos melhores jornalistas do país em qualquer época, Marcos Sá Corrêa, que montou uma equipe espetacular: na redação, trabalhavam jornalistas como Ancelmo Gois, Flávio Pinheiro, Dorrit Harazim, Tutty Vasques, Xico Vargas, Joaquim Ferreira dos Santos, Zuenir Ventura ou Arthur Dapieve.</p>

								<p>A lista de colaboradores era igualmente rica -- e eclética: nela figuravam personalidades como João Moreira Salles, Drauzio Varela, Aldir Blanc, Rita Lee, Heloísa Buarque de Holanda, Sérgio Bermudes, Elena Landau ou Kenneth Maxwell.</p>

								<p>Embora tivesse aceitação muito boa, o NO acabaria em 2002, por não atender âs apressadas expectativas dos investidores sobre resultados. Enquanto durou, foi uma honra haver integrado o time.</p>
							<?php } ?>
							<?php if ($args['term'] == "observatorio-da-imprensa"){ ?>
								<p>Minha admiração por Alberto Dines, idealizador e diretor do <i>Observatório da Imprensa</i> , vem de longe. Eu o conheci na entrada do plenário da Câmara dos Deputados, em Brasília, em 1968, apresentado pelo jornalista D'Alembert Jaccoud.</p>

								<p>Dines foi um dos eixos fundamentais da imensa transformação que transformou o Jornal do Brasil entre o final dos anos 50 e o começo dos 60 no mais moderno e importante do país, e depois foi seu editor entre 1962 e 1974. </p>

								<p>Quando eu o conheci, jovem repórter que era, fiquei em estado de graça. Ele (que certamente não se lembra do episódio) era um mito, o homem mais influente da imprensa no país. Anos depois, na Editora Abril, nos tornamos amigos.</p>
					
								<p>Sua carreira extraordinária acabou, com o tempo, se encaminhando para a crítica de mídia, algo inexistente no Brasil até então e que depois de deixar o comando do <i>JB</i> ele iniciaria com seu "Jornal dos Jornais", na <i>Folha de S. Paulo</i>. O <i>Observatório</i>, com suas conexões com a academia e em versões em TV e rádio, se tornaria o grande ponto de referência de reflexões sobre a mídia no país desde que começou, em 1996.</p>

								<p>Os textos que lá publiquei me ajudaram a pensar e repensar meu próprio fazer.
							<?php } ?>
							<?php if ($args['term'] == "o-globo"){ ?>
								<p>Vivi em Brasília durante cinco anos e meio, poucos meses antes de ingressar na Universidade de Brasília -- vésperas do golpe militar de 1964 -- até poucos meses depois de formado. </p>
								<p>Eram, portanto, os anos do auge da curiosidade pelo mundo, e, leitor de jornais desde o começo da adolescência, devorava três e até quatro por dia.</p>
								<p>Até então, vivendo no Paraná, tivera pouco contato com jornais do Rio como <i>O Globo</i>, que passou então a fazer parte do cardápio de leituras.</p>
								<p>Anos depois, a partir de 1971, já vivendo e trabalhando em São Paulo, adquiri uma espécie de vínculo sentimental com o jornal, pois meu primeiro grande mentor na profissão ainda em Brasília, o grande jornalista e amigo Evandro Carlos de Andrade, se transferira para o Rio e começara a realizar a profunda reforma que modernizou e aumentou a relevância do jornal fundado em 1925.</p>
								<p>Pelas mãos generosas do diretor de Opinião do jornal, Luiz Garcia, passei a colaborar com <i>O Globo</i> com Evandro ainda no comando, em 1993 -- ele assumiria o jornalismo da TV Globo dois anos depois.</p>
							<?php } ?>
							<?php if ($args['term'] == "folha-de-sao-paulo"){ ?>
								<p>Tendo passado por uma dezena de diferentes empregos ao longo de minha carreira, a <i>Folha de S. Paulo</i>, por alguma razão, foi um dos veículos em que não trabalhei, embora sempre haja mantido não poucos amigos em sua redação ou em sucursais.</p>
								<p>Lia o jornal desde sempre, mas passei a prestar mais atenção a ele após as mudanças radicais promovidas a partir dos anos 80 por Claudio Abramo e Otávio Frias Filho.</p>
								<p>Exerci por dois anos o cargo de editor-chefe do principal concorrente da <i>Folha</i>, o <i>Estadão</i>, e nesse período (1990-1992), sob o comando do diretor de Redação Augusto Nunes, dei o melhor de mim para estarmos sempre na frente do pessoal da Rua Barão de Limeira.</p>
								<p>A despeito de discordar de determinadas posturas editoriais da <i>Folha</i>, sempre respeitei, entre outros, o fato transcendental de ser a primeira publicação brasileira a ter, com seu Manual, não apenas orientações de texto, como em geral ocorre, mas uma verdadeira Constituição escrita, contendo seus princípios, fundamentos e regras éticas e de trabalho.</p>
								<p>Gostei muito, portanto, de escrever para a página de <i>Opinião</i> do jornal.
							<?php } ?>
							<?php if ($args['term'] == "estadao"){ ?>
								<p>A profissão de jornalista me propiciou muita coisa boa -- e a raríssima e feliz circunstância de, um dia, chefiar o jornal onde comecei minha carreira para valer.</p>
								<p>Comecei minha vida de repórter na sucursal de <i>O Estado de S. Paulo</i> em Brasília, no remoto dia 1º de maio de 1966. </p>
								<p>Era encarregado da cobertura dos principais ministérios. Durante um certo período, meus chefes me deslocaram para a cobertura do Judiciário -- nada mau para quem estudava Direito, e gostava.</p>
								<p>Em 1967, porém, Evandro Carlos de Andrade, jornalista de grande bagagem e enorme talento, assumiu a chefia da sucursal e, no segundo semestre, resolveu me experimentar na área política. </p>
								<p>Como sempre gostei muito do tema, tratava-se de um peixe sendo arremessado à água.</p>
								<p>Da cobertura política para o <i>Estadã</i> Evandro acabou me levando a escrever para o <i>Jornal da Tarde</i>, então em seu fulgurante início, e acabei me tornando exclusivo do filhote do <i>Estadão</i> até me mudar para São Paulo e ir trabalhar na sede do <i>JT</i>.</p>
								<p>A vida passa -- e, do <i>JT</i>, passei ao longo dos anos para a extinta <i>Visão</i>, para <i>Veja</i>, para <i>IstoÉ</i>, para <i>Playboy</i>, para o <i>Jornal do Brasil</i> e, lá pelas tantas, em 1990, meu velho amigo Augusto Nunes, diretor de Redação do <i>Estadão</i>, me convida para ser o editor-chefe do jornal, o sujeito que tocava o dia-a-dia de uma redação com 300 jornalistas e dezenas de sucursais e correrspondentes. Entre as sucursais, a de Brasília, onde eu começara... 24 anos antes!</p>
								<p>Alguns dos jornalistas que ensinaram aquele foca de 20 anos a partir de 1966 ainda se encontravam lá.</p>
								<p>A trabalheira como editor-chefe não me impedia de escrever com frequência e pude, mesmo, realizar algumas entrevistas e reportagens.</p>
								<p>A experiência no <i>Estadão</i>, que ambicionávamos tornar o <i>The New York Times</i> brasileiro -- para isso fizemos uma grande reforma, trouxemos para o time de colaboradores gente como Paulo Francis, Joelmir Beting, Luis Fernando Verissimo e Rubem Braga --, durou pouco mais de quatro anos para Augusto e pouco menos de dois anos para mim. </p>
								<p>Divergências entre os acionistas constituíram o grande obstáculo para terminarmos o que pretendíamos.</p>
								<p>Mas foi inesquecível: como esquecer que dirigi o jornal em que comecei para valer na grande imprensa?</p>
							<?php } ?>
							<?php if ($args['term'] == "jornal-do-brasil"){ ?>
								<p>Eu estava muito insatisfeito no veículo em que atuava quando surgiu a mão amiga de Augusto Nunes. Ele deixara há algum tempo seu brilhante período de quatro anos como redator-chefe de VEJA, trabalhara num projeto na Editora Abril que não parecia decolar e aceitou prontamente um convite do nosso amigo comum Marcos Sá Corrêa para tornar-se diretor regional do <i>Jornal do Brasil</i> em São Paulo.</p>

<p>O grande jornal começava a passar, sob o comando de Marcos, por uma reformulação que o faria viver seu derradeiro período glorioso, e precisava revigorar suas maiores sucursais, Brasília e São Paulo. Augusto me chamou para ser seu segundo, ou editor regional. Uma vez no <i>JB</i>, atirei-me novamente ao trabalho com energia e prazer.</p>

<p>Permanecemos juntos no <i>JB</i> por pouco mais de um ano, até que Augusto recebeu o convite irrecusável para dirigir (e reformular) o <i>Estadão</i>. Queria que eu o seguisse como redator-chefe, mas preferi continuar vivendo a experiência transformadora no <i>JB</i>, agora como diretor regional e reportando-me diretamente ao Marcos.</p>

<p>Tudo somado, e a despeito de ter tido ótimas passagens por outros veículos, foi o período mais feliz de minha trajetória no jornalismo.</p>

<p>Meu chefe era um dos melhores jornalistas e seres humanos que já conheci; seus lugares-tenentes, na sede do jornal, no Rio, eram profissionais de primeira e amigos queridos; desfrutava de grande independência; pude contratar excelentes valores para juntar-se à sucursal; integrava os quadros de uma empresa extremamente fidalga e, a despeito da responsabilidade de dirigir um time com 40 profissionais, produzi intensamente -- artigos, entrevistas e reportagens.</p>

<p>Fiquei no <i>JB</i> de 1986 a 1990. Os artigos abaixo incluem também colaborações posteriores, de outra fase do jornal. As mais de mil notas para diferentes colunas do <i>JB</i> que produzi no período -- como o "Informe JB", pilotado por Ancelmo Gois, e a igualmente prestigiosa coluna de Zózimo Barrozo do Amaral -- estão no espaço intitulado, justamente, "Notas para colunas". </p>
							<?php } ?>
							<?php if ($args['term'] == "playboy"){ ?>
								Texto do Playboy
							<?php } ?>
							<?php if ($args['term'] == "visao"){ ?>
								<p>Foi uma aventura trabalhar na <i>Visão</i>, prestigiosa revista quinzenal que pertencera a um grupo internacional mas que se "nacionalizara" completamente em mãos do publicitário e empresário Saïd Farhat.</p>
								<p>Era uma revista <i>cult</i>, de não muitos leitores, mas leitores influentes, e tocada por uma redação pequena mas muito qualificada.</p>
								<p>Farhat vendeu a revista ao empresário Henry Maksoud, em 1974, e este chamou o grande repórter do <i>Jornal da Tarde</i> Ewaldo Dantas Ferreira para dirigi-la.  </p>
								<p>Com Ewaldo, tomaram o rumo da revista um grupo de jornalistas do <i>JT</i> que andavam insatisfeitos: Carlos Brickmann, Rolf Kuntz, João Vitor Strauss, Gabriel Manzano, Fernando Morais, Antonio Carlos Fon, Miriam Paglia Costa e eu. </p>
								<p>A entrada de Maksoud no ramo editorial, porém, provocou uma enorme reação em determinados meios jornalísticos. Desatou-se uma feroz campanha contra ele, que começava por chamá-lo de forma pejorativa e imprópria de "empreiteiro", quando na verdade era dono de uma empresa de projetos e planejamento que detinha o maior número de PhDs no Hemisfério Sul, a Hidroservice.</p>
								<p>Da <i>Tribuna na Imprensa</i>, o jornalista Hélio Fernandes era quem mais fustigava Maksoud. Inevitavelmente, e quase de imediato, o tiroteio começou a atingir os jornalistas que ele contratara -- a um tal ponto que um grupo de colegas respeitado de São Paulo viu-se obrigado a pagar um anúncio no <i>Estadão</i> para dizer, de público, que éramos decentes.</p>
								<p>Mesmo assim, e com resistências e animosidades dentro da antiga equipe, conseguimos produzir uma boa revista, até que as sucessivas e nem sempre corteses interferências de Maksoud no trabalho da Redação levou a que um grupo de jornalistas pegassem seu boné, após biológicos 9 meses, a começar pelo diretor, Ewaldo, e pelo redator-chefe, Rolf Kuntz. </p>
								<p>Eu fui um deles, e dali pulei para a grande escola de jornalismo de minha trajetória -- quase dez anos em <i>Veja</i>.</p>
								<p>Enquanto em <i>Visão</i>, porém, tive oportunidade de escrever matérias que me agradaram. Algumas, mesmo vistas décadas depois, até que não estão mal. Se você quiser conferir, este site contém exemplos desse trabalho, abaixo.</p>
							<?php } ?>
							<?php if ($args['term'] == "jornal-da-tarde"){ ?>
								Texto do Jornal da Tarde
							<?php } ?>
							<?php if ($args['term'] == "outras-publicacoes"){ ?>
								Texto de outras publicações
							<?php } ?>

						</div>
					</div>
					<div class="third-header-intern">
						<div class="second-navigation">
							<span class="text-select">Mais fotos de:</span>
							<?php $taxonomy = get_terms('categoria_veiculos');?>
                            <ul class="list-selects">
						    	<li class="choice-select">veículos</li>
					    		<ul>			
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
						</div>
						<div class="info-search">
                            <div class="pagination">
                            	<?php pagination_per_category($count); ?>
                            </div>
                        </div>
					</div>
					<div class="entry-content">
				


			<div class="gallery">
           <!-- <? foreach ( $results as $post ) : setup_postdata($post); ?>
				<dl class="gallery-item">
					<dt class="gallery-icon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'thumb-100')); ?></a></dt>
					<dd class="title-gallery-caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<dd class="gallery-caption-content"><?php the_excerpt_limit('15'); ?></dd>
					<span class="categories-posts">
						<?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
                            <? foreach ( $taxonomy as $tax ) : ?>
                                <a class="categories" href="<?= site_url() ?>/fotos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
                            <? endforeach ?>
                    </span>
				</dl>
            <? endforeach; ?>-->

        <div class="float-left">

                <?php $counter = 0; ?>
                
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php $counter++ ?>
                <?php if ($counter % 2 != 0): ?>
				<dl class="gallery-item">
					<dt class="gallery-icon"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full', array('class' => 'thumb-100')); ?></a></dt>
					<dd class="title-gallery-caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<dd class="gallery-caption-content"><?php the_excerpt_limit('40'); ?></dd>
					<span class="categories-posts">
						<?php if (get_the_terms( $post->ID, 'categoria_veiculos' )){?>
							<?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
		                    	<? foreach ( $taxonomy as $tax ) : ?>
		                        	<a class="categories" href="<?= site_url() ?>/textos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
		                    	<? endforeach ?>
		                <?php } else{ ?>
		            		<a class="categories" href="#">Sem veículo</a>
		            	<?php }?>
                    </span>
				</dl>

                <?php endif ?>
			<?php endwhile; ?>
		</div>

		<div class="float-right">

                <?php $counter = 0; ?>
                
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php $counter++ ?>
                <?php if ($counter % 2 == 0): ?>
				<dl class="gallery-item">
					<dt class="gallery-icon"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full', array('class' => 'thumb-100')); ?></a></dt>
					<dd class="title-gallery-caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<dd class="gallery-caption-content"><?php the_excerpt_limit('40'); ?></dd>
					<span class="categories-posts">
						<?php if (get_the_terms( $post->ID, 'categoria_veiculos' )){?>
							<?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
		                    	<? foreach ( $taxonomy as $tax ) : ?>
		                        	<a class="categories" href="<?= site_url() ?>/textos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
		                    	<? endforeach ?>
		                <?php } else{ ?>
		            		<a class="categories" href="#">Sem veículo</a>
		            	<?php }?>
                    </span>
				</dl>

                <?php endif ?>
			<?php endwhile; ?>
		</div>
			<!--<div class="navigation">
  			<div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
  			<div class="alignright"><?php next_posts_link('More &raquo;') ?></div>
            

			</div>-->
			
				</div>
				<div class="pagination pagination-bottom" style="margin-top: 10px;">
					<?php pagination_per_category($count); ?>
                </div>
			</div>
		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>