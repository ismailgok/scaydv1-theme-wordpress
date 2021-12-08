<?php get_header(); ?>

						<!-- Ýçerik Baþlangýç -->
					<div class="icerik container">
									<!-- HAZIRLANACAK
								<div class="hiyerarsi">
									 <li><a href="<?php bloginfo('url');?>">ismailgok.net</a> <i class="fa fa-angle-double-right"></i></li>
									<li><a href="#"><?php the_title(); ?></a> <i class="fa fa-angle-double-right"></i></li> 
									<li><a href="#">Wordpress Eðitim Seti</a></li>  
								</div>-->
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class="alt-icerik">
			<!-- ALT ÝÇERÝK KUTU BAÞLANGIÇ --><div class="alt-icerik-kutu"> 
								<div class="alt-icerik-baslik"><h3><?php the_title(); ?></h3></div>
								<div class="alt-icerik-kutu-resim">
									<?php if (has_post_thumbnail()) { the_post_thumbnail('altsayfa',array('class'=>'alt-icerik-kutu-resim'));
												 }
												 else{
												 ?>
												 <img class="img-responsive" src="<?php bloginfo("template_url"); ?>/img/yoksa.jpg" alt="Yazý Resmi" height="220" width="580">
												 
												 <?php } ?>

								</div>

								<?php the_content(); ?>
								
											
				<!-- ALT ÝÇERÝK KUTU BÝTÝÞ --></div>	

										
										
										<?php endwhile; else: ?>
									<?php _e('Sonuç Bulunamadý.'); ?>
									<?php endif; ?>

								</div> <!-- ALT ÝÇERÝK -->


						
							<?php get_sidebar(); ?>


					
						</div>
							
					</div>
					<!-- Ýçerik #-->

				</div>
	 	</div>
	 	<?php get_footer(); ?>