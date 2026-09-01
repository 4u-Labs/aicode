<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
$assetVersion = time();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>Política de Privacidade — AICode Editor com IA</title>
  <meta name="description" content="Política de Privacidade do AICode. Chaves de API salvas exclusivamente no navegador com zero servidores intermediários.">
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
      
      <h1>Política de Privacidade</h1>
      <p>Última atualização: <?php echo date('d/m/Y'); ?></p>

      <h2>1. Proteção Absoluta de Chaves de API (Zero Server Storage)</h2>
      <p>O <strong>AICode</strong> foi desenvolvido sob a arquitetura de <em>Client-Side Direct Connection</em>. Suas chaves de API (Anthropic Claude, OpenAI ChatGPT ou Google Gemini) são salvas <strong>exclusivamente no <code>localStorage</code> criptografado do seu próprio navegador</strong>. Elas nunca passam por servidores intermediários de terceiros.</p>

      <h2>2. Conexão Direta com os Provedores de IA</h2>
      <p>As requisições de análise e edição de código são enviadas diretamente do seu navegador para os endpoints oficiais criptografados por HTTPS (TLS 1.3) dos provedores de IA selecionados por você:</p>
      <ul>
        <li><code>api.anthropic.com</code> (Anthropic Claude)</li>
        <li><code>api.openai.com</code> (OpenAI ChatGPT)</li>
        <li><code>generativelanguage.googleapis.com</code> (Google Gemini)</li>
      </ul>

      <h2>3. Não Armazenamento de Código-Fonte</h2>
      <p>Seus arquivos de código e projetos abertos permanecem 100% em sua máquina local. O AICode utiliza a API nativa FileSystem Access do seu navegador, garantindo que nenhum código seja enviado ou armazenado em nossos servidores.</p>

      <h2>4. Contato</h2>
      <p>Para dúvidas sobre nossa política de privacidade, visite nossa <a href="suporte.php" style="color:#3b82f6;">Página de Suporte</a> ou envie um e-mail para <code>contato@4u.ia.br</code>.</p>
    </div>
  </main>

  <footer class="app-footer-legal">
    <p>AICode — Editor de Código com IA • <a href="privacidade.php" style="color:#6b7194; text-decoration:underline;">Privacidade</a> | <a href="termos.php" style="color:#6b7194; text-decoration:underline;">Termos</a> | <a href="suporte.php" style="color:#6b7194; text-decoration:underline;">Suporte</a></p>
  </footer>

</body>
</html>
