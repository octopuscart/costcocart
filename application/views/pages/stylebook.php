<?php
$this->load->view('layout/header');

function truncate($str, $len) {
    $tail = max(0, $len - 10);
    $trunk = substr($str, 0, $tail);
    $trunk .= strrev(preg_replace('~^..+?[\s,:]\b|^...~', '...', strrev(substr($str, $tail, $len - $tail))));
    return $trunk;
}
?>


<!-- Slider -->
<section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
        <div class="container">
            <h4>our blog</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">our blog</li>
            </ol>
        </div>
    </div>
</section>

<!-- Content -->
<div id="content"> 

    <!-- Blog -->
    <section class="new-main blog-posts pad-t-b-60">
        <div class="container"> 

            <!-- News Post -->
            <div class="news-post" id="container">
                <div class="row"> 

                    <?php
                    foreach ($stylebook as $key => $value) {
                        ?>

                        <!-- POST -->
                        <div class="col-md-4 item-mas">
                            <article> <img class="img-responsive" src="https://admin.costcokart.com/assets/blog_images/<?php echo $value['image']; ?>" alt="" > <span>By Admin</span> <span>10 Nov, 2018</span> 
                                <a href="<?php echo site_url("styleTips/" . $value['id'] . "/" . $value['title']) ?>" class="news-tittle">
                                    <?php echo truncate($value['title'], 100); ?>
                                </a>
                                <p>
                                    <?php echo truncate($value['description'], 200); ?>                  </p>
                                <a href="#." class="red-more">Read More</a> 
                            </article>
                        </div>
                        <?php
                    }
                    ?>


                </div>
                </section>
            </div>
            <!-- End Content --> 







            <script src="<?php echo base_url(); ?>assets/theme/plugins/isotope.pkgd.min.js"></script>



            <?php
            $this->load->view('layout/footer');
            ?>
            <script type="text/javascript">
                /*-----------------------------------------------------------------------------------*/
                /*  MASONRY LAYOUT
                 /*-----------------------------------------------------------------------------------*/
                var $container = $('#container');
                $container.imagesLoaded(function () {
                    $container.isotope({
                        itemSelector: '.item-mas',
                        layoutMode: 'masonry'
                    });
                });
            </script>