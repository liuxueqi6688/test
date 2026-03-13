<?php $pageTitle = '功能介绍 - OpenClaw'; ?>
<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>功能介绍</h1>
        <p>探索 OpenClaw 的强大功能</p>
    </div>
</section>

<section class="content">
    <div class="container">
        <div class="feature-detail">
            <h2>🤖 智能对话</h2>
            <p>内置强大的自然语言处理能力，支持多轮对话、上下文理解和意图识别。与各种 LLM 提供商无缝集成，包括 OpenAI、Anthropic、Google 等。</p>
        </div>

        <div class="feature-detail">
            <h2>🔌 插件系统</h2>
            <p>灵活的插件架构让你可以轻松扩展功能。只需几行代码就能创建自定义技能，支持 JavaScript/TypeScript 编写插件。</p>
        </div>

        <div class="feature-detail">
            <h2>🌐 多平台支持</h2>
            <p>开箱即支持多种通讯平台：</p>
            <ul>
                <li>Telegram</li>
                <li>Discord</li>
                <li>Slack</li>
                <li>WhatsApp</li>
                <li>Webhooks</li>
            </ul>
        </div>

        <div class="feature-detail">
            <h2>💾 持久化存储</h2>
            <p>内置 SQLite 数据库支持，自动保存对话历史、用户偏好和配置。支持自定义存储后端。</p>
        </div>

        <div class="feature-detail">
            <h2>🛡️ 安全可靠</h2>
            <p>企业级安全特性：</p>
            <ul>
                <li>端到端加密</li>
                <li>完善的权限控制</li>
                <li>输入过滤和验证</li>
                <li>审计日志</li>
            </ul>
        </div>

        <div class="feature-detail">
            <h2>📊 可视化面板</h2>
            <p>内置 Web 管理界面，方便监控助手状态、管理用户、查看统计信息。</p>
        </div>

        <div class="feature-detail">
            <h2>⚡ 高性能</h2>
            <p>基于 Node.js 构建，支持高并发，内存占用低。支持集群部署，满足大规模应用需求。</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>