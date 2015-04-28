<div class="cm-band-content">
    <span class="cm-head-gallery">Gallery</span>
    <div class="cm-gallery-photo-caption">Photo Caption</div>
    <div class="cm-gallery-photo"></div>
    <div>
      <div class="cm-gallery">
        <?php
         foreach ($photos as $photo) {
        ?>
        <div class="photo-contaner">
           <div class="photo" photo="<?= $photo->photo ?>" title="<?= $photo->title ?>" style="background-image: url('assets/uploads/gallery/<?= $photo->photo ?>');"></div>
           <div class="photo-title">
              <?= $photo->title ?>
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
      jQuery('.cm-gallery').slick({
          //centerMode: true,
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 1
      });
      jQuery('.slick-slide.slick-active[data-slick-index="1"]').addClass('current-photo');
      jQuery('.cm-gallery-photo').css('background-image', 'url("assets/uploads/gallery/' + jQuery('.slick-slide.slick-active[data-slick-index="1"] .photo').attr('photo') + '")');
      jQuery('.cm-gallery-photo-caption').html(jQuery('.slick-slide.slick-active[data-slick-index="1"] .photo').attr('title'));
      /*jQuery('.cm-gallery').on('afterChange', function(event, slick, currentSlide) {
          jQuery('.slick-slide').removeClass('current-photo');
          var currentPhoto = jQuery('.slick-slide.slick-active[data-slick-index="' + currentSlide + '"]');
          jQuery(currentPhoto).addClass('current-photo');
          jQuery('.cm-gallery-photo').css('background-image', 'url("assets/uploads/gallery/' + jQuery(currentPhoto).find('.photo').attr('photo') + '")');
          jQuery('.cm-gallery-photo-caption').html(jQuery(currentPhoto).find('.photo').attr('title'));
      });*/
      jQuery('.cm-gallery .photo').on('click', function () {
         jQuery('.slick-slide').removeClass('current-photo');
         jQuery(this).parent().addClass('current-photo');
         jQuery('.cm-gallery-photo').css('background-image', 'url("assets/uploads/gallery/' + jQuery(this).attr('photo') + '")');
         jQuery('.cm-gallery-photo-caption').html(jQuery(this).attr('title'));
      });


  });
</script>