# Laravelプロジェクト作成
docker-compose exec php composer create-project --prefer-dist "laravel/laravel=8.*" ./

# マイグレーションの実行
docker-compose exec php php artisan migrate

# vueをインストール
docker-compose exec node npm install vue@next vue-loader@next @vue/compiler-sfc

# package.json確認
バージョン３になっている

docker-compose exec php bash -c "
php artisan cache:clear &&
php artisan config:clear &&
php artisan config:cache &&
php artisan route:clear &&
php artisan view:clear &&
php artisan clear-compiled &&
php artisan optimize &&
composer dump-autoload &&
rm -f bootstrap/cache/config.php"