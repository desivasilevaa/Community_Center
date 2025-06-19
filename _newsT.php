<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "369girlsdr1nk";
$database = "CommunityCenter";

$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$data = $connection->query("SELECT * FROM news ")->fetchAll();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новини</title> <!--Смени с името на страницата-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Връзка с CSS пакета на Bootstrap-->
  </head>
  <body style="background-color: rgb(240, 240, 240);">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Връзка с JavaScript пакета на Bootstrap-->
     <?php
      require "_logged_out.php"
      // Вмъква шаблона от _logged_out.php
    ?>
    
    <br><br><br><br>
    <div style="display: grid; grid-template-columns: repeat(4, 18rem); gap: 10px; justify-content: center;">
  <?php foreach($data as $item){?>
    <div class="card" style="width: 18rem;">
    <img src="<?php echo $item['poster']?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $item['title']?></h5>
      <p class="card-text">
      <?php echo $item['info']?>
<br><br><br>
      </p>
      <a href="<?php echo $item['link']?>" class="btn btn-primary">Вижте повече</a>
    </div>
  </div>
  <?php }?>
  <!--
  <div class="card" style="width: 18rem;">
    <img src="den_na_knigata.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Международен ден на книгата</h5>
      <p class="card-text">
      2 април - Международен ден на Детската книга. Отбелязваме го, защото...
      </p>
      <a href="https://www.facebook.com/photo/?fbid=654667020836257&set=pcb.654669757502650" class="btn btn-primary">Вижте повече</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="detski_hor.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Детски народен хор и оркестър - рожден ден</h5>
      <p class="card-text">
      Своя 5-ти рожден ден отпразнуваха Детски народен хор и оркестър...
      </p>
      <a href="https://www.facebook.com/photo?fbid=10229665258678193&set=pcb.10229665313119554" class="btn btn-primary">Вижте повече</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="den_na_teatura.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Международен ден на театъра</h5>
      <p class="card-text">
      27 март - Ден на театъра 🎭
      "Зад театъра стои животът, а зад живота стои театърът!"...
      </p>
      <a href="https://www.facebook.com/photo?fbid=959446289510264&set=pcb.959446399510253" class="btn btn-primary">Вижте повече</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="pose6tenie.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Посещение в библиотеката</h5>
      <p class="card-text">
      На 24 март 2025 год. на посещение в Детския отдел на Библиотеката бяха учениците от...
      </p>
      <a href="https://www.facebook.com/photo/?fbid=648767204759572&set=pcb.648771258092500" class="btn btn-primary">Вижте повече</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="subranie.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Общо отчетно-изборно събрание</h5>
      <p class="card-text">
      НЧ "Тодор Пеев-1871" кани всички свои членове на Общо отчетно-изборно събрание!...
      </p>
      <a href="https://www.facebook.com/photo?fbid=955555229899370&set=a.603947255060171" class="btn btn-primary">Вижте повече</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="piano.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Пиано</h5>
      <p class="card-text">Ехо от миналото, ноти от бъдещето: растат желаещите да учат пиано в Етрополе. През февруари се проведе...</p>
      <a href="https://etropolezahorata.bg/zhelaesthite-da-uchat-piano-v-etropole-narastvat/?fbclid=IwY2xjawJ0giJleHRuA2FlbQIxMQABHrzuRZ-Bu8aGhNgUqF-svBM_fh-Li-6jpvU2LjP4_TNjTN3fQbbkmU19UTRd_aem_kPfidauN6XG-QJOtyaYUzA" class="btn btn-primary">Вижте повече</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="eng_obnovqvane.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Енергийно обновяване</h5>
      <p class="card-text">
      Проектът е изготвен от Община Етрополе и възлиза на обща стойност 1 272 579,03 лв...
      </p>
      <a href="https://www.facebook.com/photo/?fbid=122202212816146290&set=a.122103108158146290" class="btn btn-primary">Вижте повече</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="literatura.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Литературният кръжок </h5>
      <p class="card-text">
      Литературният кръжок към читалището възобновява дейност, а госпожа Зоя...
      </p>
      <a href="https://www.facebook.com/photo/?fbid=944738180981075&set=a.603947255060171" class="btn btn-primary">Вижте повече</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="den_na_samod.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ден на самодееца</h5>
      <p class="card-text">На 1 март - Ден на самодееца, всички културни дейци към НЧ "Тодор Пеев-1871" бяха...</p>
      <a href="https://www.facebook.com/photo/?fbid=122201420648146290&set=pcb.122201421410146290" class="btn btn-primary">Вижте повече</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="treti_mart.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Честит 3-ти март!</h5>
      <p class="card-text">
      Честит 3 март!

      Честит Национален празник!
      <br><br>

      </p>
      <a href="https://www.facebook.com/photo/?fbid=943185787802981&set=a.603947255060171" class="btn btn-primary">Вижте повече</a>
    </div>
  -->
  </div>
</div>
<br><br>

