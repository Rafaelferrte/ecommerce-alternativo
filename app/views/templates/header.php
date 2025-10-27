<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - UrbanAlternative</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: #fff;
            color: #333;
            line-height: 1.6;
        }

        .top-bar {
            background: #000;
            color: #fff;
            padding: 0.5rem 0;
            font-size: 0.8rem;
        }

        .top-bar-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .navbar {
            background: #fff;
            border-bottom: 1px solid #e5e5e5;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .nav-logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #000;
            text-decoration: none;
            letter-spacing: -1px;
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-link {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #666;
        }

        .nav-actions {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .icon-link {
            color: #333;
            text-decoration: none;
            font-size: 1.1rem;
            position: relative;
        }

        .main-content {
            min-height: calc(100vh - 200px);
        }

        .search-form {
            display: flex;
            gap: 0.5rem;
        }

        .search-form input {
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
            width: 200px;
        }

        .search-form button {
            background: #000;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
        }

        .cart-count {
            background: #e74c3c;
            color: #fff;
            border-radius: 50%;
            padding: 0.1rem 0.4rem;
            font-size: 0.7rem;
            position: absolute;
            top: -8px;
            right: -8px;
            min-width: 18px;
            text-align: center;
            line-height: 1;
        }

        /* Estilos para mensagens flash */
        .alert {
            padding: 1rem;
            margin: 1rem 2rem;
            border-radius: 4px;
            text-align: center;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>

<body>
    <div class="top-bar">
        <div class="top-bar-content">
            <span>FRETE GRÁTIS EM COMPRAS ACIMA DE R$ 199</span>
            <div>
                <a href="#" style="color: #fff; margin-left: 1rem; text-decoration: none;">Ajuda</a>
                <a href="#" style="color: #fff; margin-left: 1rem; text-decoration: none;">Acompanhar Pedido</a>
            </div>
        </div>
    </div>

    <nav class="navbar">
        <div class="nav-container">
            <a href="<?php echo URL; ?>" class="nav-logo">
                URBANALTERNATIVE
            </a>

            <div class="nav-menu">
                <a href="<?php echo URL; ?>novidades" class="nav-link">Novidades</a>
                <a href="<?php echo URL; ?>masculino" class="nav-link">Masculino</a>
                <a href="<?php echo URL; ?>feminino" class="nav-link">Feminino</a>
                <a href="<?php echo URL; ?>acessorios" class="nav-link">Acessórios</a>
                <a href="<?php echo URL; ?>colecoes" class="nav-link">Coleções</a>
            </div>

            <div class="nav-actions">
                <form action="<?php echo URL; ?>products/search" method="POST" class="search-form">
                    <input type="text" name="search" placeholder="Buscar produtos..." required>
                    <button type="submit">🔍</button>
                </form>

                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="<?php echo URL; ?>cart" class="icon-link">
                        🛒
                        <?php
                        // Precisamos do model do carrinho - vamos verificar se existe
                        if (isset($this->cartModel)) {
                            $cartCount = $this->cartModel->getCartCount($_SESSION['user_id']);
                            if ($cartCount > 0): ?>
                                <span class="cart-count"><?php echo $cartCount; ?></span>
                            <?php endif;
                        } ?>
                    </a>
                    <a href="<?php echo URL; ?>auth/profile" class="icon-link">👤</a>
                    <a href="<?php echo URL; ?>auth/logout" class="nav-link">Sair</a>
                <?php else: ?>
                    <a href="<?php echo URL; ?>auth/login" class="nav-link">Login</a>
                    <a href="<?php echo URL; ?>auth/register" class="nav-link">Cadastrar</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <main class="main-content">
        <!-- Mensagens Flash -->
        <?php if (isset($_SESSION['success_msg'])): ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success_msg']; 
                unset($_SESSION['success_msg']); ?>
            </div>
        <?php endif; ?>
        
        <?php if (isset($_SESSION['error_msg'])): ?>
            <div class="alert alert-error">
                <?php echo $_SESSION['error_msg']; 
                unset($_SESSION['error_msg']); ?>
            </div>
        <?php endif; ?>