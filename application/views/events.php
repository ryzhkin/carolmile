<div class="cm-band-content">
   <span class="cm-head-gallery">Events</span>
   <div style="margin-top: 100px; margin-bottom: 170px;">
        <div class="cm-events">
            <?php
            foreach ($events as $event) {
                ?>
                <div class="poster-contaner">
                    <div class="poster" poster="<?= $event->poster ?>" title="<?= $event->title ?>" style="background-image: url('assets/uploads/events/<?= $event->poster ?>');">

                    </div>
                    <div class="poster-title">
                        <?= $event->title ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
   <div class="activePoster"></div>

   <div style="margin-top: 50px;">
        <div class="cm-gallery cm-alboms">
            <?php
            foreach ($alboms as $albom) {
                ?>
                <div class="photo-contaner">
                    <div albomID="<?= $albom->albom_id ?>" class="photo" photo="<?= $albom->cover ?>" title="<?= $albom->title ?>" style="background-image: url('assets/uploads/cover/<?= $albom->cover ?>');"></div>
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



<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.cm-events').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        });

        if (jQuery('.slick-active').length >= 3) {
            jQuery('.activePoster').css('background-image', jQuery(jQuery('.slick-active')[1]).find('.poster').css('background-image'));
        }
        jQuery('.cm-events').on('afterChange', function(event, slick, currentSlide) {
          if (jQuery('.slick-active').length >= 3) {
            jQuery('.activePoster').css('background-image', jQuery(jQuery('.slick-active')[1]).find('.poster').css('background-image'));
          }
        });

        jQuery('.cm-alboms').slick({
            //centerMode: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1
        });

        jQuery('.photo').on('click', function () {
           //console.log(jQuery(this).attr('albomID'));
           jQuery.cookie('albomID', jQuery(this).attr('albomID'), {path: '/'});
           document.location = '<?= base_url() ?>music'
        });

    });
</script>