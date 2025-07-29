<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    <style>
        body {
            background: #f4f6fb;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 480px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(44, 62, 80, 0.08);
            padding: 32px 28px 24px 28px;
        }

        .logo {
            text-align: center;
            margin-bottom: 24px;
        }

        .title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 12px;
            text-align: center;
        }

        .desc {
            color: #4a5568;
            font-size: 1rem;
            margin-bottom: 32px;
            text-align: center;
        }

        .btn {
            display: block;
            width: 100%;
            background: linear-gradient(90deg, #5a8dee 0%, #699af9 100%);
            color: #fff !important;
            text-align: center;
            padding: 14px 0;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            margin-bottom: 28px;
            box-shadow: 0 2px 8px rgba(90, 141, 238, 0.08);
            transition: background 0.2s;
        }

        .btn:hover {
            background: linear-gradient(90deg, #699af9 0%, #5a8dee 100%);
        }

        .footer {
            color: #a0aec0;
            font-size: 0.95rem;
            text-align: center;
            margin-top: 24px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo" style="height:48px;">
        </div>
        <div class="title">Verifikasi Email</div>
        <div class="desc">
            Klik tombol di bawah ini untuk memverifikasi email Anda dan mengaktifkan akun.
        </div>
        <a href="<?php echo e($url); ?>" class="btn" target="_blank">Verifikasi Email</a>
        <div class="footer">
            Jika Anda tidak membuat akun, abaikan email ini.<br>
            Terima kasih.<br>
        </div>
    </div>
</body>

</html><?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/emails/verify-email.blade.php ENDPATH**/ ?>