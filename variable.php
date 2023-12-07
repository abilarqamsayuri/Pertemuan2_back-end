<?php 

    // Menggunakan echo untuk menampilkan ke web
    echo "<h1>Hello Word</h1>";


    // Membuat variable baru
    $harga1 = 1000;
    $nama_barang = "Kopi Robusta";
    $harga2 = 20000;
    $stok = 30;


    // Mengabmbil nilai dari variable
    echo "Harga Roti Gepeng Adalah $harga1 <br>";
    echo "Konsumen Membeli $nama_barang Dengan Harga Rp$harga2 Dengan Jumlah $stok pcs <br>";


    // Membuat variable lokal
    function var_local()
    {
        $angka = 11;
        echo"Local angka = $angka <br>";
    } 
    // var_local()


    // Membuat variable global
    $global = 12;
    function var_global()
    {
    
        //
    
    } 

    echo"Variable angka diluar function variable adalah $global <br><br>";


    // Membuat Variable Static
    function var_static()
    {
        // Definisakn variable 
        static $angka1 = 5;
        $nomor = 2;
        // ket."ketika kita menggunakan sintax static yang ada di sebelah kiri variable angka1 maka di tampilan akan menambahkan satu angka kalau tidak menggunakan statik maka tidak akan menambah"

        // Penambahan pada variable
        $angka1++;
        $nomor++;

        // Output variable
        echo $angka1,"<br>";
        echo $nomor,"<br><br>";
    }
    var_static();
    var_static();


    // Membuat variable constanta
    const gaji = "Rp10.000.000 <br><br>";
    echo gaji;


    // $_nama = "Abil Arqam Sayuri&nbsp";
    // $_umur = 19;
    // echo $_nama."Umurnya&nbsp".$_umur."&nbspTahun<br><br>"

    // TIPE DATA

    // Membuat tipe Data String
    $lembaga = "Pesantren Teknologi Informasi Komunikasi (PeTIK II Jombang) <br>";
    $alamat = "Jl. Denanyar, Jombang<br><br>";

    echo $lembaga;
    echo $alamat;

    class Salam
    {
        var $hai;
    }

    $helo = new Salam();

    $helo->hai ="Hello Word <br><br>";

    echo $helo->hai;

    $a = 6;
    $b = 2;

    $c = $a + $b;
    echo $c, "<br><br>";

    $a += 2;
    echo $a,"<br><br>";

    $b .= 2;
    echo $b,"<br><br>";

    $f = "i love&nbsp"."u";
    $f .= "&nbspsmch <br><br>";
    echo $f;

    $_bc = "aa";
    echo $_bc;

    $bayar = 5000;
    echo $bayar;
?>