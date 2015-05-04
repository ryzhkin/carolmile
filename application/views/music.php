<div class="cm-band-content">
  <span class="cm-head-gallery">Music</span>


    <div class="albom-content">
      <div class="row">
        <div class="col-6">
          <div class="cm-albom-cover">

          </div>
        </div>
        <div class="col-6">
            <div class="cm-albom-list">
              <table>
                <tr>
                  <td>1. Name ....</td>
                  <td>5:10</td>
                </tr>
                <tr class="active">
                  <td>2. Name ....</td>
                  <td>5:10</td>
                </tr>
                <tr>
                  <td>3. Name ....</td>
                  <td>5:10</td>
                </tr>
              </table>
            </div>
        </div>
      </div>
      <div class="cm-music-player">
        <div class="cm-music-player-prev"></div>
        <div class="cm-music-player-next"></div>
        <div class="cm-music-player-progress">
            <div class="cm-music-player-progress2"></div>
        </div>
        <div class="cm-music-player-time">10:00</div>
      </div>
    </div>
    <div style="margin-top: 20px;">
        <div class="cm-gallery cm-alboms">
            <?php
            foreach ($alboms as $albom) {
                ?>
                <div class="photo-contaner">
                    <div albomID="<?= $albom->albom_id ?>" class="photo" photo="<?= $albom->cover ?>" title="<?= $albom->title ?>" style="background-image: url('assets/uploads/cover/<?= $albom->cover ?>');"></div>
                    <div class="photo-title">
                        <?= $albom->title ?>
                    </div>
                    <data></data>
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

        var getAlbum = function (albumID) {
          jQuery.post(window.location, {
            ajaxAction : 'getAlbum',
            albumID    : albumID
          }, function (res) {
             //console.log(res);
             if (res.ok) {
                if (typeof(res.html) == 'string') {
                  jQuery('.cm-albom-list').html(res.html);
                }
             }
          });
        }

        jQuery('.cm-alboms').slick({
            //centerMode: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1
        });
        jQuery('.cm-gallery .photo').on('click', function () {
            jQuery('.slick-slide').removeClass('current-photo');
            jQuery(this).parent().addClass('current-photo');
            jQuery('.cm-albom-cover').css('background-image', 'url("assets/uploads/cover/' + jQuery(this).attr('photo') + '")');

            getAlbum(jQuery(this).attr('albomID'));
        });

        jQuery('.slick-active:first').addClass('current-photo');
        jQuery('.cm-albom-cover').css('background-image', 'url("assets/uploads/cover/' + jQuery('.slick-active:first .photo').attr('photo') + '")');
        getAlbum(jQuery('.slick-active:first .photo').attr('albomID'));

        jQuery(window).on('resize', function () {
          jQuery('.cm-music-player-progress').outerWidth(jQuery('.cm-music-player-progress').parent().outerWidth() - 140);
        });

    });
</script>