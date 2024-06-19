<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPILANGAMESITEM</title>
    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css/gi.css">
    
    
</head>
<body>
    <!-- header html -->
    <header class="header">
        <a href="#" class="logo"><i>Ara<span>Store</span> </i></a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="index.php" class="active">Home</a>
            <a href="index.php #about">About</a>
            <a href="index.php #team">Team</a>
            <a href="index.php #item">Items</a>
            <a href="index.php #contact">Message</a>
        </nav>
    </header>  

    <div class="container">
        <div class="left-section">
            <img src="images/valo3.jpg" alt="">
            <h1 style="color: #007BFF; font-size: 24px; margin-bottom: 10px;">Top Up Valorant di AraStore</h1>
            <p style="color: #ffff; font-size: 16px; line-height: 1.6; margin-bottom: 20px;">
                <strong>Top Up Valorant : Cepat, Mudah, dan Aman di AraStore!</strong><br>
                Dapatkan  Valorant point yang  anda mau dalam hitungan detik. Masukkan UID dan Pilih Server, pilih jumlah  Valorant points  yang diinginkan, dan selesaikan pembayaran dengan metode yang paling nyaman untuk Anda:
            </p>
            <ul class="payment-methods">
                <li><strong style="color: hwb(211 0% 30%); font-weight: bold;">Pulsa:</strong> Telkomsel,Axis,Indosat</li>
                <li><strong style="color: #0056b3; font-weight: bold;">E-Wallet:</strong> GoPay,DANA, ShopeePay,</li>
                <li><strong style="color: #0056b3; font-weight: bold;">Lainnya:</strong>QRIS</li>
            </ul>
            <p class="confirmation">
                Konfirmasi pembayaran Anda, dan Valorant point akan langsung ditambahkan ke akun Valorant Anda. <strong>Top up sekarang dan tingkatkan pengalaman bermain Anda!</strong>
            </p>
        </div>
        <div class="right-section">
            <div class="section-idgame" id="section2">
                <h2>Input ID Game</h2>
                <div class="input-group">
                    <input type="text" placeholder="Masukkan UID" id="username">
                    <input type="text" placeholder="Pilih Server" id="zone_id">
                </div>
            </div>

            <div class="section-item" id="section3">
                <h2>Item dari Game</h2>
                <h5>Valorant point</h5>
                <div class="services-container">
                    <div class="services-box"  onclick="selectItem('Valorant point', '13.514')">
                        <img src="images/itemhtml/valo.png" alt="">
                        <h3>125 Valorant point</h3>
                        <p>Rp.13.514</p> 
                    </div>
                    <div class="services-box" onclick="selectItem('Valorant point','45.650')">
                         <img src="images/itemhtml/valo.png" alt="">
                        <h3>420 Valorant point</h3>
                        <p>Rp. 45.650</p> 
                    </div>
                    <div class="services-box" onclick="selectItem('Valorant point','72.072')">
                         <img src="images/itemhtml/valo.png" alt="">
                        <h3>700 Valorant point</h3>
                        <p>Rp. 72.072</p> 
                    </div>
                    <div class="services-box" onclick="selectItem('Valorant point','135.135')">
                         <img src="images/itemhtml/valo.png" alt="">
                        <h3>1375 Valorant point</h3>
                        <p>Rp. 135.135</p> 
                    </div>
                    <div class="services-box" onclick="selectItem('Valorant point','225.225 ')">
                         <img src="images/itemhtml/valo.png" alt="">
                        <h3>2400 Valorant point</h3>
                        <p>Rp. 225.225 </p> 
                    </div>
                    <div class="services-box" onclick="selectItem('Valorant point','300.225 ')">
                        <img src="images/itemhtml/valo.png" alt="">
                       <h3>3400 Valorant point</h3>
                       <p>Rp. 300.225 </p> 
                   </div>
                   <div class="services-box" onclick="selectItem('Valorant point','360.360 ')">
                         <img src="images/itemhtml/valo.png" alt="">
                        <h3>4000 Valorant point</h3>
                        <p>Rp. 360.360 </p> 
                    </div>
                    <div class="services-box" onclick="selectItem('Valorant point','720.721 ')">
                        <img src="images/itemhtml/valo.png" alt="">
                       <h3>8150 Valorant point</h3>
                       <p>Rp. 720.721 </p> 
                   </div>
                   <div class="services-box" onclick="selectItem('Valorant point','926.570 ')">
                    <img src="images/itemhtml/valo.png" alt="">
                   <h3>9252 Valorant point</h3>
                   <p>Rp. 926.570 </p> 
               </div>
                </div>
                
            </div>

            <div class="section-pembayaran" id="section4">
                <h2>Pembayaran</h2>
                <div class="payment-option" onclick="updatePrice(this)">
                    <input type="radio" name="metode_pembayaran" id="gopay" value="gopay">
                    <label for="gopay">
                        <img src="images/gopay.png" alt="GoPay">
                        <span>GoPay</span>
                    </label>
                    <input type="text" placeholder="Masukkan Nomor Telepon Anda" id="gopay-phone">
                    <span class="price-tag">Rp. 0</span>
                </div>
                <div class="payment-option" onclick="updatePrice(this)">
                    <input type="radio" name="metode_pembayaran" id="dana" value="dana">
                    <label for="dana">
                        <img src="images/dana.jpg" alt="DANA">
                        <span>DANA</span>
                    </label>
                    <input type="text" placeholder="Masukkan Nomor Telepon Anda" id="dana-phone">
                    <span class="price-tag">Rp. 0</span>
                </div>
                <div class="payment-option" onclick="updatePrice(this)">
                    <input type="radio" name="metode_pembayaran" id="shopeepay" value="shopeepay">
                    <label for="shopeepay">
                        <img src="images/spay.jpg" alt="ShopeePay">
                        <span>ShopeePay</span>
                    </label>
                    <input type="text" placeholder="Masukkan Nomor Telepon Anda" id="shopeepay-phone">
                    <span class="price-tag">Rp. 0</span>
                </div>
                <div class="payment-option" onclick="updatePrice(this)">
                    <input type="radio" name="metode_pembayaran" id="qris" value="qris">
                    <label for="qris">
                        <img src="images/qris.jpg" alt="QRIS">
                        <span>QRIS</span>
                    </label>
                    <input type="text" placeholder="Masukkan Nomor Telepon Anda" id="qris-phone">
                    <span class="price-tag">Rp. 0</span>
                </div>
                <div class="payment-option" onclick="updatePrice(this)">
                    <input type="radio" name="metode_pembayaran" id="telkomsel" value="telkomsel">
                    <label for="telkomsel">
                        <img src="images/telkomsel.jpg" alt="Telkomsel">
                        <span>Telkomsel</span>
                    </label>
                    <input type="text" placeholder="Masukkan Nomor Telepon Anda" id="telkomsel-phone">
                    <span class="price-tag">Rp. 0</span>
                </div>
                <div class="payment-option" onclick="updatePrice(this)">
                    <input type="radio" name="metode_pembayaran" id="indosat" value="indosat">
                    <label for="indosat">
                        <img src="images/indosat.jpg" alt="Indosat">
                        <span>Indosat</span>
                    </label>
                    <input type="text" placeholder="Masukkan Nomor Telepon Anda" id="indosat-phone">
                    <span class="price-tag">Rp. 0</span>
                </div>
                <div class="payment-option" onclick="updatePrice(this)">
                    <input type="radio" name="metode_pembayaran" id="axis" value="axis">
                    <label for="axis">
                        <img src="images/axis.jpg" alt="Axis">
                        <span>Axis</span>
                    </label>
                    <input type="text" placeholder="Masukkan Nomor Telepon Anda" id="axis-phone">
                    <span class="price-tag">Rp. 0</span>
                </div>
                <div class="button-container">
                    <button type="button" onclick="showOrderDetails()">Bayar Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Detail Pesanan -->
    <div id="orderDetailsModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close-button">&times;</span>
                <h2>Detail Pesanan Anda</h2>
            </div>
            <div class="modal-body">
                <p><span class="detail-label">Nama Item  :</span> <span id="selectedItemName" class="detail-value"></span></p>
                <p><span class="detail-label">UID   :</span> <span id="confirmUsername" class="detail-value"></span></p>
                <p><span class="detail-label">Server:</span> <span id="confirmZoneID" class="detail-value"></span></p>
                <p><span class="detail-label">Metode Pembayaran:</span> <span id="confirmPaymentMethod" class="detail-value"></span></p>
                <p><span class="detail-label">Total Pembayaran:</span> <span id="confirmTotal" class="detail-value"></span></p>
            </div>
            <div class="modal-footer">
                <form id="orderConfirmationForm" action="pesananorder.php" method="post" style="display:none;">
                    <input type="hidden" name="game" id="hiddengame" >
                    <input type="hidden" name="ItemName" id="hiddenItemName">
                    <input type="hidden" name="username" id="hiddenUsername">
                    <input type="hidden" name="zoneID" id="hiddenZoneID">
                    <input type="hidden" name="paymentMethod" id="hiddenPaymentMethod">
                    <input type="hidden" name="total" id="hiddenTotal">
                </form>
                <button onclick="confirmOrder()">Konfirmasi Pesanan</button>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://unpkg.com/scrollreveal"></script>

