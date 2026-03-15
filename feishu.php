<?php $pageTitle = '飞书集成 - OpenClaw'; ?>
<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>🦜 飞书集成</h1>
        <p>将 OpenClaw 连接到飞书消息平台</p>
    </div>
</section>

<section class="content">
    <div class="container">
        <div class="info-box">
            <h4>📋 简介</h4>
            <p>飞书是字节跳动推出的企业协作平台。通过本指南，你可以将 OpenClaw 连接到飞书，实现智能助手功能。</p>
        </div>

        <h2>🚀 快速开始</h2>
        
        <div class="install-steps">
            <div class="install-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3>创建飞书企业应用</h3>
                    <p>访问 <a href="https://open.feishu.cn/" target="_blank" style="color: var(--accent-primary);">飞书开放平台</a>，创建企业应用并获取 App ID 和 App Secret。</p>
                </div>
            </div>
            
            <div class="install-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>配置应用权限</h3>
                    <p>在飞书开放平台后台，进入"权限管理"，添加以下权限：</p>
                    <ul>
                        <li>im:message:readonly - 读取消息</li>
                        <li>im:message:send_as_bot - 发送消息</li>
                        <li>im:chat:readonly - 读取群聊信息</li>
                        <li>im:chat:send_as_bot - 发送群消息</li>
                    </ul>
                </div>
            </div>
            
            <div class="install-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>获取 Webhook 地址</h3>
                    <p>在应用配置页面，创建自定义机器人并获取 Webhook 地址。或者配置事件订阅获取回调地址。</p>
                </div>
            </div>
            
            <div class="install-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3>配置 OpenClaw</h3>
                    <p>在配置文件中添加飞书通道：</p>
                </div>
            </div>
        </div>

        <h2>⚙️ 配置文件</h2>
        
        <div class="code-block">
            <pre><code>{
  "channels": {
    "feishu": {
      "enabled": true,
      "app_id": "your-app-id",
      "app_secret": "your-app-secret",
      "verification_token": "your-verification-token",
      "encrypt_key": "your-encrypt-key"
    }
  }
}</code></pre>
        </div>

        <h2>🔐 环境变量</h2>
        
        <div class="code-block">
            <pre><code># 飞书配置
FEISHU_APP_ID=your-app-id
FEISHU_APP_SECRET=your-app-secret
FEISHU_VERIFICATION_TOKEN=your-verification-token
FEISHU_ENCRYPT_KEY=your-encrypt-key</code></pre>
        </div>

        <h2>📱 事件订阅配置</h2>
        <p>如果使用事件订阅方式，需要配置公网可访问的回调地址：</p>
        
        <div class="feature-detail">
            <h3>可选：使用 ngrok 本地开发</h3>
            <p>开发阶段可以使用 ngrok 将本地服务暴露到公网：</p>
            <div class="code-block">
                <pre><code># 安装 ngrok
npm install -g ngrok

# 启动端口转发
ngrok http 3000

# 将获得的 https 地址配置到飞书事件订阅</code></pre>
            </div>
        </div>

        <div class="feature-detail">
            <h3>订阅事件</h3>
            <p>在飞书开放平台配置以下事件订阅：</p>
            <ul>
                <li><code>im.message.receive_v1</code> - 接收消息事件</li>
                <li><code>im.chat.member.bot_added_v1</code> - 机器人加入群聊</li>
                <li><code>im.chat.member.bot_removed_v1</code> - 机器人移出群聊</li>
            </ul>
        </div>

        <h2>💬 使用方式</h2>
        
        <div class="platform-grid">
            <div class="platform-card">
                <div class="platform-icon">💬</div>
                <h3>私聊</h3>
                <p>用户可以直接添加机器人为好友，进行一对一对话。</p>
            </div>
            
            <div class="platform-card">
                <div class="platform-icon">👥</div>
                <h3>群聊</h3>
                <p>将机器人添加到群聊中，使用 @机器人 来触发对话。</p>
            </div>
            
            <div class="platform-card">
                <div class="platform-icon">🔗</div>
                <h3>Webhook</h3>
                <p>通过自定义机器人发送消息到群聊。</p>
            </div>
        </div>

        <h2>🔧 高级配置</h2>
        
        <div class="feature-detail">
            <h3>消息类型支持</h3>
            <p>OpenClaw 支持飞书的多种消息类型：</p>
            <ul>
                <li>文本消息 (text)</li>
                <li>富文本消息 (post)</li>
                <li>图片消息 (image)</li>
                <li>消息卡片 (interactive)</li>
            </ul>
        </div>

        <div class="feature-detail">
            <h3>自定义回复规则</h3>
            <p>可以配置只在被 @ 时回复，或者自动回复所有消息：</p>
            <div class="code-block">
            <pre><code>{
  "channels": {
    "feishu": {
      "enabled": true,
      "reply_only_mentioned": false,
      "auto_reply": true,
      "mention_patterns": ["@all", "openclaw"]
    }
  }
}</code></pre>
            </div>
        </div>

        <div class="info-box warning">
            <h4>⚠️ 安全注意</h4>
            <p>请妥善保管你的 App Secret 和 Encrypt Key，不要将其提交到公开仓库。</p>
        </div>

        <div class="info-box success">
            <h4>✅ 配置完成！</h4>
            <p>重启 OpenClaw 后，飞书机器人即可开始工作。</p>
        </div>

        <div style="margin-top: 40px; text-align: center;">
            <a href="config.php" class="btn btn-primary">查看完整配置 →</a>
            <a href="getting-started.php" class="btn btn-secondary">快速开始 →</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>