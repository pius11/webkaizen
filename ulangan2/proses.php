<?php
$kd = $_POST['kdKaryawan'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$GJ = $_POST['gajiPokok'];
$jabatan = $_POST['jabatan'];
$JHKS = $_POST['JHK'];
$mk = $_POST['masaKerja'];
function hitungUangMakan($jabatan, $JHKS) {


   
    $umk=0;
    if ($jabatan == 'manager') {
        $umk = $JHKS * 50000;
    }
    if ($jabatan == 'supervisor') {
        $umk = $JHKS * 30000;
    }
    if ($jabatan == 'staf') {
        $umk = $JHKS * 20000;
    }
    return $umk;
}

function tunjangan($jabatan){
   
    $tunjangan=0;
    if ($jabatan == 'manager') {
        $tunjangan = 1000000;
    }
    if ($jabatan == 'supervisor') {
        $tunjangan = 300000;
    }
    if ($jabatan == 'staf') {
        $tunjangan = 200000;
    }
    
    return $tunjangan;
}
function tunjanganKhusus($jabatan, $mk)  {
    
    $TK = 0;
    if ($jabatan == 'manager') {
        $m= $mk /5;
       $u = intdiv($m,1);
        $total = $u* 1000000;
    }
    if ($jabatan == 'supervisor') {
        $m= $mk /5;
        $u = intdiv($m,1);
        $total = $u* 500000;
    }
    if ($jabatan == 'staf') {
        $m= $mk /5;
        $u = intdiv($m,1);
        $total = $u * 200000;
    }
return $total;
}
$totalUangMakan = hitungUangMakan($jabatan, $JHKS);
$totalTunjangan = tunjangan($jabatan);
$totalTunjanganKhusus = tunjanganKhusus($jabatan, $mk);
$totalsemua = $GJ + $totalUangMakan + $totalTunjangan + $totalTunjanganKhusus;

echo "kode karyawan : $kd <br>";
echo "nama karyawan : $nama <br>";
echo "gaji pokok : $GJ <br>" ;
echo "jabatan : $jabatan <br>";
echo "jumlah hari kerja  : $JHKS <br>";
echo "masa kerja : $mk <br>";
echo "uang makan : $totalUangMakan<br>";
echo "tunjangan jabatan  : $totalTunjangan <br>";
echo "tunjangan khusus : $totalTunjanganKhusus <br>";
echo "total gaji : $totalsemua <br>";
?>