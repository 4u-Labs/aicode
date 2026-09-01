<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
$assetVersion = time();
?>
<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"><meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdnjs.cloudflare.com https://fonts.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; connect-src 'self' https://api.anthropic.com https://api.openai.com https://generativelanguage.googleapis.com; img-src 'self' data:;"><title>AICode - Editor de Código com IA</title><link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🤖</text></svg>"><link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"><style> * { margin: 0; padding: 0; box-sizing: border-box; } :root { --bg-primary: #0f1117; --bg-secondary: #161822; --bg-tertiary: #1c1f2e; --bg-hover: #252940; --bg-active: #0c4a6e; --bg-sidebar: #131520; --bg-card: #1a1d2e; --text-primary: #d1d5e8; --text-secondary: #6b7194; --text-bright: #f0f2ff; --accent-blue: #3b82f6; --accent-blue-hover: #60a5fa; --accent-blue-glow: rgba(59, 130, 246, 0.25); --accent-green: #34d399; --accent-green-dim: rgba(52, 211, 153, 0.15); --accent-orange: #fb923c; --accent-purple: #a78bfa; --accent-yellow: #fbbf24; --accent-cyan: #22d3ee; --border-color: rgba(99, 115, 175, 0.15); --border-focus: rgba(59, 130, 246, 0.5); --scrollbar-bg: transparent; --scrollbar-thumb: rgba(99, 115, 175, 0.2); --error-red: #f87171; --success-green: #4ade80; --sidebar-width: 280px; --radius-sm: 6px; --radius-md: 10px; --radius-lg: 14px; --radius-xl: 18px; --shadow-sm: 0 1px 3px rgba(0,0,0,0.3); --shadow-md: 0 4px 16px rgba(0,0,0,0.35); --shadow-lg: 0 8px 32px rgba(0,0,0,0.4); --shadow-glow: 0 0 20px var(--accent-blue-glow); --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1); --transition-base: 250ms cubic-bezier(0.4, 0, 0.2, 1); --transition-slow: 350ms cubic-bezier(0.4, 0, 0.2, 1); } body { font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; background-color: var(--bg-primary); color: var(--text-primary); height: 100vh; display: flex; flex-direction: column; overflow: hidden; -webkit-font-smoothing: antialiased; } .material-symbols-rounded { font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' 0, 'opsz' 24; font-size: 18px; vertical-align: middle; line-height: 1; } ::-webkit-scrollbar { width: 6px; height: 6px; } ::-webkit-scrollbar-track { background: transparent; } ::-webkit-scrollbar-thumb { background: var(--scrollbar-thumb); border-radius: 10px; } ::-webkit-scrollbar-thumb:hover { background: rgba(99, 115, 175, 0.35); } .header { background: linear-gradient(180deg, rgba(28, 31, 46, 0.95) 0%, rgba(22, 24, 34, 0.98) 100%); backdrop-filter: blur(20px); border-bottom: 1px solid var(--border-color); padding: 10px 20px; display: flex; align-items: center; gap: 16px; flex-wrap: wrap; position: relative; z-index: 10; } .header::after { content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 1px; background: linear-gradient(90deg, transparent, var(--accent-blue-glow), transparent); } .logo { display: flex; align-items: center; gap: 10px; } .logo-icon { width: 34px; height: 34px; background: linear-gradient(135deg, var(--accent-blue), var(--accent-purple)); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; color: white; font-size: 13px; letter-spacing: -0.5px; box-shadow: 0 2px 12px rgba(59, 130, 246, 0.3); position: relative; } .logo-icon::after { content: ''; position: absolute; inset: -1px; border-radius: 11px; background: linear-gradient(135deg, var(--accent-blue), var(--accent-purple)); z-index: -1; opacity: 0.4; filter: blur(6px); } .logo-text { font-size: 17px; font-weight: 700; color: var(--text-bright); letter-spacing: -0.3px; } .logo-text span { background: linear-gradient(135deg, var(--accent-blue), var(--accent-cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800; } .api-config-container { display: flex; align-items: center; gap: 8px; background: rgba(15, 17, 23, 0.6); padding: 7px 14px; border-radius: var(--radius-md); border: 1px solid var(--border-color); transition: border-color var(--transition-base), box-shadow var(--transition-base); } .api-config-container:focus-within { border-color: var(--border-focus); box-shadow: var(--shadow-glow); } .api-config-container label { font-size: 11px; color: var(--text-secondary); white-space: nowrap; font-weight: 500; display: flex; align-items: center; gap: 4px; } .provider-selector { background: var(--bg-tertiary); border: 1px solid var(--border-color); color: var(--text-primary); padding: 4px 8px; border-radius: var(--radius-sm); font-size: 11px; cursor: pointer; outline: none; font-family: 'Inter', sans-serif; font-weight: 600; transition: border-color var(--transition-fast); } .provider-selector:focus { border-color: var(--border-focus); } .provider-selector option { background: var(--bg-secondary); color: var(--text-primary); } .api-key-input { background: transparent; border: none; color: var(--text-primary); font-family: 'Fira Code', monospace; font-size: 12px; width: 180px; outline: none; } .api-key-input::placeholder { color: var(--text-secondary); opacity: 0.5; } .api-key-toggle { background: transparent; border: none; color: var(--text-secondary); cursor: pointer; padding: 2px 4px; border-radius: var(--radius-sm); transition: all var(--transition-fast); display: flex; align-items: center; } .api-key-toggle:hover { color: var(--text-bright); background: var(--bg-hover); } .api-key-clear { background: transparent; border: none; color: var(--text-secondary); cursor: pointer; padding: 2px 4px; border-radius: var(--radius-sm); transition: all var(--transition-fast); display: flex; align-items: center; font-size: 14px; } .api-key-clear:hover { color: var(--error-red); background: rgba(248,113,113,0.1); } .provider-badge { font-size: 10px; padding: 2px 8px; border-radius: 10px; font-weight: 700; letter-spacing: 0.3px; white-space: nowrap; } .provider-badge.anthropic { background: rgba(217, 119, 87, 0.15); color: #d97757; border: 1px solid rgba(217, 119, 87, 0.25); } .provider-badge.openai { background: rgba(16, 163, 127, 0.15); color: #10a37f; border: 1px solid rgba(16, 163, 127, 0.25); } .provider-badge.gemini { background: rgba(66, 133, 244, 0.15); color: #4285f4; border: 1px solid rgba(66, 133, 244, 0.25); } .security-notice { background: linear-gradient(135deg, rgba(251,191,36,0.1), rgba(245,158,11,0.05)); border: 1px solid rgba(251,191,36,0.2); border-radius: var(--radius-md); padding: 12px 16px; margin: 12px; font-size: 12px; color: var(--text-primary); display: none; } .security-notice.show { display: block; } .security-notice-header { display: flex; align-items: center; gap: 8px; font-weight: 600; color: var(--accent-yellow); margin-bottom: 6px; } .security-notice-text { color: var(--text-secondary); line-height: 1.5; } .security-notice-close { float: right; background: transparent; border: none; color: var(--text-secondary); cursor: pointer; font-size: 16px; } .security-notice-close:hover { color: var(--text-bright); } .action-buttons { display: flex; gap: 8px; flex-wrap: wrap; flex: 1; justify-content: flex-end; } .btn { padding: 8px 16px; border: none; border-radius: var(--radius-md); font-size: 12px; font-weight: 600; cursor: pointer; transition: all var(--transition-base); display: inline-flex; align-items: center; gap: 7px; font-family: 'Inter', sans-serif; color: white; position: relative; overflow: hidden; letter-spacing: 0.01em; } .btn::before { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(255,255,255,0.08) 0%, transparent 50%); pointer-events: none; } .btn:hover { transform: translateY(-1px); } .btn:active { transform: translateY(0) scale(0.98); } .btn:disabled { opacity: 0.4; cursor: not-allowed; transform: none !important; filter: grayscale(0.5); } .btn-primary { background: var(--accent-blue); box-shadow: 0 2px 8px rgba(59,130,246,0.3); } .btn-primary:hover { background: var(--accent-blue-hover); box-shadow: 0 4px 16px rgba(59,130,246,0.4); } .btn-secondary { background: rgba(99, 115, 175, 0.1); color: var(--text-primary); border: 1px solid var(--border-color); } .btn-secondary:hover { background: rgba(99, 115, 175, 0.2); border-color: rgba(99, 115, 175, 0.3); } .btn-folder { background: linear-gradient(135deg, #f59e0b, #d97706); box-shadow: 0 2px 8px rgba(245,158,11,0.25); } .btn-folder:hover { box-shadow: 0 4px 16px rgba(245,158,11,0.35); filter: brightness(1.1); } .btn-save { background: linear-gradient(135deg, #10b981, #059669); box-shadow: 0 2px 8px rgba(16,185,129,0.25); } .btn-save:hover { box-shadow: 0 4px 16px rgba(16,185,129,0.35); filter: brightness(1.1); } .main-container { flex: 1; display: flex; overflow: hidden; } .sidebar { width: var(--sidebar-width); min-width: var(--sidebar-width); background: var(--bg-sidebar); border-right: 1px solid var(--border-color); display: flex; flex-direction: column; transition: width var(--transition-slow), min-width var(--transition-slow), opacity var(--transition-base); } .sidebar.collapsed { width: 0; min-width: 0; overflow: hidden; opacity: 0; } .sidebar-header { padding: 12px 16px; background: rgba(28, 31, 46, 0.5); border-bottom: 1px solid var(--border-color); display: flex; align-items: center; justify-content: space-between; gap: 8px; } .sidebar-title { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary); display: flex; align-items: center; gap: 8px; } .sidebar-actions { display: flex; gap: 2px; } .sidebar-btn { background: transparent; border: none; color: var(--text-secondary); cursor: pointer; padding: 5px 7px; border-radius: var(--radius-sm); font-size: 14px; transition: all var(--transition-fast); display: flex; align-items: center; justify-content: center; } .sidebar-btn:hover { background: var(--bg-hover); color: var(--text-bright); } .folder-info { padding: 10px 16px; background: rgba(15, 17, 23, 0.5); border-bottom: 1px solid var(--border-color); font-size: 11px; color: var(--accent-blue); display: flex; align-items: center; gap: 8px; font-weight: 500; } .folder-info.empty { color: var(--text-secondary); font-style: italic; font-weight: 400; } .file-tree { flex: 1; overflow-y: auto; padding: 6px 0; } .file-tree-empty { padding: 30px 16px; text-align: center; color: var(--text-secondary); font-size: 12px; display: flex; flex-direction: column; align-items: center; gap: 12px; } .file-tree-empty p { margin-bottom: 4px; opacity: 0.7; } .tree-item { display: flex; align-items: center; padding: 5px 16px; cursor: pointer; font-size: 13px; transition: all var(--transition-fast); user-select: none; border-left: 2px solid transparent; margin: 0 4px; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; } .tree-item:hover { background: var(--bg-hover); } .tree-item.active { background: rgba(59,130,246,0.15); border-left-color: var(--accent-blue); color: var(--text-bright); } .tree-item.selected { background: rgba(59,130,246,0.1); } .tree-item-icon { width: 20px; height: 20px; margin-right: 8px; display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0; } .tree-item-name { flex: 1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: 450; } .tree-item-checkbox { width: 15px; height: 15px; margin-right: 8px; cursor: pointer; accent-color: var(--accent-blue); border-radius: 3px; flex-shrink: 0; } .tree-folder-content { display: none; } .tree-folder.open > .tree-folder-content { display: block; } .tree-folder-header { display: flex; align-items: center; padding: 5px 16px; cursor: pointer; font-size: 13px; transition: all var(--transition-fast); margin: 0 4px; border-radius: var(--radius-sm); } .tree-folder-header:hover { background: var(--bg-hover); } .tree-folder-toggle { width: 16px; height: 16px; display: flex; align-items: center; justify-content: center; margin-right: 4px; font-size: 10px; color: var(--text-secondary); transition: transform var(--transition-base); } .tree-folder.open > .tree-folder-header .tree-folder-toggle { transform: rotate(90deg); } .selection-bar { padding: 8px 14px; background: rgba(59,130,246,0.1); border-top: 1px solid var(--border-color); display: flex; align-items: center; justify-content: space-between; gap: 8px; } .selection-info { font-size: 11px; color: var(--accent-blue); font-weight: 600; } .selection-actions { display: flex; gap: 6px; } .selection-btn { padding: 4px 10px; font-size: 11px; background: var(--accent-blue); color: white; border: none; border-radius: var(--radius-sm); cursor: pointer; transition: all var(--transition-fast); font-weight: 600; display: flex; align-items: center; gap: 4px; } .selection-btn:hover { filter: brightness(1.15); } .selection-btn.danger { background: var(--error-red); } .editor-panel { flex: 7; display: flex; flex-direction: column; border-right: 1px solid var(--border-color); min-width: 0; } .panel-header { background: var(--bg-secondary); padding: 8px 16px; font-size: 12px; color: var(--text-secondary); border-bottom: 1px solid var(--border-color); display: flex; align-items: center; justify-content: space-between; } .panel-header-left { display: flex; align-items: center; gap: 10px; } .panel-header-title { display: flex; align-items: center; gap: 8px; font-weight: 600; font-size: 12px; color: var(--text-secondary); } .panel-header-title .material-symbols-rounded { font-size: 16px; color: var(--accent-green); } .toggle-sidebar-btn { background: transparent; border: 1px solid var(--border-color); color: var(--text-secondary); padding: 5px 8px; border-radius: var(--radius-sm); cursor: pointer; font-size: 12px; transition: all var(--transition-fast); display: flex; align-items: center; } .toggle-sidebar-btn:hover { background: var(--bg-hover); color: var(--text-bright); border-color: rgba(99,115,175,0.3); } .current-file { font-family: 'Fira Code', monospace; color: var(--accent-yellow); font-size: 11px; padding: 3px 10px; background: rgba(251,191,36,0.08); border-radius: var(--radius-sm); border: 1px solid rgba(251,191,36,0.15); font-weight: 500; } .language-selector { background: var(--bg-tertiary); border: 1px solid var(--border-color); color: var(--text-primary); padding: 5px 10px; border-radius: var(--radius-sm); font-size: 11px; cursor: pointer; outline: none; font-family: 'Inter', sans-serif; } .language-selector:focus { border-color: var(--border-focus); } #editor-container { flex: 1; overflow: hidden; } .response-panel { flex: 3; display: flex; flex-direction: column; background: var(--bg-secondary); min-width: 300px; } .response-panel .panel-header { flex-wrap: nowrap; gap: 6px; padding: 8px 12px; } .response-panel .panel-header .chat-tabs { flex: 0 0 auto; } .response-panel .panel-header .response-actions { flex-wrap: nowrap; justify-content: flex-end; margin-left: auto; } .response-content { flex: 1; overflow-y: auto; padding: 16px; font-family: 'Fira Code', monospace; font-size: 13px; line-height: 1.7; white-space: pre-wrap; word-wrap: break-word; } .response-content.empty { display: flex; flex-direction: column; align-items: center; justify-content: center; color: var(--text-secondary); font-family: 'Inter', sans-serif; text-align: center; gap: 14px; font-style: normal; } .response-content.empty .empty-icon { width: 64px; height: 64px; border-radius: 20px; background: linear-gradient(135deg, rgba(59,130,246,0.1), rgba(167,139,250,0.1)); display: flex; align-items: center; justify-content: center; border: 1px solid rgba(59,130,246,0.15); } .response-content.empty .empty-icon .material-symbols-rounded { font-size: 30px; color: var(--accent-blue); } .response-content.empty .empty-title { font-size: 15px; font-weight: 600; color: var(--text-primary); } .response-content.empty .empty-desc { font-size: 12px; max-width: 280px; line-height: 1.6; color: var(--text-secondary); } .response-content code { background: rgba(59,130,246,0.1); padding: 2px 7px; border-radius: 4px; font-size: 12px; color: var(--accent-blue); border: 1px solid rgba(59,130,246,0.15); } .response-content pre { background: var(--bg-primary); padding: 14px; border-radius: var(--radius-md); overflow-x: auto; margin: 12px 0; border: 1px solid var(--border-color); position: relative; } .response-content pre code { background: none; padding: 0; border: none; color: var(--text-primary); } .response-content h1,.response-content h2,.response-content h3 { color: var(--text-bright); margin: 18px 0 8px 0; font-family: 'Inter', sans-serif; } .response-content h3 { color: var(--accent-blue); font-size: 14px; } .response-content ul,.response-content ol { margin-left: 20px; } .response-content li { margin: 4px 0; } .code-block-actions { position: absolute; top: 8px; right: 8px; display: flex; gap: 4px; } .code-apply-btn { background: var(--accent-blue); color: white; border: none; border-radius: var(--radius-sm); padding: 5px 12px; font-size: 11px; cursor: pointer; font-family: 'Inter', sans-serif; transition: all var(--transition-fast); font-weight: 600; display: flex; align-items: center; gap: 5px; } .code-apply-btn:hover { filter: brightness(1.15); transform: translateY(-1px); box-shadow: 0 2px 8px rgba(59,130,246,0.3); } .code-apply-btn.applied { background: var(--success-green); color: #0a2e1a; } .code-copy-btn { background: rgba(99,115,175,0.15); color: var(--text-primary); border: 1px solid var(--border-color); border-radius: var(--radius-sm); padding: 5px 10px; font-size: 11px; cursor: pointer; font-family: 'Inter', sans-serif; transition: all var(--transition-fast); font-weight: 500; display: flex; align-items: center; gap: 4px; } .code-copy-btn:hover { background: var(--accent-purple); color: white; border-color: var(--accent-purple); } .surgical-block { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-lg); margin: 14px 0; overflow: hidden; transition: all var(--transition-base); box-shadow: var(--shadow-sm); } .surgical-block:hover { border-color: rgba(59,130,246,0.3); box-shadow: var(--shadow-md); } .surgical-block.applied { border-color: rgba(52,211,153,0.4); } .surgical-block.error { border-color: rgba(248,113,113,0.4); } .surgical-header { display: flex; align-items: center; justify-content: space-between; padding: 10px 14px; background: rgba(28, 31, 46, 0.6); border-bottom: 1px solid var(--border-color); gap: 8px; } .surgical-file-badge { display: flex; align-items: center; gap: 6px; font-size: 11px; font-family: 'Fira Code', monospace; color: var(--accent-yellow); background: rgba(251,191,36,0.08); padding: 4px 12px; border-radius: var(--radius-sm); border: 1px solid rgba(251,191,36,0.12); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 55%; font-weight: 500; } .surgical-mode-badge { font-size: 10px; padding: 3px 10px; border-radius: 20px; font-weight: 700; white-space: nowrap; letter-spacing: 0.3px; text-transform: uppercase; } .surgical-mode-badge.surgical { background: rgba(52, 211, 153, 0.12); color: var(--accent-green); border: 1px solid rgba(52, 211, 153, 0.2); } .surgical-mode-badge.full { background: rgba(167, 139, 250, 0.12); color: var(--accent-purple); border: 1px solid rgba(167, 139, 250, 0.2); } .surgical-actions { display: flex; gap: 5px; align-items: center; flex-shrink: 0; } .surgical-diff { font-family: 'Fira Code', monospace; font-size: 11px; line-height: 1.6; } .surgical-section { border-bottom: 1px solid var(--border-color); } .surgical-section:last-child { border-bottom: none; } .surgical-label { font-family: 'Inter', sans-serif; font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 6px 14px; display: flex; align-items: center; gap: 6px; } .surgical-label.search { background: rgba(248, 113, 113, 0.08); color: var(--error-red); border-bottom: 1px solid rgba(248, 113, 113, 0.1); } .surgical-label.replace { background: rgba(74, 222, 128, 0.06); color: var(--success-green); border-bottom: 1px solid rgba(74, 222, 128, 0.1); } .surgical-code { padding: 10px 14px; white-space: pre-wrap; word-wrap: break-word; max-height: 220px; overflow-y: auto; } .surgical-code.search-code { background: rgba(248, 113, 113, 0.03); color: #fca5a5; } .surgical-code.replace-code { background: rgba(74, 222, 128, 0.03); color: #86efac; } .surgical-status { padding: 7px 14px; font-size: 11px; font-family: 'Inter', sans-serif; display: flex; align-items: center; gap: 6px; background: rgba(28, 31, 46, 0.4); font-weight: 500; } .surgical-status.success { color: var(--success-green); } .surgical-status.error { color: var(--error-red); } .surgical-status.info { color: var(--accent-blue); } .surgical-summary { background: linear-gradient(135deg, rgba(59,130,246,0.08), rgba(52,211,153,0.06)); border: 1px solid rgba(59,130,246,0.15); border-radius: var(--radius-lg); padding: 14px 18px; margin-bottom: 16px; display: flex; align-items: center; justify-content: space-between; gap: 12px; } .surgical-summary-left { display: flex; align-items: center; gap: 10px; font-size: 13px; color: var(--text-bright); font-weight: 600; } .surgical-summary-left .material-symbols-rounded { font-size: 22px; color: var(--accent-blue); } .surgical-summary-stats { display: flex; gap: 8px; font-size: 11px; } .surgical-summary-stat { display: flex; align-items: center; gap: 4px; padding: 4px 10px; border-radius: 20px; background: rgba(15, 17, 23, 0.5); font-weight: 600; border: 1px solid var(--border-color); } .surgical-summary-stat.files { color: var(--accent-yellow); } .surgical-summary-stat.edits { color: var(--accent-green); } .surgical-summary-stat.full { color: var(--accent-purple); } .footer { background: var(--bg-tertiary); border-top: 1px solid var(--border-color); display: flex; flex-direction: column; gap: 0; } .custom-instruction-container { flex: 1; display: flex; gap: 10px; align-items: center; padding: 10px 20px; } .instruction-input { flex: 1; background: var(--bg-primary); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 11px 16px; color: var(--text-primary); font-size: 13px; font-family: 'Inter', sans-serif; outline: none; transition: border-color var(--transition-base), box-shadow var(--transition-base); } .instruction-input:focus { border-color: var(--border-focus); box-shadow: var(--shadow-glow); } .instruction-input::placeholder { color: var(--text-secondary); opacity: 0.6; } .btn-send { padding: 11px 22px; background: linear-gradient(135deg, var(--accent-blue) 0%, #2563eb 100%); color: white; border: none; border-radius: var(--radius-lg); font-size: 13px; font-weight: 700; cursor: pointer; transition: all var(--transition-base); display: flex; align-items: center; gap: 8px; white-space: nowrap; box-shadow: 0 2px 12px rgba(59,130,246,0.3); letter-spacing: 0.01em; } .btn-send:hover { transform: translateY(-2px); box-shadow: 0 6px 24px rgba(59,130,246,0.4); filter: brightness(1.1); } .btn-send:active { transform: translateY(0) scale(0.98); } .btn-send:disabled { opacity: 0.4; cursor: not-allowed; transform: none; filter: grayscale(0.4); } .loader-container { display: none; flex-direction: column; align-items: center; justify-content: center; padding: 40px; gap: 18px; } .loader-container.active { display: flex; } .loader { width: 44px; height: 44px; border: 3px solid rgba(99,115,175,0.15); border-top-color: var(--accent-blue); border-radius: 50%; animation: spin 0.8s linear infinite; box-shadow: 0 0 15px rgba(59,130,246,0.15); } @keyframes spin { to { transform: rotate(360deg); } } .loader-text { color: var(--text-secondary); font-size: 13px; font-weight: 500; animation: pulse 1.5s ease-in-out infinite; } @keyframes pulse { 0%, 100% { opacity: 0.5; } 50% { opacity: 1; } } .message { padding: 12px 16px; border-radius: var(--radius-md); margin: 10px 16px; font-size: 13px; display: flex; align-items: center; gap: 10px; animation: slideIn 0.3s ease; font-weight: 500; } @keyframes slideIn { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } } .message-error { background: rgba(248,113,113,0.1); border: 1px solid rgba(248,113,113,0.25); color: var(--error-red); } .message-success { background: rgba(74,222,128,0.1); border: 1px solid rgba(74,222,128,0.25); color: var(--success-green); } .status-bar { background: linear-gradient(90deg, #1e3a5f, #1a365d); padding: 3px 20px; display: flex; justify-content: space-between; font-size: 11px; color: rgba(255,255,255,0.75); font-weight: 500; } .status-item { display: flex; align-items: center; gap: 8px; } .status-item span { display: flex; align-items: center; gap: 3px; } .status-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--accent-green); display: inline-block; animation: statusPulse 2s ease-in-out infinite; } @keyframes statusPulse { 0%,100% { opacity: 1; } 50% { opacity: 0.4; } } @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } } .streaming-cursor { display: inline-block; animation: blink 1s step-end infinite; color: var(--accent-blue); font-weight: bold; font-size: 16px; } .chat-tabs { display: flex; gap: 2px; flex-shrink: 0; } .chat-tab { background: transparent; border: none; color: var(--text-secondary); padding: 0 10px; border-radius: var(--radius-sm); cursor: pointer; font-size: 11px; font-family: 'Inter', sans-serif; transition: all var(--transition-fast); display: inline-flex; align-items: center; justify-content: center; gap: 5px; font-weight: 500; white-space: nowrap; height: 28px; line-height: 28px; } .chat-tab:hover { background: var(--bg-hover); color: var(--text-primary); } .chat-tab.active { background: rgba(59,130,246,0.15); color: var(--accent-blue); font-weight: 600; } .chat-tab .material-symbols-rounded { font-size: 14px; } .chat-container { flex: 1; display: flex; flex-direction: column; overflow: hidden; } .aba-content { flex: 1; overflow: hidden; display: flex; flex-direction: column; } .chat-messages { flex: 1; overflow-y: auto; padding: 14px; display: flex; flex-direction: column; gap: 14px; } .chat-empty { display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; gap: 10px; color: var(--text-secondary); text-align: center; font-size: 13px; } .chat-bubble { display: flex; flex-direction: column; gap: 5px; animation: slideIn 0.2s ease; } .chat-bubble.user { align-items: flex-end; } .chat-bubble.assistant { align-items: flex-start; } .chat-bubble-header { font-size: 10px; color: var(--text-secondary); padding: 0 6px; display: flex; align-items: center; gap: 6px; font-weight: 500; } .chat-bubble-body { max-width: 90%; padding: 11px 15px; border-radius: var(--radius-lg); font-size: 12px; line-height: 1.6; word-wrap: break-word; } .chat-bubble.user .chat-bubble-body { background: linear-gradient(135deg, rgba(59,130,246,0.2), rgba(37,99,235,0.15)); color: var(--text-bright); border: 1px solid rgba(59,130,246,0.2); border-bottom-right-radius: 4px; } .chat-bubble.assistant .chat-bubble-body { background: var(--bg-card); color: var(--text-primary); border: 1px solid var(--border-color); border-bottom-left-radius: 4px; font-family: 'Fira Code', monospace; white-space: pre-wrap; } .chat-bubble.assistant.streaming .chat-bubble-body { border-color: rgba(59,130,246,0.3); box-shadow: 0 0 12px rgba(59,130,246,0.1); } .chat-code-summary { font-size: 11px; color: var(--accent-blue); padding: 6px 10px; background: rgba(59,130,246,0.08); border-radius: var(--radius-sm); margin-top: 4px; cursor: pointer; border: 1px solid rgba(59,130,246,0.15); font-weight: 500; transition: all var(--transition-fast); } .chat-code-summary:hover { background: rgba(59,130,246,0.15); } #context-meter { display: none; padding: 6px 20px; background: rgba(15,17,23,0.4); border-top: 1px solid var(--border-color); } .meter-bar { height: 3px; background: rgba(99,115,175,0.1); border-radius: 10px; overflow: hidden; } .meter-fill { height: 100%; border-radius: 10px; transition: width 0.4s ease, background 0.4s ease; } .meter-label { font-size: 10px; color: var(--text-secondary); display: flex; justify-content: space-between; margin-top: 4px; font-weight: 500; } .diff-modal { max-width: 800px; } .diff-container { display: grid; grid-template-columns: 1fr 1fr; gap: 0; border: 1px solid var(--border-color); border-radius: var(--radius-md); overflow: hidden; } .diff-side { overflow-y: auto; max-height: 420px; } .diff-side-header { padding: 8px 14px; font-size: 11px; font-weight: 700; display: flex; align-items: center; gap: 6px; } .diff-side.old .diff-side-header { background: rgba(248,113,113,0.1); color: var(--error-red); border-bottom: 1px solid rgba(248,113,113,0.15); } .diff-side.new .diff-side-header { background: rgba(74,222,128,0.08); color: var(--success-green); border-bottom: 1px solid rgba(74,222,128,0.15); border-left: 1px solid var(--border-color); } .diff-lines { font-family: 'Fira Code', monospace; font-size: 11px; line-height: 1.6; } .diff-line { padding: 1px 14px; white-space: pre-wrap; word-wrap: break-word; } .diff-line.removed { background: rgba(248,113,113,0.08); color: #fca5a5; } .diff-line.added { background: rgba(74,222,128,0.06); color: #86efac; } .diff-line.context { color: var(--text-secondary); } .diff-stats { display: flex; gap: 16px; padding: 10px 14px; font-size: 11px; background: var(--bg-primary); border-top: 1px solid var(--border-color); font-weight: 600; } .diff-stat-add { color: var(--success-green); } .diff-stat-rem { color: var(--error-red); } .btn-undo { background: transparent; border: 1px solid var(--border-color); color: var(--text-secondary); padding: 4px 10px; border-radius: var(--radius-sm); font-size: 11px; cursor: pointer; transition: all var(--transition-fast); font-weight: 500; display: flex; align-items: center; gap: 4px; } .btn-undo:hover { border-color: var(--accent-orange); color: var(--accent-orange); background: rgba(251,146,60,0.08); } .history-badge { background: linear-gradient(135deg, var(--accent-purple), #7c3aed); color: white; border-radius: 8px; padding: 2px 5px; font-size: 9px; font-weight: 700; min-width: 14px; text-align: center; line-height: 1; display: inline-flex; align-items: center; justify-content: center; } .hidden-input { display: none; } .modal-overlay { display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(5, 7, 12, 0.8); backdrop-filter: blur(8px); z-index: 1000; align-items: center; justify-content: center; } .modal-overlay.active { display: flex; } .modal { background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: var(--radius-xl); width: 90%; max-width: 520px; max-height: 80vh; overflow: hidden; animation: modalSlide 0.3s ease; box-shadow: 0 24px 80px rgba(0,0,0,0.5); } @keyframes modalSlide { from { opacity: 0; transform: translateY(-20px) scale(0.97); } to { opacity: 1; transform: translateY(0) scale(1); } } .modal-header { padding: 18px 22px; background: rgba(28, 31, 46, 0.6); border-bottom: 1px solid var(--border-color); display: flex; align-items: center; justify-content: space-between; } .modal-title { font-size: 16px; font-weight: 700; color: var(--text-bright); display: flex; align-items: center; gap: 10px; } .modal-close { background: transparent; border: 1px solid var(--border-color); color: var(--text-secondary); width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; cursor: pointer; border-radius: var(--radius-sm); transition: all var(--transition-fast); font-size: 18px; } .modal-close:hover { background: rgba(248,113,113,0.1); color: var(--error-red); border-color: rgba(248,113,113,0.3); } .modal-body { padding: 20px 22px; overflow-y: auto; max-height: 50vh; } .modal-footer { padding: 16px 22px; background: rgba(28, 31, 46, 0.4); border-top: 1px solid var(--border-color); display: flex; gap: 10px; justify-content: flex-end; } .save-option { background: var(--bg-primary); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 16px 18px; margin-bottom: 10px; cursor: pointer; transition: all var(--transition-base); } .save-option:hover { border-color: rgba(59,130,246,0.4); background: var(--bg-hover); transform: translateX(4px); } .save-option-title { font-size: 14px; font-weight: 600; color: var(--text-bright); margin-bottom: 5px; display: flex; align-items: center; gap: 8px; } .save-option-desc { font-size: 12px; color: var(--text-secondary); line-height: 1.5; } .save-option.disabled { opacity: 0.4; cursor: not-allowed; } .save-option.disabled:hover { border-color: var(--border-color); background: var(--bg-primary); transform: none; } .editor-actions { display: flex; gap: 5px; align-items: center; } .editor-btn { background: rgba(99,115,175,0.1); border: 1px solid var(--border-color); color: var(--text-secondary); padding: 5px 11px; border-radius: var(--radius-sm); cursor: pointer; font-size: 11px; transition: all var(--transition-fast); display: flex; align-items: center; gap: 5px; font-weight: 500; font-family: 'Inter', sans-serif; } .editor-btn:hover { background: rgba(59,130,246,0.15); border-color: rgba(59,130,246,0.3); color: var(--accent-blue); } .editor-btn.modified { background: rgba(251,146,60,0.15); border-color: rgba(251,146,60,0.3); color: var(--accent-orange); animation: modifiedPulse 2s ease-in-out infinite; } @keyframes modifiedPulse { 0%,100% { box-shadow: none; } 50% { box-shadow: 0 0 8px rgba(251,146,60,0.2); } } .toast-container { position: fixed; bottom: 60px; right: 20px; z-index: 1001; display: flex; flex-direction: column; gap: 10px; } .toast { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 12px 16px; display: flex; align-items: center; gap: 10px; animation: toastSlide 0.4s cubic-bezier(0.16, 1, 0.3, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.4); max-width: 420px; backdrop-filter: blur(10px); position: relative; overflow: hidden; } .toast::after { content: ''; position: absolute; bottom: 0; left: 0; height: 2px; background: var(--accent-blue); animation: toastProgress 5s linear forwards; } .toast.success { border-left: 3px solid var(--success-green); } .toast.success::after { background: var(--success-green); } .toast.error { border-left: 3px solid var(--error-red); } .toast.error::after { background: var(--error-red); } .toast.info { border-left: 3px solid var(--accent-blue); } @keyframes toastSlide { from { opacity: 0; transform: translateX(80px) scale(0.95); } to { opacity: 1; transform: translateX(0) scale(1); } } @keyframes toastProgress { from { width: 100%; } to { width: 0%; } } .toast-message { font-size: 12px; color: var(--text-primary); font-weight: 500; line-height: 1.4; } .toast-close { background: transparent; border: none; color: var(--text-secondary); cursor: pointer; font-size: 16px; padding: 2px 4px; border-radius: 4px; transition: all var(--transition-fast); flex-shrink: 0; } .toast-close:hover { color: var(--text-bright); background: var(--bg-hover); } .response-actions { display: flex; gap: 4px; align-items: center; flex-wrap: nowrap; } .btn-icon-action { background: rgba(99, 115, 175, 0.1); border: 1px solid var(--border-color); color: var(--text-secondary); width: 28px; height: 28px; border-radius: var(--radius-sm); cursor: pointer; transition: all var(--transition-fast); display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0; } .btn-icon-action:hover { background: rgba(59,130,246,0.15); border-color: rgba(59,130,246,0.3); color: var(--accent-blue); } .btn-icon-action .material-symbols-rounded { font-size: 15px; } .btn-apply-all { background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none; border-radius: var(--radius-sm); padding: 0 10px; height: 28px; font-size: 11px; font-weight: 700; cursor: pointer; transition: all var(--transition-base); display: inline-flex; align-items: center; justify-content: center; gap: 4px; font-family: 'Inter', sans-serif; box-shadow: 0 2px 8px rgba(16, 185, 129, 0.3); white-space: nowrap; flex-shrink: 0; } .btn-apply-all:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4); filter: brightness(1.1); } .btn-apply-all:active { transform: translateY(0) scale(0.98); } .btn-apply-all:disabled { opacity: 0.4; cursor: not-allowed; transform: none !important; } .btn-apply-all .material-symbols-rounded { font-size: 14px; } .tooltip { position: relative; } .tooltip::after { content: attr(data-tooltip); position: absolute; bottom: 100%; left: 50%; transform: translateX(-50%) translateY(4px); background: var(--bg-card); color: var(--text-primary); padding: 6px 12px; border-radius: var(--radius-sm); font-size: 11px; white-space: nowrap; opacity: 0; visibility: hidden; transition: all var(--transition-base); pointer-events: none; border: 1px solid var(--border-color); z-index: 100; box-shadow: var(--shadow-md); font-weight: 500; } .tooltip:hover::after { opacity: 1; visibility: visible; transform: translateX(-50%) translateY(-5px); } @media (max-width: 1200px) { .sidebar { width: 240px; min-width: 240px; } } @media (max-width: 1024px) { .main-container { flex-direction: column; } .sidebar { width: 100%; min-width: 100%; max-height: 250px; } .sidebar.collapsed { max-height: 0; } .editor-panel, .response-panel { flex: 1; border-right: none; } .editor-panel { border-bottom: 1px solid var(--border-color); } } 
</style></head><body><input type="file" id="folder-input" class="hidden-input" webkitdirectory multiple><script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script><header class="header"><div class="logo"><div class="logo-icon">AI</div><div class="logo-text">AI<span>Code</span></div></div><div class="api-config-container"><label for="api-provider"><span class="material-symbols-rounded" style="font-size:14px">smart_toy</span></label><select id="api-provider" class="provider-selector" onchange="onProviderChange()"><option value="anthropic">Anthropic (Claude)</option><option value="openai">OpenAI (ChatGPT)</option><option value="gemini">Google (Gemini)</option></select><span class="provider-badge anthropic" id="provider-badge">Claude</span><input type="password" id="api-key" class="api-key-input" placeholder="sk-ant-api03-..." autocomplete="off"><button class="api-key-toggle" id="api-key-toggle" onclick="toggleApiKeyVisibility()" title="Mostrar/ocultar chave"><span class="material-symbols-rounded" style="font-size:16px" id="api-key-icon">visibility_off</span></button><button class="api-key-clear" onclick="clearApiKey()" title="Limpar chave salva"><span class="material-symbols-rounded" style="font-size:16px">close</span></button></div><div class="action-buttons"><button class="btn btn-folder tooltip" data-tooltip="Selecionar pasta do projeto" onclick="selecionarPasta()"><span class="material-symbols-rounded" style="font-size:16px">folder_open</span> Abrir Pasta </button><button class="btn btn-save tooltip" data-tooltip="Opções de salvamento" onclick="abrirModalSalvar()"><span class="material-symbols-rounded" style="font-size:16px">save</span> Salvar / Exportar </button><a href="tutorial.html" target="_blank" class="btn btn-secondary tooltip" data-tooltip="Guia completo de como usar o AICode" style="text-decoration:none;"><span class="material-symbols-rounded" style="font-size:16px">help</span> Tutorial </a></div></header><main class="main-container"><aside class="sidebar" id="sidebar"><div class="sidebar-header"><span class="sidebar-title"><span class="material-symbols-rounded" style="font-size:15px">folder_special</span> Explorador</span><div class="sidebar-actions"><button class="sidebar-btn" onclick="selecionarPasta()" title="Abrir pasta"><span class="material-symbols-rounded" style="font-size:16px">create_new_folder</span></button><button class="sidebar-btn" onclick="selecionarTodosArquivos()" title="Selecionar todos"><span class="material-symbols-rounded" style="font-size:16px">select_all</span></button><button class="sidebar-btn" onclick="limparSelecao()" title="Limpar seleção"><span class="material-symbols-rounded" style="font-size:16px">deselect</span></button></div></div><div class="folder-info empty" id="folder-info">Nenhuma pasta selecionada</div><div class="file-tree" id="file-tree"><div class="file-tree-empty"><span class="material-symbols-rounded" style="font-size:36px;color:var(--text-secondary);opacity:0.4">folder_off</span><p>Nenhum projeto aberto</p><button class="btn btn-folder" onclick="selecionarPasta()" style="font-size: 11px; padding: 7px 14px;"><span class="material-symbols-rounded" style="font-size:14px">folder_open</span> Selecionar Pasta </button></div></div><div class="selection-bar" id="selection-bar" style="display: none;"><span class="selection-info" id="selection-info">0 arquivos selecionados</span><div class="selection-actions"><button class="selection-btn danger" onclick="limparSelecao()"><span class="material-symbols-rounded" style="font-size:13px">close</span> Limpar </button></div></div></aside><section class="editor-panel"><div class="panel-header"><div class="panel-header-left"><button class="toggle-sidebar-btn" onclick="toggleSidebar()" title="Mostrar/Ocultar explorador"><span class="material-symbols-rounded" style="font-size:16px">menu</span></button><div class="panel-header-title"><span class="material-symbols-rounded">circle</span> Editor </div><span class="current-file" id="current-file">novo arquivo</span></div><select id="language-selector" class="language-selector" onchange="mudarLinguagem()"><option value="javascript">JavaScript</option><option value="typescript">TypeScript</option><option value="python">Python</option><option value="php">PHP</option><option value="html">HTML</option><option value="css">CSS</option><option value="java">Java</option><option value="csharp">C#</option><option value="sql">SQL</option><option value="json">JSON</option><option value="xml">XML</option><option value="markdown">Markdown</option><option value="yaml">YAML</option></select><div class="editor-actions"><button class="editor-btn" id="btn-salvar-arquivo" onclick="salvarArquivoAtual()" title="Salvar (Ctrl+S)"><span class="material-symbols-rounded" style="font-size:14px">save</span> Salvar </button><button class="editor-btn" onclick="baixarArquivoAtual()" title="Baixar este arquivo"><span class="material-symbols-rounded" style="font-size:14px">download</span> Baixar </button></div></div><div id="editor-container"></div></section><section class="response-panel"><div class="panel-header"><div class="chat-tabs"><button class="chat-tab active" id="tab-chat" onclick="trocarAba('chat')"><span class="material-symbols-rounded">chat</span> Chat <span class="history-badge" id="history-badge" style="display:none">0</span></button><button class="chat-tab" id="tab-ultima" onclick="trocarAba('ultima')"><span class="material-symbols-rounded">electric_bolt</span> Resultado </button></div><div class="response-actions"><button class="btn-icon-action" onclick="limparHistorico()" id="btn-nova-conversa" style="display:none" title="Nova conversa"><span class="material-symbols-rounded">refresh</span></button><button class="btn-apply-all" onclick="aplicarTodasCorrecoes()" id="btn-aplicar-tudo" title="Aplicar todas as alterações"><span class="material-symbols-rounded">done_all</span> Aplicar </button><button class="btn-icon-action" onclick="copiarResposta()" title="Copiar"><span class="material-symbols-rounded">content_copy</span></button></div></div><div id="loader" class="loader-container"><div class="loader"></div><div class="loader-text" id="loader-text">Analisando código com IA...</div></div><div id="aba-chat" class="chat-container"><div id="chat-messages" class="chat-messages"><div class="chat-empty"><span class="material-symbols-rounded" style="font-size:36px;opacity:0.3">forum</span><span>Histórico da conversa aparecerá aqui</span><span style="font-size:11px;color:var(--text-secondary)">Multi-turno com contexto preservado</span></div></div></div><div id="aba-ultima" class="aba-content" style="display:none"><div id="response-content" class="response-content empty"><div class="empty-icon"><span class="material-symbols-rounded">rocket_launch</span></div><span class="empty-title">Aguardando sua instrução</span><span class="empty-desc"> 1. Abra uma pasta ou cole código no editor<br> 2. Descreva o que deseja no campo abaixo<br> 3. Clique em "Enviar" para a IA processar </span></div></div></section></main><footer class="footer"><div id="context-meter"><div class="meter-bar"><div class="meter-fill" id="meter-fill" style="width:0%;background:var(--success-green)"></div></div><div class="meter-label"><span id="meter-label-left">0 tokens estimados</span><span id="meter-label-right">Limite: ~90k tokens</span></div></div><div class="custom-instruction-container"><input type="text" id="custom-instruction" class="instruction-input" placeholder="Descreva o que quer fazer... Ex: 'Corrija bugs', 'Refatore', 'Adicione testes' (suporta follow-up!)" onkeydown="if(event.key === 'Enter') enviarPedidoPersonalizado()" oninput="atualizarMedidorContexto()"><button class="btn-send" onclick="enviarPedidoPersonalizado()"><span class="material-symbols-rounded" style="font-size:18px">send</span> Enviar </button></div></footer><div class="status-bar"><div class="status-item"><span class="status-dot"></span><span id="status-provider-info">AICode · Anthropic Claude · Edição Cirúrgica</span></div><div class="status-item" style="color:rgba(255,255,255,0.7); font-size:10px; font-weight:500;">Â© <?php echo date("Y"); ?> AICode IDE â€¢ <a href="privacidade.php" style="color:#60a5fa; text-decoration:underline; margin:0 4px;">Privacidade</a> | <a href="termos.php" style="color:#60a5fa; text-decoration:underline; margin:0 4px;">Termos</a> | <a href="suporte.php" style="color:#60a5fa; text-decoration:underline; margin:0 4px;">Suporte & Contato</a></div><div class="status-item"><span id="status-files">Arquivos: 0</span><span style="opacity:0.3">·</span><span id="status-modified">Modificados: 0</span><span style="opacity:0.3">·</span><span id="status-chars">Caracteres: 0</span><span style="opacity:0.3">·</span><span id="status-lines">Linhas: 0</span></div></div><div class="modal-overlay" id="modal-diff"><div class="modal diff-modal"><div class="modal-header"><div class="modal-title"><span class="material-symbols-rounded" style="font-size:20px;color:var(--accent-blue)">difference</span><span id="diff-modal-title">Diff — Antes vs Depois</span></div><button class="modal-close" onclick="fecharModal('modal-diff')"><span class="material-symbols-rounded" style="font-size:18px">close</span></button></div><div class="modal-body" style="padding:0"><div class="diff-container"><div class="diff-side old"><div class="diff-side-header"><span class="material-symbols-rounded" style="font-size:14px">remove_circle</span> Antes</div><div class="diff-lines" id="diff-old"></div></div><div class="diff-side new"><div class="diff-side-header"><span class="material-symbols-rounded" style="font-size:14px">add_circle</span> Depois</div><div class="diff-lines" id="diff-new"></div></div></div><div class="diff-stats"><span class="diff-stat-add" id="diff-stat-add">+0 linhas</span><span class="diff-stat-rem" id="diff-stat-rem">-0 linhas</span><span style="color:var(--text-secondary)" id="diff-stat-total"></span></div></div><div class="modal-footer"><button class="btn btn-secondary" onclick="fecharModal('modal-diff')">Cancelar</button><button class="btn btn-primary" id="diff-confirm-btn" onclick="confirmarAplicarBloco()"><span class="material-symbols-rounded" style="font-size:15px">check</span> Aplicar </button></div></div></div><div class="modal-overlay" id="modal-salvar"><div class="modal"><div class="modal-header"><div class="modal-title"><span class="material-symbols-rounded" style="font-size:20px;color:var(--accent-green)">save</span> Salvar / Exportar</div><button class="modal-close" onclick="fecharModal('modal-salvar')"><span class="material-symbols-rounded" style="font-size:18px">close</span></button></div><div class="modal-body"><div class="save-option" onclick="salvarNaPastaOriginal()" id="opt-salvar-original"><div class="save-option-title"><span class="material-symbols-rounded" style="font-size:18px;color:var(--accent-blue)">folder</span> Salvar na Pasta Original</div><div class="save-option-desc">Grava os arquivos modificados de volta na pasta do seu PC. (Chrome/Edge)</div></div><div class="save-option" onclick="baixarArquivoAtual(); fecharModal('modal-salvar')"><div class="save-option-title"><span class="material-symbols-rounded" style="font-size:18px;color:var(--accent-cyan)">download</span> Baixar Arquivo Atual</div><div class="save-option-desc">Faz download apenas do arquivo que está aberto no editor.</div></div><div class="save-option" onclick="baixarModificadosZip()"><div class="save-option-title"><span class="material-symbols-rounded" style="font-size:18px;color:var(--accent-orange)">inventory_2</span> Baixar Só os Modificados (ZIP)</div><div class="save-option-desc">Faz download em ZIP apenas dos arquivos que foram alterados pela IA ou por você.</div></div><div class="save-option" onclick="baixarProjetoZip()"><div class="save-option-title"><span class="material-symbols-rounded" style="font-size:18px;color:var(--accent-purple)">folder_zip</span> Baixar Projeto Completo (ZIP)</div><div class="save-option-desc">Faz download de TODOS os arquivos do projeto (com as correções aplicadas).</div></div></div><div class="modal-footer"><button class="btn btn-secondary" onclick="fecharModal('modal-salvar')">Cancelar</button></div></div></div><div class="toast-container" id="toast-container"></div><div class="modal-overlay" id="modal-security"><div class="modal" style="max-width: 480px;"><div class="modal-header"><div class="modal-title"><span class="material-symbols-rounded" style="font-size:20px;color:var(--accent-yellow)">shield</span> Aviso de Segurança</div><button class="modal-close" onclick="fecharModal('modal-security')"><span class="material-symbols-rounded" style="font-size:18px">close</span></button></div><div class="modal-body"><div style="display:flex;flex-direction:column;gap:14px;font-size:13px;line-height:1.6"><p><strong style="color:var(--accent-green)">✓ Sua chave API é armazenada APENAS no seu navegador</strong></p><p style="color:var(--text-secondary)">O AICode usa <code>localStorage</code> para salvar sua chave. Isso significa:</p><ul style="color:var(--text-secondary);margin-left:20px;"><li>A chave <strong>nunca</strong> é enviada para nosso servidor</li><li>Ela vai <strong>diretamente</strong> do seu navegador para a API do provedor selecionado</li><li>Outros usuários <strong>não conseguem</strong> ver sua chave</li><li>Fica salva apenas neste navegador/dispositivo</li></ul><p style="color:var(--text-secondary)"><span class="material-symbols-rounded" style="font-size:14px;vertical-align:middle;color:var(--accent-yellow)">info</span><strong>Dica:</strong> Use chaves com limite de gastos nos consoles de cada provedor.</p><div style="background:rgba(59,130,246,0.1);border:1px solid rgba(59,130,246,0.2);border-radius:var(--radius-md);padding:10px;margin-top:4px;"><label style="display:flex;align-items:center;gap:8px;cursor:pointer;font-size:12px;"><input type="checkbox" id="dont-show-security" style="accent-color:var(--accent-blue)"><span>Não mostrar novamente neste navegador</span></label></div></div></div><div class="modal-footer"><button class="btn btn-primary" onclick="aceitarSeguranca()"><span class="material-symbols-rounded" style="font-size:16px">check</span> Entendi </button></div></div></div><script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs/loader.min.js"></script><script>
// =============================================
// VARIÁVEIS GLOBAIS
// =============================================
let editor = null;
let ultimaRespostaTexto = '';
let conversationHistory = [];
let chatDisplayHistory = [];
let isStreaming = false;
let undoStack = {};
let pendingDiffBloco = null;
let pendingDiffType = null;
let blocosGlobaisSurgicos = [];
let blocosGlobaisFull = [];

// Provider configuration
const PROVIDERS = {
    anthropic: {
        name: 'Anthropic (Claude)',
        shortName: 'Claude',
        apiUrl: 'https://api.anthropic.com/v1/messages',
        model: 'claude-sonnet-4-5-20250929',
        maxTokens: 32000,
        contextLimit: 180000,  // ~200k context window
        keyPrefix: 'sk-ant-',
        placeholder: 'sk-ant-api03-...',
        badgeClass: 'anthropic',
        storageKey: 'aicode_api_key_anthropic',
        statusText: 'AICode · Anthropic Claude · Edição Cirúrgica'
    },
    openai: {
        name: 'OpenAI (ChatGPT)',
        shortName: 'ChatGPT',
        apiUrl: 'https://api.openai.com/v1/chat/completions',
        model: 'gpt-4o',
        maxTokens: 32000,  // Increased from 16384
        contextLimit: 120000,  // ~128k context window
        keyPrefix: 'sk-',
        placeholder: 'sk-proj-...',
        badgeClass: 'openai',
        storageKey: 'aicode_api_key_openai',
        statusText: 'AICode · OpenAI GPT-4o · Edição Cirúrgica'
    },
    gemini: {
        name: 'Google (Gemini)',
        shortName: 'Gemini',
        apiUrl: 'https://generativelanguage.googleapis.com/v1beta/models/',
        model: 'gemini-2.5-flash',
        maxTokens: 65536,
        contextLimit: 900000,  // ~1M context window
        keyPrefix: 'AI',
        placeholder: 'AIza...',
        badgeClass: 'gemini',
        storageKey: 'aicode_api_key_gemini',
        statusText: 'AICode · Google Gemini 2.5 Flash · Edição Cirúrgica'
    }
};

let currentProvider = 'anthropic';

// Dynamic token limit based on provider
function getContextLimit() {
    return getProvider().contextLimit;
}

let projetoAtual = {
    nome: '',
    arquivos: [],
    arquivosSelecionados: new Set(),
    arquivoAberto: null,
    arquivosModificados: new Set()
};

const EXTENSOES_CODIGO = [
    '.js','.jsx','.ts','.tsx','.mjs','.cjs','.py','.pyw','.php','.phtml',
    '.java','.kt','.scala','.cs','.vb','.cpp','.c','.h','.hpp',
    '.html','.htm','.vue','.svelte','.css','.scss','.sass','.less',
    '.json','.xml','.yaml','.yml','.sql','.rb','.erb','.go','.rs','.swift',
    '.sh','.bash','.zsh','.ps1','.md','.txt','.env','.gitignore','.dockerignore',
    '.dockerfile','dockerfile'
];

const LINGUAGEM_MAP = {
    'js':'javascript','jsx':'javascript','mjs':'javascript','cjs':'javascript',
    'ts':'typescript','tsx':'typescript','py':'python','pyw':'python','php':'php','phtml':'php',
    'java':'java','kt':'kotlin','scala':'scala','cs':'csharp','vb':'vb',
    'cpp':'cpp','c':'c','h':'cpp','hpp':'cpp','html':'html','htm':'html','vue':'html','svelte':'html',
    'css':'css','scss':'scss','sass':'scss','less':'less','json':'json','xml':'xml','yaml':'yaml','yml':'yaml',
    'sql':'sql','rb':'ruby','erb':'ruby','go':'go','rs':'rust','swift':'swift',
    'sh':'shell','bash':'shell','zsh':'shell','ps1':'powershell',
    'md':'markdown','txt':'plaintext','env':'plaintext','gitignore':'plaintext','dockerignore':'plaintext','dockerfile':'dockerfile'
};

const ICONES_ARQUIVO = {
    'js':'📜','jsx':'⚛️','ts':'💠','tsx':'⚛️','py':'🐍','php':'🐘','java':'☕','cs':'💜',
    'html':'🌐','css':'🎨','scss':'🎨','json':'📋','xml':'📄','yaml':'⚙️','yml':'⚙️',
    'sql':'🗃️','md':'📝','txt':'📄','vue':'💚','svelte':'🧡','go':'🐹','rs':'🦀','rb':'💎','default':'📄'
};

// =============================================
// PROVIDER MANAGEMENT
// =============================================
function getProvider() {
    return PROVIDERS[currentProvider];
}

function onProviderChange() {
    // Save current key before switching
    const oldProvider = currentProvider;
    const oldKey = document.getElementById('api-key').value.trim();
    if (oldKey) {
        localStorage.setItem(PROVIDERS[oldProvider].storageKey, oldKey);
    }

    // Switch provider
    currentProvider = document.getElementById('api-provider').value;
    const provider = getProvider();

    // Update UI
    const badge = document.getElementById('provider-badge');
    badge.textContent = provider.shortName;
    badge.className = 'provider-badge ' + provider.badgeClass;

    document.getElementById('api-key').placeholder = provider.placeholder;
    document.getElementById('status-provider-info').textContent = provider.statusText;

    // Load saved key for new provider
    const savedKey = localStorage.getItem(provider.storageKey);
    document.getElementById('api-key').value = savedKey || '';

    // Save provider preference
    localStorage.setItem('aicode_provider', currentProvider);

    // Update context meter with new provider limits
    atualizarMedidorContexto();

    mostrarToast('Provedor alterado para ' + provider.name + ' (limite: ~' + Math.round(provider.contextLimit / 1000) + 'k tokens)', 'info');
}

function validateApiKey(key) {
    const provider = getProvider();
    if (!key) return { valid: false, message: 'Insira sua API Key na barra superior.' };

    switch (currentProvider) {
        case 'anthropic':
            if (!key.startsWith('sk-ant-')) return { valid: false, message: 'API Key Anthropic inválida. Deve começar com "sk-ant-".' };
            break;
        case 'openai':
            if (!key.startsWith('sk-')) return { valid: false, message: 'API Key OpenAI inválida. Deve começar com "sk-".' };
            break;
        case 'gemini':
            if (key.length < 10) return { valid: false, message: 'API Key Gemini inválida. Obtenha em aistudio.google.com.' };
            break;
    }
    return { valid: true };
}

// =============================================
// MONACO EDITOR
// =============================================
require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs' } });

require(['vs/editor/editor.main'], function() {
    monaco.editor.defineTheme('aiCodeTheme', {
        base: 'vs-dark', inherit: true,
        rules: [
            { token: 'comment', foreground: '5c6b8a', fontStyle: 'italic' },
            { token: 'keyword', foreground: '7aa2f7' },
            { token: 'string', foreground: '9ece6a' },
            { token: 'number', foreground: 'ff9e64' },
            { token: 'function', foreground: '7dcfff' },
            { token: 'variable', foreground: 'c0caf5' },
            { token: 'type', foreground: '2ac3de' },
        ],
        colors: {
            'editor.background': '#0f1117',
            'editor.foreground': '#c0caf5',
            'editorLineNumber.foreground': '#3b4261',
            'editorLineNumber.activeForeground': '#737aa2',
            'editor.selectionBackground': '#28344a',
            'editor.lineHighlightBackground': '#15182a',
            'editorCursor.foreground': '#c0caf5',
            'editor.selectionHighlightBackground': '#1f2b46'
        }
    });

    editor = monaco.editor.create(document.getElementById('editor-container'), {
        value: getCodigoExemplo(),
        language: 'javascript',
        theme: 'aiCodeTheme',
        fontSize: 14,
        fontFamily: "'Fira Code', Consolas, 'Courier New', monospace",
        fontLigatures: true,
        minimap: { enabled: true, scale: 1 },
        scrollBeyondLastLine: false,
        automaticLayout: true,
        tabSize: 4,
        wordWrap: 'on',
        lineNumbers: 'on',
        renderLineHighlight: 'all',
        cursorBlinking: 'smooth',
        cursorSmoothCaretAnimation: 'on',
        smoothScrolling: true,
        padding: { top: 12 },
        renderWhitespace: 'selection',
        bracketPairColorization: { enabled: true }
    });

    editor.onDidChangeModelContent(() => { atualizarStatusBar(); marcarArquivoModificado(); });
    editor.addCommand(monaco.KeyMod.CtrlCmd | monaco.KeyCode.KeyS, () => salvarArquivoAtual());
    atualizarStatusBar();
});

function getCodigoExemplo() {
    return `// 🚀 AICode — Editor de Código com IA (Multi-Provider)
//
// ============================================
// COMO USAR:
// ============================================
//
// 1. 🤖 Selecione o provedor de IA (Anthropic, OpenAI ou Gemini)
// 2. 🔑 Insira sua API Key do provedor escolhido
// 3. 📁 Clique em "Abrir Pasta" para carregar seu projeto
// 4. ☑️ Selecione os arquivos que deseja analisar
// 5. 💬 Digite sua instrução no campo inferior
// 6. 🚀 Clique em "Enviar"
// 7. ⚡ A IA retornará APENAS as partes que mudam
// 8. 📥 Clique "Aplicar" ou "Aplicar Tudo"
// 9. 💾 Use "Salvar/Exportar" para baixar
//
// ✨ Edição cirúrgica: modifica APENAS o necessário!
// 🔄 Troque de provedor a qualquer momento!
// ============================================

function exemploParaAnalise(dados) {
    let resultado = [];
    for (let i = 0; i < dados.length; i++) {
        if (dados[i] != null) {
            resultado.push(dados[i] * 2);
        }
    }
    return resultado;
}

const numeros = [1, 2, null, 4, 5];
const processado = exemploParaAnalise(numeros);
console.log(processado);`;
}

// =============================================
// PASTA / ARQUIVOS
// =============================================
function selecionarPasta() { document.getElementById('folder-input').click(); }

document.getElementById('folder-input').addEventListener('change', async function(e) {
    const files = Array.from(e.target.files);
    if (files.length === 0) return;
    const nomePasta = files[0].webkitRelativePath.split('/')[0];
    const arquivosCodigo = files.filter(file => {
        const nome = file.name.toLowerCase();
        const ext = '.' + nome.split('.').pop();
        return EXTENSOES_CODIGO.includes(ext) || EXTENSOES_CODIGO.includes(nome) || !nome.includes('.');
    }).filter(file => {
        const c = file.webkitRelativePath.toLowerCase();
        return !c.includes('node_modules/') && !c.includes('vendor/') && !c.includes('.git/') && !c.includes('__pycache__/') && !c.includes('.next/') && !c.includes('dist/') && !c.includes('build/') && !c.includes('.cache/');
    });

    projetoAtual = { nome: nomePasta, arquivos: [], arquivosSelecionados: new Set(), arquivoAberto: null, arquivosModificados: new Set() };

    for (const file of arquivosCodigo) {
        try {
            const conteudo = await new Promise((res, rej) => { const r = new FileReader(); r.onload = e => res(e.target.result); r.onerror = rej; r.readAsText(file); });
            projetoAtual.arquivos.push({ id: file.webkitRelativePath, nome: file.name, caminho: file.webkitRelativePath, conteudo, conteudoOriginal: conteudo, tamanho: file.size, extensao: file.name.split('.').pop().toLowerCase() });
        } catch (err) { console.warn('Erro ao ler:', file.name, err); }
    }

    atualizarInfoPasta(); renderizarArvoreArquivos(); atualizarStatusBar();
    mostrarToast('Projeto "' + nomePasta + '" carregado com ' + projetoAtual.arquivos.length + ' arquivo(s)', 'success');
    e.target.value = '';
});

function atualizarInfoPasta() {
    const el = document.getElementById('folder-info');
    if (projetoAtual.nome) { el.classList.remove('empty'); el.innerHTML = '<span class="material-symbols-rounded" style="font-size:14px">folder</span> ' + projetoAtual.nome + ' <span style="color:var(--text-secondary)">(' + projetoAtual.arquivos.length + ' arquivos)</span>'; }
    else { el.classList.add('empty'); el.textContent = 'Nenhuma pasta selecionada'; }
}

function renderizarArvoreArquivos() {
    const treeEl = document.getElementById('file-tree');
    if (projetoAtual.arquivos.length === 0) { treeEl.innerHTML = '<div class="file-tree-empty"><span class="material-symbols-rounded" style="font-size:36px;color:var(--text-secondary);opacity:0.4">folder_off</span><p>Nenhum projeto aberto</p><button class="btn btn-folder" onclick="selecionarPasta()" style="font-size:11px;padding:7px 14px"><span class="material-symbols-rounded" style="font-size:14px">folder_open</span> Selecionar Pasta</button></div>'; return; }
    const estrutura = {};
    projetoAtual.arquivos.forEach(a => { const p = a.caminho.split('/'); let at = estrutura; for (let i=0;i<p.length-1;i++) { if(!at[p[i]]) at[p[i]]={__tipo:'pasta',__filhos:{}}; at=at[p[i]].__filhos; } at[a.nome]={__tipo:'arquivo',__dados:a}; });
    treeEl.innerHTML = renderizarNivel(estrutura, 0);
}

function renderizarNivel(nivel, prof) {
    let html = '';
    const itens = Object.entries(nivel).sort((a,b)=>{ if(a[1].__tipo===b[1].__tipo) return a[0].localeCompare(b[0]); return a[1].__tipo==='pasta'?-1:1; });
    for (const [nome, item] of itens) {
        if (item.__tipo==='pasta') { const id='folder-'+nome+'-'+prof; html+='<div class="tree-folder open" id="'+id+'"><div class="tree-folder-header" onclick="togglePasta(\''+id+'\')" style="padding-left:'+(16+prof*16)+'px"><span class="tree-folder-toggle">▶</span><span class="tree-item-icon">📁</span><span class="tree-item-name">'+nome+'</span></div><div class="tree-folder-content">'+renderizarNivel(item.__filhos,prof+1)+'</div></div>'; }
        else { const a=item.__dados, ic=ICONES_ARQUIVO[a.extensao]||ICONES_ARQUIVO.default, sel=projetoAtual.arquivosSelecionados.has(a.id), at=projetoAtual.arquivoAberto===a.id, mod=projetoAtual.arquivosModificados.has(a.id); const idE=a.id.replace(/\\/g,'\\\\').replace(/'/g,"\\'"); html+='<div class="tree-item '+(at?'active':'')+' '+(sel?'selected':'')+'" style="padding-left:'+(16+prof*16)+'px" data-id="'+a.id+'"><input type="checkbox" class="tree-item-checkbox" '+(sel?'checked':'')+' onclick="event.stopPropagation();toggleSelecaoArquivo(\''+idE+'\')"><span class="tree-item-icon">'+ic+'</span><span class="tree-item-name" onclick="abrirArquivo(\''+idE+'\')" style="'+(mod?'color:var(--accent-orange);':'')+'">'+nome+(mod?' ●':'')+'</span></div>'; }
    }
    return html;
}

function togglePasta(id) { const p=document.getElementById(id); if(p) p.classList.toggle('open'); }

function toggleSelecaoArquivo(id) { projetoAtual.arquivosSelecionados.has(id)?projetoAtual.arquivosSelecionados.delete(id):projetoAtual.arquivosSelecionados.add(id); atualizarBarraSelecao(); renderizarArvoreArquivos(); atualizarMedidorContexto(); }
function selecionarTodosArquivos() { projetoAtual.arquivos.forEach(a=>projetoAtual.arquivosSelecionados.add(a.id)); atualizarBarraSelecao(); renderizarArvoreArquivos(); atualizarMedidorContexto(); }
function limparSelecao() { projetoAtual.arquivosSelecionados.clear(); atualizarBarraSelecao(); renderizarArvoreArquivos(); atualizarMedidorContexto(); }

function atualizarBarraSelecao() { const t=projetoAtual.arquivosSelecionados.size; document.getElementById('selection-bar').style.display=t>0?'flex':'none'; document.getElementById('selection-info').textContent=t+' arquivo'+(t>1?'s':'')+' selecionado'+(t>1?'s':''); }

function abrirArquivo(id) {
    salvarConteudoEditorNoArquivoAtual();
    const a=projetoAtual.arquivos.find(x=>x.id===id); if(!a) return;
    projetoAtual.arquivoAberto=id;
    if(editor) { editor.setValue(a.conteudo); const l=LINGUAGEM_MAP[a.extensao]||'plaintext'; monaco.editor.setModelLanguage(editor.getModel(),l); document.getElementById('language-selector').value=l; }
    document.getElementById('current-file').textContent=a.caminho;
    document.getElementById('current-file').style.color=projetoAtual.arquivosModificados.has(id)?'var(--accent-orange)':'var(--accent-yellow)';
    renderizarArvoreArquivos(); atualizarStatusBar(); atualizarUIModificados();
}

function salvarConteudoEditorNoArquivoAtual() { if(projetoAtual.arquivoAberto&&editor) { const a=projetoAtual.arquivos.find(x=>x.id===projetoAtual.arquivoAberto); if(a) a.conteudo=editor.getValue(); } }
function toggleSidebar() { document.getElementById('sidebar').classList.toggle('collapsed'); }

function atualizarStatusBar() {
    document.getElementById('status-files').textContent='Arquivos: '+projetoAtual.arquivos.length;
    document.getElementById('status-modified').textContent='Modificados: '+projetoAtual.arquivosModificados.size;
    if(editor) { const c=editor.getValue(); document.getElementById('status-chars').textContent='Chars: '+c.length; document.getElementById('status-lines').textContent='Linhas: '+c.split('\n').length; }
}

function mudarLinguagem() { if(editor) monaco.editor.setModelLanguage(editor.getModel(),document.getElementById('language-selector').value); }

// =============================================
// API CALLS — MULTI-PROVIDER
// =============================================

async function chamarAPI(userMessage, systemPrompt) {
    const apiKey = document.getElementById('api-key').value.trim();
    const validation = validateApiKey(apiKey);
    if (!validation.valid) { exibirErro(validation.message); return null; }

    // Save key
    localStorage.setItem(getProvider().storageKey, apiKey);

    switch (currentProvider) {
        case 'anthropic': return chamarAnthropic(userMessage, systemPrompt, apiKey);
        case 'openai': return chamarOpenAI(userMessage, systemPrompt, apiKey);
        case 'gemini': return chamarGemini(userMessage, systemPrompt, apiKey);
        default: exibirErro('Provedor não suportado.'); return null;
    }
}

// --- ANTHROPIC (Claude) ---
async function chamarAnthropic(userMessage, systemPrompt, apiKey) {
    const provider = PROVIDERS.anthropic;
    mostrarLoader(true);
    isStreaming = true;
    conversationHistory.push({ role: 'user', content: userMessage });
    const instrucaoVisual = document.getElementById('custom-instruction').value.trim();
    adicionarBubbleChat('user', instrucaoVisual || userMessage.substring(0, 120) + '...');

    try {
        const body = { model: provider.model, max_tokens: provider.maxTokens, stream: true, messages: conversationHistory };
        if (systemPrompt) body.system = systemPrompt;

        const response = await fetch(provider.apiUrl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'x-api-key': apiKey, 'anthropic-version': '2023-06-01', 'anthropic-dangerous-direct-browser-access': 'true' },
            body: JSON.stringify(body)
        });

        if (!response.ok) { const ed = await response.json().catch(() => ({})); throw new Error(ed.error?.message || 'Erro HTTP: ' + response.status); }

        const reader = response.body.getReader();
        const decoder = new TextDecoder();
        let fullText = '', buffer = '';
        mostrarLoader(false);
        prepararPainelStreaming();
        const bubbleId = adicionarBubbleChat('assistant', '', true);

        while (true) {
            const { done, value } = await reader.read();
            if (done) break;
            buffer += decoder.decode(value, { stream: true });
            const lines = buffer.split('\n');
            buffer = lines.pop();
            for (const line of lines) {
                if (line.startsWith('data: ')) {
                    const data = line.slice(6);
                    if (data === '[DONE]') continue;
                    try {
                        const p = JSON.parse(data);
                        if (p.type === 'content_block_delta' && p.delta?.text) {
                            fullText += p.delta.text;
                            atualizarStreamingDisplay(fullText);
                            atualizarBubbleChatStreaming(bubbleId, fullText);
                        }
                    } catch (e) {}
                }
            }
        }

        finalizarBubbleChat(bubbleId, fullText);
        conversationHistory.push({ role: 'assistant', content: fullText });
        if (conversationHistory.length > 20) conversationHistory = conversationHistory.slice(-20);
        isStreaming = false;
        return fullText;
    } catch (error) {
        console.error('Erro API Anthropic:', error);
        conversationHistory.pop();
        isStreaming = false;
        handleApiError(error, 'Anthropic');
        return null;
    } finally { mostrarLoader(false); isStreaming = false; }
}

// --- OPENAI (ChatGPT) ---
async function chamarOpenAI(userMessage, systemPrompt, apiKey) {
    const provider = PROVIDERS.openai;
    mostrarLoader(true);
    isStreaming = true;
    conversationHistory.push({ role: 'user', content: userMessage });
    const instrucaoVisual = document.getElementById('custom-instruction').value.trim();
    adicionarBubbleChat('user', instrucaoVisual || userMessage.substring(0, 120) + '...');

    try {
        const messages = [];
        if (systemPrompt) messages.push({ role: 'system', content: systemPrompt });
        messages.push(...conversationHistory);

        const body = { model: provider.model, max_tokens: provider.maxTokens, stream: true, messages: messages };

        const response = await fetch(provider.apiUrl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'Authorization': 'Bearer ' + apiKey },
            body: JSON.stringify(body)
        });

        if (!response.ok) { const ed = await response.json().catch(() => ({})); throw new Error(ed.error?.message || 'Erro HTTP: ' + response.status); }

        const reader = response.body.getReader();
        const decoder = new TextDecoder();
        let fullText = '', buffer = '';
        mostrarLoader(false);
        prepararPainelStreaming();
        const bubbleId = adicionarBubbleChat('assistant', '', true);

        while (true) {
            const { done, value } = await reader.read();
            if (done) break;
            buffer += decoder.decode(value, { stream: true });
            const lines = buffer.split('\n');
            buffer = lines.pop();
            for (const line of lines) {
                if (line.startsWith('data: ')) {
                    const data = line.slice(6).trim();
                    if (data === '[DONE]') continue;
                    try {
                        const p = JSON.parse(data);
                        const delta = p.choices?.[0]?.delta?.content;
                        if (delta) {
                            fullText += delta;
                            atualizarStreamingDisplay(fullText);
                            atualizarBubbleChatStreaming(bubbleId, fullText);
                        }
                    } catch (e) {}
                }
            }
        }

        finalizarBubbleChat(bubbleId, fullText);
        conversationHistory.push({ role: 'assistant', content: fullText });
        if (conversationHistory.length > 20) conversationHistory = conversationHistory.slice(-20);
        isStreaming = false;
        return fullText;
    } catch (error) {
        console.error('Erro API OpenAI:', error);
        conversationHistory.pop();
        isStreaming = false;
        handleApiError(error, 'OpenAI');
        return null;
    } finally { mostrarLoader(false); isStreaming = false; }
}

