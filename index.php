<section id="noticias">
	<div id="centraliza" class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>Destaque</h1>
				<div class="box">
                    <?php query_posts(array('home_category' => 'destaques', 'showposts' => 3));

                        if(have_posts()):
                        while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

                        // aqui eu pego o conteúdo do post
                        $conteudo_do_post = get_the_content(); 
                        //aqui eu defino a quantidade de caracter que vai ser exibido
                        $caracteres = '50';            
                    ?>  
    				<div class="box2">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('miniatura', array('align' => 'left')); ?>
    					<?php echo'<p>' . trim_letras( $conteudo_do_post, $caracteres ) . '</p>';?>
    				</div>
                    <?php endwhile; endif; ?>
    				<!-- FIM BOX -->
				</div>
				<p class="text-center"><a href="<?php bloginfo('url'); ?>/?page_id=41"><button>Mais Destaques</button></a></p>
			</div>
		</div>
	</div>
</section>
<!-- FIM NOTICIAS -->