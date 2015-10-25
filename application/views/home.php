<div class="cm-logo"></div>
<?php
  $lng = ($this->uri->segment(2) !== null)?$this->uri->segment(2):'en';
  $text = array(
    'en' => '
    Welcome to the website of the musical ensemble CAROL MILE". Here you will learn the history of the group, the musicians, learn about our music projects, will be able to view photos and video, listen to our records. In addition, in the section "service", we offer a range of services with which you will be able to see. A pleasant journey through the website! Best musical regards your team of "CAROL MILE".
    ',
    'de' => '
    Herzlich Willkommen auf der Webseite von der Band „CAROL MILE“. Hier finden Sie die Geschichte der Band, sowie die Musiker und Projekte,  beziehungsweise unsere Veranstaltungen. Ebenfalls können Sie unsere Videos und Fotos von Auftritten sehen und unsere musikalischen Kompositionen anhören. Außerdem bieten wir Ihnen unter „Service“ eine Reihe von verschiedenen Diensten, mit denen Sie sich gerne näher befassen können, wenn Sie weiteres Interesse haben. Wir wünschen Ihnen noch viel Spaß auf unserer Seite!
    Mit freundlichen musikalischen Grüßen Ihre Band „CAROL MILE“.
    ',
    'ru' => '
    Добро пожаловать на сайт музыкального ансамбля  "CAROL MILE". Здесь Вы познакомитесь с историей группы, музыкантами, узнаете о наших музыкальных проектах, сможете посмотреть фото и видео, прослушать наши записи. Кроме этого, в разделе "сервис", мы предлагаем целый комплекс услуг, с которыми Вы так же сможете ознакомиться. Приятного путешествия по сайту!
    С наилучшими музыкальными пожеланиями, Ваша группа „CAROL MILE“.
    ',
  );


$s = [
    'Events:' => [
        'en' => 'Events:',
        'de' => 'Geschehen:',
        'ru' => 'События:',
    ],
];

?>
<div class="cm-text">
  <?= $text[$lng] ?>
</div>
<table>
    <tr style="vertical-align: top;">
        <td style="width: 30%; border: none; padding-top: 0;">
            <a style="text-decoration: none;" href="<?= base_url() ?>events/<?= $lng ?>">
            <h4 style="color: #ffea00;"><?= $s['Events:'][$lng] ?></h4>
            <img style="width:100%;" src="<?= base_url() ?>assets/img/asana.jpg">
            </a>
        </td>
        <td style="width: 60%; padding-top: 0; border: none;">
           <table>
               <tr style="vertical-align: top;">
                  <td style="border: none; width: 50%; padding-top: 0;">
                      <img style="width:100%;" src="<?= base_url() ?>assets/img/player1.jpg">
                  </td>
                  <td style="border: none; width: 50%; padding-top: 0;">
                      <div style="color: #ffea00;" class="cm-photo-label1">Eduard Miketin</div>
                      <div style="color: #ffea00;" class="cm-photo-label2">artistic director, multi-instrumentalist, DRUMS and VOCAL</div>
                  </td>
               </tr>

               <tr style="vertical-align: top;">
                   <td style="border: none; width: 50%; padding-top: 0;">
                       <img style="width:100%;" src="<?= base_url() ?>assets/img/player3.jpg">
                   </td>
                   <td style="border: none; width: 50%; padding-top: 0;">
                       <div style="color: #ffea00;" class="cm-photo-label1">Antonina Kovalchuk</div>
                       <div style="color: #ffea00;" class="cm-photo-label2">VOCAL</div>
                   </td>
               </tr>


               <tr style="vertical-align: top;">
                   <td style="border: none; width: 50%; padding-top: 0;">
                       <img style="width:100%;" src="<?= base_url() ?>assets/img/player2.jpg">
                   </td>
                   <td style="border: none; width: 50%; padding-top: 0;">
                       <div style="color: #ffea00;" class="cm-photo-label1">Mikchail Koifman</div>
                       <div style="color: #ffea00;" class="cm-photo-label2">bass guitar, VOCAL, rhythm synthesizer</div>
                   </td>
               </tr>


               <tr style="vertical-align: top;">
                   <td style="border: none; width: 50%; padding-top: 0;">
                       <img style="width:100%;" src="<?= base_url() ?>assets/img/player4_1.jpg">
                   </td>
                   <td style="border: none; width: 50%; padding-top: 0;">
                       <div style="color: #ffea00;" class="cm-photo-label1">Paul Bishkoy</div>
                       <div style="color: #ffea00;" class="cm-photo-label2">Guitar Accordion, Vocal, Arranger</div>
                   </td>
               </tr>


               <tr style="vertical-align: top;">
                   <td style="border: none; width: 50%; padding-top: 0;">
                       <img style="width:100%;" src="<?= base_url() ?>assets/img/player5_1.jpg">
                   </td>
                   <td style="border: none; width: 50%; padding-top: 0;">
                       <div style="color: #ffea00;" class="cm-photo-label1">Mikhail Prizmazonov</div>
                       <div style="color: #ffea00;" class="cm-photo-label2">SOUND PRODUCER</div>
                   </td>
               </tr>


           </table>
        </td>
    </tr>
</table>