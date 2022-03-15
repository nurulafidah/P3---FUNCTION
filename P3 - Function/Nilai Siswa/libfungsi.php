<?php
    function kelulusan($nilai) {
        $minimal = is_numeric('55');
        if ($nilai >= $minimal) {
            echo "Selamat Anda Lulus";
        } else {
            echo "Anda Tidak Lulus";
        }
    }
    
    function grade($nilai) {
        if (is_numeric($nilai) >= 85 and is_numeric($nilai) <= 100) {
            echo "Grade: A";
        } elseif (is_numeric($nilai) >= 70) {
            echo "Grade: B";
        } elseif (is_numeric($nilai) >= 56) {
            echo "Grade: C";
        } elseif (is_numeric($nilai) >= 36) {
            echo "Grade: D";
        } elseif (is_numeric($nilai) >= 0) {
            echo "Grade: E";
        } else {
            echo "Nilai tidak valid.";
        }

    
    function predikat($nilai) {
        if (is_numeric($nilai) >= 85 and is_numeric($nilai) <= 100) {
            echo "Predikat: Sangat Memuaskan";
        } elseif (is_numeric($nilai) >= 70) {
            echo "Predikat: Memuaskan";
        } elseif (is_numeric($nilai) >= 56) {
            echo "Predikat: Cukup";
        } elseif (is_numeric($nilai) >= 36) {
            echo "Predikat: Kurang";
        } elseif (is_numeric($nilai) >= 0) {
            echo "Predikat: Sangat Kurang";
        } else {
            echo "Predikat: Tidak Ada";
        }
    }
    }
?>