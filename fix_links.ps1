$content = Get-Content -Path "C:\Users\fabia\.gemini\antigravity\scratch\nova4u.ai.br\app\aicode\index.php" -Raw -Encoding UTF8

$targetOld = '<div class="status-bar"><div class="status-item"><span class="status-dot"></span><span id="status-provider-info">AICode · Anthropic Claude · Edição Cirúrgica</span></div><div'

$newStatusBar = @"
<div class="status-bar"><div class="status-item"><span class="status-dot"></span><span id="status-provider-info">AICode · Anthropic Claude · Edição Cirúrgica</span></div><div class="status-item" style="color:rgba(255,255,255,0.7); font-size:10px; font-weight:500;">© <?php echo date('Y'); ?> AICode IDE • <a href="privacidade.php" style="color:#60a5fa; text-decoration:underline; margin:0 4px;">Privacidade</a> | <a href="termos.php" style="color:#60a5fa; text-decoration:underline; margin:0 4px;">Termos</a> | <a href="suporte.php" style="color:#60a5fa; text-decoration:underline; margin:0 4px;">Suporte & Contato</a></div></div>
"@

# Replace the status bar HTML regex pattern
$content = $content -replace '<div class="status-bar">[\s\S]*?</div>\s*<div id="security-notice"', "$newStatusBar`n<div id=`"security-notice`""

Set-Content -Path "C:\Users\fabia\.gemini\antigravity\scratch\nova4u.ai.br\app\aicode\index.php" -Value $content -Encoding UTF8

Write-Host "Replaced status bar in index.php successfully!"
