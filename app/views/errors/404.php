<?php require_once BASE_PATH . '/app/views/templates/header.php'; ?>

<div class="error-page">
    <div class="container">
        <div class="error-content">
            <h1>404</h1>
            <h2>Página Não Encontrada</h2>
            <p>A página que você está procurando não existe.</p>
            <a href="<?php echo URL; ?>" class="btn btn-primary">Voltar para Home</a>
        </div>
    </div>
</div>

<style>
    .error-page {
        padding: 4rem 0;
        text-align: center;
        min-height: 60vh;
        display: flex;
        align-items: center;
    }
    
    .error-content h1 {
        font-size: 6rem;
        font-weight: 300;
        margin-bottom: 1rem;
        color: #e74c3c;
    }
    
    .error-content h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
        font-weight: 300;
    }
    
    .error-content p {
        margin-bottom: 2rem;
        color: #666;
        font-size: 1.1rem;
    }
</style>

<?php require_once BASE_PATH . '/app/views/templates/footer.php'; ?>