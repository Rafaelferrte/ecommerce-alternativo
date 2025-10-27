    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>URBANALTERNATIVE</h3>
                    <p>Vestuário técnico e casual para o estilo de vida urbano contemporâneo.</p>
                    <div class="social-links">
                        <a href="#">Instagram</a>
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>PRODUTOS</h4>
                    <a href="#">Casacos</a>
                    <a href="#">Jaquetas</a>
                    <a href="#">Camisetas</a>
                    <a href="#">Calças</a>
                    <a href="#">Acessórios</a>
                </div>
                <div class="footer-section">
                    <h4>AJUDA</h4>
                    <a href="#">Trocas e Devoluções</a>
                    <a href="#">Entregas</a>
                    <a href="#">Tabela de Medidas</a>
                    <a href="#">FAQ</a>
                    <a href="#">Contato</a>
                </div>
                <div class="footer-section">
                    <h4>EMPRESA</h4>
                    <a href="#">Sobre Nós</a>
                    <a href="#">Sustentabilidade</a>
                    <a href="#">Trabalhe Conosco</a>
                    <a href="#">Imprensa</a>
                </div>
                <div class="footer-section">
                    <h4>ATENDIMENTO</h4>
                    <p>📞 (11) 4004-2000</p>
                    <p>✉️ contato@urbanalternative.com</p>
                    <p>🕒 Segunda a Sexta: 9h às 18h</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="payment-methods">
                    <span>Formas de Pagamento:</span>
                    <span>💳</span>
                    <span>📱</span>
                    <span>🏦</span>
                </div>
                <div class="footer-copyright">
                    <p>&copy; 2025 UrbanAlternative. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    
    <style>
        .footer {
            background: #f8f9fa;
            border-top: 1px solid #e5e5e5;
            padding: 3rem 0 1rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3,
        .footer-section h4 {
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .footer-section a {
            display: block;
            color: #666;
            text-decoration: none;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }
        
        .footer-section a:hover {
            color: #000;
        }
        
        .footer-section p {
            color: #666;
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-links a {
            color: #000;
            text-decoration: none;
            font-weight: 500;
        }
        
        .footer-bottom {
            border-top: 1px solid #e5e5e5;
            padding-top: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .payment-methods {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #666;
        }
        
        .footer-copyright {
            color: #666;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .footer-bottom {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
        }
    </style>
</body>
</html>