

CREATE TABLE `tbl_activitylogs` (
  `logs_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`logs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1930 DEFAULT CHARSET=latin1;

INSERT INTO tbl_activitylogs VALUES("1912","admin","logout","2022-04-09 23:21:24");
INSERT INTO tbl_activitylogs VALUES("1913","admin","login","2022-04-09 23:21:39");
INSERT INTO tbl_activitylogs VALUES("1914","admin","New voters added","2022-04-09 23:22:09");
INSERT INTO tbl_activitylogs VALUES("1915","admin","Deleted","2022-04-09 23:22:36");
INSERT INTO tbl_activitylogs VALUES("1916","admin","Voting Disable","2022-04-09 23:22:43");
INSERT INTO tbl_activitylogs VALUES("1917","admin","New partylist added","2022-04-10 00:09:35");
INSERT INTO tbl_activitylogs VALUES("1918","admin","Deleted partylist","2022-04-10 00:09:43");
INSERT INTO tbl_activitylogs VALUES("1919","admin","Deleted partylist","2022-04-10 00:21:29");
INSERT INTO tbl_activitylogs VALUES("1920","","New partylist added","2022-04-10 00:23:45");
INSERT INTO tbl_activitylogs VALUES("1921","admin","Deleted partylist","2022-04-10 00:24:52");
INSERT INTO tbl_activitylogs VALUES("1922","","New partylist added","2022-04-10 00:25:00");
INSERT INTO tbl_activitylogs VALUES("1923","","New partylist added","2022-04-10 01:48:08");
INSERT INTO tbl_activitylogs VALUES("1924","admin","Deleted partylist","2022-04-10 01:48:16");
INSERT INTO tbl_activitylogs VALUES("1925","admin","logout","2022-04-10 01:49:23");
INSERT INTO tbl_activitylogs VALUES("1926","admin","login","2022-04-10 01:50:02");
INSERT INTO tbl_activitylogs VALUES("1927","admin","login","2022-04-10 16:45:02");
INSERT INTO tbl_activitylogs VALUES("1928","admin","Voting Enable","2022-04-10 17:48:39");
INSERT INTO tbl_activitylogs VALUES("1929","admin","login","2022-04-10 18:18:02");



CREATE TABLE `tbl_admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

INSERT INTO tbl_admin VALUES("23","admin","admin","justine","salmeron","justinesalmeron321@gmail.com");



CREATE TABLE `tbl_candidate` (
  `candidate_id` int(11) NOT NULL AUTO_INCREMENT,
  `platform` varchar(400) NOT NULL,
  `image_grade` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `partylist_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`candidate_id`),
  KEY `partylist_id` (`partylist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_candidate VALUES("22","adfadfad","../admin/uploads/joe.jpg","uploads/certificates.JPG","President","1003","Justine","Salmeron","justinesalmeron321@gmail.com","BSBA","2nd Year","Male","approved");



CREATE TABLE `tbl_messages` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(100) NOT NULL,
  `v_message` varchar(100) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_messages VALUES("1","Justine","Naa tao mo palit daw sya ays");



CREATE TABLE `tbl_partylist` (
  `partylist_id` int(11) NOT NULL AUTO_INCREMENT,
  `party` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`partylist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1018 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_partylist VALUES("1001","Bagani Partylist 0.1","2022","2022-02-16");
INSERT INTO tbl_partylist VALUES("1003","Chilax Partylist","2022","2022-02-16");
INSERT INTO tbl_partylist VALUES("1016","Independent 1.1","2022","2022-04-10");



CREATE TABLE `voters` (
  `voters_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `prog_study` varchar(100) NOT NULL,
  `year_level` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `status1` varchar(100) NOT NULL,
  `a_status` varchar(100) NOT NULL,
  PRIMARY KEY (`voters_id`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=utf8mb4;

INSERT INTO voters VALUES("1","﻿SCC-14-00013","John","Soposo","johnsoposo13@gmail.com","Male","BSIT","2nd Year","Unvoted","2022-12-01","YOo3fCP7","","Activated");
INSERT INTO voters VALUES("2","SCC-18-00175","Aljun","Canlum","aljuncanlum@gmail.com","Male","BSIT","4th Year","Unvoted","2022-12-02","8OCvPonX","","Activated");
INSERT INTO voters VALUES("3","SCC-18-00723","Eliezer","Aguipo","mooncreift.salmeron@gmail.com","Male","BSCRIM","1st Year","Unvoted","2022-12-03","eGzIxkWw","","Activated");
INSERT INTO voters VALUES("5","SCC-19-00410","James","Gaylan","jamesgaylan@gmain.com","Male","BSCRIM","3rdYear","Unvoted","2022-12-05","h6aJcabW","","Activated");
INSERT INTO voters VALUES("6","SCC-19-02099","John Erbin","Resani","johntan71218@gmail.com","Male","BSHM","4thYear","Unvoted","2022-12-06","HJkQhOtK","","Activated");
INSERT INTO voters VALUES("7","SCC-19-01018","Cherry Lyn","Enad","cherrylynenad@gmail.com","Female","BSHM","1st Year","Unvoted","2022-12-07","PbH2Yvak","","Activated");
INSERT INTO voters VALUES("8","SCC-18-02087","Jun Carlo","Oros","orosjuncarlo@gmail.com","Male","BSED","4th Year","Unvoted","2022-12-08","diLcRiCi","","Activated");
INSERT INTO voters VALUES("9","SCC-181-1879","Reymart","Quevido","jhonmav113@gmail.com","Male","BSED","2nd Year","Unvoted","2022-12-09","etxcSCFD","","Activated");
INSERT INTO voters VALUES("10","SCC-181-0990","Radel","Villanel","villanelradel120@gmail.com","Male","BEED","3rd Year","Unvoted","2022-12-10","c1UqSndy","","Activated");
INSERT INTO voters VALUES("12","SCC-181-1109","Khyl","Ansali","khylcanonigoansali@gmail.com","Male","BSTM","4th Year","Unvoted","2022-12-12","mWVVV4r8","","Activated");
INSERT INTO voters VALUES("13","SCC-321-4032","Justine","Salmeron","justinesalmeron321@gmail.com","Male","BSCRIM","3rd Year","Unvoted","2022-12-13","Tnv4PXRg","","Activated");
INSERT INTO voters VALUES("29","SCC-1000-112","Kenet","Rejis","rejis@gmail.com","Female","BSIT","3rd Year","Unvoted","2022-02-17","dy8GqK2e","","Activated");
INSERT INTO voters VALUES("30","SCC-089-112","Jeymar","Encina","jaymarencina@gmail.com","Male","BSIT","3rd Year","Unvoted","2022-02-17","zYqr5eDp","","Activated");
INSERT INTO voters VALUES("45","SCC-089-1121","Rodney","tradio","rodneytradio@gmail.com","Male","BSIT","3rd Year","Unvoted","2022-02-17","YndKxu7r","","Activated");
INSERT INTO voters VALUES("46","SCC-089-311","Japet","Abad","japetabad1995@gmail.com","Male","BSIT","2nd Year","Unvoted","2022-02-17","gdbyJUSQ","","Activated");
INSERT INTO voters VALUES("47","SCC-089-005","Aljie","Saavedra","saljie0228@gmail.com","Male","BSBA","2nd Year","Unvoted","2022-02-17","Iv6Obsv2","","Activated");
INSERT INTO voters VALUES("200","SCC-110-112","Renan","Yares","renanyares019@gmail.com","Male","BSIT","4th Year","Unvoted","2022-02-19","Q0LlkGbm","","Activated");
INSERT INTO voters VALUES("208","689","Alvin","Harrell","basexe@mailinator.com","Male","BSTM","2nd Year","Unvoted","2022-04-08","AbIhYRa9","","Activated");
INSERT INTO voters VALUES("209","504","Otto","Kelly","putykeqita@mailinator.com","Male","BSTM","3rd Year","Unvoted","2022-04-10","d4chjNlC","","Activated");



CREATE TABLE `votes` (
  `vote_id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(50) NOT NULL,
  `voters_id` int(50) NOT NULL,
  PRIMARY KEY (`vote_id`),
  KEY `candidate_id` (`candidate_id`),
  KEY `voters_id` (`voters_id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4;

INSERT INTO votes VALUES("1","1","11");
INSERT INTO votes VALUES("2","3","11");
INSERT INTO votes VALUES("3","5","11");
INSERT INTO votes VALUES("4","8","11");
INSERT INTO votes VALUES("5","9","11");
INSERT INTO votes VALUES("6","12","11");
INSERT INTO votes VALUES("7","14","11");
INSERT INTO votes VALUES("8","17","11");
INSERT INTO votes VALUES("9","2","44");
INSERT INTO votes VALUES("10","4","44");
INSERT INTO votes VALUES("11","6","44");
INSERT INTO votes VALUES("12","8","44");
INSERT INTO votes VALUES("13","9","44");
INSERT INTO votes VALUES("14","12","44");
INSERT INTO votes VALUES("15","14","44");
INSERT INTO votes VALUES("16","17","44");
INSERT INTO votes VALUES("17","1","45");
INSERT INTO votes VALUES("18","3","45");
INSERT INTO votes VALUES("19","5","45");
INSERT INTO votes VALUES("20","7","45");
INSERT INTO votes VALUES("21","9","45");
INSERT INTO votes VALUES("22","11","45");
INSERT INTO votes VALUES("23","14","45");
INSERT INTO votes VALUES("24","15","45");
INSERT INTO votes VALUES("25","2","46");
INSERT INTO votes VALUES("26","3","46");
INSERT INTO votes VALUES("27","6","46");
INSERT INTO votes VALUES("28","8","46");
INSERT INTO votes VALUES("29","9","46");
INSERT INTO votes VALUES("30","12","46");
INSERT INTO votes VALUES("31","14","46");
INSERT INTO votes VALUES("32","15","46");
INSERT INTO votes VALUES("33","2","6");
INSERT INTO votes VALUES("34","4","6");
INSERT INTO votes VALUES("35","5","6");
INSERT INTO votes VALUES("36","7","6");
INSERT INTO votes VALUES("37","9","6");
INSERT INTO votes VALUES("38","11","6");
INSERT INTO votes VALUES("39","14","6");
INSERT INTO votes VALUES("40","15","6");
INSERT INTO votes VALUES("41","1","5");
INSERT INTO votes VALUES("42","3","5");
INSERT INTO votes VALUES("43","5","5");
INSERT INTO votes VALUES("44","7","5");
INSERT INTO votes VALUES("45","10","5");
INSERT INTO votes VALUES("46","12","5");
INSERT INTO votes VALUES("47","14","5");
INSERT INTO votes VALUES("48","15","5");
INSERT INTO votes VALUES("49","2","47");
INSERT INTO votes VALUES("50","4","47");
INSERT INTO votes VALUES("51","6","47");
INSERT INTO votes VALUES("52","7","47");
INSERT INTO votes VALUES("53","10","47");
INSERT INTO votes VALUES("54","11","47");
INSERT INTO votes VALUES("55","14","47");
INSERT INTO votes VALUES("56","17","47");
INSERT INTO votes VALUES("57","2","47");
INSERT INTO votes VALUES("58","4","47");
INSERT INTO votes VALUES("59","5","47");
INSERT INTO votes VALUES("60","8","47");
INSERT INTO votes VALUES("61","10","47");
INSERT INTO votes VALUES("62","11","47");
INSERT INTO votes VALUES("63","14","47");
INSERT INTO votes VALUES("64","17","47");
INSERT INTO votes VALUES("65","1","200");
INSERT INTO votes VALUES("66","3","200");
INSERT INTO votes VALUES("67","5","200");
INSERT INTO votes VALUES("68","7","200");
INSERT INTO votes VALUES("69","9","200");
INSERT INTO votes VALUES("70","11","200");
INSERT INTO votes VALUES("71","13","200");
INSERT INTO votes VALUES("72","15","200");
INSERT INTO votes VALUES("73","1","6");
INSERT INTO votes VALUES("74","3","6");
INSERT INTO votes VALUES("75","6","6");
INSERT INTO votes VALUES("76","8","6");
INSERT INTO votes VALUES("77","9","6");
INSERT INTO votes VALUES("78","11","6");
INSERT INTO votes VALUES("79","14","6");
INSERT INTO votes VALUES("80","17","6");
INSERT INTO votes VALUES("81","1","46");
INSERT INTO votes VALUES("82","3","46");
INSERT INTO votes VALUES("83","6","46");
INSERT INTO votes VALUES("84","8","46");
INSERT INTO votes VALUES("85","9","46");
INSERT INTO votes VALUES("86","19","46");
INSERT INTO votes VALUES("87","14","46");
INSERT INTO votes VALUES("88","17","46");
INSERT INTO votes VALUES("89","1","11");
INSERT INTO votes VALUES("90","3","11");
INSERT INTO votes VALUES("91","6","11");
INSERT INTO votes VALUES("92","8","11");
INSERT INTO votes VALUES("93","9","11");
INSERT INTO votes VALUES("94","11","11");
INSERT INTO votes VALUES("95","13","11");
INSERT INTO votes VALUES("96","17","11");

