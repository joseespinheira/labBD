DROP TABLE IF EXISTS `turmas`;
CREATE TABLE `turmas` (
  `id_disciplina` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `ano_semestre` varchar(6) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ano_semestre`),
  KEY `PK,FK` (`id_disciplina`,`id_curso`)
);

INSERT INTO `turmas` (`id_disciplina`,`id_curso`,`ano_semestre`,`nome`) VALUES ('4','4','2010.1','1200'),
('3','3','2010.2','1500'),
('11','11','2011.1','0500'),
('0','0','2011.2','1200'),
('1','1','2012.1','0020'),
('13','13','2012.2','1200'),
('17','17','2013.1','4020'),
('28','28','2013.2','0020'),
('14','14','2014.1','3M2'),
('16','16','2014.2','1100'),
('2','2','2015.1','3M2'),
('9','9','2015.2','0300'),
('7','7','2016.1','3M2'),
('5','5','2016.2','4020'),
('33','33','2017.1','1200'),
('31','31','2017.2','1200'),
('10','10','2018.1','3M2'),
('96','96','2018.2','0500'); 
