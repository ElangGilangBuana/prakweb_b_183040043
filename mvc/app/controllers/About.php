<?php

class About
{
    public function index($nama = 'Elang', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, Nama saya $nama saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
