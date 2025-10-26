<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Roupa Alternativa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }
        
        .navbar {
            background: rgba(44, 62, 80, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
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
            color: #fff;
            text-decoration: none;
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .nav-menu {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        
        .nav-link {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover {
            color: #e74c3c;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #e74c3c;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .main-content {
            margin-top: 80px;
            min-height: calc(100vh - 160px);
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="<?php echo URL; ?>" class="nav-logo">
                🎭 Roupa Alternativa
            </a>
            <div class="nav-menu">
                <a href="<?php echo URL; ?>" class="nav-link">Início</a>
                <a href="<?php echo URL; ?>products" class="nav-link">Produtos</a>
                <a href="<?php echo URL; ?>about" class="nav-link">Sobre</a>
                <a href="<?php echo URL; ?>contact" class="nav-link">Contato</a>
            </div>
        </div>
    </nav>

    <main class="main-content">