<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Ticket</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            position: relative;
            overflow-x: hidden;
        }

        header {
            background-color: #FFf ;
            color: white;
            height:9x0px;
            padding: 10px;
            text-align: right;
            object-position: center;
            margin-bottom: 30px;
            position: fixed;
            width: 100%;
            top: 0;
            transition: top 0.3s; /* Menambahkan efek transisi */
            font-family: Arial;
            box-shadow: 20 20 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            justify-content: space-between;

        }


        header a {
            color: white;
            text-decoration: none;
            margin: 20px;
            font-family: Arial;
            color: #000000;
        }

        .logo {
            text-align: left;
            margin: 10px;
            margin-left: 160px;
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            font-weight: bold;
            color: #FF7F50;
        }

        main {
            width: 80%;
            margin: 20px auto;
            margin-bottom: 20px;
            font-family: Arial;
        }

        #banner-container {
          width: 100%;
          overflow: hidden;
        }

        .banner {
            width: 100%;
            max-height: 1000px; 
            object-fit: cover;
            margin-bottom: 80px;
            margin-top: 90px;
            transition: transform 1s ease-in-out;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product {
            width: 27%;
            margin: 20px 0;
            padding: 5px 20px;
            background-color: #fff;
            box-shadow: 0 10 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            font-size: 20px;
            border-radius: 10px;
            text-decoration: none;
            border: 2px solid #ccc;
            color: #333;
            font-family: Arial;
            transition: box-shadow 0.1s ease-in-out;
        }


        .product:hover {
            box-shadow: 0 15px 15px rgba(0, 0, 0, 0.2);
        }

        .nominalhargaproduk {
            margin: 10px 0;
            text-align: right;
            font-size: 32px;
            text-decoration: none;
            font-weight: bold;
            color: #FF5733;
            font-weight: bold;
            color: #FF5733;
            font-family: Arial;

        }

        .product img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            margin-bottom: 5px;
            margin-top: 20px;
            border-radius: 10px;   
            
        }

        footer {
            position: absolute;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 50px;
        }

        .product-container {
            margin-bottom: 20px;
            margin-top: 20PX;
        }

        .buttongrup{
            display: flex;
            align-items: center;
        }


        .ourproduct {
            text-align: center;
            margin-top: 500px;
            font-family: montserrat;
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }

        .info-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 30px;
            border: 2px solid #ccc;
        }

        
        .product-line {
            margin: 5px 0; /* Sesuaikan margin sesuai keinginan Anda */
            border: 0.5px solid #808080; /* Sesuaikan warna dan ketebalan garis sesuai keinginan Anda */
            width: 100%; /* Sesuaikan lebar garis sesuai keinginan Anda */
            align-self: center;
        }

        .price-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .harga {
            margin: 0;
            color: #808080;
            font-family: Arial;
        }
        .alamat{
            color: #808080;
            font-size: 16px;
            font-weight: 100;
            font-family: Arial;
        }

        .buttonmenu{
            margin-left: 20px;
            background-color: #FF7F50; /* Warna latar belakang oranye */
            color: white; /* Warna teks putih */
            padding: 8px 15px; /* Mengatur padding tombol */
            border-radius: 5px; /* Memberikan border radius */
            text-decoration: none;
            font-family: Arial;
        }

        .buttonmenu1{
            align-content: right;
            margin-left: 970px;
            background-color: #FFF; /* Warna latar belakang oranye */
            color: black; /* Warna teks putih */
            padding: 8px 15px; /* Mengatur padding tombol */
            border-radius: 5px; /* Memberikan border radius */
            text-decoration: none;
            font-family: Arial;

        }

    </style>

</head>
<body>
    <header>
        <div class="buttongrup">
            <div class="logo">Easyticket.com</div>
            <a class="buttonmenu1" href="login.html">Login</a>
            <a class="buttonmenu" href="signup.html">Sign up</a>
        </div>
        <!--<a href="about.html">ABOUT</a>-->
        <!--<a href="contact.html">CONTACT</a>-->
    </header>

    

    <main>

    </main>

    
</body>
</html>

<?php //pertama kita membuat untuk melakukan koneksinya
$host = "localhost";
$user = "root";
$pass = ""; //karena kita menggunakan xampp biasanya pass kosong
$db   = "easy_ticket";

$koneksi = mysqli_connect($host, $user, $pass, $db); //untuk koneksi kita menggunakan fungsi dari mysql. lalu kita masukan parameter untuk melakukan koneksi ke database
if(!$koneksi){ //cek koneksi
    die("Gagal Koneksi");
}
$nama           ="";
$tanggal_lahir  ="";
$jenis_tiket    ="";
$harga_tiket    ="";
$jumlah_tiket   ="";
$total_harga    ="";
$sukses         ="";
$error          ="";

if(isset($_GET['op'])){
    $op = $_GET['op'];
}else{
    $op = "";
}
if($op == 'delete'){
    $id = $_GET['id'];
    $sql1 = "delete from tiket_konser where id = '$id'";
    $q1 = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil menghapus data";
    }else{
        $error = "Gagal menghapus data";
    }

}

if($op == 'edit'){
    $id             = $_GET['id'];
    $sql1           = "select * from tiket_konser where id = '$id'";
    $q1             = mysqli_query($koneksi,$sql1);
    $r1             = mysqli_fetch_array($q1);
    $nama           = $r1['nama'];
    $tanggal_lahir  = $r1['tanggal_lahir'];
    $jenis_tiket    = $r1['jenis_tiket'];
    $harga_tiket    = $r1['harga_tiket'];
    $jumlah_tiket   = $r1['jumlah_tiket'];
    $total_harga    = $r1['total_harga'];

    if($nama == ''){
        $error = "Data tidak ditemukan";
    }


}