<script src="js/index.js"></script>

        
    <script>
        // Mengosongkan inputan UID, server, dan nomor pembayaran ketika halaman di-refresh
        window.onload = function() {
            document.getElementById('username').value = '';
            document.getElementById('zone_id').value = '' ;
            document.querySelectorAll('input[type="text"]').forEach(input => input.value = '');
            document.querySelectorAll('.price-tag').forEach(tag => tag.textContent = 'Rp. 0');
        };

        // Fungsi untuk mengupdate harga pada opsi pembayaran
        function updatePrice(element) {
            // Menghapus kelas 'selected' dari semua opsi pembayaran
            document.querySelectorAll('.payment-option').forEach(opt => {
                opt.classList.remove('selected');
            });
            // Menambahkan kelas 'selected' ke opsi yang dipilih
            element.classList.add('selected');
        }
        let selectedItemName = '';

        // Fungsi untuk memilih item
        function selectItem(name,price) {
            //mengambil nama dari item yang diambil
            selectedItemName = name;
            // Perbarui harga pada semua metode pembayaran
            document.querySelectorAll('.price-tag').forEach(tag => {
                tag.innerHTML = 'Rp. ' + price;

            });
        }

        // Menampilkan rincian pesanan saat tombol "Bayar Sekarang" diklik
        function showOrderDetails() {
            var username = document.getElementById('username').value;
            var zoneID = document.getElementById('zone_id').value;
            var selectedPaymentOption = document.querySelector('input[name="metode_pembayaran"]:checked').labels[0].textContent.trim();
            var price = document.querySelector('.payment-option.selected .price-tag').textContent;

            document.getElementById('selectedItemName').textContent = selectedItemName;
            document.getElementById('confirmUsername').textContent = username;
            document.getElementById('confirmZoneID').textContent = zoneID;
            document.getElementById('confirmPaymentMethod').textContent = selectedPaymentOption;
            document.getElementById('confirmTotal').textContent = price;

            document.getElementById('orderDetailsModal').style.display = 'block';
        }

        // Menutup modal saat tombol 'x' diklik
        document.getElementsByClassName("close-button")[0].onclick = function() {
            document.getElementById('orderDetailsModal').style.display = "none";
        }

        // Menutup modal saat mengklik di luar modal
        window.onclick = function(event) {
            if (event.target == document.getElementById('orderDetailsModal')) {
                document.getElementById('orderDetailsModal').style.display = "none";
            }
        }

        // Menampilkan alert saat pesanan dikonfirmasi
        function confirmOrder() {
            document.getElementById('hiddengame').value="Valorant";
            document.getElementById('hiddenItemName').value=document.getElementById('selectedItemName').textContent;
            document.getElementById('hiddenUsername').value = document.getElementById('confirmUsername').textContent;
            document.getElementById('hiddenZoneID').value = document.getElementById('confirmZoneID').textContent;
            document.getElementById('hiddenPaymentMethod').value = document.getElementById('confirmPaymentMethod').textContent;
            document.getElementById('hiddenTotal').value = document.getElementById('confirmTotal').textContent;
            document.getElementById('orderConfirmationForm').submit();
        }
        
        document.querySelector('.close-button').addEventListener('click', function() {
            document.getElementById('orderDetailsModal').style.display = 'none';
        });

    
    </script>
</body>
</html>
