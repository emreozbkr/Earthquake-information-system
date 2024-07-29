<?php include 'header.php'; ?>


<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'menu.php'; ?>

    <!-- end header section -->
  </div>



  <!-- do section -->
  <section class="do_section layout_padding">


<?php if($_GET['Grafik'] == "Siddet-Haritasi"){ ?>
  <div class="container">
    <div class="heading_container">
      <h2>
        Deprem Yardım Haritası
      </h2>
<iframe style="border:none;" src="https://www.google.com/maps/d/embed?mid=1xg_qDs9GusJ5E2f2yvxee5NhRlTnfHY&hl=en_US&ehbc=2E312F" width="1000" height="480"></iframe>
    </div>



  </div>
<?php }else{ ?>
  <div class="container">
    <div class="heading_container">
      <h2>
        Son 24 saat içinde gerçekleşen depremler
      </h2>
      <div class="">
        <a href="Grafikler.php?Grafik=Gunluk&Tur=<?php echo hash('sha256',rand(1,1000))."2".hash('sha256',rand(1,1000));?>" class="btndeprem">Çizgi grafik</a>
        <a href="Grafikler.php?Grafik=Gunluk&Tur=<?php echo hash('sha256',rand(1,1000))."3".hash('sha256',rand(1,1000));?>" class="btndeprem">Çubuk grafik</a>
        <a href="Grafikler.php?Grafik=Gunluk&Tur=<?php echo hash('sha256',rand(1,1000))."1".hash('sha256',rand(1,1000));?>" class="btndeprem">Pasta grafik</a>

      </div>
      <div id="list"></div>
      <div style="width:100%;">
        <canvas id="chart"></canvas>
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
          for (i in res["result"].reverse()) {
              let eq = res["result"][i];
              let table = document.getElementById("list");
          }
          chart(res["result"]);
      } else {
          alert("Veriler alınamadı. Lütfen daha sonra tekrar deneyiniz.");
      }
  }
  </script>
  <?php

  if (@$_GET['Tur']) {
    @$Tur = $_GET['Tur'];
    @$Tur = substr($Tur,64);
    @$hashTur = substr($Tur,0,-64);

  }
  if(@$hashTur == 1){


    ?>
    <script type="text/javascript">
    function chart(res) {
        let last_10_earthquakes = res.reverse().slice(0, 20).reverse();
        let mags = last_10_earthquakes.map((i) => { return i.mag })
        let names = last_10_earthquakes.map((i) => { return i.title })

        new Chart(document.getElementById("chart"), {
            type: "pie",
            data: {
                labels: names,
                datasets: [{
                    data: mags,
                    borderWidth: 1,
                    borderColor: "#eb6f92"
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            font: {
                                size: 10,
                            }
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
    </script>
  <?php } ?>
<?php

if (@$_GET['Tur']) {
  @$Tur = $_GET['Tur'];
  @$Tur = substr($Tur,64);
  @$hashTur = substr($Tur,0,-64);

}
if(@$hashTur == 2){

   ?>
  <script type="text/javascript">
  function chart(res) {
      let last_10_earthquakes = res.reverse().slice(0, 20).reverse();
      let mags = last_10_earthquakes.map((i) => { return i.mag })
      let names = last_10_earthquakes.map((i) => { return i.title })

      new Chart(document.getElementById("chart"), {
          type: "line",
          data: {
              labels: names,
              datasets: [{
                  data: mags,
                  borderWidth: 1,
                  borderColor: "#eb6f92"
              }]
          },
          options: {
              plugins: {
                  legend: {
                      display: false
                  }
              },
              scales: {
                  x: {
                      ticks: {
                          font: {
                              size: 10,
                          }
                      }
                  },
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
  }
  </script>
<?php } ?>
<?php
if (@$_GET['Tur']) {
  @$Tur = $_GET['Tur'];
  @$Tur = substr($Tur,64);
  @$hashTur = substr($Tur,0,-64);

}
if(@$hashTur == 3){


  ?>
  <script type="text/javascript">
  function chart(res) {
      let last_10_earthquakes = res.reverse().slice(0, 20).reverse();
      let mags = last_10_earthquakes.map((i) => { return i.mag })
      let names = last_10_earthquakes.map((i) => { return i.title })

      new Chart(document.getElementById("chart"), {
          type: "bar",
          data: {
              labels: names,
              datasets: [{
                  data: mags,
                  borderWidth: 1,
                  borderColor: "#eb6f92"
              }]
          },
          options: {
              plugins: {
                  legend: {
                      display: false
                  }
              },
              scales: {
                  x: {
                      ticks: {
                          font: {
                              size: 10,
                          }
                      }
                  },
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
  }
  </script>
<?php } ?>

  <!-- info section -->

  <?php include 'footer.php'; ?>
