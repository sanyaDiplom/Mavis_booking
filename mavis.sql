-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 09 2025 г., 23:01
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mavis`
--

-- --------------------------------------------------------

--
-- Структура таблицы `apparts`
--

CREATE TABLE `apparts` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `corpus` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `section` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `square_1` float NOT NULL,
  `square_2` float NOT NULL,
  `ceiling_height` float NOT NULL,
  `finishing` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `apparts`
--

INSERT INTO `apparts` (`id`, `project_id`, `corpus`, `number`, `floor`, `type_id`, `img`, `price`, `status_id`, `section`, `square_1`, `square_2`, `ceiling_height`, `finishing`) VALUES
(5, 1, '1', 10, 1, 1, 'assets/img/67cd2682ebd24.svg', '3870000', 3, '1', 21, 14, 2.6, 'Черновая'),
(6, 1, '1', 345, 7, 1, 'assets/img/67cd2e143ee42.svg', '3971000', 2, '2', 24, 18, 2.6, 'Черновая'),
(7, 1, '1', 567, 10, 1, 'assets/img/67cd2ecc7d2eb.svg', '4216646', 1, '6', 25, 16, 2.6, 'Черновая'),
(8, 1, '1', 516, 17, 2, 'assets/img/67cd30600d1dc.svg', '5128101', 1, '4', 30, 10, 2.6, 'Черновая'),
(9, 1, '1', 346, 6, 2, 'assets/img/67cd344a54e5c.svg', '5330100', 1, '2', 33, 11, 2.6, 'Черновая'),
(10, 1, '1', 179, 13, 3, 'assets/img/67cd352fbdb2d.svg', '7 623 780', 1, '1', 42, 23, 2.6, 'Черновая'),
(11, 1, '1', 1024, 14, 3, 'assets/img/67cd35f38dd4c.svg', '9 481 084', 1, '4', 53, 26, 2.6, 'Чистовая'),
(12, 2, '1', 406, 6, 1, 'assets/img/67cd371c35126.svg', '5163312', 1, '4', 29, 20, 2.6, 'Черновая'),
(13, 3, '4', 12, 2, 1, 'assets/img/67cd3797aa2df.svg', '4158224', 1, '1', 22, 15, 2.6, 'Черновая'),
(14, 4, '3', 239, 1, 1, 'assets/img/67cd38057c126.svg', '4859250', 1, '2', 20.46, 13.55, 2.6, 'Чистовая');

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `apparts_id` int(11) NOT NULL,
  `meneger_id` int(11) NOT NULL DEFAULT '14',
  `time_booking` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `apparts_id`, `meneger_id`, `time_booking`, `status_id`) VALUES
(9, 13, 5, 15, '2025-03-09 15:45:20', 3),
(13, 13, 6, 14, '2025-03-09 18:13:27', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `booking_status`
--

CREATE TABLE `booking_status` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `booking_status`
--

INSERT INTO `booking_status` (`id`, `name`) VALUES
(1, 'доступна'),
(2, 'забронирована пользователем'),
(3, 'бронь подтверждена');

-- --------------------------------------------------------

--
-- Структура таблицы `call_back`
--

CREATE TABLE `call_back` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `call_back`
--

INSERT INTO `call_back` (`id`, `name`, `phone_number`, `status`, `date`) VALUES
(1, 'Иван', '88003001234', 1, '2025-03-07 09:52:45'),
(2, 'Светлана', '+79293445757', 0, '2025-03-09 22:13:42');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `meneger_id` int(11) NOT NULL DEFAULT '14',
  `feedback` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meneger_answer` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''' ''',
  `status_id` int(11) NOT NULL DEFAULT '1',
  `time_feedback` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_anser` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `meneger_id`, `feedback`, `meneger_answer`, `status_id`, `time_feedback`, `time_anser`) VALUES
(1, 13, 14, 'Здравствуйте. Это перовое обращение для тестирования системы.', 'Спасибо за обращение. Мы вам перезвоним.', 2, '2025-03-09 18:27:44', '2025-03-09 08:56:43'),
(2, 13, 14, 'Это второе обращение для тестирования системы обратной связи с пользователем.', 'Спасибо за обращение. Мы вам перезвоним.', 2, '2025-03-09 18:28:57', '2025-03-09 08:56:52');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback_status`
--

