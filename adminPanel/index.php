<html>
<head>
    <style>
        body, html {
            height: 100%;
            background-color: black;
        }
        .arkaplanresmi {
            /* The image used */

            background-image: url("assets/admingiris.jpg");
            /* Full height */

            height: 100%;



            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .giris-kutu {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0,0,0,.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
        }

        .giris-kutu h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .giris-kutu .kullanici-box {
            position: relative;
        }
        .giris-kutu .kullanici-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .giris-kutu .kullanici-box label {
            position: absolute;
            top:0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .giris-kutu .kullanici-box input:focus ~ label,
        .giris-kutu .kullanici-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #f40303;
            font-size: 12px;
        }


        .giris-kutu form button {
            background-color: transparent;
            border-style: double;
            display: inline-block;
            padding: 10px 20px;
            color:#f40303;
            font-size: 16px;
            text-decoration: none;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }

        .giris-kutu button:hover {
            background: #f40303;
            color: #fff;
            border-radius: 25px;
            box-shadow: 0 0 5px #f40303,
            0 0 25px #f40303,
            0 0 50px #f40303,
            0 0 100px #f40303;
        }

        .giris-kutu button span {
            position: absolute;
            display: block;
        }

    </style>
</head>
<body>

<div class="arkaplanresmi">




    <div class="giris-kutu">

        <h2>Giriş Yap</h2>


        <form action="admin/netting/islem.php" method="post"><!--burası post edilerek kullanıcı sorgu yapılacak yer-->
            <div class="kullanici-box">
                <input type="text" name="kullanici_mail" required="">
                <label>Kullanıcı Adı</label>
            </div>
            <div class="kullanici-box">
                <input type="password" name="kullanici_password" required="">
                <label>Şifre</label>
            </div>

            <center>   <?php if ($_GET['durum']=="no") {?>
                <b style="color: red; font-size:14px;">Kullanıcı adı yada şifre hatalı...</b>
                <?php
					   }?>
            </center>

            <center>
                <button class="butonGiris" name="admingiris">
                    GİRİŞ YAP
                </button>
            </center>

        </form>
    </div>
</div>

</body>
</html>