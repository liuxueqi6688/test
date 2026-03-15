<?php $pageTitle = 'Windows 安装指南 - OpenClaw'; ?>
<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>🪟 Windows 安装指南</h1>
        <p>在 Windows 上快速安装 OpenClaw</p>
    </div>
</section>

<section class="content">
    <div class="container">
        <div class="info-box">
            <h4>📋 系统要求</h4>
            <p>Windows 10/11 (64位)</p>
        </div>

        <h2>🚀 推荐方式：使用 Winget</h2>
        <p>最简单的方式是通过 Windows 包管理器安装：</p>
        
        <div class="terminal">
            <div class="terminal-header">
                <span class="terminal-dot red"></span>
                <span class="terminal-dot yellow"></span>
                <span class="terminal-dot green"></span>
                <span class="terminal-title">PowerShell / CMD</span>
            </div>
            <div class="terminal-body">
                <div class="code-block">
                    <pre><code># 使用 winget 安装（推荐）
winget install OpenClaw.OpenClaw

# 验证安装
openclaw --version</code></pre>
                </div>
            </div>
        </div>

        <h2>📦 使用 npm 安装</h2>
        <p>如果你已安装 Node.js，可以使用 npm：</p>
        
        <div class="terminal">
            <div class="terminal-header">
                <span class="terminal-dot red"></span>
                <span class="terminal-dot yellow"></span>
                <span class="terminal-dot green"></span>
                <span class="terminal-title">PowerShell</span>
            </div>
            <div class="terminal-body">
                <div class="code-block">
                    <pre><code># 检查 Node.js 版本（需要 18+）
node --version

# 全局安装 OpenClaw
npm install -g openclaw

# 验证安装
openclaw --version</code></pre>
                </div>
            </div>
        </div>

        <h2>⬇️ 手动下载安装</h2>
        <p>从 GitHub Releases 下载预编译的二进制文件：</p>
        
        <div class="feature-detail">
            <h3>下载步骤</h3>
            <ol>
                <li>访问 <a href="https://github.com/openclaw/openclaw/releases" target="_blank" style="color: var(--accent-primary);">GitHub Releases</a></li>
                <li>下载 <code>openclaw-windows-x64.zip</code></li>
                <li>解压到任意目录（如 <code>C:\Program Files\OpenClaw</code>）</li>
                <li>将解压路径添加到系统 PATH 环境变量</li>
            </ol>
        </div>

        <h2>🐳 使用 Docker（推荐）</h2>
        <p>Docker 提供隔离环境，推荐高级用户使用：</p>
        
        <div class="terminal">
            <div class="terminal-header">
                <span class="terminal-dot red"></span>
                <span class="terminal-dot yellow"></span>
                <span class="terminal-dot green"></span>
                <span class="terminal-title">PowerShell</span>
            </div>
            <div class="terminal-body">
                <div class="code-block">
                    <pre><code># 安装 Docker Desktop（如果没有）
# 下载地址：https://www.docker.com/products/docker-desktop

# 拉取镜像
docker pull openclaw/openclaw:latest

# 运行容器
docker run -d -p 3000:3000 -v %USERPROFILE%\.openclaw:C:\root\.openclaw --name openclaw openclaw/openclaw:latest</code></pre>
                </div>
            </div>
        </div>

        <h2>⚙️ 配置环境变量</h2>
        <p>安装完成后，配置你的 API 密钥：</p>
        
        <div class="terminal">
            <div class="terminal-header">
                <span class="terminal-dot red"></span>
                <span class="terminal-dot yellow"></span>
                <span class="terminal-dot green"></span>
                <span class="terminal-title">PowerShell</span>
            </div>
            <div class="terminal-body">
                <div class="code-block">
                    <pre><code># 设置 OpenAI API Key
openclaw config set OPENAI_API_KEY your-api-key-here

# 或者设置环境变量（永久生效）
[Environment]::SetEnvironmentVariable("OPENAI_API_KEY", "your-api-key-here", "User")</code></pre>
                </div>
            </div>
        </div>

        <h2>🚀 启动 OpenClaw</h2>
        
        <div class="terminal">
            <div class="terminal-header">
                <span class="terminal-dot red"></span>
                <span class="terminal-dot yellow"></span>
                <span class="terminal-dot green"></span>
                <span class="terminal-title">PowerShell</span>
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
            <h3>❓ 无法运行 .ps1 脚本</h3>
            <p>如果遇到脚本执行策略问题：</p>
            <div class="code-block">
                <pre><code>Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser</code></pre>
            </div>
        </div>

        <div class="feature-detail">
            <h3>❓ Node.js 未找到</h3>
            <p>下载并安装 Node.js 18+：</p>
            <div class="code-block">
                <pre><code># 使用 winget 安装 Node.js
winget install OpenJS.NodeJS.LTS</code></pre>
            </div>
        </div>

        <div class="feature-detail">
            <h3>❓ 端口被占用</h3>
            <p>如果 3000 端口被占用，可以指定其他端口：</p>
            <div class="code-block">
                <pre><code>openclaw start --port 8080</code></pre>
            </div>
        </div>

        <div class="feature-detail">
            <h3>❓ 中文路径问题</h3>
            <p>如果项目路径包含中文，可能出现编码问题，建议：</p>
            <ul>
                <li>将项目放在纯英文路径下</li>
                <li>或者使用 PowerShell 7+</li>
            </ul>
        </div>

        <div style="margin-top: 40px; text-align: center;">
            <a href="getting-started.php" class="btn btn-primary">下一步：快速开始 →</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>