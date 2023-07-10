<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .title {
            text-align: center;
        }
        .bordered {
            margin: auto;
            border-bottom: solid 3px;
            width: 600px;
        }
        .no-bordered {
            margin: auto;
            /* border: solid 1px; */
            width: 600px;
        }
        .section-2 {
            float: right;
        }
        .center-margin {
            margin: auto;
            width: 600px;
        }
        .cop {
            /* float: right; */
            /* border: solid 1px; */
            margin-top: 10px;
            width: 250px;
        }
        .title-rekomendasi {
            padding: 20px;
        }
        .ttd {
            float: right;
            /* border: solid 1px; */
            margin-top: 10px;
            width: 250px;
        }
    </style>
</head>
<body>
    <div class="title bordered">
        <h4>HASIL PENILAIAN</h4>
        <h4>IMPLEMENTASI KODE ETIK KEPERAWATAN</h4>
    </div>
    <div class="center-margin">
        <table>
            <tr>
                <td><div style="width: 340px;"></div></td>
                <td><div class="cop" style="margin-top: 20px;">
                    <table class="">
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td>: {{$tahun}}</td>
                        </tr>
                        <tr>
                            <td>Hari dan Tanggal</td>
                            <td>: {{$hari}}, {{$tanggal}} {{$bulan}}</td>
                        </tr>
                    </table>
                </div></td>
            </tr>
        </table>
    </div>
    <div class="no-bordered" style="margin-top: 20px;">
        <table class="">
            <tr>
                <td>Nama Perawat</td>
                <td>: {{$datas->nama}}</td>
            </tr>
            <tr>
                <td>Ruangan/Instalasi</td>
                <td>: {{$datas->ruangan}}</td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>: {{$datas->nip}}</td>
            </tr>
            <tr>
                <td>Jenjang Karir</td>
                <td>: {{$datas->jenjang_karir}}</td>
            </tr>
        </table>
    </div>
    
    <div class="title no-bordered" style="margin-top: 20px;">
        <p>Hasil Penilaian</p>
        <p>(Nilai Interval: <strong>{{$datas->nilai_interval}}</strong>, Nilai Perilaku: <strong>{{$datas->nilai_perilaku}}</strong>, Nilai Kategori: <strong>{{$datas->kategori_nilai}}</strong>)</p>
    </div>
    <div class="no-bordered" style="margin-top: 20px;">
        <p style="margin-left: 20px;">Rekomendasi :</p>
        <p style="margin-left: 20px; margin-right: 20px">.............................................................................................................................................</p>
        <p style="margin-left: 20px; margin-right: 20px">.............................................................................................................................................</p>
        <p style="margin-left: 20px; margin-right: 20px">.............................................................................................................................................</p>
        <p style="margin-left: 20px; margin-right: 20px">.............................................................................................................................................</p>
        <p style="margin-left: 20px; margin-right: 20px">.............................................................................................................................................</p>
       </div>
    <div class="center-margin">
        <div class="title ttd" style="margin-top: 20px;">
            <p>...</p>
            <p style="margin-top: 50px;">..............................................</p>
        </div>
    </div>
</body>
</html>