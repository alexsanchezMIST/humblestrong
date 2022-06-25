<? php
/**
 * Template Name: Content page template
 * Description: A blank page template for content-based pages.
 */

 $context = Timber::context();

 $timber_post = new Timber\Post();
 $context['post'] = $timber_post;
 Timber::render( array( 'pages/' . $timber_post->post_name . '.twig', 'template-blank.twig'), $context );

?>