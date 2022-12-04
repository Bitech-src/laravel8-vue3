# Docker を使った開発環境構築

## 0. 環境構築に必要なツール

- Docker Desktop がインストールされている事が必要です。
- 作業はコマンドラインから行います。
```
cd environment/development
```

## 1. 環境設定

- `env.example` を `.env` にコピーします。

その上で以下を実行します。

```
docker compose run --rm php php artisan key:generate
```

成功すれば以下のメッセージがターミナルに表示されます。

```
Application key set successfully.
```

## 2. 各種コンテナの起動

以下を実行します。

```
docker compose up -d
```

DB などの各種イメージのダウンロードが行われ、その後起動します。完了するまで数分かかるので待ちます。

### 確認: アプリ

この時点で http://localhost からアクセスする事が可能です。ただし DB の設定をしていないので、システムのログインはできません。


### 確認: データベース

この時点で http://localhost:4040 から phpMyAdmin にアクセスできます。

また、問題がなければ `docker/volumes/db` 以下に MySQL の内部データが入っている事が確認できます。

DB がおかしくなってしまった場合はこれらのファイルを削除して再起動と初期化を行えば初期状態に戻ります。

## 3. vue等のinstall
docker-compose exec node bash -c "npm install & npm run dev"

※以下は実行しなくてよい
docker-compose exec node npm install vue@next vue-loader@next @vue/compiler-sfc

## 4. DB の初期化

以下を実行します。

```
docker compose exec php php artisan migrate
```

## 5. ユーザ登録およびログイン

http://localhost/register から ユーザを登録します。

その後、以下の作業を行なってください。

- 登録したらログアウトをして、登録した情報でログイン

ログインが完了したら環境構築は完了です。

### 6. 終了

以下を実行するとコンテナが終了します。

```
docker compose down
```

再度起動したい時は以下を実行します。

```
docker compose up -d
```



# Laravelプロジェクト作成
docker-compose exec php composer create-project --prefer-dist "laravel/laravel=8.*" ./
docker compose run --rm php php artisan key:generate
# マイグレーションの実行
docker-compose exec php php artisan migrate

# vueをインストール


# 備考　（モジュールを修正した際に実行）

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


docker-compose exec node bash -c "npm install & npm run dev"