// --- GOOGLE GEMINI ---
async function chamarGemini(userMessage, systemPrompt, apiKey) {
    const provider = PROVIDERS.gemini;
    mostrarLoader(true);
    isStreaming = true;
    conversationHistory.push({ role: 'user', content: userMessage });
    const instrucaoVisual = document.getElementById('custom-instruction').value.trim();
    adicionarBubbleChat('user', instrucaoVisual || userMessage.substring(0, 120) + '...');

    try {
        // Convert conversation history to Gemini format
        const contents = [];
        for (const msg of conversationHistory) {
            contents.push({
                role: msg.role === 'assistant' ? 'model' : 'user',
                parts: [{ text: msg.content }]
            });
        }

        const body = {
            contents: contents,
            generationConfig: { maxOutputTokens: provider.maxTokens }
        };

        if (systemPrompt) {
            body.systemInstruction = { parts: [{ text: systemPrompt }] };
        }

        const url = provider.apiUrl + provider.model + ':streamGenerateContent?alt=sse&key=' + apiKey;

        const response = await fetch(url, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(body)
        });

        if (!response.ok) { const ed = await response.json().catch(() => ({})); throw new Error(ed.error?.message || 'Erro HTTP: ' + response.status); }

        const reader = response.body.getReader();
        const decoder = new TextDecoder();
        let fullText = '', buffer = '';
        mostrarLoader(false);
        prepararPainelStreaming();
        const bubbleId = adicionarBubbleChat('assistant', '', true);

        while (true) {
            const { done, value } = await reader.read();
            if (done) break;
            buffer += decoder.decode(value, { stream: true });
            const lines = buffer.split('\n');
            buffer = lines.pop();
            for (const line of lines) {
                if (line.startsWith('data: ')) {
                    const data = line.slice(6).trim();
                    if (data === '[DONE]' || !data) continue;
                    try {
                        const p = JSON.parse(data);
                        const text = p.candidates?.[0]?.content?.parts?.[0]?.text;
                        if (text) {
                            fullText += text;
                            atualizarStreamingDisplay(fullText);
                            atualizarBubbleChatStreaming(bubbleId, fullText);
                        }
                    } catch (e) {}
                }
            }
        }

        finalizarBubbleChat(bubbleId, fullText);
        conversationHistory.push({ role: 'assistant', content: fullText });
        if (conversationHistory.length > 20) conversationHistory = conversationHistory.slice(-20);
        isStreaming = false;
        return fullText;
    } catch (error) {
        console.error('Erro API Gemini:', error);
        conversationHistory.pop();
        isStreaming = false;
        handleApiError(error, 'Gemini');
        return null;
    } finally { mostrarLoader(false); isStreaming = false; }
}

