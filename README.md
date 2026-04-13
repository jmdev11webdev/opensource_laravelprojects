# Open Source Laravel Projects by JMDEVSTACK

List of Open Source Laravel Projects
<a href="https://www.github.com/jmdev11webdev/simplefree_linkinbio_builder">Simple Free Link-in-bio Builder</a>

<div align="center">

<img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
<img src="https://img.shields.io/badge/Laravel_Cloud-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
<img src="https://img.shields.io/badge/Laravel_Herd-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
<img src="https://img.shields.io/badge/PostgreSQL-4169E1?style=for-the-badge&logo=postgresql&logoColor=white" />
<img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
<img src="https://img.shields.io/badge/MongoDB-47A248?style=for-the-badge&logo=mongodb&logoColor=white" />
<img src="https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite&logoColor=white" />
<img src="https://img.shields.io/badge/Open_Source-3DA639?style=for-the-badge&logo=opensourceinitiative&logoColor=white" />
<img src="https://img.shields.io/badge/PRs-Welcome-brightgreen?style=for-the-badge" />
<img src="https://img.shields.io/badge/License-MIT-blue?style=for-the-badge" />

<br />

> **A collection of open-source Laravel projects — live, deployed, and built for the community.**
> Hosted on [Laravel Cloud](https://cloud.laravel.com) · Open for contributors worldwide.

</div>

---

## 🗂️ What's Inside

This repository is a growing collection of Laravel-based projects designed to solve real problems — starting with tools built for local Filipino businesses and communities. Every project here is:

- ✅ **Production-deployed** on Laravel Cloud
- ✅ **Open source** and free to learn from
- ✅ **Open to contributors** — your PRs are welcome
- ✅ **Actively maintained**

---

## 🚀 Projects

| Project | Description | Status | Live |
|---|---|---|---|
| 🗺️ **Link-in-bio Builder** | Track the clicks of your links and style your page for viewing | 🟡 In Development | Coming Soon |
| *(more coming soon)* | | | |

> Projects are added as they reach a deployable state. Star the repo to stay updated.

---

## 🌐 Deployment

All projects in this repository are hosted on **[Laravel Cloud](https://cloud.laravel.com)** — Laravel's official cloud platform built for zero-config deployments.

```bash
# Each project is independently deployed
# Visit the project's subdirectory for its own setup guide
cd project-name/
cat README.md
```

---

## 🤝 Contributing

Contributions, ideas, and collaboration are **very much welcome**. This is a community-first repository.

### How to Contribute

```bash
# 1. Fork this repository
# Click the Fork button top-right on GitHub

# 2. Clone your fork
git clone https://github.com/YOUR_USERNAME/opensource_laravelprojects.git
cd opensource_laravelprojects

# 3. Create a new branch for your changes
git checkout -b feature/your-feature-name
# or
git checkout -b fix/your-fix-name

# 4. Make your changes, then commit
git add .
git commit -m "feat: describe what you changed"

# 5. Push to your fork
git push origin feature/your-feature-name

# 6. Open a Pull Request on GitHub
# Go to the original repo and click "Compare & pull request"
```

### Contribution Guidelines

- 🔍 **Check existing issues** before opening a new one
- 🌿 **Always branch off `main`** — never commit directly to `main`
- 📝 **Write clear PR descriptions** — what, why, and how
- 🧪 **Test your changes** before submitting
- 💬 **Be respectful** — this is a welcoming space for all skill levels

### Good First Issues

Look for issues tagged:

- `good first issue` — beginner-friendly
- `help wanted` — needs a contributor
- `enhancement` — feature ideas open for anyone

---

## 🔒 Branch Protection & Security

This repository is protected to maintain code quality and stability.

### Protected Branches

| Branch | Protection Rules |
|---|---|
| `main` | ✅ Requires pull request · ✅ Requires review approval · ✅ No direct pushes · ✅ Status checks must pass |

### What this means for contributors

- ❌ **No one** — including the owner — can push directly to `main`
- ✅ All changes must go through a **Pull Request**
- ✅ PRs require **at least 1 approval** before merging
- ✅ All conversations must be **resolved** before merge
- ✅ Branch must be **up to date** with `main` before merging

### Setting Up Branch Protection (for maintainers)

> Go to: **Settings → Branches → Add branch ruleset**

```
Branch name pattern: main

Rules to enable:
☑ Restrict creations
☑ Restrict updates  
☑ Restrict deletions
☑ Require a pull request before merging
   └ Required approvals: 1
   └ Dismiss stale pull request approvals when new commits are pushed: ON
   └ Require conversation resolution before merging: ON
☑ Require status checks to pass
☑ Block force pushes
```

---

## 🛠️ Local Development Setup

This project is developed using **[Laravel Herd](https://herd.laravel.com)** — the fastest way to get a Laravel environment running on your machine. It's recommended for contributors too.

### Prerequisites

- [Laravel Herd](https://herd.laravel.com) installed
- PHP 8.2+
- Composer
- Node.js & npm
- Your preferred database (see below)

### Getting Started

```bash
# Clone the repository
git clone https://github.com/YOUR_USERNAME/opensource_laravelprojects.git
cd opensource_laravelprojects

# Navigate to a specific project
cd project-name

# Install dependencies
composer install
npm install && npm run dev

# Set up environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# With Herd, your site is already served automatically at:
# http://project-name.test
```

> No need to run `php artisan serve` if you're using Herd — it handles that for you automatically.

---

## 🗄️ Database Configuration

This repository supports multiple database drivers. Each project specifies which one it uses in its own `.env.example`.

**Primary database: PostgreSQL** (used for most projects)

### PostgreSQL ⭐ (Primary)

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### MySQL

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### MongoDB

```env
DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=your_database
```

> Install the MongoDB Laravel driver: `composer require mongodb/laravel-mongodb`

### SQLite (Quickstart / Testing)

```env
DB_CONNECTION=sqlite
# DB_DATABASE defaults to database/database.sqlite
```

```bash
touch database/database.sqlite
php artisan migrate
```

> SQLite is great for quickly testing or contributing without setting up a full database server.

### Herd Database Tips

If you're using **Herd Pro**, PostgreSQL, MySQL, and other services are built in — just enable them from the Herd menu. No separate installation needed.

For the free version of Herd, you can install databases separately via [DBngin](https://dbngin.com) (recommended) or Homebrew.

---

## 📋 Pull Request Checklist

Before submitting your PR, make sure:

- [ ] My code follows the existing code style
- [ ] I've tested my changes locally
- [ ] I've added comments where the code isn't self-explanatory
- [ ] I've updated documentation if needed
- [ ] My branch is up to date with `main`
- [ ] My PR description clearly explains the changes

---

## 📄 License

This repository is licensed under the **MIT License** — you're free to use, modify, and distribute the code with attribution.

```
MIT License — Copyright (c) 2025
```

---

## 💬 Get in Touch

Have an idea? Found a bug? Want to collaborate?

- 🐛 **Open an issue** — for bugs and feature requests
- 💡 **Start a discussion** — for ideas and questions
- 📬 **Reach out directly** — via GitHub profile

---

<div align="center">

**Built with ❤️ in the Philippines · Powered by Laravel · Hosted on Laravel Cloud**

*If this project helped you, consider giving it a ⭐ — it means a lot!*

</div>
