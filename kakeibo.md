# まったくあたらしい家計簿
## どんなアプリ？

## 技術スタック

## データベース
### users
|key|value|
|:-:|:---:|
|id|`INT AUTO_INCREMENT PRIMARY KEY`|
|username|ユーザによって入力された値 `CHAR(32)`|
|password|ユーザによって入力された値 `TEXT`|

### records
|key|value|
|:-:|:---:|
|id|`INT AUTO_INCREMENT PRIMARY KEY`|