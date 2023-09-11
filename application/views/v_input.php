<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <script rel="stylesheet" type="text/css" href="assets/style.css"></script>
</head>


<body>

<div class="sidebar">
  <a class="active" href="#">Home</a>
  <a href="http://localhost/web-heroku/index.php/crud/tambah">Input</a>
  <a href="http://localhost/web-heroku/index.php/crud/">Data</a>
  <a href="#">About Us</a>
</div>

<div class="content">
  <!DOCTYPE html>
  <html>
  <body>
    
    <h1 align="center">Input Data</h1> 
        <form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
        
        <table style="margin:20px auto;">
            <tr>
                <td>Kode game</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr>
                <td>nama game</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>ukuran game</td>
                <td><input type="text" name="ukuran"></td>
            </tr>
            <tr>
                <td>genre game</td>
                <td><input type="text" name="genre"></td>
            </tr>
            <tr>
                <td>spesifikasi game</td>
                <td><input type="text" name="spek"></td>
            </tr>
            <tr>
                <td>jenis game</td>
                <td>
                    <input type="radio" name="jenis" value="1">PC
                    <input type="radio" name="jenis" value="2">Mobile Game
                    <input type="radio" name="jenis" value="3">Console
                </td>
            </tr>
            <tr>
                <td>developer game</td>
                <td><input type="text" name="dev"></td>
            </tr>
            <tr>
                <td>tahun rilis</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>foto </td>
                <td><input type="text" name="foto"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
            </table>


    </form>


  </body>
  </html>
</div>

</body>
</html>
