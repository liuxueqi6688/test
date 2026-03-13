<?php $pageTitle = '配置说明 - OpenClaw'; ?>
<?php include 'header.php'; ?>
<section class="page-header"><div class="container"><h1>配置说明</h1><p>了解如何配置OpenClaw</p></div></section>
<section class="content"><div class="container">
<h2>配置文件</h2><p>配置文件位于 <code>~/.openclaw/config.json</code></p>
<div class="code-block"><pre><code>{
  "llm": { "provider": "openai", "model": "gpt-4" },
  "plugins": ["weather", "search"],
  "channels": { "telegram": { "enabled": true } }
}</code></pre></div>
<h2>环境变量</h2><ul><li><code>OPENAI_API_KEY</code> - OpenAI API密钥</li><li><code>ANTHROPIC_API_KEY</code> - Anthropic密钥</li></ul>
</div></section>
<?php include 'footer.php'; ?>
