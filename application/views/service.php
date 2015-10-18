<?php
$lng = ($this->uri->segment(2) !== null)?$this->uri->segment(2):'en';
$text = array(
    'en' => '
    <h2>YES!!!</h2> <h3> Professional live band can perform at your wedding, anniversary or corporate party !!!</h3>
    <h4>
     We work only "live"! No phonograms or Playback!
     His sound technical complex high-end of the company Electro Voice 6 kW nominal power!
     Professional Light!
     We work with your or our lead!
     We perform popular music in Russian, Ukrainian, English and other languages.
     Our repertoire includes pop, rock, retro and classic hits around the world.
     The program of presentations formed In accordance with the wishes of the customer.
     All you need to do is simply contact with us !!!
     </h4>
     <h3>
     As an example - Set-lit one of our performances:
     </h3>

    ',
    'de' => '
    <h2>JA !!!</h2> <h3> Professionelle Live-Band an Ihrer Hochzeit, Jubiläum oder Firmenfeier durchführen !!!</h3>
     <h4>
     Wir arbeiten nur "live"! Kein Tonträgern oder Playback!
     Sein Sound technischen komplexen High-End der Firma Electro Voice 6 kW Nennleistung!
     Professionelle Licht!
     Wir arbeiten mit Ihrem oder unseren Vorsprung!
     Wir führen populäre Musik in Russisch, Ukrainisch, Englisch und anderen Sprachen.
     Unser Repertoire umfasst Pop, Rock, Retro und klassischen Hits auf der ganzen Welt.
     Das Vortragsprogramm in Übereinstimmung mit den Wünschen des Kunden gebildet.
     Alles, was Sie tun müssen, ist einfach Kontakt mit uns !!!
     </h4>
     <h3>
     Als Beispiel - Set beleuchtete eine unserer Leistungen:
     </h3>
    ',
    'ru' => '
     <h2>ДА!!!</h2> <h3>Профессиональная концертная группа может выступить на Вашей свадьбе, Юбилее или корпоративе!!!</h3>
     <h4>
     Работаем только "вживую"! Никаких фонограмм или плейбеков!
     Свой звуко-технический комплекс высшего класса от фирмы Electro Voice номинальной мощностью 6кВт!
     Профессиональный свет!
     Работаем с Вашим или нашим ведущим!
     Мы исполняем популярную музыку на русском, украинском, английском и других языках.
     В нашем репертуаре поп-, рок-, ретро- и классические шлягеры всего мира.
     Программа выступлений формируется в соотвествии с пожеланиями заказчика.
     Все что Вам нужно, это просто связатся с нами!!!
     </h4>

    <h3>В качестве примера - сет-лит одного из наших выступлений:</h3>
    ',
);


$s = [
    'Service:' => [
        'en' => 'Service:',
        'de' => 'Service:',
        'ru' => 'Услуги:',
    ],
];

?>

