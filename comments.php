<?php /** comment */ ?>

<div id="comments" class="comments-area">
    <?php // You can start editing here -- including this comment! ?>

    <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
        <hr>
    </h2>

    <ul class="commentlist">
        <?php
			wp_list_comments();
			?>
    </ul><!-- .commentlist -->

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
    <nav id="comment-nav-below" class="navigation" role="navigation">
        <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'twentytwelve' ); ?></h1>
        <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentytwelve' ) ); ?>
        </div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentytwelve' ) ); ?></div>
    </nav>
    <?php endif; // check for comment navigation ?>

    <?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) :
			?>
    <p class="nocomments"><?php _e( 'Comments are closed.', 'twentytwelve' ); ?></p>
    <?php endif; ?>

    <?php endif; // have_comments() ?>


</div><!-- #comments .comments-area -->