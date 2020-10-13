-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 10:19 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eltalhy`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `photo_path`, `created_at`, `updated_at`) VALUES
(1, 'short_summery', '<p>عُرِف الشيخ أحمد الطلحي بتأليف الكثير من الكتب والمشاركة في العديد من المحاضرات والمناظرات والمؤتمرات على الصعيدين المحلي والدولي، كما اشتُهر بتنشيط عدد من البرامج التلفزيونية على القنوات الفضائية العربية لعل أبرزها برنامجه الناجح &quot;تبسَّم&quot;.</p>\r\n', 'uploads/about\\1537429359_1492467281_about_sec.png', '2017-04-17 20:14:41', '2018-09-20 05:42:39'),
(3, 'summery', '<section class="about-page pages-body">\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-md-12">\r\n<div class="info">\r\n<h2 class="text-center">تَرجَمَةٌ</h2>\r\n\r\n<div class="intro text-center">\r\n<p>عن الداعية الإسلامي السيّد أحمد الطلحي حفظه الله</p>\r\n\r\n<div class="intro-img-profile"><img src="img/profile-intro.jpg"></div>\r\n\r\n<p>الحمد لله رب العالمين والصلاة والسلام على فخر الأنبياء و أرحم المرسلين</p>\r\n\r\n<p>سيّدنا محمّد وعلى آله وصحبه أجمعين...</p>\r\n\r\n<p>ترجمةُ مختصرة</p>\r\n\r\n<p>عن الداعي إلى الله الداعية الإسلامي</p>\r\n\r\n<p>(السيّد أحمد الطلحي حفظه الله )</p>\r\n</div>\r\n\r\n<div class="panel-group" id="accordion">\r\n<div class="panel panel-default">\r\n<div class="panel-heading hvr-bounce-to-left" id="headingOne">\r\n<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">النســـــب </a></h4>\r\n</div>\r\n\r\n<div aria-expanded="false" class="panel-collapse collapse" id="collapseOne" style="height: 0px;">\r\n<div class="panel-body">\r\n<p>هو السيّد: &nbsp;أحمد ابن فوزي بن خليفة الطلحي يرجع نسبه للإمام الحسن المثنى بن الإمام الحسن السبط بن أمير المؤمنين علي بن أبي طالب والسيّدة فاطمة الزهراء <span style="color: #000080;">ψ</span> بنت سيّدنا محمّد خاتم النبيين <span style="color: #333399;">????</span>.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading hvr-bounce-to-left" id="headingTwo">\r\n<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">المولد </a></h4>\r\n</div>\r\n\r\n<div aria-expanded="false" class="panel-collapse collapse" id="collapseTwo" style="height: 0px;">\r\n<div class="panel-body">\r\n<p>ولد من والديــن شريفين من ذرية الإمام الحســن بن علي بن أبي طالب <span style="color: #000080;">ψ</span> ، قبيل فجر يوم الإثنين العاشر من شوال عام 1405هـ&nbsp; /&nbsp; 29 يونيـــو 1985م، بالجبل الأخضر بمدينة البيضاء إحدى مدن شرق ليبيا، بجوار ضريح الصحابي الجليل سيّدنا رويفع بن ثابت الأنصاري &nbsp;<span style="color: #000080;">????</span>.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading hvr-bounce-to-left" id="headingThree">\r\n<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">تكوينه </a></h4>\r\n</div>\r\n\r\n<div aria-expanded="false" class="panel-collapse collapse" id="collapseThree" style="height: 0px;">\r\n<div class="panel-body">مالكي المذهب ، أشعري العقيدة ، جنيدي المسلك .</div>\r\n</div>\r\n</div>\r\n\r\n\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading hvr-bounce-to-left" id="headingFive">\r\n<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">المسيرة العلمية الدعوية </a></h4>\r\n</div>\r\n\r\n<div aria-expanded="false" class="panel-collapse collapse" id="collapseFive">\r\n<div class="panel-body">\r\n<p>عيّن إمام وخطيب ومحفظ بجامع سيّدنا الزبير بن العوام – البيضاء - &nbsp;ليبيا .</p>\r\n\r\n<p>ثم إمام وخطيب وواعظ ومحفظ بجامع النور - بنغازي -&nbsp; ليبيا .</p>\r\n\r\n<p>مأذون شرعي بمحكمة الحزام الأخضر الشرعية - &nbsp;بنغازي .</p>\r\n\r\n<p>مدير مركز النور لتحفيظ القرآن الكريم وتدريس العلوم الشرعية &nbsp;- بنغازي - ليبيا</p>\r\n\r\n<p>محاضر زائر بدوائر الأوقاف ومساجد ليبيا .</p>\r\n\r\n<p>واعظ بمجموعة من المؤسسات الإصلاحية .</p>\r\n\r\n<p>رئيس مهرجان جوائز المحبة &nbsp;في ليبيا .</p>\r\n\r\n<p>رئيس مهرجان المحبة الإنشادي في &nbsp;ليبيا .</p>\r\n\r\n<p>رئيس اللجنة التحضيرية لمجلس الدعوة والإرشاد في ليبيا .</p>\r\n\r\n<p>عضو مؤسس لمجلس الدعوة والإرشاد في ليبيا .</p>\r\n\r\n<p>عضو رابطة العمل الإسلامي ليبيا .</p>\r\n\r\n<p>عضو جمعية الإمام المجدد محمّد بن علي السنوسي الإسلامية للثقافة والتراث في ليبيا .</p>\r\n\r\n<p>كما له العديد من الزيارات الدولية والعالمية في الدعوة إلي الله .</p>\r\n\r\n<p>وله أيضًا عدد من المؤلفات ك ( كتاب أساس علوم الدين ، تبسم ) وغيرها .</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading hvr-bounce-to-left" id="headingSeven">\r\n<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseSeven">الإنجازات </a></h4>\r\n</div>\r\n\r\n<div aria-expanded="false" class="panel-collapse collapse" id="collapseSeven">\r\n<div class="panel-body">\r\n<p>أسس مجلس الدعوة والإرشاد في ليبيا</p>\r\n\r\n<p>أسس مركز النور لتحفيظ القرآن الكريم وتدريس العلوم الشرعية في ليبيا .</p>\r\n\r\n<p>أسس مهرجان المحبة الإنشادي في ليبيا .</p>\r\n\r\n<p>أسس مهرجان جوائز المحبة في ليبيا .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>النشاط الاعلامي :</p>\r\n\r\n<p>البرامج :</p>\r\n\r\n<p>برنامج تبسم 30 حلقة على قناة السلام عليك أيها النبي</p>\r\n\r\n<p>برنامج عيد الروح الموسم الاول على قناة الارث النبوي</p>\r\n\r\n<p>برنامج عيد الروح الموسم الثاني على قناة الارث النبوي</p>\r\n\r\n<p>برنامج خيمة النهار الرمضانية على شبكة تلفزيون النهار</p>\r\n\r\n<p>المقابلات :</p>\r\n\r\n<p>سلسلة عام الابتسامة 52 حلقة على قناة روتانا مصرية</p>\r\n\r\n<p>سلسلة عام البشارة 52 حلقة على قناة روتانا مصرية</p>\r\n\r\n<p>سلسلة عام الحب 52 حلقة على قناة روتانا مصرية</p>\r\n\r\n<p>سلسلة حلقات على قناة النهار برنامج النهارده</p>\r\n\r\n<p>سلسلة حلقات منوعة على قناة الناس</p>\r\n\r\n<p>و 200 حلقة منوعة على عدد من القنوات ( الحياة – أونست – dtv –cbc &nbsp;- الحدث اليوم – جروزني الشيشانية – مكس اف ام السعودية –وغيرها )</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading hvr-bounce-to-left" id="headingEight">\r\n<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseEight">الأنشطة والرحلات </a></h4>\r\n</div>\r\n\r\n<div aria-expanded="false" class="panel-collapse collapse" id="collapseEight">\r\n<div class="panel-body">\r\n<p>أقام دروساً ومجالس للتعليم والإرشاد والتوجيه والتوعية والدعوة إلى الله في بلدان شتى استهلها عام 1427هـ / 2006م داخل مدن ليبيا وقراها النائية في الشرق والغرب والشمال والجنوب ، وفي عام 1429هـ / 2008م بدأت رحلاته الدعوية الخارجية ومازالت متواصلة وقد شملت رحلاته الخارجية البلدان الآتية :-</p>\r\n\r\n<p>البلدان العربية :&nbsp; &nbsp;(جمهورية مصر العربية – المملكة الُأردنية الهاشمية &nbsp;– جمهورية &nbsp;سوريا العربية – دولة الإمارات المتحدة – المملكة العربية السعودية –&nbsp;الجمهورية التونسية ).</p>\r\n\r\n<p>دول أسيـــــــا :&nbsp;&nbsp; &nbsp;(ماليزيا – أندونيسيا - سنغافورا ).</p>\r\n\r\n<p>دُول أوروبـــا : &nbsp;( المملكة البريطانية المتحدة – الجمهورية التركية &nbsp;- جمهورية روسيا الاتحادية – جمهورية الشيشان ).</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading" id="headingNine">\r\n<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseNine">المحاضرات الخارجية </a></h4>\r\n</div>\r\n\r\n<div aria-expanded="false" class="panel-collapse collapse" id="collapseNine" style="height: 0px;">\r\n<div class="panel-body">\r\n<p>ألقى محاضرات ذات بال تتناول قضايا&nbsp; تهم المجتمع الإنساني في أنحاء العالم من أهمها</p>\r\n\r\n<p>محاضرة في جامعة كامبريج البريطانية .</p>\r\n\r\n<p>سلسلة محاضرات في المدارس الثانوية في مدينة لوتن ببريطانيا .</p>\r\n\r\n<p>كلمة بين يدي شيخه الحبيب عمر بن حفيظ في مجلس رسول الله في ميدان موناس بالعاصمة الاندونيسية جاكرتا وقد حضرها أكثر من مليون مسلم</p>\r\n\r\n<p>سلسلة محاضرات عن السير الى الله &nbsp;في المراكز الثقافية باستانبول تركيا<br>\r\nسلسلة محاضرات عن التربية النبوية في مراكز دعوية في اسكتلندا</p>\r\n\r\n<p>له عدد من الدروس والخطب والمحاضرات المسجلة على الموقع الرسمي</p>\r\n\r\n<p>www.eltalhyoffcial.com.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="panel panel-default">\r\n<div class="panel-heading hvr-bounce-to-left" id="headingTen">\r\n<h4 class="panel-title"><a aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseTen">شيوخه </a></h4>\r\n</div>\r\n\r\n<div aria-expanded="true" class="panel-collapse collapse in" id="collapseTen">\r\n<div class="panel-body"><!--Teachers -->\r\n<div class="teachers text-center">\r\n<div class="row">\r\n<div class="col-md-4 col-sm-6">\r\n<div class="thumbnail">\r\n<div class="img-teacher"><img alt="العلامة الحبيب عبد القادر بن أحمد بن عبد الرحمن  السقاف " src="img/t1.jpg"></div>\r\n\r\n<div class="caption">\r\n<h3>العلامة الحبيب عبد القادر بن أحمد بن عبد الرحمن السقاف</h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-4 col-sm-6">\r\n<div class="thumbnail">\r\n<div class="img-teacher"><img alt="العلامة الحبيب عمر بن محمد بن سالم بن حفيظ بن الشيخ أبوبكر بن سالم" src="img/t2.jpg"></div>\r\n\r\n<div class="caption">\r\n<h3>العلامة الحبيب عمر بن محمد بن سالم بن حفيظ بن الشيخ أبوبكر بن سالم</h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-4 col-sm-6">\r\n<div class="thumbnail">\r\n<div class="img-teacher"><img alt="العلامة الدكتور على جمعة مفتي الديار المصرية " src="img/t6.jpg"></div>\r\n\r\n<div class="caption">\r\n<h3>العلامة الدكتور على جمعة مفتي الديار المصرية</h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-4 col-sm-6">\r\n<div class="thumbnail">\r\n<div class="img-teacher"><img alt="الشيخ المربي : السيّد محجوب أبوفارس الصفراني " src="img/t3.jpg"></div>\r\n\r\n<div class="caption">\r\n<h3>الشيخ المربي : السيّد محجوب أبوفارس الصفراني</h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-4 col-sm-6">\r\n<div class="thumbnail">\r\n<div class="img-teacher"><img alt="العلامة السيد الشيخ محمود افندي المجددي الخالدي النقشبندي " src="img/t4.jpg"></div>\r\n\r\n<div class="caption">\r\n<h3>العلامة السيد الشيخ محمود افندي المجددي الخالدي النقشبندي</h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-4 col-sm-6">\r\n<div class="thumbnail">\r\n<div class="img-teacher"><img alt="العلامة الشيخ ابراهيم آل خليفة الاحسائي" src="img/t7.jpg"></div>\r\n\r\n<div class="caption">\r\n<h3>العلامة الشيخ ابراهيم آل خليفة الاحسائي</h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-4 col-sm-6">\r\n<div class="thumbnail">\r\n<div class="img-teacher"><img alt="الحبيب أبوبكر بن علي العدني المشهور " src="img/t8.jpg"></div>\r\n\r\n<div class="caption">\r\n<h3>الحبيب أبوبكر بن علي العدني المشهور</h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-4 col-sm-6">\r\n<div class="thumbnail">\r\n<div class="img-teacher"><img alt="الحبيب علي زين العابدين بن عبد الرحمن الجفري " src="img/t5.jpg"></div>\r\n\r\n<div class="caption">\r\n<h3>الحبيب علي زين العابدين بن عبد الرحمن الجفري</h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-4 col-sm-6">\r\n<div class="thumbnail">\r\n<div class="img-teacher"><img alt="الحبيب محمد بن عبد الرحمن السقاف " src="img/t9.jpg"></div>\r\n\r\n<div class="caption">\r\n<h3>الحبيب محمد بن عبد الرحمن السقاف</h3>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<!--//Teachers --></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'uploads/about\\1492468912_slide_4.png', '2017-04-17 20:41:52', '2017-04-22 14:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sound_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `start_cover` int(11) NOT NULL,
  `end_cover` int(11) NOT NULL,
  `sequence` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `photo_path`, `created_at`, `updated_at`, `start_cover`, `end_cover`, `sequence`) VALUES
(27, 'أساس علوم الدين', '<p>أساس علوم الدين</p>\r\n', 'uploads/book/1492880326_book.pdf', '2017-04-22 14:58:46', '2018-09-20 06:52:46', 642, 643, '');

-- --------------------------------------------------------

--
-- Table structure for table `book_photos`
--

CREATE TABLE IF NOT EXISTS `book_photos` (
  `id` int(10) unsigned NOT NULL,
  `page_number` int(11) DEFAULT NULL,
  `photo_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=714 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_photos`
--

INSERT INTO `book_photos` (`id`, `page_number`, `photo_path`, `book_id`, `created_at`, `updated_at`, `order`) VALUES
(642, NULL, 'uploads/book/1492880326_book_1.jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 73),
(643, NULL, 'uploads/book/1492880326_book-covers.jpg', 27, '2017-04-22 14:58:46', '2017-04-24 09:56:04', 2),
(644, NULL, 'uploads/book/1492880326_page_(1).jpg', 27, '2017-04-22 14:58:46', '2017-04-30 13:11:39', 3),
(645, NULL, 'uploads/book/1492880326_page_(2).jpg', 27, '2017-04-22 14:58:46', '2017-04-30 13:11:39', 4),
(646, NULL, 'uploads/book/1492880326_page_(3).jpg', 27, '2017-04-22 14:58:46', '2017-04-24 09:57:06', 5),
(647, NULL, 'uploads/book/1492880326_page_(4).jpg', 27, '2017-04-22 14:58:46', '2017-04-24 09:57:06', 6),
(648, NULL, 'uploads/book/1492880326_page_(5).jpg', 27, '2017-04-22 14:58:46', '2017-04-24 09:57:06', 7),
(649, NULL, 'uploads/book/1492880326_page_(6).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 8),
(650, NULL, 'uploads/book/1492880326_page_(7).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 9),
(651, NULL, 'uploads/book/1492880326_page_(8).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 10),
(652, NULL, 'uploads/book/1492880326_page_(9).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 11),
(653, NULL, 'uploads/book/1492880326_page_(10).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 12),
(654, NULL, 'uploads/book/1492880326_page_(11).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 13),
(655, NULL, 'uploads/book/1492880326_page_(12).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 14),
(656, NULL, 'uploads/book/1492880326_page_(13).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 15),
(657, NULL, 'uploads/book/1492880326_page_(14).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 16),
(658, NULL, 'uploads/book/1492880326_page_(15).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 17),
(659, NULL, 'uploads/book/1492880326_page_(16).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 18),
(660, NULL, 'uploads/book/1492880326_page_(17).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 19),
(661, NULL, 'uploads/book/1492880326_page_(18).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 20),
(662, NULL, 'uploads/book/1492880326_page_(19).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 21),
(663, NULL, 'uploads/book/1492880326_page_(20).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 22),
(664, NULL, 'uploads/book/1492880326_page_(21).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 23),
(665, NULL, 'uploads/book/1492880326_page_(22).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 24),
(666, NULL, 'uploads/book/1492880326_page_(23).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 25),
(667, NULL, 'uploads/book/1492880326_page_(24).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 26),
(668, NULL, 'uploads/book/1492880326_page_(25).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 27),
(669, NULL, 'uploads/book/1492880326_page_(26).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 28),
(670, NULL, 'uploads/book/1492880326_page_(27).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 29),
(671, NULL, 'uploads/book/1492880326_page_(28).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 30),
(672, NULL, 'uploads/book/1492880326_page_(29).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 31),
(673, NULL, 'uploads/book/1492880326_page_(30).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 32),
(674, NULL, 'uploads/book/1492880326_page_(31).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 33),
(675, NULL, 'uploads/book/1492880326_page_(32).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 34),
(676, NULL, 'uploads/book/1492880326_page_(33).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 35),
(677, NULL, 'uploads/book/1492880326_page_(34).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 36),
(678, NULL, 'uploads/book/1492880326_page_(35).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 37),
(679, NULL, 'uploads/book/1492880326_page_(36).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 38),
(680, NULL, 'uploads/book/1492880326_page_(37).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 39),
(681, NULL, 'uploads/book/1492880326_page_(38).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 40),
(682, NULL, 'uploads/book/1492880326_page_(39).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 41),
(683, NULL, 'uploads/book/1492880326_page_(40).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 42),
(684, NULL, 'uploads/book/1492880326_page_(41).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 43),
(685, NULL, 'uploads/book/1492880326_page_(42).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 44),
(686, NULL, 'uploads/book/1492880326_page_(43).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 45),
(687, NULL, 'uploads/book/1492880326_page_(44).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 46),
(688, NULL, 'uploads/book/1492880326_page_(45).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 47),
(689, NULL, 'uploads/book/1492880326_page_(46).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 48),
(690, NULL, 'uploads/book/1492880326_page_(47).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 49),
(691, NULL, 'uploads/book/1492880326_page_(48).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 50),
(692, NULL, 'uploads/book/1492880326_page_(49).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 51),
(693, NULL, 'uploads/book/1492880326_page_(50).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 52),
(694, NULL, 'uploads/book/1492880326_page_(51).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 53),
(695, NULL, 'uploads/book/1492880326_page_(52).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 54),
(696, NULL, 'uploads/book/1492880326_page_(53).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 55),
(697, NULL, 'uploads/book/1492880326_page_(54).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 56),
(698, NULL, 'uploads/book/1492880326_page_(55).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 57),
(699, NULL, 'uploads/book/1492880326_page_(56).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 58),
(700, NULL, 'uploads/book/1492880326_page_(57).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 59),
(701, NULL, 'uploads/book/1492880326_page_(58).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 60),
(702, NULL, 'uploads/book/1492880326_page_(59).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 61),
(703, NULL, 'uploads/book/1492880326_page_(60).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 62),
(704, NULL, 'uploads/book/1492880326_page_(61).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 63),
(705, NULL, 'uploads/book/1492880326_page_(62).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 64),
(706, NULL, 'uploads/book/1492880326_page_(63).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 65),
(707, NULL, 'uploads/book/1492880326_page_(64).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 66),
(708, NULL, 'uploads/book/1492880326_page_(65).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 67),
(709, NULL, 'uploads/book/1492880326_page_(66).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 68),
(710, NULL, 'uploads/book/1492880326_page_(67).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 69),
(711, NULL, 'uploads/book/1492880326_page_(68).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 70),
(712, NULL, 'uploads/book/1492880326_page_(69).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 71),
(713, NULL, 'uploads/book/1492880326_page_(70).jpg', 27, '2017-04-22 14:58:46', '2017-04-22 14:59:31', 72);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'محاضرات', '2017-04-12 13:20:41', '2017-04-12 13:20:41'),
(6, 'رحلات', '2017-04-12 13:20:52', '2017-04-12 13:20:52'),
(7, 'مقابلات', '2017-04-12 13:21:24', '2017-04-12 13:21:24'),
(8, 'برامج', '2017-04-12 13:21:33', '2017-04-12 13:21:33'),
(9, 'كواليس', '2017-04-12 13:21:45', '2017-04-12 13:21:45'),
(10, 'زيارات', '2017-04-12 13:21:54', '2017-04-12 13:21:54'),
(11, 'لقاءات', '2017-04-12 13:21:59', '2017-04-12 13:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'أحمد فكري', 'ahmedfikry78@gmaill.cim', 'sdfff', '2017-04-12 10:13:52', '2017-04-12 10:13:52'),
(2, 'شسي', 'ahmedfikry78@gmaill.cim', 'سييي', '2017-04-12 10:15:35', '2017-04-12 10:15:35'),
(3, 'erwer', 'wqewq@21321.com', 'ewrew', '2017-04-20 16:30:50', '2017-04-20 16:30:50'),
(5, 'hi ', 'emad@ivas.com.ef', 'hi mesage', '2017-04-22 07:02:57', '2017-04-22 07:02:57'),
(6, 'Ed Miller', 'data4ceos07052017@gmail.com', 'We are offering our 13 Million U.S. BUSINESS Database for only $299 - limited time only.\nThis is our 2017 Edition and is available for 72 hours!\n\nBuy this database and download it instantly here: http://bit.do/dnYmW\n\nThis list includes \n\n> Business Name\n> Contact\n> Address\n> Phone\n> Fax\n> E-mail\n> Address\n> SIC\n\nPurchase This Database and Download Your File Instantly here: \nhttp://bit.do/dnYmW\n\nVisit our website for a FREE sample: http://bit.do/dnYmW\n\nCheers,\n\n--\nEdward Miller | Database Specialist\nMass Marketing, Inc.\nDirect Toll : 1 (888) 406-8880 Ext 303\nSkype: massmarketing1\nhttp://bit.do/dnYmW\n\n\n\nTo Stop future offers - go here:\nhttp://www.optout.ga/index.html#url=http://www.eltalhyofficial.com', '2017-07-05 06:38:02', '2017-07-05 06:38:02'),
(7, 'Ed Miller', 'data4ceos07102017@gmail.com', 'We are offering our 13 Million U.S. BUSINESS Database for only $299 - limited time only.\nThis is our 2017 Edition and is available for 72 hours!\n\nBuy this database and download it instantly here: http://bit.do/dnYmW\n\nThis list includes \n\n> Business Name\n> Contact\n> Address\n> Phone\n> Fax\n> E-mail\n> Address\n> SIC\n\nPurchase This Database and Download Your File Instantly here: \nhttp://bit.do/dnYmW\n\nVisit our website for a FREE sample: http://bit.do/dnYmW\n\nCheers,\n\n--\nEdward Miller | Database Specialist\nMass Marketing, Inc.\nDirect Toll : 1 (888) 406-8880 Ext 303\nSkype: massmarketing1\nhttp://bit.do/dnYmW\n\n\n\nTo Stop future offers - go here:\nhttp://www.optout.ga/index.html#url=http://www.eltalhyofficial.com', '2017-07-10 08:17:53', '2017-07-10 08:17:53'),
(8, 'صانعة السرور', 'sani3at23sorour@gmail.com', 'السلام عليكم سيدنا وابن سيدنا جاهيتك بجاهي جدك صلى الله عليه وسلم اعني اعانك الله,انا امرءة بلغت من الكبر عتيا,قصمني المكر وكسرني الغدر ويوشك الظلم ا ن يقتلني,لا اطيل حلمي ان اتم حفظ القران وان احفظه بالروايات,والاكبر منه حلمي مند الصغر ان اسلك طريق العارفين والسائرين,هدي احلامي لكني مقيدة باغلال الهموم ولا يمكنني الخروج بالدعاء فتح الله لي باب النت واريد ان اجعله طريق لاحلمي سيدي قالوا العلماء ادا صدق المريد وجد الشيخ عند الباب,وقالوا ايضا من لا شيخ له فالشيطان شيخه يا سيدي ياعترة النبي اتوسل اليك دلني الى الله عرفني طريق ربي او دلني على عارفة عابدة تدلني على الله ,ارسلت للعديد من الشيوخ والداعيات لكن لا اجابة سيدي انا عطشى الى ربي والى سيدي حلو الكلام حبيبي محمد صلى الله عليه وسلم ,بجاهي جدكم اغيثوني احب هدا المسلك,لتعلم صدقي سيدي سجلت في مقرءة الحرم المدني للقران والسنة انتظر ردهم ,ياترى هل تقرء رسالتي وتلبى رجوتي,اللهم ان كنت تعلم مني الصدق يسرلي طريق السير اليك', '2018-01-03 14:35:41', '2018-01-03 14:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `title`, `message`, `created_at`, `updated_at`) VALUES
(4, 'وما أبرئ نفسي', 'وما أبرئ نفسي إن النفس لأمارة بالسوء إلا ما رحم ربي إن ربي غفور رحيم(53) سورة يوسف', '2017-04-24 10:21:15', '2017-04-24 10:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2018_04_19_123847_create_abouts_table', 0),
('2018_04_19_123847_create_album_table', 0),
('2018_04_19_123847_create_audio_table', 0),
('2018_04_19_123847_create_book_photos_table', 0),
('2018_04_19_123847_create_books_table', 0),
('2018_04_19_123847_create_categories_table', 0),
('2018_04_19_123847_create_contacts_table', 0),
('2018_04_19_123847_create_messages_table', 0),
('2018_04_19_123847_create_newsletters_table', 0),
('2018_04_19_123847_create_password_resets_table', 0),
('2018_04_19_123847_create_permissions_table', 0),
('2018_04_19_123847_create_photos_table', 0),
('2018_04_19_123847_create_relations_table', 0),
('2018_04_19_123847_create_role_has_permissions_table', 0),
('2018_04_19_123847_create_roles_table', 0),
('2018_04_19_123847_create_scaffoldinterfaces_table', 0),
('2018_04_19_123847_create_sections_table', 0),
('2018_04_19_123847_create_settings_table', 0),
('2018_04_19_123847_create_sliders_table', 0),
('2018_04_19_123847_create_user_has_permissions_table', 0),
('2018_04_19_123847_create_user_has_roles_table', 0),
('2018_04_19_123847_create_users_table', 0),
('2018_04_19_123847_create_videos_table', 0),
('2018_04_19_123850_add_foreign_keys_to_audio_table', 0),
('2018_04_19_123850_add_foreign_keys_to_book_photos_table', 0),
('2018_04_19_123850_add_foreign_keys_to_photos_table', 0),
('2018_04_19_123850_add_foreign_keys_to_relations_table', 0),
('2018_04_19_123850_add_foreign_keys_to_role_has_permissions_table', 0),
('2018_04_19_123850_add_foreign_keys_to_sections_table', 0),
('2018_04_19_123850_add_foreign_keys_to_user_has_permissions_table', 0),
('2018_04_19_123850_add_foreign_keys_to_user_has_roles_table', 0),
('2018_04_19_123850_add_foreign_keys_to_videos_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'ahmedfikry78@gmail.com', '2017-04-16 15:42:55', '2017-04-16 15:42:55'),
(4, 'sdfs@fs.com', '2017-04-16 15:52:35', '2017-04-16 15:52:35'),
(5, 'asdas@dasd.com', '2017-04-19 12:39:28', '2017-04-19 12:39:28'),
(6, 'asdasd@asdas.com', '2017-04-19 12:39:41', '2017-04-19 12:39:41'),
(7, 'asdasdas@addd.com', '2017-04-19 12:40:23', '2017-04-19 12:40:23'),
(8, 'sdf@sdaf.com', '2017-04-19 12:41:02', '2017-04-19 12:41:02'),
(9, 'sdff@sadf.com', '2017-04-20 05:42:08', '2017-04-20 05:42:08'),
(10, 'wqewq@21321.com', '2017-04-20 18:38:34', '2017-04-20 18:38:34'),
(11, 'asra21993@gmail.com', '2017-04-20 20:01:27', '2017-04-20 20:01:27'),
(12, 'mohamedzeker@gmail.com', '2017-04-21 00:49:45', '2017-04-21 00:49:45'),
(16, 'emad@ivas.com.eg', '2017-04-22 07:03:42', '2017-04-22 07:03:42'),
(17, 'ffffatmahmdi75@gmail.coom', '2017-04-22 14:23:10', '2017-04-22 14:23:10'),
(18, 'heba.elsayed2030@yahoo.com', '2017-04-26 19:04:06', '2017-04-26 19:04:06'),
(19, 'heba.elsayed2030@yahoo.com', '2017-04-28 12:14:31', '2017-04-28 12:14:31'),
(20, 'elgelany.group@gmail.com', '2017-05-02 05:06:37', '2017-05-02 05:06:37'),
(21, 'ahmedfikry78@gmaill.cism', '2017-05-02 12:10:49', '2017-05-02 12:10:49'),
(22, 'mangan52@msn.com', '2017-05-10 09:35:13', '2017-05-10 09:35:13'),
(23, 'clintwkelley@hotmail.com', '2017-05-10 15:29:19', '2017-05-10 15:29:19'),
(24, 'glip@rotman.utoronto.ca', '2017-05-10 18:53:03', '2017-05-10 18:53:03'),
(25, 'mkessle5@optonline.net', '2017-05-10 19:09:50', '2017-05-10 19:09:50'),
(26, 'traneamaro@gmail.com', '2017-05-10 20:43:52', '2017-05-10 20:43:52'),
(27, 'g.chatelus@gmail.com', '2017-05-11 09:45:04', '2017-05-11 09:45:04'),
(28, 'bobgalik@gmail.com', '2017-05-11 13:01:34', '2017-05-11 13:01:34'),
(29, 'raulcorrea83@yahoo.com', '2017-05-11 19:50:10', '2017-05-11 19:50:10'),
(30, 'rosie.craven@att.net', '2017-05-11 21:47:56', '2017-05-11 21:47:56'),
(31, 'proofofperchise@yahoo.com', '2017-05-12 10:32:39', '2017-05-12 10:32:39'),
(32, 'malk2011@wael.com', '2017-05-13 19:44:46', '2017-05-13 19:44:46'),
(33, 'dvk.kaz@gmail.com', '2017-05-13 21:48:22', '2017-05-13 21:48:22'),
(34, 'ebau21@gmail.com', '2017-05-14 12:45:26', '2017-05-14 12:45:26'),
(35, 'abad17@cox.net', '2017-05-14 23:00:16', '2017-05-14 23:00:16'),
(36, 'fullx73@yahoo.com', '2017-05-15 05:18:26', '2017-05-15 05:18:26'),
(37, 'michaelwallz@yahoo.com', '2017-05-15 10:31:03', '2017-05-15 10:31:03'),
(38, 'bjmoses5@gmail.com', '2017-05-15 17:33:53', '2017-05-15 17:33:53'),
(39, 'warmachine6538@yahoo.com', '2017-05-15 19:39:39', '2017-05-15 19:39:39'),
(40, 'bobdav3@gmail.com', '2017-05-15 23:54:12', '2017-05-15 23:54:12'),
(41, 'tristan.castle15@yahoo.com', '2017-05-16 05:47:48', '2017-05-16 05:47:48'),
(42, 'tristan.castle15@yahoo.com', '2017-05-16 06:23:05', '2017-05-16 06:23:05'),
(43, 'candy12553@yahoo.com', '2017-05-16 08:04:54', '2017-05-16 08:04:54'),
(44, 'alessandrasenatore@gmail.com', '2017-05-16 12:34:19', '2017-05-16 12:34:19'),
(45, 'baruchi@campusasp.com', '2017-05-16 14:34:20', '2017-05-16 14:34:20'),
(46, 'mmelaine7@yahoo.com', '2017-05-16 18:19:32', '2017-05-16 18:19:32'),
(47, 'acehauling@gmail.com', '2017-05-16 18:26:47', '2017-05-16 18:26:47'),
(48, 'aldrebskaya@gmail.com', '2017-05-16 18:34:40', '2017-05-16 18:34:40'),
(49, 'charwren@optonline.net', '2017-05-16 22:32:05', '2017-05-16 22:32:05'),
(50, 'tsoong@vegeusa.com', '2017-05-17 05:48:39', '2017-05-17 05:48:39'),
(51, 'vakay30@gmail.com', '2017-05-17 06:32:00', '2017-05-17 06:32:00'),
(52, 'beatricebosquez@yahoo.com', '2017-05-17 22:17:26', '2017-05-17 22:17:26'),
(53, 'rebirthrenewal@yahoo.com', '2017-05-18 11:12:53', '2017-05-18 11:12:53'),
(54, 'jeffmparsons@yahoo.com', '2017-05-19 13:29:39', '2017-05-19 13:29:39'),
(55, 'stin18x@yahoo.com', '2017-05-20 21:12:06', '2017-05-20 21:12:06'),
(56, 'go2cong@yahoo.com', '2017-05-21 18:24:49', '2017-05-21 18:24:49'),
(57, 'jamieb77_2000@yahoo.com', '2017-05-22 13:08:30', '2017-05-22 13:08:30'),
(58, 'paul.chahine.11@gmail.com', '2017-05-23 06:18:03', '2017-05-23 06:18:03'),
(59, 'zipwyp@yahoo.com', '2017-05-23 07:53:07', '2017-05-23 07:53:07'),
(60, 'ros_alexandher@yahoo.com', '2017-05-23 16:02:14', '2017-05-23 16:02:14'),
(61, 'jamieb77_2000@yahoo.com', '2017-05-23 22:05:55', '2017-05-23 22:05:55'),
(62, 'amer_alanezi@yahoo.com', '2017-05-26 17:42:36', '2017-05-26 17:42:36'),
(63, 'tubacca123@gmail.com', '2017-05-29 09:38:05', '2017-05-29 09:38:05'),
(64, 'jeffmparsons@yahoo.com', '2017-05-29 16:18:10', '2017-05-29 16:18:10'),
(65, 'bdour_tarek@yahoo.com', '2017-05-30 17:41:13', '2017-05-30 17:41:13'),
(66, 'seanlin2008@yahoo.com', '2017-05-30 18:35:07', '2017-05-30 18:35:07'),
(67, 'cwhitcher69@gmail.com', '2017-05-31 01:19:03', '2017-05-31 01:19:03'),
(68, 'dkduke57@gmail.com', '2017-05-31 02:35:18', '2017-05-31 02:35:18'),
(69, 'sshillingmd@yahoo.com', '2017-06-01 07:41:59', '2017-06-01 07:41:59'),
(70, 'ahmedfef@fek.com', '2017-06-12 09:48:32', '2017-06-12 09:48:32'),
(71, 'ahmedfekryaaa@asd.com', '2017-06-12 09:50:41', '2017-06-12 09:50:41'),
(72, 'asd@asd.com', '2017-06-12 09:52:32', '2017-06-12 09:52:32'),
(73, 'emad@ivas.com.eg', '2017-06-13 10:57:43', '2017-06-13 10:57:43'),
(74, 'emad@ivas.com.eg', '2017-06-13 10:57:50', '2017-06-13 10:57:50'),
(75, 'emad@ivas.com.eg', '2017-06-13 10:58:03', '2017-06-13 10:58:03'),
(76, 'emad@ivas.com.eg', '2017-06-13 10:58:23', '2017-06-13 10:58:23'),
(77, 'ahmedfikry78@gmaill.cim', '2017-06-13 11:04:08', '2017-06-13 11:04:08'),
(78, 'sdfff@asd.com', '2017-06-13 11:04:38', '2017-06-13 11:04:38'),
(79, 'midosaima@yahoo.com', '2017-07-30 03:37:41', '2017-07-30 03:37:41'),
(80, 'suzan.ahmad.h@gmail.com', '2017-12-31 10:10:21', '2017-12-31 10:10:21'),
(81, 'badeerdada@gmail.com', '2018-01-05 14:50:02', '2018-01-05 14:50:02'),
(82, 'rabeakhaled6@gmail.com', '2018-01-08 11:30:46', '2018-01-08 11:30:46'),
(83, 'Syriamaheer@gmail.com', '2018-02-17 17:58:57', '2018-02-17 17:58:57'),
(84, 'amieraelbarouduy@gmai.com', '2018-02-20 20:59:09', '2018-02-20 20:59:09'),
(85, 'mahmoud.ahmed.info@gmail.com', '2018-04-10 14:21:13', '2018-04-10 14:21:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `photo_path`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'رحله الى روسيا', 'uploads/photo\\1492011873_IMG_7628.JPG', 6, '2017-04-12 13:44:33', '2017-04-12 13:44:33'),
(33, 'المدينة المنورة', 'uploads/photo/1492697369_01.jpg', 6, '2017-04-20 12:09:29', '2017-04-20 12:09:29'),
(36, 'روسيا', 'uploads/photo/1492697438_02.jpg', 6, '2017-04-20 12:10:38', '2017-04-20 12:10:38'),
(37, '', 'uploads/photo/1492697461_01.jpg', 9, '2017-04-20 12:11:01', '2017-04-20 12:11:01'),
(38, '', 'uploads/photo/1492697476_02.jpg', 9, '2017-04-20 12:11:16', '2017-04-20 12:11:16'),
(39, '', 'uploads/photo/1492697490_03.jpg', 9, '2017-04-20 12:11:30', '2017-04-20 12:11:30'),
(40, '', 'uploads/photo/1492697514_04.jpg', 9, '2017-04-20 12:11:54', '2017-04-20 12:11:54'),
(41, '', 'uploads/photo/1492697543_05.jpg', 9, '2017-04-20 12:12:23', '2017-04-20 12:12:23'),
(42, '', 'uploads/photo/1492697558_07.jpg', 9, '2017-04-20 12:12:38', '2017-04-20 12:12:38'),
(43, '', 'uploads/photo/1492697576_08.jpg', 9, '2017-04-20 12:12:56', '2017-04-20 12:12:56'),
(44, '', 'uploads/photo/1492697591_09.jpg', 9, '2017-04-20 12:13:11', '2017-04-20 12:13:11'),
(45, '', 'uploads/photo/1492697612_10.jpg', 9, '2017-04-20 12:13:32', '2017-04-20 12:13:32'),
(46, '', 'uploads/photo/1492697629_11.jpg', 9, '2017-04-20 12:13:49', '2017-04-20 12:13:49'),
(47, '', 'uploads/photo/1492697657_12.jpg', 9, '2017-04-20 12:14:17', '2017-04-20 12:14:17'),
(48, '', 'uploads/photo/1492697668_14.jpg', 9, '2017-04-20 12:14:28', '2017-04-20 12:14:28'),
(49, '', 'uploads/photo/1492697684_15.jpg', 9, '2017-04-20 12:14:44', '2017-04-20 12:14:44'),
(50, '', 'uploads/photo/1492697698_16.jpg', 9, '2017-04-20 12:14:58', '2017-04-20 12:14:58'),
(51, '', 'uploads/photo/1492697711_17.jpg', 9, '2017-04-20 12:15:11', '2017-04-20 12:15:11'),
(52, '', 'uploads/photo/1492697723_19.jpg', 9, '2017-04-20 12:15:23', '2017-04-20 12:15:23'),
(53, '', 'uploads/photo/1492697736_22.jpg', 9, '2017-04-20 12:15:36', '2017-04-20 12:15:36'),
(54, '', 'uploads/photo/1492697747_23.jpg', 9, '2017-04-20 12:15:47', '2017-04-20 12:15:47'),
(55, '', 'uploads/photo/1492697763_27.jpg', 9, '2017-04-20 12:16:03', '2017-04-20 12:16:03'),
(56, '', 'uploads/photo/1492697777_28.jpg', 9, '2017-04-20 12:16:17', '2017-04-20 12:16:17'),
(57, '', 'uploads/photo/1492697793_32.jpg', 9, '2017-04-20 12:16:33', '2017-04-20 12:16:33'),
(58, '', 'uploads/photo/1492697809_33.jpg', 9, '2017-04-20 12:16:49', '2017-04-20 12:16:49'),
(59, '', 'uploads/photo/1492698056_34.jpg', 9, '2017-04-20 12:20:56', '2017-04-20 12:20:56'),
(60, '', 'uploads/photo/1492698072_35.jpg', 9, '2017-04-20 12:21:12', '2017-04-20 12:21:12'),
(61, '', 'uploads/photo/1492698086_37.jpg', 9, '2017-04-20 12:21:26', '2017-04-20 12:21:26'),
(62, '', 'uploads/photo/1492698100_38.jpg', 9, '2017-04-20 12:21:40', '2017-04-20 12:21:40'),
(63, '', 'uploads/photo/1492698111_39.jpg', 9, '2017-04-20 12:21:51', '2017-04-20 12:21:51'),
(64, '', 'uploads/photo/1492698132_40.jpg', 9, '2017-04-20 12:22:12', '2017-04-20 12:22:12'),
(65, '', 'uploads/photo/1492698144_41.jpg', 9, '2017-04-20 12:22:24', '2017-04-20 12:22:24'),
(66, '', 'uploads/photo/1492698337_01.jpg', 5, '2017-04-20 12:25:37', '2017-04-20 12:25:37'),
(67, '', 'uploads/photo/1492698349_08.jpg', 5, '2017-04-20 12:25:49', '2017-04-20 12:25:49'),
(68, '', 'uploads/photo/1492698360_09.jpg', 5, '2017-04-20 12:26:00', '2017-04-20 12:26:00'),
(69, '', 'uploads/photo/1492698372_19.jpg', 5, '2017-04-20 12:26:12', '2017-04-20 12:26:12'),
(70, '', 'uploads/photo/1492698385_20.jpg', 5, '2017-04-20 12:26:25', '2017-04-20 12:26:25'),
(71, '', 'uploads/photo/1492698416_22.jpg', 5, '2017-04-20 12:26:56', '2017-04-20 12:26:56'),
(72, '', 'uploads/photo/1492698428_24.jpg', 5, '2017-04-20 12:27:08', '2017-04-20 12:27:08'),
(73, '', 'uploads/photo/1492698478_29.jpg', 5, '2017-04-20 12:27:58', '2017-04-20 12:27:58'),
(74, '', 'uploads/photo/1492698492_31.jpg', 5, '2017-04-20 12:28:12', '2017-04-20 12:28:12'),
(76, '', 'uploads/photo/1492698567_48.jpg', 5, '2017-04-20 12:29:27', '2017-04-20 12:29:27'),
(77, '', 'uploads/photo/1492698580_49.jpg', 5, '2017-04-20 12:29:40', '2017-04-20 12:29:40'),
(78, '', 'uploads/photo/1492698594_53.jpg', 5, '2017-04-20 12:29:54', '2017-04-20 12:29:54'),
(80, '', 'uploads/photo/1492698622_78.jpg', 5, '2017-04-20 12:30:22', '2017-04-20 12:30:22'),
(81, '', 'uploads/photo/1492698670_83.jpg', 5, '2017-04-20 12:31:10', '2017-04-20 12:31:10'),
(82, '', 'uploads/photo/1492698685_86.jpg', 5, '2017-04-20 12:31:25', '2017-04-20 12:31:25'),
(83, '', 'uploads/photo/1492698702_87.jpg', 5, '2017-04-20 12:31:42', '2017-04-20 12:31:42'),
(84, '', 'uploads/photo/1492698717_89.jpg', 5, '2017-04-20 12:31:57', '2017-04-20 12:31:57'),
(85, '', 'uploads/photo/1492698751_95.jpg', 5, '2017-04-20 12:32:31', '2017-04-20 12:32:31'),
(86, '', 'uploads/photo/1492698761_96.jpg', 5, '2017-04-20 12:32:41', '2017-04-20 12:32:41'),
(87, '', 'uploads/photo/1492698774_98.jpg', 5, '2017-04-20 12:32:54', '2017-04-20 12:32:54'),
(88, '', 'uploads/photo/1492698935_02.jpg', 7, '2017-04-20 12:35:35', '2017-04-20 12:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE IF NOT EXISTS `relations` (
  `id` int(10) unsigned NOT NULL,
  `scaffoldinterface_id` int(10) unsigned NOT NULL,
  `to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `having` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `relations`
