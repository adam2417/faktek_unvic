-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 10:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_fakultas`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_buku_tamu`
--

CREATE TABLE `t_buku_tamu` (
  `id` int(11) NOT NULL,
  `pengiriman` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pesan` text,
  `terbit` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_buku_tamu`
--

INSERT INTO `t_buku_tamu` (`id`, `pengiriman`, `tanggal`, `pesan`, `terbit`, `active`) VALUES
(1, 'test', '2012-06-19', 'test aj', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_eksternal_info`
--

CREATE TABLE `t_eksternal_info` (
  `id` int(11) NOT NULL,
  `header_title` text,
  `content` text,
  `update_time` date DEFAULT NULL,
  `tipe` int(11) DEFAULT NULL,
  `update_by` varchar(25) DEFAULT NULL,
  `active` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_eksternal_info`
--

INSERT INTO `t_eksternal_info` (`id`, `header_title`, `content`, `update_time`, `tipe`, `update_by`, `active`) VALUES
(1, 'tes eksternal info', 'test aja', '2017-10-03', 0, 'Administrator', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_galery`
--

CREATE TABLE `t_galery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `publish` int(5) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `tanggal` date DEFAULT NULL,
  `uploader` varchar(25) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_galery`
--

INSERT INTO `t_galery` (`id`, `gambar`, `publish`, `judul`, `deskripsi`, `tanggal`, `uploader`, `active`) VALUES
(1, '01Profile.jpg', NULL, 'ga jelas', NULL, NULL, NULL, NULL),
(2, 'eala.jpg', NULL, 'koala', NULL, NULL, NULL, NULL),
(3, 'ece-banner.jpg', NULL, 'test ', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_kurikulum`
--

CREATE TABLE `t_kurikulum` (
  `description` text,
  `last_edited` datetime DEFAULT NULL,
  `edited_by` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kurikulum`
--

INSERT INTO `t_kurikulum` (`description`, `last_edited`, `edited_by`) VALUES
('<p>testing aja ya</p>', '2017-10-05 17:56:51', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `t_param`
--

CREATE TABLE `t_param` (
  `id` int(11) NOT NULL,
  `param_value` varchar(25) DEFAULT NULL,
  `param_desc` text,
  `active` int(11) DEFAULT '1',
  `param_typ` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_param`
--

INSERT INTO `t_param` (`id`, `param_value`, `param_desc`, `active`, `param_typ`) VALUES
(1, '1', 'Akademik', 1, 'INFO_IN_TYP'),
(2, '2', 'Fakultas', 1, 'INFO_IN_TYP'),
(3, '3', 'Rektorat', 1, 'INFO_IN_TYP');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengumuman`
--

CREATE TABLE `t_pengumuman` (
  `id` int(11) NOT NULL,
  `header_title` text,
  `content` text,
  `update_time` datetime DEFAULT NULL,
  `tipe` int(11) DEFAULT NULL,
  `update_by` varchar(25) DEFAULT NULL,
  `active` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pengumuman`
--

INSERT INTO `t_pengumuman` (`id`, `header_title`, `content`, `update_time`, `tipe`, `update_by`, `active`) VALUES
(1, 'Testing header Akademik', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed felis purus, elementum id ullamcorper eget, eleifend ac ante. Quisque suscipit odio erat, at maximus risus condimentum sed. In faucibus dui finibus, fermentum nunc id, vehicula lorem. In hac habitasse platea dictumst. Vivamus sagittis est ante, non placerat elit viverra nec. Quisque venenatis elit eget risus vestibulum, sed iaculis nibh interdum. Maecenas leo nisi, ullamcorper nec pulvinar sed, consequat id tellus. Nam tincidunt gravida sem ut pharetra. Vivamus elementum iaculis leo, a pharetra enim euismod a. In mattis ultrices neque, ut varius velit porta id. Maecenas mollis interdum enim, vitae venenatis mauris cursus nec. Praesent molestie sollicitudin auctor. Suspendisse pulvinar elit quis feugiat blandit.\n\nUt non eros lectus. Sed molestie rhoncus viverra. Mauris eleifend ornare nisl non tempor. Nulla vel viverra turpis, quis sollicitudin dolor. Donec tristique dolor at dictum posuere. Duis fringilla dolor mauris. Curabitur eleifend nulla at tortor vulputate bibendum. Vivamus condimentum, metus maximus tincidunt laoreet, elit risus tristique nunc, a lacinia neque arcu eleifend eros. Nunc turpis lectus, posuere et tempor nec, vulputate sit amet felis. Integer vitae mollis diam.\n\nIn hac habitasse platea dictumst. Nam sodales facilisis metus, a fringilla velit bibendum a. Morbi ante augue, posuere at augue placerat, faucibus mattis lectus. Nunc faucibus felis risus, blandit ornare odio varius et. Nunc dictum a augue id malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla nec lobortis orci. Quisque sit amet leo non purus rhoncus lacinia ac quis massa. Duis non sodales lacus, at fringilla mauris. Nunc dignissim lorem vitae erat porttitor, ac tempor orci rhoncus. Integer eu facilisis turpis. Morbi faucibus, nibh eu pellentesque condimentum, ligula nulla vulputate nunc, nec elementum massa lacus eget velit.\n\nUt non nunc eros. Cras pellentesque finibus lorem, eu vehicula odio efficitur sed. Etiam eget varius risus. Suspendisse semper venenatis nulla. Quisque eget dolor sit amet urna iaculis malesuada. Aenean vitae congue dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean rhoncus tellus in odio pulvinar, aliquet ornare lacus faucibus. Praesent sed accumsan neque. Nam rutrum diam sed lacinia vehicula. Morbi nec augue ac lorem facilisis viverra. Nullam facilisis libero dictum venenatis malesuada. Maecenas varius eget ante et tincidunt.\n\nNulla in elit et nisl scelerisque efficitur vitae vel tortor. Quisque imperdiet dolor suscipit urna vulputate, sed ullamcorper odio tristique. Duis sed urna ac ipsum consectetur aliquet eu non purus. Fusce tortor elit, sollicitudin sed purus vulputate, hendrerit blandit diam. Curabitur accumsan pulvinar tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent tincidunt non tellus id gravida. Phasellus nibh eros, molestie id est a, fermentum tincidunt quam. Donec mi neque, vulputate at lacus at, luctus maximus sapien. Suspendisse bibendum mi nec eleifend pulvinar. Integer imperdiet feugiat ornare.\n\nIn interdum, odio nec tincidunt ultricies, est dui facilisis odio, sit amet consequat est libero fermentum risus. Duis tincidunt finibus condimentum. Curabitur ut orci ac lacus rutrum dictum at quis lectus. Suspendisse in ligula eu enim posuere bibendum. Maecenas condimentum malesuada nibh quis dapibus. Phasellus augue nunc, commodo eu diam nec, vehicula vulputate diam. Phasellus egestas nibh sit amet dolor aliquam, vel laoreet purus consectetur. Proin et arcu eget mauris iaculis fermentum. Fusce aliquet pretium viverra. Praesent bibendum turpis et imperdiet viverra.</p>', '2017-10-02 14:00:00', 1, 'dinx', 1),
(2, 'tes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed felis purus, elementum id ullamcorper eget, eleifend ac ante. Quisque suscipit odio erat, at maximus risus condimentum sed. In faucibus dui finibus, fermentum nunc id, vehicula lorem. In hac habitasse platea dictumst. Vivamus sagittis est ante, non placerat elit viverra nec. Quisque venenatis elit eget risus vestibulum, sed iaculis nibh interdum. Maecenas leo nisi, ullamcorper nec pulvinar sed, consequat id tellus. Nam tincidunt gravida sem ut pharetra. Vivamus elementum iaculis leo, a pharetra enim euismod a. In mattis ultrices neque, ut varius velit porta id. Maecenas mollis interdum enim, vitae venenatis mauris cursus nec. Praesent molestie sollicitudin auctor. Suspendisse pulvinar elit quis feugiat blandit.\n\nUt non eros lectus. Sed molestie rhoncus viverra. Mauris eleifend ornare nisl non tempor. Nulla vel viverra turpis, quis sollicitudin dolor. Donec tristique dolor at dictum posuere. Duis fringilla dolor mauris. Curabitur eleifend nulla at tortor vulputate bibendum. Vivamus condimentum, metus maximus tincidunt laoreet, elit risus tristique nunc, a lacinia neque arcu eleifend eros. Nunc turpis lectus, posuere et tempor nec, vulputate sit amet felis. Integer vitae mollis diam.\n\nIn hac habitasse platea dictumst. Nam sodales facilisis metus, a fringilla velit bibendum a. Morbi ante augue, posuere at augue placerat, faucibus mattis lectus. Nunc faucibus felis risus, blandit ornare odio varius et. Nunc dictum a augue id malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla nec lobortis orci. Quisque sit amet leo non purus rhoncus lacinia ac quis massa. Duis non sodales lacus, at fringilla mauris. Nunc dignissim lorem vitae erat porttitor, ac tempor orci rhoncus. Integer eu facilisis turpis. Morbi faucibus, nibh eu pellentesque condimentum, ligula nulla vulputate nunc, nec elementum massa lacus eget velit.\n\nUt non nunc eros. Cras pellentesque finibus lorem, eu vehicula odio efficitur sed. Etiam eget varius risus. Suspendisse semper venenatis nulla. Quisque eget dolor sit amet urna iaculis malesuada. Aenean vitae congue dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean rhoncus tellus in odio pulvinar, aliquet ornare lacus faucibus. Praesent sed accumsan neque. Nam rutrum diam sed lacinia vehicula. Morbi nec augue ac lorem facilisis viverra. Nullam facilisis libero dictum venenatis malesuada. Maecenas varius eget ante et tincidunt.\n\nNulla in elit et nisl scelerisque efficitur vitae vel tortor. Quisque imperdiet dolor suscipit urna vulputate, sed ullamcorper odio tristique. Duis sed urna ac ipsum consectetur aliquet eu non purus. Fusce tortor elit, sollicitudin sed purus vulputate, hendrerit blandit diam. Curabitur accumsan pulvinar tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent tincidunt non tellus id gravida. Phasellus nibh eros, molestie id est a, fermentum tincidunt quam. Donec mi neque, vulputate at lacus at, luctus maximus sapien. Suspendisse bibendum mi nec eleifend pulvinar. Integer imperdiet feugiat ornare.\n\nIn interdum, odio nec tincidunt ultricies, est dui facilisis odio, sit amet consequat est libero fermentum risus. Duis tincidunt finibus condimentum. Curabitur ut orci ac lacus rutrum dictum at quis lectus. Suspendisse in ligula eu enim posuere bibendum. Maecenas condimentum malesuada nibh quis dapibus. Phasellus augue nunc, commodo eu diam nec, vehicula vulputate diam. Phasellus egestas nibh sit amet dolor aliquam, vel laoreet purus consectetur. Proin et arcu eget mauris iaculis fermentum. Fusce aliquet pretium viverra. Praesent bibendum turpis et imperdiet viverra. ', '2017-10-03 11:17:25', 2, 'Administrator', 1),
(3, 'test2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed felis purus, elementum id ullamcorper eget, eleifend ac ante. Quisque suscipit odio erat, at maximus risus condimentum sed. In faucibus dui finibus, fermentum nunc id, vehicula lorem. In hac habitasse platea dictumst. Vivamus sagittis est ante, non placerat elit viverra nec. Quisque venenatis elit eget risus vestibulum, sed iaculis nibh interdum. Maecenas leo nisi, ullamcorper nec pulvinar sed, consequat id tellus. Nam tincidunt gravida sem ut pharetra. Vivamus elementum iaculis leo, a pharetra enim euismod a. In mattis ultrices neque, ut varius velit porta id. Maecenas mollis interdum enim, vitae venenatis mauris cursus nec. Praesent molestie sollicitudin auctor. Suspendisse pulvinar elit quis feugiat blandit.\n\nUt non eros lectus. Sed molestie rhoncus viverra. Mauris eleifend ornare nisl non tempor. Nulla vel viverra turpis, quis sollicitudin dolor. Donec tristique dolor at dictum posuere. Duis fringilla dolor mauris. Curabitur eleifend nulla at tortor vulputate bibendum. Vivamus condimentum, metus maximus tincidunt laoreet, elit risus tristique nunc, a lacinia neque arcu eleifend eros. Nunc turpis lectus, posuere et tempor nec, vulputate sit amet felis. Integer vitae mollis diam.\n\nIn hac habitasse platea dictumst. Nam sodales facilisis metus, a fringilla velit bibendum a. Morbi ante augue, posuere at augue placerat, faucibus mattis lectus. Nunc faucibus felis risus, blandit ornare odio varius et. Nunc dictum a augue id malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla nec lobortis orci. Quisque sit amet leo non purus rhoncus lacinia ac quis massa. Duis non sodales lacus, at fringilla mauris. Nunc dignissim lorem vitae erat porttitor, ac tempor orci rhoncus. Integer eu facilisis turpis. Morbi faucibus, nibh eu pellentesque condimentum, ligula nulla vulputate nunc, nec elementum massa lacus eget velit.\n\nUt non nunc eros. Cras pellentesque finibus lorem, eu vehicula odio efficitur sed. Etiam eget varius risus. Suspendisse semper venenatis nulla. Quisque eget dolor sit amet urna iaculis malesuada. Aenean vitae congue dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean rhoncus tellus in odio pulvinar, aliquet ornare lacus faucibus. Praesent sed accumsan neque. Nam rutrum diam sed lacinia vehicula. Morbi nec augue ac lorem facilisis viverra. Nullam facilisis libero dictum venenatis malesuada. Maecenas varius eget ante et tincidunt.\n\nNulla in elit et nisl scelerisque efficitur vitae vel tortor. Quisque imperdiet dolor suscipit urna vulputate, sed ullamcorper odio tristique. Duis sed urna ac ipsum consectetur aliquet eu non purus. Fusce tortor elit, sollicitudin sed purus vulputate, hendrerit blandit diam. Curabitur accumsan pulvinar tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent tincidunt non tellus id gravida. Phasellus nibh eros, molestie id est a, fermentum tincidunt quam. Donec mi neque, vulputate at lacus at, luctus maximus sapien. Suspendisse bibendum mi nec eleifend pulvinar. Integer imperdiet feugiat ornare.\n\nIn interdum, odio nec tincidunt ultricies, est dui facilisis odio, sit amet consequat est libero fermentum risus. Duis tincidunt finibus condimentum. Curabitur ut orci ac lacus rutrum dictum at quis lectus. Suspendisse in ligula eu enim posuere bibendum. Maecenas condimentum malesuada nibh quis dapibus. Phasellus augue nunc, commodo eu diam nec, vehicula vulputate diam. Phasellus egestas nibh sit amet dolor aliquam, vel laoreet purus consectetur. Proin et arcu eget mauris iaculis fermentum. Fusce aliquet pretium viverra. Praesent bibendum turpis et imperdiet viverra. ', '2017-10-03 11:45:04', 1, 'Administrator', 1),
(4, 'testing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget nisi eu orci commodo accumsan. Vivamus luctus porttitor urna non sollicitudin. Fusce sit amet ante diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. In id pretium eros, quis pellentesque nulla. Sed hendrerit porta justo, vel blandit ante condimentum et. Nulla quis tellus ac ante accumsan eleifend. Praesent sed odio quis sem porttitor luctus. Nam mattis facilisis scelerisque. In ac dolor ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nCras rutrum laoreet risus in eleifend. Cras sed hendrerit mi. Curabitur augue nisl, dignissim ac eros non, laoreet blandit mauris. Sed ultrices leo malesuada, dapibus mi eu, convallis est. Sed pellentesque metus ac ante scelerisque, sit amet ultricies quam rutrum. Proin sed malesuada metus, dapibus fermentum metus. Donec ullamcorper lacus tristique justo cursus tristique. Praesent mattis non lectus in egestas. Morbi convallis urna et ante suscipit pretium.\n\nQuisque quis vehicula tellus, nec semper tortor. Suspendisse tincidunt porttitor elementum. Duis purus elit, eleifend at pharetra vitae, auctor vel eros. Vivamus ut mollis velit. Vivamus rutrum augue sit amet faucibus tristique. Donec molestie, turpis eu tincidunt suscipit, magna diam pulvinar ligula, eu eleifend ligula justo a neque. Aenean gravida convallis lectus, id pulvinar nisi auctor quis. Nam nibh enim, molestie et enim in, mattis pulvinar lorem. Donec et lorem quis nisl posuere viverra. Vivamus euismod, justo id efficitur sollicitudin, lorem metus vulputate odio, ut posuere odio libero ac erat. Fusce blandit tristique sollicitudin. Cras non posuere nunc, ut ultricies ex. Nam volutpat, nisl et pellentesque mollis, nisi mi interdum turpis, non euismod ex nisi a ligula. Vestibulum laoreet, ante in aliquet congue, ex enim congue orci, vitae porta felis libero nec tellus. Pellentesque hendrerit nulla sit amet est hendrerit, a fringilla quam bibendum.\n\nCurabitur scelerisque nunc eu consectetur mollis. Duis mattis posuere velit sed varius. Sed sit amet lacinia nunc. Donec augue orci, ultricies eget ornare eu, rutrum eget justo. In ultricies, diam sed porta consequat, mi lacus lacinia orci, a maximus odio tellus in neque. Ut nec vehicula metus, eget ullamcorper purus. Cras id nulla non tortor ultricies dapibus sit amet vitae dolor. Nulla iaculis urna neque, sit amet scelerisque libero pellentesque vel. Mauris aliquam sodales euismod. Donec non blandit turpis. Phasellus eleifend nulla sed lorem dapibus, ac tempor leo condimentum. In hac habitasse platea dictumst. Nunc imperdiet convallis pulvinar. Donec nec dui maximus, feugiat tellus in, rutrum felis.\n\nAliquam erat volutpat. Vestibulum consectetur finibus lorem, et feugiat arcu finibus aliquam. Vivamus dui magna, lacinia a commodo iaculis, posuere in augue. Nulla facilisi. Suspendisse ornare id magna accumsan rutrum. Nulla viverra turpis nec mauris ornare placerat. Fusce vitae lacus scelerisque, eleifend eros at, faucibus elit. ', '2017-10-13 00:00:00', 3, 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_role`
--

CREATE TABLE `t_role` (
  `id` int(11) NOT NULL,
  `role` varchar(25) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_role`
--

INSERT INTO `t_role` (`id`, `role`, `active`) VALUES
(1, 'Administrator', 1),
(2, 'Admin Fakultas', 1),
(3, 'Admin Senat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_sejarah`
--

CREATE TABLE `t_sejarah` (
  `description` text,
  `last_edited` datetime DEFAULT NULL,
  `edited_by` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sejarah`
--

INSERT INTO `t_sejarah` (`description`, `last_edited`, `edited_by`) VALUES
('<div id="lipsum">\r\n<p><em><img style="vertical-align: top;" src="http://www.logovaults.com/stock_thumb/preview-universitas-victory-sorong-NDYxMw==.jpg" alt="Logo" width="121" height="121" /></em><em>Lorem</em><em> ipsum</em><em> dol</em><em>or sit amet, consectetur adipiscing elit.</em><em> Proin molestie odio vitae sem auctor, nec ornare dui consequat.</em><em> Mauris laoreet leo eget ante va</em><em>rius tristique. Fusce fringilla s</em><em>agittis risus, eget hendrerit orci convallis quis. Donec nec luctus neque. Aliquam porta leo feugiat tincidunt congue. Sed congue ante ultricies ipsum dapibus ultricies. Aliquam orci tellus, tincidunt et elit eget, ornare aliquam sapien. Nulla facilisi. Quisque vulputate libero arcu, tristique maximus nibh vulputate sed. Pellentesque nisi erat, maximus nec auctor non, dignissim eu nunc. Vivamus finibus magna a est egestas, vel cursus lorem iaculis.</em></p>\r\n<p><em>Nulla volutpat nulla sapien, eget tristique nulla eleifend in. Duis at molestie nisi. Vestibulum finibus diam a lectus hendrerit dictum ac sit amet est. Aliquam et aliquam lectus. In sed pulvinar lorem, eget euismod augue. Aenean tincidunt nec lacus quis varius. Quisque tristique dui eu mauris finibus mattis. Curabitur at ornare nisi, eu scelerisque magna. Sed et faucibus libero. Donec libero lectus, fermentum quis elit non, vestibulum porttitor velit. Integer laoreet eros mauris, vehicula lacinia mauris condimentum eget.</em></p>\r\n<p><em>Pellentesque eu ex mauris. Cras ut urna quam. Suspendisse ut malesuada lorem. Pellentesque et sollicitudin augue, non sodales tortor. Sed sagittis mauris ipsum, vitae accumsan elit consequat in. Ut lacinia ultrices eros, et egestas ligula pretium vel. Suspendisse sodales sollicitudin nisi, vitae vehicula diam congue ut. In eu nisl vel mauris blandit fringilla. Cras nisi risus, pharetra eget accumsan a, finibus vitae orci. Cras maximus vestibulum lectus, vel iaculis libero efficitur vel. Fusce mattis vehicula justo, ac dapibus odio tristique fermentum. Nam urna quam, elementum vel sem quis, rhoncus pulvinar mi. Donec dui magna, luctus id pretium id, condimentum vel sem. Fusce dapibus urna auctor nisi posuere porttitor.</em></p>\r\n<p><em>Curabitur eu mollis justo. Etiam ornare massa hendrerit dignissim tincidunt. Curabitur volutpat luctus magna, at suscipit nisi semper id. Vestibulum sed metus tempor, ultricies nisi non, sodales risus. Aliquam nec ipsum sit amet purus pellentesque eleifend. Donec at dictum nisi. Morbi interdum diam ac neque venenatis tristique. Curabitur id ex ut odio sodales vulputate. In efficitur semper enim et bibendum. In sed purus vitae nisl mollis consequat. Etiam auctor varius diam, quis tincidunt nisl. Etiam nec magna tempus, lacinia justo egestas, tristique nibh. Nulla dignissim nulla ut turpis porttitor, vitae blandit dolor vestibulum. Pellentesque nec ullamcorper ligula. Quisque at felis malesuada enim faucibus volutpat. Cras ac iaculis tortor, et dictum diam.</em></p>\r\n<p><em>Aliquam erat volutpat. Fusce efficitur purus quam, ut mollis nulla vulputate imperdiet. Curabitur mattis nec nibh sit amet cursus. Nullam facilisis maximus vehicula. Duis condimentum eleifend mauris, eget gravida dui convallis ut. Maecenas in pellentesque enim, id imperdiet lacus. Curabitur nibh massa, egestas eu sollicitudin ac, sagittis eu urna. Curabitur eleifend commodo risus vel porttitor. Vestibulum gravida lorem dui, id ultricies augue imperdiet vel. Quisque fringilla libero vel dictum dignissim. Maecenas venenatis massa tincidunt, facilisis nulla ut, ullamcorper mauris.</em></p>\r\n<p><em>Suspendisse potenti. Nulla id vestibulum erat. Nunc a nibh sed ex fermentum aliquet non non ligula. In elementum, risus id dignissim lacinia, neque mauris consectetur eros, a lobortis nisl leo hendrerit libero. Pellentesque vestibulum orci lectus, sit amet ultricies dui gravida non. Donec quis velit risus. Morbi tincidunt euismod leo vel maximus. Morbi hendrerit metus vitae massa lacinia eleifend.</em></p>\r\n<p><em>Vestibulum ante nibh, dignissim eu consectetur at, blandit quis ante. Mauris non ipsum interdum, malesuada ipsum at, rhoncus justo. Vivamus auctor euismod felis, feugiat convallis purus dignissim eget. Quisque blandit sapien id turpis congue pharetra. Maecenas sagittis, diam ac bibendum semper, nisi augue finibus quam, porta congue nunc massa non ligula. Nullam quis mauris egestas, iaculis ipsum vel, vehicula nisi. Morbi eleifend consequat nisl a fermentum. Sed tempor, justo a sagittis feugiat, mi justo iaculis sapien, eu finibus purus velit at augue. Donec ac nisl a augue ullamcorper scelerisque. Aliquam fermentum eget tortor nec vulputate. Morbi porttitor elit a fringilla tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</em></p>\r\n<p><em>Vestibulum feugiat finibus nibh, non porta tellus egestas ac. Aliquam hendrerit enim id felis interdum dapibus. Fusce aliquet dapibus nibh, eget tristique urna dignissim dictum. Nulla in arcu volutpat felis aliquet ultrices sit amet aliquam tortor. Nulla facilisi. Sed cursus tincidunt nulla quis tempor. Fusce ac aliquam eros, quis tempor arcu. Ut magna dolor, egestas eu consectetur et, commodo nec ligula. Vivamus id arcu nisl. Vestibulum dictum turpis at sapien ullamcorper semper.</em></p>\r\n<p><em>Morbi rutrum ultrices eros id interdum. Curabitur congue luctus lacus quis pulvinar. Quisque accumsan, massa sit amet venenatis commodo, odio felis auctor sem, sed porta sem ipsum id dui. Nulla ornare nisl vel sagittis imperdiet. Proin elementum, ipsum sed posuere pharetra, dui tellus varius massa, interdum malesuada orci odio ut lectus. Ut nec vulputate ipsum. Duis sed turpis porttitor, eleifend nisi eget, pharetra urna.</em></p>\r\n<p><em>Morbi ultrices tortor nec turpis tristique facilisis. Nullam rhoncus ipsum velit, ut placerat tortor sagittis eget. Suspendisse potenti. Nunc accumsan consectetur ex sed malesuada. Fusce mattis, arcu vitae sodales molestie, ex ligula dapibus eros, eget blandit nibh metus vitae tellus. Donec ante leo, rutrum vitae massa id, mollis iaculis nisi. Vestibulum auctor vehicula lacus vitae scelerisque. Vestibulum bibendum velit nunc, in iaculis odio euismod et. Mauris non pharetra nisl, at accumsan risus. Quisque convallis leo vel pulvinar ultricies.</em></p>\r\n</div>', '2017-10-02 09:25:15', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `t_strukturorg`
--

CREATE TABLE `t_strukturorg` (
  `description` text,
  `last_edited` datetime DEFAULT NULL,
  `edited_by` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_strukturorg`
--

INSERT INTO `t_strukturorg` (`description`, `last_edited`, `edited_by`) VALUES
('<p>Berikut struktur organisasi Gereja Kristen Sumba Waingapu:<br /> 1. test</p>\r\n<p>2. Tus</p>', '2012-06-14 17:04:18', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `uname` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `photo` varchar(200) NOT NULL,
  `last_login` date DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `uname`, `password`, `name`, `role`, `photo`, `last_login`, `active`) VALUES
(1, 'admin', '12345', 'Administrator', 1, 'no_pic.jpg', '2017-10-13', 1),
(2, 'ucup', '12345', 'test joki aja', 2, 'banner1.jpg', '2017-10-13', 1),
(3, 'kentang', '12345', 'User Senat', 3, 'sasando-31.jpg', '2017-10-13', 1),
(4, 'diubah', '12345', 'Selamat Diubah', 2, 'ServerDowntime-800x400.jpg', '2017-10-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_visimisi`
--

CREATE TABLE `t_visimisi` (
  `description` text,
  `last_edited` datetime DEFAULT NULL,
  `edited_by` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_visimisi`
--

INSERT INTO `t_visimisi` (`description`, `last_edited`, `edited_by`) VALUES
('<p><strong>Lorem ipsum :</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie odio vitae sem auctor, nec ornare dui consequat. Mauris laoreet leo eget ante varius tristique. Fusce fringilla sagittis risus, eget hendrerit orci convallis quis. Donec nec luctus neque. Aliquam porta leo feugiat tincidunt congue. Sed congue ante ultricies ipsum dapibus ultricies. Aliquam orci tellus, tincidunt et elit eget, ornare aliquam sapien. Nulla facilisi. Quisque vulputate libero arcu, tristique maximus nibh vulputate sed. Pellentesque nisi erat, maximus nec auctor non, dignissim eu nunc. Vivamus finibus magna a est egestas, vel cursus lorem iaculis.</p>\r\n<p>Nulla volutpat nulla sapien, eget tristique nulla eleifend in. Duis at molestie nisi. Vestibulum finibus diam a lectus hendrerit dictum ac sit amet est. Aliquam et aliquam lectus. In sed pulvinar lorem, eget euismod augue. Aenean tincidunt nec lacus quis varius. Quisque tristique dui eu mauris finibus mattis. Curabitur at ornare nisi, eu scelerisque magna. Sed et faucibus libero. Donec libero lectus, fermentum quis elit non, vestibulum porttitor velit. Integer laoreet eros mauris, vehicula lacinia mauris condimentum eget.</p>\r\n<p><strong>Pellentesque eu ex mauris :</strong> </p>\r\n<p>Pellentesque eu ex mauris. Cras ut urna quam. Suspendisse ut malesuada lorem. Pellentesque et sollicitudin augue, non sodales tortor. Sed sagittis mauris ipsum, vitae accumsan elit consequat in. Ut lacinia ultrices eros, et egestas ligula pretium vel. Suspendisse sodales sollicitudin nisi, vitae vehicula diam congue ut. In eu nisl vel mauris blandit fringilla. Cras nisi risus, pharetra eget accumsan a, finibus vitae orci. Cras maximus vestibulum lectus, vel iaculis libero efficitur vel. Fusce mattis vehicula justo, ac dapibus odio tristique fermentum. Nam urna quam, elementum vel sem quis, rhoncus pulvinar mi. Donec dui magna, luctus id pretium id, condimentum vel sem. Fusce dapibus urna auctor nisi posuere porttitor.</p>', '2017-10-02 08:47:13', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_buku_tamu`
--
ALTER TABLE `t_buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_eksternal_info`
--
ALTER TABLE `t_eksternal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_galery`
--
ALTER TABLE `t_galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_param`
--
ALTER TABLE `t_param`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_role`
--
ALTER TABLE `t_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_eksternal_info`
--
ALTER TABLE `t_eksternal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_galery`
--
ALTER TABLE `t_galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_param`
--
ALTER TABLE `t_param`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_role`
--
ALTER TABLE `t_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
