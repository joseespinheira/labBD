#
# TABLE STRUCTURE FOR: curso
#

DROP TABLE IF EXISTS `curso`;

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `curso` (`id_curso`, `nome`) VALUES (80, 'Engenharia Florestal');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (79, 'Engenharia geológica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (78, 'Engenharia Industrial Madeireira');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (77, 'Engenharia de manufatura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (76, 'Engenharia de Materiais');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (75, 'Engenharia Mecânica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (74, 'Engenharia Mecatrônica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (73, 'Engenharia Metalúrgica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (72, 'Engenharia Militar');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (71, 'Engenharia de Minas');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (70, 'Engenharia Naval e Oceânica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (69, 'Engenharia Nuclear');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (68, 'Engenharia de Pesca');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (67, 'Engenharia de Petróleo');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (66, 'Engenharia de Produção');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (65, 'Engenharia Química');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (64, 'Engenharia Sanitária');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (63, 'Engenharia de Sistemas Eletrônicos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (62, 'Engenharia de Software');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (61, 'Engenharia de Tecidos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (20, 'Enologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (19, 'Fruticultura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (18, 'Gestão de Recursos Hídricos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (17, 'Horticultura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (16, 'Meliponicultura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (15, 'Oftálmica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (14, 'Radiologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (13, 'Silvicultura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (11, 'Sistemas Biomédicos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (12, 'Ciências Exatas');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (10, 'Bacharelados');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (9, 'Agronomia (ou Engenharia agronômica)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (8, 'Astronomia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (7, 'Bioengenharia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (6, 'Biofísica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (5, 'Ciências Contábeis');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (4, 'Ciência da Computação');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (3, 'Ciências Biomoleculares');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (2, 'Ciências Matemáticas da Terra');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (264, 'Biologia (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (60, 'Engenharia de Telecomunicações');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (59, 'Engenharia Têxtil');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (58, 'Estatística');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (57, 'Farmácia (ou Bioquímica)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (56, 'Física (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (55, 'Física computacional');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (54, 'Física médica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (53, 'Geofísica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (52, 'Geologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (51, 'Geoprocessamento e Sensoriamento Remoto');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (50, 'Informática (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (49, 'Informática biomédica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (48, 'Matemática (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (47, 'Matemática Aplicada');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (46, 'Matemática computacional');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (45, 'Nanotecnologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (44, 'Oceanografia (referido como Ciência dos Mares)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (43, 'Química (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (42, 'Química ambiental');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (41, 'Química industrial');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (263, 'Biologia marinha');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (262, 'Biomedicina');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (261, 'Botânica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (260, 'Ciências Agrárias');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (259, 'Ciências Ambientais');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (258, 'Ciências Biológicas');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (257, 'Ciências da Saúde');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (256, 'Ciências do Meio Aquático');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (255, 'Ecologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (254, 'Educação física (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (252, 'Enfermagem');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (250, 'Fisioterapia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (249, 'Fonoaudiologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (40, 'Gerontologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (39, 'Medicina');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (38, 'Medicina veterinária[4]');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (37, 'Meteorologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (36, 'Microbiologia e Imunologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (35, 'Naturologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (34, 'Neurociência');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (33, 'Nutrição');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (32, 'Odontologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (31, 'Quiropraxia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (30, 'Saúde Coletiva');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (29, 'Terapia ocupacional');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (28, 'Zootecnia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (27, 'Tecnologias');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (26, 'Aquacultura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (25, 'Cafeicultura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (24, 'Biotecnologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (23, 'Ciência dos Alimentos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (22, 'Cosmetologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (21, 'Drenagem e Irrigação');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (247, 'Ciências Naturais (licenciatura)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (246, 'Ciências Náuticas');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (245, 'Ciência & Tecnologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (243, 'Educação do Campo (licenciatura)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (242, 'Engenharia aeroespacial');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (241, 'Engenharia aeronáutica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (239, 'Engenharia Agrícola');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (238, 'Engenharia de Alimentos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (237, 'Engenharia Ambiental');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (2361, 'Engenharia biomédica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (2351, 'Engenharia Cartográfica (ou Engenharia geográfica)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (2331, 'Engenharia Civil');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (2321, 'Engenharia de Computação');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (2311, 'Engenharia de controle e automação');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (2291, 'Engenharia Elétrica (ou Engenharia de Energia)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (81, 'Engenharia Física');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1228, 'Sistemas de Informação');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1227, 'Tecnologias');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1226, 'Agrimensura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1225, 'Agroindústria');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1224, 'Análise e Desenvolvimento de Sistemas');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1223, 'Automação Industrial');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1222, 'Biocombustíveis');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1221, 'Ciências Aeronáuticas');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1220, 'Ciência dos materiais');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (100, 'Direito');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (99, 'Economia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (98, 'Economia Doméstica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (97, 'Editoração');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (96, 'Educação Artística (licenciatura)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (95, 'Escultura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (94, 'Filosofia (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (93, 'Gastronomia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (92, 'Geografia (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (91, 'Gestão Ambiental');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (90, 'Gestão Pública');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (89, 'Gravurismo');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (88, 'História (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (87, 'História da Arte');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (86, 'Hotelaria');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (85, 'Jornalismo');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (84, 'Letras[28] (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (83, 'Linguística');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (82, 'Museologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1219, 'Construção de Edifícios');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1218, 'Construção de Estradas');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1215, 'Construção Naval');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1212, 'Energias Renováveis');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1211, 'Gestão da Tecnologia da Informação');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1210, 'Gestão de Petróleo e Gás');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1208, 'Gestão Portuária');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1207, 'Manutenção Industrial');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1123, 'Administração');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1122, 'Antropologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1121, 'Arqueologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1120, 'Arquitetura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1119, 'Arquivística');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1117, 'Artes Cênicas (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1116, 'Artes Visuais (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1115, 'Biblioteconomia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1114, 'Ciências Atuariais');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1113, 'Ciências Contábeis');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1112, 'Ciências Humanas (licenciatura)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1111, 'Ciência Política (ou Ciências do Estado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1110, 'Ciências Sociais');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1109, 'Cinema');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1107, 'Comunicação social');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1105, 'Dança (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (104, 'Defesa e Gestão Estratégica Internacional');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (103, 'Desenho Industrial');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (102, 'Design de Interiores');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (101, 'Design de Moda');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1205, 'Mecatrônica e Mecânica de Precisão');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1203, 'Mineração');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1202, 'Processos Metalúrgicos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1201, 'Processamento de Dados');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (141, 'Produção de Laticínios');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (140, 'Produção de Materiais Plásticos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (139, 'Produção Têxtil');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (138, 'Produção Sucroalcooeira');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (137, 'Projetos de Estruturas Aeronáuticas');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (136, 'Redes de Computadores');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (135, 'Redes de Telecomunicações');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (134, 'Saneamento Ambiental');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (133, 'Segurança da Informação');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (132, 'Sistemas Biomédicos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (131, 'Sistemas Elétricos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (129, 'Sistemas Embarcados');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (128, 'Sistemas de Navegação Fluvial');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (127, 'Sistemas para Internet');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (126, 'Telemática');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (125, 'Ciências Humanas');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (124, 'Bacharelados');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1163, 'Gestão Hospitalar');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1161, 'Gestão de Segurança Privada');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1160, 'Gestão da Qualidade');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1159, 'Logística');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1158, 'Mercadologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1157, 'Negócios Imobiliários');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1156, 'Processos Escolares');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1155, 'Produção de Aguardente[32]');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1154, 'Produção Fonográfica');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1153, 'Recursos Humanos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1152, 'Secretariado');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1151, 'Segurança no Trabalho');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1150, 'Transporte Aéreo');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1149, 'Gestão em serviços jurídicos e notariais');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1200, 'Música (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1199, 'Ordenamento do Território');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1197, 'Paisagismo');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1196, 'Pedagogia (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1193, 'Pintura');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1192, 'Psicologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1191, 'Publicidade & Propaganda');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1190, 'Produção Audiovisual (referido como Rádio & TV)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1189, 'Produção Cultural');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1188, 'Relações Internacionais');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1187, 'Relações Públicas');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1186, 'Segurança Pública');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1185, 'Serviço Social');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1184, 'Sociologia (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (1183, 'Teatro (licenciatura e bacharelado)');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (181, 'Teologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (180, 'Transporte Terrestre');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (179, 'Turismologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (178, 'Urbanismo');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (177, 'Tecnologias');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (176, 'Agroecologia');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (175, 'Comércio Exterior');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (174, 'Cooperativismo');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (173, 'Design de Jogos Digitais');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (172, 'Design de produto');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (171, 'Design gráfico');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (170, 'Eventos');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (169, 'Esporte e Lazer');
INSERT INTO `curso` (`id_curso`, `nome`) VALUES (168, 'Fotografia');
INSERT INTO `cursos` (`id_curso`, `nome`) VALUES (167, 'Gestão do Agronegócio');
INSERT INTO `cursos` (`id_curso`, `nome`) VALUES (166, 'Gestão Comercial');
INSERT INTO `cursos` (`id_curso`, `nome`) VALUES (165, 'Gestão Financeira');