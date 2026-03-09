<!DOCTYPE html>
<html>

<head>
    <title>Login - Protocolo Triagem</title>
    <!-- Montserrat Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?= base_url('assets/favicon_logo.png') ?>" type="image/png">

    <style>
        :root {
            --primary-blue: #0056b3;
            --deep-blue: #003366;
            --gradient-blue: linear-gradient(135deg, #0056b3 0%, #003366 100%);
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: #f4f7fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            overflow: hidden;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }

        .login-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(0, 51, 102, 0.1);
            padding: 40px;
            border: none;
            text-align: center;
        }

        .brand-icon {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: 0 10px 20px rgba(0, 51, 102, 0.1);
            overflow: hidden;
            padding: 10px;
        }

        .brand-icon img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .brand-icon svg {
            width: 45px;
            height: 45px;
            fill: white;
        }

        h2 {
            font-weight: 800;
            color: var(--deep-blue);
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: -1px;
        }

        p.subtitle {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 20px;
            border: 2px solid #eef2f7;
            background: #fcfdfe;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: none;
            background: white;
        }

        .btn-login {
            background: var(--gradient-blue);
            border: none;
            border-radius: 12px;
            padding: 12px;
            width: 100%;
            color: white;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 51, 102, 0.15);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 25px rgba(0, 51, 102, 0.25);
            opacity: 0.95;
        }

        .error-alert {
            background-color: #fff5f5;
            color: #e03131;
            padding: 12px;
            border-radius: 12px;
            font-size: 0.85rem;
            margin-bottom: 20px;
            font-weight: 600;
            border: 1px solid #ffc9c9;
        }

        .footer-text {
            font-size: 0.8rem;
            color: #6c757d;
            margin-top: 25px;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-card">
            <div class="brand-icon">
                <img src="<?= base_url('assets/logo_unifarma.png') ?>" alt="Logo Unifarma">
            </div>

            <h2>Login</h2>
            <p class="subtitle">Protocolo Triagem
                <?= date('Y') ?>
            </p>

            <?php if ($this->session->flashdata('erro')): ?>
                <div class="error-alert">
                    <?= $this->session->flashdata('erro') ?>
                </div>
            <?php endif; ?>

            <form method="post" action="<?= base_url('auth/autenticar') ?>">
                <div class="mb-3 text-start">
                    <label class="form-label ms-1 small fw-bold">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="usuario@organizacao" required>
                </div>

                <div class="mb-4 text-start">
                    <label class="form-label ms-1 small fw-bold">Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn btn-login">Entrar no Sistema</button>
            </form>

            <div class="footer-text">
                &copy; <?= date('Y') ?> Desenvolvido por Gabriel Estrela
            </div>
        </div>
    </div>

</body>

</html>