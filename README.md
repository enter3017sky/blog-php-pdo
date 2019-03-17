# enter3017sky PHP Blog

> http://enter3017sky.tw/index.php

用 PHP 與 MySQL 學習後端基礎。

![image](https://raw.githubusercontent.com/enter3017sky/mentor-program-2nd-blog/master/picture/php-blog.gif)


### Blog 結構

```
- 首頁: 顯示所有文章
    |
    *- Archives - 顯示所有文章標題(除了草稿)
    |       |
    |       *- 選擇某篇文章
    |                 |
    |                 *- 訪客評論功能
    *- Categories - 顯示所有分類以及文章數量
    |       |
    |       *- 選擇某一分類的文章
    |                 |
    |                 *- 選擇某篇文章
    *---- About - 關於我
    *---- Admin - 使用者登入
    |       |
    |       *- 文章管理
    |       *- 分類管理
    |       *- 新增文章
    |       *- 新增分類
    |       *- 編輯關於我
    *- 登入/登出
    *- 搜尋 blog
```

---

### 目的

- 學習 Server 與 PHP 後端原理。
- MySQL 資料庫系統與 Table 架構。
- PHP - PDO Prepare statement 防止 SQL injection。
- 避免 XXS 攻擊
- CRUD 操作。

### 功能描述

- 可使用 markdown 撰寫文章。
- 單一文章選擇多項分類。
- 可設定分佈或草稿的狀態。
- 使用者透過 session 機制登入。
- 訪客透過 session 機制儲存暱稱，可在文章留下評論或留言。
- 密碼經過 hash 處理。
- Blog 文章搜尋。

### 工具

- AWE EC2
- Nginx
- FileZilla
- PHP PDO
- MySQL
- Bootstrap


