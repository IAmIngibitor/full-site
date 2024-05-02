-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 02 2024 г., 17:40
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `travel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `remarks`
--

CREATE TABLE `remarks` (
  `ID_user` int NOT NULL,
  `topic` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `remarks`
--

INSERT INTO `remarks` (`ID_user`, `topic`, `text`) VALUES
(1, 'Отзыв о туре', 'Мне очень понравилось!'),
(3, 'Без темы', 'Ни разу не покупал здесь тур но уже знаю что это будет небезопасно: мне, тем, кого я с собой возьму, а также моему кошельку.'),
(2, '(Администратор)К теме выше', '(ಥ﹏ಥ)');

-- --------------------------------------------------------

--
-- Структура таблицы `tours`
--

CREATE TABLE `tours` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `programm` text NOT NULL,
  `photo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tours`
--

INSERT INTO `tours` (`id`, `name`, `programm`, `photo`) VALUES
(1, 'Крым', 'Приглашаем вас в туры по горному Крыму. Вы увидите экзотические уголки полуострова, бывшие дворянские имения, царские дворцы и сказочные парки.', 'img/crimea.jpg'),
(2, 'Кавказ', 'Лучшие морские курорты Кавказа ждут вас.', 'img/kavkaz.jpg'),
(3, 'Алтай', 'Приглашаем вас в тур по Алтаю —путешествие, в котором от красоты природы хочется плакать. Потрясающие виды, необычные отели, уютная атмосфера \"своих\" людей, а самое главное, впечатления!\r\n\r\n', 'img/altay.jpg'),
(4, 'Санкт-Петербург', 'Вы познакомитесь с главными достопримечательностями Петербурга и прогуляетесь по дворцам и паркам, а по желанию даже сможете прокатиться по каналам, подняться на крыши и посмотреть на развод мостов.', 'img/peter.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Login` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Name`, `Login`, `Pass`) VALUES
(1, 'Иван', 'Ivan_1111', '11111'),
(2, 'Петр', 'Petr_222', '22222'),
(3, 'kirill', 'kirilla', '12345');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