function handleApiError(error, providerName) {
    if (error.message.includes('401') || error.message.includes('403'))
        exibirErro('API Key ' + providerName + ' inválida ou expirada.');
    else if (error.message.includes('429'))
        exibirErro('Limite de requisições atingido no ' + providerName + '. Aguarde.');
    else if (error.message.includes('Failed to fetch'))
        exibirErro('Erro de conexão com ' + providerName + '. Verifique sua rede.');
    else
        exibirErro('Erro ' + providerName + ': ' + error.message);
}

function prepararPainelStreaming() {
    const c = document.getElementById('response-content');
    c.classList.remove('empty');
    c.style.display = 'block';
    c.innerHTML = '<div id="streaming-content" style="white-space:pre-wrap;font-family:\'Fira Code\',monospace;font-size:13px;line-height:1.7;color:var(--text-primary)"></div><span class="streaming-cursor">▋</span>';
}

function atualizarStreamingDisplay(t) {
    const s = document.getElementById('streaming-content');
    if (s) { s.textContent = t; document.getElementById('response-content').scrollTop = document.getElementById('response-content').scrollHeight; }
}

// =============================================
// CHAT
// =============================================
let bubbleCounter = 0;

function adicionarBubbleChat(role, texto, isStreamingBubble = false) {
    const id = 'bubble-' + (++bubbleCounter);
    const container = document.getElementById('chat-messages');
    const empty = container.querySelector('.chat-empty');
    if (empty) empty.remove();
    const agora = new Date().toLocaleTimeString('pt-BR', { hour: '2-digit', minute: '2-digit' });
    const provider = getProvider();
    const label = role === 'user' ? 'Você' : provider.shortName;
    const bubble = document.createElement('div');
    bubble.className = 'chat-bubble ' + role + (isStreamingBubble ? ' streaming' : '');
    bubble.id = id;
    bubble.innerHTML = '<div class="chat-bubble-header">' + label + ' · <span>' + agora + '</span></div><div class="chat-bubble-body" id="' + id + '-body">' + (isStreamingBubble ? '<span class="streaming-cursor">▋</span>' : escapeHtmlBasic(texto)) + '</div>';
    container.appendChild(bubble);
    container.scrollTop = container.scrollHeight;
    trocarAba('chat');
    return id;
}

