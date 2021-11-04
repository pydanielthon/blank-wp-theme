<?php

/* Block One Template */
$Logo_image = get_field('logo_ikona');
$logo_text = get_field('logo_text');
$phone = get_field('phone') ?: 'number';
$naglowek_1 = get_field('naglowek_1') ?: '';
$naglowek_2 = get_field('naglowek_2') ?: 'one_nagłowek_2';
$paragraf_1 = get_field('paragraf_1') ?: 'one_paragraf_1';
$fotka = get_field('fotka') ?: 'one_paragraf_1';
$link_przycisk  = get_field('link_przycisk') ?: 'link_przycisk';

?>

<section class="intro" >
        <div class="col-container py-5">
            <div class="row logo">
                <div class="col">
                    <div class="row d-flex justify-content-end ps-3 ps-md-0 pb-5 ">
                        <div class="col-md-11 col-lg-9 d-flex align-items-center ">
                            <img src="<?php  echo $Logo_image['url'] ?>" alt="" class="logo-image">
                            <h5><?php echo $logo_text; ?></h1>
                            <span class="text-after-logo">Customers <span class="text-after-customer">Call Us:</span><?php echo $phone; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-end align-items-center ps-3 ps-md-0">
                <div class=" col-md-6 col-xl-4">
                    <div class="row d-flex justify-content-end ">
                        <h4><?php echo $naglowek_1 ?></h4>
                        <h1><?php echo $naglowek_2 ?></h1>
                        <p><?php echo $paragraf_1 ?></p>
                        <div>
                            <a href="<?php echo $link_przycisk ?>" class="btn-intro">Download</a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-5 circle-container pt-5 pt-md-0 d-flex justify-content-start justify-content-sm-end pe-5 justify-content-md-start">
                    <div class="circle circle-white-big">
                        <div class="circle circle-purple-dark">
                            <div class="circle circle-purtple-white">
                                <div class="circle circle-white-small">
                                    <img src="<?php  echo $fotka['url'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       <div class="bg-1">
       </div>
       <div class="bg-2">
       </div>
    </section>