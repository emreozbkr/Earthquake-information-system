<?php include 'header.php'; ?>
<style media="screen">
  html{
    scroll-behavior: smooth;
  }
</style>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'menu.php'; ?>

    <!-- end header section -->
  </div>



  <!-- do section -->
  <section class="do_section layout_padding">
    <?php if($_GET['Deprem'] == "Son-24-Saat"){ ?>
  <div class="container">
    <div class="heading_container">
      <h2>
        Son 24 Saat
      </h2>
      <form class="" action="index.html" method="post">

      </form>
    </div><br><br>
    <div class="row">
      <div class="col-md-12">

      <table class="table" id="list">
        <thead>
          <tr>
            <th scope="col" style="text-align:center;">No</th>
            <th scope="col" style="text-align:center;">Saat</th>
            <th scope="col" style="text-align:center;">Tarih</th>
            <th scope="col" style="text-align:center;">Enlem (N)</th>
            <th scope="col" style="text-align:center;">Boylam (E)</th>
            <th scope="col" style="text-align:center;">Derinlik (km)</th>
            <th scope="col" style="text-align:center;">Büyüklük</th>
            <th scope="col" style="text-align:center;">İlçe</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
      </div>
    </div>
  </div>
<?php }else if($_GET['Deprem'] == "Filtre"){?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">
            <h2 class="">Herhangi bir depremi arayın..</h2>
            <p>Minimum 1 tane filitre elemanı üzerinden, dilerseniz de birden fazla filitre elemanı ile işlem yapabilirsiniz.</p>
          </div>
          <div class="card-body">
            <form action="" method="post" accept-charset="utf-8">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <label>Tarih</label>
                  <select  name="tarih" class="form-control">
                    <option value="">Tarih seçimi yapınız..</option>
                    <?php
                    $sorgu = $db->prepare("SELECT  * FROM depremler");
                    $sorgu->execute();
                    while ($veri = $sorgu->fetch(PDO::FETCH_ASSOC)) {?>
                      <option value="<?php echo $veri['tarih'];?>"><?php echo $veri['tarih'];?></option>
                    <?php  } ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Saat</label>
                  <select  name="saat" class="form-control">
                    <option value="">Saat seçimi yapınız..</option>
                    <?php
                    $sorgu = $db->prepare("SELECT  * FROM depremler");
                    $sorgu->execute();
                    while ($veri = $sorgu->fetch(PDO::FETCH_ASSOC)) {?>
                      <option value="<?php echo $veri['saat'];?>"><?php echo $veri['saat'];?></option>
                    <?php  } ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Enlem</label>
                  <select  name="enlem" class="form-control">
                    <option value="">Enlem seçimi yapınız..</option>
                    <?php
                    $sorgu = $db->prepare("SELECT  * FROM depremler");
                    $sorgu->execute();
                    while ($veri = $sorgu->fetch(PDO::FETCH_ASSOC)) {?>
                      <option value="<?php echo $veri['enlem'];?>"><?php echo $veri['enlem'];?></option>
                    <?php  } ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Boylam</label>
                  <select  name="boylam" class="form-control">
                    <option value="">Boylam seçimi yapınız..</option>
                    <?php
                    $sorgu = $db->prepare("SELECT  * FROM depremler");
                    $sorgu->execute();
                    while ($veri = $sorgu->fetch(PDO::FETCH_ASSOC)) {?>
                      <option value="<?php echo $veri['boylam'];?>"><?php echo $veri['boylam'];?></option>
                    <?php  } ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Derinlik</label>
                  <select  name="derinlik" class="form-control">
                    <option value="">Derinlik seçimi yapınız..</option>
                    <?php
                    $sorgu = $db->prepare("SELECT  * FROM depremler");
                    $sorgu->execute();
                    while ($veri = $sorgu->fetch(PDO::FETCH_ASSOC)) {?>
                      <option value="<?php echo $veri['derinlik'];?>"><?php echo $veri['derinlik'];?></option>
                    <?php  } ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Büyüklük</label>
                  <select  name="buyukluk" class="form-control">
                    <option value="">Büyüklük seçimi yapınız..</option>
                    <?php
                    $sorgu = $db->prepare("SELECT  * FROM depremler");
                    $sorgu->execute();
                    while ($veri = $sorgu->fetch(PDO::FETCH_ASSOC)) {?>
                      <option value="<?php echo $veri['buyukluk'];?>"><?php echo $veri['buyukluk'];?></option>
                    <?php  } ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>İl</label>
                  <select name="il_id" class="form-control">
                    <option value="">İl seçimi yapınız..</option>
                        <option value="01">Adana</option>
                        <option value="02">Adıyaman</option>
                        <option value="03">Afyonkarahisar</option>
                        <option value="04">Ağrı</option>
                        <option value="05">Amasya</option>
                        <option value="06">Ankara</option>
                        <option value="07">Antalya</option>
                        <option value="08">Artvin</option>
                        <option value="09">Aydın</option>
                        <option value="10">Balıkesir</option>
                        <option value="11">Bilecik</option>
                        <option value="12">Bingöl</option>
                        <option value="13">Bitlis</option>
                        <option value="14">Bolu</option>
                        <option value="15">Burdur</option>
                        <option value="16">Bursa</option>
                        <option value="17">Çanakkale</option>
                        <option value="18">Çankırı</option>
                        <option value="19">Çorum</option>
                        <option value="20">Denizli</option>
                        <option value="21">Diyarbakır</option>
                        <option value="22">Edirne</option>
                        <option value="23">Elazığ</option>
                        <option value="24">Erzincan</option>
                        <option value="25">Erzurum</option>
                        <option value="26">Eskişehir</option>
                        <option value="27">Gaziantep</option>
                        <option value="28">Giresun</option>
                        <option value="29">Gümüşhane</option>
                        <option value="30">Hakkâri</option>
                        <option value="31">Hatay</option>
                        <option value="32">Isparta</option>
                        <option value="33">Mersin</option>
                        <option value="34">İstanbul</option>
                        <option value="35">İzmir</option>
                        <option value="36">Kars</option>
                        <option value="37">Kastamonu</option>
                        <option value="38">Kayseri</option>
                        <option value="39">Kırklareli</option>
                        <option value="40">Kırşehir</option>
                        <option value="41">Kocaeli</option>
                        <option value="42">Konya</option>
                        <option value="43">Kütahya</option>
                        <option value="44">Malatya</option>
                        <option value="45">Manisa</option>
                        <option value="46">Kahramanmaraş</option>
                        <option value="47">Mardin</option>
                        <option value="48">Muğla</option>
                        <option value="49">Muş</option>
                        <option value="50">Nevşehir</option>
                        <option value="51">Niğde</option>
                        <option value="52">Ordu</option>
                        <option value="53">Rize</option>
                        <option value="54">Sakarya</option>
                        <option value="55">Samsun</option>
                        <option value="56">Siirt</option>
                        <option value="57">Sinop</option>
                        <option value="58">Sivas</option>
                        <option value="59">Tekirdağ</option>
                        <option value="60">Tokat</option>
                        <option value="61">Trabzon</option>
                        <option value="62">Tunceli</option>
                        <option value="63">Şanlıurfa</option>
                        <option value="64">Uşak</option>
                        <option value="65">Van</option>
                        <option value="66">Yozgat</option>
                        <option value="67">Zonguldak</option>
                        <option value="68">Aksaray</option>
                        <option value="69">Bayburt</option>
                        <option value="70">Karaman</option>
                        <option value="71">Kırıkkale</option>
                        <option value="72">Batman</option>
                        <option value="73">Şırnak</option>
                        <option value="74">Bartın</option>
                        <option value="75">Ardahan</option>
                        <option value="76">Iğdır</option>
                        <option value="77">Yalova</option>
                        <option value="78">Karabük</option>
                        <option value="79">Kilis</option>
                        <option value="80">Osmaniye</option>
                        <option value="81">Düzce</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>İlçe</label>
                  <select  name="ilce_isim" class="form-control">
                    <option value="">İlçe seçimi yapınız..</option>
                    <?php
                    $sorgu = $db->prepare("SELECT DISTINCT ilce_isim FROM depremler");
                    $sorgu->execute();
                    while ($veri = $sorgu->fetch(PDO::FETCH_ASSOC)) {?>
                      <option value="<?php echo $veri['ilce_isim'];?>"><?php echo $veri['ilce_isim'];?></option>
                    <?php  } ?>
                  </select>
                </div>

              </div>
              <div class="text-center">
                <button type="submit" name="sorgu" class="btn btn-dark col-md-12 mt-4"> Ara </button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-hover" id="sonuclar" >
          <?php
          if (isset($_POST['sorgu'])) {
            $saat = $_POST['saat'];
            $tarih = $_POST['tarih'];
            $enlem = $_POST['enlem'];
            $boylam = $_POST['boylam'];
            $derinlik = $_POST['derinlik'];
            $buyukluk = $_POST['buyukluk'];
            $ilce_isim = $_POST['ilce_isim'];
            $il_id = $_POST['il_id'];

            if (!$saat && !$tarih && !$enlem && !$boylam && !$derinlik && !$buyukluk  && !$ilce_isim && !$il_id) {
              echo "<script>Swal.fire('Uyarı', 'Lütfen herhangi bir filitre seçeneği kullanınız.', 'info'); </script>";
            }else{
              $sorgu = $db->prepare("SELECT * FROM depremler WHERE saat LIKE :saat AND tarih LIKE :tarih AND enlem LIKE :enlem AND boylam LIKE :boylam AND derinlik LIKE :derinlik AND buyukluk LIKE :buyukluk AND ilce_isim LIKE :ilce_isim AND il_id LIKE :il_id");
              $sorgu->execute(array(
                ':saat' =>'%'.$saat.'%',
                ':tarih' =>'%'.$tarih.'%',
                ':enlem' =>'%'.$enlem.'%',
                ':boylam' =>'%'.$boylam.'%',
                ':derinlik' =>'%'.$derinlik.'%',
                ':buyukluk' =>'%'.$buyukluk.'%',
                ':ilce_isim' =>'%'.$ilce_isim.'%',
                ':il_id' =>'%'.$il_id.'%'

              ));
              if ($sorgu->rowCount()) {
                echo "<br><br>";
                echo "<script>window.location='#sonuclar';</script>";
                echo "<script>Swal.fire(' ',' ".$sorgu->rowCount()." adet sonuç bulundu.','success');</script>";

                echo "<br><br>";
                ?>
                <thead>
                  <tr>
                    <th style="font-weight:bold;">No</th>
                    <th>Saat</th>
                    <th>Tarih</th>
                    <th>Enlem</th>
                    <th>Boylam</th>
                    <th>Derinlik</th>
                    <th>Buyüklük</th>
                    <th>Bölge</th>
                  </tr>
                </thead>
                <?php
                foreach ($sorgu as $row) {?>

                  <tbody>
            <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['saat'];?></td>
              <td><?php echo $row['tarih'];?></td>
              <td><?php echo $row['enlem'];?></td>
              <td><?php echo $row['boylam'];?></td>
              <td><?php echo $row['derinlik'];?></td>
              <td><?php echo $row['buyukluk'];?></td>

              <td><?php echo "Plaka: ".$row['il_id']." İlçe: ".$row['ilce_isim'];?></td>

            </tr>
              </tbody>
            <?php } ?>
            <?php }else{
              echo "<script>window.location='#sonuclar';</script>";

              echo "<div style='text-align:center'><h2>İstenen veri mevcut değil.</h2></div>";
            } ?>
            <?php } ?>
        <?php }
         ?>
      </table>
    </div>
  </div>
</div>








  </div>
 <?php } ?>

  </section>

  <!-- end do section -->
  <script>
  let url = "https://api.orhanaydogdu.com.tr/deprem/";
  var req = new XMLHttpRequest();
  req.open("GET", url, true);
  req.responseType = "json";
  req.send();
  req.onreadystatechange = function() {
      if (req.readyState == 4 && req.status == 200) {
          let res = req.response;
          earthquakes(res);
      }
  };
  function earthquakes(res) {
      if (res["status"] == true) {
          let count = res["result"].length;
          for (i in res["result"].reverse()) {
              let eq = res["result"][i];
              let table = document.getElementById("list");
              let row = table.insertRow(1);
              row.insertCell(0).innerHTML = count;
              let date = eq["date"].split(" ")
              row.insertCell(1).innerHTML = date[0];
              row.insertCell(2).innerHTML = date[1];
              let coordinates = eq["geojson"]["coordinates"];
              row.insertCell(3).innerHTML = coordinates[1];
              row.insertCell(4).innerHTML = coordinates[0];
              row.insertCell(5).innerHTML = eq["depth"].toFixed(1);
              row.insertCell(6).innerHTML = `<span class="mag">${eq["mag"].toFixed(1)}</span>`;
              row.insertCell(7).innerHTML = eq["title"];
              count--;
          }
          chart(res["result"]);
      } else {
          alert("Veriler alınamadı. Lütfen daha sonra tekrar deneyiniz.");
      }
  }

  </script>
  <!-- info section -->
  <?php include 'footer.php'; ?>
