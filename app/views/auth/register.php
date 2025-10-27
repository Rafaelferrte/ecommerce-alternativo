<?php require_once BASE_PATH . '/app/views/templates/header.php'; ?>

<div class="auth-page">
    <div class="container">
        <div class="auth-form">
            <h1>Criar Conta</h1>
            <p>Já tem uma conta? <a href="<?php echo URL; ?>auth/login">Faça login</a></p>
            
            <form action="<?php echo URL; ?>auth/register" method="POST">
                <div class="form-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" id="name" name="name" value="<?php echo $data['name']; ?>" required>
                    <?php if (!empty($data['name_err'])): ?>
                        <span class="error"><?php echo $data['name_err']; ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $data['email']; ?>" required>
                    <?php if (!empty($data['email_err'])): ?>
                        <span class="error"><?php echo $data['email_err']; ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                    <?php if (!empty($data['password_err'])): ?>
                        <span class="error"><?php echo $data['password_err']; ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirmar Senha</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <?php if (!empty($data['confirm_password_err'])): ?>
                        <span class="error"><?php echo $data['confirm_password_err']; ?></span>
                    <?php endif; ?>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Criar Conta</button>
            </form>
        </div>
    </div>
</div>

<style>
    .auth-page {
        padding: 4rem 0;
        background: #f8f9fa;
        min-height: calc(100vh - 200px);
        display: flex;
        align-items: center;
    }
    
    .auth-form {
        max-width: 400px;
        margin: 0 auto;
        background: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .auth-form h1 {
        text-align: center;
        margin-bottom: 0.5rem;
        font-weight: 300;
    }
    
    .auth-form > p {
        text-align: center;
        margin-bottom: 2rem;
        color: #666;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }
    
    .form-group input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
    }
    
    .form-group input:focus {
        outline: none;
        border-color: #000;
    }
    
    .error {
        color: #e74c3c;
        font-size: 0.8rem;
        display: block;
        margin-top: 0.25rem;
    }
</style>

<?php require_once BASE_PATH . '/app/views/templates/footer.php'; ?>