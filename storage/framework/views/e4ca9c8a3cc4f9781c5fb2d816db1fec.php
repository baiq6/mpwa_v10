<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(in_array(app()->getLocale(), ['ar', 'he', 'fa']) ? 'rtl' : 'ltr'); ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo e(config('config.site_name')); ?> - Reset Password</title>
	<style>
		body {
			background: #f4f6fb;
			font-family: 'Segoe UI', Arial, sans-serif;
			margin: 0;
			padding: 0;
			color: #222;
		}

		.container {
			max-width: 420px;
			margin: 40px auto;
			background: #fff;
			border-radius: 12px;
			box-shadow: 0 4px 24px rgba(44, 62, 80, 0.08);
			overflow: hidden;
		}

		.header {
			background: linear-gradient(90deg, #4f8cff 0%, #38b6ff 100%);
			color: #fff;
			text-align: center;
			padding: 32px 24px 18px 24px;
		}

		.header h1 {
			margin: 0 0 8px 0;
			font-size: 1.6rem;
			font-weight: 700;
			letter-spacing: 1px;
		}

		.header p {
			margin: 0;
			font-size: 1rem;
			opacity: 0.9;
		}

		.content {
			padding: 32px 24px 24px 24px;
		}

		.content h2 {
			margin-top: 0;
			font-size: 1.2rem;
			color: #222;
			font-weight: 600;
		}

		.content p {
			font-size: 1rem;
			color: #444;
			margin-bottom: 24px;
		}

		.btn {
			display: inline-block;
			background: linear-gradient(90deg, #4f8cff 0%, #38b6ff 100%);
			color: #fff !important;
			padding: 12px 32px;
			border-radius: 6px;
			font-size: 1rem;
			font-weight: 600;
			text-decoration: none;
			margin-bottom: 18px;
			box-shadow: 0 2px 8px rgba(44, 62, 80, 0.08);
			transition: background 0.2s;
		}

		.btn:hover {
			background: linear-gradient(90deg, #38b6ff 0%, #4f8cff 100%);
		}

		.footer {
			background: #f4f6fb;
			text-align: center;
			padding: 18px 24px;
			font-size: 0.95rem;
			color: #aaa;
		}

		.small {
			font-size: 0.92rem;
			color: #888;
		}

		@media (max-width: 500px) {
			.container {
				margin: 0;
				border-radius: 0;
			}

			.header,
			.content,
			.footer {
				padding-left: 12px;
				padding-right: 12px;
			}
		}
	</style>
</head>


<body>
	<div class="container">
		<div class="header">
			<h1><?php echo e(config('config.site_name')); ?></h1>
			<p><?php echo e(__('emails.reset_password.title')); ?></p>
		</div>
		<div class="content">
			<h2><?php echo e(__('emails.reset_password.greeting')); ?></h2>
			<p><?php echo e(__('emails.reset_password.intro')); ?></p>
			<p style="text-align:center;">
				<a href="<?php echo e($url); ?>" class="btn" target="_blank" rel="noopener"><?php echo e(__('emails.reset_password.button')); ?></a>
			</p>
			<p class="small"><?php echo e(__('emails.reset_password.notice')); ?></p>
			<p class="small"><?php echo e(__('emails.reset_password.link_help')); ?><br>
				<a href="<?php echo e($url); ?>" style="color:#4f8cff;word-break:break-all;"><?php echo e($url); ?></a>
			</p>
		</div>
		<div class="footer">
			<?php echo e(__('emails.reset_password.copyright', ['year' => date('Y'), 'site_name' => config('config.site_name')])); ?>

		</div>
	</div>
</body>

</html><?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/emails/reset.blade.php ENDPATH**/ ?>