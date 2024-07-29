<?php include 'header.php';
if (isset($_POST['testgonder'])) {


    @$cevap1 = $_POST['cevap1'];
    @$cevap2 = $_POST['cevap2'];
    @$cevap3 = $_POST['cevap3'];
    @$cevap4 = $_POST['cevap4'];
    @$cevap5 = $_POST['cevap5'];
    @$cevap6 = $_POST['cevap6'];
    @$cevap7 = $_POST['cevap7'];
    @$cevap8 = $_POST['cevap8'];
    @$cevap9 = $_POST['cevap9'];
    @$cevap10 = $_POST['cevap10'];
    @$cevap11 = $_POST['cevap11'];
    @$cevap12 = $_POST['cevap12'];
    if ($cevap1 != null and $cevap2 != null and $cevap3 != null and $cevap4 != null and $cevap5 != null and $cevap6 != null and $cevap7 != null
     and $cevap8 != null and $cevap9 != null and $cevap10 != null and $cevap11 != null and $cevap12 != null) {

      $cevap=$cevap1+$cevap2+$cevap3+$cevap4+$cevap5+$cevap6+$cevap7+$cevap8+$cevap9+$cevap10+$cevap11+$cevap12;

      if ($cevap <= 6 && $cevap >= 0 ) {
        echo "<script>window.location='DepremRisk.php?Durum=Dusuk&Sonuc=".$cevap."';</script>";

      }else if($cevap <= 12 && $cevap >= 7 ){
        echo "<script>window.location='DepremRisk.php?Durum=Orta&Sonuc=".$cevap."';</script>";

      }else if($cevap <= 20 && $cevap >= 13 ){
        echo "<script>window.location='DepremRisk.php?Durum=Yuksek&Sonuc=".$cevap."';</script>";

      }else if($cevap <= 60 && $cevap >= 21 ){
        echo "<script>window.location='DepremRisk.php?Durum=Cok-Yuksek&Sonuc=".$cevap."';</script>";

      }
    }else{
      echo "<script>window.location='DepremRisk.php?Durum=Bosluk';</script>";

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
          Bina deprem risk analizi
        </h2>
      </div>
      <div class="">
        <div class="">
          <div class="row">
            <div class="col-md-12 mx-auto">
              <div class="contact-form">
                <div class="mx-0 mx-sm-auto">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-center">
                        <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>

                        <p>
                          Binanızın deprem risk analizini
                          <strong>hesaplayın.</strong>
                        </p>
                      </div>

                      <hr />

                      <form class="px-4" action="" method="post">
                        <div class="">
                          <p class="text-float"><strong>Binanızın bulunduğu yer?</strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap1"  value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              Kayalık zemin
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap1" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              Yüksek ve tepelik yer
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap1" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              Eğimin yüzde 20`nin üzerinde olduğu yamaçlar
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap1" id="radio2Example4" value="3" />
                            <label class="form-check-label" for="radio2Example4">
                              Çevresine göre çukur yerler
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap1" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                              Dere yatağı ve dolgu zeminler
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap1" id="radio2Example5" value="5"/>
                            <label class="form-check-label" for="radio2Example5">
                              Sulu zeminler
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong>Binanız betonarme ise yaşı?</strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap2" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              1-10 yıl
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap2" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              10-11 yıl
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap2" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              11-20 yıl
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap2" id="radio2Example4" value="3"/>
                            <label class="form-check-label" for="radio2Example4">
                              21-30
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap2" id="radio2Example5" value="4" />
                            <label class="form-check-label" for="radio2Example5">
                              31 yıl ve üstü
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong>Binanızın taşıyıcı sistemi?</strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap3" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              Çelik ya da ahşap bina
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap3" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              Betonarme bina
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap3" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              Tuğla örgü yığma bina
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap3" id="radio2Example4"value="3" />
                            <label class="form-check-label" for="radio2Example4">
                              Taş örgü yığma bina
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap3" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                              Kerpiç örgülü bina
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap3" id="radio2Example5" value="5"/>
                            <label class="form-check-label" for="radio2Example5">
                              Kerpiç örgülü toprak damlı bina
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong>Binanızda bodrum kat ve rutubet sorunu var mı?</strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap4" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              Bodrum kat var, hiç rutubet olmuyor
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap4" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              Bodrum kat var, kış aylarında rutubetli
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap4" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              Bodrum kat yok, rutubet yok
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap4" id="radio2Example4" value="3"/>
                            <label class="form-check-label" for="radio2Example4">
                              Bodrum kat var, sürekli rutubet var
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap4" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                              Bodrum kat var, su birikiyor
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong>Binanız zemin kat dahil kaç katlı?</strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap5" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              1
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap5" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              2
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap5" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              3
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap5" id="radio2Example4" value="3"/>
                            <label class="form-check-label" for="radio2Example4">
                              4-5
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap5" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                               6-8
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap5" id="radio2Example5" value="5"/>
                            <label class="form-check-label" for="radio2Example5">
                               9 ve üstü
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong>Binanızın zemin katı nasıl?</strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap6" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              Üst katlarla aynı
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap6" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              Üst katlardan daha içerde, ancak duvarlar kapalı
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap6" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              Kat yüksekliği diğer katlardan daha fazla, <br> ancak duvarlar kapalı
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap6" id="radio2Example4" value="3"/>
                            <label class="form-check-label" for="radio2Example4">
                              Normal katlarla aynı, ancak duvar yok
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap6" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                              Normal katlardan daha içeride, ancak duvar yok
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap6" id="radio2Example5" value="5"/>
                            <label class="form-check-label" for="radio2Example5">
                              Kat yüksekliği normal katlardan dahafazla, ancak duvar yok
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong>Bina çıkmaları nasıl?</strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap7" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              Binada hiç çıkma yok
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap7" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              Yalnızca balkonlar çıkma
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap7" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              Binanın bütününde kapalı çıkma var 80 cm`ye kadar
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap7" id="radio2Example4" value="3" />
                            <label class="form-check-label" for="radio2Example4">
                              Açık çıkmalar duvarlarla kapatılmış
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap7" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                              Binanın bütününde 80 cm`den fazla çıkma var
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong>Binaya yapılan müdahale var mı? </strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap8" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              Binanın herhangi bir yerinde değişlik yapılmadı
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap8" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              Binanın iç duvarlarında kaldırılan bölümler var
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap8" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              Binanın iç duvarlarında birden fazla kaldrırılan bölümler var
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap8" id="radio2Example4" value="3"/>
                            <label class="form-check-label" for="radio2Example4">
                              Dış duvarlarda pencere açıldı veya pencereler büyütüldü
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap8" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                            Binanın bütününde ilave pencere yapılması <br> ya da duvarların kaldırılması
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap8" id="radio2Example5" value="5"/>
                            <label class="form-check-label" for="radio2Example5">
                            İç bölme ve duvarların komple kaldırılması (1 kat bile olsa)
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong>Binanın kullanım amacı değiştirildi mi? </strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap9" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              Bina yapım amacına göre kullanılıyor
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap9" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              Konut amaçlı yapılıp, normal katlar <br> atölye olarak kullanılıyor
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap9" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              Zemin kat konut amaçlı yapılıp, dükkan <br> ya da atölye olarak kullanılıyor
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap9" id="radio2Example4" value="3"/>
                            <label class="form-check-label" for="radio2Example4">
                              Binaya sonradan asansör montajı yapıldı
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap9" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                              Sonradan çatı arasına bir tondan fazla <br> kapasiteli su deposu yapıldı
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap9" id="radio2Example5" value="5"/>
                            <label class="form-check-label" for="radio2Example5">
                              Binaya sonradan asansör ve su deposu yapıldı
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong>Binanızda şu ana kadar...</strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap10" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              Herhangi bir tamirat yapılmadı
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap10" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              Titreşimli bir aletle tamirat yapıldı
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap10" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              Yapının taşıyıcıları titreşimli bir aletle tamir edildi
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap10" id="radio2Example4" value="3"/>
                            <label class="form-check-label" for="radio2Example4">
                              Kolon ve kirişlere delik ve benzeri müdahale yapıldı
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap10" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                            Binada katya da döşeme ilavesi yapıldı
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap10" id="radio2Example5" value="5"/>
                            <label class="form-check-label" for="radio2Example5">
                            Binada kısmı de olsa yangın oldu
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong>Binanızdaki daha önceden hasar veya çatlak var mı?</strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap11" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              Binanızda gözle görülür çatlak yok
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap11" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              Balkon döşemesinde ya da köşelerinde çok ince çatlak var
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap11" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              Çıkmalardaki dış duvarların kolon ve kirişlerin <br> birleştiği yerde çok ince çatlaklar var
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap11" id="radio2Example4" value="3"/>
                            <label class="form-check-label" for="radio2Example4">
                              Hizalarında duvarda yatay çatlaklar var
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap11" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                              Dış duvarlarda yatay vedüşey bina yüksekliğince <br> çatlama var
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="">
                          <p class="text-float"><strong> Bina şekli, plan şeması nasıl?</strong></p>

                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap12" id="radio2Example1" value="0"/>
                            <label class="form-check-label" for="radio2Example1">
                              Kare ya da çokgen
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap12" id="radio2Example2" value="1"/>
                            <label class="form-check-label" for="radio2Example2">
                              Dikdörtgen
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap12" id="radio2Example3" value="2"/>
                            <label class="form-check-label" for="radio2Example3">
                              Yıldız şeklinde
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap12" id="radio2Example4" value="3"/>
                            <label class="form-check-label" for="radio2Example4">
                              Binada derin boşluklar var
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap12" id="radio2Example5" value="4"/>
                            <label class="form-check-label" for="radio2Example5">
                              Bitişik bloklar, aynı kat seviyesinde değil
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="cevap12" id="radio2Example5" value="5" />
                            <label class="form-check-label" for="radio2Example5">
                              Bitişik bloklar, aynı yükseklikte değil
                            </label>
                          </div>
                        </div>
                        <div class="text-center mt-4">
                          <button name="testgonder" type="submit" class="btn btn-primary">Hesapla</button>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <script>Swal.fire('Puanınız:', 'Yüksek deprem hasar riski söz konusu, yapı uzmanlarca incelenmeli.', 'info'); </script>

  <!-- end contact section -->
  <?php if(@$_GET['Sonuc'] == "Bosluk-Birakmayiniz"){?>
    <script>Swal.fire("Hata", "Lütfen boş soru bırakmayınız.", "error"); </script>
  <?php } ?>

  <?php if(@$_GET['Durum'] == "Dusuk"){?>
    <script>Swal.fire("Puanınız: <?php echo $_GET['Sonuc'];?>", "Binanızda ciddi bir deprem riski bulunmamaktadır.", "info"); </script>
  <?php }else if (@$_GET['Durum'] == "Orta"){?>
    <script>Swal.fire("Puanınız: <?php echo $_GET['Sonuc'];?>", "Binanızda orta şiddetli hasar deprem riski bulunmaktadır.", "info"); </script>

<?php  }else if(@$_GET['Durum'] == "Yuksek"){ ?>
  <script>Swal.fire("Puanınız: <?php echo $_GET['Sonuc'];?>", "Yüksek deprem hasar riski söz konusu, yapı uzmanlarca incelenmeli.", "info"); </script>

<?php }else if(@$_GET['Durum'] == "Cok-Yuksek"){ ?>
  <script>Swal.fire("Puanınız: <?php echo $_GET['Sonuc'];?>", "Deprem etkilerine açık bir yapıya ve çok yüksek riske sahipsiniz.", "info"); </script>

<?php } else if(@$_GET['Durum'] == "Hosgeldiniz"){ ?>
  <script>Swal.fire("Giriş başarılı.", "Hoşgeldiniz.", "success"); </script>

<?php } else if(@$_GET['Durum'] == "Bosluk"){ ?>
  <script>Swal.fire("Hata!.", "Lütfen boş soru bırakmayınız.", "error"); </script>

<?php } ?>
  <!-- info section -->
  <?php include 'footer.php'; ?>
