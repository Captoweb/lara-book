-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 21 2020 г., 13:45
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lara-books`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `description`, `introduction`, `image`, `publication_date`, `created_at`, `updated_at`) VALUES
(1, 'Новая большая книга CSS3', 'Макфарланд Дэвид', 'Технология CSS3 позволяет создавать профессионально оформленные сайты, но тонкости этого языка могут оказаться довольно сложными даже для опытных веб-разработчиков. Полностью переработанное четвертое издание этой книги поможет вам поднять навыки работы с HTML и CSS на новый уровень; она содержит множество ценных советов, описаний приемов, а также инструкции, написанные в стиле справочного руководства. Веб-дизайнеры, как начинающие, так и опытные, при помощи этой книги быстро научатся создавать красивые веб-страницы, которые при этом молниеносно загружаются как на ПК, так и на мобильных устройствах.', 'Технология CSS3 позволяет создавать профессионально оформленные сайты, но тонкости этого языка могут оказаться довольно сложными даже для опытных веб-разработчиков.', 'uploads/i6PE0zWAFw7O0XT0HGs8FmKy8AOK0T3dGnCQEpjH.jpeg', 2017, NULL, NULL),
(2, 'PHP 7', 'Котеров Д В, Симдянов И В', 'Отражены радикальные изменения в языке PHP, произошедшие с момента выхода предыдущего издания: трейты, пространство имен, анонимные функции, замыкания, элементы строгой типизации, генераторы, встроенный Web-сервер и многие другие возможности. Приведено описание синтаксиса PHP 7, а также функций для работы с массивами, файлами, СУБД MySQL, memcached, регулярными выражениями, графическими примитивами, почтой, сессиями и т. д. ', 'Отражены радикальные изменения в языке PHP, произошедшие с момента выхода предыдущего издания: трейты, пространство имен, анонимные функции, замыкания,', 'uploads/bSNdWAdrnvEoh1DqIf0vKXq8gZ9wtCjx5LvBSazZ.jpeg', 2019, NULL, NULL),
(3, 'JavaScript и jQuery. Исчерпывающее руководство', 'Макфарланд Дэвид', 'Язык программирования JavaScript позволяет усовершенствовать ваши веб-страницы с помощью анимации, интерактивных элементов и визуальных эффектов, но его не так просто изучить и освоить. Новое, обновленное и расширенное издание уже ставшей классикой книги доступно объясняет основы языка JavaScript и показывает, как можно экономить время и силы с помощью библиотеки jQuery, содержащей готовые фрагменты кода JavaScript, и новейшего плагина jQuery UI. ', 'Язык программирования JavaScript позволяет усовершенствовать ваши веб-страницы с помощью анимации, интерактивных элементов и визуальных эффектов, но его не так просто изучить и освоить.', 'uploads/8BtIkpItFL6p6X0uS8DPkYIq7q8919AwFYESWE7p.webp', 2017, NULL, NULL),
(4, 'Командная строка Linux', 'Колисниченко Денис Николаевич', 'Рассмотрены команды Linux, основы работы в командной строке, а также настройка системы с помощью программ, обладающих только текстовым интерфейсом. Работа с системой выполняется только в режиме консоли, что требует определенной квалификации пользователя. Подробно описаны наиболее полезные команды Linux, особенности файловой системы Linux, криптографическая файловая система eCryptfs, система инициализации systemd, загрузчики GRUB и GRUB2, ядро 3.x. С позиции пользователя оценены интерактивные возможности оболочки zsh. Даны практические примеры разработки сценариев на языках оболочек bash и tcsh. ', 'Рассмотрены команды Linux, основы работы в командной строке, а также настройка системы с помощью программ, обладающих только текстовым интерфейсом.', 'uploads/7jNni5bV89PQF1baTDG3Vqg9qPh1VY0xtGejC4ib.jpeg', 2014, NULL, NULL),
(5, 'jQuery в действии ', 'Бибо Беэр, Кац Иегуда', 'Третье издание книги \"jQuery в действии\" - это динамичное и исчерпывающее руководство по библиотеке jQuery. В книге рассматриваются задачи, с которыми приходится сталкиваться при реализации практически любого веб-проекта. Книга ориентирована на читателей, обладающих минимальным опытом JavaScript, содержит новые примеры и упражнения, а также глубоко и практично раскрывает темы, связанные с этой библиотекой. Вы узнаете, как делать обход HTML-документов, обрабатывать события, создавать анимацию, писать плагины, и даже освоите модульное тестирование кода. Уникальные лабораторные работы помогают закрепить каждую концепцию на реальных примерах кода. В книгу добавлено несколько новых глав, из которых вы узнаете, как работать с новейшими фреймворками и одностраничными приложениями.', 'В книге рассматриваются задачи, с которыми приходится сталкиваться при реализации практически любого веб-проекта.', 'uploads/fCQL982FBIYTmv8Xjj53SjiK4POBitX3W2AX5kwA.jpeg', 2017, NULL, NULL),
(6, 'Laravel. Полное руководство', 'Стаффер Мэтт', 'Скорость и простота. Стремительная разработка приложений, обширная экосистема и набор инструментов Laravel позволяют быстро создавать сайты и приложения, отличающиеся чистым удобочитаемым кодом.\r\nМэтт Стаффер, известный преподаватель и ведущий разработчик, предлагает как общий обзор фреймворка, так и конкретные примеры работы с ним. Опытным PHP-разработчикам книга поможет быстро войти в новую тему, чтобы реализовать проект на Laravel. В издании также раскрыты темы Laravel Dusk и Horizon, собрана информация о ресурсах сообщества и других пакетах, не входящих в ядро Laravel.\r\n', 'Скорость и простота. Стремительная разработка приложений, обширная экосистема и набор инструментов Laravel позволяют быстро создавать сайты и приложения, отличающиеся чистым удобочитаемым кодом.', 'uploads/zqlYyjqt5Whcl7AAudFaKCIpIRx1tgsx75UH7xzm.jpeg', 2020, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_17_112532_create_books_table', 1),
(4, '2020_12_21_091504_alter_table_users', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'User1', 'user1@com.com', NULL, '$2y$10$KrnKUi9/YpS3XIgvGeBMLeV5flcAKU8gUfFMMXg3VSKykpHmk2dfW', NULL, '2020-12-20 10:40:14', '2020-12-20 10:40:14', 0),
(2, 'Admin 1', 'admin@mail.ru', NULL, '$2y$10$Rao9aRRbXnVb0VhMFeufBeIp10cEzjADY27W5Fy7cyX1rXP0Y7oMq', NULL, '2020-12-21 06:09:49', '2020-12-21 06:09:49', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
