

<!-- Start campaian video Section -->

<section class="bg-compaian-video">
    <div class="compaian-video-overlay">
        <div class="container">
            <div class="row">
            <?php foreach($video as $video) { ?>
                <div class="compaian-video">
                    <a href="https://www.youtube.com/embed/<?php echo $video->video ?>" data-rel="lightcase:myCollection"><img src="<?php echo base_url() ?>assets/tema/assets/images/home02/video-icon.png" alt="<?php echo nl2br($video->keterangan) ?>" /></a>
                    <h3><?php echo $video->judul ?></h3>
                </div>
                <!-- .compaian-video -->
                <?php } ?>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .compaian-video-overlay -->
</section>

<!-- End campaian video Section -->
