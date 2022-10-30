<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tugas DOT</title>
    <style>
        .global, .global-input{
            width: 300px;
            padding: 10px;
            background: #ccc;
            margin: auto;
        }

        .global-input{
            width: 1000px;
        }

        input[name=alamat] {
            width: 500px;
        }

        input[name=register] {
            width: 250px;
            height: 30px;
            background: #3289a8;
            margin-top: 30px;
        }

        input[value=Daftar] {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="RegPasienKonfirm.php" method="post">
            <table align="left">
                <tr>
                    <th align="left" colspan="2"><h2>Registrasi Pelanggan</h2> </th>
                </tr>
                <tr>
                    <td class="global" colspan="2">Kode Pasien</td>
                    <td class="global-input"><input type="teks" name="kode">*</td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Nama Pasien</td>
                    <td class="global-input"><input type="teks" name="nama">*</td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Jenis Kelamin</td>
                    <td class="global-input"><input type="teks" name="jenis-kelamin">*</td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Golongan Darah</td>
                    <td class="global-input"><input type="teks" name="gol-dar">*</td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Umur</td>
                    <td class="global-input"><input type="teks" name="umur">*</td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Tempat Lahir</td>
                    <td class="global-input"><input type="teks" name="tempat-lahir">*</td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Tanggal Lahir</td>
                    <td class="global-input"><input type="teks" name="tanggal-lahir">*</td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Alamat</td>
                    <td class="global-input"><input type="teks" name="alamat">*</td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Status Perkawinan</td>
                    <td class="global-input"><input type="teks" name="status-perkawinan">*</td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Telepon (+62)</td>
                    <td class="global-input"><input type="teks" name="telepon"></td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Pekerjaan</td>
                    <td class="global-input"><input type="teks" name="pekerjaan"></td>
                </tr>
                <tr>
                    <td class="global" colspan="2">Agama</td>
                    <td class="global-input"><input type="teks" name="agama"></td>
                </tr>
                <tr>
                    <td>*)wajib diisi</td>
                </tr>
                <tr>
                    <td align = "left" colspan="2"><input type="submit" name="register" value="Daftar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>