function atualizarBubbleChatStreaming(bubbleId, texto) {
    const b = document.getElementById(bubbleId + '-body');
    if (!b) return;
    if (texto.length > 600) b.innerHTML = '<em style="color:var(--text-secondary);font-size:10px">… ' + Math.round(texto.length / 100) / 10 + 'k chars</em>\n' + escapeHtmlBasic(texto.slice(-600));
    else b.innerHTML = escapeHtmlBasic(texto) + '<span class="streaming-cursor">▋</span>';
    document.getElementById('chat-messages').scrollTop = document.getElementById('chat-messages').scrollHeight;
}

function finalizarBubbleChat(bubbleId, textoCompleto) {
    const bubble = document.getElementById(bubbleId);
    if (!bubble) return;
    bubble.classList.remove('streaming');
    const surgicos = extrairBlocosSurgicos(textoCompleto), tradicionais = extrairBlocosDeCodigoDaResposta(textoCompleto), totalBlocos = surgicos.length + tradicionais.length;
    const bodyEl = document.getElementById(bubbleId + '-body');
    let preview = textoCompleto.replace(/```[\s\S]*?```/g, '').replace(/<<<<<<< SEARCH[\s\S]*?>>>>>>> REPLACE/g, '').trim();
    preview = preview.length > 300 ? preview.slice(0, 300) + '…' : preview;
    bodyEl.innerHTML = escapeHtmlBasic(preview || '(edições de código)');
    if (totalBlocos > 0) {
        const s = document.createElement('div');
        s.className = 'chat-code-summary';
        s.textContent = (surgicos.length > 0 ? '⚡ ' + surgicos.length + ' edição(ões) cirúrgica(s)' : '📄 ' + tradicionais.length + ' bloco(s) de código') + ' — ver em "Resultado"';
        s.onclick = () => trocarAba('ultima');
        bubble.appendChild(s);
    }
}

