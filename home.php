



        <?php


get_header();
?>
<main class=mnew>
<div class="container">
    <h2 class="newst py-5 display-1">OUR NEWS</h2>
    
    <p id="demo" class="laikas"></p>
    <!-- <h4 class="text-block31111">NEWS</h4> -->
</div>
<!-- sidebar -->
<div class="container">
    <div class="row ">
        <div class="col-9">

    <main id="main" class="content-wrapper">

        <?php if ( have_posts() ) : ?>

           

            <?php
            // Start the Loop.
            while ( have_posts() ) :
                // You can list your posts here
                the_post();
                ?>
               
<div class="half ps-5 pt-5">

<!-- kad galetume koreguoti futured images -->
<?php
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
                    <div class="archive-item">
                    <a href="<?php the_permalink(); ?>">
                <!-- cia kas bus imama is content archive ir pirma funkcija kad galetume koreguoti imagine -->
                <div style="background-image: url('<?php echo $featured_img_url; ?>');"class="post-thumbnail d-flex justify-content-center" >
                </div>
                        </a>
                    
                   
                    <div class="post-title">
                        
                        <a href="<?php the_permalink(); ?>">
                        <h5 class="pt-3 new-title"> <?php the_title(); ?></h5>
                        </a>
                    </div>

                    <div class="post-content" >
                        <?php the_excerpt(); ?>
                    </div>
                    
                </div>
                
                <img class="" src="../wp-content/themes/Baigiamasis/assets/images/bla/Arrow_read_more.png" alt="read more">
                                    <a href="<?php the_permalink(); ?>" class="ms-3 read">Read More</a>
                                    </div>

                                    
                
            <?php
            endwhile;

           
        else :
            // No Post Found
        endif;
        ?>
     
        </div>
        <div class="col-3">
            <div class="side d-flex flex-column align-items-center align-items-start px-3 pt-2 text-dark min-vh-100">

            <?php 
            dynamic_sidebar('sidebar-1');
            ?>

                <hr>
            </div>
        </div>
  
     
    </div>
</div>

<div class="top1">
                        <div class="col pt-5 pb-5  d-flex justify-content-end">
                        <button class="btn abutton31" onclick="history.back()">Go Back</button>
                            <button  class="btn abutton31" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle-fill fa-2x"></i></button>
                        </div>
                    </div>
            </div>
  
          </main><!-- #main -->

        












<?php get_footer();
?>












