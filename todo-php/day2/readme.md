# PHP で作る はじめての Web サイト

## PHP サーバ起動

```
$ docker run --rm \
--publish 8000:8000 \
--name muzaru-php \
--volume (pwd):/myapp \
muzaru/php php -t /myapp -S 0.0.0.0:8000
```