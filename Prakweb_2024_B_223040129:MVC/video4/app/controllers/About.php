<?php


class About
{
    public function index($nama = 'Akbar', $pekerjaan = 'Backend')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}