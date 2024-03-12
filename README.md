<h2>起動方法</h2>

前提としてDockerが必要なので、まずはDockerをインストールして起動してください。

<br>
<br>

<h3>1, Dockerコンテナをビルド</h3>
このリポジトリをPULLしたディレクトリで下記のコマンドを実行します。

```
docker-compose -f docker/docker-compose.dev.yml up -d --build
```

<br>
<br>

<h3>2, Laravelの.envを以下のように書き換えます</h3>

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

<h3>3, 下記コマンドでマイグレーションを実行</h3>

```
docker exec -it tau_ceti_app php artisan migrate
```

<br>
<br>

<h3>4, 下記コマンドでVueを起動</h3>

```
docker exec -it tau_ceti_app npm run dev
```

<br>
<br>

<h3>5, LaravelとVueの起動を確認</h3>

下記URLにアクセスして「Laravel with Vue3」というメッセージが表示されたらOK

```
localhost:8080
```

<br>
<br>
