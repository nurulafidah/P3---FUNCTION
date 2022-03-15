<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nilai Siswa</title>
</head>
<body>
    <h2>Nilai Akhir Siswa</h2>
    <fieldset>
        <?php
            include_once 'libfungsi.php';

            if(isset($_POST['submit'])){
                $nama_lengkap = $_POST['nama_lengkap'];
                $matkul = $_POST['matkul'];
                $nilai_uts = $_POST['nilai_uts'];
                $nilai_uas = $_POST['nilai_uas'];
                $nilai_tugas = $_POST['nilai_tugas'];
                        
                echo 'Nama : ' .$nama_lengkap = $_POST['nama_lengkap'].'<br>';
                echo 'Matkul : ' .$matkul = $_POST['matkul'].'<br>';
                echo 'Nilai UTS : ' .$nilai_uts = $_POST['nilai_uts'].'<br>';
                echo 'Nilai UAS : ' .$nilai_uas = $_POST['nilai_uas'].'<br>';
                echo 'Nilai Tugas : ' .$nilai_tugas = $_POST['nilai_tugas'].'<br>';

                $uts = is_numeric($nilai_uts) * 0.3;
                $uas = is_numeric($nilai_uas) * 0.35;
                $tugas = is_numeric($nilai_tugas) * 0.35;

                $nilai = is_numeric($uts) + is_numeric($uas) + is_numeric($tugas);
                
                echo kelulusan($nilai).'<br/>';
                echo grade($nilai).'<br/>';
                echo predikat($nilai).'<br/>';
            }
        ?>
    </fieldset>
</body>
</html>