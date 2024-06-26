<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPILANGAMESITEM</title>
    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css/indosat.css">
    
</head>
<body>
    <!-- header html -->
        <header class="header">
            <a href="#" class="logo"><i>Ara<span>Store</span> </i></a>
    
            <i class='bx bx-menu' id="menu-icon"></i>
    
            <nav class="navbar">
                <a href="index.html #home" class="active">Home</a>
                <a href="index.html #about">About</a>
                <a href="index.html #team">Team</a>
                <a href="index.html #item">Items</a>
                <a href="index.html #contact">Message</a>
            </nav>
        </header>  

        <div class="container">
            <div class="left-section">
                <img src="images/indosat.jpg" alt="Mobile Legends">
                <h1 style="color: #007BFF; font-size: 24px; margin-bottom: 10px;">Top Up Mobile Legends di AraStore</h1>
                <p style="color: #ffff; font-size: 16px; line-height: 1.6; margin-bottom: 20px;">
                    <strong>Top Up Mobile Legends: Cepat, Mudah, dan Aman di AraStore!</strong><br>
                    Dapatkan Diamond, Twilight Pass, dan Weekly Pass Anda dalam hitungan detik. Masukkan User ID dan Zone ID MLBB Anda, pilih jumlah Diamond yang diinginkan, dan selesaikan pembayaran dengan metode yang paling nyaman untuk Anda:
                </p>
                <ul class="payment-methods">
                    <li><strong style="color: hwb(211 0% 30%); font-weight: bold;">Pulsa:</strong> Telkomsel,Axis,Indosat</li>
                    <li><strong style="color: #0056b3; font-weight: bold;">E-Wallet:</strong> GoPay,DANA, ShopeePay,</li>
                    <li><strong style="color: #0056b3; font-weight: bold;">Lainnya:</strong>QRIS</li>
                </ul>
                <p class="confirmation">
                    Konfirmasi pembayaran Anda, dan Diamond akan langsung ditambahkan ke akun Mobile Legends Anda. <strong>Top up sekarang dan tingkatkan pengalaman bermain Anda!</strong>
                </p>
            </div>
            <div class="right-section">
                <div class="section-idgame" id="section2">
                    <h2>Input ID Game</h2>
                    <div class="input-group">
                        <input type="text" placeholder="Masukkan Username" id="username">
                        <input type="text" placeholder="Masukkan ID Game" id="game_id">
                        <input type="text" placeholder="Masukkan Zone ID" id="zone_id">
                    </div>
                </div>

                <div class="section-item" id="section3">
                    <h2>Item dari Game</h2>
                    <div class="services-container">
                        <div class="services-box" onclick="selectItem('10.000')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>3 Diamond</h3>
                            <p>Rp. 1.171</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('20.000')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>28 Diamond</h3>
                            <p>Rp. 7.000</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('11.400')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>44 Diamond</h3>
                            <p>Rp. 11.400</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('15.200')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>59 Diamond</h3>
                            <p>Rp. 15.200</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('43.700')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>170 Diamond</h3>
                            <p>Rp. 43.700</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('61.700')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>240 Diamond</h3>
                            <p>Rp. 61.700</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('76.000')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>296 Diamond</h3>
                            <p>Rp. 76.000</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('104.400')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>408 Diamond</h3>
                            <p>Rp. 104.400</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('142.500')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>568 Diamond</h3>
                            <p>Rp. 142.500</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('218.500')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>875 Diamond</h3>
                            <p>Rp. 218.500</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('475.000')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>2010 Diamond</h3>
                            <p>Rp. 475.000</p> 
                        </div>
                        <div class="services-box" onclick="selectItem('1.140.000')">
                            <i class='bx bxs-diamond' style="color: #007BFF;"></i>
                            <h3>4830 Diamond</h3>
                            <p>Rp. 1.140.000</p> 
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
                    <!-- Telkomsel -->
                    <div class="payment-option" onclick="updatePrice(this)">
                        <input type="radio" name="metode_pembayaran" id="telkomsel" value="telkomsel">
                        <label for="telkomsel">
                            <img src="images/telkomsel.jpg" alt="Telkomsel">
                            <span>Telkomsel</span>
                        </label>
                        <input type="text" placeholder="Masukkan Nomor Telkomsel Anda" id="telkomsel-phone">
                        <span class="price-tag">Rp. 0</span>
                    </div>
                    <!-- Axis -->
                    <div class="payment-option" onclick="updatePrice(this)">
                        <input type="radio" name="metode_pembayaran" id="axis" value="axis">
                        <label for="axis">
                            <img src="images/axis.jpg" alt="Axis">
                            <span>Axis</span>
                        </label>
                        <input type="text" placeholder="Masukkan Nomor Axis Anda" id="axis-phone">
                        <span class="price-tag">Rp. 0</span>
                    </div>
                    <!-- Indosat -->
                    <div class="payment-option" onclick="updatePrice(this)">
                        <input type="radio" name="metode_pembayaran" id="indosat" value="indosat">
                        <label for="indosat">
                            <img src="images/indosat.jpg" alt="Indosat">
                            <span>Indosat</span>
                        </label>
                        <input type="text" placeholder="Masukkan Nomor Indosat Anda" id="indosat-phone">
                        <span class="price-tag">Rp. 0</span>
                    </div>
                    <div class="button-container">
                        <button type="button" onclick="showOrderDetails()">Bayar Sekarang</button>
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
                            <p><span class="detail-label">Username:</span> <span id="confirmUsername" class="detail-value">arya</span></p>
                            <p><span class="detail-label">ID Game:</span> <span id="confirmGameID" class="detail-value">qw</span></p>
                            <p><span class="detail-label">Zone ID:</span> <span id="confirmZoneID" class="detail-value">qw</span></p>
                            <p><span class="detail-label">Metode Pembayaran:</span> <span id="confirmPaymentMethod" class="detail-value"></span></p>
                            <p><span class="detail-label">Total Pembayaran:</span> <span id="confirmTotal" class="detail-value">Rp. 10.000</span></p>
                        </div>
                        <div class="modal-footer">
                            <button onclick="confirmOrder()">Konfirmasi Pesanan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <script src="js/index.js"></script>
   <script>
   function selectItem(price) {
       // Perbarui harga pada semua metode pembayaran
       document.querySelectorAll('.price-tag').forEach(tag => {
           tag.innerHTML = 'Rp. ' + price;
       });
   }

   function updatePrice(element) {
       // Menghapus kelas 'selected' dari semua opsi pembayaran
       document.querySelectorAll('.payment-option').forEach(opt => {
           opt.classList.remove('selected');
       });
       // Menambahkan kelas 'selected' ke opsi yang dipilih
       element.classList.add('selected');
   }

   function showOrderDetails() {
       var username = document.getElementById('username').value;
       var gameID = document.getElementById('game_id').value;
       var zoneID = document.getElementById('zone_id').value;
       var selectedPaymentOption = document.querySelector('input[name="metode_pembayaran"]:checked').labels[0].textContent.trim();
       var price = document.querySelector('.payment-option.selected .price-tag').textContent;

       document.getElementById('confirmUsername').textContent = username;
       document.getElementById('confirmGameID').textContent = gameID;
       document.getElementById('confirmZoneID').textContent = zoneID;
       document.getElementById('confirmPaymentMethod').textContent = selectedPaymentOption;
       document.getElementById('confirmTotal').textContent = price;

       document.getElementById('orderDetailsModal').style.display = 'block';
   }

   // When the user clicks on <span> (x), close the modal
   document.getElementsByClassName("close-button")[0].onclick = function() {
       document.getElementById('orderDetailsModal').style.display = "none";
   }

   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
       if (event.target == document.getElementById('orderDetailsModal')) {
           document.getElementById('orderDetailsModal').style.display = "none";
       }
   }

   function confirmOrder() {
       alert('Pesanan Anda telah dikonfirmasi!');
       document.getElementById('orderDetailsModal').style.display = "none";
   }

   </script>
</body>
</html>
