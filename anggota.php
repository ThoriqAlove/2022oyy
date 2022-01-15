<?php
if(isset($_GET['hapus'])){
    $id = $_GET['id'];
    $query_delete = mysqli_query($koneksi,"DELETE FROM anggota WHERE id_anggota = '$id'");
    if ($query_delete) {
        header ('refresh:5');
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Telah Dihapus...!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php
    }
}
?>

<Center><h1 class="mt-3">DATA ANGGOTA</h1></Center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Tambah Data
</button>
<table class="table table-primary table-striped">
<tr>
    <th>NO</th>
    <th>NIS</th>
    <th>NAMA</th>
    <th>KELAS</th>
    <th>JURUSAN</th>
    <th>TGL LAHIR</th>
    <th>NO TELP</th>
    <th>ALAMAT</th>
    <th>JENIS KELAMIN</th>
    <th>ACTION</th>
</tr>
    <?php
    $no=1;
        $query = mysqli_query($koneksi,"SELECT * from anggota");
        foreach ($query as $row) {  
    ?>
<tr>
<td class="table-success" valign="middle"><?php echo $no ?></td>
<td class="table-success" valign="middle"><?php echo $row ['nis'] ?></td>
<td class="table-success" valign="middle"><?php echo $row ['nama'] ?></td>
<td class="table-success" valign="middle"><?php echo $row ['kelas'] ?></td>
<td class="table-success" valign="middle"><?php echo $row ['jurusan'] ?></td>
<td class="table-success" valign="middle"><?php echo $row ['tgl_lahir'] ?></td>
<td class="table-success" valign="middle"><?php echo $row ['no_telepon'] ?></td>
<td class="table-success" valign="middle"><?php echo $row ['alamat'] ?></td>
<td class="table-success" valign="middle"><?php echo $row ['jenis_kelamin'] ?></td>
<td class="table-success" valign="middle">
<a href="?page=anggota&hapus&id=<?php echo $row ['id_anggota']; ?>">
<button class="btn btn-danger">  <i class="far fa-trash-alt"></i> </button>
</a>
<button class="btn btn-warning">  <i class="fas fa-edit"></i> </button>
</td>
</tr>
<?php
$no++;
}
?>

<!-- --------------------------------------------------------------------------------------------------------------  -->



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
      <div class="form-group mb-2">
      <input class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa">
      </div>
      <div class="form-group mb-2">
      <input class="form-control" type="text" name="nama" placeholder="Nama Siswa">
      </div>
      <div class="input-group mb-2">
      <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
      <select class="form-control" name="kelas" id="inputGroupSelect01">\
      <option value="">Pilih Kelas</option>
      <option value="X">X</option>
      <option value="XI">XI</option>
      <option value="XII">XII</option>
      </select>
      </div>
      <div class="input-group mb-2">
      <label class="input-group-text" for="inputGroupSelect01">Jurusan</label>
      <select class="form-control" name="jurusan" id="inputGroupSelect01">\
      <option value="">Pilih Jurusan</option>
      <option value="RPL">Rekayasa Perangkat Lunak</option>
      <option value="TKR">Teknik Kendaraan Ringan</option>
      <option value="TAV">Teknik Audio Video</option>
      <option value="TITL">Teknik Instalasi Tenaga Listrikk</option>
      </select>
      </div>
      <div class="input-group mb-2">
      <span class="input-group-text"> Tanggal Lahir</span>
      <input class="form-control" type="date" name="tgl_lahir" placeholder="Masukan Tanggal Lahir">
      </div>
      <div class="form-group mb-2"> 
        <input class="form-control" type="text" name="no_telepon" placeholder="Masukan No Telepon">
      </div>
      <div class="form-floating mb-2">
  <textarea  name="alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Alamat</label>
  </div>
      <div class="form-group">
      <label class="input-group-text" for="inputGroupSelect01">Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="P">Perempuan</option>
            <option value="L">Laki-Laki</option>
        </select>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
</table>