<?php
get_header();

<article>;
if(have_posts()){
    while(have_posts()){
    the_post();
    get_temlate_part('template-parts/content', 'archive');
    }
}
</article>;
get_footer();
?>