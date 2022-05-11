<?php
get_header();
?>

<main class=mnew>
    <div class="container">
      
        <h2 class=" newst py-5 display-1">OUR NEWS</h2>
        
        </div>
    </div>
    <!-- sidebar -->
    
    <div class="container">
        <div class="row ">
        
            <div class="col-9 ">
            
            <?php
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
                <!-- cia kas bus imama is content srchive -->
                <div style="background-image: url('<?php echo $featured_img_url; ?>');"class="post-thumbnail1 d-flex justify-content-center" >
                    <a href="<?php the_permalink(); ?>">
                        </a>
                    </div>
                <h2 class="single-post d-flex justify-content-center pt-5 pb-5"><?php single_post_title(  ); ?></h2>
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', 'article');
                    }
                }
                ?>
                
                <!-- cia komentarai tagai ir pan apacioj teksto bus  -->
                <div class="top2">
                        <div class="col pt-5 pb-5  d-flex justify-content-end">
                            <button  class="btn abutton3" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle-fill fa-2x"></i></button>
                        </div>
                    </div>
            </div>


                <!-- sidebaras -->
                <div class="col-3">
            <div class="side d-flex flex-column  align-items-center align-items-start px-3 pt-2 text-dark min-vh-100">
            <?php 
            dynamic_sidebar('sidebar-1');
            ?>






                <!-- <ul class="nav nav-pills flex-column  align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link  px-0">
                            <div class="col mt-3">
                                <div class="input-group rounded">
                                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                        aria-describedby="search-addon" />
                                    <span class="input-group-text border-0" id="search-addon">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 ">
                            <div class="cate col">
                                
                                <ul class="cate1 px-4 py-3">
                                    <h5 class="">Categories</h5>
                                    <li class="ms-3">Business </li>
                                    <li class="ms-3">Business</li>
                                    <li class="ms-3">Business</li>
                                    <li class="ms-3">Business</li>
                                </ul>
                            </div>
                        </a>
                       
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <div class=" resent col">
                                <div class="resent1 px-3 py-3">
                                    <h5>Reasent Post</h5>
                                    <div class="list-inline pt-3">
    
                                        <img class="in  list-inline-iteam"
                                            src="../wp-content/themes/Baigiamasis/assets/images/nuotraukos/pexels-fauxels-3183156.jpg" class="img-fluid " alt="Post"
                                            height="40" width="50">
                                        <h6 class="in1 pt-2 list-inline-iteam"> Build Sustainable Business Strategy</h6>
                                    </div>
                                    <div class="list-inline pt-3">
                                        <img class="in  list-inline-iteam"
                                            src="../wp-content/themes/Baigiamasis/assets/images/nuotraukos/pexels-fauxels-3184160.jpg" class="img-fluid " alt="Post"
                                            height="40" width="50">
                                        <h6 class="in1 pt-2 list-inline-iteam"> Build Sustainable Business Strategy
                                        </h6>
                                    </div>
                                    <div class="list-in pt-3">
                                        <img class="in list-inline-iteam"
                                            src="../wp-content/themes/Baigiamasis/assets/images/nuotraukos/pexels-vojtech-okenka-392018.jpg" class="img-fluid " alt="Post"
                                            height="40" width="50">
                                        <h6 class="in1 pt-2 list-inline-iteam"> Build Sustainable Business Strategy
                                        </h6>
                                    </div>
                                    <div class="list-inline pt-3">
                                        <img class="in  list-inline-iteam"
                                            src="../wp-content/themes/Baigiamasis/assets/images/nuotraukos/pexels-pixabay-265087.jpg" class="img-fluid " alt="Post"
                                            height="40" width="50">
                                        <h6 class="in1 pt-2 list-inline-iteam"> Sustainable Business Strategy</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle ">
                            <div class="coment col">
                                <div class="coment1 px-3 py-2">
                                    <h5 class="py-3">Reasent Coments</h5>
                                    <h6 class="py-1">Egle Miseviciute</h6>
                                    <p class="py-1">Buvo labai grazu ir skanu ir viskas buvo labai gerai</p>
                                    <h6 class="py-1">Egle Miseviciute</h6>
                                    <p class="py-1">Buvo labai grazu ir skanu ir viskas buvo labai gerai</p>
                                    <h6 class="py-1">Egle Miseviciute</h6>
                                    <p class="py-1">Buvo labai grazu ir skanu ir viskas buvo labai gerai</p>
                                </div>
                            </div>
                        </a>
                       
                    </li>
                    <li>
                        <a href="#"  class="nav-link px-0 align-middle">
                            <div class="tags col">
                                <div class="tags1  py-2">
                                    <h5 class="pt-4 ms-3">Tags</h5>
                                    <h6 class="tag btn ms-1 pt-2 ps-2">Business</h6>
                                    <h6 class="tag btn ms-1 pt-2 ps-2">Business</h6>
                                    <h6 class="tag btn ms-1 pt-2 ps-2">Business</h6>
                                    <h6 class="tag btn ms-1 pt-2 ps-2">Business</h6>
                                </div>
                            </div>
                        </a>
                            
                    </li>
                    
                </ul> -->
                
                <hr>
            </div>
        </div>


            </div>
            
        </div></div></main>


        

            <?php get_footer();
            ?>