    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>⚡ DARKSTYLE</h3>
                    <p>Roupas que desafiam o convencional desde 2025</p>
                    <div class="social-links">
                        <a href="#" class="social-link">🦇</a>
                        <a href="#" class="social-link">⚡</a>
                        <a href="#" class="social-link">🎸</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>CATEGORIAS</h4>
                    <a href="#">Gótico</a>
                    <a href="#">Punk</a>
                    <a href="#">Rock</a>
                    <a href="#">Metal</a>
                </div>
                <div class="footer-section">
                    <h4>ATENDIMENTO</h4>
                    <a href="#">Trocas & Devoluções</a>
                    <a href="#">Tamanhos</a>
                    <a href="#">Entregas</a>
                    <a href="#">FAQ</a>
                </div>
                <div class="footer-section">
                    <h4>CONTATO</h4>
                    <p>📧 contato@darkstyle.com</p>
                    <p>📱 (11) 6666-6666</p>
                    <p>🕒 Seg-Sex: 14h-22h</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 DARKSTYLE - Todos os direitos reservados. | Desafiando o padrão desde sempre.</p>
            </div>
        </div>
    </footer>
    
    <style>
        .footer {
            background: #111;
            border-top: 2px solid #ff0000;
            padding: 3rem 0 1rem;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3,
        .footer-section h4 {
            color: #ff0000;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .footer-section a {
            color: #888;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }
        
        .footer-section a:hover {
            color: #ff0000;
        }
        
        .footer-section p {
            color: #888;
            margin-bottom: 0.5rem;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-link {
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }
        
        .social-link:hover {
            transform: scale(1.2);
            color: #ff0000;
        }
        
        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 1rem;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</body>
</html>