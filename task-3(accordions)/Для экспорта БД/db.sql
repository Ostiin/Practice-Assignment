-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2023 г., 15:12
-- Версия сервера: 10.1.48-MariaDB
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accordion`
--

CREATE TABLE `accordion` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviews` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `reviews_sum` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `review` int(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `accordion`
--

INSERT INTO `accordion` (`id`, `title`, `description`, `reviews`, `reviews_sum`, `review`) VALUES
(1, 'Выплата неустойки по ДДУ', 'Выплата неустойки по ДДУ является одним из наиболее распространенных способов защиты прав покупателей недвижимости. В соответствии с условиями договора, продавец обязан передать объект недвижимости в определенный срок. Если он не справляется с этой обязанностью, то покупатель имеет право требовать выплаты неустойки. Это компенсация за задержку передачи объекта, которая начисляется в процентах от стоимости договора за каждый день просрочки. Выплата неустойки по ДДУ является эффективным инструментом защиты прав покупателя и помогает снизить риски возможных задержек в сроках передачи недвижимости.', 0, 0, 0),
(2, 'Компенсация морального труда', 'Компенсация морального труда – это дополнительная выплата работникам, которые исполняют свои обязанности с особой ответственностью и эмоциональным напряжением. Это может быть связано с работой в сложных условиях, нестандартными задачами или сопровождением клиентов в трудных жизненных ситуациях. Компенсация морального труда помогает сохранить мотивацию и профессиональный интерес у работников, а также повышает качество предоставляемых услуг. Это важный элемент корпоративной культуры, который способствует укреплению команды и повышению уровня удовлетворенности персонала.', 0, 0, 0),
(3, 'Штраф в размере 50%', 'Штраф в размере 50% - это мера ответственности за нарушение правил и обязанностей. Такой штраф может быть применен к работникам, которые не выполняют свои обязанности в срок или нарушают правила безопасности. Это позволяет поддерживать дисциплину и порядок на рабочем месте, а также повышает эффективность работы коллектива. Однако, для того чтобы штраф был эффективным, необходимо четко определить условия его применения и объяснить работникам причины такой меры.', 0, 0, 0),
(4, 'Компенсация расходов по аренде жилья', 'Компенсация расходов по аренде жилья - это мера социальной поддержки работников, которые вынуждены снимать жилье в другом городе или регионе в связи с работой. Такая компенсация может быть предоставлена в виде оплаты аренды или частичного возмещения расходов на жилье. Это позволяет снизить финансовую нагрузку на работника и обеспечить ему достойные условия проживания. Однако, для того чтобы компенсация была эффективной, необходимо четко определить условия ее предоставления и объяснить работникам порядок ее получения. Также следует учитывать, что компенсация может быть предоставлена только при наличии соответствующих документов и соблюдении законодательных требований.', 0, 0, 0),
(5, 'Компенсация убытков по ипотеке', 'Вот почему вам следует сосредоточиться на тестировании кампаний, прежде чем делиться ими с пользователями. В противном случае человек может увидеть ваше письмо обрезанным, со смещенным макетом, не отвечающим на запросы или неподдерживаемым содержанием. В результате плохой UX гарантирован, и есть большая вероятность, что клиенты не вернутся. ', 0, 0, 0),
(6, 'Возмещение иных расходов', 'Возмещение иных расходов - это мера социальной поддержки работников, которые несут дополнительные расходы в связи с выполнением своих трудовых обязанностей. К таким расходам могут относиться затраты на проезд, питание, медицинское обслуживание и другие. Возмещение этих расходов позволяет снизить финансовую нагрузку на работника и обеспечить ему более комфортные условия работы. Однако, для того чтобы возмещение было эффективным, необходимо четко определить условия его предоставления и объяснить работникам порядок его получения. Также следует учитывать, что возмещение может быть предоставлено только при наличии соответствующих документов и соблюдении законодательных требований.', 0, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accordion`
--
ALTER TABLE `accordion`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accordion`
--
ALTER TABLE `accordion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
