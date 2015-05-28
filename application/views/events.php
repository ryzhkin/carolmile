<!--<script type="text/javascript" src="<?/*= base_url() */?>assets/js/vendor/jquery.waitforimages.min.js"></script>
<script type="text/javascript" src="<?/*= base_url() */?>assets/js/vendor/jquery.resize.js"></script>
<link rel="stylesheet" type="text/css" href="<?/*= base_url() */?>assets/js/vendor/carousel-3d/styles/jquery.carousel-3d.default.css"/>
<script type="text/javascript" src="<?/*= base_url() */?>assets/js/vendor/carousel-3d/jquery.carousel-3d.min.js"></script>-->

<div class="cm-band-content">
   <span class="cm-head-gallery">Events</span>

    <!--<div id="wrapper">
        <div id="myCarousel" data-carousel-3d>
            <?php
/*            foreach ($events as $event) {
            */?>
                <img src="<?/*= base_url() */?>assets/uploads/events/<?/*= $event->poster */?>" style="height: 325px;"/>
            <?php /*} */?>
        </div>
    </div>-->

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
    function preload(arrayOfImages) {
        $(arrayOfImages).each(function(){
            $('<img/>')[0].src = this;
            // Alternatively you could use:
            // (new Image()).src = this;
        });
    }
    jQuery(document).ready(function () {
        jQuery('.cm-events').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        });

        if (jQuery('.slick-active').length >= 3) {
            jQuery('.activePoster').css('background-image', jQuery(jQuery('.slick-active')[1]).find('.poster').css('background-image'));
        }
       // jQuery('.activePoster').hide();



        jQuery('.cm-events .slick-track').on('mousedown', function () {
          //jQuery('.activePoster').fadeOut();
          jQuery('.activePoster').animate({
            opacity: 0.01
          });

        });

        jQuery('.cm-events .slick-track').on('mouseup', function () {
          console.log('mouseup');
          jQuery('.activePoster').css('background-image', jQuery(jQuery('.slick-active')[1]).find('.poster').css('background-image'));
          setTimeout(function () {
            //jQuery('.activePoster').fadeIn();
              jQuery('.activePoster').animate({
                  opacity: 1.0
              });
          }, 500);

        });


        jQuery('.cm-events .slick-prev, .cm-events .slick-next').on('click', function () {
           //jQuery('.activePoster').fadeOut();
            jQuery('.activePoster').animate({
                opacity: 0.01
            });
        });

        jQuery('.cm-events').on('afterChange', function(event, slick, currentSlide) {
          //console.log('afterChange');
          if (jQuery('.slick-active').length >= 3) {
            jQuery('.activePoster').css('background-image', jQuery(jQuery('.slick-active')[1]).find('.poster').css('background-image'));
            setTimeout(function () {
              //jQuery('.activePoster').fadeIn();
                jQuery('.activePoster').animate({
                    opacity: 1.0
                });
            }, 500);
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

        var images = [
        <?php  foreach ($events as $event) {
          echo "'".base_url()."assets/uploads/events/". $event->poster."',";
        } ?>
        ];
        preload(images);
        //console.log(images);
    });
</script>