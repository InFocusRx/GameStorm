-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2018 at 11:40 PM
-- Server version: 5.6.37
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csrizzle_GameStorm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `mail` varchar(64) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL COMMENT 'Products ID',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'name of product',
  `price` int(3) NOT NULL COMMENT 'Price of product',
  `age_raiting` int(2) NOT NULL COMMENT 'Products age raiting',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Products description',
  `release_date` date NOT NULL COMMENT 'Products date of release',
  `raiting` varchar(3) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Products raiting',
  `img` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='List of Products';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `age_raiting`, `description`, `release_date`, `raiting`, `img`) VALUES
(1, 'Grand Theft Auto V', 59, 18, '\r\nWhen a young street hustler, \r\na retired bank robber and a terrifying psychopath find themselves entangled with some of \r\nthe most frightening and deranged elements of the criminal underworld, the \r\nU.S. government and the entertainment industry, they must pull off a series of \r\ndangerous heists to survive in a ruthless city in which they can trust nobody, \r\nleast of all each other.\r\n\r\nGrand Theft Auto V for PC offers players the option to explore the award-winning world of \r\nLos Santos and Blaine County in resolutions of up to 4k and beyond, \r\nas well as the chance to experience the game running at 60 frames per second. \r\n\r\nThe game offers players a huge range of PC-specific customization options, \r\nincluding over 25 separate configurable settings for texture quality, shaders, \r\ntessellation, anti-aliasing and more, as well as support and extensive customization for \r\nmouse and keyboard controls. Additional options include a population density slider \r\nto control car and pedestrian traffic, as well as dual and triple monitor support, \r\n3D compatibility, and plug-and-play controller support. \r\n\r\nGrand Theft Auto V for PC also includes Grand Theft Auto Online, \r\nwith support for 30 players and two spectators. \r\nGrand Theft Auto Online for PC will include all existing gameplay upgrades and \r\nRockstar-created content released since the launch of Grand Theft Auto Online, \r\nincluding Heists and Adversary modes.\r\n\r\nThe PC version of Grand Theft Auto V and Grand Theft Auto Online features \r\nFirst Person Mode, giving players the chance to explore the incredibly detailed world of \r\nLos Santos and Blaine County in an entirely new way.\r\n\r\nGrand Theft Auto V for PC also brings the debut of the Rockstar Editor, \r\na powerful suite of creative tools to quickly and easily capture, \r\nedit and share game footage from within Grand Theft Auto V and Grand Theft Auto Online. \r\nThe Rockstar Editor’s Director Mode allows players the ability to stage their \r\nown scenes using prominent story characters, pedestrians, \r\nand even animals to bring their vision to life. \r\nAlong with advanced camera manipulation and editing effects including fast and slow motion, \r\nand an array of camera filters, players can add their own music using songs \r\nfrom GTAV radio stations, or dynamically control the intensity of the game’s score. \r\nCompleted videos can be uploaded directly from the Rockstar Editor to YouTube and \r\nthe Rockstar Games Social Club for easy sharing. \r\n\r\nSoundtrack artists The Alchemist and Oh No return as hosts of the new radio station, The Lab FM. The station features new and exclusive music from the production duo based on and inspired by the game’s original soundtrack. Collaborating guest artists include Earl Sweatshirt, Freddie Gibbs, Little Dragon, Killer Mike, Sam Herring from Future Islands, and more. Players can also discover Los Santos and Blaine County while enjoying their own music through Self Radio, a new radio station that will host player-created custom soundtracks.', '2015-04-14', '95', 'https://images.g2a.com/newlayout/323x433/1x1x0/387a113709aa/59e5efeb5bafe304c4426c47'),
(2, 'NBA 2K18', 49, 3, '\r\nFEATURES\r\nRUN THE NEIGHBORHOOD\r\n*The future of sports career modes has arrived, allowing you to play the game the way you like.\r\n Build your career in NBA games, hit the courts in The Playground Park, \r\n join the Pro-Am circuit, or explore the shops and venues in an all-new \r\n open neighborhood setting. \r\n Featuring new MyPLAYER upgrade and endorsement systems, \r\n our biggest cast of characters to date including NBA players, and so much more.\r\n\r\nThe Road to 99\r\n*The overarching meta-game that rewards users for improving their MyPLAYER’s overall rating, \r\n regardless of which modes they choose to play. \r\n Featuring a unified badge system across Pro-Am, Park and your NBA journey in MyCAREER, \r\n your attributes, animations and badges all combine to define your play style on your road \r\n to a 99 overall rating.\r\n Updated Create A Player\r\n Create the MyPLAYER you want, whether scanning your face with the MyNBA2K18 \r\n mobile app or building something custom using our preset options. \r\n Hairstyles have been updated with numerous new options to choose from, \r\n and body weight and height are more accurately represented to ensure the unique \r\n look you want for your MyPLAYER.\r\n\r\nMyTEAM\r\n*Collect player cards featuring NBA legends from yesterday and today, \r\n and compete in a variety of online and offline modes.\r\n\r\nSuper Max\r\n*Construct a salary-capped team and compete against other users of similar ability \r\n in a new season mode. \r\n With a limited salary cap to distribute among 13 players, \r\n you’ll have to be strategic in selecting your lineup for each round. \r\n Prizes are awarded based on your performance each round, ensuring that every game matters.\r\n\r\nPack & Playoffs\r\n*An all-new draft mode that challenges you to build the best possible \r\n 5-man team from packs you’ll open before each round. \r\n Compete against other users’ drafted teams and advance to earn better prizes. \r\n With Pack & Playoffs, it’s a new lineup and a new experience every round.\r\n\r\nSchedule Challenges\r\n*Play through a 30 game schedule for each of the 30 NBA teams. \r\n Earn MyTEAM points and prizes as you work your way through 900 unique \r\n challenges based on the 2017-18 NBA schedule.', '2017-09-14', '87', 'https://images.g2a.com/newlayout/323x433/1x1x0/aa74091e6c21/599874dcae653a744541e8b3'),
(3, 'PLAYERUNKNOWN\'S BATTLEGROUNDS', 29, 16, 'PLAYERUNKNOWN\'S BATTLEGROUNDS is a battle royale shooter that pits 100 players against each other in a struggle for survival. Gather supplies and outwit your opponents to become the last person standing. \r\n\r\nPLAYERUNKNOWN, aka Brendan Greene, is a pioneer of the battle royale genre and the creator of the battle royale game modes in the ARMA series and H1Z1: King of the Kill. At PUBG Corp., Greene is working with a veteran team of developers to make PUBG into the world\'s premiere battle royale experience.\r\n', '2017-12-21', '86', 'https://images.g2a.com/newlayout/323x433/1x1x0/0017f67ada95/59e60aeaae653a34fe0e9633'),
(4, 'The Forest', 16, 18, 'As the lone survivor of a passenger jet crash, you find yourself \r\nin a mysterious forest battling to stay alive against a society of cannibalistic mutants. \r\n\r\nBuild, explore, survive in this terrifying first person survival horror simulator.\r\n\r\n\r\nKey features\r\nEnter a living, breathing world, where every tree and plant can be chopped down. \r\nBelow ground explore a vast network of caves and underground lakes. \r\n\r\nChop down trees to build a camp, or start a fire to keep warm. \r\nScavenge food to keep yourself from starving. \r\nBuild a small shelter or a large ocean side fortress. \r\nLay traps and defences to keep a safe perimeter. \r\nExplore and build during the day. Defend your base at night. \r\nCraft weapons and tools. Bunker down during the evening or \r\nbring the fight directly to the enemy. \r\nDefend yourself against a clan of genetic mutant enemies that have beliefs, \r\nfamilies, morals and that appear almost human. \r\nUse stealth to evade enemies, or engage them directly with crude weapons built \r\nfrom sticks and stones.', '2018-04-30', '83', 'https://images.g2a.com/newlayout/323x433/1x1x0/afcbd31b51b8/59111dca5bafe3e9746c2bfc'),
(5, 'Tom Clancy\'s Rainbow Six® Siege Starter Edition', 14, 18, 'Rainbow Six Siege is an intense, new approach to the first-person multiplayer shooter experience. Choose from a variety of unique Operators and master their abilities as you lead your team through tense, thrilling, and destructive team-based combat.\r\n\r\nTom Clancy\'s Rainbow Six® Siege Starter Edition provides access to all Rainbow Six Siege content, but requires extended gameplay to unlock operators, compared to other editions.\r\n\r\nThe Starter Edition includes: \r\n• Random instant access to 3 of the following Attack Operators: Ash, Thermite, Thatcher, Fuze and Sledge.\r\n• Random instant access to 3 of the following Defense Operators: Rook, Mute, Smoke, Jager and Kapkan.\r\n• Unlock the remaining original Operators with 12500 Renown or 300 R6 Credits (approximately 15 hours of gameplay per Operator).', '2015-12-01', '79', 'https://images.g2a.com/newlayout/323x433/1x1x0/278d0d2c6211/5912bd805bafe3783618b7de'),
(6, 'Divinity: Original Sin 2', 44, 16, 'he eagerly anticipated sequel to the award-winning RPG. Gather your party. Master deep, tactical combat. Join up to 3 other players - but know that only one of you will have the chance to become a God.\r\nChoose your race and origin. Choose from 6 unique origin characters with their own backgrounds and quests, or create your own as a Human, Lizard, Elf, Dwarf, or Undead. All choices have consequences.\r\n\r\nUnlimited freedom to explore and experiment. Go anywhere, talk to anyone, and interact with everything! Kill any NPC without sacrificing your progress, and speak to every animal. Even ghosts might be hiding a secret or two…\r\n\r\nThe next generation of turn-based combat. Blast your opponents with elemental combinations. Use height to your advantage. Master over 200 skills in 12 skill schools. But beware - the game’s AI 2.0 is our most devious invention to date.\r\n\r\nUp to 4 player online and split-screen multiplayer. Play with your friends online or in local split-screen with full controller support.\r\n\r\nGame Master Mode: Take your adventures to the next level and craft your own stories with the Game Master Mode. Download fan-made campaigns and mods from Steam Workshop.\r\n\r\n4K Support: an Ultimate 4K experience pushing RPGs into a new era!', '2017-09-14', '93', 'https://images.g2a.com/newlayout/323x433/1x1x0/f96a1e13bf91/5a66de685bafe386df20d95f'),
(8, 'Cuphead', 19, 10, 'Cuphead is a classic run and gun action game heavily focused on boss battles. Inspired by cartoons of the 1930s, the visuals and audio are painstakingly created with the same techniques of the era, i.e. traditional hand drawn cel animation, watercolor backgrounds, and original jazz recordings.\r\n\r\nPlay as Cuphead or Mugman (in single player or local co-op) as you traverse strange worlds, acquire new weapons, learn powerful super moves, and discover hidden secrets while you try to pay your debt back to the devil!', '2017-09-29', '88', 'https://images.g2a.com/newlayout/323x433/1x1x0/641d6dff8995/59ce809e5bafe3761b7402e2'),
(9, 'Total War: WARHAMMER II', 59, 16, 'Prince Tyrion, Defender of Ulthuan, guides the High Elves in their desperate efforts to stabilise the vortex as it roils above their home continent. Atop his palanquin-throne, the Slann Mage-Priest Mazdamundi directs his Lizardmen war-hosts as they surge northward from Lustria. He, too, is intent on preventing cataclysm, though the methods of The Old Ones must prevail. The Witch King Malekith and his sadistic Dark Elf hordes spew forth from Naggaroth and their labyrinthine Black Arks. He tastes great weakness in the vortex -- and great opportunity in its demise. Meanwhile a fourth, secretive race stirs, their motives obscured by sinister plots and machinations. The time for revelation is nigh... The second in a trilogy and sequel to the award-winning Total War: WARHAMMER, Total War: WARHAMMER II brings players a breathtaking new narrative campaign, set across the vast continents of Lustria, Ulthuan, Naggaroth and the Southlands. The Great Vortex Campaign builds pace to culminate in a definitive and climactic endgame, an experience unlike any other Total War title to date. Playing as one of 8 Legendary Lords across 4 iconic races from the world of Warhammer Fantasy Battles, players must succeed in performing a series of powerful arcane rituals in order to stabilise or disrupt The Great Vortex, while foiling the progress of the other races. Each Legendary Lord has a unique geographical starting position, and each race offers a distinctive new playstyle with unique campaign mechanics, narrative, methods of war, armies, monsters, Lores of Magic, legendary characters, and staggering new battlefield bombardment abilities', '2017-09-28', '87', 'https://images.g2a.com/newlayout/323x433/1x1x0/96eeffe1c272/59cb750c5bafe33e153d0ac2'),
(10, 'Wolfenstein II: The New Colossus', 59, 18, 'Wolfenstein II: The New Colossus is the highly anticipated sequel to the critically acclaimed, Wolfenstein: The New Order developed by the award-winning studio MachineGames. An exhilarating adventure brought to life by the industry-leading id Tech 6, Wolfenstein II sends players to Nazi-controlled America on a mission to recruit the boldest resistance leaders left. Fight the Nazis in iconic American locations, equip an arsenal of badass guns, and unleash new abilities to blast your way through legions of Nazi soldiers in this definitive first-person shooter. America, 1961. The Nazis maintain their stranglehold on the world. You are BJ Blazkowicz, aka Terror-Billy, member of the Resistance, scourge of the Nazi empire, and humanitys last hope for liberty. Only you have the guts, guns, and gumption to return stateside, kill every Nazi in sight, and spark the second American Revolution.', '2017-09-26', '86', ''),
(11, 'Pyre', 19, 12, '9.0 / 10 – Polygon\r\nRead more reviews at OpenCritic.com\r\n\r\nABOUT THIS GAME\r\nPyre is a party-based RPG in which you lead a band of exiles to freedom through ancient competitions spread across a vast, mystical purgatory. Who shall return to glory, and who shall remain in exile to the end of their days?\r\nKey Features:\r\nA New World From the Creators of Bastion and Transistor\r\n\r\nExperience the biggest and most imaginative world yet from Supergiant! Get to know an ensemble cast of characters struggling to earn back their freedom as you make your way across the forsaken land called the Downside.\r\nAction-Packed Three-on-Three Battle System\r\n\r\nBattle against a colorful cast of adversaries in pitched, high-stakes confrontations where each victory (or defeat!) brings your exiles closer to enlightenment. Choose three from your party for each Rite, and outfit them with mystic Talismans and powerful Masteries.\r\nA Branching Story with No Game-Over\r\nIn Pyre, you will never be forced to lose progress. Whether you prevail or you fail, your journey continues. The interactive narrative is expressed through a story that no two players will experience in quite the same way.\r\nChallenge a Friend in Versus Mode\r\n\r\nOn top of the single-player campaign, Pyre features a local two-player Versus Mode, where you can play against a friend (or CPU opponent) in one of the game\'s fast-paced ritual showdowns. Form your triumvirate from more than 20 unique characters.\r\nRich, Atmospheric Presentation\r\n\r\nPyre once again showcases the award-winning talents of the team that created Bastion and Transistor. From the vibrant hand-painted artwork to the evocative musical score, every aspect of Pyre\'s presentation draws you into its fantasy world.\r\nAccessible, Customizable Controls and 4K Ultra HD Graphics!\r\nPlay with gamepad or mouse-and-keyboard using fully customizable controls custom-tailored to PC. The game offers a highly scalable challenge both in the campaign and Versus Mode. Experience it all in stunning 4K resolution (compatible display required)!\r\nUnlock \'True Nightwing\' Campaign Mode After Finishing the Story\r\nComplete the Campaign, then go at it once more, \'ironman\'-style, with a unique set of rules, higher stakes, and greater challenge! Explore Pyre\'s wide breadth of narrative outcomes as you re-play the story.', '2017-07-25', '82', ''),
(13, 'Counter-Strike Global Offensive', 12, 16, 'Counter-Strike: Global Offensive (CS: GO) \r\nwill expand upon the team-based action gameplay that it pioneered when it was \r\nlaunched 14 years ago.\r\n\r\nCS: GO features new maps, characters, and weapons and delivers updated versions \r\nof the classic CS content (de_dust2, etc.). In addition, CS: GO \r\nwill introduce new gameplay modes, matchmaking, leader boards, and more.\r\n\r\n\"Counter-Strike took the gaming industry by surprise when the unlikely MOD became \r\nthe most played online PC action game in the world almost immediately after its release \r\nin August 1999,\" said Doug Lombardi at Valve. \"For the past 12 years, it has continued \r\nto be one of the most-played games in the world, headline competitive gaming tournaments \r\nand selling over 25 million units worldwide across the franchise. CS: GO promises to \r\nexpand on CS\' award-winning gameplay and deliver it to gamers on the PC as well as \r\nthe next gen consoles and the Mac.\"', '2012-08-21', '83', ''),
(12, 'Battlefield™ 1', 39, 18, 'Battlefield™ 1 takes you back to The Great War, WW1, \r\nwhere new technology and worldwide conflict changed the face of warfare forever. \r\nTake part in every battle, control every massive vehicle, \r\nand execute every maneuver that turns an entire fight around. \r\nThe whole world is at war – see what’s beyond the trenches.', '2016-10-21', '89', ''),
(14, 'Fallout 3 Game of the Year Edition', 19, 18, 'Prepare for the Future™\r\nWith Fallout 3: Game of the Year Edition, \r\nexperience the most acclaimed game of 2008 like never before. \r\nCreate a character of your choosing and descend into an awe-inspiring, \r\npost-apocalyptic world where every minute is a fight for survival. \r\nFallout 3: Game of the Year ', '2009-10-13', '91', ''),
(15, 'Fallout 4', 29, 18, 'Bethesda Game Studios, the award-winning creators of Fallout 3 \r\nand The Elder Scrolls V: Skyrim, welcome you to the world of \r\nFallout 4 – their most ambitious game ever, and the next generation of open-world gaming.\r\n\r\nAs the sole survivor of Vault 111, you enter a world destroyed by nuclear war. \r\nEvery second is a fight for survival, and every choice is yours. \r\nOnly you can rebuild and determine the fate of the Wasteland. Welcome home.', '2015-11-10', '84', ''),
(16, 'Far Cry® 3', 19, 18, '\r\nBeyond the reach of civilization lies a lawless island ruled by violence. \r\nThis is where you find yourself stranded, caught in a bloody conflict between psychotic \r\nwarlords and indigenous rebels. Struggling to survive, your only hope of escape is through \r\nthe muzzle of a gun. Discover the island\'s dark secrets and take the fight to the enemy; \r\nimprovise and use your environment to your advantage; and outwit its cast of ruthless, \r\nderanged inhabitants. Beware the beauty and mystery of this island of insanity... \r\nYou\'ll need more than luck to escape alive.', '2012-12-04', '88', ''),
(17, 'Far Cry® 5', 59, 18, 'ABOUT THIS GAME\r\nFar Cry comes to America in the latest installment of the award-winning franchise.\r\n\r\nWelcome to Hope County, Montana, \r\nland of the free and the brave but also home to a fanatical doomsday cult known as Eden’s Gate.\r\nStand up to cult leader Joseph Seed, and his siblings, the Heralds, to spark the fires \r\nof resistance and liberate the besieged community.', '2018-03-27', '81', ''),
(18, 'FIFA 18', 59, 3, 'Powered by Frostbite™ and Real Player Motion Technology, \r\nEA SPORTS™ FIFA 18 blurs the line between the virtual and real worlds, \r\nbringing to life the players, teams, and atmospheres that immerse you in the emotion \r\nof The World’s Game. ', '2017-09-29', '81', ''),
(19, 'Grand Theft Auto San Andreas', 9, 18, 'Five years ago Carl Johnson escaped from the pressures of life in Los Santos, \r\nSan Andreas... a city tearing itself apart with gang trouble, \r\ndrugs and corruption. Where filmstars and millionaires do their best to avoid the dealers \r\nand gangbangers. \r\n\r\nNow, it\'s the early 90s. \r\nCarl\'s got to go home. His mother has been murdered, \r\nhis family has fallen apart and his childhood friends are all heading towards disaster. ', '2005-06-06', '95', ''),
(20, 'Mad Max', 19, 18, 'Become Mad Max, the lone warrior in a savage post-apocalyptic world where cars are \r\nthe key to survival. In this action-packed, open world, third person action game, \r\nyou must fight to stay alive in The Wasteland, \r\nusing brutal on-ground and vehicular against vicious gangs of bandits. \r\nA reluctant hero with an instinct for survival, \r\nMax wants nothing more than to leave the madness behind and find solace in the storied \r\n“Plains of Silence.” Players are challenged with treacherous missions as they scavenge \r\nthe dangerous landscape for supplies to build the ultimate combat vehicle.', '2015-09-01', '73', 'https://images.g2a.com/newlayout/211x289/1x1x0/20dbb3a5efd0/59e60cb1ae653a211959f1e8'),
(21, 'Mafia III', 39, 18, 'It’s 1968 and after years of combat in Vietnam, \r\nLincoln Clay knows this truth: family isn’t who you’re born with, \r\nit’s who you die for. Now back home in New Bordeaux, \r\nLincoln is set on escaping a criminal past. But when his surrogate family, \r\nthe black mob, is betrayed and wiped out by the Italian Mafia, \r\nLincoln builds a new family on the ashes of the old and blazes a path of military-grade \r\nrevenge through those responsible. Intense gun fights, visceral hand-to-hand combat, \r\nwhite knuckle driving and street smarts will all be needed. But with the right crew, \r\ntough decisions and some dirty hands, it’s possible to make it to the top of the city\'s \r\nunderworld.', '2017-10-07', '62', ''),
(22, 'Mortal Kombat X', 19, 18, 'Who’s Next? Experience the Next Generation of the #1 Fighting Franchise.\r\n\r\nMortal Kombat X combines unparalleled, cinematic presentation with all new gameplay. \r\nFor the first time, players can choose from multiple variations of each character \r\nimpacting both strategy and fighting style.', '2015-04-07', '76', 'https://images.g2a.com/newlayout/323x433/1x1x0/b8c0a75f374c/590ef6feae653a4662052eab'),
(23, 'Mount Your Friends', 4, 0, '\r\nExperience the extreme simulated sporting sensation that\'s sweeping our digital nation! \r\nMount Your Friends is a fiercely competitive sporting event for you to play with your \r\nfriends in the contextual security of your own home, assuming that your home is not \r\ncomposed of sexual innuendo. If it is, we may suggest buying a new home or at least \r\ngetting the current one cleaned professionally. ', '2014-07-29', '74', ''),
(24, 'Need for Speed™ Payback', 59, 12, '\r\nNeed for Speed™, one of the world’s bestselling video game franchises returns with \r\na vengeance in the new Need for Speed Payback.\r\n\r\nSet in the underworld of Fortune Valley, you and your crew were divided by \r\nbetrayal and reunited by revenge to take down The House, a nefarious cartel \r\nthat rules the city’s casinos, criminals and cops. \r\nIn this corrupt gambler’s paradise, the stakes are high and The House always wins.\r\n\r\nCraft unique rides with deeper performance and visual customisation than ever before. \r\nPush them to the limit when you narrowly escape the heat in epic cop battles. \r\nFrom insane heist missions to devastating car battles to jaw-dropping set piece moments, \r\nNeed for Speed Payback delivers an edge-of-your-seat, \r\nadrenaline-fueled action-driving fantasy.', '2017-11-07', '62', ''),
(25, 'Next Day Survival', 8, 18, '\r\nNext Day: Survival is a multi-player SURVIVAL game with elements of RPG. \r\nIts action takes place in an imaginary country in Eastern Europe, \r\na large part of whose territory is contaminated with toxic fog. \r\nThe player\'s main task is to survive, to develop his game character\'s skills, \r\nand to interact with the surrounding world, other players, and non-player characters (NPCs). \r\nIn the course of the game, the character earns a reputation, \r\nwhich gives him the chance to join various factions of survivors, \r\neach with their own features and limitations.', '2018-05-21', '66', ''),
(26, 'Rust', 31, 0, 'The only aim in Rust is to survive.\r\n\r\nTo do this you will need to overcome struggles such as hunger, thirst and cold. Build a fire. \r\nBuild a shelter. Kill animals for meat. \r\nProtect yourself from other players, and kill them for meat. \r\nCreate alliances with other players and form a town. \r\n\r\nDo whatever it takes to survive', '2018-02-08', '69', ''),
(27, 'S.T.A.L.K.E.R. Call of Pripyat', 19, 18, '\r\nWith over 2 million copies sold, the new episode of the most internationally successful \r\nS.T.A.L.K.E.R. series seamlessly connects to the first part of the Shadow of Chernobyl.\r\n\r\nS.T.A.L.K.E.R.: Call of Pripyat takes \r\nPC gamers once again into the vicinity of the Chernobyl nuclear reactor that exploded in 1986.\r\nThis so-called \"Zone\" is a highly contaminated area cordoned off by \r\nthe military and now is combed through by the so-called stalkers, modern fortune hunters, \r\nin search of unique artifacts. In the role of Agent Alexander Degtyarev, \r\nwho is dressed up as stalker, the player has to investigate the mysterious disappearance \r\nof five military helicopters and thereby stand one’s ground against the various stalker groups.', '2018-02-12', '80', ''),
(28, 'STAR WARS™ Battlefront™ II', 59, 16, '\r\n\r\nEmbark on an endless Star Wars™ journey from the best-selling Star Wars™ \r\nvideo game franchise of all time. Experience rich multiplayer battlegrounds \r\nacross all three eras - prequel, classic and new trilogy - \r\nor rise as a new hero and discover an emotionally gripping \r\nsingle-player story spanning thirty years.\r\n\r\nCustomise and upgrade your heroes, starfighters or troopers - \r\neach with unique abilities to exploit in battle. Ride tauntauns \r\nor take control of tanks and speeders. Use the Force to prove your worth against \r\niconic characters like Kylo Ren, Darth Maul or Han Solo, as you play a part in \r\na gaming experience inspired by forty years of timeless Star Wars™ films.', '2017-11-17', '65', ''),
(29, 'Terraria', 9, 12, '\r\n\r\nDig, Fight, Explore, Build: The very world is at your fingertips as you fight for survival, \r\nfortune, and glory. Will you delve deep into cavernous expanses in search of treasure \r\nand raw materials with which to craft ever-evolving gear, machinery, and aesthetics? \r\nPerhaps you will choose instead to seek out ever-greater foes to test your mettle in combat? \r\nMaybe you will decide to construct your own city to house the host of \r\nmysterious allies you may encounter along your travels? \r\n\r\nIn the World of Terraria, the choice is yours!', '2011-05-16', '83', 'https://images.g2a.com/newlayout/323x433/1x1x0/d0cf8e126312/591065f6ae653a5dcf684dca'),
(30, 'The Sims™ 4', 39, 12, 'Enjoy the power to create and control people in a virtual world where there are no rules. \r\nExpress your creativity as you customize your Sims’ distinct appearances and unique \r\npersonalities. Choose their fashions, select their hairstyles, and give them life aspirations.\r\nEffortlessly build your Sims the perfect homes with the all-new room-based Build Mode, \r\nchoosing your favorite designs and décor. Develop your Sims’ relationships, \r\npursue new careers, and shape the rich and entertaining moments of their lives. \r\nExplore beautiful worlds with unique environments and travel to neighborhoods \r\nwhere you can visit venues and meet other interesting Sims. Be powerful and free, \r\nhave fun, and play with life! ', '2014-09-05', '70', 'https://images.g2a.com/newlayout/323x433/1x1x0/144768334b56/590e3f285bafe3eddf28b294'),
(31, 'This Is the Police', 14, 8, 'Dive into a deep story of corruption, crime and intrigue. \r\nTake the role of gritty Police Chief Jack Boyd, \r\nand come face to face with the ugly underbelly of Freeburg, \r\na city spiraling the drain. Will Jack reach his retirement with a nice stack of bills, \r\nor will he end up broken ... or worse? \r\n\r\n\r\nManage your staff, respond to emergencies, and investigate crimes in a \r\ncity on the brink of chaos. The mafia underworld maneuvers behind the scenes, \r\nsinking their claws ever deeper into the city, even as the mayor is ready to exploit every \r\nsituation to his political advantage. ', '2016-08-02', '66', ''),
(32, 'Tomb Raider', 19, 18, '\r\nHelp Lara Croft survive against incredible odds in Tomb Raider for PC download. \r\nExplore a vast, intricate and savage world, solve puzzles and defeat your enemies. \r\nUncover Lara\'s gritty and intense origin story as she is shipwrecked on a remote island \r\nfull of wild animals and dangerous scavengers. Armed only with raw instincts and the \r\nability to push beyond the limits of human endurance, she must fight to unravel the \r\ndark history of the forgotten island and escape its relentless hold. Experience Lara \r\nCroft\'s intense origin story from a young woman to a hardened survivor. \r\nOnly then will she be able to survive, save her friends and become a legend.', '2013-03-05', '86', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'InFocus', 'nikitarezvan@gmail.com', 'admin', 'a90f6a30864eb9328b83da5277f7df00'),
(2, 'admin', 'nikitarezvan@gmail.com', 'admin', 'a90f6a30864eb9328b83da5277f7df00'),
(3, 'user', 'nikitarezvan@gmail.com', 'admin', 'a90f6a30864eb9328b83da5277f7df00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `Product_ID` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Products ID', AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
