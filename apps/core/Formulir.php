<?php
require_once "connection.php";

session_start();
   // Mengecek apakah user sudah login
if (isset($_SESSION['user_id'])) {
    // Mengambil informasi ID user dari variabel sesi
    $user_id = $_SESSION['user_id'];
  
    // Menampilkan informasi ID user
    echo 'User ID: ' . $user_id;
  } else {
    // Jika user belum login, menampilkan pesan error
    echo 'Anda belum login!';
  }

    class Formulir extends Database{
        private $conn;
        private $id_users;
        private $program;
        private $kamar;
        private $nama_lengkap;
        private $nik;
        private $nama_ayah_kandung;
        private $tempat_lahir;
        private $tanggal_lahir;
        private $no_paspor;
        private $tempat_dikeluarkan_paspor;
        private $tanggal_dikeluarkan_paspor;
        private $masa_berlaku_paspor;
        private $jenis_kelamin;
        private $golongan_darah;
        private $status_perkawinan;
        private $provinsi;
        private $kota_kabupaten;
        private $kecamatan;
        private $kelurahan;       
        private $jalan;
        private $email;
        private $no_telp_rumah;
        private $no_telp_seluler;
        private $pendidikan_terakhir;
        private $pekerjaan;
        private $keluarga_yg_ikut;
        private $hubungan;
        private $no_telp;
        private $informasi_pendaftaran;
        private $penyakit_kronis;
        private $keluarga_yg_bisa_dihubungi;
        private $hubungan_keluarga;
        private $no_telp_keluarga;
        private $foto;


        public function __construct() {
            $database = new Database();
            $this->conn = $database->getConnection();
        }

        public function Formulir(){
            $this->conn;
            $this->id_users= $_GET['id_users'];
            $this->program = $_POST['program'];
            $this->kamar = $_POST['kamar'];
            $this->nama_lengkap =$_POST['nama_lengkap'];
            $this->nik =$_POST['nik'];
            $this->nama_ayah_kandung = $_POST['nama_ayah_kandung'];
            $this->tempat_lahir = $_POST['tempat_lahir'];
            $this->tanggal_lahir = $_POST['tanggal_lahir'];
            $this->no_paspor = $_POST['no_paspor'];
            $this->tempat_dikeluarkan_paspor = $_POST['tempat_dikeluarkan_papor'];
            $this->tanggal_dikeluarkan_paspor = $_POST['tanggal_dikeluarkan_paspor'];
            $this->masa_berlaku_paspor = $_POST['masa_berlaku_paspor'];
            $this->jenis_kelamin = $_POST['jenis_kelamin'];
            $this->golongan_darah = $_POST['golongan_darah'];
            $this->status_perkawinan = $_POST['status_perkawinan'];
            $this->provinsi = $_POST['provinsi'];
            $this->kota_kabupaten = $_POST['kota_kabupaten'];
            $this->kecamatan = $_POST['kecamatan']; 
            $this->kelurahan = $_POST['kelurahan'];
            $this->jalan = $_POST['jalan'];
            $this->email = $_POST['email'];
            $this->no_telp_rumah = $_POST['no_telp_rumah'];
            $this->no_telp_seluler = $_POST['no_telp_seluler'];
            $this->pendidikan_terakhir = $_POST['pendidikan_terakhir'];
            $this->pekerjaan = $_POST['pekerjaan'];
            $this->keluarga_yg_ikut = $_POST['keluarga_yang_ikut'];
            $this->hubungan = $_POST['hubungan'];
            $this->no_telp = $_POST['no_telp'];
            $this->informasi_pendaftaran = $_POST['informasi_pendaftaran'];
            $this->penyakit_kronis = $_POST['penyakit_kronis'];
            $this->keluarga_yg_bisa_dihubungi = $_POST['keluarga_yg_bisa_dihubungi'];
            $this->hubungan_keluarga = $_POST['hubungan_keluarga'];
            $this->no_telp_keluarga = $_POST['no_telp_keluarga'];
            $this->foto = $_POST['foto'];

            $sql = "INSERT INTO formulir VALUES('$this->id_users','$this->program','$this->kamar','$this->nama_lengkap','$this->nik',
            '$this->nama_ayah_kandung','$this->tempat_lahir','$this->tanggal_lahir','$this->no_paspor','$this->tempat_dikeluarkan_paspor',
            '$this->tanggal_dikeluarkan_paspor','$this->masa_berlaku_paspor','$this->jenis_kelamin','$this->golongan_darah',
            '$this->status_perkawinan','$this->provinsi','$this->kota_kabupaten','$this->kecamatan','$this->kelurahan',
            '$this->jalan','$this->email','$this->no_telp_rumah','$this->no_telp_seluler','$this->pendidikan_terakhir','$this->pekerjaan',
            '$this->keluarga_yg_ikut','$this->hubungan','$this->no_telp','$this->informasi_pendaftaran','$this->penyakit_kronis',
            '$this->keluarga_yg_bisa_dihubungi','$this->hubungan_keluarga','$this->no_telp_keluarga','$this->foto')";

            if ($this->conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
           
            mysqli_close($this->conn);
     }

}

?>