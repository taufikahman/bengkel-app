<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Member</title>
    <style>
        /* CSS untuk tampilan cetakan */
        @page {
            margin: 2cm;
            margin-header: 0.5cm;
            margin-footer: 0.5cm;
            border: 1px solid #000; /* Garis border untuk seluruh kotak halaman */
            header {
                content: element(header);
            }
            footer {
                content: element(footer);
            }
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 10pt; /* Mengurangi ukuran font */
        }

        header, footer {
            width: 100%;
            text-align: center;
            position: running(headerfooter);
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 24pt;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .footer {
            font-size: 8pt; /* Mengurangi ukuran font di footer */
            margin-top: 20px;
        }

        .center {
            text-align: center;
        }

        .address {
            font-size: 8pt; /* Mengurangi ukuran font alamat */
            margin-top: 5px; /* Mengurangi jarak atas */
        }
    </style>
</head>
<body>
    <htmlpageheader name="header">
        <h2 class="center">PT. Prima Sistem Informasi</h2>
        <div class="address">
            <p class="center">Head office : Sona Topas Tower, Level 5A Jl. Jend. Sudirman</p>
            <p class="center">Kav. 26, Jakarta Pusat 12920 – Indonesia</p>
            <p class="center">Telp: +62 21 2985-8060 Fax: +62 21 250-6223</p>
            <p class="center">Email: info@primasis.id</p>
        </div>
    </htmlpageheader>

    <h1 class="center">Laporan Data Member</h1>

    <table>
        <thead>
            <tr>
                <th>Kode Member</th>
                <th>Nama Member</th>
                <th>Kota</th>
                <th>Alamat Lengkap</th>
                <th>PIC</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
            <tr>
                <td>{{ $member->kode_member }}</td>
                <td>{{ $member->nama_member }}</td>
                <td>{{ $member->kota }}</td>
                <td>{{ $member->alamat_lengkap }}</td>
                <td>{{ $member->pic }}</td>
                <td>{{ $member->telepon }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <htmlpagefooter name="footer">
        <div class="footer">
            <p>&copy; {{ date('Y') }} PT. Prima Sistem Informasi</p>
        </div>
    </htmlpagefooter>
</body>
</html>
