<div align="center">
    <p><a href="https://sikessem.com/" title="SIKessEm"><img src="https://github.com/sikessem/static/blob/main/logo.svg" alt="SIKessEm logo" height="300"/></a></p>
    <p>
        <a href="https://github.com/sikessem/package/blob/HEAD/LICENSE"><img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="SIKessEm Package is released under the MIT license."/></a>
        <a href="https://github.com/sikessem/package/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/workflow/status/sikessem/package/Tests/main"/></a>
        <a href="https://packagist.org/packages/sikessem/package"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/sikessem/package"/></a>
        <a href="https://packagist.org/packages/sikessem/package"><img alt="Latest Version" src="https://img.shields.io/packagist/v/sikessem/package"/></a>
        <a href="https://sikessem.github.io/package/contributing"><img src="https://img.shields.io/badge/PRs-welcome-brightgreen.svg" alt="PRs welcome!"/></a>
        <a href="https://twitter.com/intent/follow?screen_name=ske_sikessem"><img src="https://img.shields.io/twitter/follow/ske_sikessem.svg?label=Follow%20@ske_sikessem" alt="Follow @ske_sikessem"/></a>
    </p>
</div>

***

# 📦️ Create a new SIKessEm Package

Create a template based on this repository to create your custom package.

### 🔖 Contents

- [Getting Started](#-getting-started)
- [Requirements](#-requirements)
- [Documentation](#-documentation)
- [Community](#-community)
- [Security Reports](#-security-reports)
- [Contribution](#-contribution)
- [License](#-license)

## 🎉 Getting Started

### ⚡️ Installation

Install [Package](https://github.com/sikessem/package) using [Composer](https://getcomposer.org/):
- By adding the `sikessem/package` dependency to your `composer.json` file:
```json
{
  "require" : {
    "sikessem/package": "^0.2"
  },
}
```
- Or by including the dependency:
```bash
composer require sikessem/package --no-dev
```
- Or by creating a new project from the template:
```bash
create-project sikessem/package --prefer-source package
```

### 🧑‍💻 Usage

```php
<?php

use Sikessem\Package\Hello;

include_once __DIR__.'/autoload.php';

echo Hello::toYou('SIKessEm').PHP_EOL;
```

### 🧪 Testing

🧹 Keep a modern codebase with **Pint**:
```bash
composer lint
```

⚗️ Run static analysis using **PHPStan**:
```bash
composer test:types
```

✅ Run unit tests using **PEST**
```bash
composer test:unit
```

🚀 Run the entire test suite:
```bash
composer test
```

## 📋 Requirements

> **Requires [PHP 8.1+](https://php.net/releases/)** (at least 8.1.11 recommended to avoid potential bugs).

## 📖 Documentation

The full documentation for SIKessEm Packages can be found on [our SIKessEm Documentation][docs].

[docs]: https://sikessem.github.io/package

## 💬 Community

For support, you can use [our GitHub Discussions](https://github.com/sikessem/package/discussions).

## 👥 Contribution

Read [our contributing guide][c] to learn about our development process, how to propose bugfixes and improvements, and how to build and test your changes to Package.

[c]: https://github.com/sikessem/package/blob/HEAD/CONTRIBUTING.md

## 🔐 Security Reports

If you discover a security vulnerability within Package, please send an e-mail to [SIGUI Kessé Emmanuel](https://sikessem.com) via [ske@sikessem.com](mailto:ske@sikessem.com). All security vulnerabilities will be promptly addressed.

## 📄 License

The SIKessEm Package is open-sourced software licensed under the  [MIT License](https://opensource.org/licenses/MIT) - see the [LICENSE][l] file for details.

[l]: https://github.com/sikessem/package/blob/HEAD/LICENSE

------

Package was created by [SIGUI Kessé Emmanuel](https://sikessem.com).
