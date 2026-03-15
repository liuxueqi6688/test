<?php $pageTitle = 'openclaw.json 配置详解 - OpenClaw'; ?>
<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>openclaw.json 配置详解</h1>
        <p>完整介绍 OpenClaw 配置文件的每一个参数</p>
    </div>
</section>

<section class="content">
    <div class="container">
        <!-- 简介 -->
        <div class="section-card">
            <h2>📋 openclaw.json 简介</h2>
            <p><code>openclaw.json</code> 是 OpenClaw 的核心配置文件，用于定义 AI 助手的所有行为和功能。</p>
            
            <div class="info-box">
                <h4>配置文件位置</h4>
                <p>配置文件位于 <code>~/.openclaw/openclaw.json</code></p>
            </div>
            
            <div class="info-box">
                <h4>配置文件作用</h4>
                <ul>
                    <li>定义助手的基本信息（名称、描述）</li>
                    <li>配置支持的通信渠道（Telegram、Discord 等）</li>
                    <li>注册自定义命令</li>
                    <li>加载技能（Skills）</li>
                    <li>配置定时任务和心跳检测</li>
                    <li>管理记忆和上下文</li>
                </ul>
            </div>
        </div>

        <!-- 参数列表 -->
        <h2 class="section-title">📦 完整参数列表</h2>

        <!-- name 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">name</h3>
                <span class="param-type">string</span>
                <span class="param-required">必需</span>
            </div>
            <div class="param-content">
                <p class="param-description">助手的名称，用于识别和显示。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">无</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <code>"OpenClaw Assistant"</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- description 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">description</h3>
                <span class="param-type">string</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">助手的描述信息，用于向用户介绍助手的功能和用途。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">""</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <code>"一个开源的 AI 助手框架"</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- channels 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">channels</h3>
                <span class="param-type">object</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">配置支持的通信渠道。每个渠道可以独立启用/禁用并设置特定参数。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">{}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <pre><code>{
  "telegram": {
    "enabled": true,
    "bot_token": "xxx"
  },
  "discord": {
    "enabled": false
  }
}</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- commands 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">commands</h3>
                <span class="param-type">object</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">注册自定义命令。每个命令包含名称、描述和处理程序。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">{}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <pre><code>{
  "hello": {
    "description": "打招呼",
    "handler": "./commands/hello.js"
  },
  "weather": {
    "description": "查询天气",
    "handler": "./commands/weather.js",
    "args": ["city"]
  }
}</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- skills 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">skills</h3>
                <span class="param-type">array</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">加载的技能列表。每个技能可以是一个对象或字符串（技能名称）。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">[]</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <pre><code>[
  "weather",
  {
    "name": "search",
    "enabled": true,
    "config": {
      "api_key": "xxx"
    }
  }
]</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- memory 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">memory</h3>
                <span class="param-type">object</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">配置记忆存储功能。包括对话历史、长期记忆和向量存储等。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">{"enabled": true}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <pre><code>{
  "enabled": true,
  "type": "file",
  "path": "~/.openclaw/memory",
  "max_history": 1000,
  "vector_store": {
    "enabled": true,
    "provider": "local"
  }
}</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- heartbeat 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">heartbeat</h3>
                <span class="param-type">object</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">配置心跳检测功能，用于定期执行任务和健康检查。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">{"enabled": true, "interval": 300000}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <pre><code>{
  "enabled": true,
  "interval": 300000,
  "tasks": [
    {
      "name": "check_emails",
      "schedule": "*/5 * * * *"
    }
  ]
}</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- cron 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">cron</h3>
                <span class="param-type">array</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">配置定时任务。使用 cron 表达式定义任务的执行时间。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">[]</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <pre><code>[
  {
    "name": "daily_summary",
    "schedule": "0 9 * * *",
    "handler": "./cron/daily-summary.js"
  },
  {
    "name": "weekly_report",
    "schedule": "0 10 * * 1",
    "handler": "./cron/weekly-report.js"
  }
]</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- llm 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">llm</h3>
                <span class="param-type">object</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">配置大语言模型提供者。可以设置提供商、模型、温度等参数。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">{"provider": "openai", "model": "gpt-4"}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <pre><code>{
  "provider": "openai",
  "model": "gpt-4",
  "temperature": 0.7,
  "max_tokens": 2000,
  "api_key": "${OPENAI_API_KEY}"
}</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- plugins 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">plugins</h3>
                <span class="param-type">array</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">启用的插件列表。插件扩展了助手的功能。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">[]</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <code>["weather", "search", "tts"]</code>
                    </div>
                </div>
            </div>
        </div>

        <!-- logging 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">logging</h3>
                <span class="param-type">object</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">配置日志记录。包括日志级别、输出位置等。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">{"level": "info"}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <pre><code>{
  "level": "debug",
  "file": "~/.openclaw/logs/app.log",
  "max_size": "10MB",
  "max_files": 5
}</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- security 参数 -->
        <div class="param-card">
            <div class="param-header">
                <h3 class="param-name">security</h3>
                <span class="param-type">object</span>
                <span class="param-required">可选</span>
            </div>
            <div class="param-content">
                <p class="param-description">安全相关配置，包括认证、授权、速率限制等。</p>
                <div class="param-details">
                    <div class="detail-item">
                        <span class="detail-label">默认值:</span>
                        <span class="detail-value">{"rate_limit": {"enabled": true}}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">示例:</span>
                        <pre><code>{
  "rate_limit": {
    "enabled": true,
    "requests_per_minute": 60
  },
  "allowed_users": ["user1", "user2"]
}</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- 完整示例 -->
        <h2 class="section-title">📝 完整配置示例</h2>
        <div class="section-card">
            <p>以下是 <code>openclaw.json</code> 的完整配置示例：</p>
            <div class="code-block">
                <pre><code>{
  "name": "OpenClaw Assistant",
  "description": "一个功能强大的开源 AI 助手框架",
  "llm": {
    "provider": "openai",
    "model": "gpt-4",
    "temperature": 0.7
  },
  "channels": {
    "telegram": {
      "enabled": true,
      "bot_token": "${TELEGRAM_BOT_TOKEN}"
    },
    "discord": {
      "enabled": false
    }
  },
  "commands": {
    "help": {
      "description": "显示帮助信息",
      "handler": "./commands/help.js"
    },
    "weather": {
      "description": "查询天气",
      "handler": "./commands/weather.js"
    }
  },
  "skills": ["weather", "search", "tts"],
  "memory": {
    "enabled": true,
    "type": "file",
    "path": "~/.openclaw/memory"
  },
  "heartbeat": {
    "enabled": true,
    "interval": 300000
  },
  "cron": [
    {
      "name": "daily_summary",
      "schedule": "0 9 * * *",
      "handler": "./cron/daily-summary.js"
    }
  ],
  "plugins": ["weather", "search"],
  "logging": {
    "level": "info",
    "file": "~/.openclaw/logs/app.log"
  },
  "security": {
    "rate_limit": {
      "enabled": true,
      "requests_per_minute": 60
    }
  }
}</code></pre>
            </div>
        </div>

        <!-- 相关链接 -->
        <div class="section-card">
            <h3>🔗 相关链接</h3>
            <ul>
                <li><a href="getting-started.php">快速开始</a> - 了解如何快速搭建</li>
                <li><a href="skills.php">技能市场</a> - 浏览可用技能</li>
                <li><a href="https://github.com/openclaw" target="_blank">GitHub</a> - 查看源码</li>
            </ul>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>