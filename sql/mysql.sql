-- Tabulky ------------------------------------------------

CREATE TABLE `koule` (
  `id` int(1) NOT NULL ,
  `text_blok` text,
  `text_modul` text,
  `datum` varchar(10),
	`html` varchar(1) NOT NULL default '0',
	`smiley` varchar(1) NOT NULL default '1',
	`xcodes` varchar(1) NOT NULL default '1',
	`breaks` varchar(1) NOT NULL default '1',
	`images` varchar(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

-- Naplneni tabulek daty ----------------------------------

INSERT INTO `koule` VALUES ('1' ,'Nìjaké povídání o budoucnosti','Èo bolo, to bolo! Terazky bude všetko jinak!', '0','1','1','1','1','1');