 <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Cara Perebutan Proyek</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 169 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="<?= $profil['embed'];?>" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="modal modal-video fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Login</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 169 aspect ratio -->
                    
                        <form action="" method="POST" enctype="multipart/form-data">
                            <table width="100%" class="">
                                <tr>
                                    <td width="5%"><P>&nbsp;</P></td>
                                    <td width="15%">Username</td>
                                    <td width="65%"> <input type="text" class="form-control" name="username" required=""></td>
                                    <td width="5%"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Password</td>
                                    <td> <input type="password" class="form-control" name="password" required=""></td>

                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>  <input name="login" type="submit" class="btn btn-info btn-flat btn-pri btn-md" value="Login"></td>
                                    <td></td>
                                    <td width="5%"></td>
                                </tr>
                            </table>
                          
                                  
                        </form>
                </div>
            </div>
        </div>
    </div>
     <div class="modal modal-video fade" id="registerasi" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Registerasi Akun</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 169 aspect ratio -->

                        <form action="?page=page/simpankontraktor" method="POST" enctype="multipart/form-data">
                            <table width="100%" class="">
                                <tr>
                                    <td width="5%"><P>&nbsp;</P></td>
                                    <td width="15%">Nama PT</td>
                                    <td width="65%"> <input type="text" class="form-control" name="namapt" required=""></td>
                                    <td width="5%"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Nama Direktur</td>
                                    <td> <input type="text" class="form-control" name="namadirektur" required=""></td>

                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Logo</td>
                                    <td> <input type="file" class="form-control" name="logo" required=""></td>

                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Dokumen Perusahaan (NPWP,NIB,IUP & AKTA)</td>
                                    <td> <input type="file" class="form-control" name="dokumen" required=""></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Tanggal Berdiri</td>
                                    <td> <input type="date" class="form-control" name="tgl_berdiri" required=""></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Alamat Kantor</td>
                                    <td> <input type="text" class="form-control" name="alamat" required=""></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>No Hp</td>
                                    <td> <input type="text" class="form-control" name="nohp" required=""></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Username</td>
                                    <td> <input type="text" class="form-control" name="username" required=""></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Password</td>
                                    <td> <input type="password" class="form-control" name="password" required=""></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>  <button type="submit" class="btn btn-info btn-flat btn-pri btn-md">simpan</button></td>
                                    <td></td>
                                    <td width="5%"></td>
                                </tr>
                            </table>
                          
                                  
                        </form>
                  
                </div>
            </div>
        </div>
    </div>
    <?php 
 $tampil=$koneksi->query("select * from kontraktor where id_kontraktor='$_SESSION[id]'");
                     $data=mysqli_fetch_array($tampil);
    ?>
    <div class="modal modal-video fade" id="profil<?= $_SESSION['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Profil </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 169 aspect ratio -->

                        <form action="?page=page/updateprofil" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $data['id_kontraktor'];?>">
                            <table width="100%" class="">
                                <tr>
                                    <td width="5%"><P>&nbsp;</P></td>
                                    <td width="15%">Nama PT</td>
                                    <td width="65%"> <input type="text" class="form-control" name="namapt" value="<?= $data['namapt'];?>"></td>
                                    <td width="5%"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Nama Direktur</td>
                                    <td> <input type="text" class="form-control" name="namadirektur" value="<?= $data['namadirektur'];?>"></td>

                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Logo</td>
                                    <td> <input type="file" class="form-control" name="logo" ></td>

                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Dokumen Perusahaan (NPWP,NIB,IUP & AKTA)</td>
                                    <td> <input type="file" class="form-control" name="dokumen" ></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Tanggal Berdiri</td>
                                    <td> <input type="date" class="form-control" name="tgl_berdiri" value="<?= $data['tgl_berdiri'];?>"></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Alamat Kantor</td>
                                    <td> <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'];?>"></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>No Hp</td>
                                    <td> <input type="text" class="form-control" name="nohp" value="<?= $data['nohp'];?>"></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Username</td>
                                    <td> <input type="text" class="form-control" name="username" value="<?= $data['username'];?>"></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>Password</td>
                                    <td> <input type="password" class="form-control" name="password" value="<?= $data['password'];?>"></td>
                                    <td width="5%"></td>
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td><p></p></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><P>&nbsp;</P></td>
                                    <td>  <button type="submit" class="btn btn-info btn-flat btn-pri btn-md">Update Profil</button></td>
                                    <td></td>
                                    <td width="5%"></td>
                                </tr>
                            </table>
                          
                                  
                        </form>
                  
                </div>
            </div>
        </div>
    </div>
    <?php 

if (isset($_POST['login'])){
  

date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
//$password = sha1($password1);

//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);



$q = $koneksi->query( "select * from kontraktor where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
    $_SESSION['id']        = $row['id_kontraktor'];
    $_SESSION['namapt']        = $row['namapt'];
    $_SESSION['username']   = $username;
    $_SESSION['password']       = $row['password'];
    $_SESSION['logo'] = $row['logo'];
    $_SESSION['dokumen']     = $row['dokumen'];
    
   echo "<script>alert('Login berhasil')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'></script>";
   
   
} else {
    echo "<script>alert('Login gagal, coba ulangi kembali.')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'></script>";
}


}

?>