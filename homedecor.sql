-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 03:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homedecor`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `img`) VALUES
(1, 'Artisan Lighting', 'Artisan Crafted Lighting supplies beautifully handcrafted designer lighting. All artisan pendant bulbs are signed by the designer. \r\nThese Artisan lighting models are completely unique and artisanal, mouthblown by professional glass blowers. It is the human aspect of manufacturing these pieces of art that makes all the beauty and uniqueness of these Artisan lighting. You won’t find this level of exceptionality and timelessness anywhere else!\r\nArtisan lighting to buy online with your HomeDecor online store.', 'artinsanlight.png'),
(2, 'Cosy & Trendy', 'The brother of Cozy & Trendy, Cozy & Trendy home decoration & seasonal inspiration, stands for decoration, gift and seasonal items. Choose Cozy & Treny online from our HomeDecor webshop range or contact us if you are looking for a specific item!\r\n', 'cosytrendy.jpg'),
(3, 'Countryfield', 'Countryfield is the largest Dutch brand of country decoration. Countryfield is an expert in rural home decoration and has been around for over 15 years. Countryfield Country Decoration can now be purchased at your HomeDecor shop online. Welcome to Countryfield\'s country-style interior and home decoration! Countryfield offers a choice of stylish home decorations for both indoors and outdoors. Countryfield is the label with atmospheric living and rural home decoration. Welcome to Countryfield and HomeDecor Shop Countrystyle Decoration!', 'countryfield.jpg'),
(4, 'Diphano ', 'Diphano is a Belgian manufacturer of luxury outdoor furniture with ultimate seating comfort.\r\nDiphano outdoor garden furniture has been established since 2015, now available exclusively at the HomeDecor webshop.\r\nDiphano is durable; The Diphano outdoor garden furniture is made of a highly durable composite and is made of weatherproof, water repellent and wear resistant color-resistant textile, which can withstand salt, sun and pool water. Choose high-quality Diphano outdoor garden furniture for intensive daily use.\r\nDiphano is FUNCTIONAL; The Diphano outdoor garden furniture is not only a pleasure in the eye, these outdoor garden furniture are also extremely practical, lightweight, stackable if you do not need them, and highly adaptable to any location or context. The Diphano outdoor garden furniture is a perfect blend between elegance and usability.', 'diphano.jpg'),
(5, 'J - Line', 'J-line pleasure of living: Home decoration since 1978. The Belgian interior brand J-Line specializes in cozy country style home furniture and cottage interior decoration. The J-Line brand offers a fine selection of top quality decorative items twice a year (spring/summer and autumn/winter) with attention both to trendy items and timeless classics.\r\nJ-Line is a popular interior decoration brand. For all J-Line furniture, contact us if you like more info.', 'jline.png'),
(6, 'PR-Living', 'PR-Living is a new brand among the PR ROGIERS Group, which supplies its own collections of furniture worldwide. HomeDecor is an exclusive dealer that guarantees you a smooth delivery from Waregem. You buy your seat directly from the manufacturer, so we can always offer the sharpest price!\r\nPR-LIVING has an up-to-date stock of various models of standard seats, but most seats are custom made. Choose your model and dimensions and fabric according to your interior.', 'prliving.png'),
(7, 'Rogiers', 'Rogiers furniture was established in 1960 in Waregem. Furniture Rogiers is the brand par excellence for classic country oak furniture. Rogiers has a wide range of authentic solid oak furniture in country style. Come and visit us to see our rustic oak furniture Rogiers.', 'rogiers.png'),
(8, 'Scapa Home', 'The Scapa Home brand is a \"way of living\". A WARM HOME WELCOMES YOU WITH our SCAPA HOME collections. In HomeDecor we have all Scapa Home furniture online to shop for a SCAPA HOME way of living.', 'scapahome.jpg'),
(9, 'Serax', 'SERAX maison d\'être: The goal is to make life more pleasant by creating distinctive ambiance and affordable products. In our shop you\'ll find the newest collection by Antonino Sciortino: bistro tabes and design lamps,...', 'serax.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `menu` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `route`, `description`, `image`, `menu`, `parent_id`) VALUES
(2, 'Furniture', 'furniture', 'All STYLES of FURNITURE inspired by HomeDecor. We\'re specialized in country style furniture for all the rooms of your  house. You also find industrial loft style furniture and scandinavian furniture in your HomeDecor.\r\nFind out our rustic furniture collection Country Style Furniture online, a wide range of loft style and cottage furniture with cupboards - dining tables and chairs - occasional tables - coffee tables - cottage side tables & classic desks - country style seats & couches - bergeres - cottage showcases - cottage bookcases ... Any questions about our country style furniture? Do not hesitate to contact us. We make the difference ... Even if the furniture is not included in our range, we can obtain on order.', 'furniture.jpg', 1, NULL),
(3, 'Home Accessories', 'home-accesories', 'Home decoration and living accessories online to shop with your HomeDecor online store.\r\nHomeDecor has all decoration for the home and living room. Contemporary and high quality, modern and authentic country style decorations. Decorate your home with our budget friendly country style home accessories, timeless decorations and antiques. HomeDecor is your online interior shop with a wide range indoor and outdoor home and living accessories. Get inspired with your online store!', 'accesories.jpg', 1, NULL),
(4, 'Outdoor', 'outdoor', 'The online Garden Trendstore with HomeDecor garden furniture shop. Outdoor Lounge Sets, Bistro tables, Outdoor furniture, lovely wasp traps, picnic tables, etc.\r\nHomeDecor online outdoor store has the \"grateful\" gifts: handmade, durable and trendy garden decoration.\r\nNice weather, beautiful days, ... we want to fully enjoy our garden and terrace all year round.\r\nThe online Outdoor Liviong store of HomeDecor offers you outdoor garden furniture and outdoor lounge sets, design bistro tables, trendy garden decoration, luxurious garden furniture of the better quality and so much more ... discover our garden furniture range online. We distribute the complete collections of garden furniture -> Contact us for a quote and delivery time for all items that you will find in the calaloog.', 'outdoor.jpg', 1, NULL),
(5, 'Lighting', 'lighting', 'Lighting\r\nLighting & contemporal lamps online store!\r\nExclusive collection of contemporal country style lighting and vintage lighting by Lighting Online,\r\nHomeDecor online store has contemporal lighting for every room of the house: country style pendants, cottage floor lamps, vintage wall lamps and original table lamps with stylish lampshades\r\nNew Vintage contemporal lighting for you to shop online', 'lighting.jpg', 1, NULL),
(6, 'Sofas and couches', 'sofas-and-couches', 'Sofas and couches\r\nCountry style sofas and couches in your HomeDecor country style interior store. Timeless cottage style sofas and high quality couches. Wonderful Chesterfield sofas online to buy at best prices! Order from stock in our webshop.', 'sofas.jpg', 0, 2),
(7, 'Chairs', 'chairs', 'Choose your country style dining chairs online. Wide choice dining chairs in cottage country style, high quality and timeless dining chairs all styles you can buy with your HomeDecor interior store! Dining chairs with buttoned upholstered seat or dining chairs with wooden seat, oak chairs, etc. Country style dining chairs and loft style are our specialty.\r\nNew in our range are the vintage industrial dining chairs and high comfort barstools of pu leather and metal.\r\nPlease contact us if you want more info.', 'chairs.jpg', 0, 2),
(8, 'Tables', 'tables', 'And finally comes the moment when we can all sit down to the table. The table can be used in virtually any room, in the dining room, living room, kitchen or home office. Functional and stylish, it is used for dining, working at the computer, doing homework or playing board games. Small and large, fold-out and decorative, each house needs its own table.', 'tables.jpg', 0, 2),
(9, 'Armchairs', 'armchairs', 'There is no better place than home – and while you are in there, there is no better place than a comfortable armchair, to sit on and relax. Choosing the right armchair is a crucial step to create the perfect spot for watching films, reading or simply unwinding and recharging after a hectic day.\r\n', 'armchairs.jpg', 0, 2),
(10, 'Accessories', 'accesories', 'The element without which the room has an incomplete character are the accessories you place in it. Decorative elements enable creating a diverse landscape without too much hassle, and most of them will also be functional. Experiment with interesting combinations which you\'ll create using the products available in our shop and fill your home with style.', 'acc1.jpg', 0, 3),
(11, 'Christmas Accessories', 'christmas-accessories', 'HomeDecor loves Christmas and has special Christmass decorations for you in store\r\nChristmas decorations for you to say, beautiful baubles, experience with LIVING-shop online store a unique Christmas ... Fairytale and original Christmas decorations and pendants for the Christmas tree, beautiful Christmas presents, the possibilities are endless...with HomeDecor`s Christmas decorations online you will have an unforgettable Christmas too.', 'christmas.jpg', 0, 3),
(12, 'Mirrors', 'mirrors', 'Mirrors\r\nChoose from our range country style mirrors, naturel wooden mirrors, oak mirrors or white mirrors country and baroque style. Item not found? Contact us for more info', 'mirrors.jpg', 0, 3),
(13, 'Wall Decor', 'wall-decor', 'Wall decor is wallcovering for your walls.\r\nFind your wall decoration for the nursery or wall coverings for any other room of the house.', 'walldecors.jpg', 0, 3),
(14, 'Lounge Sets', 'lounge-sets', 'Every garden or terrace benefits from a conversation area. Lounge sets create a perfect opportunity for spending time with your family and friends while drinking coffee and enjoying the sun or throwing a party. Because of different shapes and sizes, lounge sets allow for finding the set-up that fits you best. Choose from a wide range of materials, looks and designs that fully meet your needs.', 'loungeset.jpg', 0, 4),
(15, 'Dining Sets', 'dining-sets', 'A well-kept garden is a perfect place for the family to gather, share experiences and create memories through the warm months. Its focal point should be fitting dining set for you and your close ones to eat delicious meals every summer night. Above all, an outdoor dining area should be comfy and inviting. How to choose a perfect dining set?', 'diningset.jpg', 0, 4),
(16, 'Platio Daybeds', 'platio-beds', 'With the season now in full, you need to take care of your garden and equip it with the most necessary furniture. If you plan to relax and spend your days soaking the sun, you should think of getting one of our patio daybeds. ', 'platiobed.jpg', 0, 4),
(17, 'Swings', 'swings', 'If you are looking for a way to enhance your outdoor area or a balcony and you dream about an inviting as well as cosy space, choose a garden swing from a variety accessible in our offer. An outdoor swing is a perfect way to create a more lively environment, attractive for adults as well as entertaining for children. Do not hesitate and this summer enjoy sunny weather to its fullest! ', 'swings.jpg', 0, 4),
(18, 'Table Lamps', 'table-lamps', 'In need of a utility piece that can also be a wonderful decoration? A table lamp can fulfil your needs with ease! They produce soft light, so can be used as a reading lamp or - in some cases - as desk lamps, but at the same time, their design can be unique and attention drawing. ', 'tablelamp.jpg', 0, 5),
(19, 'Chandelier', 'chandelier', 'If a simple pendant light is not enough, and you seek glamour and splendour, a chandelier is a right piece for your interior. It is an impressive and eye-catching ceiling fixture, no matter if it is on or off. Mounted over a dining table, it adds a fancy feel to any dinner or supper. Installed in a bedroom, it instantly transforms it into an elegant master suite. With a wide choice of designs, you can find a chandelier that will match and defy your space.', 'chandelier.jpg', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `msg` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `date`, `name`, `email`, `phone`, `msg`) VALUES
(22, '2022-03-13', 'Zika Zikic', 'zika@gmail.com', '064/458-888', 'I would like to book a tour to yout showrooms. Is it possible to be this week?'),
(26, '2022-03-13', 'Anna', 'anna_jenn@gmail.com', '063/331-824', 'Hi, I would like to ask weather you you`ll get red leather sofas any time soon?');

