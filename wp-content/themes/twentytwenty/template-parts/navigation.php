<?php
/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$nextPost = get_next_post();
$prevPost = get_previous_post();

if ( $nextPost || $prevPost ) {
    $prevThumbnailImage = get_the_post_thumbnail($prevPost->ID, array(100,100) );
    $nextThumbnailImage = get_the_post_thumbnail($nextPost->ID, array(100,100) );

    if(empty($prevThumbnailImage)){
        $prevThumbnailImage = '<img width="100" height="100" src="/wp-content/uploads/2021/06/e9432fccf28a953514f077b86e5e657a_L1.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt="" loading="lazy" srcset="/wp-content/uploads/2021/06/e9432fccf28a953514f077b86e5e657a_L1.jpg 150w, /wp-content/uploads/2021/06/e9432fccf28a953514f077b86e5e657a_L1.jpg 300w, /wp-content/uploads/2021/06/e9432fccf28a953514f077b86e5e657a_L1.jpg 1024w, /wp-content/uploads/2021/06/e9432fccf28a953514f077b86e5e657a_L1.jpg 768w" sizes="(max-width: 100px) 100vw, 100px" />';
    }
    if(empty($nextThumbnailImage)){
        $nextThumbnailImage = '<img width="100" height="100" src="/wp-content/uploads/2021/06/e9432fccf28a953514f077b86e5e657a_L1.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt="" loading="lazy" srcset="/wp-content/uploads/2021/06/e9432fccf28a953514f077b86e5e657a_L1.jpg 150w, /wp-content/uploads/2021/06/e9432fccf28a953514f077b86e5e657a_L1.jpg 300w, /wp-content/uploads/2021/06/e9432fccf28a953514f077b86e5e657a_L1.jpg 1024w, /wp-content/uploads/2021/06/e9432fccf28a953514f077b86e5e657a_L1.jpg 768w" sizes="(max-width: 100px) 100vw, 100px" />';
    }
	?>a

    <div class="container-content">
        <div class="row">
            <?php if($prevPost) {?>
                <div class="col-6">
                    <h3>Предыдущая запись</h3>
                    <?php previous_post_link('%link',"$prevThumbnailImage  <p>%title</p>", TRUE); ?>
                </div>
            <?php } ?>
            <?php if($nextPost) { ?>
                <div class="col-6">
                    <h3>Следующая запись</h3>
                    <?php next_post_link('%link',"$nextThumbnailImage  <p>%title</p>", TRUE); ?>
                </div>
            <?php } ?>
        </div>
    </div>

	<?php
}
