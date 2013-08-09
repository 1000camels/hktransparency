	<?php

	function largo_excerpt( $post, $sentence_count = 5, $use_more = true, $more_link = '', $echo = true ) {
		/*if ( is_home() && strpos( $post->post_content, '<!--more-->' ) && ( !$use_more ) ) : // if we're on the homepage and the post has a more tag, use that
			$output = '<p>' . strip_tags( get_the_content( $more_link ) ) . '</p>';
		elseif ( $post->post_excerpt ) : // if it has the optional excerpt set, use THAT
			//if ( !$use_more ) :
				$output = '<p>' . get_the_excerpt() . '</p>';
			//else :
			//	$output = '<p>' . get_the_excerpt() . ' <a href="' . get_permalink() . '">' . $more_link . '</a></p>';
			//endif;
		else : // otherwise we'll just do our best and make the prettiest excerpt we can muster
			$output = largo_trim_sentences( get_the_content(), $sentence_count );
			$output .= '<a href="' . get_permalink() . '">' . $more_link . '</a>';
			$output = str_replace( '(more...)', '', $output );
			$output = apply_filters( 'the_content', $output );
		endif;*/

		$output = get_the_content();
		$output = apply_filters( 'the_content', $output );

		if ( $echo )
			echo $output;

		return $output;
	}