function trocarAba(aba) {
    document.getElementById('aba-chat').style.display = aba === 'chat' ? 'flex' : 'none';
    document.getElementById('aba-ultima').style.display = aba === 'ultima' ? 'flex' : 'none';
    document.getElementById('tab-chat').classList.toggle('active', aba === 'chat');
    document.getElementById('tab-ultima').classList.toggle('active', aba === 'ultima');
}

function escapeHtmlBasic(s) { return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;'); }

// =============================================
// CONTEXT / UNDO / DIFF
// =============================================
function estimarTokens(t) { return Math.round(t / 4); }

function atualizarMedidorContexto() {
    const cs = obterCodigoArquivosSelecionados(), c = cs || obterCodigo(), i = document.getElementById('custom-instruction').value, h = conversationHistory.map(m => m.content).join('');
    const tok = estimarTokens(c.length + i.length + h.length);
    const limit = getContextLimit();
    const pct = Math.min((tok / limit) * 100, 100);
    const m = document.getElementById('context-meter'), f = document.getElementById('meter-fill'), l = document.getElementById('meter-label-left'), r = document.getElementById('meter-label-right');
    m.style.display = 'block';
    f.style.width = pct + '%';
    l.textContent = '~' + tok.toLocaleString() + ' tokens (' + Math.round(pct) + '%)';
    r.textContent = 'Limite: ~' + Math.round(limit / 1000) + 'k tokens (' + getProvider().shortName + ')';
    f.style.background = pct < 60 ? 'var(--success-green)' : pct < 85 ? 'var(--accent-orange)' : 'var(--error-red)';
    return { tokensEstimados: tok, percentual: pct, ok: pct < 95 };
}

function verificarContextoAntesDeSendEnviar() {
    const { tokensEstimados: t, percentual: p } = atualizarMedidorContexto();
    if (p >= 95) { exibirErro('Contexto muito grande (~' + t.toLocaleString() + ' tokens). Selecione menos arquivos.'); return false; }
    if (p >= 80) mostrarToast('Contexto grande (~' + t.toLocaleString() + ' tokens).', 'info');
    return true;
}

function salvarEstadoParaUndo(id, c) { if (!undoStack[id]) undoStack[id] = []; undoStack[id].push(c); if (undoStack[id].length > 10) undoStack[id].shift(); atualizarBotoesUndo(); }

function desfazerUltimaModificacao(id) {
    if (!undoStack[id] || undoStack[id].length === 0) { mostrarToast('Nenhuma versão anterior.', 'info'); return; }
    const c = undoStack[id].pop(), a = projetoAtual.arquivos.find(x => x.id === id);
    if (!a) return;
    a.conteudo = c;
    if (projetoAtual.arquivoAberto === id && editor) editor.setValue(c);
    if (c === a.conteudoOriginal) projetoAtual.arquivosModificados.delete(id);
    renderizarArvoreArquivos(); atualizarStatusBar(); atualizarUIModificados(); atualizarBotoesUndo();
    mostrarToast('Modificação desfeita em "' + a.nome + '"', 'success');
}

function atualizarBotoesUndo() { document.querySelectorAll('[data-undo-id]').forEach(b => { const id = b.dataset.undoId, t = undoStack[id] && undoStack[id].length > 0; b.disabled = !t; }); }

function calcularDiff(a, b) {
    const la = a.split('\n'), lb = b.split('\n');
    let ac = 0, rc = 0, ha = '', hb = '';
    const d = diffLinhas(la, lb);
    d.forEach(x => {
        if (x.type === 'equal') { const e = escapeHtmlBasic(x.line); ha += '<div class="diff-line context">' + e + '</div>'; hb += '<div class="diff-line context">' + e + '</div>'; }
        else if (x.type === 'removed') { ha += '<div class="diff-line removed">- ' + escapeHtmlBasic(x.line) + '</div>'; hb += '<div class="diff-line" style="opacity:0">​</div>'; rc++; }
        else { ha += '<div class="diff-line" style="opacity:0">​</div>'; hb += '<div class="diff-line added">+ ' + escapeHtmlBasic(x.line) + '</div>'; ac++; }
    });
    return { htmlAntigo: ha, htmlNovo: hb, adicionadasCount: ac, removidasCount: rc };
}

function diffLinhas(a, b) {
    const r = [];
    let i = 0, j = 0;
    while (i < a.length || j < b.length) {
        if (i >= a.length) r.push({ type: 'added', line: b[j++] });
        else if (j >= b.length) r.push({ type: 'removed', line: a[i++] });
        else if (a[i] === b[j]) { r.push({ type: 'equal', line: a[i] }); i++; j++; }
        else {
            let f = false;
            for (let l = 1; l <= 6; l++) {
                if (j + l < b.length && a[i] === b[j + l]) { for (let k = 0; k < l; k++) r.push({ type: 'added', line: b[j + k] }); j += l; f = true; break; }
                if (i + l < a.length && a[i + l] === b[j]) { for (let k = 0; k < l; k++) r.push({ type: 'removed', line: a[i + k] }); i += l; f = true; break; }
            }
            if (!f) { r.push({ type: 'removed', line: a[i++] }); r.push({ type: 'added', line: b[j++] }); }
        }
    }
    return r;
}

function abrirDiffModal(bi, ca, cn, na, tipo) {
    const { htmlAntigo: ha, htmlNovo: hn, adicionadasCount: ac, removidasCount: rc } = calcularDiff(ca, cn);
    document.getElementById('diff-modal-title').textContent = 'Diff — ' + (na || 'Arquivo');
    document.getElementById('diff-old').innerHTML = ha;
    document.getElementById('diff-new').innerHTML = hn;
    document.getElementById('diff-stat-add').textContent = '+' + ac + ' linhas';
    document.getElementById('diff-stat-rem').textContent = '-' + rc + ' linhas';
    document.getElementById('diff-stat-total').textContent = cn.split('\n').length + ' linhas total';
    pendingDiffBloco = bi; pendingDiffType = tipo || 'full';
    document.getElementById('modal-diff').classList.add('active');
}

function confirmarAplicarBloco() { fecharModal('modal-diff'); if (pendingDiffBloco !== null) { pendingDiffType === 'surgical' ? executarAplicacaoSurgica(pendingDiffBloco) : aplicarBlocoFullSemDiff(pendingDiffBloco); pendingDiffBloco = null; pendingDiffType = null; } }

// =============================================
// CODE EXTRACTION
// =============================================
function obterCodigo() { salvarConteudoEditorNoArquivoAtual(); return editor ? editor.getValue() : ''; }

function obterCodigoArquivosSelecionados() {
    if (projetoAtual.arquivosSelecionados.size === 0) return null;
    salvarConteudoEditorNoArquivoAtual();
    let c = '';
    projetoAtual.arquivosSelecionados.forEach(id => { const a = projetoAtual.arquivos.find(x => x.id === id); if (a) c += '\n' + '='.repeat(60) + '\nARQUIVO: ' + a.caminho + '\n' + '='.repeat(60) + '\n\n' + a.conteudo + '\n'; });
    return c;
}

function extrairBlocosSurgicos(texto) {
    const blocos = [], rSR = /<<<<<<< SEARCH\n([\s\S]*?)\n=======\n([\s\S]*?)\n>>>>>>> REPLACE/g;
    const rArqs = [/\[ARQUIVO:\s*([^\]\n]+)\]/gi, /\*\*ARQUIVO:\s*`?([^`\n*\]]+)`?\s*\*\*/gi, /###?\s*(?:ARQUIVO|File)[:\s]+`?([^`\n]+)`?/gi, /===+\s*ARQUIVO:\s*([^\n=]+?)\s*===+/gi, /\[ARQUIVO NOVO:\s*([^\]\n]+)\]/gi];
    const marcadores = [];
    for (const rx of rArqs) { let m; while ((m = rx.exec(texto)) !== null) { if (!marcadores.some(x => Math.abs(x.posicao - m.index) < 10)) marcadores.push({ nome: m[1].trim(), posicao: m.index }); } }
    marcadores.sort((a, b) => a.posicao - b.posicao);
    let match, idx = 0;
    while ((match = rSR.exec(texto)) !== null) { let na = null; for (let i = marcadores.length - 1; i >= 0; i--) if (marcadores[i].posicao < match.index) { na = marcadores[i].nome; break; } blocos.push({ index: idx, search: match[1], replace: match[2], arquivo: na, posicao: match.index, tipo: 'surgical' }); idx++; }
    return blocos;
}

