<?php require_once BASE_PATH . '/app/views/templates/header.php'; ?>

<div class="cart-page">
    <div class="container">
        <h1 class="page-title">Carrinho de Compras</h1>
        
        <?php if (empty($data['cart_items'])): ?>
            <div class="empty-cart">
                <div class="empty-icon">🛒</div>
                <h2>Seu carrinho está vazio</h2>
                <p>Adicione alguns produtos incríveis ao seu carrinho!</p>
                <a href="<?php echo URL; ?>" class="btn btn-primary">Continuar Comprando</a>
            </div>
        <?php else: ?>
            <div class="cart-layout">
                <div class="cart-items">
                    <?php 
                    $subtotal = 0;
                    foreach ($data['cart_items'] as $item): 
                        $item_total = $item->price * $item->quantity;
                        $subtotal += $item_total;
                    ?>
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect fill='%23f8f9fa' width='100' height='100'/><text x='50%' y='50%' font-family='Arial' font-size='12' text-anchor='middle' dy='.3em'>Produto</text></svg>" 
                                 alt="<?php echo $item->name; ?>">
                        </div>
                        <div class="item-details">
                            <h3><?php echo $item->name; ?></h3>
                            <p class="item-price">R$ <?php echo number_format($item->price, 2, ',', '.'); ?></p>
                        </div>
                        <div class="item-quantity">
                            <span class="quantity">Qtd: <?php echo $item->quantity; ?></span>
                        </div>
                        <div class="item-total">
                            R$ <?php echo number_format($item_total, 2, ',', '.'); ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="cart-summary">
                    <div class="summary-card">
                        <h3>Resumo do Pedido</h3>
                        <div class="summary-line">
                            <span>Subtotal:</span>
                            <span>R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></span>
                        </div>
                        <div class="summary-line">
                            <span>Frete:</span>
                            <span>Grátis</span>
                        </div>
                        <div class="summary-line total">
                            <span>Total:</span>
                            <span>R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></span>
                        </div>
                        <a href="<?php echo URL; ?>checkout" class="btn btn-primary btn-block">Finalizar Compra</a>
                        <a href="<?php echo URL; ?>" class="btn btn-outline btn-block">Continuar Comprando</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
    .page-title {
        font-size: 2rem;
        font-weight: 300;
        margin-bottom: 2rem;
        text-align: center;
    }
    
    .empty-cart {
        text-align: center;
        padding: 4rem 2rem;
    }
    
    .empty-icon {
        font-size: 4rem;
        margin-bottom: 1rem;
        opacity: 0.5;
    }
    
    .empty-cart h2 {
        margin-bottom: 1rem;
        color: #666;
    }
    
    .cart-layout {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 3rem;
        align-items: start;
    }
    
    .cart-items {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .cart-item {
        display: grid;
        grid-template-columns: 80px 1fr auto auto;
        gap: 1rem;
        padding: 1.5rem;
        border-bottom: 1px solid #eee;
        align-items: center;
    }
    
    .cart-item:last-child {
        border-bottom: none;
    }
    
    .item-image img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 4px;
    }
    
    .item-details h3 {
        font-size: 1rem;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }
    
    .item-price {
        color: #666;
        font-size: 0.9rem;
    }
    
    .item-quantity {
        color: #666;
    }
    
    .item-total {
        font-weight: 600;
    }
    
    .cart-summary {
        position: sticky;
        top: 2rem;
    }
    
    .summary-card {
        background: #fff;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .summary-card h3 {
        margin-bottom: 1.5rem;
        font-weight: 600;
    }
    
    .summary-line {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #eee;
    }
    
    .summary-line.total {
        font-weight: 600;
        font-size: 1.1rem;
        border-bottom: none;
        margin-bottom: 1.5rem;
    }
    
    .btn-block {
        display: block;
        width: 100%;
        text-align: center;
        margin-bottom: 0.5rem;
    }
    
    @media (max-width: 768px) {
        .cart-layout {
            grid-template-columns: 1fr;
        }
        
        .cart-item {
            grid-template-columns: 60px 1fr;
            gap: 0.5rem;
        }
        
        .item-quantity,
        .item-total {
            grid-column: 1 / -1;
            text-align: right;
        }
    }
</style>

<?php require_once BASE_PATH . '/app/views/templates/footer.php'; ?>