<div class="cm-band-content">
   <span class="cm-head-gallery"><?= $s['Service:'][$lng] ?></span>
   <div class="">
        <?= $text[$lng] ?>
       <table>
           <tr>
               <td>REPERTOIRE INT.</td>
               <td>REPERTOIRE RUS.</td>
           </tr>
           <tr>
               <td style="padding: 0; width: 50%;">
                 <table style="font-size: 12px; color: #000000;">
                     <tr>
                         <td style="border: none; padding: 0;">Rolling In The Deep - ADELE</td>
                         <td style="border: none; padding: 0;">Can By Me Love - THE BEATLES</td>
                     </tr>
                     <tr>
                         <td style="border: none; padding: 0;">Autumn Leaves - E.CLAPTON</td>
                         <td style="border: none; padding: 0;">Smoke On The Water - D.P.</td>
                     </tr>
                     <tr>
                         <td style="border: none; padding: 0;">Have You Ever Seen The Rain - CCR/SMOKIE</td>
                         <td style="border: none; padding: 0;">Sing It Back - MOLOKO</td>
                     </tr>
                     <tr>
                         <td style="border: none; padding: 0;">It's My Life - BON JOVI</td>
                         <td style="border: none; padding: 0;">Je Veux - ZAZ</td>
                     </tr>
                     <tr>
                         <td style="border: none; padding: 0;">He Jude - THE BEATELS</td>
                         <td style="border: none; padding: 0;">Stumblin'ln - SMOKIE</td>
                     </tr>
                     <tr>
                         <td style="border: none; padding: 0;">Simply The Beast - TINA TURNER</td>
                         <td style="border: none; padding: 0;">Left Outside Alone - ANASTASIA</td>
                     </tr>
                     <tr>
                         <td style="border: none; padding: 0;">Pretty Women - ROY ORBISON</td>
                         <td style="border: none; padding: 0;">Lady - MODJO</td>
                     </tr>
                     <tr>
                         <td style="border: none; padding: 0;">Lay Down Sally - E.CLAPTON</td>
                         <td style="border: none; padding: 0;">Poppury - ROCK'N'ROLL/TWISTE</td>
                     </tr>
                     <tr>
                         <td style="border: none; padding: 0;">Venus - SHOKING BLUE</td>
                         <td style="border: none; padding: 0;"></td>
                     </tr>
                     <tr>
                         <td style="border: none; padding: 0;">Black Velvet - ALANNAH MYLES</td>
                         <td style="border: none; padding: 0;"></td>
                     </tr>
                 </table>
               </td>
               <td style="padding: 0; vertical-align: top;">
                   <table style="font-size: 12px; color: #000000; margin-left: 10px;">
                       <tr>
                           <td style="border: none; padding: 0;">Поворот - МАШИНА ВРЕМЕНИ</td>
                           <td style="border: none; padding: 0;">Почему - ЗЕМФИРА</td>
                       </tr>
                       <tr>
                           <td style="border: none; padding: 0;">Моя любовь - О.ГАЗМАНОВ</td>
                           <td style="border: none; padding: 0;">Девчока-видение - М.ЛЕОНИДОВ</td>
                       </tr>
                       <tr>
                           <td style="border: none; padding: 0;">Бухта радости - И.САРУХАНОВ</td>
                           <td style="border: none; padding: 0;">Белый лебедь - ЛЕСОПОВАЛ</td>
                       </tr>
                       <tr>
                           <td style="border: none; padding: 0;">Самый лучший день - Г.ЛЕПС</td>
                           <td style="border: none; padding: 0;">Рюмка водки - Г.ЛЕПС</td>
                       </tr>
                       <tr>
                           <td style="border: none; padding: 0;">Берега моей мечты - С.МИХАЙЛОВ</td>
                           <td style="border: none; padding: 0;">Я готов целовать песок - В.МАРКИН</td>
                       </tr>
                       <tr>
                           <td style="border: none; padding: 0;">Компромисс - CAROL MILE</td>
                           <td style="border: none; padding: 0;">Мечты сбываются - Ю.АНТОНОВ</td>
                       </tr>
                       <tr>
                           <td style="border: none; padding: 0;">7000 над Землей - В.СЮТКИН</td>
                           <td style="border: none; padding: 0;">Гулянка - СЕРДЮЧКА</td>
                       </tr>
                       <tr>
                           <td style="border: none; padding: 0;">За тех, кто в море - МАШИНА ВРЕМЕНИ</td>
                           <td style="border: none; padding: 0;">Город Сочи - ТРОФИМ</td>
                       </tr>
                       <tr>
                           <td style="border: none; padding: 0;">Трава у дома - ЗЕМЛЯНЕ</td>
                           <td style="border: none; padding: 0;">Твои зеленые глаза - КАБРИОЛЕТ</td>
                       </tr>
                       <tr>
                           <td style="border: none; padding: 0;">Видели ночь - ЗДОБ ЩИ ЗДУБ</td>
                           <td style="border: none; padding: 0;">Мама Люба - СЕРЕБРО</td>
                       </tr>
                   </table>
               </td>

           </tr>
       </table>
   </div>
</div>



