<?php
  $lng = ($this->uri->segment(2) !== null)?$this->uri->segment(2):'en';
  $text = array(
    'en' => '
    <p>
   The CAROL MILE group was founded in 2006,
in Munich VIA "COMPROMISE" was also called.
As a part of ensemble many known acted
musicians, such as: Boris Laperashvili, brothers
Stanislav and Vladimir Schatz, Nikolay Pitkevich, and
the artistic director, the drummer, multi -
- instrumentalist and singer Eduard Miketin.
</p>
<p>
   The history of emergence of the name of group is interesting
"CAROL MILE": - CAROL in translation from English
means - "a cheerful song", "anthem" (usually - Christmases.)
MILE is a mile, so in translation the name of group
can sound as "CHEERFUL MILE". In Ukrainian
language there is an analog of the word carol - a Christmas carol, i.e. a sort the person
national song which is sung in the prechristmas
the period and for Christmas. One of projects of ensemble is
execution of Christmas carols in modern arrangements.
Besides, the group gastolirut on the cities of Germany,
accompanies weddings, birthdays, Christmas and
New year, and also acts on office parties.
</p>
    ',
    'de' => '
   <p>
   Die Band "CAROL MILE" wurde vor  ein paar Jahren in
München gegründet und hieß erstmal “KOMPROMISS”.
Während dessen traten in dem Ensamble viele  berühmte
Musiker wie zum  Beispiel:  Boris   Laperashvili, Brüder
Stanislav,  Vladimir  Schatz,   Nicholas  Pitkevich, sowie
der     künstlerische    Leiter,   der   Schlagzeuger,   Multi
-Instrumentalist  und   Sänger - Edward Myketin. Derzeit
besteht das  Rückgrat der Band aus: Antonina Kovalchuk
- Gesang,  Jakub Zhurovsky - Violine, Trompete, Sänger,
Michael  Koifman -Bass Gitarre, Rhythmus -Synthesizer,
Sänger, Yuri Taranovich - Lead- und  Rhythmus  Gitarre.
Edward Myketin-permanent Teamleiter.    In    Ensamble
kam   Mikhail   Prizmazonov   als  Ton  - ingenieur dazu,
welcher   die   Gruppe,   mit   seinen  Sound-kenntnissen
auf ein ganz anderes höchstprofisionelles Niveau brachte.
An  dem  Ensemble  beteildigen  sich  aktiv,      berühmte
Musiker  wie zum Beispiel :Vladimir Pavlov - Keyboard,
Paul  Bishkoy - Gitarre,  Akkordeon,  Gesang, Arrangeur
und Keyboarder Igor Vedeneev.
</p>
<p>
Der interesante Ursprung der Enstehung des Bandnamen
“CAROL MILE”:  carol  aus  dem  Englischen  bedeutet
unter anderem  fröhliches  Lied  oder auch Hymne. Mile
kommt   ebenfalls  aus   dem  Englischen  und   bedeutet
Meile,  diese  Wörter  könnten  dann    zusammengesetzt
“fröhliches Meilenlied”   oder   ähnliches   heissen.    Im
Ukrainischen   gibt   es   einen    Analog    des     Wortes
“Christmas Carol” (ukr.: Koljada), das  ist  eine  Art von
Volkslied, welches in der  vorweihnachtlichen  Zeit oder
an Weihnachten  gespielt  wird.  Eines  der  Projekte von
dem    Ensmable   ist   es   Weihnachtslieder   in      einer
moderneren  Variante vorzuspielen. Außerdem  tourt die
Gruppe   innerhalb   Deutschlands    in     verschiedenen
Städten,     tritt     auf      Hochzeiten,         Geburtstagen,
Weihnachten, Silvester  und an Korporativen auf.
</p>
    ',
    'ru' => '
    <p>
   Группа " CAROL MILE " была  основана  несколько  лет
назад  в  Мюнхене  и   называлась   " КОМПРОМИСС ".
В   составе   ансамбля   выступали    многие   известные
музыканты , такие  как:   Борис  Лаперашвили,    братья
Станислав  и   Владимир  Шатц ,   Николай Питкевич, и
художественный  руководитель,   барабанщик,   мульти-
- инструменталист и певец - Эдуард Микетин. В данный
момент, основой костяк группы составляют:   Антонина
Ковальчук - вокал,  Якуб   Журовский - скрипка,    труба,
вокал, Михаил Койфман - бас -гитара, ритм - синтезатор,
вокал, Юрий Таранович -соло и ритм-гитара.В ансамбль
пришел  звукорежиссер  Михаил  Призмазонов, который
поставил звучание группы на высокопрофессиональный
уровень.  С  коллективом   активно  сотрудничают  такие
известные музыканты, как: Владимир Павлов - клавиши,
Павел Бишко - гитара , аккордеон, вокал, аранжировщик
и клавишник Игорь Веденеев.
</p>
<p>
   Интересна  история  возникновения  названия  группы
"CAROL MILE": - CAROL   в   переводе  с   английского
означает - "веселая песнь", "гимн"  (обычно - Рождеств.)
MILE - это миля,  так  что  в  переводе  название группы
может  звучать  как  "ВЕСЕЛАЯ МИЛЯ".  В украинском
языке есть  аналог  слова  carol - коляда, т.е.  род особой
народной  песни, которую поют  в  предрождественский
период и на Рождество. Один из проектов ансамбля- это
исполнение  Колядок  в  современных  оранжировках.
Кроме этого , группа гастолирует по  городам Германии,
сопровождает  свадьбы,  дни  Рождения,  Рождество    и
Новый год, а также выступает на корпоративах.
</p>
    ',
  );

