<div class="cm-band-content">
  <span class="cm-head-gallery">Music</span>


    <div class="albom-content">

    </div>
    <div style="margin-top: 20px;">
        <div class="cm-gallery cm-alboms">
            <?php
            foreach ($alboms as $albom) {
                ?>
                <div class="photo-contaner">
                    <div class="photo" photo="<?= $albom->cover ?>" title="<?= $albom->title ?>" style="background-image: url('assets/uploads/cover/<?= $albom->cover ?>');"></div>
                    <div class="photo-title">
                        <?= $albom->title ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.cm-alboms').slick({
            //centerMode: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1
        });

    });
</script>