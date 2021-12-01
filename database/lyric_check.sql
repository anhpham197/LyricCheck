-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2021 lúc 01:21 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lyric_check`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invalid_words`
--

CREATE TABLE `invalid_words` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `invalid_words`
--

INSERT INTO `invalid_words` (`id`, `word`, `created_at`, `updated_at`) VALUES
(1, 'con dân', NULL, NULL),
(2, 'tôn ngộ không', NULL, NULL),
(4, 'have fun', NULL, NULL),
(5, 'beat koi', NULL, NULL),
(6, 'khá bảnh', NULL, NULL),
(23, 'khá phếch', '2021-11-29 11:01:38', '2021-11-29 11:01:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_22_070416_create_products_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `error` int(11) UNSIGNED NOT NULL,
  `error_list` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `error`, `error_list`, `created_at`, `updated_at`) VALUES
(11, 'Thí sinh 1', '<p>ông ơi cv của con đây nhé, <span class=\"px-2 py-1 rounded text-white\" style=\"background: #732828\">con dân</span> chơi hệ đào</p><p>chân tay con nhìn tuy hơi bé, mà có sức mạnh đỉnh cao</p><p>cha ơi! con nhỏ này vâm phếch, có vẻ cũng được việc</p><p>xem qua qua thì cũng <span class=\"px-2 py-1 rounded text-white\" style=\"background: #732828\">khá phếch</span>, cho nó ra làm luôn</p><p>trong cái xã hội bon chen này, phải làm thì mới có ăn</p><p>cố gắng hết mình, kiếm lấy ít tiền, chăm sóc cho mẹ cha</p><p>ai nói thế nào, ta vẫn cứ đào, tự mình ta <span class=\"px-2 py-1 rounded text-white\" style=\"background: #732828\">have fun</span></p><p>quyết tiếp bước truyền thống cha ông dậy sớm để thành công</p><p>ba mươi cân “<span class=\"px-2 py-1 rounded text-white\" style=\"background: #732828\">beat koi</span>” vừa được mã hóa đào bao lâu mới xong</p><p>ông đưa cho con tiền công luôn nhá, tất toán hết bảy trăm</p><p>tao đã không kết nối được với kế toán thôi mày cứ từ từ</p><p>hay cứ đi theo ông làm thêm mấy tháng rồi sau ông cho cưới thằng này</p><p>đào đào tiếp, đào cho tới sáng mai</p><p>đào đào nữa, sau còn lấy chồng</p><p>đào đào tiếp, tình yêu không có sai</p><p>đào đào mãi, cố gắng chăm chỉ kiếm lấy tấm chồng</p><p>một hai ba lên</p><p>lên lên luôn</p><p>lên thiên đàng bắt con hậu hoàng</p><p>lên lên luôn</p><p>đi nà mộc bắt <span class=\"px-2 py-1 rounded text-white\" style=\"background: #732828\">tôn ngộ không</span></p><p>lên lên luôn</p><p>lên cà vạt trói em bằng đà lạt</p><p>lên lên luôn</p><p>lên liễu giai hiphop never die</p><p>ông ơi con bảo ông này, bao năm vất vả đi cày cho ông</p><p>lời hứa ông còn nhớ không bao giờ ông định gả chồng cho con?</p><p>ừ thì ông nhớ chứ bây, nhưng còn một việc giữ lại phải lo</p><p>mày tìm cây tre thật to dài đúng trăm đốt ông cho cưới liền</p><p>đi nơi đâu tìm tre trăm đốt hay phi lên bờ hồ</p><p>ơ nhưng mà đi đường xa không tốt, vác tre hơi mỏi lưng</p><p>sao ta không bỏ ra mấy lốp, mua luôn cho nhẹ đầu</p><p>money bây giờ là mấu chốt, game dễ thôi bạn ê</p><p>có mấy đốt đẹp sáng mới đốn bình thường tôi bán bốn trăm</p><p>nhưng bán suốt từ sáng vẫn ế</p><p>thôi bán cho triệu hai</p><p>cứ ngỡ có tiền sẽ đỡ phiền cuộc đời sao oái oăm</p><p>thôi xong phen này hết lấy chồng, giờ biết phải làm sao?</p><p>hello how are you tại sao con khóc?</p><p>bà đây có khóc đâu</p><p>ơ không khóc thì thôi mình đây xin lỗi giãn cái cơ mặt ra</p><p>tôi đây đang đi kiếm tìm tre trăm đốt</p><p>nhưng tìm mãi không được</p><p>thôi yên tâm đi làm sao phải hốt tầm này tre thì dễ thôi</p><p>dẹp dẹp hết</p><p>này thằng kia tránh ra</p><p>dẹp dẹp hết</p><p>tao còn chống lầy</p><p>dẹp dẹp hết</p><p>tại sao như thế kia?</p><p>dẹp dẹp hết</p><p>bố con nhà này sẽ biết tay bà</p><p>khắc nhập khắc nhập</p><p>khắc xuất khắc xuất</p>', 5, 'con dân | tôn ngộ không | have fun | beat koi | khá phếch', '2021-11-29 11:16:49', '2021-11-29 11:16:49'),
(12, 'Nguyễn Văn A', '<p style=\"text-align:justify;\">contrary to popular belief, lorem ipsum is not simply random text. it has roots in a piece of classical latin literature from 45 bc, making it over 2000 years old. richard mcclintock, a latin professor at hampden-sydney college in virginia, looked up one of the more obscure latin words, consectetur, from a lorem ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. lorem ipsum comes from sections 1.10.32 and 1.10.33 of \"de finibus bonorum et malorum\" (the extremes of good and evil) by cicero, written in 45 bc. this book is a treatise on the theory of ethics, very popular during the renaissance. the first line of lorem ipsum, \"lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"text-align:justify;\">the standard chunk of lorem ipsum used since the 1500s is reproduced below for those interested. sections 1.10.32 and 1.10.33 from \"de finibus bonorum et malorum\" by cicero are also reproduced in their exact original form, accompanied by english versions from the 1914 translation by h. rackham.</p>', 0, NULL, '2021-11-29 11:18:21', '2021-11-29 11:18:21'),
(13, 'Chị Thảo', '<p>ông ơi cv của con đây nhé, <span class=\"px-2 py-1 rounded text-white\" style=\"background: #732828\">con dân</span> chơi hệ đào</p><p>chân tay con nhìn tuy hơi bé, mà có sức mạnh đỉnh cao</p><p>cha ơi! con nhỏ này vâm phếch, có vẻ cũng được việc</p><p>xem qua qua thì cũng <span class=\"px-2 py-1 rounded text-white\" style=\"background: #732828\">khá phếch</span>, cho nó ra làm luôn</p><p>trong cái xã hội bon chen này, phải làm thì mới có ăn</p><p>cố gắng hết mình, kiếm lấy ít tiền, chăm sóc cho mẹ cha</p><p>ai nói thế nào, ta vẫn cứ đào, tự mình ta <span class=\"px-2 py-1 rounded text-white\" style=\"background: #732828\">have fun</span></p><p>quyết tiếp bước truyền thống cha ông dậy sớm để thành công</p><p>ba mươi cân “<span class=\"px-2 py-1 rounded text-white\" style=\"background: #732828\">beat koi</span>” vừa được mã hóa đào bao lâu mới xong</p><p>ông đưa cho con tiền công luôn nhá, tất toán hết bảy trăm</p><p>tao đã không kết nối được với kế toán thôi mày cứ từ từ</p><p>hay cứ đi theo ông làm thêm mấy tháng rồi sau ông cho cưới thằng này</p><p>đào đào tiếp, đào cho tới sáng mai</p><p>đào đào nữa, sau còn lấy chồng</p><p>đào đào tiếp, tình yêu không có sai</p><p>đào đào mãi, cố gắng chăm chỉ kiếm lấy tấm chồng</p><p>một hai ba lên</p><p>lên lên luôn</p><p>lên thiên đàng bắt con hậu hoàng</p><p>lên lên luôn</p><p>đi nà mộc bắt <span class=\"px-2 py-1 rounded text-white\" style=\"background: #732828\">tôn ngộ không</span></p><p>lên lên luôn</p><p>lên cà vạt trói em bằng đà lạt</p><p>lên lên luôn</p><p>lên liễu giai hiphop never die</p><p>ông ơi con bảo ông này, bao năm vất vả đi cày cho ông</p><p>lời hứa ông còn nhớ không bao giờ ông định gả chồng cho con?</p><p>ừ thì ông nhớ chứ bây, nhưng còn một việc giữ lại phải lo</p><p>mày tìm cây tre thật to dài đúng trăm đốt ông cho cưới liền</p><p>đi nơi đâu tìm tre trăm đốt hay phi lên bờ hồ</p><p>ơ nhưng mà đi đường xa không tốt, vác tre hơi mỏi lưng</p><p>sao ta không bỏ ra mấy lốp, mua luôn cho nhẹ đầu</p><p>money bây giờ là mấu chốt, game dễ thôi bạn ê</p><p>có mấy đốt đẹp sáng mới đốn bình thường tôi bán bốn trăm</p><p>nhưng bán suốt từ sáng vẫn ế</p><p>thôi bán cho triệu hai</p><p>cứ ngỡ có tiền sẽ đỡ phiền cuộc đời sao oái oăm</p><p>thôi xong phen này hết lấy chồng, giờ biết phải làm sao?</p><p>hello how are you tại sao con khóc?</p><p>bà đây có khóc đâu</p><p>ơ không khóc thì thôi mình đây xin lỗi giãn cái cơ mặt ra</p><p>tôi đây đang đi kiếm tìm tre trăm đốt</p><p>nhưng tìm mãi không được</p><p>thôi yên tâm đi làm sao phải hốt tầm này tre thì dễ thôi</p><p>dẹp dẹp hết</p><p>này thằng kia tránh ra</p><p>dẹp dẹp hết</p><p>tao còn chống lầy</p><p>dẹp dẹp hết</p><p>tại sao như thế kia?</p><p>dẹp dẹp hết</p><p>bố con nhà này sẽ biết tay bà</p><p>khắc nhập khắc nhập</p><p>khắc xuất khắc xuất</p>', 5, 'con dân | tôn ngộ không | have fun | beat koi | khá phếch', '2021-11-29 11:21:37', '2021-11-29 11:21:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Áo khoác ', 'Áo 3 lớp dày dặn', 130000, NULL, NULL),
(2, 'Áo phông', 'ABCXYZ', 120000, NULL, NULL),
(3, 'Quần', 'ầy bì xi đi', 20000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@susoft.vn', NULL, '$2y$10$rwXujxl5dfpFlIOlYDHjFuhex8arv8fQEmStNC0eWC6LdBlPQpuQ2', NULL, '2021-11-16 23:59:17', '2021-11-16 23:59:17');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `invalid_words`
--
ALTER TABLE `invalid_words`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `invalid_words`
--
ALTER TABLE `invalid_words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