function extrairBlocosDeCodigoDaResposta(texto) {
    const blocos = [], temSR = /<<<<<<< SEARCH/.test(texto), rCod = /```[\w]*\n([\s\S]*?)```/g;
    const rArqs = [/===+\s*ARQUIVO:\s*([^\n=]+?)\s*===+/gi, /\*\*(?:ARQUIVO|Arquivo|File):\s*`?([^`\n*]+)`?\s*\*\*/gi, /###?\s*(?:ARQUIVO|Arquivo|File)[:\s]+`?([^`\n]+)`?/gi, /\[ARQUIVO(?:\s*NOVO)?:\s*([^\]\n]+)\]/gi];
    const nomes = [];
    for (const rx of rArqs) { let m; while ((m = rx.exec(texto)) !== null) { if (!nomes.some(n => Math.abs(n.posicao - m.index) < 10)) nomes.push({ nome: m[1].trim(), posicao: m.index }); } }
    nomes.sort((a, b) => a.posicao - b.posicao);
    let mc, idx = 0;
    while ((mc = rCod.exec(texto)) !== null) {
        const code = mc[1], pos = mc.index;
        if (temSR) { const antes = texto.substring(0, pos); if ((antes.match(/<<<<<<< SEARCH/g) || []).length > (antes.match(/>>>>>>> REPLACE/g) || []).length) continue; }
        let na = null; for (let i = nomes.length - 1; i >= 0; i--) if (nomes[i].posicao < pos) { na = nomes[i].nome; break; }
        blocos.push({ index: idx, codigo: code, arquivo: na, tipo: 'full' }); idx++;
    }
    return blocos;
}

// =============================================
// SURGICAL APPLY
// =============================================
function aplicarEdicaoSurgicaNoConteudo(conteudo, searchText, replaceText) {
    const cn = conteudo.replace(/\r\n/g, '\n'), sn = searchText.replace(/\r\n/g, '\n').replace(/^\n+|\n+$/g, ''), rn = replaceText.replace(/\r\n/g, '\n').replace(/^\n+|\n+$/g, '');
    const pos = cn.indexOf(sn);
    if (pos !== -1) return { sucesso: true, conteudo: cn.substring(0, pos) + rn + cn.substring(pos + sn.length), metodo: 'exato' };
    const cL = cn.split('\n'), sL = sn.split('\n');
    while (sL.length > 0 && sL[0].trim() === '') sL.shift();
    while (sL.length > 0 && sL[sL.length - 1].trim() === '') sL.pop();
    if (sL.length === 0) return { sucesso: false, erro: 'Bloco SEARCH vazio' };
    for (let i = 0; i <= cL.length - sL.length; i++) { let ok = true; for (let j = 0; j < sL.length; j++) if (cL[i + j].trimEnd() !== sL[j].trimEnd()) { ok = false; break; } if (ok) { const iO = cL[i].match(/^(\s*)/)[1], iS = sL[0].match(/^(\s*)/)[1]; let ra = rn; if (iO !== iS && iS.length > 0) { const d = iO.length - iS.length; if (d > 0) { const p = ' '.repeat(d); ra = rn.split('\n').map(l => l.length > 0 ? p + l : l).join('\n'); } } return { sucesso: true, conteudo: [...cL.slice(0, i), ra, ...cL.slice(i + sL.length)].join('\n'), metodo: 'fuzzy-trim' }; } }
    for (let i = 0; i <= cL.length - sL.length; i++) { let ok = true; for (let j = 0; j < sL.length; j++) if (cL[i + j].trim() !== sL[j].trim()) { ok = false; break; } if (ok) { const b = cL.slice(0, i), a = cL.slice(i + sL.length), ib = cL[i].match(/^(\s*)/)[1], sb = sL[0].match(/^(\s*)/)[1], rl = rn.split('\n'), rb = rl[0].match(/^(\s*)/)[1]; let aj; if (rb.length > 0 || sb.length > 0) { const br = sb.length > 0 ? sb : rb; aj = rl.map(l => { const lt = l.replace(/^\s*/, ''), li = l.match(/^(\s*)/)[1], ri = Math.max(0, li.length - br.length); return ib + ' '.repeat(ri) + lt; }).join('\n'); } else aj = rl.map(l => ib + l).join('\n'); return { sucesso: true, conteudo: [...b, aj, ...a].join('\n'), metodo: 'fuzzy-indent' }; } }
    if (sL.length >= 3) { const p = sL.slice(0, 2), u = sL.slice(-2); for (let i = 0; i <= cL.length - sL.length; i++) if (cL[i].trim() === p[0].trim() && cL[i + 1].trim() === p[1].trim()) for (let k = i + sL.length - 2; k <= Math.min(i + sL.length + 3, cL.length - 1); k++) if (cL[k].trim() === u[u.length - 1].trim()) return { sucesso: true, conteudo: [...cL.slice(0, i), rn, ...cL.slice(k + 1)].join('\n'), metodo: 'fuzzy-anchor' }; }
    return { sucesso: false, erro: 'Trecho SEARCH não encontrado. O código pode já ter sido modificado.' };
}

function aplicarBlocoSurgico(index) {
    const bloco = blocosGlobaisSurgicos[index];
    if (!bloco) { mostrarToast('Bloco não encontrado.', 'error'); return; }
    let ca, arq, aid;
    if (bloco.arquivo) arq = encontrarArquivoPorNome(bloco.arquivo);
    if (arq) { ca = arq.conteudo; aid = arq.id; }
    else if (editor) { ca = editor.getValue(); aid = projetoAtual.arquivoAberto || '__editor__'; }
    else { mostrarToast('Arquivo alvo não encontrado.', 'error'); return; }
    const r = aplicarEdicaoSurgicaNoConteudo(ca, bloco.search, bloco.replace);
    if (!r.sucesso) { mostrarToast(r.erro, 'error'); const el = document.getElementById('surgical-block-' + index); if (el) { el.classList.add('error'); const s = el.querySelector('.surgical-status'); if (s) { s.className = 'surgical-status error'; s.innerHTML = '<span class="material-symbols-rounded" style="font-size:14px">error</span> ' + r.erro; } } return; }
    abrirDiffModal(index, bloco.search, bloco.replace, (arq ? arq.nome : 'Editor') + ' (cirúrgico)', 'surgical');
}

