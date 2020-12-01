-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 01 2020 р., 13:18
-- Версія сервера: 10.4.14-MariaDB
-- Версія PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `post_db`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'pk',
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Ботаніка'),
(2, 'Комедія'),
(3, 'Комп\'ютери'),
(4, 'Кухня');

-- --------------------------------------------------------

--
-- Структура таблиці `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'pk',
  `id_user` int(11) UNSIGNED NOT NULL COMMENT 'fk',
  `id_post` int(11) UNSIGNED NOT NULL COMMENT 'fk',
  `Desctiption` text NOT NULL,
  `Date_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `comments`
--

INSERT INTO `comments` (`id`, `id_user`, `id_post`, `Desctiption`, `Date_Time`) VALUES
(1, 1, 1, 'Not Bad , Not Bad, now you!', '2020-11-11 18:02:55'),
(2, 2, 1, 'Nooooooooooo', '2020-11-07 18:09:58'),
(3, 2, 1, 'Ill find you', '2020-11-07 18:11:15'),
(4, 3, 2, 'Google.com', '2020-12-16 08:26:30'),
(5, 4, 3, 'Bad', '2020-11-07 18:11:38');

-- --------------------------------------------------------

--
-- Структура таблиці `post`
--

CREATE TABLE `post` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'pk',
  `user_id` int(11) UNSIGNED NOT NULL COMMENT 'fk',
  `category_id` int(11) UNSIGNED NOT NULL COMMENT 'fk',
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` enum('saved','posted','inprocess','rejected','approved') NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `post`
--

INSERT INTO `post` (`id`, `user_id`, `category_id`, `title`, `description`, `status`, `date`) VALUES
(1, 1, 1, 'Зелені рослини', 'Зеле́ні росли́ни — царство живих організмів. Назва була запропонована у 1981[1] році, щоб відрізнити представників царства від попереднього визначення рослин, які до того не утворювали монофілетичну групу. Також царство відоме під назвою Chlorobionta[2] або група Chlorophyta/Embryophyta.[3] Більшість членів царства були включені до царства Рослини (Plantae) в 1866 Ернстом Геккелем. Представники царства — автотрофні організми, для яких є характерною здатність до фотосинтезу та наявність щільної клітинної оболонки, яка утворена здебільшого целюлозою. Запасною речовиною у рослин є, як правило, крохмаль. Рослини є першою ланкою всіх харчових ланцюжків, так що від них залежить життя тварин. Вони є джерелом більш як десяти тисяч біологічно активних речовин, які діють на організм людини та тварин, зокрема при вживанні у їжу.\r\n\r\nВивченням рослин займається ботаніка.', 'posted', '2020-11-17 12:00:01'),
(2, 2, 2, 'Назад в майбутнє', '«Назад у майбутнє» (англ. Back to the Future) — культовий американський фантастичний пригодницький фільм режисера Роберта Земекіса та виконавчих продюсерів Стівена Спілберга, Френка Маршалла та Кетлін Кеннеді. Прем\'єра відбулася 3 липня 1985 року в США і Канаді. Дістав рейтинг PG від організації Motion Picture Association of America (MPAA) — «Дітям рекомендується перегляд спільно з батьками».\r\n\r\nНа 1 серпня 2020 року фільм займав 35-у позицію у списку «250 найрейтинговіших фільмів IMDb».\r\n\r\nСценаристами фільму стали Боб Ґейл і Роберт Земекіс. У фільмі знімались Майкл Джей Фокс у ролі Марті МакФлая, а також Крістофер Ллойд, Леа Томпсон, Криспін Гловер і Томас Ф. Вілсон.\r\n\r\n«Назад у майбутнє» — це історія про підлітка, що випадково потрапив із 1985 в 1955 рік. Він натрапляє на своїх батьків, учнів середньої школи, й випадково пробуджує романтичний інтерес з боку своєї матері. Марті мусить компенсувати завдану шкоду історії, примусивши своїх батьків покохати одне одного, а також він має знайти спосіб повернутися назад у 1985 рік.\r\n\r\nЧисленні студії відхиляли сценарій, проте кінокомпанія Universal Pictures не відмовила молодим авторам. Продюсером фільму став Стівен Спілберг.\r\n\r\nФільм став найуспішнішим фільмом року, зібравши понад 380 млн доларів США по всьому світу, а також діставши численні позитивні відгуки критиків. Він здобув премію Г\'юго за найкращу постановку і Saturn Award за найкращий фантастичний фільм, а також «Оскар»[2], «Золотий глобус» і BAFTA — найпрестижніші кінонагороди США і Великої Британії. Президент США Рональд Рейган навіть уживав цитати з фільму. 2006 року Бібліотека Конгресу США обрала цей фільм для збереження в Національний реєстр фільмів, а в липні 2008 року Американський інститут кіномистецтва визнав фільм найкращим у жанрі наукової фантастики.\r\n\r\nФільм започаткував франшизу «Назад у майбутнє 2» (1989) і «Назад у майбутнє 3» (1990), а також серію мультфільмів і коміксів.', 'posted', '2020-11-24 07:00:01'),
(3, 3, 3, 'Процесор', 'Проце́сор (англ. processor, нім. Prozessor) — основний компонент комп\'ютера, призначений для керування всіма його пристроями та виконання арифметичних і логічних операцій над даними.\r\n\r\nЦентральний процесор — частина комп\'ютера, що реалізує процес переробки інформації і координує роботу периферійних пристроїв. У комп\'ютері може бути декілька процесорів, що працюють паралельно — такі комп\'ютери називають багатопроцесорними.\r\nСкладна логічна програма, що є частиною системи програмування; підсистема обробки даних, що перетворює кодовану інформацію отриману від системи введення. Приклад: текстовий процесор.\r\nПоширені види цифрових процесорів:\r\n\r\nЦентральний процесор (CPU). Якщо процесор виготовлений у вигляді інтегральної схеми — мікропроцесор.\r\nГрафічний процесор (GPU)\r\nПрискорений процесор (APU): центральний і графічний процесори, поєднані у одній мікросхемі\r\nПроцесор цифрових сигналів (DSP)', 'posted', '2020-11-09 15:00:05'),
(4, 4, 4, 'Приготування пиріжків', 'Інгредієнти\r\n1 стакан кефіру\r\n0.5 склянки олії\r\n1 пакетик (11 грамів) сухих дріжджів\r\n1 ч. ложка солі\r\n1 ст. ложка цукру\r\n3 стакана борошна\r\nПриготування: Кефір змішати олією й трохи підігріти, додати сіль і цукор, борошно просіяти і змішати з дріжджами, влити поступово кефірну суміш і замісити тісто, накрити і поставити в тепло на 30 хвилин. Поки тісто буде підходити, можна приготувати начинку. Деко застелити промасленим папером, сформувати пиріжки, укладати на деко швом вгору. Поки нагрівається духовка. дати їм трохи постояти (хвилин 10), потім змастити пиріжки яйцем. Випікати за температури 180-200 градусів до золотистого кольору.\r\n\r\nДо слова, з цього тіста можна пекти абсолютно все: піцу, пиріжки, булочки (в тісто можна додати ваніль, трохи більше цукру і трохи розтопленого маргарину). Тісто завжди виходить. Якщо вам здасться, що за 30 хвилин воно підійшло не надто сильно, не турбуйтеся, так і повинно бути, це тісто піднімається при випічці.\r\n', 'posted', '2020-11-01 03:00:10');

-- --------------------------------------------------------

--
-- Структура таблиці `post_likes`
--

CREATE TABLE `post_likes` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'pk',
  `user_id` int(11) UNSIGNED NOT NULL COMMENT 'fk',
  `post_id` int(11) UNSIGNED NOT NULL COMMENT 'fk',
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `post_likes`
--

INSERT INTO `post_likes` (`id`, `user_id`, `post_id`, `status`) VALUES
(1, 1, 3, 1),
(2, 2, 1, 1),
(3, 2, 4, 1),
(4, 1, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `post_photos`
--

CREATE TABLE `post_photos` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'pk',
  `id_post` int(11) UNSIGNED NOT NULL COMMENT 'fk',
  `Photo_Path` varchar(100) NOT NULL COMMENT 'Text(photo)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `post_photos`
--

INSERT INTO `post_photos` (`id`, `id_post`, `Photo_Path`) VALUES
(1, 1, 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.befunky.com%2Fimages%2Fprismic%2F2ba00f8e1b50'),
(2, 2, 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1508921912186-1d1a45e'),
(3, 3, 'https://www.google.com/imgres?imgurl=http%3A%2F%2Fimages.unsplash.com%2Fphoto-1529736576495-1ed4a29c'),
(4, 4, 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fs23527.pcdn.co%2Fwp-content%2Fuploads%2F2019%2F12');

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'pk',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `login`, `pass`) VALUES
(1, 'Vasia', 'vasia@gmail.com', '+380681236958', 'VasiaLogin', 'ggfdGFD%^55'),
(2, 'Petya', 'petya@gmail.com', '+380695895863', 'PetyaLogin', 'gfdg51g65fd'),
(3, 'Alina', 'alina@gmail.com', '+380681234888', 'AlinaLogin', 'ggfQWEQWFD%^55'),
(4, 'Katya', 'katya@gmail.com', '+380681236958', 'KatyaLogin', 'ggfdsfD%^55');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Індекси таблиці `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ibfk_1` (`id_user`),
  ADD KEY `comments_ibfk_2` (`id_post`);

--
-- Індекси таблиці `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`category_id`),
  ADD KEY `fk_user` (`user_id`);

--
-- Індекси таблиці `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Індекси таблиці `post_photos`
--
ALTER TABLE `post_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'pk', AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблиці `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'pk', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'pk', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'pk', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `post_photos`
--
ALTER TABLE `post_photos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'pk', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'pk', AUTO_INCREMENT=5;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE;

--
-- Обмеження зовнішнього ключа таблиці `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Обмеження зовнішнього ключа таблиці `post_likes`
--
ALTER TABLE `post_likes`
  ADD CONSTRAINT `post_likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Обмеження зовнішнього ключа таблиці `post_photos`
--
ALTER TABLE `post_photos`
  ADD CONSTRAINT `post_photos_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
