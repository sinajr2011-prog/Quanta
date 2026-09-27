<div align="center">

<img src="assets/quanta-logo.svg" alt="Quanta Logo" width="220"/>

# ⚡ Quanta 2.0.0

### A School for the Future · مدرسه در ابعاد آینده

[![Version](https://img.shields.io/badge/version-2.0.0--FINAL-blueviolet?style=for-the-badge&logo=github)](https://github.com/sinajr2011-prog/Quanta)
[![License](https://img.shields.io/badge/License-AGPL%20v3-blue?style=for-the-badge&logo=gnu)](LICENSE)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![React](https://img.shields.io/badge/React-19-61DAFB?style=for-the-badge&logo=react&logoColor=black)](https://react.dev/)
[![TypeScript](https://img.shields.io/badge/TypeScript-5-3178C6?style=for-the-badge&logo=typescript&logoColor=white)](https://www.typescriptlang.org/)
[![MySQL](https://img.shields.io/badge/MySQL-8-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Status](https://img.shields.io/badge/Status-Production%20Ready-success?style=for-the-badge)](RELEASE-2.0.0-FINAL.md)
[![Stars](https://img.shields.io/github/stars/sinajr2011-prog/Quanta?style=for-the-badge)](https://github.com/sinajr2011-prog/Quanta/stargazers)

**Role-based school operating system** with Personal AI, memory, learning maps, grounded research & human-confirmed AI actions.

[🚀 Quick Start](#-quick-start) · [🧠 Intelligence](#-intelligence-guarantees) · [📁 Structure](#-project-layout) · [🤝 Contribute](#-contributing)

🌐 **Language:** English (default) · [فارسی](#-نسخه-فارسی)

</div>

---

## 🌟 What is Quanta?

**Quanta** is an AI-native School Operating System. School management, learning intelligence, research, communication and permission-aware AI live in **one coherent product** — not disconnected modules.

- 👨‍🎓 **Students** get a personal dashboard + AI companion  
- 👩‍🏫 **Teachers** see class tools, signals and smart proposals  
- 👨‍👩‍👧 **Parents** receive transparent progress views  
- 🏫 **Admins** hold the real School Pulse  
- 🔐 Everything is protected by strong RBAC + human confirmation for consequential actions  

> **Version 2.0** turns the school-management foundation into an intelligence platform: personal memory, learning maps, school signals, grounded research with citations, audit logs, and AI actions that only execute after human confirmation.

---

## ✨ Key Features

| Feature | Description |
|---------|-------------|
| 🎭 **Role-Based Access** | Six primary roles + secondary security code for teacher/developer |
| 🧠 **Personal AI** | Provider-agnostic chat with memory scoped to user + school |
| 🗺️ **Learning Maps** | Concept mastery map and real progress tracking |
| 📡 **School Pulse** | Live signals and pulse for school / class |
| 🔍 **Grounded Research** | URL + file ingestion (PDF/TXT/MD/CSV) with citations |
| ✅ **Human-Confirmed Actions** | AI only proposes — execution requires a human-confirmation endpoint |
| 🔒 **Audit & Rate Limit** | All AI usage is rate-limited and fully auditable |
| 🏫 **Multi-tenant ready** | Server-side isolation by school and role |

---

## 🛠️ Tech Stack

```text
Frontend  →  React 19 + TypeScript + Vite 7
Backend   →  PHP 8.1+ · PDO/MySQL · custom service layer
Auth      →  Token sessions + RBAC + secondary security code
AI        →  OpenAI-compatible endpoint (provider-agnostic)
Research  →  Source ingestion · chunking · retrieval · citations
```

---

## 📁 Project Layout

```text
Quanta/
├── frontend/                 # React + TypeScript (build → dist/)
├── backend/                  # PHP API + core services
│   ├── core/                 # auth, permissions, school, education...
│   ├── app/                  # Intelligence, Services, Analytics
│   └── config.local.example.php
├── database/                 # migrations (via upgrade.php)
├── docs/                     # architecture, history, master plan
├── assets/                   # branding (logo, mark, favicon)
├── tools/qa.sh               # automated QA checks
├── index.php                 # production entry
└── .htaccess                 # routing + security headers
```

---

## 🚀 Quick Start

### 1. Local frontend development

```bash
cd frontend
npm ci
npm run typecheck
npm run build          # output lands in frontend/dist/
```

### 2. Database

1. Create an empty MySQL/MariaDB database.
2. Copy `backend/config.local.example.php` → `backend/config.local.php` and fill in credentials.
3. Run the one-time upgrade from CLI:

```bash
php backend/upgrade.php
```

> ⚠️ After a successful migration, remove or disable public access to `upgrade.php`.

### 3. AI configuration (server-side only!)

```php
// backend/config.local.php
'ai' => [
  'url'   => 'https://api.example.com/v1/chat/completions',
  'key'   => 'YOUR_SERVER_SIDE_KEY',   // never put this in frontend or Git!
  'model' => 'gpt-4o-mini',
],
```

### 4. Shared-host deployment

1. Build `frontend/dist/` on a development machine.
2. Upload the full tree including the generated `dist/`.
3. Upload `config.local.php` separately (never commit it).
4. Point the domain document root at the Quanta root.
5. Verify: `/backend/api.php?action=health`
6. Run migration via SSH/CLI and then lock the upgrade endpoint.

---

## 🧠 Intelligence Guarantees

- ❌ AI never receives unrestricted database access  
- ✅ Student / parent / teacher data is scoped by authenticated school + role  
- ✅ Research answers are grounded in retrieved source chunks and return citations  
- ✅ AI actions are **proposals by default** → execution only via human-confirmation endpoint  
- ✅ AI usage is rate-limited and fully auditable  
- ✅ Memory is scoped strictly to the authenticated user and their school  

---

## 🧪 QA

```bash
bash tools/qa.sh
```

Checks PHP syntax, critical files, migration presence and frontend prerequisites.

---

## 📜 License

**GNU Affero General Public License v3.0 (AGPL-3.0)**

See [`LICENSE`](LICENSE).  

If you use Quanta in research or educational work, please cite it via [`CITATION.cff`](CITATION.cff).

---

## 🤝 Contributing

Before opening a PR or issue please read:

- [`CODE_OF_CONDUCT.md`](CODE_OF_CONDUCT.md)
- [`SECURITY.md`](SECURITY.md)
- Architecture notes under `docs/` and `architecture/`

Clean PRs, bug reports and thoughtful ideas are always welcome! 🚀

---

## 📬 Links

- **Repository**: [sinajr2011-prog/Quanta](https://github.com/sinajr2011-prog/Quanta)
- **Vibe**: Cypher Group
- **Version**: `2.0.0-FINAL` (25 Sep 2026)

---

<details>
<summary><h2>🇮🇷 نسخه فارسی (کلیک کن تا باز بشه)</h2></summary>

### مدرسه در ابعاد آینده

**Quanta** یک پلتفرم عملیاتی مدرسه است که مدیریت مدرسه، هوش یادگیری، تحقیق، ارتباطات و AI آگاه از مجوز رو در **یک محصول واحد** جمع کرده.

- 👨‍🎓 دانش‌آموز داشبورد شخصی + AI همراه داره  
- 👩‍🏫 معلم ابزارهای کلاس، سیگنال‌ها و پیشنهادهای هوشمند می‌بینه  
- 👨‍👩‍👧 والدین نمای شفاف از پیشرفت دارن  
- 🏫 مدیر مدرسه نبض واقعی مدرسه (School Pulse) رو در اختیار داره  
- 🔐 همه چیز با RBAC قوی و تأیید انسانی برای اقدامات مهم محافظت می‌شه  

> **نسخه ۲.۰** فونداسیون مدیریت مدرسه رو به یک پلتفرم هوشمند تبدیل کرده: حافظه شخصی، نقشه‌های یادگیری، سیگنال‌های مدرسه، تحقیق grounded با citation، لاگ حسابرسی و اقدامات AI که فقط با تأیید انسان اجرا می‌شن.

#### ویژگی‌های کلیدی

| ویژگی | توضیح |
|-------|--------|
| 🎭 نقش‌محور | شش نقش اصلی + کد امنیتی ثانویه |
| 🧠 هوش مصنوعی شخصی | چت provider-agnostic با حافظه محدود به کاربر و مدرسه |
| 🗺️ نقشه‌های یادگیری | نقشه تسلط مفاهیم و پیشرفت واقعی |
| 📡 School Pulse | سیگنال‌ها و نبض زنده مدرسه / کلاس |
| 🔍 تحقیق زمینه‌دار | ingestion از URL و فایل + citation |
| ✅ اقدامات تأییدشده توسط انسان | AI فقط پیشنهاد می‌ده |
| 🔒 ممیزی و محدودیت نرخ | همه استفاده‌های AI قابل‌ممیزی |
| 🏫 آماده multi-tenant | isolation سمت سرور |

#### نصب سریع

```bash
cd frontend && npm ci && npm run build
# سپس config.local.php را تنظیم و php backend/upgrade.php را اجرا کن
```

جزئیات کامل در بخش انگلیسی بالا.

</details>

---

<div align="center">

**Built with ❤️ for the future of education**

*Quanta — A School for the Future*

<img src="assets/quanta-mark.svg" alt="Quanta Mark" width="72"/>

</div>
