<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <style>

     html, body {
        max-width: 100%;
        overflow-x: hidden;
        overflow-y: hidden;
        }

      .paragraph {
      width: 150%;
      }

        /* Membuat container utama memenuhi layar dan konten di tengah */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Tengah secara horizontal */
            align-items: center;     /* Tengah secara vertikal */
            min-height: 100vh;       /* Tinggi minimal seukuran layar */
            background-color: #f8f9fa;
        }

        .content {
            text-align: center; /* Menengahkan teks di dalam div */
            padding: 20px;
        }

        h1 {
            font-family: "Arial", serif;
            font-size: 36px;
            color: darkgreen;
            margin-bottom: 10px;
        }



        .btn-kembali {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="content">
        <?php
            $waktu_skrg = date("H:i:s");
            $tanggal_skrg = date("d-m-Y");
        ?>
    
        <h1>Laporan Berhasil Dikirim!</h1>
        <p>Terima kasih telah menggunakan layanan <strong>TerpEN</strong>.</p>
        <p>Dikirim pada: <?php echo $tanggal_skrg . " pukul " . $waktu_skrg; ?> WIB</p>
        
        <a href="index.php" class="btn-kembali">Kembali ke Beranda</a>
    </div>

    <style>
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    background: #333; 
    color: white; 
    padding: 20px; 
    width: 98%; 
    z-index: 1000; /* Agar tidak tertutup elemen lain */
    font-family: sans-serif;
}

/* Tambahkan padding di body agar konten terakhir tidak tertutup footer */
body {
    padding-bottom: 100px; 
}

        .footer-container {
            display: flex;
            justify-content: space-between; 
            align-items: center; 
            gap: 20px;
        }

        .footer-text {
            text-align: left;
        }

        /* Container khusus untuk menampung 2 logo */
        .footer-logos {
            display: flex;
            gap: 15px; /* Jarak antar logo */
            align-items: center;
        }

        .logo-img {
            height: 50px; /* Atur tinggi yang sama supaya serasi */
            width: auto;
            border-radius: 4px;
        }

        footer p {
            margin: 5px 0;
            font-size: 13px;
            line-height: 1.4;
        }

        footer a {
            text-decoration: none;
            font-weight: bold;
        }

        /* Responsif untuk HP */
        @media (max-width: 600px) {
            .footer-container {
                flex-direction: column-reverse; 
                align-items: flex-start;
            }
            .footer-logos {
                margin-bottom: 15px; /* Kasih jarak bawah setelah logo di HP */
            }
            .logo-img {
                height: 35px; /* Logo mengecil sedikit di HP */
            }
            footer p {
                font-size: 11px;
            }
        }
    </style>

    <footer>
        <div class="footer-container">
            <div class="footer-text">
                <p>&copy; 2026 <strong>TerpEN</strong>. Open Source for Schools. Visit Our Github Space.</p>
                <p>Created by <a href="https://github.com/TerpENVISION" target="_blank" style="color: #ff4d4d;">TerpEN Team</a> for OPSI</p>
                <p>Contact Us: 
                    <a href="https://wa.me/62881036899823" style="color: #4ade80;">Lahnan</a> & 
                    <a href="https://wa.me/6285649331755" style="color: #4ade80;">Josh</a>
                </p>
            </div>

            <div class="footer-logos">
                <img src="assets/opsi-new.png" alt="Logo OPSI" class="logo-img">
                <img src="assets/garansi.png" alt="Logo TerpEN" class="logo-img">
            </div>
        </div>
    </footer>
</body>
</html>

</body>



</html>