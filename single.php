<?php get_header(); ?>


				
						<!-- Ýçerik Baþlangýç -->
					<div class="icerik container">
					
								<div class="hiyerarsi">
									<li><a href="#">scAydv1 wordpress theme beta<span style="color:#f07929;">(%82)</span></a></li>
									
								</div>
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
										<div class="alt-icerik-yyt">
										<i class="fa fa-user"><p><?php the_author(); ?></p></i> <i class="fa fa-comment"><p><?php comments_number(); ?></p></i><i class="fa fa-calendar"><p><?php the_time('d F Y');?></p></i>
										 <div class="tag">
										<li><?php the_tags(); ?></li>

											</div>
										</div>
												
											
				<!-- ALT ÝÇERÝK KUTU BÝTÝÞ --></div>	

												<div class="yorum-alani">
												<img src="<?php bloginfo('template_url'); ?>/img/profil2.jpg" height="100" width="100" alt="" />
												<span><strong>Ýsmail Gök </strong><i>diyor ki; <br /></i>
													<p>Hatay/Erzin doðumluyum. Mustafa Kemal Üniversites Ýskenderun MYÖ'da Bilgisayar Programcýlýðý okuyorum. Freelancer olarak web tasarým iþleri yapmaktayým.</p>
												</span>
												</div>
										<?php comments_template(); ?>
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