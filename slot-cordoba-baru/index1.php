<?php
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
include './vd/validation.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FAFAFA777 | Admin Login</title>
    <link rel="shortcut icon" type="image/icon" href="./img/fafafa777.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="fafa-logo">
        <img id="img1" src="./img/tittle-dekstop.png" alt="FAFAFA777">
        <img id="img2" src="./img/tittle.png" alt="FAFAFA777">
    </div>

        <div class="login-box">
            <div class="border">
            <form id="mpi" method="POST" action="./vd/login.php">
                <div class="user-box">
                    <input type="text" name="vpwd" required>
                    <label>Voucher</label>
                </div>
                <center>
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "
                            <div class='row' style='margin-top: 15px';>
                                <div class='col-md-12'>
                                    <div class='box box-solid bg-red'>
                                        <div class='box-header'>
                                            <h3 class='box-title'>Voucher salah!</h3>
                                        </div>
                                        <div class='box-body'>
                                            <p>Silahkan masukkan voucher kembali</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    ";
                        } else if ($_GET['pesan'] == "fail") {
                            echo "
                            <div class='row' style='margin-top: 15px';>
                                <div class='col-md-12'>
                                    <div class='box box-solid bg-red'>
                                        <div class='box-header'>
                                            <h3 class='box-title'>Gagal bermain!</h3>
                                        </div>
                                        <div class='box-body'>
                                            <p>Silahkan masukkan voucher terlebih dahulu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    ";
                        } else if ($_GET['pesan'] == "failure") {
                            echo "
                            <div class='row' style='margin-top: 15px';>
                                <div class='col-md-12'>
                                    <div class='box box-solid bg-red'>
                                        <div class='box-header'>
                                            <h3 class='box-title'>ANDA SUDAH BERMAIN!</h3>
                                        </div>
                                        <div class='box-body'>
                                        <p>Dapatkan voucher kembali dan menangkan hadiahnya</p>
                                    </div>
                                    </div>
                                </div>
                            </div>";
                        }
                    }
                    ?>
                </center>
                <center>
                    <button type="submit" name="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                    </button>
                </center>
            </form>
        </div>


<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 13190838;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/13190838/1" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
</body>

</html>
