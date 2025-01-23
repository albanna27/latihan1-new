<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Perkuliahan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        .perkuliahan-item {
            border-bottom: 2px solid #f1f1f1;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
        .mata-kuliah {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
        }
        .dosen, .mahasiswa {
            font-size: 1.1em;
            color: #555;
        }
        .mahasiswa ul {
            list-style-type: none;
            padding-left: 0;
        }
        .mahasiswa ul li {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Daftar Perkuliahan</h1>

        <!-- Daftar Perkuliahan 1 -->
        <div class="perkuliahan-item">
            <div class="mata-kuliah">Rekayasa WEB</div>
            <div class="dosen"><strong>Dosen:</strong> Ardiansyah M.Kom</div>
            <div class="mahasiswa">
                <strong>Mahasiswa:</strong>
                <ul>
                    <li>Dion</li>
                    <li>Pandu</li>
                    <li>Zulfikar</li>
                    <li>Danish</li>
                    <li>Izam</li>
                </ul>
            </div>
        </div>

        <!-- Daftar Perkuliahan 2 -->
        <div class="perkuliahan-item">
            <div class="mata-kuliah">Tata Kelola TI</div>
            <div class="dosen"><strong>Dosen:</strong> Krisna Nuresa Qodri, S.T., M.Eng</div>
            <div class="mahasiswa">
                <strong>Mahasiswa:</strong>
                <ul>
                    <li>Dion</li>
                    <li>Pandu</li>
                    <li>Zulfikar</li>
                    <li>Danish</li>
                    <li>Izam</li>
                </ul>
            </div>
        </div>

        <!-- Daftar Perkuliahan 3 -->
        <div class="perkuliahan-item">
            <div class="mata-kuliah">Jaringan Switching dan Wireless</div>
            <div class="dosen"><strong>Dosen:</strong> Nisrina Akbar Rizky Putri,S.T., M.Eng</div>
            <div class="mahasiswa">
                <strong>Mahasiswa:</strong>
                <ul>
                    <li>Dion</li>
                    <li>Pandu</li>
                    <li>Zulfikar</li>
                    <li>Danish</li>
                    <li>Izam</li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>
