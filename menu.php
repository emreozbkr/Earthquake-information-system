
<header class="header_section">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
      <a class="navbar-brand" href="index.php">
        <span>
          Deprem Bilgi Sistemi
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="Rapor.php">Rapor</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Ana sayfa</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Depremler</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Depremler.php?Deprem=Son-24-Saat">Son 24 saat verileri</a>
                <a class="dropdown-item" href="Depremler.php?Deprem=Filtre">Herhangi bir depremi ara</a>
                <a class="dropdown-item" href="DepremRisk.php">Bina risk analizi </a>

              </div>
            </li>

            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Grafikler/Haritalar</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Grafikler.php?Grafik=Gunluk&Tur=<?php echo hash('sha256',rand(1,1000))."2".hash('sha256',rand(1,1000));?>">Son 24 saat grafiği</a>
                <a class="dropdown-item" href="Grafikler.php?Grafik=Siddet-Haritasi">Yardım haritası</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="haberler.php"> Haberler </a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bağış</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://www.kizilay.org.tr/bagis" target="_blank">Kızılay</a>
                <a class="dropdown-item" href="https://www.afad.gov.tr/depremkampanyasi2" target="_blank">Afad</a>
                <a class="dropdown-item" href="https://ahbap.org/bagisci-ol" target="_blank">Ahbap</a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="iletisim.php">İletişim</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </div>
</header>
