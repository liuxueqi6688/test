<?php $pageTitle = '安装指南 - OpenClaw'; ?>
<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>安装指南</h1>
        <p>在几分钟内开始使用 OpenClaw</p>
    </div>
</section>

<section class="content">
    <div class="container">
        <h2>系统要求</h2>
        <ul>
            <li>Node.js 18.0 或更高版本</li>
            <li>npm 或 yarn 包管理器</li>
            <li>支持的操作系统：Linux、macOS、Windows</li>
        </ul>

        <h2>快速安装</h2>
        <div class="code-block">
            <pre><code># 使用 npm 全局安装
npm install -g openclaw

# 初始化项目
openclaw init my-assistant

# 进入项目目录
cd my-assistant

# 启动 OpenClaw
openclaw start</code></pre>
        </div>

        <h2>Docker 安装（推荐）</h2>
        <div class="code-block">
            <pre><code># 拉取镜像
docker pull openclaw/openclaw:latest

# 运行容器
docker run -d -p 3000:3000 -v ~/.openclaw:/root/.openclaw openclaw/openclaw:latest</code></pre>
        </div>

        <h2>从源码安装</h2>
        <div class="code-block">
            <pre><code># 克隆仓库
git clone https://github.com/openclaw/openclaw.git
cd openclaw

# 安装依赖
npm install

# 构建项目
npm run build

# 启动
npm start</code></pre>
        </div>

        <h2>验证安装</h2>
        <p>安装完成后，运行以下命令验证：</p>
        <div class="code-block">
            <pre><code>openclaw --version</code></pre>
        </div>
        <p>如果看到版本号，说明安装成功！</p>
    </div>
</section>

<?php include 'footer.php'; ?>