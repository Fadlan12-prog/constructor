<?php
class olahraga{
  public $kegiatan;
  public $jenis;

  public function __construct($kegiatan,$jenis = "Bulutangkis")
  {
      $this->kegiatan = $kegiatan;
      $this->jenis = $jenis;
    }
     public function cetak(){
       return "$this->kegiatan | $this->jenis";
  }
}

$olahragasaya = new olahraga("Olahraga","Bulutangkis");

echo $olahragasaya->cetak();
?>