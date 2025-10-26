<?php require_once BASE_PATH . '/app/views/templates/header.php'; ?>

<!-- Banner Principal -->
<section class="hero-banner">
    <div class="banner-content">
        <h1 class="banner-title">VESTA-SE DE <span class="accent">REVOLTA</span></h1>
        <p class="banner-subtitle">Roupas que gritam sua personalidade</p>
        <div class="banner-buttons">
            <a href="#colecao" class="btn btn-danger">VER COLEÇÃO</a>
            <a href="#novidades" class="btn btn-outline">NOVIDADES</a>
        </div>
    </div>
    <div class="banner-overlay"></div>
</section>

<!-- Categorias -->
<section class="categories">
    <div class="container">
        <h2 class="section-title">ESTILOS <span>MALDITOS</span></h2>
        <div class="categories-grid">
            <div class="category-card gothic">
                <div class="category-content">
                    <h3>GÓTICO</h3>
                    <p>Elegância sombria</p>
                    <a href="#" class="category-link">EXPLORAR →</a>
                </div>
            </div>
            <div class="category-card punk">
                <div class="category-content">
                    <h3>PUNK</h3>
                    <p>Atitude pura</p>
                    <a href="#" class="category-link">EXPLORAR →</a>
                </div>
            </div>
            <div class="category-card rock">
                <div class="category-content">
                    <h3>ROCK</h3>
                    <p>Clássico atemporal</p>
                    <a href="#" class="category-link">EXPLORAR →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Produtos em Destaque -->
<section id="colecao" class="featured-products">
    <div class="container">
        <h2 class="section-title">DESTAQUES <span>DA SEMANA</span></h2>
        <div class="products-grid">
            <!-- Produto 1 -->
            <div class="product-card">
                <div class="product-badge">VENDENDO MUITO</div>
                <div class="product-image">
                    <span class="product-emoji">🦇</span>
                </div>
                <div class="product-info">
                    <h3>VESTIDO GÓTICO VAMP</h3>
                    <p class="product-desc">Veludo preto com detalhes em renda e cruzes</p>
                    <div class="product-price">
                        <span class="current-price">R$ 189,90</span>
                        <span class="original-price">R$ 229,90</span>
                    </div>
                    <button class="btn-buy">COMPRAR AGORA</button>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="product-card">
                <div class="product-badge">ESGOTANDO</div>
                <div class="product-image">
                    <span class="product-emoji">⚡</span>
                </div>
                <div class="product-info">
                    <h3>JAQUETA PUNK SPIKES</h3>
                    <p class="product-desc">Couro legítimo com spikes e patches</p>
                    <div class="product-price">
                        <span class="current-price">R$ 299,90</span>
                    </div>
                    <button class="btn-buy">COMPRAR AGORA</button>
                </div>
            </div>

            <!-- Produto 3 -->
            <div class="product-card">
                <div class="product-badge">LANÇAMENTO</div>
                <div class="product-image">
                    <span class="product-emoji">🎸</span>
                </div>
                <div class="product-info">
                    <h3>CAMISETA METAL BANDS</h3>
                    <p class="product-desc">Algodão 30.1 com estampas de bandas cult</p>
                    <div class="product-price">
                        <span class="current-price">R$ 79,90</span>
                        <span class="installment">3x R$ 26,63</span>
                    </div>
                    <button class="btn-buy">COMPRAR AGORA</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner de Oferta -->
<section class="offer-banner">
    <div class="container">
        <div class="offer-content">
            <h2>FRETE GRÁTIS</h2>
            <p>Em compras acima de R$ 150,00</p>
            <span class="offer-code">Código: DARKSTYLE15</span>
        </div>
    </div>
</section>

