<?php

class About{
    public function index($nama = 'Farhan', $pekerjaan = 'Programmer', $umur = 19){
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
    }

    public function page(){
        echo 'About/page';
    }
}