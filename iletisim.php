<?php include 'header.php';

if (isset($_POST['gonder'])) {
  $isim = $_POST['isim'];
  $telefon = $_POST['telefon'];
  $email = $_POST['email'];
  $icerik = $_POST['icerik'];
  if ($icerik && $isim && $telefon && $email) {
    $query = $db->prepare("INSERT INTO iletisim SET
      isim = ?,
      telefon = ?,
      email = ?,
      icerik = ?
    ");
    $save = $query->execute([
    $isim,$telefon,$email,$icerik
    ]);

    if ($save) {
      echo "<script>window.location='iletisim.php?Durum=Basarili'; </script>";

    }else{
      echo "<script>window.location='iletisim.php?Durum=Basarisiz'; </script>";
    }

  }else{
    echo "<script>window.location='iletisim.php?Durum=Bosluk'; </script>";

  }

}

?>


<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'menu.php'; ?>

    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">

      <div class="heading_container">
        <h2>
          Bizimle iletişime geçin..
        </h2>
      </div>
      <div class="">
        <div class="">
          <div class="row">
            <div class="col-md-9 mx-auto">
              <div class="contact-form">
                <form action="" method="post">
                  <div>
                    <input name="isim" type="text" placeholder="İsminiz.. ">
                  </div>
                  <div>
                    <input pattern="[0-9]{11}" name="telefon" type="tel" placeholder="Telefon numaranız..">
                  </div>
                  <div>
                    <input name="email" type="email" placeholder="Email adresiniz..">
                  </div>
                  <div>
                    <input name="icerik" type="text" placeholder="Mesajınız.." class="input_message">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button name="gonder" type="submit" class="btn_on-hover">
                      Gönder
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="map_img-box">
        <img src="images/map-img.png" alt="">
      </div>
    </div>
  </section>


  <!-- end contact section -->
  <?php if((@$_GET['Durum']) == "Basarili"){?>
    <script>Swal.fire("Başarılı", "Mesajınız bize ulaştı.", "success"); </script>
  <?php }else if(@$_GET['Durum'] == "Basarisiz"){?>
    <script>Swal.fire("Hata", "Bir problem oluştu.", "error"); </script>

  <?php }else if(@$_GET['Durum'] == "Bosluk"){?>
    <script>Swal.fire("Hata", "Lütfen boşluk bırakmayınız.", "error"); </script>

<?php   } ?>
  <!-- info section -->
  <?php include 'footer.php'; ?>
