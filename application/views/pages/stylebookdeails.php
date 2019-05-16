<?php
$this->load->view('layout/header');

function truncate($str, $len) {
    $tail = max(0, $len - 10);
    $trunk = substr($str, 0, $tail);
    $trunk .= strrev(preg_replace('~^..+?[\s,:]\b|^...~', '...', strrev(substr($str, $tail, $len - $tail))));
    return $trunk;
}
?>

<section class="page_title translucent_bg_color_dark image_fixed t_align_c relative wrapper" style="margin-top: 0px;padding: 0px;">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5" style="    font-size: 22px;
            line-height: 25px;">Styling Tips</h1>
        <!--breadcrumbs-->

    </div>
</section>




<div class="section_offset">
    <div class="container">
        <div class="row">
            <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                <!--post-->
                <article class="clearfix m_bottom_45 m_xs_bottom_30 blog_post">
                    <!--date,category,likes-->
                    <div class="blog_side_container w_sm_auto f_left f_xs_none m_xs_bottom_5">



                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=224707228091621&autoLogAppEvents=1"></script>
                        <div class="fb-share-button" data-href="<?php echo site_url('styleTips/' . $styleobj->id . "/" . $styleobj->title); ?>" data-layout="box_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(site_url('styleTips/' . $styleobj->id . "/hongkongbespoketailors")); ?>;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                        <!--likes-->

                        <a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo urlencode(site_url('styleTips/' . $styleobj->id . "/hongkongbespoketailors")); ?>" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_green bg_color_purple_hover color_light_hover bg_light_3 r_corners m_bottom_5 m_top_5 tr_all">
                            <i class="fa fa-whatsapp d_inline_m" style="font-size: 40px;"></i>
                        </a>
                        <!-- AddThis Button BEGIN -->
                        <a target="_blank" href="http://twitter.com/intent/tweet?text=<?php echo urlencode(site_url('styleTips/' . $styleobj->id . "/hongkongbespoketailors")); ?>" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_blue bg_color_purple_hover color_light_hover bg_light_3 r_corners m_bottom_5 m_top_5 tr_all">
                            <i class="fa fa-twitter d_inline_m" style="font-size: 40px;"></i>
                        </a>

                    </div>





                    <!--post content-->
                    <figure>
                        <img src="<?php echo base_url(); ?>assets/images/styletips/<?php echo $styleobj->image; ?>" alt="" class="r_corners m_bottom_20" >

                        <figcaption>
                            <h3 class="fw_light color_dark"><?php echo $styleobj->title; ?></h3>

                            <p class="fw_light m_bottom_12" style="    white-space: pre-line;">
                                <?php echo $styleobj->description; ?>
                            </p>
                            <!--tags-->
                            <i class="icon-tag-1 color_grey_light_2 d_inline_m m_right_5 fs_large tags_icon"></i>
                            <ul class="d_inline_m fw_light">
                                <?php
                                $tags = $styleobj->tag;
                                $tagarray = explode(", ", $tags);
                                foreach ($tagarray as $key => $value) {
                                    ?>
                                    <li class="d_inline_m">
                                        <a href="#" class="button_type_1  color_red r_corners tt_uppercase fs_medium tr_all f_left m_right_10 m_md_bottom_10"><?php echo $value; ?></a>
                                    </li>

                                <?php } ?>
                            </ul>
                        </figcaption>

                    </figure>
                </article>

            </section>
            <aside class="col-lg-3 col-md-3 col-sm-3">

                <div class="tabs m_bottom_50 m_xs_bottom_30" data-easytabs="true">
                    <!--tabs nav-->

                    <!--tabs content-->
                    <div id="popular" class="active" style="display: block;">
                        <!--popular-->
                        <h5 class="fw_light color_dark m_bottom_20">Recent Posts</h5>
                        <?php foreach ($stylebook as $key => $value) { ?>


                            <article class="clearfix m_bottom_10 m_xs_bottom_20 border_grey r_corners">
                                <a href="<?php echo site_url("styleTips/" . $value['id'] . "/" . $value['title']) ?>" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
                                    <img src="<?php echo base_url(); ?>assets/images/styletips/blank.png" alt="" style="background: url(<?php echo base_url(); ?>assets/images/styletips/<?php echo $value['image']; ?>);background-size:cover;    background-position: center;">
                                </a>
                                <a href="<?php echo site_url("styleTips/" . $value['id'] . "/" . $value['title']) ?>" class="color_dark d_block lh_medium m_bottom_5" style="width: 150px;
                                   white-space: nowrap;
                                   overflow: hidden;
                                   text-overflow: ellipsis;"><b>  <?php echo truncate($value['title'], 100); ?></b></a>
                                <p>
                                    <?php echo truncate($value['description'], 40); ?>
                                </p>
                                <ul class="dotted_list color_grey_light_2 article_stats">
                                    <li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="color_grey_light_2 fs_small">
                                            <i class="icon-tag-1"></i>
                                        </a>

                                        <?php
                                        $tags = $value['tag'];
                                        $tagarray = explode(", ", $tags);
                                        foreach ($tagarray as $key => $value) {
                                            ?>
                                        <a href="<?php echo site_url("stylingTipsTag?tag=$value");?>" class="fs_small color_grey">
                                                <i><?php echo $value; ?></i>
                                            </a>,
                                            <?php
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </article>
                        <?php } ?> 

                    </div>
                </div>


                <div class="m_bottom_45 m_xs_bottom_30">
                    <h5 class="fw_light color_dark m_bottom_23">Tags</h5>
                    <!--tags list-->
                    <ul class="hr_list tags_list">
                        <?php foreach ($tagsarray as $key => $value) { 
                          
                            ?>
                            <li class="m_right_5 m_bottom_5"><a href="<?php echo site_url("stylingTipsTag?tag=".$key);?>" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium"><?php echo $key;?></a></li>
                        <?php } ?> 
                    </ul>
                </div>


<!--                advertising area
                <div class="advertising_area t_align_c bg_light_2 color_grey m_bottom_45 m_xs_bottom_30">
                    <span class="tt_uppercase translucent">Advertisment</span>
                    <img src="<?php echo base_url(); ?>assets/images/zeganoffer.jpg" >                </div>
-->

            </aside>
        </div>
    </div>
</div>



<script src="<?php echo base_url(); ?>assets/theme/plugins/isotope.pkgd.min.js"></script>



<?php
$this->load->view('layout/footer');
?>