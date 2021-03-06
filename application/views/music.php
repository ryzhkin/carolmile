<div class="cm-band-content">
  <span class="cm-head-gallery">Music</span>
  <div class="cm-gallery-photo-caption">Photo Caption</div>
  <div class="cm-gallery-photo"></div>
  <div style="margin-bottom: 100px;">
        <div class="cm-gallery">
            <?php
            foreach ($videos as $video) {
                ?>
                <div class="photo-contaner">
                    <div class="photo" youtube="<?= $video->youtube ?>" photo="<?= $video->cover ?>" title="<?= $video->title ?>" style="background-image: url('<?= base_url() ?>assets/uploads/video/<?= $video->cover ?>');"></div>
                    <div class="photo-title">
                        <?= $video->title ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
  </div>




    <div id="jquery_jplayer"></div>
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
      <div id="jp_container" class="cm-music-player">
        <div class="cm-music-player-prev"></div>
        <div class="cm-music-player-action cm-music-player-play"></div>
        <div class="cm-music-player-next"></div>
        <div class="cm-music-player-progress">
            <div class="cm-music-player-progress2"></div>
        </div>
        <div class="cm-music-player-time jp-current-time">10:00</div>
      </div>
    </div>
    <div style="margin-top: 20px;">
        <div class="cm-gallery cm-alboms">
            <?php
         //   Common::xlog('music', $alboms);
            foreach ($alboms as $albom) {
                ?>
                <div class="photo-contaner">
                    <div albomID="<?= $albom->albom_id ?>" class="photo" photo="<?= $albom->cover ?>" title="<?= $albom->title ?>" style="background-image: url('<?=  base_url() ?>assets/uploads/cover/<?= $albom->cover ?>');"></div>
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

        var playSong = function () {
            jQuery('#jquery_jplayer').jPlayer("stop");
            if (jQuery('.cm-albom-list tr.active').length > 0) {
                jQuery('#jquery_jplayer').jPlayer("setMedia", {
                    mp3: jQuery('.cm-albom-list tr.active').attr('mp3')
                });
                jQuery('#jquery_jplayer').jPlayer("play");

                jQuery('.cm-music-player-action').removeClass('cm-music-player-play');
                jQuery('.cm-music-player-action').addClass('cm-music-player-pause');

            }
        }
        var addHandlers = function () {
          jQuery('#jquery_jplayer').jPlayer("stop");
          jQuery('.cm-music-player-progress2').css('width', "0%");
          jQuery('.cm-music-player-action').removeClass('cm-music-player-pause');
          jQuery('.cm-music-player-action').addClass('cm-music-player-play');
          jQuery('.cm-albom-list tr').off('click');
          jQuery('.cm-albom-list tr').on('click', function () {
              jQuery('.cm-albom-list tr').removeClass('active');
              jQuery(this).addClass('active');
              playSong();
          });
        }
        var getAlbum = function (albumID, onSuccess) {
          jQuery.post(window.location, {
            ajaxAction : 'getAlbum',
            albumID    : albumID
          }, function (res) {
             //console.log(res);
             if (res.ok) {
                if (typeof(res.html) == 'string') {
                  jQuery('.cm-albom-list').html(res.html);
                  addHandlers();

                  if (typeof(onSuccess) == 'function') {
                    onSuccess();
                  }
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
        jQuery('.cm-alboms .photo').on('click', function () {
            jQuery('.slick-slide').removeClass('current-photo');
            jQuery(this).parent().addClass('current-photo');
            jQuery('.cm-albom-cover').css('background-image', 'url("<?=  base_url() ?>assets/uploads/cover/' + jQuery(this).attr('photo') + '")');
            jQuery.cookie('albomID', jQuery(this).attr('albomID'), {path: '/'});
            getAlbum(jQuery(this).attr('albomID'), function () {
              //  playSong();
            });
        });

        jQuery('.cm-alboms .slick-active:first').addClass('current-photo');
        jQuery('.cm-albom-cover').css('background-image', 'url("<?=  base_url() ?>assets/uploads/cover/' + jQuery('.cm-alboms .slick-active:first .photo').attr('photo') + '")');
        jQuery('.cm-alboms .photo:first').click();

        jQuery(window).on('resize', function () {
          jQuery('.cm-music-player-progress').outerWidth(jQuery('.cm-music-player-progress').parent().outerWidth() - 140);
        });


        jQuery('#jquery_jplayer').jPlayer({
            ready: function () {

                if (jQuery.cookie('albomID') !== undefined) {
                    jQuery('.cm-albom-cover').css('background-image', 'url("<?=  base_url() ?>assets/uploads/cover/' + jQuery('.photo[albomID="' + jQuery.cookie('albomID') + '"]:first').attr('photo') + '")');
                    getAlbum(jQuery.cookie('albomID'), function () {
                       // playSong();
                    });
                } else {
                    getAlbum(jQuery('.cm-alboms .slick-active:first .photo').attr('albomID'), function () {
                       // playSong();
                    });
                }

                jQuery('.cm-music-player-action').on('click', function () {
                  if (jQuery(this).hasClass('cm-music-player-pause')) {
                    jQuery(this).removeClass('cm-music-player-pause');
                    jQuery(this).addClass('cm-music-player-play');
                    jQuery('#jquery_jplayer').jPlayer("pause");
                  } else
                  if (jQuery(this).hasClass('cm-music-player-play')) {
                    jQuery(this).removeClass('cm-music-player-play');
                    jQuery(this).addClass('cm-music-player-pause');
                    jQuery('#jquery_jplayer').jPlayer("play");
                  }
                });

            },
            timeupdate: function(event) {
                //my_extraPlayInfo.text(parseInt(event.jPlayer.status.currentPercentAbsolute, 10) + "%");
                jQuery('.cm-music-player-progress2').css('width', parseInt(event.jPlayer.status.currentPercentAbsolute, 10) + "%");
            },
            play: function(event) {
                //my_playState.text(opt_text_playing);
            },
            pause: function(event) {
                //my_playState.text(opt_text_selected);
            },
            ended: function(event) {
                //my_playState.text(opt_text_selected);
            },
            swfPath: "js/vendor/jplayer",
            cssSelectorAncestor: "#jp_container",
            supplied: "mp3",
            currentTime: '.jp-current-time',
            wmode: "window"
        });

        jQuery('.cm-music-player-next').on('click', function () {
           if (jQuery('.cm-albom-list tr.active').length > 0) {
             if (jQuery('.cm-albom-list tr.active').next().length > 0) {
               var cs = jQuery('.cm-albom-list tr.active').next();
               jQuery('.cm-albom-list tr').removeClass('active');
               jQuery(cs).addClass('active');
               playSong();
             } else {
               if (jQuery('.cm-albom-list tr:first').length > 0) {
                   var cs = jQuery('.cm-albom-list tr:first');
                   jQuery('.cm-albom-list tr').removeClass('active');
                   jQuery(cs).addClass('active');
                   playSong();
               }
             }
           }
        });

        jQuery('.cm-music-player-prev').on('click', function () {
            if (jQuery('.cm-albom-list tr.active').length > 0) {
                if (jQuery('.cm-albom-list tr.active').prev().length > 0) {
                    var cs = jQuery('.cm-albom-list tr.active').prev();
                    jQuery('.cm-albom-list tr').removeClass('active');
                    jQuery(cs).addClass('active');
                    playSong();
                } else {
                    if (jQuery('.cm-albom-list tr:last').length > 0) {
                        var cs = jQuery('.cm-albom-list tr:last');
                        jQuery('.cm-albom-list tr').removeClass('active');
                        jQuery(cs).addClass('active');
                        playSong();
                    }
                }
            }
        });

        jQuery('.cm-music-player-progress').on('click', function (e) {
            var parentOffset = $(this).parent().offset();
            //or $(this).offset(); if you really just want the current element's offset
            var relX = e.pageX - parentOffset.left;
            var relY = e.pageY - parentOffset.top;

            var percent = Math.round(((relX)/jQuery('.cm-music-player-progress').outerWidth())*100) - 12;
            if (percent < 0) percent = 0;
            if (percent > 100) percent = 100;
            jQuery('#jquery_jplayer').jPlayer("playHead", percent);
            //console.log(percent);

        });


        jQuery('.cm-gallery').slick({
            //centerMode: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1
        });
        jQuery('.cm-gallery .photo').on('click', function () {
            jQuery('.slick-slide').removeClass('current-photo');
            jQuery(this).parent().addClass('current-photo');
            jQuery('.cm-gallery-photo-caption').html(jQuery(this).attr('title'));
            var youtube = jQuery(this).attr('youtube');
            youtube = youtube.replace('watch?v=', 'embed/');
            jQuery('.cm-gallery-photo').html('<iframe width="825" height="465" src="' + youtube + '?rel=0&controls=0&showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>');
            jQuery('#jquery_jplayer').jPlayer("stop");
        });
        jQuery('.cm-gallery .slick-active:first').addClass('current-photo');
        jQuery('.cm-gallery-photo-caption').html(jQuery('.cm-gallery .slick-active .photo:first').attr('title'));
        var youtube = jQuery('.cm-gallery .slick-active .photo:first').attr('youtube');
        youtube = youtube.replace('watch?v=', 'embed/');
        jQuery('.cm-gallery-photo').html('<iframe width="825" height="465" src="' + youtube + '?rel=0&controls=0&showinfo=0&autoplay=0" frameborder="0" allowfullscreen></iframe>');



    });



</script>