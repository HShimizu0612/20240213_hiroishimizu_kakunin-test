# お問い合わせフォーム

## 構築環境

### Dockerビルド
- docker-compose up -d --build

### Laravelプロジェクト作成
1. docker-compose exec php bash
2. composer install
3. .envファイルの環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

## 使用技術
- PHP 8.3.0
- Laravel 8.83.27
- Composer 2.6.6

## ER図
- ![スクリーンショット 2024-02-13 002153](https://github.com/HShimizu0612/20240213_hiroishimizu_kakunin-test/assets/150598706/ae3978cc-c43c-4785-9321-c8919c825b09)

## URL
- 開発環境: http://localhost/
- データベース: http://localhost:8080/
