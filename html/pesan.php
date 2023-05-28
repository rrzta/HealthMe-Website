<!DOCTYPE html>
<html lang="en">
    <head itemscope="" itemtype="http://schema.org/WebSite">
        <title itemprop="name">Pesan Nomor Antrian</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="alternate" type="application/rss+xml" title="Latest snippets resources templates and utilities for bootstrap from bootdey.com:" href="http://bootdey.com/rss" />
        <link rel="author" href="https://plus.google.com/u/1/106310663276114892188"/>
        <link rel="publisher" href="https://plus.google.com/+Bootdey-bootstrap/posts"/>
        <meta name="msvalidate.01" content="23285BE3183727A550D31CAE95A790AB" />
        <script src="/cache-js/cache-1635427806-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript"></script>
        <script src ="RS.php"></script>
    </head>
    <body>
        <a href="RS.php" style="font-family: Poppins, sans-serif; margin-left:60px"><-Back</a>
        <div id="snippetContent">
            <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
            <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link href="pesan.css" rel="stylesheet">
            <div class="container bootstrap snippets bootdeys">
                <div class="row text-left">
                
                    <h3>Pesan Nomor Antrian
                    </h3> 
                    <div class="form-group">
                        <label for="name2">Nama Rumah Sakit</label>
                        <h4><?= $_GET["namaRS"];?></h4>
                    </div>
                    <div class="sub-menu">
                        <label for="name2">Poli</label>
                        <select id="ddselect">
                        <option>Pilih</option>
                        <option>Umum</option>
                        <option>Gigi</option>
                        <option>Anak</option>
                        </select>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="form-group">
                        <label for="name2">Nama</label>
                        <input class="form-control" id="name2" name="name" onblur="if(this.value == '') this.value='Name'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Name">
                    </div>
                    <div class="form-group">
                        <label for="email2">Nomor Handphone</label>
                        <input class="form-control" id="no_hp" name="no_hp" type="text" onfocus="if(this.value == 'No HP') this.value='';" onblur="if(this.value == '') this.value='No HP';" value="No HP">
                    </div>
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <p><span id="tanggalwaktu"></span></p>
                        <script>
                            var dt = new Date();
                            document.getElementById("tanggalwaktu").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear());
                        </script>
                    </div>
                    <div class="sub-menu">
                        <label for="name2">Waktu</label>
                        <select id="ddselect">
                        <option>Pilih</option>
                        <option>10.00 - 12.00</option>
                        <option>12.00 - 14.00</option>
                        <option>14.00 - 18.00</option>
                        <option>18.00 - 20.00</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="noantrian.html"> 
                            <button type="submit" class="btn btn-primary btn-shadow btn-rounded w-md" id="send">Pesan</button>
                            </form>
                        </div>
                    </div>
                </form>              
            </div>                       
        </div>
    </div>
<style type="text/css">
    