# usertable

SQLite と Laravel で **最小構成の `users` テーブル**を用意し、**ユーザー一覧**をブラウザで表示するデモ用プロジェクトです。

## 前提

- PHP 8.2 以上（このリポジトリは Laravel 12 系で作成）
- [Composer](https://getcomposer.org/)

## セットアップ

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite   # Windows の場合は `echo. > database\database.sqlite` などで空ファイルを作成
php artisan migrate
php artisan db:seed
```

`.env` でデータベースを SQLite にしていることを確認してください（例: `DB_CONNECTION=sqlite`。`DB_DATABASE` は通常 `database/database.sqlite` を指します）。

## 起動

```bash
php artisan serve
```

ブラウザで次を開きます。

| URL | 説明 |
|-----|------|
| [http://127.0.0.1:8000](http://127.0.0.1:8000) | Laravel のウェルカムページ |
| [http://127.0.0.1:8000/users](http://127.0.0.1:8000/users) | ユーザー一覧（DB の `users` を表示） |

## このプロジェクトの構成の要点

- **`users` テーブル** … `id`, `name`, `email`（ユニーク）, `created_at`, `updated_at` のみ。認証用の `password` 列はありません。
- **ルート** … `routes/web.php` の `GET /users` が `resources/views/users/index.blade.php` を表示します。
- **セッション** … `.env.example` は `SESSION_DRIVER=database` のため、**`sessions` テーブル**用マイグレーションを含めています。

## ライセンス

MIT License（Laravel フレームワークおよびこのリポジトリの利用条件は各コンポーネントのライセンスに従います。）
