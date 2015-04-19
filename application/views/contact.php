<div class="cm-band-content">
 <div class="row" style="margin: 0; padding-top: 20px;">
     <div class="col-6">
        <div class="cm-say"></div>
        <div style="margin-top: 155px;">
           <p class="cm-contact-contact">
               Edward Myketin
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
         <input type="text" name="username" value="<?= set_value('username') ?>" size="50" />

         <h5>Your Email</h5>
         <?= form_error('email', '<div class="cm-error">* ', '</div>') ?>
         <input type="text" name="email" value="<?= set_value('email') ?>" size="50" />

         <h5>Subject</h5>
         <?= form_error('subject', '<div class="cm-error">* ', '</div>') ?>
         <input type="text" name="subject" value="<?= set_value('subject') ?>" size="50" />

         <h5>Message</h5>
         <?= form_error('message', '<div class="cm-error">* ', '</div>') ?>
         <textarea name="message">
             <?= set_value('message') ?>
         </textarea>

         <div style="text-align: right; margin-top: 10px;">
            <button class="cm-submit" type="submit" value="SEND">SEND</button>

         </div>

         </form>


     </div>
 </div>
</div>