--

INSERT INTO `relations` (`id`, `scaffoldinterface_id`, `to`, `having`, `created_at`, `updated_at`) VALUES
(1, 2, '1', 'OneToMany', '2017-04-10 07:08:37', '2017-04-10 07:08:37'),
(2, 3, '1', 'OneToMany', '2017-04-10 07:09:56', '2017-04-10 07:09:56'),
(3, 10, '9', 'OneToMany', '2017-04-10 07:28:10', '2017-04-10 07:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scaffoldinterfaces`
--

CREATE TABLE IF NOT EXISTS `scaffoldinterfaces` (
  `id` int(10) unsigned NOT NULL,
  `package` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `views` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tablename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scaffoldinterfaces`
--

INSERT INTO `scaffoldinterfaces` (`id`, `package`, `migration`, `model`, `controller`, `views`, `tablename`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_090738_categories.php', 'C:\\xampp\\htdocs\\blog11\\app/Category.php', 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/CategoryController.php', 'C:\\xampp\\htdocs\\blog11\\resources/views/category', 'categories', '2017-04-10 07:07:38', '2017-04-10 07:07:38'),
(2, 'Laravel', 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_090837_photos.php', 'C:\\xampp\\htdocs\\blog11\\app/Photo.php', 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/PhotoController.php', 'C:\\xampp\\htdocs\\blog11\\resources/views/photo', 'photos', '2017-04-10 07:08:37', '2017-04-10 07:08:37'),
(3, 'Laravel', 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_090956_videos.php', 'C:\\xampp\\htdocs\\blog11\\app/Video.php', 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/VideoController.php', 'C:\\xampp\\htdocs\\blog11\\resources/views/video', 'videos', '2017-04-10 07:09:56', '2017-04-10 07:09:56'),
(4, 'Laravel', 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_091041_newsletters.php', 'C:\\xampp\\htdocs\\blog11\\app/Newsletter.php', 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/NewsletterController.php', 'C:\\xampp\\htdocs\\blog11\\resources/views/newsletter', 'newsletters', '2017-04-10 07:10:41', '2017-04-10 07:10:41'),
(5, 'Laravel', 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_091200_contacts.php', 'C:\\xampp\\htdocs\\blog11\\app/Contact.php', 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/ContactController.php', 'C:\\xampp\\htdocs\\blog11\\resources/views/contact', 'contacts', '2017-04-10 07:12:00', '2017-04-10 07:12:00'),
(6, 'Laravel', 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_091238_settings.php', 'C:\\xampp\\htdocs\\blog11\\app/Setting.php', 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/SettingController.php', 'C:\\xampp\\htdocs\\blog11\\resources/views/setting', 'settings', '2017-04-10 07:12:38', '2017-04-10 07:12:38'),
(7, 'Laravel', 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_092235_audio.php', 'C:\\xampp\\htdocs\\blog11\\app/Audio.php', 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/AudioController.php', 'C:\\xampp\\htdocs\\blog11\\resources/views/audio', 'audio', '2017-04-10 07:22:36', '2017-04-10 07:22:36'),
(8, 'Laravel', 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_092523_sliders.php', 'C:\\xampp\\htdocs\\blog11\\app/Slider.php', 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/SliderController.php', 'C:\\xampp\\htdocs\\blog11\\resources/views/slider', 'sliders', '2017-04-10 07:25:24', '2017-04-10 07:25:24'),
(9, 'Laravel', 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_092652_books.php', 'C:\\xampp\\htdocs\\blog11\\app/Book.php', 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/BookController.php', 'C:\\xampp\\htdocs\\blog11\\resources/views/book', 'books', '2017-04-10 07:26:53', '2017-04-10 07:26:53'),
(10, 'Laravel', 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_092810_sections.php', 'C:\\xampp\\htdocs\\blog11\\app/Section.php', 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/SectionController.php', 'C:\\xampp\\htdocs\\blog11\\resources/views/section', 'sections', '2017-04-10 07:28:10', '2017-04-10 07:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title`, `page_number`, `book_id`, `created_at`, `updated_at`) VALUES
(74, 'الطهارة وأقسامها', '1', 27, '2017-04-22 14:58:46', '2017-04-22 14:58:46'),
(75, 'فرائض الوضوء', '2', 27, '2017-04-22 14:58:46', '2017-04-22 14:58:46'),
(76, 'نواقض الوضوء', '3', 27, '2017-04-22 14:58:46', '2017-04-22 14:58:46'),
(77, 'فرائض الغسل وسننة', '4', 27, '2017-04-22 14:58:46', '2017-04-22 14:58:46'),
(78, ' التيمم وموجباته', '5', 27, '2017-04-22 14:58:46', '2017-04-22 14:58:46'),
(79, 'الصلاة وشروطها', '6', 27, '2017-04-22 14:58:46', '2017-04-22 14:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(3, 'facebook_link', 'http://www.facebook.com/ElTalhyOfficial', '2017-04-16 15:56:22', '2017-04-22 07:58:22'),
(4, 'youtube_link', 'http://www.youtube.com/channel/UC28v97ukG58n0QgHdfSu-Hg', '2017-04-16 15:56:43', '2017-04-20 06:50:03'),
(5, 'instagram_link', 'http://www.instagram.com/ElTalhyOfficial', '2017-04-16 15:57:00', '2017-04-20 06:50:07'),
(6, 'twitter_link', 'http://www.twitter.com/ElTalhyOfficial', '2017-04-16 15:57:45', '2017-04-20 06:50:13'),
(7, 'telegram_link', '#', '2017-04-16 15:58:09', '2017-04-16 15:58:09'),
(8, 'soundcloud_link', 'http://www.soundcloud.com/ElTalhyOfficial', '2017-04-16 15:58:24', '2017-04-20 06:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `link`, `photo_path`, `created_at`, `updated_at`) VALUES
(5, 'الموقع الرسمي', 'هو السيّد:  أحمد ابن فوزي بن خليفة الطلحي يرجع نسبه للإمام الحسن المثنى بن الإمام الحسن السبط بن أمير المؤمنين علي بن أبي طالب والسيّدة فاطمة الزهراء ψ بنت سيّدنا محمّد خاتم النبيين ', 'http://www.eltalhyofficial.com/aboutus', 'uploads/slider\\1492464284_slide_3.png', '2017-04-17 19:24:44', '2017-04-22 08:24:01'),
(6, 'مقابلات', 'شاهد مقابلات السيد أحمد الطلحي وبرامجة التلفزيونية.', '#', 'uploads/slider\\1492464472_profile2.png', '2017-04-17 19:27:52', '2017-04-17 19:27:52'),
(7, 'سفير النوايا الحسنة', 'يقول عنه أتباعه ومُحِبُّوه إنه نموذج للشاب الذي نشأ في طاعة الله ومرضاة نبيه، وطالب العلم الذي لا تحول المسافات والعوائق بينه وبين بُغْيَتِه.', '#', 'uploads/slider\\1492464558_slide_3.png', '2017-04-17 19:29:18', '2017-04-17 19:29:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'emad', 'emad@ivas.com.eg', '$2y$10$3BZ2R4ZRLLfqeZPSwxmIFuu2KICXYEwKEBhxAjgJ0BDJ13bmPP3NW', 'i9ZhRUI6vU3RZnX1gtFBJU8chOlCEvwszWO3EMLFor0sKDMoXPTabNH5K8qW', NULL, '2018-04-24 12:59:34'),
(2, 'test', 'test@ivas.com.eg', '$2y$10$e0ibEfjqZtA3PLGVPL86HeKvis8xXg/7ldvhaKnSDzLJY/RMq3N7S', 'hhciDbipUjWerNi4vxYg40yPndyr44Uv0Mm40mYrXmFD5rL4sWERmOGo6kqg', '2018-04-24 09:05:11', '2018-04-24 09:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

CREATE TABLE IF NOT EXISTS `user_has_permissions` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_has_roles`
--

CREATE TABLE IF NOT EXISTS `user_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `youtube_link`, `description`, `category_id`, `created_at`, `updated_at`, `slug`) VALUES
(7, 'الفاتحة بصوت الداعية الإسلامى السيد أحمد الطلحى', 'https://www.youtube.com/embed/T5O5IMGHIvE?rel=0&amp;controls=0&amp;showinfo=0', 'الفاتحة بصوت الداعية الإسلامى السيد أحمد الطلحى', 7, '2017-04-20 08:44:03', '2017-04-20 12:05:45', 'lfth-bsot-ldaay-lslm-lsyd-ahmd-ltlh'),
(8, 'video 2', 'https://www.youtube.com/embed/R1snCTA6zk4?list=RDR1snCTA6zk4', 'video description 2', 7, '2018-09-23 12:00:28', '2018-09-23 12:02:56', 'video-2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `audio_category_id_foreign` (`category_id`),
  ADD KEY `audio_album_id_foreign` (`album_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_photos`
--
ALTER TABLE `book_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_photos_book_id_foreign` (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_category_id_foreign` (`category_id`);

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relations_scaffoldinterface_id_foreign` (`scaffoldinterface_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `scaffoldinterfaces`
--
ALTER TABLE `scaffoldinterfaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_book_id_foreign` (`book_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `user_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `user_has_roles_user_id_foreign` (`user_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `book_photos`
--
ALTER TABLE `book_photos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=714;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scaffoldinterfaces`
--
ALTER TABLE `scaffoldinterfaces`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `audio_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `audio_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_photos`
--
ALTER TABLE `book_photos`
  ADD CONSTRAINT `book_photos_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `relations`
--
ALTER TABLE `relations`
  ADD CONSTRAINT `relations_scaffoldinterface_id_foreign` FOREIGN KEY (`scaffoldinterface_id`) REFERENCES `scaffoldinterfaces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
