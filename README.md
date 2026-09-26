<div align="center">

<img src="assets/quanta-logo-new.png" alt="Quanta Logo" width="280"/>

# ⚡ Quanta 2.0.0

### مدرسه در ابعاد آینده · A School for the Future

[![Version](https://img.shields.io/badge/version-2.0.0--FINAL-blueviolet?style=for-the-badge&logo=github)](https://github.com/sinajr2011-prog/Quanta)
[![License](https://img.shields.io/badge/License-AGPL%20v3-blue?style=for-the-badge&logo=gnu)](LICENSE)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![React](https://img.shields.io/badge/React-19-61DAFB?style=for-the-badge&logo=react&logoColor=black)](https://react.dev/)
[![TypeScript](https://img.shields.io/badge/TypeScript-5-3178C6?style=for-the-badge&logo=typescript&logoColor=white)](https://www.typescriptlang.org/)
[![MySQL](https://img.shields.io/badge/MySQL-8-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Status](https://img.shields.io/badge/Status-Production%20Ready-success?style=for-the-badge)](RELEASE-2.0.0-FINAL.md)

**نقش‌محور · هوش مصنوعی شخصی · نقشه‌های یادگیری · تحقیق زمینه‌دار · اقدامات قابل‌ممیزی**

Role-based school OS with Personal AI, memory, learning maps, grounded research & human-confirmed AI actions.

[🚀 Quick Start](#-نصب-و-راه‌اندازی) · [🧠 Intelligence](#-هوش-مصنوعی-و-تضمین‌ها) · [📚 Docs](#-مستندات) · [🤝 Contribute](#-مشارکت)

</div>

---

## 🌟 این چیه؟ / What is Quanta?

**Quanta** یک پلتفرم عملیاتی مدرسه است که مدیریت مدرسه، هوش یادگیری، تحقیق، ارتباطات و AI آگاه از مجوز رو در **یک محصول واحد** جمع کرده.

دیگه ماژول‌های جدا از هم نیستن. اینجا:

- 👨‍🎓 دانش‌آموز داشبورد شخصی + AI همراه داره
- 👩‍🏫 معلم ابزارهای کلاس، سیگنال‌ها و پیشنهادهای هوشمند می‌بینه
- 👨‍👩‍👧 والدین نمای شفاف از پیشرفت دارن
- 🏫 مدیر مدرسه نبض واقعی مدرسه (School Pulse) رو در اختیار داره
- 🔐 همه چیز با RBAC قوی و تأیید انسانی برای اقدامات مهم محافظت می‌شه

> **نسخه ۲.۰** فونداسیون مدیریت مدرسه رو به یک پلتفرم هوشمند تبدیل کرده: حافظه شخصی، نقشه‌های یادگیری، سیگنال‌های مدرسه، تحقیق grounded با citation، لاگ حسابرسی و اقدامات AI که فقط با تأیید انسان اجرا می‌شن.

---

## ✨ ویژگی‌های کلیدی / Key Features

| ویژگی | توضیح |
|-------|--------|
| 🎭 **Role-Based Access** | شش نقش اصلی + کد امنیتی ثانویه برای معلم/توسعه‌دهنده |
| 🧠 **Personal AI** | چت provider-agnostic با حافظه scoped به کاربر و مدرسه |
| 🗺️ **Learning Maps** | نقشه تسلط مفاهیم و پیشرفت واقعی |
| 📡 **School Pulse** | سیگنال‌ها و نبض زنده مدرسه / کلاس |
| 🔍 **Grounded Research** | ingestion از URL و فایل (PDF/TXT/MD/CSV) + citation |
| ✅ **Human-Confirmed Actions** | AI فقط پیشنهاد می‌ده — اجرا نیاز به تأیید انسان داره |
| 🔒 **Audit & Rate Limit** | همه استفاده‌های AI قابل‌ممیزی و محدود شده‌اند |
| 🏫 **Multi-tenant ready** | isolation سمت سرور بر اساس مدرسه و نقش |

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

## 📁 ساختار پروژه / Project Layout

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

## 🚀 نصب و راه‌اندازی / Quick Start

### ۱. توسعه محلی (Frontend)

```bash
cd frontend
npm ci
npm run typecheck
npm run build          # خروجی در frontend/dist/
```

### ۲. دیتابیس

1. یک دیتابیس خالی MySQL/MariaDB بساز.
2. `backend/config.local.example.php` رو کپی کن به `backend/config.local.php` و اطلاعات رو پر کن.
3. از CLI اجرا کن:

```bash
php backend/upgrade.php
```

> ⚠️ بعد از migration موفق، دسترسی عمومی به `upgrade.php` رو غیرفعال/حذف کن.

### ۳. تنظیمات AI (فقط سمت سرور!)

```php
// backend/config.local.php
'ai' => [
  'url'   => 'https://api.example.com/v1/chat/completions',
  'key'   => 'YOUR_SERVER_SIDE_KEY',   // هرگز در فرانت یا گیت نذار!
  'model' => 'gpt-4o-mini',
],
```

### ۴. استقرار روی Shared Host

1. `frontend/dist/` رو روی ماشین توسعه بساز.
2. کل محتویات (به همراه dist) رو آپلود کن.
3. `config.local.php` رو جداگانه آپلود کن (commit نکن).
4. Document Root رو روی ریشه Quanta تنظیم کن.
5. چک کن: `/backend/api.php?action=health`
6. migration رو از SSH یا CLI امن اجرا کن.

---

## 🧠 هوش مصنوعی و تضمین‌ها / Intelligence Guarantees

- ❌ AI دسترسی unrestricted به دیتابیس نداره
- ✅ داده‌های دانش‌آموز/والد/معلم بر اساس مدرسه و نقش scoped هستن
- ✅ پاسخ‌های تحقیق grounded هستن و citation برمی‌گردونن
- ✅ اقدامات AI به صورت پیش‌فرض **پیشنهاد** هستن → اجرا فقط با endpoint تأیید انسانی
- ✅ استفاده از AI rate-limited و auditable هست
- ✅ حافظه فقط متعلق به کاربر احراز هویت‌شده و مدرسه خودش هست

---

## 🧪 QA و تست

```bash
bash tools/qa.sh
```

این اسکریپت syntax PHP، فایل‌های حیاتی، وجود migration و پیش‌نیازهای فرانت رو چک می‌کنه.

---

## 📜 لایسنس / License

**GNU Affero General Public License v3.0 (AGPL-3.0)**

هرگونه استفاده، تغییر یا توزیع تحت این لایسنس انجام می‌شه.  
جزئیات کامل در [`LICENSE`](LICENSE).

اگر از Quanta در کار پژوهشی یا آموزشی استفاده می‌کنی، لطفاً cite کن (فایل [`CITATION.cff`](CITATION.cff)).

---

## 🤝 مشارکت / Contributing

قبل از هر PR یا issue:

- [`CODE_OF_CONDUCT.md`](CODE_OF_CONDUCT.md) رو بخون
- [`SECURITY.md`](SECURITY.md) رو برای گزارش آسیب‌پذیری‌ها رعایت کن
- مستندات معماری در `docs/` و `architecture/` رو چک کن

پیشنهادها، باگ‌ریپورت‌ها و PRهای تمیز همیشه خوش‌آمدید! 🚀

---

## 📬 تماس و لینک‌ها

- **Repository**: [sinajr2011-prog/Quanta](https://github.com/sinajr2011-prog/Quanta)
- **Organization vibe**: Cypher Group
- **Version**: `2.0.0-FINAL` (۲۵ سپتامبر ۲۰۲۶)

---

<div align="center">

**ساخته شده با ❤️ برای آینده آموزش**

*Quanta — A School for the Future*

<img src="assets/quanta-mark-new.png" alt="Quanta Mark" width="80"/>

</div>
