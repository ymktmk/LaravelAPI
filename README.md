## LaravelでのAPIサンプル（Sanctum）

https://laravel.com/docs/8.x/sanctum#overriding-default-models

https://techbowl.co.jp/techtrain/missions/12
をGolangではなくてLaravelで挑戦中（1/19〜）

## 認証方式
### Token認証はサーバーに保存しないAPIのヘッダーに組み込んで送信する

新規登録

```
curl -X POST http://127.0.0.1:8000/api/register -d 'name=tomoki&email=example@gmail.com&password=xxxxxxxxx'
```

ログイン

```
curl -X POST http://127.0.0.1:8000/api/login -d 'email=example@gmail.com&password=xxxxxxxxx'
```

ユーザー情報を取得

```
curl http://127.0.0.1:8000/api/user/get -H "Authorization:Bearer TQU1lynT5KwprBXHBZ9doUvfaNi0YF2yc0ioW1uB"
```

ユーザー情報更新(ユーザー名)

```
curl -X POST http://127.0.0.1:8000/api/user/update -d 'name=yamaoka' -H "Authorization:Bearer TQU1lynT5KwprBXHBZ9doUvfaNi0YF2yc0ioW1uB"
```

ガチャを引く(PokeAPIを使っている)

```
curl http://127.0.0.1:8000/api/gacha/draw -H "Authorization:Bearer TQU1lynT5KwprBXHBZ9doUvfaNi0YF2yc0ioW1uB"
```

## 参考文献

https://www.twilio.com/blog/build-restful-api-php-laravel-sanctum-jp
