## LaravelでのAPIサンプル

https://laravel.com/docs/8.x/sanctum#overriding-default-models

https://techbowl.co.jp/techtrain/missions/12
をGolangではなくてLaravelで挑戦中（1/19〜）

新規登録

```
curl -X POST http://127.0.0.1:8000/api/register -d 'name=tomoki&email=exampel@gmail.com&password=xxxxxxxxx'
```

ユーザー情報取得

```
curl http://127.0.0.1:8000/api/user/get -H "Authorization:Bearer xxxxxxxxxxxxxxxx"
```

## 参考文献

https://www.twilio.com/blog/build-restful-api-php-laravel-sanctum-jp