function executarAplicacaoSurgica(index) {
    const bloco = blocosGlobaisSurgicos[index];
    if (!bloco) return;
    let arq, aid;
    if (bloco.arquivo) arq = encontrarArquivoPorNome(bloco.arquivo);
    let ca;
    if (arq) { ca = arq.conteudo; aid = arq.id; } else if (editor) { ca = editor.getValue(); aid = projetoAtual.arquivoAberto || '__editor__'; } else return;
    const r = aplicarEdicaoSurgicaNoConteudo(ca, bloco.search, bloco.replace);
    if (!r.sucesso) { mostrarToast(r.erro, 'error'); return; }
    salvarEstadoParaUndo(aid, ca);
    if (arq) { arq.conteudo = r.conteudo; projetoAtual.arquivosModificados.add(arq.id); if (projetoAtual.arquivoAberto === arq.id && editor) editor.setValue(r.conteudo); } else if (editor) { editor.setValue(r.conteudo); marcarArquivoModificado(); }
    const el = document.getElementById('surgical-block-' + index);
    if (el) { el.classList.add('applied'); const btn = el.querySelector('.code-apply-btn'); if (btn) { btn.innerHTML = '<span class="material-symbols-rounded" style="font-size:13px">check_circle</span> Aplicado'; btn.classList.add('applied'); btn.disabled = true; } const s = el.querySelector('.surgical-status'); if (s) { s.className = 'surgical-status success'; s.innerHTML = '<span class="material-symbols-rounded" style="font-size:13px">check_circle</span> Aplicado (' + r.metodo + ')'; const u = document.createElement('button'); u.className = 'btn-undo'; u.innerHTML = '<span class="material-symbols-rounded" style="font-size:13px">undo</span> Desfazer'; u.dataset.undoId = aid; u.onclick = () => desfazerUltimaModificacao(aid); u.style.marginLeft = '8px'; s.appendChild(u); } }
    renderizarArvoreArquivos(); atualizarStatusBar(); atualizarUIModificados();
    mostrarToast('Edição cirúrgica aplicada' + (arq ? ' em "' + arq.nome + '"' : '') + ' (' + r.metodo + ')', 'success');
}

function aplicarBlocoFull(index) {
    const bloco = blocosGlobaisFull[index];
    if (!bloco) { mostrarToast('Bloco não encontrado.', 'error'); return; }
    if (bloco.arquivo) { const a = encontrarArquivoPorNome(bloco.arquivo); if (a) { abrirDiffModal(index, a.conteudo, bloco.codigo, a.nome, 'full'); return; } }
    if (editor) abrirDiffModal(index, editor.getValue(), bloco.codigo, 'Editor', 'full');
}

function aplicarBlocoFullSemDiff(index) {
    const bloco = blocosGlobaisFull[index];
    if (!bloco) return;
    if (bloco.arquivo) { const a = encontrarArquivoPorNome(bloco.arquivo); if (a) { salvarEstadoParaUndo(a.id, a.conteudo); a.conteudo = bloco.codigo; projetoAtual.arquivosModificados.add(a.id); if (projetoAtual.arquivoAberto === a.id && editor) editor.setValue(bloco.codigo); renderizarArvoreArquivos(); atualizarStatusBar(); atualizarUIModificados(); const btn = document.getElementById('full-apply-btn-' + index); if (btn) { btn.innerHTML = '<span class="material-symbols-rounded" style="font-size:13px">check_circle</span> Aplicado'; btn.classList.add('applied'); } mostrarToast('Código aplicado em "' + a.nome + '"', 'success'); return; } }
    if (editor) { const p = editor.getValue(), id = projetoAtual.arquivoAberto || '__editor__'; salvarEstadoParaUndo(id, p); editor.setValue(bloco.codigo); marcarArquivoModificado(); const btn = document.getElementById('full-apply-btn-' + index); if (btn) { btn.innerHTML = '<span class="material-symbols-rounded" style="font-size:13px">check_circle</span> Aplicado'; btn.classList.add('applied'); } mostrarToast('Código aplicado no editor!', 'success'); }
}

function encontrarArquivoPorNome(nome) {
    if (!nome) return null;
    nome = nome.trim();
    return projetoAtual.arquivos.find(a => a.caminho === nome) || projetoAtual.arquivos.find(a => a.id === nome) || projetoAtual.arquivos.find(a => a.caminho.endsWith('/' + nome)) || projetoAtual.arquivos.find(a => a.caminho.endsWith(nome)) || projetoAtual.arquivos.find(a => a.nome === nome) || projetoAtual.arquivos.find(a => nome.endsWith(a.caminho)) || projetoAtual.arquivos.find(a => nome.endsWith(a.nome));
}

// =============================================
// MAIN SEND
// =============================================
function detectarContextoProjeto() {
    const a = projetoAtual.arquivos;
    if (a.length === 0) return {};
    const e = [...new Set(a.map(x => x.extensao))];
    let f = 'desconhecido';
    if (a.some(x => x.extensao === 'jsx' || x.extensao === 'tsx')) f = a.some(x => x.extensao === 'ts' || x.extensao === 'tsx') ? 'React + TypeScript' : 'React';
    else if (a.some(x => x.extensao === 'vue')) f = 'Vue.js';
    else if (a.some(x => x.extensao === 'py')) f = 'Python';
    else if (a.some(x => x.extensao === 'ts')) f = 'TypeScript';
    return { extensoes: e, framework: f };
}

async function enviarPedidoPersonalizado() {
    const cs = obterCodigoArquivosSelecionados(), c = cs || obterCodigo(), instr = document.getElementById('custom-instruction').value.trim(), isM = cs !== null;
    if (!c.trim()) { exibirErro('Nenhum código para analisar. Abra uma pasta ou cole código.'); return; }
    if (!instr) { exibirErro('Digite o que deseja. Ex: "Corrija bugs"'); return; }
    if (!verificarContextoAntesDeSendEnviar()) return;

    const ctx = detectarContextoProjeto(), isF = conversationHistory.length > 0;
    const provider = getProvider();

    const systemPrompt = `Você é um engenheiro de software sênior especialista em refatoração e análise de código.
Sua missão é executar modificações PRECISAS e CIRÚRGICAS em código de produção.

## FORMATO DE SAÍDA — EDIÇÃO CIRÚRGICA

Para MODIFICAR código existente, use EXCLUSIVAMENTE blocos SEARCH/REPLACE.
Isso permite aplicar apenas a mudança necessária, sem reescrever o arquivo inteiro.

### FORMATO OBRIGATÓRIO:

${isM ? '**Para cada arquivo modificado:**' : '**Para o arquivo:**'}

[ARQUIVO: caminho/do/arquivo.ext]

\`\`\`
<<<<<<< SEARCH
trecho exato do código atual que será substituído
=======
código novo que substituirá o trecho acima
>>>>>>> REPLACE
\`\`\`

### REGRAS CRÍTICAS:

1. **O bloco SEARCH deve conter o trecho EXATO como está no código fornecido**, incluindo espaçamento, indentação e quebras de linha.
2. **Inclua 1-3 linhas de contexto** antes e depois da mudança real no bloco SEARCH, para garantir que o match seja único no arquivo.
3. **Use MÚLTIPLOS blocos SEARCH/REPLACE** para múltiplas edições no mesmo arquivo. Cada bloco é uma edição independente.
4. **Cada bloco deve ser o MENOR possível** — apenas as linhas que realmente mudam, mais o contexto mínimo para match.
5. **NUNCA coloque "// ... resto do código" ou similar**. Cada bloco SEARCH/REPLACE é cirúrgico: só o trecho que muda.
6. **Para CRIAR um arquivo NOVO** (que não existe), use bloco de código completo:

[ARQUIVO NOVO: caminho/do/novo-arquivo.ext]
\`\`\`linguagem
conteúdo completo do novo arquivo
\`\`\`

7. **Para REMOVER código**, use SEARCH com o trecho a remover e REPLACE vazio.

## CONTEXTO

- Framework: ${ctx.framework || 'não identificado'}
- Extensões: ${ctx.extensoes ? ctx.extensoes.join(', ') : 'N/A'}
- Modo: ${isM ? 'Multi-arquivo (' + projetoAtual.arquivosSelecionados.size + ' arquivos selecionados)' : 'Arquivo único'}
- ${isF ? 'CONVERSA EM ANDAMENTO: use o histórico para manter contexto. O código fornecido já reflete as alterações anteriores.' : 'NOVA SESSÃO'}

## PRINCÍPIOS

- Execute a tarefa, não apenas explique
- Preserve todo código não mencionado (ele permanece intacto automaticamente com SEARCH/REPLACE)
- Corrija bugs óbvios encontrados no caminho
- Mantenha o estilo de código existente
- Seja preciso na cópia do trecho SEARCH — ele DEVE bater exatamente com o código fornecido`;

    const userMessage = isF ? `## TAREFA\n${instr}\n\n## CÓDIGO ATUAL (já com alterações anteriores)\n${c}` : `## CÓDIGO DO PROJETO\n\n${c}\n\n---\n\n## TAREFA SOLICITADA\n${instr}`;

    document.getElementById('loader-text').textContent = 'Analisando código com ' + provider.shortName + '...';

    const resposta = await chamarAPI(userMessage, systemPrompt);
    if (resposta) { ultimaRespostaTexto = resposta; exibirRespostaComBotoes(resposta); atualizarBadgeHistorico(); document.getElementById('custom-instruction').value = ''; }
}

function limparHistorico() {
    conversationHistory = []; chatDisplayHistory = []; undoStack = {}; ultimaRespostaTexto = ''; blocosGlobaisSurgicos = []; blocosGlobaisFull = [];
    document.getElementById('chat-messages').innerHTML = '<div class="chat-empty"><span class="material-symbols-rounded" style="font-size:36px;opacity:0.3">forum</span><span>Nova conversa iniciada</span></div>';
    const c = document.getElementById('response-content');
    c.classList.add('empty');
    c.innerHTML = '<div class="empty-icon"><span class="material-symbols-rounded">refresh</span></div><span class="empty-title">Nova conversa</span><span class="empty-desc">Histórico limpo. A IA começará do zero.</span>';
    atualizarBadgeHistorico();
    mostrarToast('Histórico limpo. Nova sessão.', 'info');
}

function atualizarBadgeHistorico() {
    const b = document.getElementById('history-badge'), n = document.getElementById('btn-nova-conversa'), t = Math.floor(conversationHistory.length / 2);
    if (t > 0) { b.textContent = t; b.style.display = 'inline'; n.style.display = 'inline-flex'; } else { b.style.display = 'none'; n.style.display = 'none'; }
}

