# PHP で作る はじめての Web サイト（Docker 環境構築編）

## Docker のインストール

- [macOS](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)
- [Windows](https://hub.docker.com/editions/community/docker-ce-desktop-windows)

## PHP サーバの起動

Docker を起動した後、下記コマンドをターミナルで実行すると PHP サーバが起動します。終了させるには Control + c キーを押します。

```
$ docker run --rm --tty --detach \
    --publish 8000:8000 \
    --name muzaru-php \
    --volume (pwd):/myapp \
    muzaru/php bash
```