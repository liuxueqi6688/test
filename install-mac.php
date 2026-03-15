<?php $pageTitle = 'Mac 安装指南 - OpenClaw'; ?>
<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>🍎 Mac 安装指南</h1>
        <p>在 macOS 上快速安装 OpenClaw</p>
    </div>
</section>

<section class="content">
    <div class="container">
        <div class="info-box">
            <h4>📋 系统要求</h4>
            <p>macOS 10.15 (Catalina) 或更高版本</p>
        </div>

        <h2>🚀 推荐方式：使用 Homebrew</h2>
        <p>最简单的方式是通过 Homebrew 安装：</p>
        
        <div class="terminal">
            <div class="terminal-header">
                <span class="terminal-dot red"></span>
                <span class="terminal-dot yellow"></span>
                <span class="terminal-dot green"></span>
                <span class="terminal-title">终端</span>
            </div>
            <div class="terminal-body">
                <div class="code-block">
                    <pre><code># 安装 Homebrew（如果没有）
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

# 安装 OpenClaw
brew install openclaw/openclaw/openclaw

# 验证安装
openclaw --version</code></pre>
                </div>
            </div>
        </div>

        <h2>📦 使用 npm 安装</h2>
        <p>如果你更喜欢使用 Node.js 包管理器：</p>
        
        <div class="terminal">
            <div class="terminal-header">
                <span class="terminal-dot red"></span>
                <span class="terminal-dot yellow"></span>
                <span class="terminal-dot green"></span>
                <span class="terminal-title">终端</span>
            </div>
            <div class="terminal-body">
                <div class="code-block">
                    <pre><code># 确保已安装 Node.js 18+
node --version

# 全局安装 OpenClaw
sudo npm install -g openclaw

# 验证安装
openclaw --version</code></pre>
                </div>
            </div>
        </div>

        <h2>🐳 使用 Docker（推荐）</h2>
        <p>Docker 提供隔离环境，推荐高级用户使用：</p>
        
        <div class="terminal">
            <div class="terminal-header">
                <span class="terminal-dot red"></span>
                <span class="terminal-dot yellow"></span>
                <span class="terminal-dot green"></span>
                <span class="terminal-title">终端</span>
            </div>
            <div class="terminal-body">
                <div class="code-block">
                    <pre><code># 安装 Docker Desktop（如果没有）
# 下载地址：https://www.docker.com/products/docker-desktop

# 拉取镜像
docker pull openclaw/openclaw:latest

# 运行容器
docker run -d -p 3000:3000 \
  -v ~/.openclaw:/root/.openclaw \
  --name openclaw \
  openclaw/openclaw:latest</code></pre>
                </div>
            </div>
        </div>

        <h2>⚙️ 配置环境</h2>
        <p>安装完成后，配置你的 API 密钥：</p>
        
        <div class="terminal">
            <div class="terminal-header">
                <span class="terminal-dot red"></span>
                <span class="terminal-dot yellow"></span>
                <span class="terminal-dot green"></span>
                <span class="terminal-title">终端</span>
            </div>
            <div class="terminal-body">
                <div class="code-block">
                    <pre><code># 设置 OpenAI API Key
openclaw config set OPENAI_API_KEY your-api-key-here

# 或者设置 Anthropic API Key
openclaw config set ANTHROPIC_API_KEY your-api-key-here</code></pre>
                </div>
            </div>
        </div>

        <h2>🚀 启动 OpenClaw</h2>
        
        <div class="terminal">
            <div class="terminal-header">
                <span class="terminal-dot red"></span>
                <span class="terminal-dot yellow"></span>
                <span class="terminal-dot green"></span>
                <span class="terminal-title">终端</span>
            </div>
            <div class="terminal-body">
                <div class="code-block">
                    <pre><code># 初始化新项目
openclaw init my-assistant

# 进入项目目录
cd my-assistant

# 启动 OpenClaw
openclaw start</code></pre>
                </div>
            </div>
        </div>

        <div class="info-box success">
            <h4>✅ 安装完成！</h4>
            <p>OpenClaw 已在后台运行，访问 http://localhost:3000 开始配置你的 AI 助手。</p>
        </div>

        <h2>🔧 常见问题</h2>
        
        <div class="feature-detail">
            <h3>❓ 权限错误</h3>
            <p>如果遇到权限问题，使用 <code>sudo</code> 或者修复 npm 目录权限：</p>
            <div class="code-block">
                <pre><code>sudo chown -R $(whoami) ~/.npm</code></pre>
            </div>
        </div>

        <div class="feature-detail">
            <h3>❓ Node.js 版本问题</h3>
            <p>使用 nvm 管理 Node.js 版本：</p>
            <div class="code-block">
                <pre><code># 安装 nvm
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash

# 使用 nvm 安装 Node.js 18
nvm install 18
nvm use 18</code></pre>
            </div>
        </div>

        <div class="feature-detail">
            <h3>❓ 端口被占用</h3>
            <p>如果 3000 端口被占用，可以指定其他端口：</p>
            <div class="code-block">
                <pre><code>openclaw start --port 8080</code></pre>
            </div>
        </div>

        <div style="margin-top: 40px; text-align: center;">
            <a href="getting-started.php" class="btn btn-primary">下一步：快速开始 →</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>