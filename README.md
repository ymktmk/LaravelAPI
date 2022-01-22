## LaravelでのAPIサンプル

https://laravel.com/docs/8.x/sanctum#overriding-default-models

https://techbowl.co.jp/techtrain/missions/12
をGolangではなくてLaravelで挑戦中（1/19〜）

## 認証方式
### FirebaseAuthなどのJWTは通常local storageに保存されるためjavascriptでアクセス可能な領域ですので、XSSの脆弱性アリ

### Cookie認証はクロスサイトリクエストフォージェリ（CSRF）の対策の必要アリ
### Token認証はサーバーに保存しないAPIのヘッダーに組み込んで送信する

新規登録

```
curl -X POST http://127.0.0.1:8000/api/register -d 'name=tomoki&email=exampel@gmail.com&password=xxxxxxxxx'
```

ログイン

```
curl -X POST http://127.0.0.1:8000/api/login -d 'email=exampel@gmail.com&password=xxxxxxxxx'
```

ユーザー情報を取得

```
curl http://127.0.0.1:8000/api/user/get -H "Authorization:Bearer t6kkHl95DPrhkMjnN8x2e1IfjcbUF8H7LgDdZA0T"
```

ユーザー情報更新(ユーザー名)

```
$ curl -X POST http://127.0.0.1:8000/api/user/update -d 'name=yamaoka' -H "Authorization:Bearer t6kkHl95DPrhkMjnN8x2e1IfjcbUF8H7LgDdZA0T"
```

## 参考文献

https://www.twilio.com/blog/build-restful-api-php-laravel-sanctum-jp
