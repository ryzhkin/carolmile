<?php
$lng = ($this->uri->segment(2) !== null)?$this->uri->segment(2):'en';



$s = [
    'НАШИ ПАРТНЕРЫ' => [
        'en' => 'OUR PARTNERS',
        'de' => 'UNSERE PARTNER',
        'ru' => 'НАШИ ПАРТНЕРЫ',
    ],
];

?>

<div class="cm-band-content" style="min-height: 800px;">
   <h2 style="text-align: center;"><?= $s['НАШИ ПАРТНЕРЫ'][$lng] ?></span></h2>
   <table>
       <tr>
           <td style="border: none; width: 20%; font-size: 18px;"><img style="width: 100%;" src="<?= base_url() ?>/assets/img/lakrima.png"></td>
           <td style="border: none; font-size: 18px;"><a href="http://lakrima.eu/">http://lakrima.eu/</a></td>
       </tr>
       <tr>
           <td style="border: none; width: 20%; font-size: 18px;"><img style="width: 100%;" src="<?= base_url() ?>/assets/img/tomann.png"></td>
           <td style="border: none; font-size: 18px;"><a href="http://www.thomann.de/">http://www.thomann.de/</a></td>
       </tr>
       <tr>
           <td style="border: none; width: 20%; font-size: 18px;"><img style="width: 100%;" src="<?= base_url() ?>/assets/img/partner3.jpg"></td>
           <td style="border: none; font-size: 18px;"><a href="http://pianist-taras.de/">http://pianist-taras.de/</a></td>
       </tr>
   </table>

</div>



