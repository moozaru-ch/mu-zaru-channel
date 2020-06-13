-- todos テーブルが存在していない場合、新規作成する
CREATE TABLE IF NOT EXISTS todos (
  id INTEGER PRIMARY KEY AUTOINCREMENT, -- プライマリーキーを ID に。値を指定しなくても自動で連番を発行してくれる AutoIncrement を設定
  content TEXT NOT NULL,                -- ToDo の内容を保存する
  done BOOLEAN NOT NULL DEFAULT false,  -- ToDo が完了したかどうかのフラグ。Boolean なので true か false が入る
  created_at DATETIME NOT NULL          -- ToDo を作成した日時を保存する
);