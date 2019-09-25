# docker

色々考えた後、やっはり自分で環境構築したいな～

というわけで、作業始めよっか！

・イメージはDocker Hubで探そう！

・docker-compose

docker-composeにより、複数のコンテナの間で依存関係を築く。

参照：http://docs.docker.jp/compose/toc.html

手順：

    ・docker-compose.ymlを作成
    ・versionとserverを定義
    ・docker-compose up -d --buildでコンテナを作る。
    
ここでいくつ注意しないといけないことがある。

    ・docker exec -it コンテナ名 sh　　コンテナに入ることができる。
    ・-d 裏側で実行する。
    ・apt-getを使い、色々な物インストールできる。
    
基礎なので、一番基礎のことのみ記載する。

・「Nginx+PHP+Mysql」

一番シンプルな構築をアップした。これに基づいて、色々追加ができる。

注意したいものは：

    ・docker-php-ext-configure と docker-php-ext-installでPHPのブラグインをインストールできる。
    ・Dockerfileにapt-get updateでap-getの更新が必要、apt-getによる、各ブラグインのインストールができる。

