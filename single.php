<?php get_header(); ?>


				
						<!-- ��erik Ba�lang�� -->
					<div class="icerik container">
					
								<div class="hiyerarsi">
									<li><a href="#">scAydv1 wordpress theme beta<span style="color:#f07929;">(%82)</span></a></li>
									
								</div>
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
										<div class="alt-icerik-yyt">
										<i class="fa fa-user"><p><?php the_author(); ?></p></i> <i class="fa fa-comment"><p><?php comments_number(); ?></p></i><i class="fa fa-calendar"><p><?php the_time('d F Y');?></p></i>
										 <div class="tag">
										<li><?php the_tags(); ?></li>

											</div>
										</div>
												
											
				<!-- ALT ��ER�K KUTU B�T�� --></div>	

												<div class="yorum-alani">
												<img src="<?php bloginfo('template_url'); ?>/img/profil2.jpg" height="100" width="100" alt="" />
												<span><strong>�smail G�k </strong><i>diyor ki; <br /></i>
													<p>Hatay/Erzin do�umluyum. Mustafa Kemal �niversites �skenderun MY�'da Bilgisayar Programc�l��� okuyorum. Freelancer olarak web tasar�m i�leri yapmaktay�m.</p>
												</span>
												</div>
										<?php comments_template(); ?>
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