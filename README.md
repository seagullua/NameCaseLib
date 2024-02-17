# NameCaseLib
NameCaseLib — библиотека PHP5, предназначенная для автоматического склонения ФИО в русском и украинском языках. Уникальная особенность состоит в том, что библиотека содержит одинаковые методы для работы с ФИО на русском и украинском языках.

## Инструкция
- Демонстрация работы - http://namecaselib.com/case/
- Документация - http://namecaselib.com/book/


Installation
------------

### Install With Composer

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require nazbav/name-case-lib "dev-master"
```

Or, you may add

```
"nazbav/name-case-lib": "dev-master"
```

to the require section of your `composer.json` file and execute `php composer.phar update`.

Change Log
------------

## 0.4.4 (2024-02-17) (@nazbav)
- remove version field

## 0.4.3 (2024-02-17) (@vadykoo)
- use NCLStr; for Ukrainian language, the same as for Russian #1

## 0.4.2 (2023-12-28) (@nazbav)
- Delete includes
- Add PSR-4 support

## 0.4.1 (2016-11-23)
- Rules updates (5 years of work)
- Any pull requests with the new rules updates will be merged now

## 0.4 (2011-07-09)
- Полная переработка кода
- Создание для каждого слова класса NCLNameCaseWord
- Правила для склонения имен и фамилий объединены
- Множество исправлений правил
- Полная переработка ядра системы
- Добавлена поддержка работы с разными регистрами слов

## 0.3 (2011-07-02)
- Добавлен украинский язык
- Все функции склонения работают одинаково для русского и украинского языков
- Создан класс с общими функциями
- Украинский язык может склонять в «кличний відмінок»

## 0.1.2 (2011-05-05)
- Написана функция поиска имени, фамилии, отчества в строке.
- Добавлена функция быстрого склонения NCLNameCaseRu::q(), которая принимает обязательный параметр ФИО в любом формате и возвращает строку в нужно падеже.

## 0.1.1 (2011-05-03)
- Написана функция определения пола NCLNameCaseRu::GenderAutoDetect() — отлично справляется с парами Имя Фамилия, по моим тестам дает 100% прохождение тестов (2000 пар имен и фамилий). Если указано отчество, пол определяет без проблем. Для просто имен вероятность правильного определения больше 98,5%. Для просто фамилий — больше 96%.

## 0.1.0 (2011-05-01)
- Первая версия библиотеки
