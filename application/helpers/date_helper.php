<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('tanggal_indo')) {
    function tanggal_indo($tanggal) {
        $bulan = array(
            1  => 'Januari', 2  => 'Februari', 3  => 'Maret',
            4  => 'April', 5  => 'Mei', 6  => 'Juni',
            7  => 'Juli', 8  => 'Agustus', 9  => 'September',
            10 => 'Oktober', 11 => 'November', 12 => 'Desember'
        );

        $tgl = date('d', strtotime($tanggal));
        $bln = $bulan[(int) date('m', strtotime($tanggal))];
        $thn = date('Y', strtotime($tanggal));

        return $tgl . ' ' . $bln . ' ' . $thn;
    }
}