<style>
    /* Banner Principal */
    .hero-banner {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                    url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><rect fill="%23111" width="1200" height="800"/><path fill="%23ff0000" d="M0,400 Q600,200 1200,400 L1200,800 L0,800 Z"/></svg>');
        background-size: cover;
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
    }

    .banner-title {
        font-size: 4rem;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
    }

    .accent {
        color: #ff0000;
    }

    .banner-subtitle {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .banner-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
    }

    .btn {
        padding: 1rem 2rem;
        border: 2px solid #ff0000;
        background: transparent;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-danger {
        background: #ff0000;
        color: #000;
    }

    .btn-danger:hover {
        background: #cc0000;
        border-color: #cc0000;
    }

    .btn-outline:hover {
        background: #ff0000;
        color: #000;
    }

    /* Categorias */
    .categories {
        padding: 4rem 0;
        background: #111;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        text-transform: uppercase;
        margin-bottom: 3rem;
        letter-spacing: 2px;
    }

    .section-title span {
        color: #ff0000;
    }

    .categories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .category-card {
        height: 300px;
        position: relative;
        overflow: hidden;
        border: 2px solid #333;
        transition: all 0.3s ease;
    }

    .category-card:hover {
        border-color: #ff0000;
        transform: translateY(-5px);
    }

    .category-card.gothic {
        background: linear-gradient(45deg, #1a1a1a, #2d1b1b);
    }

    .category-card.punk {
        background: linear-gradient(45deg, #1a1a1a, #1b1b2d);
    }

    .category-card.rock {
        background: linear-gradient(45deg, #1a1a1a, #2d2d1b);
    }

    .category-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 2rem;
        background: linear-gradient(transparent, rgba(0,0,0,0.9));
    }

    .category-content h3 {
        color: #ff0000;
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
    }

    .category-link {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    /* Produtos */
    .featured-products {
        padding: 4rem 0;
        background: #0a0a0a;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }

    .product-card {
        background: #111;
        border: 1px solid #333;
        position: relative;
        transition: all 0.3s ease;
    }

    .product-card:hover {
        border-color: #ff0000;
        transform: translateY(-5px);
    }

    .product-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: #ff0000;
        color: #000;
        padding: 0.5rem 1rem;
        font-size: 0.8rem;
        font-weight: bold;
        text-transform: uppercase;
        z-index: 2;
    }

    .product-image {
        height: 200px;
        background: #1a1a1a;
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom: 1px solid #333;
    }

    .product-emoji {
        font-size: 4rem;
        filter: grayscale(1);
        transition: filter 0.3s ease;
    }

    .product-card:hover .product-emoji {
        filter: grayscale(0);
    }

    .product-info {
        padding: 1.5rem;
    }

    .product-info h3 {
        color: #ff0000;
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .product-desc {
        color: #888;
        font-size: 0.9rem;
        margin-bottom: 1rem;
        line-height: 1.4;
    }

    .product-price {
        margin-bottom: 1rem;
    }

    .current-price {
        font-size: 1.3rem;
        font-weight: bold;
        color: #ff0000;
        margin-right: 0.5rem;
    }

    .original-price {
        text-decoration: line-through;
        color: #666;
        font-size: 0.9rem;
    }

    .installment {
        display: block;
        color: #888;
        font-size: 0.8rem;
        margin-top: 0.25rem;
    }

    .btn-buy {
        width: 100%;
        padding: 0.75rem;
        background: #ff0000;
        color: #000;
        border: none;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-buy:hover {
        background: #cc0000;
    }

    /* Banner Oferta */
    .offer-banner {
        background: #ff0000;
        color: #000;
        padding: 2rem 0;
        text-align: center;
    }

    .offer-content h2 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .offer-code {
        background: #000;
        color: #ff0000;
        padding: 0.5rem 1rem;
        font-weight: bold;
        letter-spacing: 1px;
    }

    @media (max-width: 768px) {
        .banner-title {
            font-size: 2.5rem;
        }
        
        .banner-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .btn {
            width: 200px;
        }
    }
</style>

<?php require_once BASE_PATH . '/app/views/templates/footer.php'; ?>