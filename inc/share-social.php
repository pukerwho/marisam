<?php
// CОЗДАЕМ КНОПКИ ДЛЯ СОЦ СЕТЕЙ
function crunchify_social_sharing_buttons($content) {
  global $post;
  if(is_singular()){
  
    // Get current page URL 
    $crunchifyURL = urlencode(get_permalink());
 
    // Get current page title
    $crunchifyTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
    // $crunchifyTitle = str_replace( ' ', '%20', get_the_title());
    
    // Get Post Thumbnail for pinterest
    $crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
 
    // Construct sharing URL without using any script
    $twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
    $telegramURL = 'https://t.me/share/url?url='. $crunchifyURL .'&text='. $crunchifyTitle .'';
    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
    $viberURL = 'viber://pa?chatURI='. $crunchifyURL .'';
    $linkedinUrl = 'https://www.linkedin.com/shareArticle?mini=true&url='. $crunchifyURL .'&title='. $crunchifyTitle .'&summary=&source=';
    $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;
    $whatsappURL = 'https://wa.me/?text='. $crunchifyURL .'';

    $content .= '<ul class="flex items-center flex-wrap share-group">';

    $content .= '<li class="share-item"><a href="'.$facebookURL.'" target="_blank" rel="noreferrer" class="share-link icon-facebook "><span class="hidden">facebook</span></a></li>';

    $content .= '<li class="share-item"><a href="'.$twitterURL.'" target="_blank" rel="noreferrer" class="share-link icon-twitter "><span class="hidden">twitter</span></a></li>';

    $content .= '<li class="share-item"><a href="'.$linkedinUrl.'" target="_blank" rel="noreferrer" class="share-link icon-linkedin "><span class="hidden">linkedin</span></a></li>';

    $content .= '<li class="share-item"><a href="'.$telegramURL.'" target="_blank" rel="noreferrer" class="share-link icon-telegram "><span class="hidden">telegram</span></a></li>';

    // $content .= '<li class="share-item"><a class="share-link share-whatsapp" href="'.$whatsappURL.'" target="_blank"></a></li>';

    // $content .= '<li class="share-item"><a class="share-link share-pinterest" href="'.$pinterestURL.'" target="_blank"></a></li>';

    $content .= '</ul>';
    echo $content;
  }else{
    // if not a post/page then don't include sharing button
    echo '';
  }
};

add_action( 'show_social_share_buttons', 'crunchify_social_sharing_buttons' );

?>