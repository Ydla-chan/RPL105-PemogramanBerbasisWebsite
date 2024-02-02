<?php
session_start();

if (isset($_GET['logout_confirmation'])) {
    // Proses logout jika konfirmasi logout diterima
    session_destroy();
    echo '<script type="text/javascript">
            alert("Terima kasih. Anda telah logout.");  
            window.location.href = "index.php";
          </script>';
} else {
    // Tampilkan konfirmasi sebelum logout
    echo '<script type="text/javascript">
            var logoutConfirmation = confirm("Anda yakin ingin keluar?");
            if (logoutConfirmation) {
                window.location.href = "./login.php";
            } else {
                window.location.href = "./login.php";
            }
          </script>';
}
?>
