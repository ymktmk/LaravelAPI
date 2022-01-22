## LaravelでのAPIサンプル

https://laravel.com/docs/8.x/sanctum#overriding-default-models

https://techbowl.co.jp/techtrain/missions/12
をGolangではなくてLaravelで挑戦中（1/19〜）

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

## 参考文献

https://www.twilio.com/blog/build-restful-api-php-laravel-sanctum-jp
