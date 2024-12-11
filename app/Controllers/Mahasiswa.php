<?php

namespace Controllers;

use Models\Model_mhs;

class Mahasiswa
{
    public $mhs;
    public function __construct()
    {
        $this->mhs = new Model_mhs();
    }

    public function index()
    {
        require_once 'app/Views/index.php';
    }
    public function tampilData()
    {
        $rs = $this->mhs->lihatData();
        require_once 'app/Views/mhsList.php';
    }

    function show_data()
    {
        if (!isset($_GET['i'])) {
            //jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
            $rs = $this->mhs->lihatData();
            require_once('app/Views/mhsList.php');
        } else {
            //ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih
            $rs = $this->mhs->lihatDataDetail($_GET['i']);
            require_once('app/Views/mhsDetail.php');
        }
    }

    function save()
    {
        $nim =  $_POST['nim'];
        $nama = $_POST['nama'];

        //penyimpanan data ke model
        $this->mhs->simpanData($nim, $nama);
        $this->index(); //controller dikembalikan ke method index setelah selesai mengakses method ini.
    }

    function update()
    {
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];

        $this->mhs->updateData($nim, $nama, $id);
        $this->tampilData();
    }

    function delete()
    {
        if (isset($_GET['i'])) {
            $id = $_GET['i'];
            $this->mhs->hapusData($id);
            $this->tampilData();
        }
    }
}
