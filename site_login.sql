# MySQLにログイン
mysql -u root -p

# データベースを作成
create database db;

# データベースを使用中にする
use db;

# 作成したデータベースに使用者権限を付ける
grant all on db.* to 'admin'@'localhost' identified by 'パスワード';

# 権限付与したユーザーでMySQLに再ログイン
mysql -u admin -p
# パスワードを入力
password: パスワード

# データベースを使用中にする
use db;

# 作成したデータベースにテーブルを作る
create table users (
    id int not null auto_increment primary key,
    username varchar(100) not null,
    password varchar(255) not null
);

# 実際にテーブルが上記の内容で作成されているか確認
desc users;
