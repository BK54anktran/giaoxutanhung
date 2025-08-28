<style>
  /* Mobile: màn hình nhỏ hơn 768px */
  @media (max-width: 767px) {
    header .row {
      width: 100% !important;
      height: auto !important;
      display: flex !important;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    header .row .col-sm-2,
    header .row .col-sm-7 {
      width: 100% !important;
      max-width: 100% !important;
      margin: 5px 0 !important;
      text-align: center !important;
    }

    /* ✅ ép logo full và căn giữa */
    header #container-logo {
      display: flex;
      justify-content: center;
      /* căn giữa ngang */
      align-items: center;
      /* căn giữa dọc (nếu có chiều cao) */
      width: 100% !important;
      margin: 0 !important;
    }

    header .row img#logo {
      max-width: 150px;
      height: auto;
      display: block;
      margin: 0 auto;
      /* căn giữa khi img là block */
    }
  }
</style>
<header>
  <div class="container">
    <div class="row" style=" border:1px solid gray;
      height:  180px;
      width: 1140px;
      display: block;
      
      margin-left: auto;
      margin-right: auto;
      font-size:30px;
      background-image:url(/img/Banner.png);">

      <div class="col-sm-2 col-xs-5" style="margin-top: 10px;margin-left: -5px;">
        <div id="container-logo">
          <a href="/"><img src="/Giáo xứ Tân Hưng_files/giuse-2.png" alt="Giáo xứ Tân Hưng" class="img-responsive"
              id="logo"></a>
        </div>
      </div>
      <div class="col-sm-7 hidden-xs" style="padding-top: 5px;">
        <p class="header-title_big" align="center">GIÁO XỨ TÂN HƯNG - HẠT HÓC MÔN</p>
      </div>
      <div class="col-sm-7 hidden-xs" style="padding-top: 5px;">
        <p class="header-title" align="center">“THÚC ĐẨY SỰ THAM GIA ĐỜI SỐNG GIÁO HỘI”</p>
      </div>
      <div class="col-sm-7 hidden-xs" style="padding-top: 5px;">
        <p class="header-title" align="center">Thông tin liên hệ:
          <i><a href="/lienhe.php" style="color:BLUE"><img src="/img/iconngontaypng30.png"> Click !!!</a></i>
        </p>
      </div>

    </div>
  </div>
</header>