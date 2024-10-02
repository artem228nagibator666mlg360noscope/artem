-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 29 2024 г., 13:44
-- Версия сервера: 5.6.43
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `homework`
--

-- --------------------------------------------------------

--
-- Структура таблицы `analysis`
--

CREATE TABLE `analysis` (
  `analysis_id` int(11) NOT NULL,
  `analysis_name` varchar(255) NOT NULL,
  `analysis_cost` int(11) NOT NULL,
  `analysis_group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `analysis`
--

INSERT INTO `analysis` (`analysis_id`, `analysis_name`, `analysis_cost`, `analysis_group`) VALUES
(1, 'Анализ 1', 20000, 'Группа 1'),
(2, 'Анализ 2', 40000, 'Группа 2'),
(3, 'Анализ 3', 60000, 'Группа 3');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `groups_id` int(11) NOT NULL DEFAULT '0',
  `groups_name` varchar(25) DEFAULT NULL,
  `groups_temp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`groups_id`, `groups_name`, `groups_temp`) VALUES
(1, 'Группа 1', '20'),
(2, 'Группа 2', '0'),
(3, 'Группа 3', '-30');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `orders_date` date NOT NULL,
  `orders_idan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`orders_id`, `orders_date`, `orders_idan`) VALUES
(1, '2018-02-05', 1),
(2, '2020-08-15', 2),
(3, '2021-12-25', 3),
(4, '2022-07-01', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `analysis`
--
ALTER TABLE `analysis`
  ADD PRIMARY KEY (`analysis_id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`groups_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `analysis`
--
ALTER TABLE `analysis`
  MODIFY `analysis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
