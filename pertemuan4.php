<?php
class bagiThr
{
    public function karyawan($nik)
    {
        $nik = substr($nik, 0, 3);
        if ($nik == "K01") {
            $karyawan = "senior";
        } elseif ($nik == "K02") {
            $karyawan = "junior";
        } elseif ($nik == "K03") {
            $karyawan = "fresh years";
        } elseif ($nik == "K04") {
            $karyawan = "intership";
        }
        return $karyawan;
    }

    public function tunjangan($nik)
    {
        $nik = substr($nik, 0, 3);
        if ($nik == "K01") {
            $tunjangan = 5000000;
        } elseif ($nik == "K02") {
            $tunjangan = 3000000;
        } elseif ($nik == "K03") {
            $tunjangan = 1000000;
        } elseif ($nik == "K04") {
            $tunjangan = 0;
        }
        return $tunjangan;
    }

    public function Bonus($nik)
    {
        $nik = substr($nik, 0, 3);
        if ($nik == "K01") {
            $bonus = 2500000;
        } elseif ($nik == "K02") {
            $bonus = 0;
        } elseif ($nik == "K03") {
            $bonus = 0;
        } elseif ($nik == "K04") {
            $bonus = 1000000;
        }

        return $bonus;
    }

    public function iuran($gapok, $tunjangan, $bonus)
    {        
        $thr = ($gapok + $tunjangan + $bonus) * 0.05;        
        return $thr;
    }
    public function thr($nik, $gapok, $tunjangan, $bonus, $iuran)
    {
        $nik = substr($nik, 0, 3);
        if ($nik == "K01" || $nik = "K02") {
            $thr = ($gapok + $tunjangan + $bonus) - $iuran;
        } elseif ($nik == "K03" || $nik == "K04") {
            $thr = ((0.5 * $gapok) + $tunjangan + $bonus) - $iuran;
        } 
        return $thr;
    }

    public function gajiPokok($nik)
    {
        $nik = substr($nik, 0, 3);
        if ($nik == "K01") {
            $gapok = 3000000;
        } elseif ($nik == "K02") {
            $gapok = 3000000;
        } elseif ($nik == "K03") {
            $gapok = 3000000;
        } elseif ($nik == "K04") {
            $gapok = 3000000;
        }

        return $gapok;
    }
}

$berbagi = new bagiThr();
$nik = "K03876";
$nama = "Nisa";

echo "NIK      = " . $nik . "<br>";
echo "Nama     = " . $nama . "<br>";
echo "<br>";
echo "Gaji Pokok = " . $gapok = $berbagi->gajiPokok($nik) . "<br>";
echo "Tunjangan = " . $tunjangan = $berbagi->tunjangan($nik) . "<br>";
echo "Bonus = " . $bonus = $berbagi->Bonus($nik) . "<br>";
echo "Iuran = " . $iuran = $berbagi->iuran($gapok, $tunjangan, $bonus)."<br>";
echo "THR = " . $thr =  $berbagi->thr($nik, $gapok, $tunjangan, $bonus, $iuran). "<br>";