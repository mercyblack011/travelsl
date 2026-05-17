-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 01:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelsl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'test', 'debrajsmith479@gmail.com', 'hi', 'test test', '2024-03-03 05:35:48'),
(2, 'cxcv', 'mercyblack011@gmail.com', 'hi', 'ghh', '2024-04-29 09:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `province` varchar(512) DEFAULT NULL,
  `category` varchar(512) DEFAULT NULL,
  `activity` varchar(512) DEFAULT NULL,
  `url` varchar(512) DEFAULT NULL,
  `name` varchar(512) DEFAULT NULL,
  `image_url` varchar(512) DEFAULT NULL,
  `short_description` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `province`, `category`, `activity`, `url`, `name`, `image_url`, `short_description`) VALUES
(1, 'Central Province', 'Monuments', 'Sightseeing', 'place/sigiriya.php', 'Sigiriya', 'place-image/Sigiriya.jpg', 'An ancient rock fortress located in the northern Matale District near the town of Dambulla.'),
(2, 'Central Province', 'Monuments', 'Sightseeing', 'place/adams-peak.php', 'Adam\'s Peak', 'place-image/Adam\'s Peak.jpg', 'A sacred mountain in Sri Lanka, known for the \"Sri Pada\" - a footprint at the summit.'),
(3, 'Central Province', 'National Parks', 'Wildlife Watching', 'place/horton-plains-national-park.php', 'Horton Plains National Park', 'place-image/Horton Plains National Park.jpg', 'A protected area in the central highlands known for its biodiversity and scenic beauty.'),
(4, 'Central Province', 'Monuments', 'Sightseeing', 'place/kandy-lake.php', 'Kandy Lake', 'place-image/Kandy Lake.jpg', 'A man-made lake in the heart of Kandy, offering boat rides and scenic views of the city.'),
(5, 'Central Province', 'Cultural and Sports Events', 'Cultural Exploration', 'place/kandy-esala-perahera.php', 'Kandy Esala Perahera', 'place-image/Kandy Esala Perahera.jpg', 'A vibrant cultural festival featuring traditional dances, music, and processions.'),
(6, 'Central Province', 'Cultural and Sports Events', 'Cultural Exploration', 'kandy-city-center.php', 'Kandy City Center', 'place-image/Kandy City Center.jpg', 'A modern shopping mall in Kandy with an iconic architectural design.'),
(7, 'Central Province', 'Cultural and Sports Events', 'Cultural Exploration', 'place/tea-plantations.php', 'Tea Plantations', 'place-image/Tea Plantations.jpg', 'Explore the lush green tea estates and learn about the tea-making process in the hill country of Sri Lanka.'),
(8, 'Central Province', 'Monuments', 'Sightseeing', 'place/embekka-devalaya.php', 'Embekka Devalaya', 'place-image/Embekka Devalaya.jpg', 'An ancient temple famous for its intricate wood carvings and traditional Kandyan architecture.'),
(9, 'Central Province', 'Monuments', 'Sightseeing', 'place/temple-of-the-tooth.php', 'Temple of the Tooth', 'place-image/Temple of the Tooth.jpg', 'A Buddhist temple in Kandy housing the relic of the tooth of the Buddha.'),
(10, 'Central Province', 'Monuments', 'Sightseeing', 'place/lankatilaka-temple.php', 'Lankatilaka Temple', 'place-image/Lankatilaka Temple.jpg', 'A Buddhist temple renowned for its remarkable architecture and serene surroundings.'),
(11, 'Central Province', 'Monuments', 'Sightseeing', 'place/gadaladeniya-temple.php', 'Gadaladeniya Temple', 'place-image/Gadaladeniya Temple.jpg', 'A 14th-century Buddhist temple known for its South Indian architectural style and historical significance.'),
(12, 'Central Province', 'Monuments', 'Sightseeing', 'place/aluvihare-rock-temple.php', 'Aluvihare Rock Temple', 'place-image/Aluvihare Rock Temple.jpg', 'An ancient Buddhist temple famous for its cave inscriptions and religious teachings.'),
(13, 'Southern Province', 'National Parks', 'Wildlife Watching', 'place/sinharaja-forest.php', 'Sinharaja Forest', 'place-image/Sinharaja Forest.jpg', 'Sinharaja Forest Reserve is a biodiversity hotspot in Sri Lanka. It is a treasure trove of endemic species'),
(14, 'Southern Province', 'National Parks', 'Wildlife Watching', 'place/bundala-national-park.php', 'Bundala National Park', 'place-image/Bundala National Park.jpg', 'Bundala National Park is an internationally important wintering ground for migratory water birds in Sri Lanka. '),
(15, 'Southern Province', 'Monuments', 'Sightseeing', 'place/kosgoda-sea-turtle-conservation-project.php', 'Kosgoda Sea Turtle Conservation Project', 'place-image/Kosgoda Sea Turtle Conservation Project.jpg', 'The Kosgoda Sea Turtle Conservation Project is a pioneering effort dedicated to protecting sea turtles. '),
(16, 'Southern Province', 'Beaches', 'Water Sports', 'place/hikkaduwa-beach.php', 'Hikkaduwa Beach', 'place-image/Hikkaduwa Beach.jpg', 'Hikkaduwa Beach is one of Sri Lanka\'s most popular and vibrant beach destinations and lively atmosphere.'),
(17, 'Southern Province', 'Beaches', 'Water Sports', 'place/mirissa-beach.php', 'Mirissa Beach', 'place-image/Mirissa Beach.jpg', 'Mirissa Beach is a serene and picturesque beach  palm-lined shores, and relaxed atmosphere.'),
(18, 'Southern Province', 'Monuments', 'Sightseeing', 'place/tissamaharama-raja-vagarai.php', 'Tissamaharama Raja Vagarai', 'place-image/Tissamaharama Raja Vagarai.jpg', 'Tissamaharama Raja Maha Viharaya is an ancient Buddhist temple situated in the town of Tissamaharama, southern Sri Lanka. '),
(19, 'Southern Province', 'Beaches', 'Water Sports', 'place/jungle-beach.php', 'Jungle Beach', 'place-image/Jungle Beach.jpg', 'Jungle Beach is a secluded and picturesque spot located near Unawatuna, on the southern coast of Sri Lanka.'),
(20, 'Southern Province', 'Monuments', 'Sightseeing', 'place/galle-fort.php', 'Galle fort', 'place-image/Galle fort.jpg', 'Galle Fort, also known as the Dutch Fort, is an architectural marvel and a historic gem located in the heart of Galle, Sri Lanka.'),
(21, 'Southern Province', 'National Parks', 'Wildlife Watching', 'place/yala-national-park.php', 'Yala National Park', 'place-image/Yala National Park.jpg', 'Yala National Park is Sri Lanka\'s most famous wildlife sanctuary and a must-visit for nature enthusiasts and adventure seekers.'),
(22, 'Southern Province', 'National Parks', 'Wildlife Watching', 'place/ridiyagama-safari-park.php', 'Ridiyagama Safari Park', 'place-image/Ridiyagama Safari Park.jpg', 'Ridiyagama Safari Park is a unique addition to Sri Lanka\'s eco-tourism venues.'),
(23, 'Southern Province', 'National Parks', 'Wildlife Watching', 'place/birds-park-hambantota.php', 'Birds park hambantota', 'place-image/Birds park hambantota.jpg', 'Birds Park Hambantota is a serene sanctuary specifically designed for bird watching and is nestled within the Hambantota district. '),
(24, 'Southern Province', 'Beaches', 'Water Sports', 'place/ambalangoda-mask-museum.php', 'Ambalangoda mask museum', 'place-image/Ambalangoda mask museum.jpg', 'The Ambalangoda Mask Museum is located in the coastal town known for its traditional Sri Lankan masks and devil dancing culture.'),
(25, 'Southern Province', 'Monuments', 'Sightseeing', 'place/weligama-stilt-fisherman.php', 'Weligama Stilt Fisherman', 'place-image/Weligama Stilt Fisherman.jpg', 'Weligama is famed for its stilt fishermen, a centuries-old fishing method unique to the southern coast of Sri Lanka. '),
(26, 'Southern Province', 'Monuments', 'Sightseeing', 'place/matara-fort.php', 'Matara Fort', 'place-image/Matara Fort.jpg', 'Matara Fort, located in the heart of Matara town, was originally built by the Portuguese in 1560 and later fortified by the Dutch. '),
(27, 'Southern Province', 'Monuments', 'Sightseeing', 'place/old-dutch-market.php', 'Old Dutch Market', 'place-image/Old Dutch Market.jpg', 'The Old Dutch Market is a remnant of colonial times, situated in the heart of Galle, Sri Lanka.'),
(28, 'Western Province', 'National Parks', 'Wildlife Watching', 'place/galle-face.php', 'Galle Face', 'place-image/Galle Face.jpg', 'Galle Face is a magnificent urban park in the heart of Colombo, offering a refreshing escape from the city\'s hustle.'),
(29, 'Western Province', 'National Parks', 'Wildlife Watching', 'place/viharamahadevi-park.php', 'Viharamahadevi Park', 'place-image/Viharamahadevi Park.jpg', 'Viharamahadevi Park, formerly known as Victoria Park, is Colombo\'s largest and most popular public park.'),
(30, 'Western Province', 'Monuments', 'Sightseeing', 'place/lotus-tower.php', 'Lotus Tower', 'place-image/Lotus Tower.jpg', 'The Lotus Tower, officially called Nelum Kuluna, is a striking landmark in Colombo\'s skyline. '),
(31, 'Western Province', 'Monuments', 'Sightseeing', 'place/jami-ul-alfar-mosque.php', 'Jami Ul Alfar Mosque', 'place-image/Jami Ul Alfar Mosque.jpg', 'Jami Ul Alfar Mosque is one of the oldest and most recognizable landmarks in Colombo with its distinctive red and white brickwork. '),
(32, 'Western Province', 'Beaches', 'Water Sports', 'place/kaltura-beach.php', 'Kaltura Beach', 'place-image/Kaltura Beach.jpg', 'Kalutara Beach is a serene coastal getaway known for its golden sands and tranquil waters. '),
(33, 'Western Province', 'National Parks', 'Sightseeing', 'place/dehiwala-zoo.php', 'Dehiwala Zoo', 'place-image/Dehiwala Zoo.jpg', 'Dehiwala Zoo, or the National Zoological Gardens of Sri Lanka, is located in Dehiwala, a suburb of Colombo. '),
(34, 'Western Province', 'Beaches', 'Water Sports', 'place/negombo-beach.php', 'Negombo Beach', 'place-image/Negombo Beach.jpg', 'Negombo Beach is nestled near the bustling fishing town of Negombo, famous for its long sandy beaches and laid-back atmosphere. '),
(35, 'Western Province', 'Cultural and Sports Events', 'Cultural Exploration', 'place/water-world-kelaniya.php', 'Water World Kelaniya', 'place-image/Water World Kelaniya.jpg', 'Water World Kelaniya is Sri Lanka\'s first and only public aquarium and aquatic research facility. '),
(36, 'Western Province', 'Beaches', 'Wildlife Watching', 'place/mount-lavinia-beach.php', 'Mount Lavinia Beach', 'place-image/Mount Lavinia Beach.jpg', 'Mount Lavinia Beach is a historic and idyllic shoreline, famous for its \"Golden Mile\" of beaches. '),
(37, 'Western Province', 'Cultural and Sports Events', 'Cultural Exploration', 'place/port-city.php', 'Port City', 'place-image/Port City.jpg', 'Port City Colombo is a new city development built on reclaimed land adjacent to the existing Colombo CBD. '),
(38, 'Western Province', 'National Parks', 'Wildlife Watching', 'place/colombo-national-museum.php', 'Colombo National Museum', 'place-image/Colombo National Museum.jpg', 'The Colombo National Museum, established in 1877, is the largest museum in Sri Lanka. '),
(39, 'Western Province', 'Monuments', 'Sightseeing', 'place/old-parliament-building.php', 'Old Parliament Building', 'place-image/Old Parliament Building.jpg', 'The Old Parliament Building stands majestically in the Fort area of Colombo, facing the sea. '),
(40, 'Western Province', 'Monuments', 'Sightseeing', 'place/sri-lanka-air-force-museum.php', 'Sri Lanka Air Force Museum', 'place-image/Sri Lanka Air Force Museum.jpg', 'The Sri Lanka Air Force Museum in Ratmalana is the only national museum dedicated to aviation and the history of the Sri Lanka Air Force.'),
(41, 'Western Province', 'Monuments', 'Sightseeing', 'place/st-anthonys-shrine.php', 'St Anthonys Shrine', 'place-image/St Anthonys Shrine.jpg', 'St Anthony\'s Shrine in Kochchikade, Colombo, is one of the most-visited Catholic shrines in the country. '),
(42, 'Eastern Province', 'Beaches', 'Water Sports', 'place/marble-beach.php', 'Marble Beach', 'place-image/Marble Beach.jpg', 'A serene beach known for its crystal clear waters and white, marble-like sands, perfect for swimming and relaxation.'),
(43, 'Eastern Province', 'Beaches', 'Water Sports', 'place/nilaveli-beach.php', 'Nilaveli Beach', 'place-image/Nilaveli Beach.jpg', 'Renowned for its soft sands and shallow waters, it\'s a hotspot for sunbathing and water activities in Sri Lanka.'),
(44, 'Eastern Province', 'Beaches', 'Water Sports', 'place/pigeon-island.php', 'Pigeon Island', 'place-image/Pigeon Island.jpg', 'A beautiful marine sanctuary, famous for snorkeling and exploring vibrant coral reefs and diverse marine life.'),
(45, 'Eastern Province', 'Beaches', 'Water Sports', 'place/arugam-bay-beach.php', 'Arugam Bay Beach', 'place-image/Arugam Bay Beach.jpg', 'A world-renowned surfing destination with perfect waves and a laid-back atmosphere.'),
(46, 'Eastern Province', 'Beaches', 'Water Sports', 'place/pasikuda-beach.php', 'Pasikuda Beach', 'place-image/Pasikuda Beach.jpg', ' Known for its long stretch of shallow coastline, making it ideal for water sports and safe swimming.'),
(47, 'Eastern Province', 'Monuments', 'Sightseeing', 'place/thirukoneswaram-kovil.php', 'Thirukoneswaram Kovil', 'place-image/Thirukoneswaram Kovil.jpg', 'An ancient Hindu temple situated on a cliff, offering panoramic views and a rich history.'),
(48, 'Eastern Province', 'National Parks', 'Wildlife Watching', 'place/kumana-national-park.php', 'Kumana National Park', 'place-image/Kumana National Park.jpg', 'A wildlife sanctuary famous for birdwatching, home to many endemic and migratory species.'),
(49, 'Eastern Province', ' Monuments', 'Sightseeing', 'place/kanniya-hot-water-springs.php', 'Kanniya Hot Water Springs', 'place-image/Kanniya Hot Water Springs.jpg', 'Natural thermal springs with a history dating back to the reign of King Ravana, believed to have therapeutic properties.'),
(50, 'Eastern Province', ' Monuments ', 'Sightseeing', 'place/batticaloa-fort.php', 'Batticaloa Fort', 'place-image/Batticaloa Fort.jpg', 'A historic fortification with Dutch architecture, reflecting the colonial past and offering picturesque views of the lagoon.'),
(51, 'Eastern Province', 'National Parks', 'Wildlife Watching', 'place/gal-oya-national-park.php', 'Gal Oya National Park', 'place-image/Gal Oya National Park.jpg', 'A natural reserve known for its diverse wildlife, including elephants, and the unique boat safari experience.'),
(52, 'Eastern Province', 'Beaches', 'Water Sports', 'place/uppuveli-beach.php', 'Uppuveli Beach', 'place-image/Uppuveli Beach.jpg', 'A tranquil beach setting with golden sands and ample opportunities for water sports and relaxation.'),
(53, 'Eastern Province', 'Beaches', 'Water Sports', 'place/kalkudah-beach.php', 'Kalkudah Beach', 'place-image/Kalkudah Beach.jpg', 'A quiet, palm-fringed beach known for its pristine conditions and shallow waters.'),
(54, 'Eastern Province', 'Beaches', 'Water Sports', 'place/oluvil-lighthouse.php', 'Oluvil Lighthouse', 'place-image/Oluvil Lighthouse.jpg', 'An operational lighthouse that stands as a sentinel to guide ships and offers scenic views of the surrounding area.'),
(55, 'Eastern Province', 'Water Fall', 'Nature Avengers', 'place/gal-oya-dam.php', 'Gal Oya Dam', 'place-image/Gal Oya Dam.jpg', 'The Gal Oya Dam is an impressive feat of engineering located within the Gal Oya National Park in southeastern Sri Lanka'),
(56, 'Northern Province', 'Monuments', 'Sightseeing', 'place/nallur-kandaswamy-kovil.php', 'Nallur Kandaswamy Kovil', 'place-image/Nallur Kandaswamy Kovil.jpg', 'The Nallur Kandaswamy Kovil stands as a cornerstone of Hindu worship in Jaffna, Sri Lanka. '),
(57, 'Northern Province', 'Monuments', 'Sightseeing', 'place/jaffna-library.php', 'Jaffna Library', 'place-image/Jaffna Library.jpg', 'Once the heart of knowledge in the Northern Province, the Jaffna Library housed over 97,000 books'),
(58, 'Northern Province', 'Monuments', 'Sightseeing', 'place/jaffna-fort.php', 'Jaffna Fort', 'place-image/Jaffna Fort.jpg', 'Overlooking the Jaffna lagoon, the Jaffna Fort bears the architectural legacy of the Portuguese, Dutch, and British colonial periods. '),
(59, 'Northern Province', 'Beaches', 'Water Sports', 'place/thai-manor-beach.php', 'Thai Manor Beach', 'place-image/Thai Manor Beach.jpg', 'Thai Manor Beach, an oasis of tranquility, is known for its shallow waters and the unique casuarina tree '),
(60, 'Northern Province', 'Monuments', 'Sightseeing', 'place/mannar-dutch-fort.php', 'Mannar Dutch Fort', 'place-image/Mannar Dutch Fort.jpg', 'The Mannar Dutch Fort, a hexagonal stone fortification with thick walls and bastions'),
(61, 'Northern Province', 'Beaches', 'Water Sports', 'place/mannar-island.php', 'Mannar Island', 'place-image/Mannar Island.jpg', 'Blessed with diverse ecosystems, Mannar Island is a blend of arid, scrubland terrain and rich birdlife.'),
(62, 'Northern Province', 'Beaches', 'Water Sports', 'place/neduntheevu.php', 'Neduntheevu', 'place-image/Neduntheevu.jpg', 'Neduntheevu, or Delft Island, exudes an almost mystical charm with its population of wild horses'),
(63, 'Northern Province', ' Monuments', 'Sightseeing', 'place/elephant-pass.php', 'Elephant Pass', 'place-image/Elephant Pass.jpg', 'Elephant Pass, named after the elephants that once migrated through this narrow isthmus'),
(64, 'Northern Province', ' Monuments ', 'Sightseeing', 'place/national-shrine-of-our-lady-madhu.php', 'National Shrine Of Our Lady Madhu', 'place-image/National Shrine Of Our Lady Madhu.jpg', 'The National Shrine of Our Lady of Madhu, with its serene forest setting, provides solace to pilgrims of all faiths. '),
(65, 'Northern Province', 'Monuments', 'Sightseeing', 'place/negadee-ancient-temple-jaffna.php', 'Negadee Ancient Temple Jaffna', 'place-image/Negadee Ancient Temple Jaffna.jpg', 'Nagadeepa Ancient Temple, situated on the small island of Nainativu, is one of the country\'s most venerated Buddhist sites.'),
(66, 'Uva Province', 'National Parks', 'Nature Avengers', 'place/lipton-seat.php', 'Lipton Seat', 'place-image/Lipton Seat.jpg', 'Lipton\'s Seat is one of Sri Lanka\'s most impressive viewpoints, historically known as the favorite lookout of Sir Thomas Lipton'),
(67, 'Uva Province', 'Monuments', 'Sightseeing', 'place/buduruwagala-raja-maha-viharaya.php', 'Buduruwagala Raja Maha Viharaya', 'place-image/Buduruwagala Raja Maha Viharaya.jpg', 'The Buduruwagala Temple complex, with its ancient Buddhist rock carvings, stands as a testament to Sri Lanka\'s rich cultural tapestry. '),
(68, 'Uva Province', 'Water Fall', 'Nature Avengers', 'place/diyaluma-falls.php', 'Diyaluma Falls', 'place-image/Diyaluma Falls.jpg', 'As the second highest waterfall in Sri Lanka, Diyaluma Falls cascades down 220 meters in a beautiful, sheer drop. '),
(69, 'Uva Province', 'National Parks', 'Nature Avengers', 'place/little-adams-peak.php', 'Little Adams Peak', 'place-image/Little Adams Peak.jpg', 'Little Adam\'s Peak, also known as \"Punchi Sri Pada\", 360-degree view of the surrounding landscape'),
(70, 'Uva Province', 'National Parks', 'Nature Avengers', 'place/ella-rock-trailhead.php', 'Ella Rock Trailhead', 'place-image/Ella Rock Trailhead.jpg', 'The trek to Ella Rock is a popular hiking path that begins at the Ella railway station and winds through tea plantations'),
(71, 'Uva Province', 'National Parks', 'Nature Avengers', 'place/nine-arch-bridge.php', 'Nine Arch Bridge', 'place-image/Nine Arch Bridge.jpg', 'The Nine Arch Bridge in Ella is a stunning example of colonial-era railway construction. '),
(72, 'Uva Province', ' Monuments', 'Sightseeing', 'place/adisham-bungalow.php', 'Adisham Bungalow', 'place-image/Adisham Bungalow.jpg', 'Adisham Hall or Adisham Bungalow is a monastery run by Benedictine Monks, nestled in the tranquil hills of Haputale. '),
(73, 'Uva Province', 'National Parks', 'Nature Avengers', 'place/flying-ravana.php', 'Flying Ravana', 'place-image/Flying Ravana.jpg', 'Flying Ravana is Sri Lanka\'s first-ever mega zipline, located amidst the lush green estates of Ella. '),
(74, 'Uva Province', 'Water Fall', 'Nature Avengers', 'place/bambarakanda-falls.php', 'Bambarakanda Falls', 'place-image/Bambarakanda Falls.jpg', 'Bambarakanda Falls, the tallest waterfall in Sri Lanka, cascades down a sheer cliff for 263 meters. '),
(75, 'Uva Province', 'National Parks', 'Nature Avengers', 'place/ella-organic-tea-garden.php', 'Ella Organic Tea Garden', 'place-image/Ella Organic Tea Garden.jpg', 'The Ella Organic Tea Garden is a sustainable farming initiative that allows visitors to experience '),
(76, 'Uva Province', 'National Parks', 'Nature Avengers', 'place/narangala.php', 'Narangala', 'place-image/Narangala.jpg', 'Narangala is a distinctive mountain in the   Sri Lanka, known for its sharp ridge and the breathtaking views '),
(77, 'Uva Province', 'National Parks', 'Nature Avengers', 'place/vedda-village.php', 'Vedda Village', 'place-image/Vedda Village.jpg', 'The Vedda Village is a unique cultural experience where visitors can meet the Vedda people, the indigenous community of Sri Lanka.'),
(78, 'Sabaragamuwa Province', 'National Parks', 'Wildlife Watching', 'place/pinnawala-elephant-orphanage.php', 'Pinnawala Elephant Orphanage', 'place-image/Pinnawala Elephant Orphanage.jpg', 'Pinnawala Elephant Orphanage, nestled in the lush landscapes of Sri Lanka, serves as a sanctuary for orphaned and injured elephants'),
(79, 'Sabaragamuwa Province', 'Water Fall', 'Sightseeing', 'place/bopath-ella-falls.php', 'Bopath Ella Falls', 'place-image/Bopath Ella Falls.jpg', 'Bopath Ella Falls is a stunning waterfall located in the Sabaragamuwa Province of Sri Lanka.'),
(80, 'Sabaragamuwa Province', 'Water Fall', 'Sightseeing', 'place/olu-ella-falls.php', 'Olu Ella Falls', 'place-image/Olu Ella Falls.jpg', 'Olu Ella Falls, situated in the Yatiyanthota region of Sri Lanka, stands as one of the country\'s tallest waterfalls'),
(81, 'Sabaragamuwa Province', 'National Parks', 'Wildlife Watching', 'place/udawalawe-safari-national-park.php', 'Udawalawe Safari National Park', 'place-image/Udawalawe Safari National Park.jpg', 'A world-renowned surfing destination with perfect waves and a laid-back atmosphere.'),
(82, 'Sabaragamuwa Province', 'Water Fall', 'Sightseeing', 'place/kirindi-ella-waterfall.php', 'Kirindi Ella Waterfall', 'place-image/Kirindi Ella Waterfall.jpg', 'Kirindi Ella Waterfall, located near the town of Pelmadulla in Sri Lanka falling from a height of approximately 200 meters.'),
(83, 'Sabaragamuwa Province', 'Monuments', 'Sightseeing', 'place/sri-sankapala-raja-maha-viharaya.php', 'Sri Sankapala Raja Maha Viharaya', 'place-image/Sri Sankapala Raja Maha Viharaya.jpg', 'Sri Sankapala Raja Maha Viharaya stands as a historic Buddhist temple located in the Ratnapura district of Sri Lanka.'),
(84, 'Sabaragamuwa Province', 'Water Fall', 'Sightseeing', 'place/kalthota-duwili-falls.php', 'Kalthota Duwili Falls', 'place-image/Kalthota Duwili Falls.jpg', 'Kalthota Duwili Falls is a hidden gem located in the Balangoda region of Sri Lanka.'),
(85, 'Sabaragamuwa Province', ' Monuments', 'Sightseeing', 'place/kabaragala-mountain.php', 'Kabaragala Mountain', 'place-image/Kabaragala Mountain.jpg', 'Kabaragala Mountain, the highest peak in the Dolosbage range in Sri Lanka'),
(86, 'Sabaragamuwa Province', 'Water Fall', 'Sightseeing', 'place/algama-falls.php', 'Algama Falls', 'place-image/Algama Falls.jpg', 'Algama Falls, a picturesque waterfall located in the Western Province of Sri Lanka'),
(87, 'Sabaragamuwa Province', 'Monuments', 'Sightseeing', 'place/gemmological-museum.php', 'Gemmological Museum', 'place-image/Gemmological Museum.jpg', 'The Gemmological Museum in Sri Lanka offers a fascinating glimpse into the world of gemstones'),
(88, 'Sabaragamuwa Province', 'Monuments', 'Sightseeing', 'place/national-museum-ratnapura.php', 'National Museum Ratnapura', 'place-image/National Museum Ratnapura.jpg', 'The National Museum Ratnapura is a treasure trove of Sri Lanka\'s cultural and natural heritage, located in the gem city of Ratnapura.'),
(89, 'Sabaragamuwa Province', 'Monuments', 'Sightseeing', 'place/dhanaja-gem-museum.php', 'Dhanaja Gem Museum', 'place-image/Dhanaja Gem Museum.jpg', 'Dhanaja Gem Museum, situated in Ratnapura, Sri Lanka, is dedicated to the fascinating world of gemstones, for which the region is renowned.'),
(90, 'Sabaragamuwa Province', 'Monuments', 'Sightseeing', 'place/uthuwankanda-mountain.php', 'Uthuwankanda Mountain', 'place-image/Uthuwankanda Mountain.jpg', 'Uthuwankanda Mountain, located near Mawanella, is famous as the hideout of the legendary Sri Lankan hero'),
(91, 'Sabaragamuwa Province', 'Water Fall', 'Sightseeing', 'place/mini-ella.php', 'Mini Ella', 'place-image/Mini Ella.jpg', 'Mini Ella, a charming little waterfall located in the serene surroundings of Sri Lanka'),
(92, 'North Central Province', 'Monuments', 'Sightseeing', 'place/polonnaruwa.php', 'Polonnaruwa', 'place-image/Polonnaruwa.jpg', 'Polonnaruwa, a UNESCO World Heritage Site located in the North Central Province of Sri Lanka'),
(93, 'North Central Province', 'Monuments', 'Sightseeing', 'place/mihintale.php', 'Mihintale', 'place-image/Mihintale.jpg', 'Mihintale holds immense religious significance as the birthplace of Buddhism in Sri Lanka'),
(94, 'North Central Province', 'Monuments', 'Sightseeing', 'place/dambulla-cave-temple.php', 'Dambulla Cave Temple', 'place-image/Dambulla Cave Temple.jpg', 'Dambulla Cave Temple, also known as the Golden Temple of Dambulla, is a UNESCO World Heritage Site situated '),
(95, 'North Central Province', 'National Parks', 'Wildlife Watching', 'place/minneriya-national-park.php', 'Minneriya National Park', 'place-image/Minneriya National Park.jpg', 'Minneriya National Park, located in the North Central Province of Sri Lanka, is renowned for its spectacular gatherings of wild elephants'),
(96, 'North Central Province', 'Monuments', 'Sightseeing', 'place/ruwanwelisaya.php', 'Ruwanwelisaya', 'place-image/Ruwanwelisaya.jpg', 'Ruwanwelisaya, located in the ancient city of Anuradhapura, is one of the most revered Buddhist stupas in Sri Lanka.'),
(97, 'North Central Province', 'Monuments', 'Sightseeing', 'place/kaduruwela.php', 'Kaduruwela', 'place-image/Kaduruwela.jpg', 'Kaduruwela serves as the main town and commercial hub of the Polonnaruwa District in Sri Lanka. '),
(98, 'North Central Province', 'National Parks', 'Wildlife Watching', 'place/kadulla-national-park.php', 'Kadulla National Park', 'place-image/Kadulla National Park.jpg', 'Kaudulla National Park, situated in the North Central Province of Sri Lanka'),
(99, 'North Central Province', ' Monuments', 'Sightseeing', 'place/gal-viharaya.php', 'Gal Viharaya', 'place-image/Gal Viharaya.jpg', 'Gal Viharaya, located within the ancient city of Polonnaruwa, is a remarkable rock temple renowned for its exquisite stone sculptures.'),
(100, 'North Central Province', ' Monuments', 'Sightseeing', 'place/jaya-sri-maha-bodhi.php', 'Jaya Sri Maha Bodhi', 'place-image/Jaya Sri Maha Bodhi.jpg', 'Jaya Sri Maha Bodhi, located in the sacred city of Anuradhapura, is one of the oldest and most revered trees in the world.'),
(101, 'North Central Province', 'Monuments', 'Sightseeing', 'place/wilpattu-national-park.php', 'Wilpattu National Park', 'place-image/Wilpattu National Park.jpg', 'Wilpattu National Park, located in the Northwest coast lowland dry zone of Sri Lanka, is the country\'s largest and oldest national park.'),
(102, 'North Central Province', 'National Parks', 'Wildlife Watching', 'place/ritigala-forest.php', 'Ritigala Forest', 'place-image/Ritigala Forest.jpg', 'Ritigala Forest Reserve, located in the North Central Province of Sri Lanka, is a pristine wilderness area steeped in history and natural beauty. '),
(103, 'North Central Province', 'Monuments', 'Sightseeing', 'place/isurumuniya.php', 'Isurumuniya', 'place-image/Isurumuniya.jpg', 'lsurumuniya, located in the sacred city of Anuradhapura, is a historic Buddhist temple renowned '),
(104, 'North Western Province', 'Monuments', 'Sightseeing', 'place/ridi-viharaya.php', 'Ridi Viharaya', 'place-image/Ridi Viharaya.jpg', 'Ridi Viharaya, nestled in the serene landscapes of Ridigama'),
(105, 'North Western Province', 'Monuments', 'Sightseeing', 'place/yapahuwa-rock-fortress.php', 'Yapahuwa Rock Fortress', 'place-image/Yapahuwa Rock Fortress.jpg', 'Yapahuwa Rock Fortress, an imposing stone structure, rises majestically in the North Western '),
(106, 'North Western Province', 'Monuments', 'Sightseeing', 'place/munneswaram-hindu-temple.php', 'Munneswaram Hindu Temple', 'place-image/Munneswaram Hindu Temple.jpg', 'Munneswaram Hindu Temple, located in the Northwestern Province of Sri Lanka, is an ancient temple'),
(107, 'North Western Province', 'Monuments', 'Sightseeing', 'place/worlds-tallest-granite-buddha-statue.php', 'World Tallest Granite Buddha Statue', 'place-image/World Tallest Granite Buddha Statue.jpg', 'The World\'s Tallest Granite Buddha Statue stands as a monumental symbol of peace'),
(108, 'North Western Province', 'Monuments', 'Sightseeing', 'place/umandawa-global-buddhist-village.php', 'Umandawa Global Buddhist Village', 'place-image/Umandawa Global Buddhist Village.jpg', 'Umandawa Global Buddhist Village is a unique spiritual and community center located in Sri Lanka'),
(109, 'North Western Province', 'Beaches', 'Water Sports', 'place/kudawa-beach.php', 'Kudawa Beach', 'place-image/Kudawa Beach.jpg', 'Kudawa Beach, situated on the scenic west coast of Sri Lanka, is a hidden gem known for its pristine sands'),
(110, 'North Western Province', 'Monuments', 'Sightseeing', 'place/deduru-oya-reservoir.php', 'Deduru Oya Reservoir', 'place-image/Deduru Oya Reservoir.jpg', 'Deduru Oya Reservoir, an impressive engineering feat in the North Western Province of Sri Lanka'),
(111, 'North Western Province', 'Beaches', 'Water Sports', 'place/kalpitiya-diving-center.php', 'Kalpitiya Diving Center', 'place-image/Kalpitiya Diving Center.jpg', 'alpitiya Diving Center is a premier destination for underwater exploration in Sri Lanka');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `rating`, `review`, `created_at`) VALUES
(1, 'smith', 'mrmsmith@gmail.com', 5, '🌿🌸 Visited this natural gem in Sri Lanka and was utterly captivated! Lush landscapes, vibrant wildlife, and serene vibes. A must-visit for nature lovers seeking peace and beauty. Truly a slice of paradise! 🦋🍃', '2024-02-17 05:44:12'),
(2, 'John ', 'mrjohn@gmail.com', 5, '🌄💚 Sri Lanka\'s hidden treasure, this place is a haven for those who cherish nature. The tranquility and natural splendor are unmatched. Left feeling refreshed and in awe of Earth\'s beauty. 🌳🐦\r\n', '2024-02-17 05:46:53'),
(3, 'mery', 'msmery@gmail.com', 3, '🏞️🌺 Exploring this natural sanctuary in Sri Lanka was an unforgettable journey. Rich in biodiversity and stunning vistas, it\'s a profound reminder of nature\'s majesty. An absolute must-see! 🌼🐒', '2024-02-17 05:49:30'),
(4, 'morain', 'morain479@gmail.com', 5, '🍃🌹 Nature\'s masterpiece in Sri Lanka - this place is extraordinary. Every turn offers a breathtaking view, and the calmness is soul-soothing. A top recommendation for a peaceful escape into nature. 🌾🌊', '2024-03-03 05:40:42'),
(5, 'Emma', 'emma9@gmail.com', 4, '🌲🌻 Sri Lanka\'s natural beauty shines brightest here. With its lush forests and vibrant ecosystems, it\'s a paradise for nature enthusiasts and photographers alike. A visit leaves you with a full heart and a calm mind. 🦚🍂', '2024-03-03 05:42:13'),
(6, 'Harry', 'Harry7@gmail.com', 4, '🍁🌞 A serene escape into Sri Lanka\'s pristine nature. The harmony of colors and sounds here is truly mesmerizing. Perfect for those seeking to connect with nature and find inner peace. A visit is like a breath of fresh air! 🌈🕊️', '2024-03-03 05:56:40'),
(7, 'Emilia', 'emilia@gmail.com', 5, '🌴🐾 Discovering this natural haven in Sri Lanka was a highlight of my travels. The vibrant ecosystem and untouched beauty offer an authentic nature experience. Ideal for adventurers and peace-seekers alike. Truly unforgettable! 🌊🌼', '2024-03-03 05:56:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
