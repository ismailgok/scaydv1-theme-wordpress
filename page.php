<?php get_header(); ?>

						<!-- ��erik Ba�lang�� -->
					<div class="icerik container">
									<!-- HAZIRLANACAK
								<div class="hiyerarsi">
									 <li><a href="<?php bloginfo('url');?>">ismailgok.net</a> <i class="fa fa-angle-double-right"></i></li>
									<li><a href="#"><?php the_title(); ?></a> <i class="fa fa-angle-double-right"></i></li> 
									<li><a href="#">Wordpress E�itim Seti</a></li>  
								</div>-->
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class="alt-icerik">
			<!-- ALT ��ER�K KUTU BA�LANGI� --><div class="alt-icerik-kutu"> 
								<div class="alt-icerik-baslik"><h3><?php the_title(); ?></h3></div>
								<div class="alt-icerik-kutu-resim">
									<?php if (has_post_thumbnail()) { the_post_thumbnail('altsayfa',array('class'=>'alt-icerik-kutu-resim'));
												 }
												 else{
												 ?>
												 <img class="img-responsive" src="<?php bloginfo("template_url"); ?>/img/yoksa.jpg" alt="Yaz� Resmi" height="220" width="580">
												 
												 <?php } ?>

								</div>

								<?php the_content(); ?>
								
											
				<!-- ALT ��ER�K KUTU B�T�� --></div>	

										
										
										<?php endwhile; else: ?>
									<?php _e('Sonu� Bulunamad�.'); ?>
									<?php endif; ?>

								</div> <!-- ALT ��ER�K -->


						
							<?php get_sidebar(); ?>


					
						</div>
							
					</div>
					<!-- ��erik #-->

				</div>
	 	</div>
	 	<?php get_footer(); ?>