-- --------------------------------------------------------

--
-- Table structure for table `order_line_table`
--

CREATE TABLE `order_line_table` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_line_table`
--

INSERT INTO `order_line_table` (`order_id`, `product_id`, `quantity`) VALUES
(20, 64, 1),
(20, 65, 1),
(20, 55, 1),
(20, 58, 1),
(21, 12, 1),
(21, 42, 1),
(22, 127, 1),
(23, 20, 1),
(23, 64, 1),
(24, 132, 1),
(24, 37, 1),
(25, 135, 1),
(26, 75, 1),
(26, 98, 1),
(27, 136, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id`, `date`, `country`, `city`, `address`, `phone`, `user_id`) VALUES
(20, '2022-03-12', 'Srbija', 'Beograd', 'Vojvode Stepe', '064/458-888', 12),
(21, '2022-03-13', 'Srbija', 'Nis', 'Kneza Lazara 12', '064/458-878', 14),
(22, '2022-03-13', 'Srbija', 'Beograd', 'Bulevar vojvode Mišica 19', '061/234-567', 13),
(23, '2022-03-13', 'Srbija', 'Novi Sad', 'Telep 12', '061/234-567', 13),
(24, '2022-03-13', 'Crna Gora', 'Nikšić', 'Njegoševa 5', '061/789-125', 15),
(25, '2022-03-13', 'Srbija', 'Beograd', 'Bulevar vojvode Putnika 5', '061/234-567', 13),
(26, '2022-03-15', 'Srbijaa', 'Beograd', 'Bulevar vojvode Mišica 19', '061/234-567', 13),
(27, '2022-03-15', 'Srbija', 'Beograd', 'Bulevar vojvode Mišica 19', '061/234-567', 13);

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slider` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `alt`, `image`, `slider`) VALUES
(1, 'Slide 1', 'slide1.jpg', 1),
(2, 'Slide 2', 'slide2.jpg', 1),
(3, 'Slide 3', 'slide3.jpg', 1),
(4, 'Gallery 1', 'gallery1.jpg', 0),
(5, 'Gallery 2', 'gallery2.jpg', 0),
(6, 'Gallery 3', 'gallery3.jpg', 0),
(7, 'Gallery 4', 'gallery4.jpg', 0),
(8, 'Gallery 5', 'gallery5.jpg', 0),
(9, 'Gallery 6', 'gallery6.jpg', 0),
(10, 'Gallery 7', 'gallery7.jpg', 0),
(11, 'Gallery 8', 'gallery8.jpg', 0),
(12, 'Gallery 9', 'gallery9.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `spotlight` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `admin_img` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img`, `spotlight`, `category_id`, `brand_id`, `admin_img`) VALUES
(1, 'Left Hand Velvet Corner Sofa Teal ABERDEEN', 'This large corner sofa is an ideal anchor piece for your living room, inviting and homely. Versatile in design, the sofa can be turned into a comfortable bed for two thanks to the adjustable backrest. Additionally, the chaise can be positioned on either side to suit your needs. Fully upholstered in high-quality, rich teal fabric with elegant tufting, this corner sofa offers both functionality and timeless style that will highlight the best of any modern home. The whole piece is kept stable thanks to metal legs.', 899, 'sofa1.jpg', 0, 6, 6, NULL),
(2, 'Set of 2 Wooden Dining Chairs Grey LYNN', 'A set of two modern dining chairs in stylish, unique design. The natural wooden frame and beautiful grey faux leather upholstery are a perfect fit for any interior. High, curved backrest supports correct body posture, while the high-quality materials guarantee durability and timeless elegance. Pair the chair with a matching table in your dining room or kitchen and enjoy the designer look, as well as a comfortable, inviting dining space.\n\n', 209, 'chair1.jpg', 0, 7, 7, NULL),
(3, 'Wooden Dining Table Light Wood and White ', 'Create a lovely dining space with this elegant wooden table. It perfectly fits many interiors, from minimalistic and Scandinavian to a classic cottage dining room or kitchen. The combination of natural light wood and the black colour makes the room look fresh and lively. The table offers ample space for four people. Its solid construction and high-quality materials guarantee long-term use and easy maintenance.', 209, 'table1.jpg', 0, 8, 8, NULL),
(4, 'Velvet Fabric Wingback Chair Dark Green ALTA', 'The elegant and comfortable armchair is an excellent enhancement to your living room. Constructed using a solid wood frame and finished with a quality polyester velvet fabric, means the chair looks sophisticated whilst ensuring exceptional durability. A fully upholstered, button decorated seat with recessed arms and high backrest provide stately seating comfort. The chair\'s classic design makes it a truly timeless piece that is suitable for traditional decors.', 359, 'armchair1.jpg', 0, 9, 5, NULL),
(5, 'Decorative Vase Grey Megara', 'This large decorative vase in grey colour brings a lot of Mediterranean vibe into a living area. Arranged in the corner of a room or placed on the window sill by numerous potted plants, the item will embellish every modern and boho interior. The vase is handmade, painted and purposefully distressed for a retro look.', 55, 'accessorie1.jpg', 0, 10, 2, NULL),
(6, 'Outdoor LED Decoration Snowman 50 cm White KUMPU', 'This cute snowman definitely makes a whimsical addition to any setting, whether indoor or outdoor. It\'s constructed from robust metal which is covered in white cotton. The piece additionally features LED fairy lights which beautifully highlight the glittering fabric. The snowman features a practical timer which automatically turns off the lights after 6 hours. Place it on your porch or living room and enjoy the Christmas spirit.', 69, 'christmas1.jpg', 0, 11, 3, NULL),
(7, 'Standing Mirror 40 x 140 cm Copper BRECEY', 'Decorate your interior with this stylish mirror to not only draw attention of your houseguests, but to also visually enlarge your room. Crafted out of durable materials, the piece doesn\'t require daily maintenance to serve for many years. Thanks to a stand on its back, you can place it away from a wall and not worry about it falling over. The mirror will look the best in modern, glamorous interiors due to its decorative frame.', 119, 'mirror1.jpg', 0, 12, 2, NULL),
(8, 'Framed Wall Art 60 x 60 cm Multicolour GALAWA', 'This printed art will brighten up any space, bringing in an energetic feeling. Its botanical theme of palm leaves comes to life in an uplifting colour blend. It is a great accessory to add interest to walls and looks good hung as a single décor item as well as arranged with other wall pieces. Style it in your hallway, bedroom or home office to make it look welcoming.', 49, 'walldecor1.jpg', 0, 13, 6, NULL),
(9, '2 Seater PE Rattan Garden Lounge Set Natural PONZA', 'Recline and relax on a comfortable garden set for two. Consist of two high back armchairs paired with matching footstools and perfectly tailored thick pillows, it offers a cosy place to rest during a warm evening. It comes with a small coffee table with tempered glass top and additional shelf for books, magazines or decorations. With a frame crafted from sturdy aluminium and durable faux rattan body, this set withstands adverse weather conditions. The pieces are easy to maintain and the seating cushions can be washed and refreshed thanks to the zipped covers. The set looks perfect when matched with traditional or boho accessories.', 959, 'loungeset1.jpg', 1, 14, 4, NULL),
(10, '6 Seater Dining Set Dark Wood with Black REDOLA', 'Inspired by industrial design, this 7- piece dining set is sure to be a functional as well as a trendy focal point of any room. The hard-wearing steel construction is matched with weathered wood look MDF for a rustic look. With its straightforward, raw appearance, the set will blend smoothly into the interiors in a vintage, minimalistic or contemporary style.\n\n', 429, 'diningset1.jpg', 0, 15, 7, NULL),
(11, 'PE Rattan Garden Daybed White SYLT', 'Lounge outside in style with this garden canopy daybed with a retractable sun cover. Furnished lavishly with cushions, the bed also keeps you cool with the convenient white canopy. The base is made of durable synthetic rattan that withstands diverse weather conditions. A powder-coated steel frame guarantees stability on uneven surfaces. The neutral colour palette is perfect for a range of garden designs.', 819, 'platiobed1.jpg', 0, 16, 4, NULL),
(12, 'Wooden Garden Swing Light Wood and White APRILIA', 'This outstanding garden swing adds a charming atmosphere to any garden! Unique design and slightly curved shape mix with high functionality. The all-weather wood construction is durable and comes in a warm, teak finish that accentuates the white upholstery. The easy-care seat cover can be cleaned with a damp sponge. The swing is exceptionally stable and comfortable. A chain and suspension clips are crafted from steel.', 489, 'swing1.jpg', 1, 17, 4, NULL),
(13, '6 Light Metal Chandelier Silver BRADANO', 'This elegant ambient lamp is a modern take on a classic chandelier. The design features six lights surrounded by bright shades made from high-quality acrylic. They are suspended on a curved frame finished in high gloss chrome. The fixture brings a glamorous touch to a hallway or entertaining area in any modern as well as a traditional home.', 109, 'chandelier1.jpg', 0, 19, 1, NULL),
(14, 'Table Lamp Black MOOKI', 'This lamp is a trendy statement piece that will fit perfectly on a desk or on a bedside table as a reading light. Its elegant tripod base is crafted from steel turns orange when it reaches the shade. The lampshade in black colour features poly cotton and its orange-coloured inside provides a warm and pleasant glow.', 55, 'tablelamp1.jpg', 0, 18, 1, NULL),
(15, '3 Seater Velvet Sofa Grey EIKE', 'This cosy velvet sofa is a real eye-catcher, infusing your living room with a soft vintage feel. Designed to bring to your home a chic and old-fashion homely mood, it features ornate, wooden legs, rolled arms and a soft fabric that will maintain its rich colour for years. The generously padded cushions and matching toss pillows complement the piece, creating a beautifully cosy composition.', 779, 'sofa2.jpg', 0, 6, 6, NULL),
(16, '7 Seater Curved Fabric Modular Sofa Grey ROTUNDE', 'Define your living room style with this round sectional fabric sofa. The circular design and generous seating ensure that the sofa becomes a focal point of any contemporary and modern interior. The high quality, durable grey fabric covers the soft padding and ensures that you will treasure this piece for years to come.', 2399, 'sofa3.jpg', 1, 6, 6, NULL),
(17, 'Fabric Sofa Bed Grey and Blue Patchwork INGARO', 'Created for functionality, this modern sofa is fully adaptable to your needs. The armrests recline in 3 stages, allowing for comfy sitting or napping positions. With the adjustable backrest, you can easily go for a semi-reclined position, while the click-clack mechanism allows quick conversion into a single bed. Generous foam padding, and tailoring in square quilted upholstery is highlighted by slim metal legs in wood-like finish.', 369, 'sofa4.jpg', 0, 6, 2, NULL),
(18, 'Leather Living Room Set Cream HELSINKI', 'Ultra-stylish with its streamlined simplicity, this set will transform any living space into the ultimate lounge. The sofa set comes with a 3-seater, a 2-seater loveseat and a club chair. Each piece features a robust frame and stable, metal legs for the utmost comfort. Split leather on all seating surfaces, including back and armrests, ensures durability. High-grade synthetic leather is an economical solution for sides, bottom, and backside.', 1719, 'sofa5.jpg', 0, 6, 6, NULL),
(19, '\r\n\r\nLeft Hand Chaise Lounge Faux Leather White NIMES', 'The marvellous chaise lounge is an elegant piece to add to your interior, especially suitable for living rooms and halls. Upholstered with a top-grade artificial leather, it is sturdy and pleasant to touch. The chaise lounge is additionally embellished with tufted buttons and nailhead trim. A combination of engineered wood and hardwood make the frame and legs exceptionally durable, warranting great stability and longevity.\r\n\r\n', 359, 'sofa6.jpg', 0, 6, 3, NULL),
(20, 'Right Hand Chaise Lounge Flower Print Beige NIMES', 'The marvellous chaise lounge is an elegant piece to add to your interior, especially suitable for living room and halls. Upholstered with quality fabric, it is durable and pleasant to touch. The chaise lounge is additionally embellished with tufted buttons and nailhead trim, as well as a floral pattern, which makes it a centrepiece in any space. A combination of engineered wood and hardwood make the frame and legs exceptionally durable, warranting great stability and longevity.', 389, 'sofa7.jpg', 1, 6, 7, NULL),
(21, '2 Seater Velvet Sofa Beige SKIEN', 'Enhance your interior with this elegant and glamorous sofa. Featuring tufted backrest and armrests, paired with nailhead trim, this piece is truly one of a kind, elevating any space to a higher level. Its design, heavily inspired by retro and vintage decor, easily fits within any living room or office space. Made from high-quality materials, it is incredibly durable, while its surface is covered with smooth to touch and easy to take care of velvet. The sofa comes with two throw pillows that feature a removable cover that translates to easy cleaning without a worry for stains, in matching colour and design\r\n\r\n', 589, 'sofa8.jpg', 0, 6, 6, NULL),
(22, '2 Seater Fabric Sofa Sand Beige OTRA', 'A modern 2-seater sofa with a Victorian flair fits well with contemporary and traditional interiors. Thickly padded cushions with removable covers are featured on the seats and on the backs, which are soft to touch yet resistant because of a polyester upholstery. A robust frame made from a solid wood provides support and stability to the entire construction. Armrests are decorated with classic nail heads in a silver glossy finish. It will easily become a favourite relaxation space in every home.\r\n\r\n', 379, 'sofa9.jpg', 0, 6, 3, NULL),
(24, 'Velvet Sofa Set Dark Red SKIEN', 'Enhance your interior with this elegant and glamorous sofa set. Featuring tufted backrest and armrests, paired with nailhead trim, this piece is truly one of a kind, elevating any space to a higher level. Its design, heavily inspired by retro and vintage decor, easily fits within any living room or office space. Made from high-quality materials, it is incredibly durable, while its surface is covered with smooth to touch and easy to take care of velvet. The sofa comes with two throw pillows that feature a removable cover that translates to easy cleaning without a worry for stains, in matching colour and design.', 1199, 'sofa11.jpg', 0, 6, 8, NULL),
(25, '3 Seater Velvet Sofa Navy Blue BORNHOLM', 'This sofa is a true stand-out piece for any modern or glam interior. Upholstered in soft-to-the-touch navy blue polyester velvet, this 3 seater features a multiple-cushion seat filled with fluffy and lightweight foam. The backrest consists of six cushions which add a retro appeal to the sofa. Together with round arms and profiled black legs made from eucalyptus, the sofa creates an inviting area for social get-togethers.', 499, 'sofa12.jpg', 0, 6, 2, NULL),
(26, '2 Seater Fabric Sofa Light Grey SKIBBY', 'Add a retro vibe to your kitchen and simultaneously gain a comfortable seat with this practical sofa. Its metal construction and wooden legs guarantee stability, while the easy-care polyester upholstery gives it a timeless look. The characteristic, winged backrest is decorated with a subtle, button tuft that perfectly complements the curved armrests. The piece splendidly blends in with modern and traditional interiors accentuating any space with the old-time charm.', 439, 'sofa13.jpg', 0, 6, 3, NULL),
(27, 'Set of 2 Velvet Dining Chairs Taupe Beige JASMIN', 'Conveying the features of the minimalistic and luxurious design, this chair boasts a timeless look that works great styled with any modern or traditional home furnishing. The seat’s clean-lined contours are tailored in taupe velvet upholstery with tufted details. The smooth texture and the light tone can add chic to a room décor or calm down bold colour scheme. Completed with slim metal legs, the chair suits by a dining table as well as in a bedroom or home library.', 279, 'chair2.jpg', 0, 7, 2, NULL),
(28, 'Set of 2 Fabric Dining Chairs Light Brown ROSLYN', 'Introduce a stylish retro vibe to your dining room or kitchen with this unique chair set. Upholstered in high-quality fabric, each chair features a deep, comfortable seat and slender wooden legs that perfectly underline the mid-century look. The rounded gaps in the backrests create a bold, eye-catching accent. Thanks to the high-quality material, the chairs are easy-care and maintain their fresh, unique look for years.', 169, 'chair3.jpg', 0, 7, 6, NULL),
(29, 'Set of 2 Wooden Dining Chairs Black BURBANK', 'Make a statement with minimalism with these durable and sleek wooden chairs. Made from durable solid wood and painted black, the chairs have a lacquered, glossy finish. The wide seat is complemented by a slanted, slatted backrest adding a twist to this classic design to create a Scandi-inspired look. Pair them with a table in the dining room, or enjoy them on their own in the kitchen or living room.', 159, 'chair4.jpg', 0, 7, 8, NULL),
(30, 'Set of 2 Faux Leather Dining Chairs Beige BROADWAY', 'Inspired by Scandinavian design, the dining chairs become one of the most comfortable seats in your home. High-quality faux leather gives them a sophisticated look while being effortless to maintain and soft to touch. Sturdy rubberwood legs guarantee chairs\' stability and durability to withstand prolonged usage. Chic looking, they complement virtually any modern decor.', 109, 'chair5.jpg', 0, 7, 6, NULL),
(31, 'Set of 2 Dining Chairs Gold GIRARD', 'This 2-piece set of chairs presents a striking blend of retro and glamour styles. The chair features a high, decorative backrest and a padded seat upholstered in faux leather. Place it in a dining room or a living area to give the room an elegant character. The armless design lets you easily slide the chair under a table top.', 139, 'chair6.jpg', 0, 7, 3, NULL),
(32, 'Dining Table 140 x 80 cm Dark Wood with Black SPECTRA', 'Add an instant upgrade to your dining area with this industrial-inspired table. The piece features a durable, high-quality MDF table top in warm tones of brown, and is based on steady, metal legs in black, making it blend perfectly with any modern or warehouse home decor. The table can seat up to 6 people thus it\'s ideal for any family dinner or friends’ gathering.\n\n', 409, 'table2.jpg', 0, 8, 3, NULL),
(33, 'Extending Dining Table 180/220 x 90 cm White HAMLER', 'Perfectly contemporary and classic at the same time, this table is sure to make a statement in your interior. Clean-lined, straightforward design enhanced by the white glossy surface is a perfect match with minimalistic home décor. Designed with butterfly feature, the table easily extends so that you can sit up to 8 guests.', 649, 'table3.jpg', 0, 8, 5, NULL),
(34, 'Dining Table 180 x 90 cm Light Wood with Black ADENA', 'Designed to implement the industrial and clubhouse feel to any space, the dining table blends perfectly with any room with a warehouse or loft decor. The table features a durable, thick MDF top with sturdy metal hairpin legs that give stability and strength. Finished in warm tones of light wood, the table works excellently with interiors in minimalist, vintage or urban style.', 499, 'table4.jpg', 0, 8, 9, NULL),
(35, 'Coffee Table Marble Effect White with Gold MERIDIAN II', 'The coffee table brings an art deco design and mid-century flair to your home office or living room. The round table features gold hairpin legs and a white tempered glass table top with marble effect finish which gives the design an opulent and elegant look. This timeless table will complement an array of home décor styles, from retro to modern and glam.', 169, 'table5.jpg', 0, 8, 7, NULL),
(36, 'Set of 3 Coffee Tables Light Wood with Black MELODY', 'Add some character and create an urban vibe in your living space with this set of industrial-inspired coffee tables. A round table top in a walnut-like finish provides a perfect place to display candles, plants and photographs, or serve hot beverages to your guests. The metal legs in matt black give stable support but do not detract from the overall style of the pieces. The tables are multifunctional and may also serve as bedside tables or hallway accent pieces.', 169, 'table6.jpg', 0, 8, 2, NULL),
(37, 'Nest of 2 Side Tables Dark Wood CAMROSE', 'This set of side tables is the perfect addition of industrial chic to any modern or Scandi-styled home. Each table top is beautifully unique, crafted from the cross-section of a tree trunk. The minimalist aesthetic is echoed in three hairpin legs which offer stability and style. Place these tables next to a sofa for your cup of tea and necessities to be close to hand.', 109, 'table7.jpg', 1, 8, 3, NULL),
(38, 'Teak Wood Side Table MERRITT', 'A compact side table that fits perfectly by a bedside or next to a sofa. Its design is inspired by nature and made of a high-quality teak wood. The trendy design is an accent piece that enlivens the whole interior, no matter if placed in a living room, bedroom or an office.', 69, 'table8.jpg', 0, 8, 5, NULL),
(39, 'Fabric Wingback Chair Blue ABSON', 'Always in fashion, this fabric chair in a light tone of blue perfectly complements any existing interior scheme. Designed in a classic wingback form, with a generously padded seat, high back and traditional rolled arms, the armchair fits well in a vintage as well as a modern bedroom, nursery or a living room. Style it in the corner or next to a coffee table to create a comfortable spot for relaxation.', 339, 'armchair2.jpg', 0, 9, 8, NULL),
(40, 'Patchwork Fabric Armchair Multicolour MOLDE', 'A striking patchwork armchair that works well as a centre-piece in a living or leisure room. The eye-catching design is crafted using a sturdy polyester fabric to ensure exceptional durability for prolonged usage. Solid wooden legs provide stability and work well with the rest of the seat. A well-padded seat and button-decorated backrest warrant a comfortable seating. The standout piece complements contemporary or vintage-inspired interior well.', 409, 'armchair3.jpg', 0, 9, 8, NULL),
(41, 'Velvet Armchair Red CHESTERFIELD', 'Characterised by a sweeping silhouette with wide scroll arms, this armchair comes in an iconic Chesterfield style that suits any modern or traditional interior. The low backrest, as well as soft, thickly padded seat cushions, provides excellent sitting comfort. Upholstered in a gorgeous velvet fabric in red, the seat features classic diamond button tufting. This English classic is easy to care for and looks great with any decor.', 369, 'armchair4.jpg', 0, 9, 7, NULL),
(42, 'Velvet Wingback Chair Beige SVEDALA', 'Create an ultra-cosy and inviting conversation corner with this classic wingback armchair. Adding a welcoming vintage touch to any interior, this chair features an extremely soft polyester velvet upholstery and a decorative studded trim, making it a great accent piece for any modern, glam or traditional décor. The Chesterfield inspired rolled arms, wingback style and dark brown profiled legs all help convey a beautifully sophisticated appearance. Thanks to the generously padded cushioned seat, this armchair will quickly become your favourite relaxation spot.\r\n\r\n', 359, 'armchair5.jpg', 0, 9, 2, NULL),
(43, 'Velvet Armchair Grey LOVIKKA', 'A perfect pick for those looking to introduce an extra bit of flair into their interiors. This stylish, novelty-shaped armchair has a beautiful, impressive upholstery made of soft velvet, and it will surely improve the looks of its surroundings, lending some elegance to the whole room. A greater level of durability and stability has been achieved thanks to the use of metal legs.', 289, 'armchair6.jpg', 0, 9, 6, NULL),
(44, 'Velvet Armchair Dark Blue SIRKKA', 'Indulge yourself in this elegant accent chair with a golden glow. Soft padding and smooth velvet upholstery will calm you down and create an atmosphere of luxurious hotels. Featuring a metal frame in gold colour, this chair will surely match the glamour style interiors, as well as the modern ones. Place this piece in a living room and match with a shiny legs coffee table, or in a bedroom with a vanity desk.\r\n\r\n', 299, 'armchair7.jpg', 0, 9, 5, NULL),
(45, 'Fabric Recliner Chair Taupe Beige BERGEN', 'Enjoy the cosiness and unbeatable comfort of this reclining armchair. This stylish settee features a regulated backrest that adjusts accordingly to your body and has a footrest that can alter your armchair into a comfortable place to lie down. The upholstery is made of easy to take care of taupe fabric. Wide armrests, a high backrest with a pleasant to touch material guarantee the unbeatable comfort of sitting.\r\n\r\n', 429, 'armchair8.jpg', 0, 9, 2, NULL),
(46, 'LED Recliner Chair with USB Port Grey SOMERO', 'You deserve relaxation after a long, hard day at work, and this recliner chair with a footrest is going to make it much easier to wind down after a busy day. Upholstered with high-quality polyester fabric, it is certain to last for many years, while requiring very simple maintenance. Using just your body, you can quickly go from sitting straight up to lying down in a comfortable position. Built-in LED will enrich the area with its strong, white light, and you also won\'t have to worry about your phone or laptop running out of battery - this armchair comes with a USB port that can quickly refuel your electronic devices.\r\n\r\n', 419, 'armchair9.jpg', 0, 9, 2, NULL),
(47, 'Fabric Recliner Chair with Ottoman Brown OLAND II', 'This armchair truly embodies the perfect combination of style and comfort. The seat, backrest and armrests are all generously padded, while the durable upholstery and black wooden legs add a retro touch. The chair can be easily adjusted to recline into five different positions. The pockets positioned on both sides of the arms mean the TV remote or your favourite book and magazine are always at hand. The set is completed with a matching footrest with plenty of space for weary feet.', 269, 'armchair10.jpg', 0, 9, 5, NULL),
(48, 'Table Clock Silver STANS', 'This extraordinary standing clock in the shape of an aeroplane can be a perfect decoration in your living room, bedroom or home office. Its universal colour and vintage design matches all interior styles. As this piece draws attention, it is certain to charm all your guests and people living with you.', 35, 'accessorie2.jpg', 0, 10, 8, NULL),
(49, 'Decorative Globe Gold EARTH', 'A golden globe on the stand is an accent piece that adds a unique character to any living room or home library. Its metallic colour and vintage style fits perfectly within traditional interiors. The sphere looks great placed on a desk or a bookshelf and makes a great gift for a traveller.', 39, 'accessorie3.jpg', 0, 10, 8, NULL),
(50, 'Metal Decorative Item Gold and Silver URANIUM', 'On the bedrooms\' chest of drawers, living rooms\' fireplace or hallways\' sideboard, this metal decorative piece adds an industrial vibe to the arrangement. Handcrafted from durable metal, it showcases one in a kind open framework that lets the sun\'s rays in, creating a unique light mosaic on the wall. Painted in silver and gold, with stylish distressing, it looks great in both modern and rustic interiors.', 45, 'accessorie4.jpg', 0, 10, 8, NULL),
(51, 'Steel Candle Lantern 46 cm Silver CORSICA', 'Brighten up indoor or outdoor spaces with this modern, geometric lantern. Whether filled with fairy lights or a candle, the lantern’s glow creates a cosy ambience. With a twist on a lantern’s traditional function, use it to showcase other decorative items like flowers and foliage for a unique look. Its handle on top allows it to be hung up as desired.\r\n\r\n', 35, 'accessorie5.jpg', 0, 10, 5, NULL),
(52, 'Artificial Potted Plant 70 cm MAGNOLIA', 'This medium size artificial magnolia decorates every room it is set in. Thick leaves and large pink flowers look like real ones, bringing a lot of natural charm to the living room, dining room, and even a kitchen. It is easy to clean and upkeep, as there is no need to remember about watering or replanting. Appreciate the greenness in your home without investing much effort.', 59, 'accessorie6.jpg', 0, 10, 9, NULL),
(53, 'Artificial Potted Plant 122 cm DIEFFENBACHIA', 'This large artificial plant is a perfect choice for busy people. The year-round greenness, the stems\' flexibility and a meticulous finish of the plant are guaranteed by a solid synthetic material. This accessory is a great addition to every living area, especially rooms kept in boho and Scandinavian style. Move the stems to achieve a desired shape of the plant.\r\n\r\n', 79, 'accessorie7.jpg', 0, 10, 9, NULL),
(54, 'Candelabra 53 cm Silver SOHAG', 'Whether as an everyday embellishment of any space or a decorative table element during a festive occasion, this candle holder is as practical as it gets. Made from durable and light aluminium it easily blends in with any interior in retro, glamour and traditional decor. A glossy silver finish and curvaceous shapes with wooden elements beautifully match any setup.', 49, 'accessorie8.jpg', 0, 10, 3, NULL),
(55, 'Pre-Lit Snowy Christmas Tree 120 cm White TATLOW', 'Do not dream of a white Christmas but make sure you’ll have one. Bring in this lovely, snowy tree to give your home a truly festive look. Made from robust synthetic material, it would make a great seasonal décor piece for many years to come. It features mouldable twigs and is fitted with LED lights. Decorate it with bulbs and ornaments or leave it as it is to give your interior a traditional look.\r\n\r\n', 119, 'christmas2.jpg', 0, 11, 8, NULL),
(56, 'Pre-Lit Christmas Garland 180 cm Green TENALA', 'Indoor Christmas decor always needs attention drawing accessories, that will add a festive mood to your home. This garland will do exactly that, as it comes equipped with LED lights, that will brighten up any room with warm light. It is also decorated with fake cranberries and pine cones. The piece is battery operated, so you don\'t have to worry about hanging it far from a power outlet. It is also controlled with an on/off switch, so you can turn it off whenever you want. The product is made out of synthetic material, so it is easy-care, and doesn\'t require daily maintenance.', 39, 'christmas3.jpg', 0, 11, 8, NULL),
(57, 'Christmas Tree 210 cm Pink FARNHAM', 'This year, make your Christmas decor exceptional with this fancy Christmas tree in a bold pink colour. It is a stunning way to display your love for the holiday and to add a splash of colour to your interior. The tree’s wired stems can be adjusted. It is a beauty and a decoration on its own, or you can pair it with some ornaments to give it an extra playful character.', 189, 'christmas4.jpg', 0, 11, 5, NULL),
(58, 'Set of 2 Cushions Reindeer Motif 45 x 45 cm Red COMET', 'A charming accent that brings a homely atmosphere to any setting. The pillows feature a reindeer motif on a red, plaid background that beautifies any sofa, armchair or bed. Made from durable polyester, the cases are exceptionally easy-care thanks to the convenient zip, opening.', 39, 'christmas5.jpg', 0, 11, 9, NULL),
(59, 'Decorative Figurine Reindeer Brown IMPIO', 'Prepare your interior for Christmas with this attention drawing, wonderful reindeer figurine. Made out of synthetic fur, it requires simple maintenance, while also being durable and long-lasting. Brown colour, combined with white parts of the fur and a red ribbon on its neck, makes for a unique combination. Placed next to a chimney or Christmas tree, this winter animal is going to become the focal point of the room for upcoming weeks.', 69, 'christmas6.jpg', 0, 11, 9, NULL),
(60, 'Christmas Wreath ⌀ 35 cm Green with Red RAATE', 'Add a wonderful, Christmas vibe to your interior using this traditional wreath. Made out of synthetic materials, it can be used for many years, every time enriching your interior and drawing attention of your guests. It features wooden pine cones mixed with cranberry, faux pine twigs and gold Christmas balls.', 29, 'christmas7.jpg', 0, 11, 5, NULL),
(61, 'Decorative Figurine Winter Boy Multicolour AIMO', 'Bring holiday spirit to your home with this handmade decorative figurine. Made from high-quality, durable ceramic, it depicts a silhouette of a child dressed for winter. It makes a perfect addition to any table, shelf or windowsill introducing a playful accent to any setting. The figure works also great as a small gift for the ones you hold dear to your heart.', 29, 'christmas8.jpg', 0, 11, 5, NULL),
(62, 'Set of 2 Rattan Decorative Christmas Gifts Red INARI', 'Add a rustic vibe to your living space and refresh your interior for Christmas with this set of decorative figurines. Shaped like gift boxes, they look great under the Christmas tree, as they are made out of natural elements and will stand out from other, real, gifts. They don\'t require any special maintenance, which ensures that these boxes will last for many years.\r\n\r\n', 49, 'christmas9.jpg', 0, 11, 5, NULL),
(63, 'Wooden Candle Wreath Green JATUNI', 'Light up your living space during darker, winter evenings using this traditional candle holder. Made out of solid wood, it will bring boho vibe wherever you decide to place it. Green pine cones, combined with brown elements, will draw attention to this decorative piece. It features four transparent holders, that allow you to put colourful candles inside them, while also offering space in the middle for one bigger candle.', 29, 'christmas10.jpg', 0, 11, 3, NULL),
(64, 'Decorative Figurine Squirrel Brown POSIO', 'Enrich your interior with this attention drawing figurine. Made out of high-quality synthetic fur, it requires almost no maintenance to last for many years. It is also pleasant to touch, and due to its size, it can be placed both on the floor, next to your Christmas tree, or on your end or coffee table. Unique colour combination and accents allow this squirrel to stand out.', 49, 'christmas11.jpg', 0, 11, 3, NULL),
(65, 'Blanket 200 x 220 cm Red and Blue REKA', 'Introduce a dash of Christmas spirit to your house by placing cute accents and details in your rooms. You can start by getting this extra soft and fluffy blanket. It features an extremely pleasant flannel fabric with a classic seasonal pattern in red and blue on one side, and a layer of white fur on the other. Relaxing on snowy winter evenings has never been so alluring.', 59, 'christmas12.jpg', 0, 11, 3, NULL),
(66, 'Round Wall Mirror ø 70 cm Silver LIMOGES', 'This round wall mirror gives a whole new meaning to \'glamour\'. Its round mirror plate surrounded by smaller ones in different sizes creates a mesmerising effect that will enrich any contemporary interior. It can be placed in a living room by a sofa, in a bedroom over a dresser or in the hall by the door to visually enlarge a space.\r\n\r\n', 179, 'mirror2.jpg', 0, 12, 6, NULL),
(67, 'Metal Sunburst Wall Mirror ø 60 cm Gold VOREY', 'The perfect combination of functionality and glam design, this mirror is a versatile feature for any modern space. Its metal frame surrounding a round glass showcases beautiful flourish, bringing in a glam twist. With its warm, gold finish, the mirror gives a room an instant upgrade.\r\n\r\n', 79, 'mirror3.jpg', 0, 12, 7, NULL),
(68, 'Round Metal Wall Mirror ø 47 cm Gold ANGLET', 'An elegant accent mirror encircled by ginkgo leaves will look lovely in the living room or bedroom. The golden metal frame is not only durable, but also perfectly complements the interiors in glamour style and chic design. The piece is both decorative and practical when hung over a console or dresser, it will enlarge the space and adorn it with its sublime form.', 49, 'mirror4.jpg', 0, 12, 8, NULL),
(69, 'Standing Mirror 40 x 140 cm Black TORCY', 'This tall, freestanding mirror makes a stylish accessory for any bedroom, living room or bathroom. Sleek design and minimalistic frame to match every interior, from modern to Scandinavian. The piece is also made out of eco-friendly synthetic material which ensures durability of the product. Featuring a practical stand, the mirror can be placed wherever you wish, visually enlarging the room and bringing reflected daylight to your living space to brighten up your day.', 119, 'mirror5.jpg', 0, 12, 5, NULL),
(70, 'Lighted Makeup Mirror ø 17 cm Black TUCHAN', 'Add a stylish and practical accessory to your bathroom or dressing table with this classic make-up mirror. The piece features an iron frame in black finish for a modern, clean look. What is more, it is double-sided, so you can use the standard or five times magnified reflection to your liking. The mirror blends in with virtually any space, and its inbuilt LED light comes in especially handy during your morning routine.', 49, 'mirror6.jpg', 0, 12, 7, NULL),
(71, 'Wildflowers Framed Canvas Wall Art 63 x 93 cm Blue and Grey BARBANIA', 'Whether you want to decorate a bedroom or a living room, this wall art perfectly solves a problem of an empty wall, adding a cosy touch to any interior. Charming wildflowers, in a shade of blue on a light grey background, are printed on durable canvas. The art print comes with a floating frame in light wood colour, and can be used as a wall decoration for any room.', 69, 'walldecor2.jpg', 0, 13, 3, NULL),
(72, 'Lion Framed Canvas Wall Art 63 x 93 cm Multicolour MARRADI', 'Introduce a trendy look to your interior with this wall art with a floating frame. The high-quality canvas depicts the roaring lion surrounded by butterflies and colourful flowers. Thanks to the combination of vibrant colours and contrasting motifs, this wall print adds a character to any room. The piece comes ready to hang, with hooks on the back.\r\n\r\n', 69, 'walldecor3.jpg', 0, 13, 7, NULL),
(73, 'Woman and Flowers Framed Canvas Wall Art 63 x 93 cm Multicolour CIVAGO', 'Make a statement in any room you want with this fantastic framed art. Printed on a canvas and put in a black floating frame, it can work in any area, from a bedroom to a hallway. The colourful print of a woman surrounded with flowers will bring in a whimsical touch. The printed art is a great way to dress any blank wall and make it look interesting.\r\n\r\n', 69, 'walldecor4.jpg', 0, 13, 7, NULL),
(74, 'Woman Face Framed Canvas Wall Art 63 x 93 cm Grey ERRANO', 'Upgrade the look of your wall with this contemporary wall art. The high-quality print on canvas placed in a thin, floating black frame features a blurry face of a woman. It will make a wonderful addition to any modern space, and thanks to the basic colours will suit nicely with other decor pieces.', 79, 'walldecor5.jpg', 0, 13, 8, NULL),
(75, '4 Seater PE Rattan Garden Sofa Set White SAN MARINO', 'Bring summer atmosphere and luxurious design to your garden with this elegant sofa set. This trendy furniture features long-lasting poly rattan and creates an inviting lounging area. The highest level of comfort is achieved thanks to the generously padded seat and back cushions in a neutral shade of grey. The set comes complete with a complimentary side table that features a clear glass top which provides ample space for your coffee and snacks.\n\n', 1299, 'loungeset2.jpg', 0, 14, 4, NULL),
(76, '4 Seater Certified Acacia Wood Garden Corner Sofa Set Taupe TIMOR', 'This classic garden sofa set comes with a coffee table and 4 seats that can be combined into a cosy corner sofa or used separately. Made from certified, acacia in a beautiful, light tone of the wood, it is perfect for outdoor lounging area and easy to clean. With the thickly padded seat and backrest cushions combined with comfortable, low design frame, this is the perfect focal point for any modern garden or patio.', 1219, 'loungeset3.jpg', 0, 14, 4, NULL),
(77, '4 Seater Aluminium Garden Sofa Set Dark Grey DELIA', 'Prepare your outdoor area for the summer with this stylish, modern garden set. Consisting of a two-seater sofa, armchairs and a rectangular coffee table, the set will provide enough space for you and your friends to enjoy sunny weather and relax on your patio. Every seat comes with a thick cushion in dark grey colour, which additionally elevates the comfort of usage. The frames are made out of low-maintenance aluminium and are finished with wood-like material on the armrests.', 889, 'loungeset4.jpg', 0, 14, 5, NULL),
(78, 'eater PE Rattan Garden Sofa Set Grey SABBIA', 'This functional lounge set will perfectly complement any outdoor space. It comes with 4 pieces that can be combined or placed apart. The 3-seater sofa features a lift-up seat on both sides so that it can be used as a daybed. With two included ottomans you can create a corner sofa. The coffee table holds just enough space to enjoy an al fresco brunch. The set is made from durable faux rattan with brushed weaving and equipped with thick cushions for comfort.\r\n\r\n', 849, 'loungeset5.jpg', 0, 14, 9, NULL),
(79, '7 Seater Acacia Wood Garden Lounge Set Grey PATAJA', 'A complete outdoor conversation set that consists of a garden lounger, a side table and three garden seats of different sizes. It is constructed from exceptionally sturdy acacia wood and is oiled for additional protection. The furniture is incredibly durable. Separate seats and a lounger allow for quick rearrangements. The set comes with matching cushions crafted from a sturdy yet durable synthetic fabric and it is thickly padded for absolute comfort. An excellent choice that will allow you to enjoy summer afternoons for years to come.', 1189, 'loungeset6.jpg', 0, 14, 6, NULL),
(80, '4 Seater PE Rattan Garden Sofa Set Natural MINORI', 'Enjoy your outdoor area more by adding a conversation set to sit there. Consisting of a loveseat and two armchairs, it provides enough space for 4 people, and the added coffee table enables you to treat yourself and your guests to snacks and drinks while relaxing. Soft seat pads enhance the experience by elevating comfort.', 489, 'loungeset7.jpg', 0, 14, 9, NULL),
(81, '4 Seater Concrete Garden Dining Set Round Table with Chairs Beige OLBIA', 'Elevate the look of your garden with this dining set consisting of a dining table and 4 chairs. All pieces are made of durable, weather-resistant elements. The tabletop is crafted out of fibre cement, which is easy to take care of, while the bases of the furniture are made of solid acacia wood, that underlines the minimalist, modern look of the set. The beige chairs feature a classic rope style backrest and a thick seat cushion for superb seating comfort. The eye-catching colour combination makes the furniture stand out and upgrade any area and decor style.', 1129, 'diningset2.jpg', 0, 15, 4, NULL),
(82, '4 Seater Concrete Garden Dining Set Square Table Grey OLBIA/TARANTO', 'Enjoy fine dining in your garden thanks to this timeless set. Consisting of a table and four stools, it makes for a great addition to any modern outdoor space. The table top and stools are made from high-quality and robust fibre-cement, which is also exceptionally easy to take care of. The dark colour of the raw material is beautifully complemented by the acacia wooden base in natural finish. Whether in an industrial, minimalist or contemporary setting, this set is bound to take your garden dining to a whole new level.', 879, 'diningset3.jpg', 0, 15, 4, NULL),
(83, '8 Seater Acacia Wood Garden Dining Set with Graphite Grey Cushions MAUI II', 'A functional 9-piece dining set crafted from acacia in a beautiful warm tone. Crafted with butterfly leaves as a highlighting decoration, the tabletop is easily extendable and features a pre-cut hole for the umbrella pole. The collapsible chair allows you to economise on space, while the high back guarantees comfortable sitting. With its classic yet simple design, the set blends well with any modern garden or patio decorating style.', 1059, 'diningset4.jpg', 0, 15, 9, NULL),
(84, '6 Seater Concrete Garden Dining Set Benches Grey ORIA', 'Upgrade the look of your garden with this minimalist outdoor dining set. The tabletop as well as the seat of the bench is made of extremely durable fibre cement that not only introduces an industrial feel to the piece but is also very simple in maintenance. Natural looking robust, high-quality acacia wood legs guarantee sufficient stability.', 1219, 'diningset5.jpg', 0, 15, 9, NULL),
(85, '4 Seater Metal BBQ Garden Dining Set Brown MANFRIA', 'This practical and irreplaceable outdoor BBQ set makes grilling a true pleasure. Made from robust yet lightweight aluminium it complements any setting granting an elegant vintage accent. The round table comes with an inbuilt grill which can be covered with a removable top. The included chairs feature richly padded cushions for the utmost comfort.', 1039, 'diningset6.jpg', 0, 15, 3, NULL),
(86, '8 Seater Acacia Wood Garden Dining Set with Red Parasol and Cushions MAUI II', 'This functional 10-piece furniture set perfectly fits into any modern or rustic-inspired garden. The set was made of high-quality acacia wood, thanks to which it will serve you many years to come. The 8-seater dining table with extendable top is completed with the market parasol, which provides pleasant shade during hot summer days. Each chair features armrests and a soft cushion, for ultimate seating comfort.\r\n\r\n', 1059, 'diningset7.jpg', 1, 15, 7, NULL),
(87, '4 Seater Metal Garden Dining Set Off-White BIVIO', 'Add a touch of Provencal style to your balcony or garden with this elegant dining set. Made out of powder-coated iron, it features a distressed effect and openwork design with floral ornaments. The set includes four chairs and a matching table, perfect for an afternoon tea with family or friends, in any outdoor setting. Each piece is foldable, so you can easily store it during the off-season.\r\n\r\n', 309, 'diningset8.jpg', 0, 15, 3, NULL),
(88, 'Rattan Daybed Natural KALLITHEA', 'Relax in this exquisite rattan daybed. The base made of genuine rattan is generously furnished with comfortable cushions. Thanks to the rattan construction and removable pillowcases, the piece is easy to take care of. Enjoy some leisure time in this sunbed, as it is ideal to drink a glass of wine while reading your favourite book.', 969, 'platiobed2.jpg', 0, 16, 2, NULL),
(89, 'PE Rattan Garden Daybed with Coffee Table Brown SYLT LUX', 'This garden daybed is the perfect combination of sturdy construction and elegant design. It will transform your outdoor living space, giving you a place to relax while remaining comfortable and cool. Make the most of this daybed’s versatility and turn it into a sofa, pull out the coffee table with ease and store it away again tidily. Soft cushions support your body, and the retractable white canopy provides cooling shade. The neutral colours are perfect for a range of garden designs.\r\n\r\n', 1049, 'platiobed3.jpg', 0, 16, 6, NULL),
(90, 'Garden Four Poster Daybed with Canopy White and Grey PALLANZA', 'Prepare for the ultimate rest in the fresh air. A daybed with a fabric canopy, that droops down the poles and casts a shade at the loungers below, is a spot for a summer rest in the garden or by a swimming pool. Two people may set the backrests differently and enjoy the weather. The adjustable white shade diffuses the sunlight, making it pleasant for a long-time rest. Just put the bars into holes on the beams to move the attached fabric up and down. Additionally, the sturdy aluminium frame is resistant to water and rust, and makes a perfect combination with the UV and water resistant polyester shade and cushion covers.', 1359, 'platiobed4.jpg', 0, 16, 8, NULL),
(91, 'Outdoor 3 Seater Swing Beige TEMPLE', 'Make your afternoon in the backyard even more enjoyable with this delightful garden swing. The seat is supported by sturdy, stain-resistant, powder coated steel frame with flexible springs, based on wide legs, guaranteeing exceptional stability with each swing. Thick seat upholstery provides excellent seating comfort for up to 3 people. The canopy provides soothing shade over the swing, gently protecting you from the sun\'s rays. A combination of classic and modern design, the swing is a versatile piece, which matches any outdoor decor.', 329, 'swing2.jpg', 0, 17, 4, NULL),
(92, '3- Seater Garden Swing Grey BOGART', 'A delightful garden swing is a great addition to your outdoor space. Crafted with care and precision, it is made of powder-coated steel and synthetic fabric. Wide and comfortable seat swings delightfully in the shade of board canopy, protecting from sun rays and letting you enjoy a blissful relaxation.', 289, 'swing3.jpg', 0, 17, 7, NULL),
(93, '3 Seater Garden Swing Blue and White CHAPLIN', 'A charming garden swing and an excellent addition to your outdoors, matching any modern decors well. Crafted with durable, powder-coated steel to ensure construction durability and stability during each swing. The canopy of sturdy synthetic fibre is stain-resistant while giving the swing a soothing shade during sunny seasons. The high backrest and wide, padded seating guarantee exceptional comfort for years to come.', 139, 'swing4.jpg', 0, 17, 7, NULL),
(94, 'Fabric Garden Swing Grey TESERO', 'A non-traditional garden swing that will fit in perfectly in a modern garden or patio. The sturdy powder-coated steel frame ensures its longevity whilst its gently rounded shape blends naturally into outdoor scenery. With ample room for two people, this swing offers a gentle motion for perfect relaxation at the end of a long day. The synthetic fabric is low-maintenance, and the handy adjustable canopy allows you to quickly switch between sun and shade for added convenience and versatility.\n\n', 289, 'swing5.jpg', 0, 17, 4, NULL),
(95, 'Wooden Garden Swing Brown NOVARA', 'Dreaming of summer, sun and that warm holiday feel? This garden swing will instantly create a fun and relaxed atmosphere. Place it in your garden or patio for an eye-catching piece that will allow you to enjoy summery vibes all year round. The larch wood structure comes in a warm teak wooden tone, featuring a softly curving shape and steady legs. Crossing slats are used for the seat and backrest, while two trays, one on each side, provide the perfect solution for your drinks and snacks.\r\n\r\n', 409, 'swing6.jpg', 0, 17, 3, NULL),
(96, '5 Light Crystal Chandelier Silver ASCAR', 'Add a touch of regal class to your living space with this stunning silver ambient chandelier. This lamp’s frame is crafted from high-quality iron and features a number of beautiful faux crystal beads. This dazzling array of acrylic glass elements make this lamp an impressive centrepiece to any living room, office or bedroom.', 219, 'chandelier2.jpg', 0, 19, 1, NULL),
(97, '6 Light Chandelier Silver Mucone', 'Generously embellished with silver chains, two curved, chromed metal bars placed one under another will create a focal point in any living area. The 6-light ambient ceiling lamp, emitting the warm and mellow light, features the solid aluminium suspension that matches the decorated shade perfectly. This glam chandelier will add a touch of glitz to any modern or traditional interior.', 249, 'chandelier3.jpg', 0, 19, 1, NULL),
(98, 'Crystal Chandelier Silver ENTWASH', 'Generously embellished with silver chains, two curved, chromed metal bars placed one under another will create a focal point in any living area. The 6-light ambient ceiling lamp, emitting the warm and mellow light, features the solid aluminium suspension that matches the decorated shade perfectly. This glam chandelier will add a touch of glitz to any modern or traditional interior.', 249, 'chandelier4.jpg', 0, 19, 6, NULL),
(99, '8 Light Chandelier Black TEESTA', 'Introducing a bit of vintage glam and sophistication to modern and traditional interiors has never been easier. This ambient lamp, inspired by Victorian forms, will become an accent piece in any setting. The chandelier features black, glossy colouring which goes perfectly with bright interiors. The lamp accommodates eight candle lightbulbs that will illuminate any bedroom, dining room or living room with a soft and cosy light.', 149, 'chandelier5.jpg', 0, 19, 1, NULL);
INSERT INTO `products` (`id`, `name`, `description`, `price`, `img`, `spotlight`, `category_id`, `brand_id`, `admin_img`) VALUES
(100, 'Metal Table Lamp Gold SAVENA', 'This beautiful table lamp is a perfect addition to your bedroom, home office or living room. Great as a bright reading light thanks to its exposed light bulb and bent frame, it also gives any interior a stylish industrial and modern vibe. The minimalistic shape is visually softened by its rounded corners to create a bold yet subtle composition, while the high-shine gold finish complements the whole look.', 39, 'tablelamp2.jpg', 0, 18, 1, NULL),
(101, 'Concrete Table Lamp MISTAGO', 'This lamp is a perfect combination of industrial-inspired design and functionality. In line with modern trends, it features a raw concrete shade in a natural grey colour, tastefully paired with a metal base. The light position can be individually adjusted, according to personal needs.', 45, 'tablelamp3.jpg', 0, 18, 1, NULL),
(102, 'Desk Lamp White SALADO', 'This lamp is perfect for any modern interior. The trendy, industrial design features a smart mechanism that lets you adjust the light angle to your exact preferences. The natural wood colour and the frame shape make the revealed cord a complementing accent rather than a protruding problem. The base and the shade are made of easy-care metal in a matching white colour. This lamp will surely be a statement piece for any modern living room, home office or bedroom.\r\n\r\n', 69, 'tablelamp4.jpg', 0, 18, 8, NULL),
(103, 'Table Lamp Copper MUNDAKA', 'Modern table lamp, perfect as additional lighting on a desk, in a hallway, living room or on a nightstand in your bedroom. The table lamp is a great accessory especially to modern, industrial or Scandinavian interiors. A concrete raw-finished base combined with copper metal arm creates the unique character of the lamp. Lampshade in a cylinder shape sheds a pleasant, ambient light. The essential stylish look comes with functionality thanks to the adjustable shade\r\n\r\n', 35, 'tablelamp5.jpg', 0, 18, 8, NULL),
(104, 'Metal Desk Lamp Yellow HELMAND', 'The functional design of this lamp makes it a perfect lighting for a study room or home office. The arm, constructed using 3 separate joints, is easily adjustable as well as the half-round lampshade. The lamp is finished in a matt yellow paint, adding a fresh touch to a desk or table.', 39, 'tablelamp6.jpg', 0, 18, 2, NULL),
(105, 'Metal Table Lamp Grey UROLA', 'A versatile in design table lamp that works well on a nightstand, desk or kitchen table. Constructed from strong metal with a classically curved arm and an adjustable lampshade it allows you to illuminate any area you need. The timeless, clean style makes it an accessory that matches well with modern, as well as classic home settings.', 29, 'tablelamp7.jpg', 0, 18, 1, NULL),
(106, 'Metal Desk Lamp White TYRIA', 'This practical, industrial desk lamp blends effortlessly with modern, minimalist design. The spotlight lampshade provides a strong light easily directable at any desired surface. Robust and durable white metal is functional and sleek, while the adjustable neck makes this lamp the ideal tool in the home office or study.', 39, 'tablelamp8.jpg', 0, 18, 1, NULL),
(119, 'Fabric Sofa Bed Grey FARRIS', 'This compact sofa fits into any space-limited living area, providing a comfortable place to sit or sleep. Designed with an adjustable backrest and a two-fold mechanism feature, it easily converts into a bed for one. Made of steel, silver legs accentuate the piece\'s modern look. Tailored in wear-resistant fabric upholstery, with contrastive colour sides and decorative buttons, the sofa blends easily into any modern setting. The backrest cushions feature a removable cover that translates to easy cleaning without a worry for stains.', 409, '622dc23e3ba5e_1647166014.jpg', 0, 6, 6, 1),
(120, 'Faux Leather Recliner Chair with Footstool Grey LEGEND', 'Experience optimum seating comfort on this comfortable set of a recliner and a footstool. Upholstered in matt grey faux leather, the chair features decorative stitching that together with chrome finish base create an elegant look. With a 5 point massage feature in 5 intensity modes, heating and a timer you can quickly forget the stresses of everyday life. This luxurious swivel seat is the best choice for a home office or a study room.', 219, '622dc338be354_1647166264.jpg', 0, 7, 6, 1),
(121, 'Velvet Rocking Chair Pink OXIE', 'A rocking chair in a modern design that brings homely feelings and comfort to your home. The invitingly contoured seat comes with a generously padded seat cushion, both tailored in soft-to-the-touch velvet fabric. Paired with light wood rockers the chair offers a gentle sway making it a perfect addition to a living room or nursery.', 259, '622dc419320d2_1647166489.jpg', 0, 7, 2, 1),
(122, 'Fabric Rocking Chair Mint Green TRONDHEIM II', 'A classic style rocking armchair that provides ultimate seating comfort. Upholstered in durable and soft to the touch fabric in mint green, the chair is based on solid wooden skates that make the chair rock gently, making it a perfect place to relax while watching the TV or reading a book. The armchair upgrades the style of any room and adds a delicate flair of retro style.', 359, '622dc46052ca7_1647166560.jpg', 1, 7, 2, 1),
(123, 'Table Clock Black and Silver BERNO', 'This extraordinary standing clock in the shape of a motorcycle can be a perfect decoration in your living room, bedroom or home office. Its universal colour and vintage design matches all interior styles. As it is durable, it can be a wonderful addition to any motorcycle-loving person\'s living space.', 39, '622dc5734fda8_1647166835.jpg', 0, 10, 5, 1),
(124, 'Flower Vase 16 cm Multicolour COLOSSE', 'Refresh your interior with favourite flowers placed in this stylish, eye-catching vase. Made out of ceramic, it\'s not only easy to take care of, but also waterproof, which makes it a perfect match for fresh tulips or roses. Placed on a TV stand or a coffee table, it is certain to attract the attention of your house guests.', 49, '622dc7ac5043e_1647167404.jpg', 0, 10, 8, 1),
(125, 'Decorative Vase Silver DERBE', 'An elegant, ceramic vase with a beautiful finish will instantly upgrade the look of any surface - from the top of a chest of drawers to a dining table. The subtly curved form gives the impression of a high-end sculpture, which is perfect to beautify your interior with a bold accent piece whilst creating a complete composition with decorative flowers or grass.', 35, '622dc854b11a4_1647167572.jpg', 0, 10, 9, 1),
(126, 'Decorative Container Gold ASWAN', 'This practical and charming container will enrich any space with an elegant accent. It is made from durable and lightweight aluminium in golden finish that makes ideal for interiors in glam decor. The piece comes with a wooden lid equipped with a decorative handle for a fancy touch. Use it to store your small bits and pieces or hygiene items and decorate your space.', 35, '622dc8b4f0a04_1647167668.jpg', 0, 10, 3, 1),
(127, 'Set of 3 Felt Baskets Grey and Beige SARIOT', 'On-trend storage for any room of your house. With these handsome, felt baskets you can keep your space tidy and your belongings organised. Made of wear-resistant felt with fir wood accent weave on the front, the baskets are designed with wooden handles so you can easily carry them from room to room.', 39, '622dc940ab547_1647167808.jpg', 0, 10, 5, 1),
(128, 'Fabric Armchair Black and White BJARN', 'The modern minimalistic armchair that works well with contemporary Scandinavian or vintage home décor. It is designed with angled legs and covered in a durable upholstery. The fabric features an elegant black and white pattern. A high backrest is connected with profiled, curved armrests and pleasantly padded seat provides a comfortable seat.', 189, '622dcec07ae59_1647169216.jpg', 1, 9, 8, 1),
(129, '2 Drawer Console Table Black KLAWOCK', 'At once a functional and decorative addition to any entryway or living space, this rustic table is an ideal background for books, decorations and personal styling touches. With a slender design featuring cabriole legs and a scalloped apron front, this piece offers a vintage, timeless appeal. Equipped with two capacious drawers, both decorated with classic metal handles, this table is a perfect fit for any French country style and shabby chic décor.', 119, '622de0241fee0_1647173668.jpg', 0, 8, 3, 1),
(130, 'Glass Top Garden Dining Table 180 x 90 cm GROSSETO', 'The functional table is an exceptionally stylish accent piece for your garden or terrace. The subtle, glossy top adds a unique touch to any dining area. The combination of stainless steel and glass is timeless and blends well with every garden style. This table seats up to 6 people, so it\'s perfect for a family dinner or a nice barbecue party with your friends. The frame and legs are crafted from durable, brushed steel. The modern and chic table-top is made from tempered glass and features round edges which makes it safe for children.', 709, '622de0b47d101_1647173812.jpg', 0, 8, 5, 1),
(131, 'Acacia Dining Table 200 x 100 cm Light Wood TESA', 'This large dining table that fits up to 8 people, is perfect for large dining or living areas. Made out of lacquered solid light acacia wood with beautiful natural grains, it suits industrial, rustic and traditional-inspired interiors. Properly maintained will look perfect for many years to come. Thanks to its natural colour and simple design, this table looks great set with any dining chairs or benches.', 649, '622de131a462b_1647173937.jpg', 0, 8, 3, 1),
(132, 'Plant Pot Stand 30 x 30 x 55 cm Beige and Brown ACHILIO', 'A perfect decoration for both indoor and outdoor use. It is inspired by the boho style - made entirely by hand using high-quality material and adorned with an inlaid elephant motif. The flowerpot\'s paint in a brown and beige-cream hue creates a distressed effect. The main features of this flower container make it a perfect addition to a vintage-style living area.', 59, '622e3295ec15a_1647194773.jpg', 0, 10, 8, 1),
(133, 'Decorative Vase Black ARWAD', 'This unusual decorative flower vase perfectly balances its sculptural design with a practical function. Ideal to fill with an array of flowers, it livens up any room and works in any chosen area from the hallway, to any table setting.', 35, '622e481a66f0a_1647200282.jpg', 0, 10, 6, 1),
(135, 'BISE', 'Neki opis', 55, '622e6391e61eb_1647207313.jpg', 0, 10, 2, 1),
(136, 'Jelena Bisevac', 'dddddddddddddddd', 55, '62310dc228040_1647381954.jpg', 0, 19, 1, 1),
(137, 'Proba', 'ssssssssssssssss', 2222, '623110b226c78_1647382706.jpg', 0, 6, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `title`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `country`, `city`, `address`, `phone`, `role_id`) VALUES
(12, 'Pera', 'Peric', 'pera@gmail.com', 'bf676ed1364b5857fba69b5623c81b64', 'Srbija', 'Beograd', 'Vojvode Stepe', '064/458-888', 2),
(13, 'Jelena', 'Biševac', 'bisevacjelena1@gmail.com', 'c62439ea56c71bf8b4760d507e0e646a', 'Srbija', 'Beograd', 'Bulevar vojvode Mišica 19', '061/234-567', 1),
(14, 'Zika', 'Zikic', 'zika1@gmail.com', '234c992ccb4b1f60c4643ac2be57740f', 'Srbija', 'Smederevo', 'Kneza Lazara 5', '064/528-878', 2),
(15, 'Jana', 'Ilić', 'jana@gmail.com', '6a97b6bab97302add091538b802763e3', 'Crna Gora', 'Nikšić', 'Njegoševa 5', '062/789-125', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_line_table`
--
ALTER TABLE `order_line_table`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `order_line_table`
--
ALTER TABLE `order_line_table`
  ADD CONSTRAINT `order_line_table_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_table` (`id`),
  ADD CONSTRAINT `order_line_table_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `order_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