// =============================================
// RENDER RESPONSE
// =============================================
function exibirRespostaComBotoes(texto) {
    const content = document.getElementById('response-content');
    content.classList.remove('empty');
    content.style.display = 'block';
    const surgicos = extrairBlocosSurgicos(texto), tradicionais = extrairBlocosDeCodigoDaResposta(texto);
    const tradicionalsFiltrados = tradicionais.filter(b => !b.codigo.trim().startsWith('<<<<<<< SEARCH'));
    blocosGlobaisSurgicos = surgicos;
    blocosGlobaisFull = tradicionalsFiltrados;
    const totalEdits = surgicos.length + tradicionalsFiltrados.length;
    let html = '';
    if (totalEdits > 0) {
        const arqs = new Set(); surgicos.forEach(b => { if (b.arquivo) arqs.add(b.arquivo); }); tradicionalsFiltrados.forEach(b => { if (b.arquivo) arqs.add(b.arquivo); });
        html += '<div class="surgical-summary"><div class="surgical-summary-left"><span class="material-symbols-rounded">' + (surgicos.length > 0 ? 'electric_bolt' : 'description') + '</span><span>' + (surgicos.length > 0 ? 'Edição Cirúrgica' : 'Código Completo') + '</span></div><div class="surgical-summary-stats">';
        if (arqs.size > 0) html += '<span class="surgical-summary-stat files">' + arqs.size + ' arquivo(s)</span>';
        if (surgicos.length > 0) html += '<span class="surgical-summary-stat edits">⚡ ' + surgicos.length + ' edição(ões)</span>';
        if (tradicionalsFiltrados.length > 0) html += '<span class="surgical-summary-stat full">📄 ' + tradicionalsFiltrados.length + ' completo(s)</span>';
        html += '</div></div>';
    }
    let textoLimpo = texto;
    let si = 0;
    textoLimpo = textoLimpo.replace(/```[^\n]*\n<<<<<<< SEARCH[\s\S]*?>>>>>>> REPLACE\n```/g, () => '{{SURGICAL_BLOCK_' + (si++) + '}}');
    si = Math.min(si, surgicos.length);
    textoLimpo = textoLimpo.replace(/<<<<<<< SEARCH[\s\S]*?>>>>>>> REPLACE/g, () => { const ci = surgicos.findIndex((b, idx) => idx >= si); if (ci === -1) return ''; si = ci + 1; return '{{SURGICAL_BLOCK_' + ci + '}}'; });
    let fi = 0;
    textoLimpo = textoLimpo.replace(/```(\w*)\n([\s\S]*?)```/g, (m, l, c) => { if (c.trim().startsWith('<<<<<<< SEARCH')) return ''; if (fi < tradicionalsFiltrados.length) return '{{FULL_BLOCK_' + (fi++) + '}}'; return m; });
    let formatado = textoLimpo.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
    for (let i = 0; i < surgicos.length; i++) { const b = surgicos[i], a = b.arquivo ? encontrarArquivoPorNome(b.arquivo) : null; formatado = formatado.replace('{{SURGICAL_BLOCK_' + i + '}}', renderizarBlocoSurgico(i, b, a ? a.caminho : (b.arquivo || 'Editor'))); }
    for (let i = 0; i < tradicionalsFiltrados.length; i++) { const b = tradicionalsFiltrados[i], a = b.arquivo ? encontrarArquivoPorNome(b.arquivo) : null; formatado = formatado.replace('{{FULL_BLOCK_' + i + '}}', renderizarBlocoFull(i, b, a ? a.nome : (b.arquivo || 'Editor'))); }
    formatado = formatado.replace(/`([^`]+)`/g, '<code>$1</code>').replace(/^### (.+)$/gm, '<h3>$1</h3>').replace(/^## (.+)$/gm, '<h2>$1</h2>').replace(/^# (.+)$/gm, '<h1>$1</h1>').replace(/\*\*([^*]+)\*\*/g, '<strong>$1</strong>').replace(/\*([^*]+)\*/g, '<em>$1</em>').replace(/^- (.+)$/gm, '• $1').replace(/^(\d+)\. (.+)$/gm, '$1. $2');
    content.innerHTML = html + formatado;
    content.scrollTop = 0;
    content.style.opacity = '0';
    content.style.transition = 'opacity 0.3s ease';
    setTimeout(() => content.style.opacity = '1', 50);
    if (surgicos.length > 0) mostrarToast(surgicos.length + ' edição(ões) cirúrgica(s) prontas! Clique "Aplicar" ou "Aplicar Tudo".', 'success');
    else if (tradicionalsFiltrados.length > 0) mostrarToast(tradicionalsFiltrados.length + ' bloco(s) de código prontos.', 'success');
    trocarAba('ultima');
}

function renderizarBlocoSurgico(index, bloco, nomeArquivo) {
    return '<div class="surgical-block" id="surgical-block-' + index + '"><div class="surgical-header"><div class="surgical-file-badge"><span class="material-symbols-rounded" style="font-size:13px">description</span> ' + escapeHtmlBasic(nomeArquivo) + '</div><span class="surgical-mode-badge surgical">⚡ Cirúrgico</span><div class="surgical-actions"><button class="code-copy-btn" onclick="copiarBlocoSurgico(' + index + ')" title="Copiar"><span class="material-symbols-rounded" style="font-size:13px">content_copy</span></button><button class="code-apply-btn" onclick="aplicarBlocoSurgico(' + index + ')"><span class="material-symbols-rounded" style="font-size:13px">play_arrow</span> Aplicar</button></div></div><div class="surgical-diff"><div class="surgical-section"><div class="surgical-label search"><span class="material-symbols-rounded" style="font-size:13px">remove_circle</span> Buscar (será substituído)</div><div class="surgical-code search-code">' + escapeHtmlBasic(bloco.search) + '</div></div><div class="surgical-section"><div class="surgical-label replace"><span class="material-symbols-rounded" style="font-size:13px">add_circle</span> Substituir por</div><div class="surgical-code replace-code">' + escapeHtmlBasic(bloco.replace) + '</div></div></div><div class="surgical-status info"><span class="material-symbols-rounded" style="font-size:13px">schedule</span> Aguardando aplicação</div></div>';
}

function renderizarBlocoFull(index, bloco, nomeArquivo) {
    return '<div class="surgical-block" id="full-block-' + index + '"><div class="surgical-header"><div class="surgical-file-badge"><span class="material-symbols-rounded" style="font-size:13px">description</span> ' + escapeHtmlBasic(nomeArquivo) + '</div><span class="surgical-mode-badge full">📄 Completo (' + bloco.codigo.split('\n').length + ' linhas)</span><div class="surgical-actions"><button class="code-copy-btn" onclick="copiarBlocoFull(' + index + ')"><span class="material-symbols-rounded" style="font-size:13px">content_copy</span></button><button class="code-apply-btn" onclick="aplicarBlocoFull(' + index + ')" id="full-apply-btn-' + index + '"><span class="material-symbols-rounded" style="font-size:13px">play_arrow</span> Aplicar</button></div></div><pre style="margin:0;border:none;border-radius:0;max-height:300px;overflow:auto"><code>' + escapeHtmlBasic(bloco.codigo) + '</code></pre></div>';
}

function copiarBlocoSurgico(i) { const b = blocosGlobaisSurgicos[i]; if (b) navigator.clipboard.writeText(b.replace).then(() => mostrarToast('Código copiado!', 'success')); }
function copiarBlocoFull(i) { const b = blocosGlobaisFull[i]; if (b) navigator.clipboard.writeText(b.codigo).then(() => mostrarToast('Código copiado!', 'success')); }

// =============================================
// APPLY ALL
// =============================================
function aplicarTodasCorrecoes() {
    if (!ultimaRespostaTexto) { mostrarToast('Nenhuma resposta para aplicar.', 'info'); return; }
    let as = 0, af = 0, er = 0;
    const edicoesPorArquivo = {};
    blocosGlobaisSurgicos.forEach((b, i) => { const n = b.arquivo || '__editor__'; if (!edicoesPorArquivo[n]) edicoesPorArquivo[n] = []; edicoesPorArquivo[n].push({ bloco: b, index: i }); });
    for (const [an, eds] of Object.entries(edicoesPorArquivo)) {
        let arq = an !== '__editor__' ? encontrarArquivoPorNome(an) : null, ca, aid;
        if (arq) { ca = arq.conteudo; aid = arq.id; } else if (editor) { ca = editor.getValue(); aid = projetoAtual.arquivoAberto || '__editor__'; } else { er += eds.length; continue; }
        salvarEstadoParaUndo(aid, ca);
        let cm = ca;
        for (const { bloco: b, index: i } of eds) {
            const r = aplicarEdicaoSurgicaNoConteudo(cm, b.search, b.replace);
            if (r.sucesso) { cm = r.conteudo; as++; const el = document.getElementById('surgical-block-' + i); if (el) { el.classList.add('applied'); const btn = el.querySelector('.code-apply-btn'); if (btn) { btn.innerHTML = '<span class="material-symbols-rounded" style="font-size:13px">check_circle</span>'; btn.classList.add('applied'); btn.disabled = true; } const s = el.querySelector('.surgical-status'); if (s) { s.className = 'surgical-status success'; s.innerHTML = '<span class="material-symbols-rounded" style="font-size:13px">check_circle</span> Aplicado (' + r.metodo + ')'; } } }
            else { er++; const el = document.getElementById('surgical-block-' + i); if (el) { el.classList.add('error'); const s = el.querySelector('.surgical-status'); if (s) { s.className = 'surgical-status error'; s.innerHTML = '<span class="material-symbols-rounded" style="font-size:13px">error</span> ' + r.erro; } } }
        }
        if (arq) { arq.conteudo = cm; projetoAtual.arquivosModificados.add(arq.id); if (projetoAtual.arquivoAberto === arq.id && editor) editor.setValue(cm); } else if (editor) { editor.setValue(cm); marcarArquivoModificado(); }
    }
    blocosGlobaisFull.forEach((b, i) => {
        if (b.arquivo) { const a = encontrarArquivoPorNome(b.arquivo); if (a) { salvarEstadoParaUndo(a.id, a.conteudo); a.conteudo = b.codigo; projetoAtual.arquivosModificados.add(a.id); if (projetoAtual.arquivoAberto === a.id && editor) editor.setValue(b.codigo); const btn = document.getElementById('full-apply-btn-' + i); if (btn) { btn.innerHTML = '<span class="material-symbols-rounded" style="font-size:13px">check_circle</span>'; btn.classList.add('applied'); } af++; return; } }
        if (blocosGlobaisFull.length === 1 && blocosGlobaisSurgicos.length === 0 && editor) { const p = editor.getValue(), id = projetoAtual.arquivoAberto || '__editor__'; salvarEstadoParaUndo(id, p); editor.setValue(b.codigo); marcarArquivoModificado(); const btn = document.getElementById('full-apply-btn-' + i); if (btn) { btn.innerHTML = '<span class="material-symbols-rounded" style="font-size:13px">check_circle</span>'; btn.classList.add('applied'); } af++; }
    });
    renderizarArvoreArquivos(); atualizarStatusBar(); atualizarUIModificados(); atualizarBotoesUndo();
    const total = as + af; if (total > 0) { let m = ''; if (as > 0) m += as + ' cirúrgica(s)'; if (af > 0) m += (as > 0 ? ' + ' : '') + af + ' completo(s)'; m += ' aplicado(s)!'; if (er > 0) m += ' ' + er + ' erro(s).'; mostrarToast(m, er > 0 ? 'info' : 'success'); } else if (er > 0) mostrarToast(er + ' edição(ões) com erro.', 'error'); else mostrarToast('Nenhum bloco para aplicar.', 'info');
}

// =============================================
// UI FUNCTIONS
// =============================================
function mostrarLoader(show) {
    const l = document.getElementById('loader'), c = document.getElementById('response-content');
    if (show) { l.classList.add('active'); c.style.display = 'none'; } else { l.classList.remove('active'); c.style.display = ''; }
    document.querySelectorAll('.btn,.btn-send').forEach(b => { b.disabled = show; if (b.tagName === 'A') { b.style.pointerEvents = show ? 'none' : ''; b.style.opacity = show ? '0.4' : ''; } });
}

function exibirErro(m) {
    const c = document.getElementById('response-content');
    c.classList.remove('empty');
    c.style.display = 'block';
    c.innerHTML = '<div class="message message-error"><span class="material-symbols-rounded" style="font-size:16px">warning</span><span>' + m + '</span></div>';
}

async function copiarResposta() { try { await navigator.clipboard.writeText(document.getElementById('response-content').innerText); mostrarToast('Resposta copiada!', 'success'); } catch (e) {} }

function marcarArquivoModificado() {
    if (projetoAtual.arquivoAberto && editor) { const a = projetoAtual.arquivos.find(x => x.id === projetoAtual.arquivoAberto); if (a) { const c = editor.getValue(); if (c !== a.conteudoOriginal) { projetoAtual.arquivosModificados.add(a.id); a.conteudo = c; } else { projetoAtual.arquivosModificados.delete(a.id); a.conteudo = c; } atualizarUIModificados(); } }
}

function atualizarUIModificados() {
    const btn = document.getElementById('btn-salvar-arquivo');
    document.getElementById('status-modified').textContent = 'Modificados: ' + projetoAtual.arquivosModificados.size;
    if (projetoAtual.arquivoAberto && projetoAtual.arquivosModificados.has(projetoAtual.arquivoAberto)) { btn.classList.add('modified'); btn.innerHTML = '<span class="material-symbols-rounded" style="font-size:14px">save</span> Salvar*'; } else { btn.classList.remove('modified'); btn.innerHTML = '<span class="material-symbols-rounded" style="font-size:14px">save</span> Salvar'; }
    const cf = document.getElementById('current-file');
    if (projetoAtual.arquivoAberto) { const a = projetoAtual.arquivos.find(x => x.id === projetoAtual.arquivoAberto); if (a) { const m = projetoAtual.arquivosModificados.has(a.id); cf.textContent = a.caminho + (m ? ' ●' : ''); cf.style.color = m ? 'var(--accent-orange)' : 'var(--accent-yellow)'; } }
}

function verificarSuporteFileSystem() {
    const o = document.getElementById('opt-salvar-original');
    if (!('showDirectoryPicker' in window)) { o.classList.add('disabled'); o.querySelector('.save-option-desc').textContent = 'Não suportado neste navegador. Use Chrome ou Edge.'; o.onclick = null; }
}

function abrirModalSalvar() { document.getElementById('modal-salvar').classList.add('active'); }
function fecharModal(id) { document.getElementById(id).classList.remove('active'); }

function salvarArquivoAtual() {
    if (!projetoAtual.arquivoAberto || !editor) { mostrarToast('Nenhum arquivo aberto. Use "Baixar".', 'info'); return; }
    const a = projetoAtual.arquivos.find(x => x.id === projetoAtual.arquivoAberto); if (a) { a.conteudo = editor.getValue(); a.conteudoOriginal = a.conteudo; projetoAtual.arquivosModificados.delete(a.id); atualizarUIModificados(); renderizarArvoreArquivos(); mostrarToast('"' + a.nome + '" salvo na memória!', 'success'); }
}

function baixarArquivoAtual() {
    let c, n;
    if (projetoAtual.arquivoAberto) { const a = projetoAtual.arquivos.find(x => x.id === projetoAtual.arquivoAberto); c = editor ? editor.getValue() : a.conteudo; n = a ? a.nome : 'codigo.txt'; } else if (editor) { c = editor.getValue(); n = 'codigo.txt'; } else { mostrarToast('Nada para baixar.', 'error'); return; }
    const b = new Blob([c], { type: 'text/plain' }), u = URL.createObjectURL(b), a = document.createElement('a'); a.href = u; a.download = n; a.click(); URL.revokeObjectURL(u); mostrarToast('"' + n + '" baixado!', 'success');
}

async function baixarModificadosZip() {
    if (projetoAtual.arquivosModificados.size === 0) { mostrarToast('Nenhum arquivo modificado.', 'info'); return; }
    salvarConteudoEditorNoArquivoAtual();
    const z = new JSZip(); projetoAtual.arquivosModificados.forEach(id => { const a = projetoAtual.arquivos.find(x => x.id === id); if (a) z.file(a.caminho, a.conteudo); });
    const b = await z.generateAsync({ type: 'blob' }), u = URL.createObjectURL(b), a = document.createElement('a'); a.href = u; a.download = (projetoAtual.nome || 'projeto') + '_modificados.zip'; a.click(); URL.revokeObjectURL(u); mostrarToast(projetoAtual.arquivosModificados.size + ' arquivo(s) baixados!', 'success'); fecharModal('modal-salvar');
}

async function baixarProjetoZip() {
    if (projetoAtual.arquivos.length === 0) { baixarArquivoAtual(); return; }
    salvarConteudoEditorNoArquivoAtual();
    const z = new JSZip(); projetoAtual.arquivos.forEach(a => z.file(a.caminho, a.conteudo));
    const b = await z.generateAsync({ type: 'blob' }), u = URL.createObjectURL(b), a = document.createElement('a'); a.href = u; a.download = (projetoAtual.nome || 'projeto') + '_completo.zip'; a.click(); URL.revokeObjectURL(u); mostrarToast('Projeto exportado!', 'success'); fecharModal('modal-salvar');
}

async function salvarNaPastaOriginal() {
    if (!('showDirectoryPicker' in window)) { mostrarToast('Use Chrome ou Edge.', 'error'); return; }
    if (projetoAtual.arquivosModificados.size === 0) { mostrarToast('Nada para salvar.', 'info'); return; }
    try {
        const d = await window.showDirectoryPicker({ mode: 'readwrite' }); let s = 0, e = 0;
        for (const id of projetoAtual.arquivosModificados) {
            const a = projetoAtual.arquivos.find(x => x.id === id);
            if (a) try { const p = a.caminho.split('/'); let h = d; const st = p.length > 1 ? 1 : 0; for (let i = st; i < p.length - 1; i++) h = await h.getDirectoryHandle(p[i], { create: true }); const fh = await h.getFileHandle(p[p.length - 1], { create: true }); const w = await fh.createWritable(); await w.write(a.conteudo); await w.close(); a.conteudoOriginal = a.conteudo; s++; } catch (er) { e++; }
        }
        if (e === 0) projetoAtual.arquivosModificados.clear();
        atualizarUIModificados(); renderizarArvoreArquivos(); atualizarStatusBar();
        if (s > 0) mostrarToast(s + ' arquivo(s) salvo(s)!', 'success');
        if (e > 0) mostrarToast(e + ' erro(s) ao salvar.', 'error');
        fecharModal('modal-salvar');
    } catch (err) { if (err.name !== 'AbortError') mostrarToast('Erro: ' + err.message, 'error'); }
}

// =============================================
// TOAST
// =============================================
function mostrarToast(mensagem, tipo) {
    tipo = tipo || 'info';
    const container = document.getElementById('toast-container'), toast = document.createElement('div');
    toast.className = 'toast ' + tipo;
    toast.innerHTML = '<span class="toast-message">' + mensagem + '</span><button class="toast-close" onclick="this.parentElement.remove()"><span class="material-symbols-rounded" style="font-size:16px">close</span></button>';
    container.appendChild(toast);
    setTimeout(() => { if (toast.parentElement) toast.remove(); }, 5000);
}

// =============================================
// API KEY SECURITY
// =============================================
function toggleApiKeyVisibility() {
    const input = document.getElementById('api-key');
    const icon = document.getElementById('api-key-icon');
    if (input.type === 'password') { input.type = 'text'; icon.textContent = 'visibility'; }
    else { input.type = 'password'; icon.textContent = 'visibility_off'; }
}

function clearApiKey() {
    if (confirm('Tem certeza que deseja limpar a chave API salva para ' + getProvider().name + '?')) {
        localStorage.removeItem(getProvider().storageKey);
        // Also clean legacy keys
        localStorage.removeItem('aicode_api_key');
        localStorage.removeItem('braga_dev_api_key');
        document.getElementById('api-key').value = '';
        mostrarToast('Chave API removida do navegador.', 'success');
    }
}

function mostrarAvisoSeguranca() {
    const naomostrar = localStorage.getItem('aicode_security_accepted');
    if (!naomostrar) { document.getElementById('modal-security').classList.add('active'); }
}

function aceitarSeguranca() {
    const naoMostrar = document.getElementById('dont-show-security').checked;
    if (naoMostrar) { localStorage.setItem('aicode_security_accepted', 'true'); }
    fecharModal('modal-security');
}

// =============================================
// INIT
// =============================================
document.addEventListener('DOMContentLoaded', () => {
    // Load saved provider
    const savedProvider = localStorage.getItem('aicode_provider');
    if (savedProvider && PROVIDERS[savedProvider]) {
        currentProvider = savedProvider;
        document.getElementById('api-provider').value = currentProvider;
    }

    // Update UI for current provider
    const provider = getProvider();
    const badge = document.getElementById('provider-badge');
    badge.textContent = provider.shortName;
    badge.className = 'provider-badge ' + provider.badgeClass;
    document.getElementById('api-key').placeholder = provider.placeholder;
    document.getElementById('status-provider-info').textContent = provider.statusText;

    // Load API key - try provider-specific first, then legacy
    let k = localStorage.getItem(provider.storageKey);
    if (!k) {
        k = localStorage.getItem('aicode_api_key') || localStorage.getItem('braga_dev_api_key');
        // Migrate legacy key if it matches current provider
        if (k && currentProvider === 'anthropic') {
            localStorage.setItem(provider.storageKey, k);
        }
    }
    if (k) document.getElementById('api-key').value = k;

    // Save API key on change
    document.getElementById('api-key').addEventListener('change', e => {
        const val = e.target.value.trim();
        if (val) {
            localStorage.setItem(getProvider().storageKey, val);
        }
    });

    // Show security notice on first focus
    document.getElementById('api-key').addEventListener('focus', () => {
        if (!document.getElementById('api-key').value) { mostrarAvisoSeguranca(); }
    });

    verificarSuporteFileSystem();
});
</script>

    <script>
      // PWA Service Worker Registration & Anti-Cache
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('sw.js').catch(err => console.log('SW reg error:', err));
        });
      }
    </script>
</body></html>

