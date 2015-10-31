<div class="cm-band-content">
 <div class="row" style="margin: 0; padding-top: 20px;">
     <div class="col-6">
        <div class="cm-say"></div>
        <div style="margin-top: 155px;">
           <p class="cm-contact-contact">
               EDUARD MYKETYN
           </p>
            <p class="cm-contact-contact">
                Carol Mile<br/>
                Munich, Germany<br/>
                Phone: +49 17657472354<br/>
                Email: fred.myketyn@gmail.com
            </p>
        </div>
     </div>
     <div class="col-6 cm-contact-form">
         <?= form_open(base_url().'contact') ?>
         <h5>Your Name</h5>
         <?= form_error('username', '<div class="cm-error">* ', '</div>') ?>
         <input type="text" name="username" value="<?= ($result)?'':set_value('username') ?>" size="50" />

         <h5>Your Email</h5>
         <?= form_error('email', '<div class="cm-error">* ', '</div>') ?>
         <input type="text" name="email" value="<?= ($result)?'':set_value('email') ?>" size="50" />

         <h5>Subject</h5>
         <?= form_error('subject', '<div class="cm-error">* ', '</div>') ?>
         <input type="text" name="subject" value="<?= ($result)?'':set_value('subject') ?>" size="50" />

         <h5>Message</h5>
         <?= form_error('message', '<div class="cm-error">* ', '</div>') ?>
         <textarea name="message">
             <?= ($result)?'':set_value('message') ?>
         </textarea>

         <div style="text-align: right; margin-top: 10px;">
            <button class="cm-submit" type="submit" value="SEND">SEND</button>

         </div>

         </form>


     </div>
 </div>
</div>


<!--<div id="light" class="cm-popup">This is the lightbox content. <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
<div id="fade" class="cm-overlay"></div>-->

<?php if ($result) {?>
  <script type="text/javascript">
    alert('Thank you for your message. We will respond for you to a short time.');
  </script>
<?php }?>