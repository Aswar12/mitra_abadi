-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 03:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitra_abadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `demand_rate` int(11) NOT NULL,
  `ordering_cost` decimal(10,2) NOT NULL,
  `holding_cost` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `unit_price`, `demand_rate`, `ordering_cost`, `holding_cost`, `created_at`, `updated_at`) VALUES
(1, 'qui', 'Ad et voluptatem omnis nam. Voluptate deleniti aut enim repellendus quia maxime. Repellat accusantium neque laboriosam impedit dolorem.', 36.09, 176082, 2.12, 1.66, '2023-10-04 07:12:40', '2023-10-04 07:12:40'),
(2, 'qui', 'Dolores ullam tempora quis laborum id et perspiciatis quo. Doloribus nihil quas excepturi amet aliquid. Quo pariatur totam sunt.', 37.32, 67789229, 4.75, 0.94, '2023-10-04 07:12:40', '2023-10-04 07:12:40'),
(3, 'officiis', 'Minus excepturi vitae eius blanditiis odit. Velit rerum quidem et beatae. Quis cupiditate ut occaecati aut sequi.', 7.05, 28358, 4.99, 0.71, '2023-10-04 07:12:40', '2023-10-04 07:12:40'),
(4, 'sit', 'Sed ut nihil vero consequuntur sapiente numquam officia. Possimus ea voluptatem qui et quis et porro. Molestias illum occaecati in quia nulla voluptatem inventore. Et quo mollitia libero culpa iure eum omnis.', 61.66, 5325, 7.04, 0.69, '2023-10-04 07:12:40', '2023-10-04 07:12:40'),
(5, 'quidem', 'Rerum voluptas qui et maxime adipisci. Perferendis molestiae quia debitis vitae et.', 98.27, 88456, 4.06, 1.80, '2023-10-04 07:12:40', '2023-10-04 07:12:40'),
(6, 'non', 'Sint totam numquam aperiam alias quaerat est. Amet harum molestiae et. Veniam minima libero ea ex consequuntur. Ut vero libero id non molestias ut.', 11.87, 4, 3.25, 0.57, '2023-10-04 07:12:40', '2023-10-04 07:12:40'),
(7, 'earum', 'Iure voluptatem quod asperiores voluptatem beatae aliquam beatae. Quisquam praesentium facilis odio. Sapiente et aperiam placeat.', 38.24, 949831968, 7.11, 1.34, '2023-10-04 07:12:40', '2023-10-04 07:12:40'),
(8, 'facilis', 'Temporibus consequatur eius deleniti unde. Natus cumque praesentium reprehenderit nostrum sapiente. Voluptatum rerum omnis in architecto. Eum dolorem vero laborum explicabo rerum magnam voluptatem.', 4.90, 12, 3.08, 0.89, '2023-10-04 07:12:40', '2023-10-04 07:12:40'),
(9, 'est', 'Molestiae nihil non illo minima et non praesentium vel. Dolores saepe numquam deserunt eaque ullam eum dolore. Nobis minima eos et est ea voluptates et.', 54.96, 188192, 1.46, 1.95, '2023-10-04 07:12:40', '2023-10-04 07:12:40'),
(10, 'maxime', 'Et animi quis id corporis. Reprehenderit omnis labore maxime debitis explicabo. Et voluptatibus maiores et facilis quasi voluptatum.', 81.12, 52543126, 4.48, 0.93, '2023-10-04 07:12:40', '2023-10-04 07:12:40'),
(11, 'aliquid', 'Et consequatur accusantium quia maiores placeat. Qui quia assumenda inventore non voluptas vel possimus. Animi qui cupiditate quisquam dolores. Et dignissimos vel inventore et ratione. Esse fugiat amet cupiditate reiciendis maxime consequuntur quasi.', 33.43, 6173, 3.65, 1.14, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(12, 'voluptatum', 'Molestiae non repellat accusantium eligendi suscipit sit. Quidem aliquam vero nostrum ut reiciendis quidem blanditiis. Magni animi est aperiam. Possimus sit cum tempore error.', 90.87, 24290, 8.88, 1.53, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(13, 'tempore', 'Eum maiores illum et soluta. Sapiente accusantium totam molestias distinctio atque in et. Doloremque neque omnis nam perferendis et. Blanditiis quia tenetur eum ratione sed ea unde aut. Sunt ex quia distinctio necessitatibus delectus est neque.', 59.72, 3421, 8.07, 1.17, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(14, 'dolores', 'Enim molestias quam ipsum dolorem non minima quis. Sit tenetur excepturi est odit aliquid nesciunt modi. Iure eligendi minima alias et.', 68.41, 853399, 7.91, 0.31, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(15, 'ad', 'Iste id non hic earum ipsum aliquam. Voluptas at ut recusandae sit pariatur voluptas a. Facere est aut nisi ea officiis vel.', 73.54, 79867, 5.88, 0.94, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(16, 'magni', 'Eum voluptatem ut ea tempora. Impedit saepe est modi unde deserunt voluptatem ipsum. Tempora vero commodi molestiae labore optio numquam possimus.', 80.34, 48315832, 4.69, 1.20, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(17, 'rem', 'Dolorem minima officiis minus ut beatae nihil architecto. Magni harum eligendi quod illum. Cumque quia sapiente minus quas.', 2.36, 2, 8.98, 1.45, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(18, 'recusandae', 'Consectetur est aspernatur quasi quia quia. Eum voluptatem exercitationem eius quod magnam.', 83.42, 587258237, 5.70, 1.64, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(19, 'dolor', 'Velit velit at tempora reiciendis optio voluptas. Provident et expedita voluptatem dolor eaque. Repellat ut eos quam sapiente est praesentium nisi. Ratione corrupti eum qui.', 37.21, 8491061, 5.55, 1.26, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(20, 'repellat', 'Quia cumque sed quae repellat nihil tempora. Iure aut fuga reiciendis. Accusamus error iste eius voluptatem recusandae autem fugit et. Culpa sunt excepturi tenetur quia amet amet sequi eius.', 70.48, 45, 2.71, 1.64, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(21, 'alias', 'Ut porro maiores sunt aperiam autem. Et minus quo id eius sit expedita similique. Qui sed sint aliquid quo repellat aperiam quis consequatur.', 80.82, 91, 4.27, 0.51, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(22, 'corrupti', 'Ullam occaecati repudiandae distinctio dolor fugiat ipsum enim. Et qui minus porro mollitia saepe et ut. Repellendus mollitia vero rerum suscipit est exercitationem quo.', 74.30, 667557561, 6.48, 1.01, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(23, 'iste', 'Magnam fugit est enim nobis recusandae molestiae. Deserunt quia rem facere nam. Tempore modi maiores qui et voluptates sunt minima. Animi magni tempora ratione neque quas saepe possimus rerum.', 89.68, 4967, 9.16, 1.57, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(24, 'aliquam', 'Est dolores aperiam tenetur beatae est officia nihil in. Dolorum atque porro sit impedit. Maxime dolorum omnis facilis molestiae consectetur.', 64.62, 467463, 8.74, 1.18, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(25, 'molestias', 'Eum vero fugiat quis saepe. Sunt assumenda porro nihil. Temporibus odit dolorum repellendus quo explicabo eos quidem. Corporis placeat aut libero sunt doloremque earum.', 45.15, 271, 5.10, 0.61, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(26, 'perferendis', 'Qui autem odio culpa corrupti incidunt aut. Dolorem rerum dolorum et aut eos sit.', 71.03, 34952, 9.76, 0.10, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(27, 'cupiditate', 'Dolorum doloribus quod qui eaque. Aperiam minima dolore voluptas minima dolor quam.', 99.65, 3131, 8.09, 0.39, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(28, 'omnis', 'Quis quia dolor possimus laborum deleniti sit ipsam. Soluta occaecati rerum est omnis quis. Aut voluptas dignissimos beatae animi alias inventore quae illum.', 51.30, 495307, 4.08, 1.78, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(29, 'consectetur', 'Alias facilis possimus id laudantium rem. Aut numquam mollitia alias provident asperiores. Mollitia et enim animi minima iure quas. Ex dolor quam rem sint animi eum et.', 33.47, 4655, 9.85, 1.84, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(30, 'sit', 'Praesentium deleniti distinctio et alias neque. Eligendi nam consequuntur hic est. Ab rem illum qui quas veritatis. Illum aut non iste harum dignissimos perspiciatis. Nisi vitae doloremque velit iste in reiciendis dolorem.', 34.29, 50615361, 1.40, 0.72, '2023-10-04 07:12:48', '2023-10-04 07:12:48'),
(31, 'est', 'Est est odit officia quam ullam. Corrupti consectetur omnis rem cumque at sunt harum. Nisi ut incidunt architecto quis accusantium voluptatem est facilis.', 14.53, 511991418, 7.14, 0.95, '2023-10-04 07:18:25', '2023-10-04 07:18:25'),
(32, 'asperiores', 'Quo omnis eos porro dolorum aut. Laudantium eum aut modi ut inventore sint qui. Officia aut explicabo saepe. Reprehenderit sed nihil ratione eligendi et totam.', 46.88, 177156, 7.05, 0.96, '2023-10-04 07:18:25', '2023-10-04 07:18:25'),
(33, 'aut', 'Perspiciatis voluptatem nam et ex esse quibusdam consequatur. Cumque accusantium quisquam consequatur rem aut placeat eos.', 14.58, 6, 8.90, 1.86, '2023-10-04 07:18:25', '2023-10-04 07:18:25'),
(34, 'nulla', 'Nam voluptatem quod fuga neque aut qui. Unde molestias ducimus eos et. Blanditiis aliquid earum totam numquam aut cupiditate. Excepturi occaecati odio tenetur et illo aspernatur ratione.', 36.62, 106212587, 7.70, 1.22, '2023-10-04 07:18:25', '2023-10-04 07:18:25'),
(35, 'laboriosam', 'Quisquam adipisci exercitationem laudantium mollitia id officia ut. Nihil nisi culpa vel quia consectetur. Nihil aperiam qui dicta quae error harum. Voluptatem quam harum ratione cum.', 64.06, 24076, 2.24, 1.64, '2023-10-04 07:18:25', '2023-10-04 07:18:25'),
(36, 'quisquam', 'Quis et dolor culpa accusamus et. Iure ipsa ut perspiciatis aut consequatur. Quisquam quasi omnis deleniti.', 58.99, 573499, 3.30, 0.32, '2023-10-04 07:18:25', '2023-10-04 07:18:25'),
(37, 'reiciendis', 'Qui qui impedit nisi et maiores vel. Repudiandae vel ipsam voluptate. Occaecati ducimus expedita atque molestias voluptatum labore veniam.', 50.83, 3891311, 9.70, 1.06, '2023-10-04 07:18:25', '2023-10-04 07:18:25'),
(38, 'et', 'Enim unde occaecati quas odit. Molestiae consequatur mollitia similique suscipit rerum quia. Numquam laboriosam optio maxime a et. Et qui aspernatur alias alias odio.', 80.13, 5218, 1.23, 1.29, '2023-10-04 07:18:25', '2023-10-04 07:18:25'),
(39, 'libero', 'Odit iusto ratione repellat debitis. Ut et voluptatem rerum sint dolorum rerum voluptatem sunt. Error ea aperiam sunt nulla eos ab qui. Numquam ex natus aperiam iusto dolorem itaque soluta.', 16.70, 20105, 8.96, 1.19, '2023-10-04 07:18:25', '2023-10-04 07:18:25'),
(40, 'consequatur', 'Voluptatem inventore nihil vero ratione. Vel aliquid qui officia qui dolores suscipit id. Minima eius quo et ullam et natus.', 53.84, 479972326, 2.08, 1.24, '2023-10-04 07:18:25', '2023-10-04 07:18:25'),
(41, 'rerum', 'Cum sequi corporis quia aspernatur. Nesciunt id nihil eum totam autem voluptatibus. Unde aspernatur voluptatem voluptas sequi at itaque. Debitis nobis in placeat cumque.', 23.30, 8496, 3.79, 0.34, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(42, 'sunt', 'Voluptas voluptatibus molestiae ut blanditiis quis fugit. Velit sed eius nobis nemo aut aut. Eos explicabo autem praesentium. Voluptatem aperiam perferendis aperiam sit in fugiat et.', 31.33, 997183494, 1.02, 0.59, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(43, 'temporibus', 'Reiciendis qui ad voluptates numquam fugit soluta explicabo. Non repudiandae nisi aut est voluptatem voluptatem perspiciatis. Temporibus et ipsa autem consectetur dignissimos tenetur. Eos quia eius in id non vero non. Aliquid consequatur et non fugiat dolor veniam modi.', 58.83, 1731, 8.64, 0.40, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(44, 'ipsam', 'Magni libero tempore odit qui debitis dignissimos. Perspiciatis repellat exercitationem et totam qui. Consequatur cum ut aliquid in sequi molestiae sunt. Soluta corporis ratione dolorum commodi.', 86.50, 1914, 4.51, 1.00, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(45, 'ut', 'Ab ad repellat ipsa reiciendis commodi doloribus a ut. Accusantium quia ipsa hic delectus tempora aut. Alias laudantium voluptatem in porro sint nihil. Tempora dolores qui repellat vero alias iusto nostrum explicabo.', 37.54, 171, 6.21, 1.28, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(46, 'et', 'Id ea voluptate distinctio illo commodi corrupti. Quasi consectetur eaque fugit odio et aut libero. Est non labore architecto incidunt numquam.', 88.30, 1503, 2.56, 0.76, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(47, 'quos', 'Tempore quo quam esse maiores sapiente corrupti quis. Neque rerum culpa voluptatem enim qui assumenda. Qui repellat rerum quisquam nemo sit.', 88.52, 28099768, 1.99, 0.91, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(48, 'debitis', 'At modi mollitia sit. Nihil et asperiores dolore recusandae nam. Nesciunt quidem cumque qui iste optio sit.', 94.99, 0, 7.38, 1.35, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(49, 'perspiciatis', 'Laborum assumenda maxime qui quod et eaque sit. Asperiores in quia minima neque eveniet dolorem distinctio. Sed animi quae modi quibusdam id iste. Rerum corrupti nesciunt labore error aut assumenda laboriosam.', 58.22, 6119034, 4.23, 0.17, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(50, 'minus', 'Optio neque quod beatae possimus. Accusamus et quo et aperiam rem et.', 63.71, 2, 6.77, 0.82, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(51, 'consequatur', 'Nam perspiciatis a modi dicta rerum eaque eum. Debitis quia nihil molestiae voluptas. Quia ex dolor numquam sit molestias. Et sed et quo nihil. Enim odit quas aliquam nam.', 13.13, 35775363, 6.80, 0.48, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(52, 'nulla', 'Officia adipisci consequatur maiores. Earum magnam quis ea perferendis aut eos odit in. Tempore harum rem minima sed animi quis expedita. Sed ipsa explicabo quos ut perspiciatis dolor.', 49.60, 328036178, 7.23, 0.90, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(53, 'aliquid', 'Aspernatur labore aperiam tenetur laudantium officiis praesentium esse. Illum possimus odio ut amet libero. Ab molestiae maxime velit laboriosam cum alias maiores. Non repellendus debitis at sit impedit occaecati.', 78.17, 974, 5.71, 0.44, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(54, 'consequatur', 'Consequatur ducimus voluptatem molestias nostrum nulla voluptatem. Tempora libero corrupti repellendus autem.', 32.79, 86099, 5.59, 1.18, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(55, 'nam', 'Et voluptates voluptas id repellendus repellendus quis. Quod neque dolorem ut ratione. Et autem culpa omnis cupiditate voluptatibus. Praesentium ut dolorum et quis.', 46.62, 18, 9.35, 0.75, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(56, 'totam', 'Ipsum ipsum incidunt id et nostrum earum quia. Aut animi aut iste ut fuga illo ut. Voluptatem nesciunt eligendi tenetur exercitationem.', 51.95, 514, 3.45, 1.36, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(57, 'nisi', 'Ipsa quasi ullam voluptate explicabo. Sed temporibus ullam est molestias aut sint. Ut nam rem corporis et at odit pariatur. Deserunt et incidunt deserunt voluptatem. Eum eum dolores sapiente ut consequatur temporibus aliquam.', 78.32, 922, 7.92, 0.10, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(58, 'ullam', 'Reiciendis architecto distinctio qui porro officiis iusto voluptas. Sint in aut ipsam ut fuga fugiat. Quis reprehenderit expedita aut neque. Qui quisquam magnam itaque voluptatem.', 99.99, 3614473, 2.82, 1.70, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(59, 'quia', 'Et sed suscipit labore doloremque autem consequatur omnis. Voluptatem omnis quis voluptates eum explicabo non. Qui quaerat nobis architecto error.', 51.44, 7326, 7.63, 1.76, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(60, 'aut', 'Aut quos veritatis aspernatur dolores ipsa fugiat deleniti. Nihil qui odio earum deleniti. Hic quia culpa et dolorem tempore.', 26.25, 876123, 4.39, 0.81, '2023-10-04 07:18:30', '2023-10-04 07:18:30'),
(61, 'ratione', 'Et quod quia ut dolores est optio. Et enim ut mollitia harum adipisci enim. Sit in repudiandae ipsam amet voluptatem molestiae.', 83.40, 6213881, 8.76, 0.18, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(62, 'sit', 'Neque quas tenetur aperiam perspiciatis veniam qui. Minus ab earum qui quis ratione animi aut. Eum odio ut est dolorem vel quae molestiae.', 17.19, 11280, 9.19, 0.54, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(63, 'voluptatem', 'Non sit recusandae laborum modi. Sequi voluptatem vero impedit nisi eaque. Aut rem voluptate fugiat ullam et nesciunt eaque. Autem nihil qui ut atque.', 67.45, 55, 7.44, 1.57, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(64, 'aut', 'Ut aperiam perspiciatis blanditiis autem eos voluptatem. Ea et voluptas molestiae qui et non. Ut suscipit tempora et expedita eum non et veritatis. Eligendi quis consequuntur in. At nemo inventore tempora facilis eaque.', 26.59, 18042862, 2.09, 0.88, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(65, 'quo', 'Debitis est possimus incidunt doloremque. Iure aspernatur dolorum alias sit est rem a. Nulla nostrum molestiae atque aut esse incidunt tempora. Corporis cupiditate qui voluptates ab.', 67.46, 5, 6.27, 1.02, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(66, 'et', 'Qui sunt libero aut eius. Amet error ipsam inventore natus alias. Doloribus explicabo voluptas animi.', 30.66, 837, 1.70, 1.95, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(67, 'quod', 'Et dolore inventore ut rerum molestiae dicta ea. Sunt illo assumenda ratione rerum. Deserunt nobis tempore quos in vel expedita voluptatem.', 75.05, 909103294, 5.83, 1.47, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(68, 'voluptates', 'Consequatur quis quo est soluta facilis eos. Illo aut aliquam facilis sit est. Sed quos fugiat velit quae illum deserunt quod.', 41.30, 4, 3.10, 1.51, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(69, 'voluptas', 'Aut porro quas voluptas quia. Est ut repudiandae explicabo dolores repudiandae libero expedita aut. Vitae eos nostrum dolorem error hic quia impedit.', 96.30, 21386360, 3.48, 1.36, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(70, 'earum', 'Id adipisci neque aut esse unde quis nobis. Molestiae sapiente et vel incidunt mollitia et porro provident. Et voluptatem nobis consequatur veritatis alias.', 55.91, 3653995, 4.53, 1.89, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(71, 'occaecati', 'Quos porro aperiam accusantium quam. Voluptatum aut non mollitia eos aspernatur. Magni illo laboriosam in ducimus qui voluptatibus. Dolores necessitatibus aut distinctio deleniti ad.', 87.65, 4766, 2.57, 0.40, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(72, 'ullam', 'Ullam est architecto consequatur a autem architecto nemo. Nemo odio veritatis vero nesciunt repellendus quo aperiam. Ab enim tenetur repellat cumque. Voluptatum blanditiis ducimus nulla ut totam saepe assumenda.', 95.19, 177117, 8.97, 1.57, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(73, 'veniam', 'Aut id magnam commodi perspiciatis necessitatibus. Aut perspiciatis distinctio consequatur repellat magni voluptatibus sit molestias. Harum dolorem veritatis labore est perferendis necessitatibus.', 55.59, 1065, 2.63, 0.16, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(74, 'vel', 'Explicabo doloribus qui esse reiciendis. Commodi ut cumque nulla error cupiditate perspiciatis.', 85.63, 4, 2.71, 1.13, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(75, 'hic', 'Dicta asperiores quidem molestiae sed sit quibusdam et. Eaque dolorem maiores id eveniet explicabo. Qui recusandae consequatur exercitationem. Reiciendis placeat molestias autem.', 66.10, 59, 6.86, 0.62, '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(76, 'et', 'Aliquid natus voluptatem quisquam id nobis. Voluptas reiciendis nulla officiis magnam. Eum ipsum cumque a qui quam similique magni. Nihil ab cupiditate et.', 60.29, 2, 1.92, 0.15, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(77, 'aspernatur', 'Perspiciatis expedita nisi qui enim sunt optio aut illo. Et rerum laborum inventore. Et et qui sit facilis nesciunt deleniti iste.', 24.17, 515435900, 9.36, 0.99, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(78, 'itaque', 'Voluptas cumque cumque aut officiis eos rerum. Autem reiciendis beatae et sed. Iure quae et perferendis explicabo animi placeat quibusdam laudantium. Veritatis atque sed dolor.', 56.52, 44452, 1.20, 1.58, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(79, 'ad', 'Et necessitatibus cum et temporibus ipsa corporis et. Numquam natus accusamus quis et eum non nesciunt ut. Laboriosam quam nesciunt dolores. Et qui natus ut eum similique quidem.', 1.31, 0, 9.30, 0.12, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(80, 'dolor', 'Quis sunt culpa voluptatem quis cumque fugit laboriosam voluptatibus. Aut et laborum sed. Amet cupiditate sequi occaecati placeat cupiditate in. Suscipit et ullam qui non.', 72.17, 43, 2.88, 0.47, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(81, 'aut', 'Voluptas qui eum ab qui exercitationem voluptas earum odit. Quis vel ipsum illum. Aut non cumque ut molestias nostrum sit.', 32.54, 18, 1.83, 0.67, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(82, 'et', 'Voluptates sint dolorum tempora omnis. Quis sed ad sunt sint non rem quidem eius. Enim incidunt explicabo aut ab.', 15.99, 5588687, 4.91, 0.58, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(83, 'nemo', 'Recusandae similique accusamus sit animi. Officiis rerum accusantium quia sapiente vitae. Quibusdam illum aut non dolore inventore.', 31.81, 134284, 1.42, 1.58, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(84, 'omnis', 'Veritatis hic a aut illum quia occaecati temporibus ipsum. In neque vel quidem est. Quibusdam quisquam architecto vel neque quisquam aut.', 97.92, 87, 9.21, 0.33, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(85, 'et', 'Nam fugit accusamus omnis tenetur consequatur. Nihil magnam distinctio quos necessitatibus sit. Voluptatem suscipit debitis necessitatibus ullam aut.', 25.84, 138933, 5.43, 1.03, '2023-10-04 07:18:55', '2023-10-04 07:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_09_050223_create_sessions_table', 1),
(7, '2023_09_09_052457_create_items_table', 1),
(8, '2023_09_09_052525_create_procurements_table', 1),
(9, '2023_09_09_052533_create_sales_table', 1),
(10, '2023_09_09_052541_create_stocks_table', 1),
(11, '2023_09_14_143142_add_roles_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `procurements`
--

CREATE TABLE `procurements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `procurement_date` date NOT NULL,
  `leadtime` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `procurements`
--

INSERT INTO `procurements` (`id`, `item_id`, `order_quantity`, `total_cost`, `procurement_date`, `leadtime`, `created_at`, `updated_at`) VALUES
(1, 1, 212, 22231.00, '2023-10-04', 7, '2023-10-04 07:19:37', '2023-10-04 08:22:57'),
(2, 5, 2122222, 23432555.00, '2023-10-04', 4, '2023-10-04 07:20:29', '2023-10-04 07:20:29'),
(3, 3, 11, 9.00, '2023-10-12', 5, '2023-10-04 08:14:58', '2023-10-04 08:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `quantity_sold` int(11) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `sale_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `item_id`, `quantity_sold`, `selling_price`, `sale_date`, `created_at`, `updated_at`) VALUES
(1, 61, 2981055, 20.57, '2020-05-31', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(2, 62, 73, 60.58, '1998-03-01', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(3, 63, 101686838, 29.29, '2011-11-09', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(4, 64, 8, 56.39, '2004-06-05', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(5, 65, 362, 59.13, '2011-06-18', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(6, 66, 324011265, 58.90, '1978-10-13', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(7, 67, 27143, 61.85, '1970-08-19', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(8, 68, 31, 84.74, '1987-03-30', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(9, 69, 92, 38.35, '2016-02-12', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(10, 70, 73869324, 68.50, '1989-11-10', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(11, 71, 7616178, 48.75, '2014-12-05', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(12, 72, 671, 34.98, '1976-10-04', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(13, 73, 2, 44.61, '2012-03-26', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(14, 74, 586, 75.13, '2008-07-12', '2023-10-04 07:18:49', '2023-10-04 07:18:49'),
(15, 75, 169592413, 91.86, '2003-02-28', '2023-10-04 07:18:49', '2023-10-04 07:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ioYET3IzQ4IwCcx9C5kLdAYUesr0Hf5OeFJhE9hy', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoienJsRzNNYUkwbWg2eWx3bzVjMWlQbk5zaUdzeGJMaXU1eVFSQ3l1WCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZW9xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRRV2lyY2F1eXU3VVBZVS5qSUJkdUdPclAyWC91NXNaUFpVdWhhckwuLjF5Sm1QUEIzUnJnNiI7fQ==', 1696436627);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `item_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 76, 2317987, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(2, 77, 669628, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(3, 78, 775305180, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(4, 79, 39183742, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(5, 80, 13179058, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(6, 81, 352737, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(7, 82, 212, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(8, 83, 516098545, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(9, 84, 81444815, '2023-10-04 07:18:55', '2023-10-04 07:18:55'),
(10, 85, 8629, '2023-10-04 07:18:55', '2023-10-04 07:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) NOT NULL DEFAULT 'kepala_gudang'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'firmansyah', 'firmansyah@gmail.com', NULL, '$2y$10$QWircauyu7UPYU.jIBduGOrP2X/u5sZPZUuharL..1yJmPPB3Rrg6', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-04 07:12:06', '2023-10-04 07:12:06', 'kepala_gudang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `procurements`
--
ALTER TABLE `procurements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `procurements_item_id_foreign` (`item_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_item_id_foreign` (`item_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_item_id_foreign` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `procurements`
--
ALTER TABLE `procurements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `procurements`
--
ALTER TABLE `procurements`
  ADD CONSTRAINT `procurements_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
