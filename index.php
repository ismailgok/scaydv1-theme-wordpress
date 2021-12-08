<?php get_header(); ?>

<!-- Ýçerik Baþlangýç --><div class="icerik container"><!-- Ýçerik Container -->

<div class="hiyerarsi"><li><a href="#">scAydv1 wordpress theme beta<span style="color:#f07929;">(%82)</span></a></li></div>	

<div class="icerik-sol">

<div class="temizle"></div>



								

										

		<!-- ÝÇERÝK SOL KUTU --><div class="icerik-sol-kutu">

										<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

										<div class="makale-kutu"> <!-- Makale Kutu -->

										<div class="icerik-sol-kutu-baslik"><a href="<?php the_permalink(); ?>"><h3 class="bg-primary btn-success"><?php the_title(); ?></h3></a></div>

										<div class="cizgi2">

											<img src="<?php bloginfo('template_url'); ?>/img/img/navbg.png" height="5" width="600" alt="" />

										</div>

										<div class="icerik-sol-kutu-resim img-responsive">

											<?php if (has_post_thumbnail()) { the_post_thumbnail('anasayfa',array('class'=>'icerik-sol-kutu-resim'));

												 }

												 else{

												 ?>

												 <img class="img-responsive" src="<?php bloginfo("template_url"); ?>/img/profil.jpg" alt="Yazý Resmi" height="155" width="265">

												 

												 <?php } ?>

										</div>

										<div class="icerik-sol-kutu-yazi">

											<?php the_excerpt(); ?>

											<a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-default btn-xs devamini-oku">Devamýný Oku</button></a>

										</div>

										<div class="icerik-sol-kutu-yyt">

										<i class="fa fa-user">&nbsp; <?php the_author(); ?> </i> <i class="fa fa-comment">&nbsp;<?php comments_number('0 Yorum','1 Yorum','% Yorum'); ?></i><i class="fa fa-calendar">&nbsp;<?php the_time('d F Y'); ?></i> 

										</div>

											<div class="cizgi5">

												

											</div>

										</div> <!-- #Makale Kutu  -->



									<?php endwhile; else: ?>

									<?php _e('Sonuç Bulunamadý.'); ?>

									<?php endif; ?>



									<div class="sayfalama"><?php wp_pagenavi(); ?></div>



		<!-- ÝÇERÝK SOL KUTU BÝTÝÞ --></div>





						</div><!-- Ýçerik SOL -->

						<?php get_sidebar(); ?>

									

								</div> <!-- Ýçerik Container -->

					

					

<?php get_footer(); ?>







