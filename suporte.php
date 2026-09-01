<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
$assetVersion = time();

$feedbackMsg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['email']) && !empty($_POST['message'])) {
    $senderEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $userMsg = htmlspecialchars($_POST['message']);
    
    $to = "contato@4u.ia.br";
    $subject = "=?UTF-8?B?" . base64_encode("AICode — Nova Mensagem de Suporte") . "?=";
    $body = "Nova mensagem enviada pelo AICode Suporte:\n\nDe: " . $senderEmail . "\nData: " . date('d/m/Y H:i') . "\n\nMensagem:\n" . $userMsg;
    
    $headers = "From: contato@4u.ia.br\r\n" .
               "Reply-To: " . $senderEmail . "\r\n" .
               "MIME-Version: 1.0\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n" .
               "X-Mailer: PHP/" . phpversion();

    @mail($to, $subject, $body, $headers);

    // Save backup log on server
    $uploadDir = __DIR__ . '/uploads/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $logFile = $uploadDir . 'messages_log.json';
    $existing = file_exists($logFile) ? json_decode(file_get_contents($logFile), true) : [];
    $existing[] = [
        'id' => uniqid('msg_', true),
        'app' => 'AICode IDE',
        'from' => $senderEmail,
        'date' => date('Y-m-d H:i:s'),
        'message' => $_POST['message']
    ];
    file_put_contents($logFile, json_encode($existing, JSON_PRETTY_PRINT));

    $feedbackMsg = "Mensagem enviada com sucesso! Nossa equipe responderá em breve.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>Suporte & Ajuda — AICode Editor de Código</title>
  <meta name="description" content="Central de Suporte e Perguntas Frequentes do AICode Editor de Código com IA.">
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
    .faq-item { background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 1rem; margin-bottom: 0.75rem; }
    .faq-q { font-weight: 700; color: #fff; font-size: 0.95rem; margin-bottom: 0.3rem; }
    .faq-a { color: #6b7194; font-size: 0.85rem; line-height: 1.5; }
    .contact-card { background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.3); border-radius: 12px; padding: 1.25rem; margin-top: 1.5rem; }
    .input-field { width: 100%; background: #0f1117; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; padding: 0.75rem; color: #fff; font-size: 0.9rem; outline: none; }
    .btn-submit { background: linear-gradient(135deg, #3b82f6, #2563eb); color: #fff; border: none; padding: 0.75rem 1.5rem; border-radius: 8px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 0.5rem; }
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
      
      <h1>Central de Suporte & Ajuda</h1>
      <p>Dúvidas sobre a utilização de chaves de IA ou suporte técnico do AICode.</p>

      <h2>Perguntas Frequentes (FAQ)</h2>

      <div class="faq-item">
        <div class="faq-q">🔑 Minha chave de API é enviada para algum servidor de vocês?</div>
        <div class="faq-a">Não! Suas chaves de API são armazenadas exclusivamente no seu próprio navegador (<code>localStorage</code>) e se conectam diretamente com a Anthropic, OpenAI ou Google.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">📁 Como abrir um projeto completo da minha máquina?</div>
        <div class="faq-a">Basta clicar no botão <strong>"Abrir Pasta"</strong> no topo do editor para dar permissão ao navegador de ler os arquivos do seu projeto.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">📲 Posso usar o AICode no celular ou tablet?</div>
        <div class="faq-a">Sim! Abra a página no navegador do seu dispositivo móvel e toque no botão <strong>"Instalar App"</strong> no topo para utilizá-lo como um PWA nativo.</div>
      </div>

      <h2>Entre em Contato</h2>
      <div class="contact-card">
        <?php if ($feedbackMsg): ?>
          <div style="padding: 0.75rem; background: rgba(16,185,129,0.15); border: 1px solid #10b981; color: #10b981; border-radius: 8px; font-size: 0.85rem; margin-bottom: 1rem;">
            <?php echo $feedbackMsg; ?>
          </div>
        <?php endif; ?>

        <p style="font-size: 0.85rem; margin-bottom: 1rem;">Envie suas dúvidas ou sugestões para <code>contato@4u.ia.br</code> ou preencha o formulário abaixo:</p>

        <form method="POST" action="suporte.php" style="display: flex; flex-direction: column; gap: 0.85rem;">
          <input type="email" name="email" placeholder="Seu e-mail de contato" class="input-field" required>
          <textarea name="message" rows="4" placeholder="Escreva sua mensagem..." class="input-field" style="resize: vertical;" required></textarea>
          <button type="submit" class="btn-submit">
            Enviar Mensagem
          </button>
        </form>
      </div>

    </div>
  </main>

  <footer class="app-footer-legal">
    <p>AICode — Editor de Código com IA • <a href="privacidade.php" style="color:#6b7194; text-decoration:underline;">Privacidade</a> | <a href="termos.php" style="color:#6b7194; text-decoration:underline;">Termos</a> | <a href="suporte.php" style="color:#6b7194; text-decoration:underline;">Suporte</a></p>
  </footer>

</body>
</html>
