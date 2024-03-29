<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard">
                                        <?php printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>
									
									
									<?php if(has_post_thumbnail()) { ?>
									<div class="post-featured-image">
									<a href=" <?php the_permalink(); ?>" title="<?php the_title_attribute(); ?> ">
									<?php the_post_thumbnail('medium');
									if(get_post(get_post_thumbnail_id())->post_excerpt) {
									echo '<div class="post-thumbnail-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</div>'; } ?>
									</div>
									<?php } ?>
									
								</header>

								<section class="entry-content cf">
									<?php the_excerpt(); //uncomment me if you want to load the paragraphs associated with the content?> 
								</section>

								<footer class="article-footer cf">
									
                 					<?php printf( '<p class="footer-category">' . __('', 'bonestheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>

								</footer>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
