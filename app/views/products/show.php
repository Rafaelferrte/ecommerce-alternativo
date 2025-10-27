<?php require_once BASE_PATH . '/app/views/templates/header.php'; ?>

<div class="product-detail">
    <div class="container">
        <nav class="breadcrumb">
            <a href="<?php echo URL; ?>">Início</a> /
            <a href="<?php echo URL; ?>products/category/<?php echo $data['product']->category_slug; ?>">
                <?php echo $data['product']->category_name; ?>
            </a> /
            <span><?php echo $data['product']->name; ?></span>
        </nav>
        
        <div class="product-layout">
            <div class="product-gallery">
                <div class="main-image">
                    <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 600'><rect fill='%23f8f9fa' width='600' height='600'/><text x='50%' y='50%' font-family='Arial' font-size='18' text-anchor='middle' dy='.3em'>Imagem do Produto</text></svg>" 
                         alt="<?php echo $data['product']->name; ?>">
                </div>
            </div>
            
            <div class="product-info">
                <h1><?php echo $data['product']->name; ?></h1>
                <div class="product-price">
                    <span class="current">R$ <?php echo number_format($data['product']->price, 2, ',', '.'); ?></span>
                    <?php if ($data['product']->compare_price): ?>
                        <span class="compare">R$ <?php echo number_format($data['product']->compare_price, 2, ',', '.'); ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="product-description">
                    <p><?php echo $data['product']->description; ?></p>
                </div>
                
                <div class="product-actions">
                    <form action="<?php echo URL; ?>cart/add" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $data['product']->id; ?>">
                        <div class="quantity-selector">
                            <label>Quantidade:</label>
                            <select name="quantity">
                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </form>
                </div>
                
                <div class="product-features">
                    <div class="feature">
                        <strong>🚚 Frete Grátis</strong>
                        <p>Para compras acima de R$ 199</p>
                    </div>
                    <div class="feature">
                        <strong>↩️ Troca Fácil</strong>
                        <p>30 dias para trocar</p>
                    </div>
                    <div class="feature">
                        <strong>💳 Parcelamento</strong>
                        <p>Em até 6x sem juros</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .breadcrumb {
        margin-bottom: 2rem;
        font-size: 0.9rem;
        color: #666;
    }
    
    .breadcrumb a {
        color: #666;
        text-decoration: none;
    }
    
    .breadcrumb a:hover {
        color: #000;
    }
    
    .product-layout {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: start;
    }
    
    .product-gallery .main-image img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }
    
    .product-info h1 {
        font-size: 2rem;
        font-weight: 300;
        margin-bottom: 1rem;
    }
    
    .product-price {
        margin-bottom: 2rem;
    }
    
    .product-price .current {
        font-size: 1.5rem;
        font-weight: 600;
        color: #000;
    }
    
    .product-price .compare {
        font-size: 1rem;
        color: #666;
        text-decoration: line-through;
        margin-left: 0.5rem;
    }
    
    .product-description {
        margin-bottom: 2rem;
        line-height: 1.6;
    }
    
    .quantity-selector {
        margin-bottom: 1.5rem;
    }
    
    .quantity-selector label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }
    
    .quantity-selector select {
        padding: 0.5rem;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    
    .product-features {
        margin-top: 2rem;
        border-top: 1px solid #eee;
        padding-top: 2rem;
    }
    
    .feature {
        margin-bottom: 1rem;
    }
    
    .feature strong {
        display: block;
        margin-bottom: 0.25rem;
    }
    
    .feature p {
        color: #666;
        font-size: 0.9rem;
    }
    
    @media (max-width: 768px) {
        .product-layout {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
    }
</style>

<?php require_once BASE_PATH . '/app/views/templates/footer.php'; ?>