$s = [
    'The invited musicians' => [
        'en' => 'The invited musicians',
        'de' => 'The invited musicians',
        'ru' => 'Приглашенные музыканты',
    ],
];

?>

<div class="cm-band-content">
  <span class="cm-head">Carol Mile</span>
    <p>
        <?= $text[$lng] ?>
    </p>


   <span class="cm-head"><?= $s['The invited musicians'][$lng] ?>:</span>
   <table>
      <tr>
          <td style="width: 25%; border: none; vertical-align: top;">
              <img style="width:100%;" src="<?= base_url() ?>assets/img/player7.jpg">
          </td>
          <td style="width: 25%; border: none; vertical-align: top;">
              <div style="" class="cm-photo-label1">Vladimir Pavlov</div>
              <div style="" class="cm-photo-label2">keyboard</div>
          </td>

          <td style="width: 25%; border: none; vertical-align: top;">
              <img style="width:100%;" src="<?= base_url() ?>assets/img/player8_1.jpg">
          </td>
          <td style="width: 25%; border: none; vertical-align: top;">
              <div style="" class="cm-photo-label1">Nick Pytkevich</div>
              <div style="" class="cm-photo-label2">saxophone, vocal</div>
          </td>
      </tr>

       <tr>
           <td style="width: 25%; border: none; vertical-align: top;">
               <img style="width:100%;" src="<?= base_url() ?>assets/img/player10_1.jpg">
           </td>
           <td style="width: 25%; border: none; vertical-align: top;">
               <div style="" class="cm-photo-label1">Jakub Zhurovsky</div>
               <div style="" class="cm-photo-label2">violine, trompete, sänger</div>
           </td>

           <td style="width: 25%; border: none; vertical-align: top;">
               <img style="width:100%;" src="<?= base_url() ?>assets/img/player9_1.jpg">
           </td>
           <td style="width: 25%; border: none; vertical-align: top;">
               <div style="" class="cm-photo-label1">Yuri Taranovich</div>
               <div style="" class="cm-photo-label2">lead- & rhythmus-gitarre</div>
           </td>
       </tr>

       <tr>
           <td style="width: 25%; border: none; vertical-align: top;">
               <img style="width:100%;" src="<?= base_url() ?>assets/img/player11_1.jpg">
           </td>
           <td style="width: 25%; border: none; vertical-align: top;">
               <div style="" class="cm-photo-label1">Olga Dudkova</div>
               <div style="" class="cm-photo-label2">vocal, keyboards</div>
           </td>

           <td style="width: 25%; border: none; vertical-align: top;">
               <img style="width:100%;" src="<?= base_url() ?>assets/img/player12_2.jpg">
           </td>
           <td style="width: 25%; border: none; vertical-align: top;">
               <div style="" class="cm-photo-label1">Igor Vedeneev</div>
               <div style="" class="cm-photo-label2">keyboards</div>
           </td>
       </tr>



   </table>


   <!-- <div class="row">
        <div class="col-3">
          <div class="cm-photo0"></div>
          <div class="cm-photo-label1">Antonina Kovalchuk</div>
          <div class="cm-photo-label2">gesang</div>
        </div>
        <div class="col-3">
          <div class="cm-photo1"></div>
          <div class="cm-photo-label1">Edward Myketin</div>
          <div class="cm-photo-label2">künstlerischer leiter, multi-instrumentalist, schlagzeuger & sänger</div>
        </div>
        <div class="col-3">
          <div class="cm-photo2"></div>
          <div class="cm-photo-label1">Michael Koifman</div>
          <div class="cm-photo-label2">bass gitarre, sänger, rhythmus-synthesizer</div>
        </div>
        <div class="col-3">
          <div class="cm-photo3"></div>
          <div class="cm-photo-label1">Yuri Taranovich</div>
          <div class="cm-photo-label2">lead- & rhythmus-gitarre</div>
        </div>
    </div>

    <div style="width: 75%; margin-left: 12.5%; min-height: 50px;">
    <div class="row">
                <div class="col-4">
                    <div class="cm-photo4"></div>
                    <div class="cm-photo-label1">Vladimir Pavlov</div>
                    <div class="cm-photo-label2">keyboard</div>
                </div>
                <div class="col-4">
                    <div class="cm-photo5"></div>
                    <div class="cm-photo-label1">Paul Bishkoy</div>
                    <div class="cm-photo-label2">gitarre, akkordeon, gesang, arrangeuf</div>
                </div>
                <div class="col-4">
                    <div class="cm-photo6"></div>
                    <div class="cm-photo-label1">Igor Vedeneev</div>
                    <div class="cm-photo-label2">keyboarder</div>
                </div>

    </div>
    </div>

    <div style="width: 50%; margin-left: 25%; min-height: 50px;">
        <div class="row">
            <div class="col-6">
                <div class="cm-photo7"></div>
                <div class="cm-photo-label1">Jakub Zhurovsky</div>
                <div class="cm-photo-label2">violine, trompete, sänger</div>
            </div>
            <div class="col-6">
                <div class="cm-photo8"></div>
                <div class="cm-photo-label1">Mikhail Prizmazonov</div>
                <div class="cm-photo-label2">ton-ingenieur</div>
            </div>
        </div>
    </div>-->

</div>