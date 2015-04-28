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

    });
</script>