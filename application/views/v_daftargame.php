<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/style.css/">
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
    
    <h1 align="center">Data</h1>
        <center><?php echo anchor('http://localhost/web-heroku/index.php/crud/tambah','Tambah Data'); ?></center>
        <table style="margin:20px auto"; border="1">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Action</th>
            </tr>

            <?php 
            $no=1;
            foreach($daftar_game as $u){ ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->kode_gm ?></td>
                <td><?php echo $u->nama_gm ?></td>
                <td><?php echo $u->jenis_gm ?></td>
                <td>
                    <?php echo anchor('crud/edit/'.$u->kode_gm,'Edit'); ?>
                    <?php echo anchor('crud/delete/'.$u->kode_gm,'Hapus'); ?>
                </td>
            </tr>
            <?php  } ?>            
        </table>


  </body>
  </html>
</div>

</body>
</html>