CREATE TABLE `feedback_status` (
  `id` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback_status`
--

INSERT INTO `feedback_status` (`id`, `name`) VALUES
(1, 'новое'),
(2, 'отвечено');

-- --------------------------------------------------------

--
-- Структура таблицы `meneger_call_back`
--

CREATE TABLE `meneger_call_back` (
  `id` int(11) NOT NULL,
  `call_id` int(11) NOT NULL,
  `meneger_id` int(11) NOT NULL,
  `time_call` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `meneger_call_back`
--

INSERT INTO `meneger_call_back` (`id`, `call_id`, `meneger_id`, `time_call`) VALUES
(1, 1, 15, '2025-03-09 22:13:06');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descreption` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `name`, `descreption`, `img`) VALUES
(1, 'Авиатор', 'Сдача в 2027 году. 1265 квартир.', 'assets/img/aviator.jpg'),
(2, 'Фотограф', '628 квартир. Сдача в 2025 году.', 'assets/img/fotograf.jpg'),
(3, 'Урбанист', '628 квартир. Сдача в 2025 году.', 'assets/img/urbanist.jpg'),
(4, 'Графика', '405 квартир. Сдача с 2026 году.', 'assets/img/grafika.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `type_apparts`
--

CREATE TABLE `type_apparts` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type_apparts`
--

INSERT INTO `type_apparts` (`id`, `name`) VALUES
(1, 'Студия'),
(2, '1 комната'),
(3, '2 комнаты'),
(4, '3 комнаты');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `patronymic`, `surname`, `email`, `tel`, `password`, `status`) VALUES
(12, 'Ivanov', 'Иван', 'Иванович', 'Иванов', 'ivanov@mail.ru', '+7(913)999-88-77', '1bbd886460827015e5d605ed44252251', 0),
(13, 'Petrov', 'Петр', 'Иванович', 'Петровский', 'petrov@mail.ru', '+7(913)999-77-66', 'ed2b1f468c5f915f3f1cf75d7068baae', 0),
(14, 'admin', 'Анна', 'Александровна', 'Петрова', 'admin@mail.ru', '+7(800)800-11-22', 'f6fdffe48c908deb0f4c3bd36c032e72', 2),
(15, 'meneger', 'Александр', 'Владимирович', 'Сидоров', 'meneger@mail.ru', '+7(999)999-77-66', '5e9d11a14ad1c8dd77e98ef9b53fd1ba', 1),
(16, 'kolya', 'Николай', 'Николаевич', 'Самойлов', 'kolya@mail.ru', '+7(900)900-30-21', '821f3157e1a3456bfe1a000a1adf0862', 0),
(17, 'menegerIvan', 'Иван', 'Петрович', 'Иванов', 'iva@mail.ru', '+79009018930', 'fed07335bf7caabd2151dd6d926fa2f9', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `apparts`
--
ALTER TABLE `apparts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apparts_id` (`apparts_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `meneger_id` (`meneger_id`);

--
-- Индексы таблицы `booking_status`
--
ALTER TABLE `booking_status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `call_back`
--
ALTER TABLE `call_back`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meneger_id` (`meneger_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Индексы таблицы `feedback_status`
--
ALTER TABLE `feedback_status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `meneger_call_back`
--
ALTER TABLE `meneger_call_back`
  ADD PRIMARY KEY (`id`),
  ADD KEY `call_id` (`call_id`),
  ADD KEY `meneger_id` (`meneger_id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type_apparts`
--
ALTER TABLE `type_apparts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `apparts`
--
ALTER TABLE `apparts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `booking_status`
--
ALTER TABLE `booking_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `call_back`
--
ALTER TABLE `call_back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `feedback_status`
--
ALTER TABLE `feedback_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `meneger_call_back`
--
ALTER TABLE `meneger_call_back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `type_apparts`
--
ALTER TABLE `type_apparts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `apparts`
--
ALTER TABLE `apparts`
  ADD CONSTRAINT `apparts_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `apparts_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type_apparts` (`id`),
  ADD CONSTRAINT `apparts_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `booking_status` (`id`);

--
-- Ограничения внешнего ключа таблицы `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`apparts_id`) REFERENCES `apparts` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `booking_status` (`id`),
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`meneger_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`meneger_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `feedback_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `feedback_status` (`id`);

--
-- Ограничения внешнего ключа таблицы `meneger_call_back`
--
ALTER TABLE `meneger_call_back`
  ADD CONSTRAINT `meneger_call_back_ibfk_1` FOREIGN KEY (`call_id`) REFERENCES `call_back` (`id`),
  ADD CONSTRAINT `meneger_call_back_ibfk_2` FOREIGN KEY (`meneger_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
