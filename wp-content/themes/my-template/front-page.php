<?php get_header(); ?>
<main class="main">
<?php
// Vlastní dotaz pro získání jednoho příspěvku pro hlavní banner
$main_banner_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'tag'            => 'main-title',
    'order'          => 'DESC'
);

$main_banner_query = new WP_Query($main_banner_args);

if ($main_banner_query->have_posts()) : ?>
    <section class="main-banner">
        <?php while ($main_banner_query->have_posts()) : $main_banner_query->the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
                <button>
                    <?php the_post_thumbnail("large", array('class' => 'main-banner--image')); ?>
                    <?php the_post_thumbnail("large", array('class' => 'main-banner--image-mobile')); ?>
                </button>
            <?php endif; ?>
            <div class="main-banner__title">
                <h3 class="main-banner__title--heading"><?php the_title(); ?></h3>
            </div>
        <?php endwhile; ?>
    </section>
<?php else : ?>
    <p>Žádné příspěvky k zobrazení</p>
<?php endif;
wp_reset_postdata();
?>
<section class="main-flex">
<?php
// Vlastní dotaz pro získání pěti příspěvků pro články
$article_links_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 5,
    'orderby'        => 'date',
    'order'          => 'ASC'
);

$article_links_query = new WP_Query($article_links_args);

if ($article_links_query->have_posts()) : ?>
    <section class="article-links">
        <?php while ($article_links_query->have_posts()) : $article_links_query->the_post(); ?>
            <div class="article-links__article">
                <a class="article-links__article__link" href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', array('class' => 'article-links__article__link--image')); ?>
                        
                    <?php endif; ?>
                    <div class="article-links__article__link__text">
                        <h3 class="article-links__article__link__text--heading"><?php the_title(); ?></h3>
                        <div class="article-links__article__link__text--text">
                            <?php the_excerpt(); ?>
                        </div>
                        <span class="article-links__article__link__text--author">
                            <?php the_author(); ?>
                        </span>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    </section>

    <!-- Stránkování -->
    

<?php else : ?>
    <p>Žádné příspěvky k zobrazení</p>
<?php endif;
wp_reset_postdata();
?>


            
        <section class="main__video-and-articles">
             <section class="video">
            <iframe class="video--video" width="560" height="315" src="https://www.youtube.com/embed/HKcGcu1elCY?si=3cCvF9vdQRAfzyU5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
        </section>
        <section class="short-news">
            <div class="short-news__container">
                <h2 class="short-news__container--heading">Krátké zprávy</h2>
                <div class="short-news__container__news-scroll">

                    <div class="short-news__container__news-scroll__news-item">
                        <span class="short-news__container__news-scroll__news-item--time">10:51</span>
                        <p class="short-news__container__news-scroll__news-item--text">Předsednictvo ANO se k hlasování o vyloučení chomutovského primátora Marka Hrabáče sejde v úterý odpoledne. Návrh podala krajská organizace.</p>
                    </div>
                    <div class="short-news__container__news-scroll__news-item short-news__container__news-scroll__news-item-background">
                        <span class="short-news__container__news-scroll__news-item--time">10:50</span>
                        <p class="short-news__container__news-scroll__news-item--text">Kolem poledne se v Čechách místy objeví silnější bouřky s přívalovým deštěm, které se přes Vysočinu přesunou odpoledne a večer na Moravu a Slezsko.</p>
                    </div>
                    <div class="short-news__container__news-scroll__news-item">
                        <span class="short-news__container__news-scroll__news-item--time">10:42</span>
                        <p class="short-news__container__news-scroll__news-item--text">Zemětřesení, jeho síla se předběžně uvádí 7,1 stupně, ve čtvrtek zasáhlo západní Japonsko. Úřady vyhlásily varování před vlnou tsunami pro několik oblastí kolem jihozápadních ostrovů Kjúšú a Šikoku, informovala japonská veřejnoprávní televize NHK. Žádné podrobnosti o případných škodách zatím nejsou k dispozici.</p>
                    </div>
                </div>
                <div class="short-news__gradient"></div>
            </div>
        </section>
        </section>
       
        </section>
        


        



        <section class="carousel">
            <div class="carousel__wrapper">
                <div class="carousel__wrapper__container">
                    <h2 class="carousel__wrapper__container--title">Sledujte</h2>
                    <button class="carousel__wrapper__container__videos--button-left">                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="32" fill="none" viewBox="0 0 16 9"><path fill="currentColor" fill-rule="evenodd" d="M.293.293A1 1 0 0 1 1.613.21l.094.083L8 6.585 14.293.293a1 1 0 0 1 1.32-.083l.094.083a1 1 0 0 1 .083 1.32l-.083.094-7 7a1 1 0 0 1-1.32.083l-.094-.083-7-7a1 1 0 0 1 0-1.414Z" clip-rule="evenodd"></path></svg>
                    </button>
                    <button class="carousel__wrapper__container__videos--button-right">                        
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="32" fill="none" viewBox="0 0 16 9"><path fill="currentColor" fill-rule="evenodd" d="M.293.293A1 1 0 0 1 1.613.21l.094.083L8 6.585 14.293.293a1 1 0 0 1 1.32-.083l.094.083a1 1 0 0 1 .083 1.32l-.083.094-7 7a1 1 0 0 1-1.32.083l-.094-.083-7-7a1 1 0 0 1 0-1.414Z" clip-rule="evenodd"></path></svg>
                        </button>
                    <div class="carousel__wrapper__container__videos">
                    <?php
// Vlastní dotaz pro získání pěti příspěvků pro články
$article_links_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 27,
    'orderby'        => 'date',
    'tag'            => 'carousel',
    'order'          => 'ASC'
);

$article_links_query = new WP_Query($article_links_args);

if ($article_links_query->have_posts()) : ?>
    
        <?php while ($article_links_query->have_posts()) : $article_links_query->the_post(); ?>
        <div class="carousel__wrapper__container__videos__article">
            <button class="carousel__wrapper__container__videos__article__button">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail("medium", array('class' => 'carousel__wrapper__container__videos__article__button--image')); ?>
                <?php endif; ?>
                <h3 class="carousel__wrapper__container__videos__article__button--heading"><?php the_title(); ?></h3>
            </button>
           </div>
        <?php endwhile; ?>
    
<?php else : ?>
    <p>Žádné příspěvky k zobrazení</p>
<?php endif;
wp_reset_postdata();
?>
                        
                        

                        
                    </div>
                </div>
            </div>
        </section>
       


    </main>

    <?php get_footer();?>
   