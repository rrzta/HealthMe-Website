<?php
$RS = [
  ["namaRS" => "Rumah Sakit Advent Bandung"],
  ["namaRS" => "Rumah Sakit Hermina Pasteur"],
  ["namaRS" => "Rumah Sakit Santo Borromeus"],
  ["namaRS" => "RSUP Dr.Hasan Sadikin Bandung"],
  ["namaRS" => "RSIA Melinda"],
  ["namaRS" => "RSIA Limijati"],
  ["namaRS" => "Rumah Sakit Santo Yusup"],
  ["namaRS" => "Rumah Sakit Rajawali"],
  ["namaRS" => "Rumah Sakit Kebon Jati"],
  ["namaRS" => "Rumah Sakit Santosa Bandung Central"],
  ["namaRS" => "Rumah Sakit Umum Bungsu"],
  ["namaRS" => "RSUD Kota Bandung"],
  ["namaRS" => "RSIA Kota Bandung"],
  ["namaRS" => "Rumah Sakit Muhammadiyah Bandung"],
  ["namaRS" => "Rumah Sakit Immanuel Bandung"],
  ["namaRS" => "RSUD Bandung Kiwari - Kota Bandung"],
  ["namaRS" => "Rumah Sakit Umum Pindad"],
  ["namaRS" => "RSIA Bandung"],
  ["namaRS" => "Rumah Sakit Santosa Bandung Kopo Borromeus"],
  ["namaRS" => "RS Sartika Asih Bandung"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head itemscope="" itemtype="http://schema.org/WebSite">
  <title itemprop="name">Rumah Sakit Terdekat</title>
  <link rel="alternate" type="application/rss+xml" title="Latest snippets resources templates and utilities for bootstrap from bootdey.com:" href="http://bootdey.com/rss" />
  <link rel="author" href="https://plus.google.com/u/1/106310663276114892188"/>
  <link rel="publisher" href="https://plus.google.com/+Bootdey-bootstrap/posts"/>
  <meta name="msvalidate.01" content="23285BE3183727A550D31CAE95A790AB" /> <script src="/cache-js/cache-1635427806-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript"></script>
</head>
<body>
  <a href="homepageafter.html" style="font-family: Poppins, sans-serif; margin-left:60px"><-Back</a>
  <h3 style="font-family: Poppins, sans-serif; margin-left:60px" >Pesan Antrian Rumah Sakit</h3>
  <div id="snippetContent">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link href="RS.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">

      <div class="row">
        <div class="col-sm-6">
          <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d92240.71674870458!2d107.60301599030572!3d-6.955875030914876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srumah%20sakit%20di%20bandung!5e0!3m2!1sid!2sid!4v1672296051426!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width: 550px; height: 578px;"></iframe>
          </div>
        </div><!-- end col -->

        <!-- Contact form -->
        <div class="col-sm-6">
            <div class="form-group">
            <p><b>Pilih Rumah Sakit untuk pesan nomor antrian</b></p>
            <form action="pesan.php" method="POST">
              <?php
                foreach($RS as $rs) {
              ?>
                  <a href="pesan.php?namaRS=<?=$rs["namaRS"];?>"><?=$rs["namaRS"];?></a>
                  <br>
              <?php
                }
              ?>
              </form>
            </div> <!-- /Form-name -->  
        </div> 
        </div>
      </div> 
</div>
</body>
</html>
