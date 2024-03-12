<h2>起動方法</h2>

前提としてDockerが必要なので、まずはDockerをインストールして起動してください。

<br>
<br>

<h3>1, Dockerコンテナをビルド</h3>
このリポジトリをcloneしたディレクトリで下記のコマンドを実行します。

```
docker-compose -f TauCeti/docker/docker-compose.dev.yml up -d --build
```

<br>
<br>

<h3>2, Laravelの.envを設定します。</h3>

まず、下記のコマンドを実行して.envファイルを生成します。

```
docker exec -it tau_ceti_app cp .env.example .env 
```

生成された.envファイルのデータベース設定部分を下記のように書き換えます。

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=tau_ceti_db
DB_USERNAME=root
DB_PASSWORD=tau_ceti_pass
```

<br>
<br>

<h3>3, Laravelの依存関係をインストールする</h3>

```
docker exec -it tau_ceti_app composer install
```

<h3>4, 下記コマンドでマイグレーションを実行</h3>

```
docker exec -it tau_ceti_app php artisan migrate
```

<br>
<br>

<h3>5, Vue3に必要な依存関係をインストール</h3>

```
docker exec -it tau_ceti_app npm install
docker exec -it tau_ceti_app npm install --save-dev vue @vitejs/plugin-vue
```

<h3>6, 下記コマンドでVueを起動</h3>

```
docker exec -it tau_ceti_app npm run dev
```

<br>
<br>

<h3>7, LaravelとVueの起動を確認</h3>

下記URLにアクセスして「Laravel with Vue3」というメッセージが表示されたらOK

```
localhost:8080
```

(*)もしこの画面でエラーが出た時、generateKeyみたいなことが書いてる緑のボタンがあれば、それを押せばOK

<br>
<br>
