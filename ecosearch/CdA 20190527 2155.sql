-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.62


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema dbecosearch
--

CREATE DATABASE IF NOT EXISTS dbecosearch;
USE dbecosearch;

--
-- Definition of table `tb_desastre`
--

DROP TABLE IF EXISTS `tb_desastre`;
CREATE TABLE `tb_desastre` (
  `cd_desastre` int(11) NOT NULL AUTO_INCREMENT,
  `nm_desastre` varchar(256) DEFAULT NULL,
  `ds_desastre` varchar(500) DEFAULT NULL,
  `dt_desastre` date DEFAULT NULL,
  `nm_pais` varchar(100) DEFAULT NULL,
  `nm_estado` varchar(100) DEFAULT NULL,
  `nm_cidade` varchar(100) DEFAULT NULL,
  `evento_id` int(11) DEFAULT NULL,
  `lk_nome` varchar(255) DEFAULT NULL,
  `pd_desastre` int(11) DEFAULT NULL,
  `nm_usuarioCriador` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cd_desastre`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_desastre`
--

/*!40000 ALTER TABLE `tb_desastre` DISABLE KEYS */;
INSERT INTO `tb_desastre` (`cd_desastre`,`nm_desastre`,`ds_desastre`,`dt_desastre`,`nm_pais`,`nm_estado`,`nm_cidade`,`evento_id`,`lk_nome`,`pd_desastre`,`nm_usuarioCriador`) VALUES 
 (69,'Three Mile Island','Conhecido como â€œPesadelo Nuclearâ€, esse desastre ocorreu quando o reator de uma usina nuclear da PensilvÃ¢nia passou por uma falha mecÃ¢nica, aliada a erro humano. Foram lanÃ§ados gases radioativos em um raio de 16 quilÃ´metros. A populaÃ§Ã£o nÃ£o foi informada sobre o acidente; somente dois dias depois, foi retirada do local. NÃ£o houve mortes relacionadas ao acidente, e nenhum dos habitantes do local ou entorno tiveram sua saÃºde afetada.','1979-03-28','United States','Pennsylvania','Harrisburg',1,'http://www.quimica.seed.pr.gov.br/modules/galeria/detalhe.php?foto=1446&evento=4',0,'admin'),
 (70,'Vazamento em Bhopal','Vazamento de gases letais por uma fÃ¡brica de agrotÃ³xicos, causado por diversas falhas e falta de responsabilidade. O vento soprou essa nuvem de gases tÃ³xicos para Bhopal, que rapidamente se tornou uma neblina espessa na cidade. Calcula-se que trÃªs mil pessoas morreram por asfixia ainda em suas camas dormindo, o que resultou em aproximadamente cinco mil pessoas mortas e mais de cinquenta mil com graves sequelas.','1984-12-03','India','Madhya Pradesh','Bhopal',2,'https://alunosonline.uol.com.br/quimica/tragedia-bhopal.html',0,'admin'),
 (71,'Rompimento da barragem de Mariana','Em 05 novembro de 2015 a barragem FundÃ£o, localizada no municÃ­pio de Mariana, em Minas Gerais, se rompeu, provocando uma enxurrada de lama. Cerca de 62 milhÃµes de metros cÃºbicos de rejeitos de mineraÃ§Ã£o, que eram formados, principalmente, por Ã³xido de ferro, Ã¡gua e lama foram liberados. Mais de 40 cidades foram atingidas, deixando 19 mortos e muitas Ã¡reas com infertilidade do solo e rios poluÃ­dos.','2015-11-05','Brazil','Minas Gerais','Mariana',2,'http://g1.globo.com/ciencia-e-saude/noticia/2015/11/rompimento-de-barragens-em-mariana-perguntas-e-respostas.html',0,'admin'),
 (72,'Bombas de Hiroshima e Nagasaki','No final da segunda guerra mundial, os Estados Unidos lanÃ§ou a bomba nuclear em Hiroshima, denominada â€œLittle boyâ€, apÃ³s 3 dias lanÃ§ou outra em Nagasaki, a chamada â€œFat Manâ€. A radioatividade deixada pelas bombas causam mortes atÃ© hoje, e  tambÃ©m problemas hereditÃ¡rios, como a mÃ¡ formaÃ§Ã£o fÃ­sica e doenÃ§as respiratÃ³rias.\r\nVÃ­timas: aproximadamente 220 mil seres humanos.','1945-08-06','Japan','Hiroshima','Hiroshima',1,'https://brasilescola.uol.com.br/historiag/bombas-atomicas-hiroshima-nagasaki.htm',0,'admin'),
 (73,'DoenÃ§a de Minamata','Envenenamento de inÃºmeras pessoas por mercÃºrio, ocorrido na cidade de Minamata, no JapÃ£o, em razÃ£o de dejetos contendo mercÃºrio, em sua forma orgÃ¢nica, terem sido lanÃ§ados por uma indÃºstria de acetaldeÃ­do e PVC de propriedade da CorporaÃ§Ã£o Chisso, na BaÃ­a de Minamata, desde 1930.\r\nVÃ­timas: aproximadamente 700 mortos na Ã©poca e 3000 infectados atÃ© pesquisa em 2001.','1956-04-21','Japan','Kumamoto','Minamata',9,'https://www.japaoemfoco.com/a-misteriosa-doenca-de-minamata/',0,'admin'),
 (74,'Acidente de Seveso - Nuvem de Dioxina','Ocorreu um superaquecimento do reator de dioxina de uma fÃ¡brica de produtos quÃ­micos em Seveso, ItÃ¡lia, e o veneno foi liberado no meio ambiente. A fÃ¡brica nÃ£o dispunha de sistema de advertÃªncia nem planos de alarme Ã  populaÃ§Ã£o, sendo interditada quando a nuvem jÃ¡ havia atingido moradores da redondeza.\r\nVÃ­timas: 30 mil humanos afetados e 75 animais mortos.','1976-07-10','Italy','Milano','Milano',2,'https://www.dw.com/pt-br/1976-explos%C3%A3o-provoca-vazamento-de-dioxina-em-seveso/a-871315',0,'admin'),
 (75,'Vale da Morte','O intenso volume que as indÃºstrias trabalhavam, eliminando quantidades enormes de poluentes no ar e nos rios de forma descontrolada, comeÃ§ou a ter consequÃªncias preocupantes, cerca de 30 mil toneladas de poluentes eram lanÃ§adas por mÃªs no ar da cidade. Peixes e pÃ¡ssaros sumiram, pois nÃ£o havia condiÃ§Ãµes naturais para sobreviverem e se reproduzirem.\r\nVÃ­timas: animais desapareceram, 37 natimortos e inÃºmeras vÃ­timas de doenÃ§as e outros problemas.','1981-11-01','Brazil','Sao Paulo','Cubatao',2,'https://www.pensamentoverde.com.br/sustentabilidade/historia-poluicao-cubatao-cidade-deixou-vale-morte/',0,'admin'),
 (76,'Vila SocÃ³','Ocorreu um vazamento de gasolina em um dos oleodutos da PetrobrÃ¡s prÃ³xima a Vila SocÃ³, em CubatÃ£o/SP, que foi percebido pelos moradores. Visando vender o combustÃ­vel, coletaram e armazenaram parte do produto vazado. Com a movimentaÃ§Ã£o das marÃ©s, o produto inflamÃ¡vel espalhou-se pela regiÃ£o alagada e cerca de 2 horas apÃ³s o vazamento, aconteceu a igniÃ§Ã£o seguida de incÃªndio.\r\nVÃ­timas: 93 mortos registrados, porÃ©m aproximadamente 500 mortos por outras fontes e dezenas de feridos.','1984-02-24','Brazil','Sao Paulo','Cubatao',10,'https://cetesb.sp.gov.br/analise-risco-tecnologico/grandes-acidentes/vila-soco-cubatao/',0,'admin'),
 (77,'ExplosÃ£o de Chernobyl','Foi feita uma sobrecarga de energia em um reator para teste de capacidade, porÃ©m o sistema de resfriamento parou, o que causou um superaquecimento do reator, que logo explodiu. Grandes quantidades de material radioativo foram lanÃ§ados na atmosfera. Um raio de 30 quilÃ´metros quadrados foi completamente evacuado e fechado, que permanece assim atÃ© hoje.\r\nVÃ­timas: 32 mortos no momento da explosÃ£o, estima-se 4 mil mortos por exposiÃ§Ã£o e milhares de contaminados.','1986-04-25','Ukraine','Kiev','Ivankiv',1,'https://vestibular.uol.com.br/resumo-das-disciplinas/atualidades/ucrania-tragedia-na-usina-nuclear-de-chernobyl-completa-30-anos.htm',0,'admin'),
 (78,'CÃ©sio 137 - O pesadelo de GoiÃ¢nia','Moradores de uma cidade em GoiÃ¢nia manuseiam sem ter noÃ§Ã£o de que o CÃ©sio-137, encontrado em aparelho de radioterapia, Ã© extremamente radioativo. Vendo o brilho do pÃ³ azul, ficaram fascinados e nÃ£o associam os sintomas de radiaÃ§Ã£o ao pÃ³ azul, e sim a outros fatores.\r\nVÃ­timas: 628 reconhecidas pelo MinistÃ©rio PÃºblico e aproximadamente 6 mil afetados.','1987-09-13','Brazil','Goias','Goiania',2,'https://sites.unicentro.br/wp/petfisica/2015/10/09/cesio-137-o-pesadelo-de-goiania/',0,'admin'),
 (79,'Navio Exxon Valdez','O navio petroleiro Exxon Valdez colidiu com rochas submersas na costa do Alasca, expelindo cerca de 40 milhÃµes de litros de petrÃ³leo bruto em Prince William Sound. Apesar da limpeza feita ao longo das dÃ©cadas, grande parte do Ã³leo permanece.\r\nVÃ­timas: aproximadamente 250 mil aves, 2800 lontras marinhas e 300 focas.','1989-03-24','United States','Alaska','Anchorage',10,'https://naofrackingbrasil.com.br/2016/03/26/fatos-sobre-o-derramamento-historico-do-exxon-valdez/',0,'admin'),
 (80,'Queima de petrÃ³leo no Golfo PÃ©rsico','ApÃ³s a Guerra do Golfo, no Oriente MÃ©dio, por conta dos ataques feitos pelas tropas americanas, os iraquianos incendiaram centenas dos prÃ³prios poÃ§os de petrÃ³leo. O que resultou em uma intensa poluiÃ§Ã£o do ar, e milhÃµes de barris de petrÃ³leo foram despejados no Golfo PÃ©rsico, resultando na contaminaÃ§Ã£o das Ã¡guas do Oceano Ãndico e na zona costeira do Kuwait.\r\nVÃ­timas: milhares de peixes e aves.','1991-02-25','Iraq','Kirkuk','Kirkuk',2,'https://mundoeducacao.bol.uol.com.br/historiageral/guerra-golfo.htm',0,'admin'),
 (81,'Usina Nuclear de Tokaimura','Vazamento radioativo em uma usina no JapÃ£o por causa do excesso de urÃ¢nio no reprocessamento, que serve para recuperar parte do combustÃ­vel nuclear usado na geraÃ§Ã£o de eletricidade nas usinas. Apesar de este tipo de acidente ter tido diversas ocorrÃªncias nos anos 50, para uma naÃ§Ã£o desenvolvida e moderna, foi sinal de grande irresponsabilidade.\r\nVÃ­timas: 55 pessoas contaminadas, com 3 em estado grave.','1999-09-30','Japan','Ibaraki','Sakai',1,'https://www.infoescola.com/radioatividade/acidente-radioativo-no-japao-em-1999/',0,'admin'),
 (82,'Vazamento de Ã³leo na BaÃ­a de Guanabara','Um vazamento de Ã³leo em grandes proporÃ§Ãµes, com cerca de 1,3 milhÃµes de litros de Ã³leo cru, atingiu a BaÃ­a de Guanabara. Originado por causa de um problema originado em uma das tubulaÃ§Ãµes da Refinaria Duque de Caxias, teve sua mancha de Ã³leo distribuÃ­da, atingindo principalmente o manguezal da Ã¡rea de proteÃ§Ã£o ambiental de Guapimirim.\r\nVÃ­timas: inÃºmeras espÃ©cies da fauna e flora.','2000-01-18','Brazil','Rio de Janeiro','Rio de Janeiro',10,'http://www.ceped.ufsc.br/2000-derramamento-de-oleo-na-baia-de-guanabara/',0,'admin'),
 (83,'Navio Prestige','O navio petroleiro grego Prestige, carregando cerca de 11 mil toneladas de Ã³leo, enfrentou uma tempestade a 45 quilÃ´metros da costa da Espanha. Alguns dias depois se partiu em dois e afundou, e antes do navio estima-se que 10,2 mil toneladas de Ã³leo vazaram, atingindo quase toda a costa de GalÃ­cia.\r\nVÃ­timas: Aproximadamente 15 mil aves.','2002-11-13','Spain','Galicia','Fisterra',10,'https://www1.folha.uol.com.br/folha/ciencia/ult306u7895.shtml',0,'admin'),
 (84,'Vazamento de barragem em Cataguases','Vazamento de 1 bilhÃ£o de litros de lixÃ­via negra do reservatÃ³rio da IndÃºstria Cataguases de papel e celulose, situada na regiÃ£o da Zona da Mata mineira. O derramamento atingiu os rios Pomba e ParaÃ­ba do Sul, afetando a populaÃ§Ã£o que mora ao redor dos rios e tirando seu sustento dos mesmos.\r\nVÃ­timas: inÃºmeros animais mortos ao longo do rio.','2003-03-29','Brazil','Minas Gerais','Cataguases',2,'http://www.ceped.ufsc.br/2003-derramamento-de-lixivia-negra-em-cataguases/',0,'admin'),
 (85,'Rompimento de barragem em MiraÃ­','Rompimento de um dique da mineradora Rio Pomba Cataguases Ltda, em MiraÃ­ (MG), provocou o vazamento de pelo menos dois milhÃµes de metros cÃºbicos (dois bilhÃµes de litros) de lama misturada com bauxita e sulfato de alumÃ­nio no Rio MuriaÃ©, um dos afluentes do ParaÃ­ba do Sul.\r\nVÃ­timas: Aproximadamente de 2 mil desalojados e desabrigados.','2007-01-10','Brazil','Minas Gerais','Mirai',2,'http://g1.globo.com/mg/zona-da-mata/noticia/2015/11/zona-da-mata-ainda-se-recupera-de-rompimento-de-barragem-ha-9-anos.html',0,'admin'),
 (86,'Vazamento de Ã³leo na Bacia de Campos','Vazamento de petrÃ³leo detectado na Bacia de Campos, a 120 quilÃ´metros da costa do Estado do Rio. A petroleira americana Chevron, operadora do campo, foi a responsÃ¡vel pelo acidente, provocado pelo excesso de pressÃ£o aplicada na perfuraÃ§Ã£o dos poÃ§os. Com isso, surgiram rachaduras nas rochas do leito oceÃ¢nico, por onde vazaram 3.700 barris de Ã³leo.\r\nVÃ­timas: nÃºmero de animais afetados desconhecido. ','2011-11-09','Brazil','Rio de Janeiro','Rio de Janeiro',10,'https://acervo.oglobo.globo.com/em-destaque/gigante-americana-chevron-provoca-vazamento-de-oleo-na-bacia-de-campos-20427385',0,'admin'),
 (87,'IncÃªndio na Ultracargo','Um incÃªndio atingiu tanques de combustÃ­vel de uma empresa no bairro Alemoa, em Santos, no litoral de SÃ£o Paulo. De acordo com o MinistÃ©rio PÃºblico Federal, o fogo foi ocasionado por um erro operacional nas tubulaÃ§Ãµes de sucÃ§Ã£o e descarga, que operavam fechadas, causando a explosÃ£o de uma vÃ¡lvula.\r\nVÃ­timas: aproximadamente nove toneladas de 142 espÃ©cies de peixes devido o material despejado no estuÃ¡rio, em virtude do combate ao incÃªndio.','2015-04-02','Brazil','Sao Paulo','Santos',2,'https://g1.globo.com/sp/santos-regiao/noticia/mpf-denuncia-ultracargo-por-poluicao-causada-por-incendio-que-durou-8-dias.ghtml',0,'admin'),
 (88,'OrganizaÃ§Ã£o MeteorolÃ³gica Internacional','A OrganizaÃ§Ã£o MeteorolÃ³gica Internacional, fundada em 1873, foi estabelecida com o intuito de criar a cooperaÃ§Ã£o internacional para o desenvolvimento da hidrologia e da meteorologia operacional, pois o tempo, o clima e o ciclo da Ã¡gua nÃ£o conhecem fronteiras nacionais.','1873-09-01','Austria','Vienna','Vienna',11,'http://www.inmet.gov.br/portal/index.php?r=home/page&page=omm',0,'admin'),
 (89,'OrganizaÃ§Ã£o MeteorolÃ³gica Mundial','Originou-se da OrganizaÃ§Ã£o MeteorolÃ³gica Internacional (OMI) que foi fundada em 1873. Estabelecida em 1950, a OMM tornou-se em 1951 a agÃªncia especializada das NaÃ§Ãµes Unidas para Meteorologia (tempo e clima), hidrologia operacional e as ciÃªncias geofÃ­sicas relacionadas.','1950-03-23','Switzerland','Geneva','Geneve',11,'http://www.inmet.gov.br/portal/index.php?r=home/page&page=omm',0,'admin'),
 (90,'ConferÃªncia de estocolmo','A ConferÃªncia sobre o Desenvolvimento e Meio Ambiente Humano foi sediada em Estocolmo e teve desdobramentos como, a elaboraÃ§Ã£o da DeclaraÃ§Ã£o de Estocolmo e a criaÃ§Ã£o do Programa das NaÃ§Ãµes Unidas para o Meio Ambiente. Foram tratados assuntos sobre a poluiÃ§Ã£o da Ã¡gua e a do solo provenientes da industrializaÃ§Ã£o, e a pressÃ£o do crescimento demogrÃ¡fico sobre os recursos naturais.','1972-06-05','Sweden','Stockholm','Stockholm',8,'https://cetesb.sp.gov.br/proclima/conferencias-internacionais-sobre-o-meio-ambiente/estocolmo/',0,'admin'),
 (91,'Primeira ConferÃªncia Mundial Sobre o Clima','Foram discutidos assuntos como por exemplo a utilizaÃ§Ã£o correta da Ã¡gua, agricultura, pesca, energia, biologia, entre outros. Concluindo na Ã©poca que precisÃ¡vamos tirar mÃ¡ximo proveito dos conhecimentos atuais sobre o clima, tomar medidas para melhorar esse conhecimento, prevendo e evitando possÃ­veis mudanÃ§as ao clima que podem prejudicar o homem.','1979-02-12','Switzerland','Geneva','Geneve',8,'https://public.wmo.int/en/bulletin/history-climate-activities',0,'admin'),
 (92,'CriaÃ§Ã£o do Painel Intergovernamental sobre MudanÃ§as ClimÃ¡ticas','Criada pela OrganizaÃ§Ã£o MeteorolÃ³gica Mundial (OMM) e pelo Programa das NaÃ§Ãµes Unidas para o Meio Ambiente, foi estabelecida com a missÃ£o de avaliar as pesquisas, interpretÃ¡-las e reunir todas as informaÃ§Ãµes relevantes, tanto tÃ©cnicas quanto socioeconÃ´micas, em relatÃ³rios abrangentes, de fÃ¡cil compreensÃ£o e acessÃ­veis a todos.','1988-01-01','Switzerland','Geneva','Geneve',11,'http://www.ipea.gov.br/desafios/index.php?option=com_content&view=article&id=2134:catid=28&Itemid=23',0,'admin'),
 (93,'Segunda ConferÃªncia Mundial Sobre o Clima','A segunda ConferÃªncia Mundial Sobre o clima teve duas partes, sendo seis dias de apresentaÃ§Ãµes tÃ©cnicas e cientÃ­ficas, e dois dias de sessÃµes ministeriais. O primeiro plano era revisar os dez anos que se passaram desde a primeira conferÃªncia, e o segundo plano foi de empreender uma revisÃ£o internacional, assim surgindo a ECO 92 no Rio de Janeiro em 1992 e a elaboraÃ§Ã£o da UNFCCC.','1990-10-29','Switzerland','Geneva','Geneve',8,'https://public.wmo.int/en/bulletin/history-climate-activities',0,'admin'),
 (94,' ECO 92','Durante a Eco-92 duas importantes convenÃ§Ãµes foram aprovadas: uma sobre biodiversidade e outra sobre mudanÃ§as climÃ¡ticas. Outro resultado de fundamental importÃ¢ncia foi a assinatura da Agenda 21, um plano de aÃ§Ãµes com metas para a melhoria das condiÃ§Ãµes ambientais do planeta.','1992-06-03','Brazil','Rio de Janeiro','Rio de Janeiro',8,'https://brasilescola.uol.com.br/geografia/eco-92.htm',0,'admin'),
 (95,' Agenda 21','Um â€œinstrumento de planejamento participativo visando o desenvolvimento sustentÃ¡velâ€. Para se tornar realidade Ã© necessÃ¡ria a participaÃ§Ã£o e o envolvimento de toda a comunidade atravÃ©s do diagnÃ³stico da realidade local, elaborando e implementando o Plano Local de Desenvolvimento SustentÃ¡vel, atravÃ©s de constante monitoramento e avaliaÃ§Ã£o, e periÃ³dica revisÃ£o e realimentaÃ§Ã£o do mesmo.','1992-06-03','Brazil','Rio de Janeiro','Rio de Janeiro',3,'http://www.meioambiente.pr.gov.br/modules/conteudo/conteudo.php?conteudo=25',0,'admin'),
 (96,'ConvenÃ§Ã£o-Quadro das NaÃ§Ãµes Unidas sobre MudanÃ§a ClimÃ¡tica','Ã‰ um tratado ambiental internacional que visa estabilizar as concentraÃ§Ãµes de gases de efeito estufa na atmosfera resultantes das aÃ§Ãµes humanas, a fim de impedir que interfiram de forma prejudicial e permanente no sistema climÃ¡tico do planeta. Anualmente ocorre a ConferÃªncia das Partes (COP).','1992-06-01','Brazil','Rio de Janeiro','Rio de Janeiro',3,'https://www.oeco.org.br/dicionario-ambiental/28809-o-que-e-a-convencao-do-clima/',0,'admin'),
 (97,'COP-1: Mandato de Berlim','Tem como foco principal o consenso de todos os paÃ­ses em se tomar aÃ§Ãµes mais enÃ©rgicas quanto Ã  mitigaÃ§Ã£o do efeito estufa. Foi durante esta ConferÃªncia das Partes que se aplicou, plenamente, o mencionado â€œprincÃ­pio da igualdade entre os paÃ­sesâ€, impondo-se, desta forma, que os paÃ­ses desenvolvidos tomem a iniciativa de reduzir suas emissÃµes.','1995-03-28','Germany','Berlin','Berlin',3,'https://cetesb.sp.gov.br/proclima/conferencia-das-partes-cop/cop-1-berlim-alemanha-marco-abril-de-1995/',0,'admin'),
 (98,'COP-2: Genebra','Na segunda ConferÃªncia das Partes ficou definido que os paÃ­ses em desenvolvimento poderiam enviar uma comunicaÃ§Ã£o preliminar Ã  ConvenÃ§Ã£o, onde estariam solicitando auxÃ­lio financeiro e tecnolÃ³gico proveniente do Fundo Global para o Meio Ambiente.','1996-07-08','Switzerland','Geneva','Geneve',8,'https://cetesb.sp.gov.br/proclima/conferencia-das-partes-cop/cop-2-genebra-suica-junho-de-1996/',0,'admin'),
 (99,'COP-3: Protocolo de Quioto','Criado em 1997, entrando em vigor em 2005, o Protocolo de Quioto define metas de reduÃ§Ã£o de emissÃµes para os paÃ­ses desenvolvidos e os que, Ã  Ã©poca, apresentavam economia em transiÃ§Ã£o para o capitalismo.','1997-12-11','Japan','Kyoto','Kyoto',3,'http://www.mma.gov.br/clima/convencao-das-nacoes-unidas/protocolo-de-quioto.html',0,'admin');
/*!40000 ALTER TABLE `tb_desastre` ENABLE KEYS */;


--
-- Definition of table `tb_evento`
--

DROP TABLE IF EXISTS `tb_evento`;
CREATE TABLE `tb_evento` (
  `cd_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nm_evento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cd_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_evento`
--

/*!40000 ALTER TABLE `tb_evento` DISABLE KEYS */;
INSERT INTO `tb_evento` (`cd_evento`,`nm_evento`) VALUES 
 (1,'Acidente Nuclear'),
 (2,'Acidente Quimico'),
 (3,'Acordo'),
 (8,'Conferencia'),
 (9,'Acidente Metais Pesados'),
 (10,'Acidente Ã“leo'),
 (11,'Ã“rgÃ£os Internacionais');
/*!40000 ALTER TABLE `tb_evento` ENABLE KEYS */;


--
-- Definition of table `tb_sugestao`
--

DROP TABLE IF EXISTS `tb_sugestao`;
CREATE TABLE `tb_sugestao` (
  `cd_sugestao` int(11) NOT NULL AUTO_INCREMENT,
  `ds_sugestao` varchar(255) DEFAULT NULL,
  `cd_desastre` int(11) DEFAULT NULL,
  `nm_usuario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cd_sugestao`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sugestao`
--

/*!40000 ALTER TABLE `tb_sugestao` DISABLE KEYS */;
INSERT INTO `tb_sugestao` (`cd_sugestao`,`ds_sugestao`,`cd_desastre`,`nm_usuario`) VALUES 
 (29,'nao concordo com alguns pontos',72,'gfernandez');
/*!40000 ALTER TABLE `tb_sugestao` ENABLE KEYS */;


--
-- Definition of table `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(255) DEFAULT NULL,
  `lg_usuario` varchar(255) DEFAULT NULL,
  `sn_usuario` varchar(255) DEFAULT NULL,
  `tp_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_usuario`
--

/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` (`cd_usuario`,`nm_usuario`,`lg_usuario`,`sn_usuario`,`tp_usuario`) VALUES 
 (2,'admin','admin','admin',0),
 (9,'Guilherme Lameiras Fernandez','gfernandez','a21j10n23g03',1);
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
