<?php require_once BASE_PATH . '/app/views/templates/header.php'; ?>

<div class="category-page">
    <div class="container">
        <div class="page-header">
            <h1><?php echo ucfirst($data['current_category']); ?></h1>
            <p><?php echo count($data['products']); ?> produtos encontrados</p>
        </div>
        
        <div class="category-layout">
            <aside class="category-sidebar">
                <h3>Categorias</h3>
                <ul class="category-list">
                    <?php foreach ($data['categories'] as $category): ?>
                    <li>
                        <a href="<?php echo URL; ?>products/category/<?php echo $category->slug; ?>" 
                           class="<?php echo $category->slug == $data['current_category'] ? 'active' : ''; ?>">
                            <?php echo $category->name; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </aside>
            
            <div class="category-products">
                <?php if (empty($data['products'])): ?>
                    <div class="no-products">
                        <p>Nenhum produto encontrado nesta categoria.</p>
                    </div>
                <?php else: ?>
                    <div class="products-grid">
                        <?php foreach ($data['products'] as $product): ?>
                        <div class="product-card">
                            <div class="product-image">
                                <a href="<?php echo URL; ?>product/show/<?php echo $product->slug; ?>">
                                    <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 300'><rect fill='%23f8f9fa' width='300' height='300'/><text x='50%' y='50%' font-family='Arial' font-size='16' text-anchor='middle' dy='.3em'>Imagem do Produto</text></svg>" 
                                         alt="<?php echo $product->name; ?>">
                                </a>
                            </div>
                            <div class="product-info">
                                <h3>
                                    <a href="<?php echo URL; ?>product/show/<?php echo $product->slug; ?>">
                                        <?php echo $product->name; ?>
                                    </a>
                                </h3>
                                <p class="product-category"><?php echo $product->category_name; ?></p>
                                <div class="product-price">
                                    <span class="current-price">R$ <?php echo number_format($product->price, 2, ',', '.'); ?></span>
                                    <?php if ($product->compare_price): ?>
                                        <span class="compare-price">R$ <?php echo number_format($product->compare_price, 2, ',', '.'); ?></span>
                                    <?php endif; ?>
                                </div>
                                <a href="<?php echo URL; ?>product/show/<?php echo $product->slug; ?>" class="btn-product">Ver Detalhes</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<style>
    .page-header {
        margin-bottom: 2rem;
        text-align: center;
    }
    
    .page-header h1 {
        font-size: 2rem;
        font-weight: 300;
        margin-bottom: 0.5rem;
        text-transform: capitalize;
    }
    
    .category-layout {
        display: grid;
        grid-template-columns: 250px 1fr;
        gap: 3rem;
    }
    
    .category-sidebar {
        background: #fff;
        padding: 1.5rem;
        border-radius: 8px;
        height: fit-content;
    }
    
    .category-sidebar h3 {
        margin-bottom: 1rem;
        font-weight: 600;
    }
    
    .category-list {
        list-style: none;
    }
    
    .category-list li {
        margin-bottom: 0.5rem;
    }
    
    .category-list a {
        color: #666;
        text-decoration: none;
        transition: color 0.3s ease;
        display: block;
        padding: 0.5rem 0;
    }
    
    .category-list a:hover,
    .category-list a.active {
        color: #000;
        font-weight: 500;
    }
    
    .no-products {
        text-align: center;
        padding: 4rem 2rem;
        color: #666;
    }
    
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 2rem;
    }
    
    @media (max-width: 768px) {
        .category-layout {
            grid-template-columns: 1fr;
        }
        
        .category-sidebar {
            order: 2;
        }
    }
</style>

<?php require_once BASE_PATH . '/app/views/templates/footer.php'; ?>