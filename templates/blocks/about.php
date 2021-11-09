<?php
$getTitle = get_field('title');
$getDesc = get_field('description');
$getImage = get_field('image');
$getLinkText = get_field('link_text');
$getLink = get_field('link');
$getAbout = get_field('about');
$getBg = get_field('background_color');

?>

<div class="about" style="background-color: <?= $getBg ?>; <?php if($getBg == '#000000'){echo 'color:white';}?>">
<div class="container">
            <div class="about__section-content">
                <h3 class="py-5">
                    <?= $getTitle ?>
                </h3>
                <img class="px-5" src="<?= $getImage['url'] ?>">
                <div class="row pt-5 pb-5">
                    <div class="col-md-6">
                        <p>
                            <?= $getDesc ?>
                        </p>
                        <a style="<?php if($getBg == '#000000'){echo 'color:white';}?>" href="<?= $getLink ?>">
                            <p><?= $getLinkText ?></p>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="row ps-5">
                    <?php foreach($getAbout as $about){  ?>
                        <div class="col-md-12 text-start ps-5">
                            <span class="bold"><?= $about['title'] ?></span>
                            <span><?= $about['second'] ?></span>

                        </div>
                    
                    <?php } ?>
                    </div>
                    </div>
                </div>
        </div>
        </div>
</div>