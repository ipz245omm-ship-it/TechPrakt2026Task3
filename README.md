# PHP Frameworks Lab

Лабораторна робота з основ роботи з PHP фреймворками Symfony та Laravel.

**Студент:** Максим Орлівський  
**Група:** ІПЗ-24-5  
**Варіант:** 114  
**Тема:** Answer  

---

## Структура проєкту

- laravel — проєкт на Laravel 13  
- symfony — проєкт на Symfony 8.1  
- postman — Postman collection файли  

---

## Модель даних: Answer

| Поле | Тип | Опис |
|------|-----|------|
| id | int | Унікальний ідентифікатор |
| answer | string | Текст відповіді |
| created_at | datetime | Дата створення |
| updated_at | datetime | Дата оновлення |

---

## CRUD API

| Метод | Endpoint | Опис |
|------|----------|------|
| GET | /api/answers | Отримати всі записи |
| POST | /api/answers | Створити запис |
| PATCH | /api/answers/{id} | Оновити запис |
| DELETE | /api/answers/{id} | Видалити запис |

---

## Запуск Laravel

cd laravel  
php artisan serve  

---

## Запуск Symfony

cd symfony  
php -S 127.0.0.1:8000 -t public  

---

## Версії середовища

PHP 8.5.7  
Laravel 13.17.0  
Symfony 8.1.0  
Composer 2.10.1  
Git 2.54.0.windows.1  

---

## Postman

laravel.json  
symfony.json