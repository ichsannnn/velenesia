<?php 

if (! function_exists('terjemahkan_hari')) {
  function terjemahkan_hari($hari, $hasil)
  {
    $hasil = strtolower($hasil);
    $terjemahan = ['panjang' => "Tidak ada hari \"$hari\"", 'pendek' => "Tidak ada hari \"$hari\""];
    
    if (strcasecmp($hari, "Sunday") == 0 || strcasecmp($hari, "Sun") == 0) $terjemahan = ['panjang' => 'Minggu', 'pendek' => "Min"];
    if (strcasecmp($hari, "Monday") == 0 || strcasecmp($hari, "Mon") == 0) $terjemahan = ['panjang' => 'Senin', 'pendek' => "Sen"];
    if (strcasecmp($hari, "Tuesday") == 0 || strcasecmp($hari, "Tue") == 0) $terjemahan = ['panjang' => 'Selasa', 'pendek' => "Sel"];
    if (strcasecmp($hari, "Wednesday") == 0 || strcasecmp($hari, "Wed") == 0) $terjemahan = ['panjang' => 'Rabu', 'pendek' => "Rab"];
    if (strcasecmp($hari, "Thursday") == 0 || strcasecmp($hari, "Thu") == 0) $terjemahan = ['panjang' => 'Kamis', 'pendek' => "Kam"];
    if (strcasecmp($hari, "Friday") == 0 || strcasecmp($hari, "Fri") == 0) $terjemahan = ['panjang' => 'Jum\'at', 'pendek' => "Jum"];
    if (strcasecmp($hari, "Saturday") == 0 || strcasecmp($hari, "Sat") == 0) $terjemahan = ['panjang' => 'Sabtu', 'pendek' => "Sab"];
    
    if (array_key_exists($hasil, $terjemahan)) return $terjemahan[$hasil];
    else return "Tidak ada parameter \"$hasil\"";
  }
}

if (! function_exists('terjemahkan_bulan')) {
  function terjemahkan_bulan($bulan, $hasil)
  {
    $hasil = strtolower($hasil);
    $terjemahan = ['angka' => "Tidak ada bulan \"$bulan\"", 'panjang' => "Tidak ada bulan \"$bulan\"", 'pendek' => "Tidak ada bulan \"$bulan\""];
    
    if ($bulan == "01" || strcasecmp($bulan, "January") == 0 || strcasecmp($bulan, "Jan") == 0) $terjemahan = ['angka' => '01', 'panjang' => 'Januari', 'pendek' => "Jan"];
    if ($bulan == "02" || strcasecmp($bulan, "February") == 0 || strcasecmp($bulan, "Feb") == 0) $terjemahan = ['angka' => '02', 'panjang' => 'Februari', 'pendek' => "Feb"];
    if ($bulan == "03" || strcasecmp($bulan, "March") == 0 || strcasecmp($bulan, "Mar") == 0) $terjemahan = ['angka' => '03', 'panjang' => 'Maret', 'pendek' => "Mar"];
    if ($bulan == "04" || strcasecmp($bulan, "April") == 0 || strcasecmp($bulan, "Apr") == 0) $terjemahan = ['angka' => '04', 'panjang' => 'April', 'pendek' => "Apr"];
    if ($bulan == "05" || strcasecmp($bulan, "May") == 0 || strcasecmp($bulan, "May") == 0) $terjemahan = ['angka' => '05', 'panjang' => 'Mei', 'pendek' => "Mei"];
    if ($bulan == "06" || strcasecmp($bulan, "June") == 0 || strcasecmp($bulan, "Jun") == 0) $terjemahan = ['angka' => '06', 'panjang' => 'Juni', 'pendek' => "Jun"];
    if ($bulan == "07" || strcasecmp($bulan, "July") == 0 || strcasecmp($bulan, "Jul") == 0) $terjemahan = ['angka' => '07', 'panjang' => 'Juli', 'pendek' => "Jul"];
    if ($bulan == "08" || strcasecmp($bulan, "August") == 0 || strcasecmp($bulan, "Aug") == 0) $terjemahan = ['angka' => '08', 'panjang' => 'Agustus', 'pendek' => "Agu"];
    if ($bulan == "09" || strcasecmp($bulan, "September") == 0 || strcasecmp($bulan, "Sep") == 0) $terjemahan = ['angka' => '09', 'panjang' => 'September', 'pendek' => "Sep"];
    if ($bulan == "10" || strcasecmp($bulan, "October") == 0 || strcasecmp($bulan, "Oct") == 0) $terjemahan = ['angka' => '10', 'panjang' => 'Oktober', 'pendek' => "Okt"];
    if ($bulan == "11" || strcasecmp($bulan, "November") == 0 || strcasecmp($bulan, "Nov") == 0) $terjemahan = ['angka' => '11', 'panjang' => 'November', 'pendek' => "Nov"];
    if ($bulan == "12" || strcasecmp($bulan, "December") == 0 || strcasecmp($bulan, "Dec") == 0) $terjemahan = ['angka' => '12', 'panjang' => 'Desember', 'pendek' => "Des"];

    if (array_key_exists($hasil, $terjemahan)) return $terjemahan[$hasil];
    else return "Tidak ada parameter \"$hasil\"";
  }
}