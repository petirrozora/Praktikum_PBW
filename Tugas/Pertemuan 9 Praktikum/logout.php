<?php

session_unset(); // Hapus semua variabel session
session_destroy(); // Hancurkan session

header("Location: login.php?message=" . urlencode("Anda berhasil logout."));
exit;
?>
