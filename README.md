Тестовое задание для разработчика

### Задача:
Пусть в г. Санкт-Петербург имеется 5 пунктов выдачи с заданными географическими координатами.

|	|имя		|широта		    |долгота|
|---|-----------|---------------|-------|
|1	|Альдераан	|59.9573		|30.3485|
|2	|Беспин		|60.0025		|30.3113|
|3	|Дагоба		|59.9485		|30.3857|
|4	|Корусант	|59.9894		|30.2587|
|5	|Мустафар	|59.8836		|30.3575|


Требуется создать веб-сервис, который предлагает пользователю ввести его ФИО, телефон и адрес, 
и по введенному адресу определяет ближайший пункт выдачи и расстояние до него.
Пользователю выводится его имя, форматированный телефон и информация о пункте выдачи.

---
Файлы в [архиве](test_peshkariki.zip):
- [`Toolkit.php`](Toolkit.php) - вспомогательный класс, содержащий метод для форматирования номера телефона, 
а также метод для опеределения географических координат введенного адреса.
- [`CandidateAbstract.php`](CandidateAbstract.php) - абстрактный класс. 
- [`ajax.php`](ajax.php) - файл для AJAX-запроса.
---
Требуется создать файл [`Candidate.php`](Candidate.php) и объявить в нем класс `Candidate`, который будет наследовать `CandidateAbstract`.
Также требуется создать файл, в котором будет находится форма ввода ФИО, телефона, адреса, 
а также кнопка, при нажатии на которую запускается процесс определения ближайшего пункта выдачи.
После успешного выполнения определения ближайшего пункта в `div` на странице должен выводится результат в виде
"\[ФИО\] (\[форматированный телефон\]): ближайший пункт выдачи \[название пункта\] находится на расстоянии \[расстояние до пункта\]км"

Предполагаемая последовательность процессов:
1. Пользователь заходит на страницу и видит поля для ввода *ФИО*, *телефона*, *адреса*, а также кнопку "Найти пункт выдачи"
2. Пользователь вводит данные и нажимает на кнопку. Необходимо произвести валидацию введенных данных. Если поля *ФИО*, 
*телефон* и *адрес* заполнены корректно, средствами `javascript` отправляется AJAX-запрос, обрабатываемый файлом [`ajax.php`](ajax.php)
3. [`ajax.php`](ajax.php) создает экземпляр класса Candidate и передает управление методу run
4. Методы класса Candidate обрабатывают полученные данные и определяют название ближайшего пункта выдачи и расстояние до него
5. Полученные результаты добавляются в ответ `AJAX`-запроса и средствами `javascript` выводятся в `div` на странице

Требования:
1. Информация о пунктах выдачи хранится исключительно в базе данных
2. Изменять содержимое исходных файлов запрещено
3. Отправка и обработка `AJAX`-запроса, а также вывод результатов в `div` должны производится средствами "чистого" `javascript` (библиотеку `jQuery` не использовать)
4. Расстояние выводится в километрах с округлением до <u>1 знака после запятой</u>.

---
### Решение:
Все необходимые файлы добавлены в проект
#### Установка через Docker
Запустите контейнер

    docker-compose up -d

Вы можете получить доступ к приложению по указанному URL-адресу:

    http://localhost

 ---
translation for foreigners:

Test task for the developer

### The Problem:
Let's assume that there are 5 pick-up points with the specified geographical coordinates in Saint Petersburg.

|   | name    | latitude |longitude|
|---|---------|----------|---------|
|1  |Alderaan |59.9573   |30.3485  |
|2  |Bespin   |60.0025   |30.3113  |
|3  |Dagobah  |59.9485   |30.3857  |
|4  |Coruscant|59.9894   |30.2587  |
|5  |Mustafar |59.8836   |30.3575  |

You need to create a web service prompts the user to enter their full name, phone number, and address,
and uses the entered address to determine the nearest pick-up point and the distance to it.
The user is shown their name, formatted phone number, and information about the pick-up point.

---
Files in [archive](test_peshkariki.zip):
- [`Toolkit.php`](Toolkit.php) - an auxiliary class contains a method for formatting the phone number,
as well as a method for determining the geographical coordinates of the entered address.
- [`CandidateAbstract.php`](CandidateAbstract.php) - an abstract class. 
- [`ajax.php`](ajax.php) - file for the AJAX request.
---
You need to create a file [`Candidate.php`](Candidate.php) and declare the `Candidate` class in it, which will inherit 'CandidateAbstract'.
You also need to create a file that contains a form for entering your full name, phone number, and address,
as well as a button that starts the process of determining the nearest pick-up point.
After successfully determining the nearest item in the `div` the page should display the result in the form
"\[full name\] (\[formatted phone number\]): the nearest pick-up point \[name of the point\] is located at a distance of \[distance to the point\]km"

Expected sequence of processes:
1. The user goes to the page and sees the fields for entering *full name*, *phone*, *address*, as well as the "Find pick-up point button".
2. The user enters data and clicks on the button. The entered data must be validated. If the *full name*,
*phone*, and *address* fields are filled in correctly, an AJAX request is sent using javascript, which is processed by the file [`ajax.php`](ajax.php).
3. [`ajax.php`](ajax.php) creates an instance of the Candidate class and passes control to the run method.
4. methods of the Candidate class process the received data and determine the name of the nearest delivery point and the distance to it
5. the Results obtained are added to the response of the 'AJAX' request and output to the `div` using `javascript` on page.

Requirements:
1. Information about the outlets should be stored exclusively in the database.
2. It is forbidden to Change the contents of the source files.
3. Sending and processing of the `AJAX` request, as well as output of the results to the `div` must be performed using pure javascript (without usage of `jQuery`).
4. The distance should be displayed in kilometers rounded to <u>1 decimal place</u>.

---
#### Solution:
All necessary files added to the project
##### Install with Docker
Start the container

    docker-compose up -d

You can then access the application through the following URL:

    http://localhost