if(isset($_POST['simpan'])){ //untuk create
    $nama           = $_POST['nama'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jenis_tiket    = $_POST['jenis_tiket'];
    $harga_tiket    = $_POST['harga_tiket'];
    $jumlah_tiket   = $_POST['jumlah_tiket'];
    $total_harga    = $_POST['total_harga'];

    if($nama && $tanggal_lahir && $jenis_tiket && $harga_tiket && $jumlah_tiket && $total_harga){
        if($op == 'edit'){ //untuk update
            $sql1 = "update tiket_konser set nama = '$nama',tanggal_lahir='$tanggal_lahir',jenis_tiket='$jenis_tiket',harga_tiket='$harga_tiket',jumlah_tiket='$jumlah_tiket',total_harga='$total_harga'";
            $q1 = mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses = "Data berhasil diupdate";
            }else{
                $error = "Data gagal diupdate";
            }
        }else{ //untuk insert
            $sql1 = "insert into tiket_konser(nama,tanggal_lahir,jenis_tiket,harga_tiket,jumlah_tiket,total_harga) values('$nama','$tanggal_lahir','$jenis_tiket','$harga_tiket','$jumlah_tiket','$total_harga')";
        $q1 = mysqli_query($koneksi,$sql1);
        if($q1){
            $sukses = "Berhasil memasukkan data baru";
        }else{
           
         $error = "Gagal memasukkan data";
        }
        }
    }else{
        $error="Silahkan input semua data";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration User Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .mx-auto { width:1000px }
        .card {margin-top: 10px}
    </style>
</head>

<body>
    <br><br><br><br>
    <div class="mx-auto"> <!--kita berikan class yaitu max auto dia akan membuat sebuah div-->
    <!--untuk memasukan data-->
    <div class="card">
  <div class="card-header">
    Registration User Ticket
  </div>
  <div class="card-body">
      <?php
        if($error){
            ?>
            <div class="alert alert-danger" role="alert">
  <?php echo $error ?>
</div>
            <?php
            header("refresh:5;url=index.php"); //5 detik
          }
        ?>
      <?php
        if($sukses){
            ?>
            <div class="alert alert-success" role="alert">
  <?php echo $sukses ?>
</div>
<?php
            header("refresh:5;url=index.php"); //5 detik
          }
        ?>
    <form action="" method="POST">
    <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama"value="<?php echo $nama ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"value="<?php echo $tanggal_lahir ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jenis_tiket" class="col-sm-2 col-form-label">Jenis Tiket</label>
    <div class="col-sm-10">
      <select class="form-control" name="jenis_tiket" id="jenis_tiket">
          <option value="">- Pilih Jenis Tiket -</option>
          <option value="Premium_Tribune" <?php if($jenis_tiket == "Premium_Tribune") echo "selected" ?>>Premium Tribune</option>
          <option value="Festival" <?php if($jenis_tiket == "Festival") echo "selected" ?>>Festival</option>
          <option value="Tribune_1" <?php if($jenis_tiket == "Tribune_1") echo "selected" ?>>Tribune 1</option>
          <option value="Tribune_2" <?php if($jenis_tiket == "Tribune_2") echo "selected" ?>>Tibune 2</option>
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="harga_tiket" class="col-sm-2 col-form-label">Harga Tiket</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="harga_tiket" name="harga_tiket"value="<?php echo $harga_tiket ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jumlah_tiket" class="col-sm-2 col-form-label">Jumlah Tiket</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jumlah_tiket" name="jumlah_tiket"value="<?php echo $jumlah_tiket ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="total_harga" class="col-sm-2 col-form-label">Total Harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="total_harga" name="total_harga"value="<?php echo $total_harga ?>">
    </div>
  </div>
  <div class="col-12">
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
  </div>
    </form>
  </div>
</div>

<!--untuk mengeluarkan data-->
<div class="card">
  <div class="card-header text-white bg-black">
    Lihat Data Anda Disini
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">jenis Tiket</th>
                <th scope="col">Harga Tiket</th>
                <th scope="col">Jumlah Tiket</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Aksi</th>
            </tr>
    </thead>
            <tbody>
                <?php
                $sql2   = "select * from tiket_konser order by id desc";
                $q2     = mysqli_query($koneksi,$sql2);
                $urut   = 1;
                while($r2 = mysqli_fetch_array($q2)){
                    $id             = $r2['id'];
                    $nama           = $r2['nama'];
                    $tanggal_lahir  = $r2['tanggal_lahir'];
                    $jenis_tiket    = $r2['jenis_tiket'];
                    $harga_tiket    = $r2['harga_tiket'];
                    $jumlah_tiket   = $r2['jumlah_tiket'];
                    $total_harga    = $r2['total_harga'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo $urut++ ?></th>
                        <td scope="row"><?php echo $nama ?></td>
                        <td scope="row"><?php echo $tanggal_lahir ?></td>
                        <td scope="row"><?php echo $jenis_tiket ?></td>
                        <td scope="row"><?php echo $harga_tiket ?></td>
                        <td scope="row"><?php echo $jumlah_tiket ?></td>
                        <td scope="row"><?php echo $total_harga ?></td>
                        <td scope="row">
                        <a href="checkout.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-secondary">Edit</button></a>
                        <a href="checkout.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau hapus data?')">
                            <button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    <?php

                }
                ?>
            </tbody>
    </table>
  </div>
</div>
    </div>

</body>
</html>