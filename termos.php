<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
$assetVersion = time();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>Termos de Uso — AICode Editor com IA</title>
  <meta name="description" content="Termos de Uso e Condições do Serviço AICode Editor de Código.">
  <link rel="icon" type="image/svg+xml" href="favicon.svg">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    * { font-family: 'Inter', system-ui, -apple-system, sans-serif; box-sizing: border-box; }
    .legal-container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 2rem;
      background: rgba(22, 24, 34, 0.95);
      border: 1px solid rgba(59, 130, 246, 0.2);
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
      line-height: 1.7;
      color: #d1d5e8;
    }
    .legal-container h1 { font-size: 1.8rem; margin-bottom: 0.5rem; color: #3b82f6; font-weight: 800; }
    .legal-container h2 { font-size: 1.25rem; margin: 1.5rem 0 0.5rem; color: #34d399; font-weight: 600; }
    .legal-container p, .legal-container ul { font-size: 0.9rem; color: #6b7194; margin-bottom: 1rem; }
    .legal-container ul { padding-left: 1.2rem; }
    .legal-container li { margin-bottom: 0.4rem; }
    .back-btn { display: inline-flex; align-items: center; gap: 0.4rem; color: #3b82f6; text-decoration: none; font-weight: 600; font-size: 0.875rem; margin-bottom: 1.5rem; }
    .app-header-legal { padding: 1rem 1.5rem; background: #0f1117; border-bottom: 1px solid rgba(59, 130, 246, 0.2); }
    .app-footer-legal { text-align: center; padding: 1.25rem; font-size: 0.775rem; color: #6b7194; border-top: 1px solid rgba(255,255,255,0.08); margin-top: auto; }
  </style>
</head>
<body style="background:#0f1117; color:#fff; min-height:100vh; display:flex; flex-direction:column;">
  
  <header class="app-header-legal">
    <div style="max-width:1200px; margin:0 auto; display:flex; align-items:center; justify-content:space-between;">
      <a href="index.php" style="display:flex; align-items:center; gap:0.6rem; text-decoration:none; color:#fff; font-weight:800; font-size:1.3rem;">
        <img src="favicon.svg" style="width:32px; height:32px; object-fit:contain;">
        <span>AI<span style="color:#3b82f6;">Code</span></span>
      </a>
    </div>
  </header>

  <main style="flex:1;">
    <div class="legal-container">
      <a href="index.php" class="back-btn">← Voltar ao AICode</a>
      
      <h1>Termos de Uso e Serviço</h1>
      <p>Última atualização: <?php echo date('d/m/Y'); ?></p>

      <h2>1. Aceitação dos Termos</h2>
      <p>Ao utilizar o <strong>AICode Editor de Código com IA</strong>, você concorda com os presentes termos. O software é uma utilidade web de desenvolvimento que integra inteligência artificial ao seu ambiente de código local.</p>

      <h2>2. Responsabilidade do Uso de Chaves de API</h2>
      <p>O usuário é inteiramente responsável por suas chaves de API pessoais geradas nos portais oficiais da Anthropic, OpenAI ou Google. O AICode não tarifará nem se responsabilizará pelos custos decorrentes do consumo direto de suas chaves junto a esses provedores.</p>

      <h2>3. Propriedade Intelectual do Código Gerado</h2>
      <p>Todo o código gerado, editado ou refatorado através do AICode pertence 100% ao usuário. Nenhuma reivindicação de direito autoral é mantida pela plataforma sobre os códigos do usuário.</p>

      <h2>4. Isenção de Responsabilidade</h2>
      <p>Embora as IAs forneçam sugestões de altíssima precisão, cabe ao desenvolvedor revisar e testar o código antes de sua implantação em ambientes de produção.</p>
    </div>
  </main>

  <footer class="app-footer-legal">
    <p>AICode — Editor de Código com IA • <a href="privacidade.php" style="color:#6b7194; text-decoration:underline;">Privacidade</a> | <a href="termos.php" style="color:#6b7194; text-decoration:underline;">Termos</a> | <a href="suporte.php" style="color:#6b7194; text-decoration:underline;">Suporte</a></p>
  </footer>

</body>
</html>
