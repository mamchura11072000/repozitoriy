BACKEND. Работа с API фреймворком.

Есть url API
site.ru/api/test/getListUsers

Возвращает json с данными на экран

{"result":[{"id":"1","name":"Олег","surname":"Антипов","patronymic":"Алексеевич","status":"active","role":"user","avatar":null,"parent_id":null,"nickname":"oleg_antipov"},{"id":"4","name":"Второй","surname":"","patronymic":"","status":"unverified","role":"user","avatar":null,"parent_id":null,"nickname":""},{"id":"5","name":"Третий","surname":"","patronymic":"","status":"unverified","role":"user","avatar":null,"parent_id":null,"nickname":""}]}

Данный адрес это API для метода getListUsers(). Данный момент получает список всех пользователей системы.
/api/  -  это ключевое слово для обращения к API методам системы, которые взаимодествуют с данными БД, иначе говоря CRUD методы.

/api/test - слово test обозначает какой presenter используется, который в дальнейшем и запускает метод.
			Для этого в проекте существует файл /app/presenters/TestPresenter.php

/api/test/getListUsers - слово getListUsers обозначает название метода, который запускает TestPresenter.php. 
			Сам метод getListUsers осуществляет запрос к БД на получения данных о пользователях.

Если есть необходимость передать в url API какой - либо GET параметр, необзодимо писать так
site.ru/api/test/getListUsers?var=1&var2=str

Пример как все организовано можно посмотреть в проекте.

Так же существует базовый презентер /app/presenters/MainPresenter, который наследуется всеми презентерами. В нем реализованы работы с фронтэндом, вывод страниц, виджетов, работа с переводом!





Как работать с БД

В фреймворке существует базовая модель _MainModel.php, которая упрощает работу с запросами к БД. В ней реализован механизм PDO.
Обратите внимание, что не все запросы можно выполнить с помощью базовой модели. 

Работа с БД
=====================

### 1.Выборка 

```
_MainModel::table("table")->get(array("id", "login"))->filter(array("id" => 1))->sort("id", "desc")->pagination(0,6)->send();

объяснение:

->get(array("field1", "field2")) - список полей, которые получаем из таблицы
->get() - получаем все поля из таблицы

->filter(array("field1" => 1, "field2" => "example")) -  аналог WHERE SQL запросе, field - столбец, 1 - значение, которому должен быть равен.
Если перевести на SQL запрос
WHERE field1 = 1 AND field2 = "example"


->sort("id", "desc") - аналог ORDER BY в SQL запросе, сортировка поля id по возрастанию, DESC 
->sort("id", "asc") - аналог ORDER BY в SQL запросе, сортировка поля id по убыванию, ASC

->pagination(0,6) - аналог LIMIT 0, 6 ы SQL запросе

->send() - отправка запроса и возвращение данных с запроса! 

```


### 2.Добавление новых записей 

```
_MainModel::table("table")->add(array("login" => "example@gmail.com", "pass" => "dfvkldfmlcdkfv"))->send(); 

->add(array("login" => "example@gmail.com", "pass" => "dfvkldfmlcdkfv")) - заполняем поле таблицы login и pass данными

Если перевести в SQL запрос
INSERT INTO `table` (`login`, `pass`) VALUES ("example@gmail.com", "dfvkldfmlcdkfv");

->send() - отправка запроса и получение id вставленной записи!

```

### 3.Редактирование записей 

```
_MainModel::table("table")->edit(array("field1" => "значение1", "field2" => "значение2"), array("id" => 1))->send()

->edit(array("field1" => "значение1", "field2" => "значение2") - заполняем поля таблицы данными, которые хотим отредактировать

->send() - отправка запроса, при редактировании нечего не возвращается.

UPDATE `table` SET `field1` = 'значение1', `field2` = 'значение2' WHERE `table`.`id` = 1;

```

### 4.Удаление 
```
_MainModel::table("table")->delete(array("id" => 4))->send();

Если перевести в SQL запрос

DELETE FROM table WHERE id = 4;

->send() - отправка запроса, при редактировании нечего не возвращается.

 ```

### 5.Собственный запрос PDO

```
$stmt = self::$db->prepare("SELECT * FROM  `x16_table` WHERE id= :id AND status = :status");

$result_query = $stmt->execute(array(":id" => _MainModel::$params_url['id'], ":status" => _MainModel::$params_url['status']));

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

$this->viewJSON($rows);

// где _MainModel::$params_url['id'] - это GET или POST параметр, переданный в запросе.
```
### 5. Метод _MainModel::getQuery()

Получение отправляемого запроса в БД

```
SELECT id FROM x16_users WHERE login= :filter_login AND password= :filter_password
```