<style>
        footer {
            background: #333; 
            color: white; 
            padding: 20px; 
            width: 100%; 
            margin-top: 20px;
            font-family: sans-serif;
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
                    <a href="https://instagram.com/lahnan_adi" style="color: #4ade80;">Lahnan</a> & 
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
