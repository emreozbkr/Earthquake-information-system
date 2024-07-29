<?php include 'header.php';




if (isset($_POST["haber_ara"])) {
       $haber_txt = $_POST["haber_txt"];
       if($haber_txt == null){
         echo "<script>window.location='haberler.php?Durum=Bos';</script>";
       }
       $sonuc = $db->query("select * from haberler  where haber_baslik like '%$haber_txt%' ",PDO::FETCH_ASSOC);

      }else{
        $sorgu = $db->prepare("SELECT * FROM haberler");
        $sorgu->execute();

      }


  ?>




<body class="sub_page">
  <div class="hero_area">
    <?php include 'menu.php'; ?>

  </div>
  <div class="container"style="margin-top:30px;">
      <form action="" method="post">
        <div class="row">
        <div class="col-md-6">
          <input  class="form-control" name="haber_txt" type="text" placeholder="Merak ettiğiniz bir il veya bölge ismi ile bir deprem haberi arayın.. ">
        </div>
        <div class="col-md-6">
          <button style="float:right;" name="haber_ara" type="submit" class="btn btn-primary pull-right">Ara</button>
        </div>
        </div>
    </form>
  </div>

  <!-- contact section -->

  <section class="who_section ">
    <?php if(isset($_POST['haber_ara'])){ ?>
      <?php if($sonuc->rowCount()){ ?>

      <div class="container">
        <?php foreach ($sonuc as $veri) {?>
        <div class="row " style="margin-top:50px;">
          <div class="col-md-5">
            <div class="img-box">
              <img src="./images/Haberler/<?php echo $veri['haber_img']; ?>" alt="deprem">
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
                <h2>
                  <?php echo $veri['haber_baslik']; ?>
                </h2>

              <p>
                <?php echo $veri['haber_icerik']; ?>
              </p>
              <p class="text-right"><?php echo $veri['haber_yuklenme_tarihi']; ?></p>

            </div>
          </div>
        </div>
          <?php  }?>
      </div>
    <?php  }else{ ?>
      <script>
        window.location='haberler.php?Durum=Yok';
      </script>
  <?php  }?>


  <?php  } else{?>
    <div class="container">
      <?php while ($veri = $sorgu->fetch(PDO::FETCH_ASSOC)) {?>
      <div class="row " style="margin-top:50px;">
        <div class="col-md-5">
          <div class="img-box">
            <img src="./images/Haberler/<?php echo $veri['haber_img']; ?>" alt="deprem">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
              <h2>
                <?php echo $veri['haber_baslik']; ?>
              </h2>

            <p>
              <?php echo $veri['haber_icerik']; ?>
            </p>
            <p class="text-right"><?php echo $veri['haber_yuklenme_tarihi']; ?></p>

          </div>
        </div>
      </div>
        <?php  }?>
    </div>
  <?php } ?>
  </section>

  <?php if(@$_GET['Durum'] == "Bos"){?>
    <script>Swal.fire("Hata", "Lütfen herhangi bir kelime veya harf yazınız.", "info"); </script>
  <?php } ?>
  <?php if(@$_GET['Durum'] == "Yok"){?>
    <script>Swal.fire("Hata", "Böyle bir haber sistemde mevcut değil.", "error"); </script>
    <script>
 setTimeout(function(){
     window.location="haberler.php";
   }, 1800);
</script>
  <?php } ?>
  <?php include 'footer.php'; ?>
