<?php
$aero = array (		// code OACI => FullName , geographic bounds, airfield altitude , password
	'LFOI'=> array('ABBEVILLE',"l.rec='LFOI' AND (l.alt < 767) AND (l.lat BETWEEN 50.13 AND 50.15 ) AND (l.lon BETWEEN 1.8 AND 1.86)",67,''),
	'ABOY'=> array('Aboyne',"l.rec='UKABO' AND (l.alt < 840) AND (l.lat BETWEEN 57.07191 AND 57.07745 ) AND (l.lon BETWEEN -2.85071 AND -2.83011)",140,''),
	'LOXA'=> array('AIGEN IM ENNSTAL',"l.rec='LOXA' AND (l.alt < 1340) AND (l.lat BETWEEN 47.53237 AND 47.53919 ) AND (l.lon BETWEEN 14.13251 AND 14.15038)",640,''),
	'LFDA'=> array('AIRE SUR L\'ADOUR',"l.rec='LFDA' AND (l.alt < 781) AND (l.lat BETWEEN 43.70396 AND 43.71272 ) AND (l.lon BETWEEN -0.25687 AND -0.23764)",81,''),	
	'LFJR'=> array('ANGERS Marce',"(l.rec='LFJR' OR l.rec='LFJR2') AND (l.alt < 752) AND (l.lat BETWEEN 47.54773 AND 47.57006 ) AND (l.lon BETWEEN -0.34228 AND -0.28048)",52,''),
	'LFCH'=> array('ARCACHON La teste de buch',"l.rec='LFCH' AND (l.alt < 716) AND (l.lat BETWEEN 44.58919 AND 44.60001 ) AND (l.lon BETWEEN -1.1248 AND -1.10139)",16,''),
	'LFEG'=> array('ARGENTON SUR CREUSE',"(l.rec='LFEG' OR l.rec='LFEG2') AND (l.alt < 900) AND (l.lat BETWEEN 46.58849 AND 46.60363 ) AND (l.lon BETWEEN 1.58867 AND 1.61369)",200,''),
	'EKAB'=> array('ARNBORG',"l.rec='EKAB' AND (l.alt < 745) AND (l.lat BETWEEN 56.00799 AND 56.01325 ) AND (l.lon BETWEEN 9.00121 AND 9.02882)",45,''),
	'LFNJ'=> array('ASPRES SUR BUECH',"l.rec='LFNJ' AND (l.alt < 1531) AND (l.lat BETWEEN 44.51014 AND 44.52235 ) AND (l.lon BETWEEN 5.731327 AND 5.74493)",831,''),
	'ASTO'=> array('Aston Down',"l.rec='UKAST' AND (l.alt < 883) AND (l.lat BETWEEN 51.69562 AND 51.72154 ) AND (l.lon BETWEEN -2.15553 AND -2.11107)",183,''),
	'LFHO'=> array('AUBENAS',"l.rec='LFHO' AND (l.alt < 981) AND (l.lat BETWEEN 44.53541 AND 44.55577 ) AND (l.lon BETWEEN 4.36385 AND 4.37671)",281,''),	
	'LFJF'=> array('AUBENASSON',"l.rec='LFJF' AND (l.alt < 946) AND (l.lat BETWEEN 44.6919 AND 44.69791 ) AND (l.lon BETWEEN 5.1415 AND 5.15929)",246,''),
	'LFDH'=> array('AUCH',"l.rec='LFDH' AND (l.alt < 825) AND (l.lat BETWEEN 43.67024 AND 43.69876 ) AND (l.lon BETWEEN 0.59184 AND 0.60711)",125,''),	
	'EDMA'=> array('AUGSBURG',"l.rec='EDMA' AND (l.alt < 1162) AND (l.lat BETWEEN 48.41229 AND 48.43413 ) AND (l.lon BETWEEN 10.90909 AND 10.95372)",462,''),	
	'LFLA'=> array('AUXERRE Branches',"l.rec='LFLA' AND (l.alt < 853) AND (l.lat BETWEEN 47.83743 AND 47.86672 ) AND (l.lon BETWEEN 3.48275 AND 3.51065)",153,''),
	'LFNT'=> array('AVIGNON Pujaut',"l.rec='LFNT' AND (l.alt < 745) AND (l.lat BETWEEN 43.98762 AND 44.00531 ) AND (l.lon BETWEEN 4.74227 AND 4.76744)",45,''),	
	'YBSS'=> array('BACCHUS MARSH',"l.rec='YBSS' AND (l.alt < 858) AND (l.lat BETWEEN -37.74409 AND -37.72142) AND (l.lon BETWEEN 144.40977 AND 144.44024)",158,''),
	'EDRA'=> array('Bad Neuenahr Ahrweiler',"l.rec='EDRA' AND (l.alt < 905) AND (l.lat BETWEEN 50.5553 AND 50.5618 ) AND (l.lon BETWEEN 7.1245 AND 7.1451)",205,''),
	'LFCB'=> array('BAGNERES DE LUCHON',"l.rec='LFCB' AND (l.alt < 1318) AND (l.lat BETWEEN 42.79324 AND 42.80681 ) AND (l.lon BETWEEN 0.596734 AND 0.60394)",618,''),
	'LFFL'=> array('BAILLEAU Armenonville',"l.rec='LFFL' AND (l.alt < 855) AND (l.lat BETWEEN 48.51097 AND 48.52369 ) AND (l.lon BETWEEN 1.6242 AND 1.64514)",155,''),
	'EBKH'=> array('BALEN KEIHEUVEL',"l.rec='EBKH' AND (l.alt < 740) AND (l.lat BETWEEN 51.17558 AND 51.1859 ) AND (l.lon BETWEEN 5.20555 AND 5.23645)",40,''),
	'LFMR'=> array('BARCELONNETTE Saint Pons',"l.rec='LFMR' AND (l.alt < 1832) AND (l.lat BETWEEN 44.38474 AND 44.38959 ) AND (l.lon BETWEEN 6.5981 AND 6.61748)",1132,''),	
	'LLBS'=> array('BE\'ER SHEVA Teyman',"l.rec='LLBS' AND (l.alt < 900) AND (l.lat BETWEEN 31.27552 AND 31.29752 ) AND (l.lon BETWEEN 34.71036 AND 34.7371)",200,''),
	'LFGG'=> array('BELFORT Chaux',"l.rec='LFGG' AND (l.alt < 1117) AND (l.lat BETWEEN 47.6936 AND 47.70828 ) AND (l.lon BETWEEN 6.82484 AND 6.83608)",417,''),	
	'LSTB'=> array('BELLECHASSE',"l.rec='LSTB' AND (l.alt < 1133) AND (l.lat BETWEEN 46.97636 AND 46.98191 ) AND (l.lon BETWEEN 7.12456 AND 7.14001)",433,''),
	'YBLA'=> array('BENALLA',"l.rec='YBLA' AND (l.alt < 873) AND (l.lat BETWEEN -36.56083 AND -36.54384 ) AND (l.lon BETWEEN 145.99629 AND 146.02635)",173,''),
	'LSGB'=> array('BEX',"l.rec='LSGB' AND (l.alt < 1100) AND (l.lat BETWEEN 46.25354 AND 46.26314 ) AND (l.lon BETWEEN 6.98055 AND 6.99175)",400,''),
	'LSZF'=> array('BIRRFELD',"l.rec='LSZF' AND (l.alt < 1096) AND (l.lat BETWEEN 47.440314 AND 47.447025 ) AND (l.lon BETWEEN 8.2243974 AND 8.2428081)",396,''),
	'EDMC'=> array('BLAUBEUREN',"l.rec='EDMC' AND (l.alt < 1500) AND (l.lat BETWEEN 48.41410 AND 48.42502 ) AND (l.lon BETWEEN 9.78299 AND 9.813895)",676,''),	
	'BOHL'=> array('Bohlhof',"l.rec='Bohlhof' AND (l.alt < 1260) AND (l.lat BETWEEN 47.64399 AND 47.65773 ) AND (l.lon BETWEEN 8.3759 AND 8.39611)",560,'Glka3G4kakKT.'),
	'EDKB'=> array('BONN-HANGELAR',"l.rec='EDKB' AND (l.alt < 760) AND (l.lat BETWEEN 50.76089 AND 50.77834 ) AND (l.lon BETWEEN 7.141187 AND 7.18444)",60,''),
	'ESSD'=> array('BORLANGE',"l.rec='ESSD' AND (l.alt < 853) AND (l.lat BETWEEN 60.40585 AND 60.43835 ) AND (l.lon BETWEEN 15.4701 AND 15.55001)",153,''),
	'LFHS'=> array('BOURG Ceyzeriat',"l.rec='LFHS' AND (l.alt < 961) AND (l.lat BETWEEN 46.19381 AND 46.21038 ) AND (l.lon BETWEEN 5.28514 AND 5.29763)",261,''),	
	'EBBT'=> array('BRASSCHAAT',"l.rec='EBBT' AND (l.alt < 723) AND (l.lat BETWEEN 51.33017 AND 51.35665 ) AND (l.lon BETWEEN 4.48602 AND 4.52237)",23,''),	
	'EDVE'=> array('BRAUNSCHWEIG-WOLFSBURG',"l.rec='EDVE' AND (l.alt < 790) AND (l.lat BETWEEN 52.30893 AND 52.32905 ) AND (l.lon BETWEEN 10.52882 AND 10.57774)",90,''),
	'LFFB'=> array('BUNO BONNEVAUX',"l.rec='LFFB' AND (l.alt < 828) AND (l.lat BETWEEN 48.34183 AND 48.35605 ) AND (l.lon BETWEEN 2.40843 AND 2.43508)",128,''),	
	'LFNH'=> array('CARPENTRAS',"l.rec='LFNH' AND (l.alt < 820) AND (l.lat BETWEEN 44.02052 AND 44.03456 ) AND (l.lon BETWEEN 5.07444 AND 5.0947)",120,''),	
	'LJCL'=> array('CELJE',"l.rec='LJCL' AND (l.alt < 944) AND (l.lat BETWEEN 46.24226 AND 46.24876 ) AND (l.lon BETWEEN 15.21322 AND 15.23165)",244,''),
	'EDVC'=> array('CELLE-ARLOH',"l.rec='EDVC' AND (l.alt < 763) AND (l.lat BETWEEN 52.6813 AND 52.693 ) AND (l.lon BETWEEN 10.10065 AND 10.12013)",63,''),
	'CELL'=> array('Celle-Scheuen',"l.rec='EDVC' AND (l.alt < 755) AND (l.lat BETWEEN 52.66731 AND 52.67129 ) AND (l.lon BETWEEN 10.07655 AND 10.0998)",55,''),
	'LFQK'=> array('CHALON Ecury sur Coole',"l.rec='LFQK' AND (l.alt < 797) AND (l.lat BETWEEN 48.89664 AND 48.91241 ) AND (l.lon BETWEEN 4.33942 AND 4.36159)",97,''),	
	'LFLE'=> array('CHAMBERY Challes-Les-Eaux',"l.rec='LFLE' AND (l.alt < 997) AND (l.lat BETWEEN 45.55 AND 45.567 ) AND (l.lon BETWEEN 5.96 AND 5.99)",297,''),
	'LFOR'=> array('CHARTRES Champhol',"l.rec='LFOR' AND (l.alt < 855) AND (l.lat BETWEEN 48.45204 AND 48.46295 ) AND (l.lon BETWEEN 1.50418 AND 1.53508)",155,''),
	'LFMX'=> array('CHATEAU ARNOUX Saint Auban',"l.rec='LFMX' AND (l.alt < 1159) AND (l.lat BETWEEN 44.04676 AND 44.07041 ) AND (l.lon BETWEEN 5.97311 AND 6.03491)",459,''),	
	'UKCHP'=> array('CHIPPING',"l.rec='UKCHP' AND (l.alt < 890) AND (l.lat BETWEEN 53.88139 AND 53.887841 ) AND (l.lon BETWEEN -2.63071 AND -2.60936)",190,''),
	'LFGA'=> array('COLMAR Houssen',"l.rec='LFGA' AND (l.alt < 891) AND (l.lat BETWEEN 48.09708 AND 48.12106 ) AND (l.lon BETWEEN 7.35027 AND 7.36563)",191,''),
	'LFAD'=> array('COMPIEGNE Margny',"l.rec='LFAD' AND (l.alt < 796) AND (l.lat BETWEEN 49.42662 AND 49.43662 ) AND (l.lon BETWEEN 2.79273 AND 2.81065)",96,''),
	'LFID'=> array('CONDOM Valence sur Baise',"l.rec='LFID' AND (l.alt < 835) AND (l.lat BETWEEN 43.90587 AND 43.91328 ) AND (l.lon BETWEEN 0.37622 AND 0.39397)",135,''),	
	'LFPK'=> array('COULOMMIERS Voisins',"l.rec='LFPK' AND (l.alt < 843) AND (l.lat BETWEEN 48.83033 AND 48.84709 ) AND (l.lon BETWEEN 2.98776 AND 3.030938)",143,''),
	'LSZJ'=> array('COURTELARY',"l.rec='LSZJ' AND (l.alt < 1385) AND (l.lat BETWEEN 47.18129 AND 47.18572 ) AND (l.lon BETWEEN 7.08527 AND 7.09594)",685,''),
	'ESKD'=> array('DALA Jarna',"l.rec='ESKD' AND (l.alt < 935) AND (l.lat BETWEEN 60.54754 AND 60.56577 ) AND (l.lon BETWEEN 14.36361 AND 14.39129)",235,''),
	'EHDL'=> array('DEELEN',"l.rec='EHDL' AND (l.alt < 745) AND (l.lat BETWEEN 52.0425 AND 52.07636 ) AND (l.lon BETWEEN 5.85792 AND 5.89667)",45,''),
	'DVOO'=> array('DeVoorst',"l.rec='DeVoorst' AND (l.alt < 701) AND (l.lat BETWEEN 52.6813 AND 52.68835 ) AND (l.lon BETWEEN 5.89866 AND 5.92218)",1,''),
	'EBDT'=> array('DIEST SCHAFFEN',"l.rec='EBDT' AND (l.alt < 730) AND (l.lat BETWEEN 50.99792 AND 51.01076 ) AND (l.lon BETWEEN 5.0477 AND 5.07746)",30,''),
	'LFGI'=> array('DIJON Darois',"l.rec='LFGI' AND (l.alt < 182) AND (l.lat BETWEEN 47.37963 AND 47.39091 ) AND (l.lon BETWEEN 4.94028 AND 4.95204)",482,''),	
	'LIVD'=> array('DOBBIACO',"l.rec='LIVD' AND (l.alt < 1901) AND (l.lat BETWEEN 46.72403 AND 46.7305 ) AND (l.lon BETWEEN 12.21977 AND 12.2447)",1201,''),	
	'EDTD'=> array('DONAUESCHINGEN',"l.rec='EDTD' AND (l.alt < 1380) AND (l.lat BETWEEN 47.96635 AND 47.98276 ) AND (l.lon BETWEEN 8.51159 AND 8.52721)",680,''),
	'DUNS'=> array('Dunstable',"(l.rec='UKDUN' OR l.rec='UKDUN2') AND (l.alt < 850) AND (l.lat BETWEEN 51.861056 AND 51.87608 ) AND (l.lon BETWEEN -0.562687 AND -0.533418)",150,''),
	'LKDK'=> array('DVUR KRALOVE',"l.rec='LKDK' AND (l.alt < 982) AND (l.lat BETWEEN 50.4118 AND 50.41631 ) AND (l.lon BETWEEN 15.82833 AND 15.84573)",282,''),
	'EAST'=> array('Easterton',"l.rec='HGC' AND (l.alt < 810) AND (l.lat BETWEEN 57.58192 AND 57.591068 ) AND (l.lon BETWEEN -3.32783 AND -3.296936)",110,''),
	'ENSM'=> array('ELVERUM/STARMOEN',"l.rec='ENSM' AND (l.alt < 901) AND (l.lat BETWEEN 60.86937 AND 60.88514 ) AND (l.lon BETWEEN 11.65328 AND 11.6916)",201,''),
	'ENEMO'=> array('Enemonzo',"l.rec='Enemonzo' AND (l.alt < 1072) AND (l.lat BETWEEN 46.40186 AND 46.4081 ) AND (l.lon BETWEEN 12.87793 AND 12.89386)",372,''),
	'EDNE'=> array('ERBACH',"l.rec='EDNE' AND (l.alt < 1175) AND (l.lat BETWEEN 48.33617 AND 48.34696 ) AND (l.lon BETWEEN 9.91051 AND 9.92117)",475,''),	
	'ESSC'=> array('Eskilstuna',"l.rec='ESSC' AND (l.alt < 713) AND (l.lat BETWEEN 59.37518 AND 59.39293 ) AND (l.lon BETWEEN 16.42153 AND 16.46526)",13,''),	
	'LFAS'=> array('FALAISE Monts-d\'Eraines',"l.rec='LFAS' AND (l.alt < 856) AND (l.lat BETWEEN 48.92 AND 48.932) AND (l.lon BETWEEN -0.15 AND -0.12)",156,''),
	'LFMF'=> array('FAYENCE',"l.rec='LFMF' AND (l.alt < 920) AND (l.lat BETWEEN 43.60377 AND 43.62095) AND (l.lon BETWEEN 6.6818 AND 6.7127)",220,''),	
	'LOKF'=> array('Feldkirchen-Ossiacher See',"l.rec='LOKF' AND (l.alt < 1220) AND (l.lat BETWEEN 46.70312 AND 46.71447) AND (l.lon BETWEEN 14.07115 AND 14.08252)",520,''),
	'LIPF'=> array('FERRARA',"l.rec='LIPF' AND (l.alt < 706) AND (l.lat BETWEEN 44.80934 AND 44.8148) AND (l.lon BETWEEN 11.6048 AND 11.6217)",6,''),	
	'UKFES'=> array('Feshiebridge',"l.rec='UKFES' AND (l.alt < 970) AND (l.lat BETWEEN 57.09638 AND 57.10808) AND (l.lon BETWEEN -3.89767 AND -3.88505)",270,''),
	'LFFK'=> array('FONTENAY LE COMTE',"l.rec='LFFK' AND (l.alt < 724 ) AND (l.lat BETWEEN 46.43722 AND 46.44556) AND (l.lon BETWEEN -0.80828 AND -0.78115)",24,''),	
	'LEFM'=> array('FUENTEMILANOS',"l.rec='LEFM' AND (l.alt < 1700 ) AND (l.lat BETWEEN 40.88192 AND 40.8949) AND (l.lon BETWEEN -4.24509 AND -4.23271)",1000,''),	
	'LFNA'=> array('GAP Tallard',"l.rec='LFNA' AND (l.alt < 1300) AND (l.lat BETWEEN 44.44532 AND 44.46301) AND (l.lon BETWEEN 6.02482 AND 6.04675)",600,''),
	'EDPT'=> array('GERSTETTEN',"l.rec='EDPT' AND (l.alt < 1302) AND (l.lat BETWEEN 48.61 AND 48.6248 ) AND (l.lon BETWEEN 10.04425 AND 10.071395)",602,''),
	'EHGR'=> array('GILZE-RIJEN',"l.rec='EHGR' AND (l.alt < 715) AND (l.lat BETWEEN 51.54732 AND 51.58251 ) AND (l.lon BETWEEN 4.89347 AND 4.96355)",15,''),	
	//'EDLG'=> array('GOCH-ASPERDEN',"l.rec='EDLG' AND (l.alt < 716) AND (l.lat BETWEEN 51.68631 AND 51.696414 ) AND (l.lon BETWEEN 6.0874 AND 6.1183056)",16,'Glvimav57osf.'),
	'EDLG'=> array('GOCH-ASPERDEN',"l.rec='EDLG' AND (l.alt < 716) AND (l.lat BETWEEN 51.68631 AND 51.696414 ) AND (l.lon BETWEEN 6.0874 AND 6.1183056)",16,''),
	'EDSG'=> array('GRABENSTETTEN',"l.rec='EDSG' AND (l.alt < 1410) AND (l.lat BETWEEN 48.52 AND 48.54 ) AND (l.lon BETWEEN 9.41 AND 9.45)",710,''),
	'GRAN'=> array('Gransden Lodge Airfield',"l.rec='UKGRL' AND (l.alt < 773) AND (l.lat BETWEEN 52.172092 AND 52.188959 ) AND (l.lon BETWEEN -0.12695 AND -0.10283)",73,''),
	'LOWG'=> array('GRAZ',"l.rec='LOWG' AND (l.alt < 1400) AND (l.lat BETWEEN 46.96942 AND 47.01433 ) AND (l.lon BETWEEN 15.41786 AND 15.46284)",340,''),	
	'LFLG'=> array('GRENOBLE Le Versoud',"l.rec='LFLG' AND (l.alt < 920) AND (l.lat BETWEEN 45.21311 AND 45.22349 ) AND (l.lon BETWEEN 5.8385 AND 5.8561)",220,''),	
	'HABE'=> array('Habere Poche',"l.rec='HPoche' AND (l.alt < 1792) AND (l.lat BETWEEN 46.26112 AND 46.28147 ) AND (l.lon BETWEEN 6.44935 AND 6.47918)",1092,''),	
	'EDST'=> array('HAHNWEIDE',"l.rec='EDST' AND (l.alt < 1056) AND (l.lat BETWEEN 48.6241 AND 48.6376 ) AND (l.lon BETWEEN 9.41047 AND 9.445 )",356,''),
	'EGWN'=> array('HALTON',"l.rec='EGWN' AND (l.alt < 810) AND (l.lat BETWEEN 51.78232 AND 51.80248 ) AND (l.lon BETWEEN -0.75555 AND -0.72229 )",110,''),
	'LSZN'=> array('HAUSEN AM ALBIS',"(l.rec='LSZN' OR l.rec='Heisch') AND (l.alt < 1288) AND (l.lat BETWEEN 47.23689 AND 47.24043 ) AND (l.lon BETWEEN 8.50887 AND 8.52246 )",588,''),
	'EHHV'=> array('HILVERSUM',"l.rec='EHHV' AND (l.alt < 701) AND (l.lat BETWEEN 52.18369 AND 52.20033 ) AND (l.lon BETWEEN 5.12943 AND 5.1626 )",1,''),
	'EDVH'=> array('HODENHAGEN',"l.rec='EDVH' AND (l.alt < 724) AND (l.lat BETWEEN 52.75459 AND 52.77451 ) AND (l.lon BETWEEN 9.59434 AND 9.62983 )",24,''),	
	'EHHO'=> array('HOOGEVEEN',"l.rec='EHHO' AND (l.alt < 712) AND (l.lat BETWEEN 52.72185 AND 52.74032 ) AND (l.lon BETWEEN 6.49315 AND 6.54207 )",12,''),	
	'HOYA'=> array('Hoya',"l.rec='HoyaFlpl' AND (l.alt < 715) AND (l.lat BETWEEN 52.80523 AND 52.82069 ) AND (l.lon BETWEEN 9.14416 AND 9.18205 )",15,''),
	'HUSB'=> array('Husbands Bosworth',"l.rec='Husbos' AND (l.alt < 856) AND (l.lat BETWEEN 52.428046 AND 52.445941 ) AND (l.lon BETWEEN -1.05931 AND -1.01863 )",156,''),
	'EFHV'=> array('HYVINKAA',"l.rec='EFHV' AND (l.alt < 831) AND (l.lat BETWEEN 60.64632 AND 60.66407 ) AND (l.lon BETWEEN 24.85802 AND 24.90416 )",131,''),
	'ISER'=> array('Iserlohn',"l.rec='Iserlohn' AND (l.alt < 854) AND (l.lat BETWEEN 51.4305 AND 51.44165 ) AND (l.lon BETWEEN 7.69109 AND 7.70871 )",154,''),
	'LFHA'=> array('ISSOIRE Le Broc',"l.rec='LFHA' AND (l.alt < 1078) AND (l.lat BETWEEN 45.50682 AND 45.52153 ) AND (l.lon BETWEEN 3.26031 AND 3.27027 )",378,''),	
	'LFEK'=> array('ISSOUDUN Le Fay',"l.rec='LFEK' AND (l.alt < 862) AND (l.lat BETWEEN 46.88316 AND 46.89546 ) AND (l.lon BETWEEN 2.03041 AND 2.04807 )",162,''),
	'LFIX'=> array('ITXASSOU',"l.rec='LFIX' AND (l.alt < 885) AND (l.lat BETWEEN 43.33389 AND 43.33893 ) AND (l.lon BETWEEN -1.43075 AND -1.41605 )",185,''),	
	'EFJM'=> array('JAMIJARVI',"l.rec='EFJM' AND (l.alt < 854) AND (l.lat BETWEEN 61.76707 AND 61.78379 ) AND (l.lon BETWEEN 22.69332 AND 22.72765 )",154,''),
	'ESSX'=> array('JOHANNISBERG',"l.rec='ESSX' AND (l.alt < 709) AND (l.lat BETWEEN 59.56728 AND 59.58799 ) AND (l.lon BETWEEN 16.47721 AND 16.52352 )",9,''),	
	'LFFJ'=> array('JOINVILLE Mussey',"l.rec='LFFJ' AND (l.alt < 1012) AND (l.lat BETWEEN 48.38243 AND 48.38745 ) AND (l.lon BETWEEN 5.13424 AND 5.15317 )",312,''),	
	'EDWJ'=> array('JUIST',"l.rec='EDWJ' AND (l.alt < 702) AND (l.lat BETWEEN 53.67761 AND 53.68318 ) AND (l.lon BETWEEN 7.04817 AND 7.06534 )",2,''),
	'EKKL'=> array('KALUNDBORG',"l.rec='EKKL' AND (l.alt < 700) AND (l.lat BETWEEN 55.69881 AND 55.70171 ) AND (l.lon BETWEEN 11.2384 AND 11.26378 )",0,''),	
	'KAME'=> array('Kamen-Heeren',"l.rec='Kamen' AND (l.alt < 962) AND (l.lat BETWEEN 51.58551 AND 51.59574 ) AND (l.lon BETWEEN 7.69409 AND 7.72499 )",62,''),
	'EGBP'=> array('KEMBLE',"l.rec='EGBP' AND (l.alt < 833) AND (l.lat BETWEEN 51.66166 AND 51.67333 ) AND (l.lon BETWEEN -2.07637 AND -2.03723 )",133,''),
	'FYKH'=> array('Kiripotib',"l.rec='FYKH' AND (l.alt < 2064) AND (l.lat BETWEEN -23.3462 AND -23.32339 ) AND (l.lon BETWEEN 17.93251 AND 17.95517 )",1364,''),	
	'KIRT'=> array('Kirton in Lindsey',"l.rec='UKKIR' AND (l.alt < 760) AND (l.lat BETWEEN 53.45239 AND 53.47199 ) AND (l.lon BETWEEN -0.59791 AND -0.55499 )",60,''),
	'EDCI'=> array('KLIX',"l.rec='EDCI' AND (l.alt < 848) AND (l.lat BETWEEN 51.26202 AND 51.28471 ) AND (l.lon BETWEEN 14.48757 AND 14.52328 )",148,''),
	'KOEND'=> array('Koenigsdorf',"l.rec='Koenigsdf' AND (l.alt < 1301) AND (l.lat BETWEEN 47.82641 AND 47.83135 ) AND (l.lon BETWEEN 11.45264 AND 11.47464 )",601,''),
	'KRONO'=> array('Kronobergshed',"l.rec='Kronobhed' AND (l.alt < 884) AND (l.lat BETWEEN 56.96932 AND 56.98165 ) AND (l.lon BETWEEN 14.56215 AND 14.57078 )",184,''),
	'LKKU'=> array('KUNOVICE',"l.rec='LKKU' AND (l.alt < 877) AND (l.lat BETWEEN 49.01825 AND 49.03964 ) AND (l.lon BETWEEN 17.42954 AND 17.44911 )",177,''),
	'LECD'=> array('LA CERDANYA',"l.rec='LECD' AND (l.alt < 1800) AND (l.lat BETWEEN 42.38275 AND 42.39099 ) AND (l.lon BETWEEN 1.85386 AND 1.87202 )",1100,''),
	'LFMG'=> array('LA MONTAGNE NOIRE',"l.rec='LFMG' AND (l.alt < 1148) AND (l.lat BETWEEN 43.40437 AND 43.41594 ) AND (l.lon BETWEEN 1.9799 AND 2.00078 )",448,''),	
	'LAMOT'=> array('La Motte du Caire',"l.rec='LaMotteDC' AND (l.alt < 1360) AND (l.lat BETWEEN 44.31547 AND 44.3328 ) AND (l.lon BETWEEN 6.02411 AND 6.03729 )",660,''),
	'LFSU'=> array('LANGRES Rolampont',"l.rec='LFSU' AND (l.alt < 1120) AND (l.lat BETWEEN 47.95774 AND 47.97125 ) AND (l.lon BETWEEN 5.28878 AND 5.29802 )",420,''),		
	'EGHL'=> array('LASHAM',"l.rec='EGHL' AND (l.alt < 888) AND (l.lat BETWEEN 51.17441 AND 51.19580 ) AND (l.lon BETWEEN -1.05527 AND -1.00849 )",188,''),
	'LFRI'=> array('LA ROCHE SUR YON Les Ajoncs',"l.rec='LFRI' AND (l.alt < 791) AND (l.lat BETWEEN 46.69866 AND 46.70675 ) AND (l.lon BETWEEN -1.39343 AND -1.36322 )",91,''),	
	'LFOV'=> array('LAVAL Entrammes',"l.rec='LFOV' AND (l.alt < 801) AND (l.lat BETWEEN 48.02135 AND 48.04389 ) AND (l.lon BETWEEN -0.75941 AND -0.72566 )",101,''),
	'LFEL'=> array('LE BLANC',"l.rec='LFEL' AND (l.alt < 815) AND (l.lat BETWEEN 46.61391 AND 46.62779 ) AND (l.lon BETWEEN 1.07668 AND 1.09379 )",115,''),	
	'EGHF'=> array('LEE ON THE SOLENT',"l.rec='EGHF' AND (l.alt < 710) AND (l.lat BETWEEN 50.80792 AND 50.82338 ) AND (l.lon BETWEEN -1.22091 AND -1.18905 )",10,''),	
	'LFOY'=> array('LE HAVRE Saint-Romain',"l.rec='LFOY' AND (l.alt < 829) AND (l.lat BETWEEN 49.53 AND 49.55 ) AND (l.lon BETWEEN 0.33 AND 0.39)",129,''),
	'LFRM'=> array('LE MANS Arnage',"l.rec='LFRM' AND (l.alt < 759) AND (l.lat BETWEEN 47.93939 AND 47.95926 ) AND (l.lon BETWEEN 0.19309 AND 0.2091)",59,''),	
	'LFNZ'=> array('LE MAZET DE ROMARIN',"l.rec='LFNZ' AND (l.alt < 820) AND (l.lat BETWEEN 43.76067 AND 43.7817 ) AND (l.lon BETWEEN 4.88498 AND 4.90543)",120,''),
	'EKLV'=> array('LEMVIG Flyveklub',"l.rec='EKLV' AND (l.alt < 730) AND (l.lat BETWEEN 56.5001 AND 56.50646 ) AND (l.lon BETWEEN 8.29957 AND 8.32461)",30,''),
	'LFHP'=> array('LE PUY Loudes',"l.rec='LFHP' AND (l.alt < 1532) AND (l.lat BETWEEN 45.07211 AND 45.08963 ) AND (l.lon BETWEEN 3.75173 AND 3.77169)",832,''),	
	'EPLS'=> array('LESZNO Strzyzewice',"l.rec='EPLS' AND (l.alt < 794) AND (l.lat BETWEEN 51.82579 AND 51.84613 ) AND (l.lon BETWEEN 16.50286 AND 16.5429)",94,''),	
	'EDKL'=> array('LEVERKUSEN',"l.rec='EDKL' AND (l.alt < 748) AND (l.lat BETWEEN 51.00895 AND 51.02079 ) AND (l.lon BETWEEN 6.999 AND 7.01406)",48,''),
	'EDQL'=> array('LICHTENFELS',"l.rec='EDQL' AND (l.alt < 960) AND (l.lat BETWEEN 50.14171 AND 50.15317 ) AND (l.lon BETWEEN 11.03723 AND 11.05584)",260,''),
	'LELT'=> array('LILLO',"l.rec='LELT' AND (l.alt < 1381) AND (l.lat BETWEEN 39.71342 AND 39.7204 ) AND (l.lon BETWEEN -3.32882 AND -3.31273)",681,''),	
	'EPLU'=> array('LUBIN',"l.rec='EPLU' AND (l.alt < 856) AND (l.lat BETWEEN 51.41575 AND 51.43126 ) AND (l.lon BETWEEN 16.17909 AND 16.21055)",156,''),
	'EPLR'=> array('LUBLIN Radawiec',"l.rec='EPLR' AND (l.alt < 940) AND (l.lat BETWEEN 51.21496 AND 51.22867 ) AND (l.lon BETWEEN 22.38071 AND 22.41239)",240,''),	
	'LSZO'=> array('LUZERN-BEROMUNSTER',"l.rec='LSZO' AND (l.alt < 1354) AND (l.lat BETWEEN 47.18296 AND 47.19415 ) AND (l.lon BETWEEN 8.19432 AND 8.2138)",654,''),
	'LFHJ'=> array('LYON Corbas',"l.rec='LFHJ' AND (l.alt < 899) AND (l.lat BETWEEN 45.64365 AND 45.66555 ) AND (l.lon BETWEEN 4.90281 AND 4.925)",199,''),
	'LFFC'=> array('MANTES Cherence',"l.rec='LFFC' AND (l.alt < 856) AND (l.lat BETWEEN 49.07102 AND 49.09233 ) AND (l.lon BETWEEN 1.66177 AND 1.70941)",156,''),		
	'LFQJ'=> array('MAUBEUGE Elesmes',"l.rec='LFQJ' AND (l.alt < 838) AND (l.lat BETWEEN 50.30048 AND 50.321508 ) AND (l.lon BETWEEN 4.01924 AND 4.050141)",138,''),
	'EFME'=> array('MENKIJARVI',"l.rec='EFME' AND (l.alt < 801) AND (l.lat BETWEEN 62.94008 AND 62.95219 ) AND (l.lon BETWEEN 23.50186 AND 23.53018)",101,''),
	'LFNB'=> array('MENDE Brenoux',"l.rec='LFNB' AND (l.alt < 1725) AND (l.lat BETWEEN 44.49475 AND 44.50815 ) AND (l.lon BETWEEN 3.52056 AND 3.5442)",1025,''),	
	'MFLD'=> array('Milfield',"l.rec='UKmil' AND (l.alt < 745) AND (l.lat BETWEEN 55.5811 AND 55.5997 ) AND (l.lon BETWEEN -2.10715 AND -2.0699)",45,''),
	'LSMF'=> array('MOLLIS',"l.rec='LSMF' AND (l.alt < 1153) AND (l.lat BETWEEN 47.06714 AND 47.08979 ) AND (l.lon BETWEEN 9.05776 AND 9.07188)",453,''),
	'LFFW'=> array('MONTAIGU ST Georges',"l.rec='LFFW' AND (l.alt < 756) AND (l.lat BETWEEN 46.92784 AND 46.93678 ) AND (l.lon BETWEEN -1.33767 AND -1.31877)",56,''),	
	'LFEM'=> array('MONTARGIS Vimory',"l.rec='LFEM' AND (l.alt < 794) AND (l.lat BETWEEN 47.95531 AND 47.96623 ) AND (l.lon BETWEEN 2.6761 AND 2.69436)",94,''),
	'YMBT'=> array('MONT BEAUTY',"(l.rec='YMBT' OR l.rec='Tawonga') AND (l.alt < 1035) AND (l.lat BETWEEN -36.73888 AND -36.71867 ) AND (l.lon BETWEEN 147.158 AND 147.17764)",335,''),			
	'LFNC'=> array('MONT DAUPHIN Saint Crepin',"l.rec='LFNC' AND (l.alt < 1603) AND (l.lat BETWEEN 44.68934 AND 44.71274 ) AND (l.lon BETWEEN 6.58174 AND 6.61324)",903,''),	
	'LFNQ'=> array('MONT LOUIS La Quillane',"l.rec='LFNQ' AND (l.alt < 2410) AND (l.lat BETWEEN 42.53683 AND 42.5504 ) AND (l.lon BETWEEN 2.1126 AND 2.12695)",1710,''),	
	'LSTR'=> array('MONTRICHER',"l.rec='LSTR' AND (l.alt < 1364) AND (l.lat BETWEEN 46.5865 AND 46.59423 ) AND (l.lon BETWEEN 6.3969 AND 6.40517)",664,''),
	'EDPI'=> array('MOOSBURG',"l.rec='EDPI' AND (l.alt < 1121) AND (l.lat BETWEEN 48.45183 AND 48.4626 ) AND (l.lon BETWEEN 11.9326 AND 11.951)",421,''),	
	'LFPU'=> array('MORET Episy',"l.rec='LFPU' AND (l.alt < 777) AND (l.lat BETWEEN 48.33693 AND 48.34517 ) AND (l.lon BETWEEN 2.78864 AND 2.80597)",77,''),	
	'LKMO'=> array('MOST',"l.rec='LFMO' AND (l.alt < 1031) AND (l.lat BETWEEN 50.5164 AND 50.53282 ) AND (l.lon BETWEEN 13.67608 AND 13.69033)",331,''),
	'MOTAL'=> array('Motala',"l.rec='Motala' AND (l.alt < 803) AND (l.lat BETWEEN 58.48264 AND 58.49727 ) AND (l.lon BETWEEN 15.0946 AND 15.10747)",103,''),
	'LFHY'=> array('MOULINS Montbeugny',"l.rec='LFHY' AND (l.alt < 979) AND (l.lat BETWEEN 46.52985 AND 46.54055 ) AND (l.lon BETWEEN 3.40822 AND 3.43789)",279,''),	
	'EDDG'=> array('MUNSTER / OSNABRUCK',"l.rec='EDDG' AND (l.alt < 749) AND (l.lat BETWEEN 52.12582 AND 52.14305 ) AND (l.lon BETWEEN 7.65476 AND 7.7109)",49,''),
	'MUSB'=> array('Musbach',"l.rec='Musbach' AND (l.alt < 1405) AND (l.lat BETWEEN 48.49385 AND 48.51118 ) AND (l.lon BETWEEN 8.4702417 AND 8.486485)",705,''),
	'MYND'=> array('Mynd',"l.rec='Mynd' AND (l.alt < 1115) AND (l.lat BETWEEN 52.50329 AND 52.52912 ) AND (l.lon BETWEEN -2.89879 AND -2.86098)",415,''),	
	'EDTN'=> array('NABERN/TECK',"l.rec='EDTN' AND (l.alt < 1070) AND (l.lat BETWEEN 48.6048 AND 48.6176 ) AND (l.lon BETWEEN 9.4671 AND 9.4839 )",370,''),
	'EBNM'=> array('NAMUR - SUARLEE',"l.rec='EBNM' AND (l.alt < 881) AND (l.lat BETWEEN 50.48463 AND 50.49427 ) AND (l.lon BETWEEN 4.75761 AND 4.78038 )",181,''),	
	'LFEZ'=> array('NANCY Malzeville',"l.rec='LFEZ' AND (l.alt < 1080) AND (l.lat BETWEEN 48.71679 AND 48.73132 ) AND (l.lon BETWEEN 6.1932 AND 6.21972 )",380,''),	
	'FATP'=> array('NEW TEMPE',"l.rec='FATP' AND (l.alt < 2086) AND (l.lat BETWEEN -29.05145 AND -29.02569 ) AND (l.lon BETWEEN 26.1508 AND 26.17518 )",1386,''),
	'LOGO'=> array('NIEDEROBLARN',"l.rec='LOGO' AND (l.alt < 1352) AND (l.lat BETWEEN 47.4742 AND 47.48487 ) AND (l.lon BETWEEN 13.999 AND 14.0161 )",652,''),	
	'LZNI'=> array('NITRA',"l.rec='LZNI' AND (l.alt < 835) AND (l.lat BETWEEN 48.27188 AND 48.28692 ) AND (l.lon BETWEEN 18.12162 AND 18.14258 )",135,''),	
	'LFCN'=> array('NOGARO',"l.rec='LFCN' AND (l.alt < 793) AND (l.lat BETWEEN 43.76314 AND 43.77772 ) AND (l.lon BETWEEN -0.04825 AND -0.02481 )",93,''),
	'NHL'=> array('North Hill',"l.rec='UKNHL' AND (l.alt < 980) AND (l.lat BETWEEN 50.84547 AND 50.85676 ) AND (l.lon BETWEEN -3.29046 AND -3.25986 )",280,''),	
	'EFNU'=> array('NUMMELA',"l.rec='EFNU' AND (l.alt < 812) AND (l.lat BETWEEN 60.32471 AND 60.34066 ) AND (l.lon BETWEEN 24.27825 AND 24.31374 )",112,''),
	'NYMP'=> array('Nympsfield',"l.rec='UKAST' AND (l.alt < 910) AND (l.lat BETWEEN 51.70906 AND 51.71911 ) AND (l.lon BETWEEN -2.30065 AND -2.269754 )",210,''),
	'LEOC'=> array('OCANA',"l.rec='LEOC' AND (l.alt < 1435) AND (l.lat BETWEEN 39.93532 AND 39.93942 ) AND (l.lon BETWEEN -3.50955 AND -3.49153 )",735,''),
	'LFCO'=> array('OLORON Herrere',"l.rec='LFCO' AND (l.alt < 1000) AND (l.lat BETWEEN 43.15826 AND 43.16922 ) AND (l.lon BETWEEN -0.57303 AND -0.54985 )",300,''),	
	'NZOA'=> array('OMARAMA',"(l.rec='NZOA' OR l.rec='Omarama') AND (l.alt < 1115) AND (l.lat BETWEEN -44.49279 AND -44.47863 ) AND (l.lon BETWEEN 169.96722 AND 170.00432 )",415,''),
	'LFLK'=> array('OYONNAX Arbent',"l.rec='LFLK' AND (l.alt < 1235) AND (l.lat BETWEEN 46.27242 AND 46.28433 ) AND (l.lon BETWEEN 5.65976 AND 5.67407 )",535,''),
	'LIPU'=> array('PADOVA',"(l.rec='Padova' OR l.rec='LIPU') AND (l.alt < 714) AND (l.lat BETWEEN 45.38843 AND 45.40291 ) AND (l.lon BETWEEN 11.83741 AND 11.85724 )",14,''),	
	'UKPAR'=> array('PARHAM',"l.rec='UKPAR' AND (l.alt < 732) AND (l.lat BETWEEN 50.91835 AND 50.93022 ) AND (l.lon BETWEEN -0.48332 AND -0.46597 )",32,''),	
	'EDTQ'=> array('PATTONVILLE',"l.rec='EDTQ' AND (l.alt < 979) AND (l.lat BETWEEN 48.85881 AND 48.86964 ) AND (l.lon BETWEEN 9.20921 AND 9.24011 )",279,''),
	'LFHD'=> array('PIERRELATTE',"l.rec='LFHD' AND (l.alt < 759) AND (l.lat BETWEEN 44.38509 AND 44.40885 ) AND (l.lon BETWEEN 4.70249 AND 4.72768 )",59,''),		
	'LFRP'=> array('PLOERMEL Loyat',"l.rec='LFRP' AND (l.alt < 772) AND (l.lat BETWEEN 47.99956 AND 48.00447 ) AND (l.lon BETWEEN -2.38809 AND -2.37 )",72,''),	
	'EPKP'=> array('POBIEDNIK',"l.rec='EPKP' AND (l.alt < 901) AND (l.lat BETWEEN 50.0829 AND 50.09477 ) AND (l.lon BETWEEN 20.19089 AND 20.21312 )",201,''),
	'POCK'=> array('Pocklington',"l.rec='UKPOC' AND (l.alt < 727) AND (l.lat BETWEEN 53.91052 AND 53.94206 ) AND (l.lon BETWEEN -0.8294 AND -0.77163 )",27,''),	
	'EPOP'=> array('POLSKA NOWA WIES',"l.rec='EPOP' AND (l.alt < 888) AND (l.lat BETWEEN 50.62521 AND 50.63955 ) AND (l.lon BETWEEN 17.76729 AND 17.793 )",188,''),
	'PORT'=> array('Portmoak',"l.rec='Portmoak' AND (l.alt < 810) AND (l.lat BETWEEN 56.184498 AND 56.197309 ) AND (l.lon BETWEEN -3.34453 AND -3.313957 )",110,''),
	'LZPE'=> array('PRIEVIDZA',"l.rec='LZPE' AND (l.alt < 960) AND (l.lat BETWEEN 48.75943 AND 48.77225 ) AND (l.lon BETWEEN 18.57778 AND 18.59604 )",260,''),
	'LFNW'=> array('PUIVERT',"l.rec='LFNW' AND (l.alt < 1191) AND (l.lat BETWEEN 42.90532 AND 42.91614 ) AND (l.lon BETWEEN 2.04651 AND 2.06258 )",491,''),	
	'LFQA'=> array('REIMS Prunay',"l.rec='LFQA' AND (l.alt < 795) AND (l.lat BETWEEN 49.20463 AND 49.21261 ) AND (l.lon BETWEEN 4.14573 AND 4.16903 )",95,''),	
	'LFIL'=> array('RION DES LANDES',"l.rec='LFIL' AND (l.alt < 778) AND (l.lat BETWEEN 43.90782 AND 43.92202 ) AND (l.lon BETWEEN -0.96356 AND -0.94034 )",78,''),	
	'LFLO'=> array('ROANNE Renaison',"l.rec='LFLO' AND (l.alt < 1037) AND (l.lat BETWEEN 46.046 AND 46.0655 ) AND (l.lon BETWEEN 3.989 AND 4.009 )",337,''),
	'LFHE'=> array('ROMANS Saint Paul',"l.rec='LFHE' AND (l.alt < 781) AND (l.lat BETWEEN 45.05813 AND 45.06804 ) AND (l.lon BETWEEN 5.08946 AND 5.10853 )",181,''),	
	'LFYR'=> array('ROMORANTIN Pruniers',"l.rec='LFYR' AND (l.alt < 788) AND (l.lat BETWEEN 47.30269 AND 47.32995 ) AND (l.lon BETWEEN 1.66482 AND 1.71065 )",88,''),
	'LFOP'=> array('ROUEN Boos',"l.rec='LFOP' AND (l.alt < 855) AND (l.lat BETWEEN 49.37594 AND 49.39519 ) AND (l.lon BETWEEN 1.16121 AND 1.20705 )",155,''),	
	'LFPZ'=> array('SAINT CYR L\'ECOLE',"l.rec='LFPZ' AND (l.alt < 814) AND (l.lat BETWEEN 48.8  AND 48.82 ) AND (l.lon BETWEEN 2.05 AND 2.08)",114,''),
	'LFGP'=> array('SAINT FLORENTIN Cheu',"l.rec='LFGP' AND (l.alt < 808) AND (l.lat BETWEEN 47.97504 AND 47.98605 ) AND (l.lon BETWEEN 3.76027 AND 3.79117)",108,''),	
	'LFIM'=> array('SAINT GAUDENS Montrejeau',"l.rec='LFIM' AND (l.alt < 1102) AND (l.lat BETWEEN 43.101445 AND 43.11346 ) AND (l.lon BETWEEN 0.60335 AND 0.63425)",402,''),
	'LFNL'=> array('SAINT MARTIN DE LONDRES',"l.rec='LFNL' AND (l.alt < 880) AND (l.lat BETWEEN 43.79665  AND 43.803141 ) AND (l.lon BETWEEN 3.774542 AND 3.78851)",180,''),
	'LFSS'=> array('SAINT SULPICE DES LANDES',"l.rec='LFSS' AND (l.alt < 790) AND (l.lat BETWEEN 47.78572 AND 47.79688 ) AND (l.lon BETWEEN -1.65293 AND -1.62362)",90,''),
	'LFXB'=> array('SAINTES Thenac',"( l.rec='lfxb' OR l.rec='LFXB' ) AND (l.alt < 736) AND (l.lat BETWEEN 45.69084 AND 45.70581 ) AND (l.lon BETWEEN -0.64459 AND -0.62804)",36,''),
	'LFNE'=> array('SALON Eyguieres',"l.rec='LFNE' AND (l.alt < 775) AND (l.lat BETWEEN 43.6499 AND 43.667 ) AND (l.lon BETWEEN 4.99738 AND 5.02272)",75,''),	
	'SALT'=> array('Saltby',"l.rec='SALTBY' AND (l.alt < 848) AND (l.lat BETWEEN 52.81813 AND 52.83875 ) AND (l.lon BETWEEN -0.73787 AND -0.68942)",148,''),
	'LISM'=> array('SAN MAURO',"l.rec='LISM' AND (l.alt < 807) AND (l.lat BETWEEN 46.06639 AND 46.07018 ) AND (l.lon BETWEEN 13.36193 AND 13.37508)",107,''),	
	'LECI'=> array('SANTA CILIA',"l.rec='LECI1' AND (l.alt < 1391) AND (l.lat BETWEEN 42.56576 AND 42.57189 ) AND (l.lon BETWEEN -0.73705 AND -0.7189)",691,''),	
	'LFGU'=> array('SARREGUEMINES',"l.rec='LFGU' AND (l.alt < 960) AND (l.lat BETWEEN 49.12211  AND 49.135884 ) AND (l.lon BETWEEN 7.09235 AND 7.11864)",260,''),
	'EDTY'=> array('SCHWABISCH HALL',"l.rec='EDTY' AND (l.alt < 1100) AND (l.lat BETWEEN 49.11507 AND 49.1211 ) AND (l.lon BETWEEN 9.76887 AND 9.79728)",400,''),
	'EDLD'=> array('SCHWARZE HEIDE',"l.rec='EDLD' AND (l.alt < 766) AND (l.lat BETWEEN 51.60982 AND 51.62249 ) AND (l.lon BETWEEN 6.83999 AND 6.88119)",66,''),
	'LFSJ'=> array('SEDAN Douzy',"l.rec='LFSJ' AND (l.alt < 856) AND (l.lat BETWEEN 49.65121 AND 49.66333 ) AND (l.lon BETWEEN 5.02546 AND 5.04777)",156,''),	
	'SEIG'=> array('Seighford',"l.rec='UKSE2' AND (l.alt < 798) AND (l.lat BETWEEN 52.82326 AND 52.83321 ) AND (l.lon BETWEEN -2.21943 AND -2.18854)",98,''),	
	'LFNS'=> array('SISTERON Vaumeilh',"l.rec='LFNS' AND (l.alt < 1240) AND (l.lat BETWEEN 44.2781 AND 44.29548 ) AND (l.lon BETWEEN 5.92347 AND 5.93442)",540,''),	
	'EKSL'=> array('SLAGLILLE',"l.rec='EKSL' AND (l.alt < 734) AND (l.lat BETWEEN 55.44932 AND 55.45537 ) AND (l.lon BETWEEN 11.6312 AND 11.65685)",34,''),	
	'EHSB'=> array('SOESTERBERG',"l.rec='EHSB' AND (l.alt < 721) AND (l.lat BETWEEN 52.12006 AND 52.1459 ) AND (l.lon BETWEEN 5.24022 AND 5.31206)",21,''),
	'EDLS'=> array('STADTLOHN',"l.rec='EDLS' AND (l.alt < 748) AND (l.lat BETWEEN 51.99218 AND 51.99908 ) AND (l.lon BETWEEN 6.82864 AND 6.85208)",48,''),
	'LKSU'=> array('SUMPERK',"l.rec='LKSU' AND (l.alt < 1035) AND (l.lat BETWEEN 49.95551 AND 49.96463 ) AND (l.lon BETWEEN 17.00938 AND 17.02498)",335,''),
	'ESKC'=> array('SUNDBRO',"l.rec='ESKC' AND (l.alt < 722) AND (l.lat BETWEEN 59.91515 AND 59.92899 ) AND (l.lon BETWEEN 17.523 AND 17.548 )",22,''),
	'SUTT'=> array('Sutton Bank',"l.rec='SuttonBnk' AND (l.alt < 990) AND (l.lat BETWEEN 54.2219 AND 54.240428 ) AND (l.lon BETWEEN -1.22449 AND -1.19759 )",290,''),
	'UKTAL'=> array('TALGARTH',"l.rec='UKTAL' AND (l.alt < 996) AND (l.lat BETWEEN 51.9776 AND 51.98458 ) AND (l.lon BETWEEN -3.21067 AND -3.20111 )",296,''),	
	'LFDT'=> array('TARBES Laloubere',"l.rec='LFDT' AND (l.alt < 1028) AND (l.lat BETWEEN 43.21162 AND 43.21871 ) AND (l.lon BETWEEN 0.06887 AND 0.08617 )",328,''),	
	'EFTS'=> array('TEISKO',"l.rec='EFTS' AND (l.alt < 850) AND (l.lat BETWEEN 61.76733 AND 61.77936 ) AND (l.lon BETWEEN 24.00673 AND 24.04718 )",150,''),
	'EHTL'=> array('TERLET',"l.rec='EHTL' AND (l.alt < 784) AND (l.lat BETWEEN 52.05235 AND 52.06958 ) AND (l.lon BETWEEN 5.90814 AND 5.94258 )",84,''),	
	'EHTE'=> array('TEUGE',"l.rec='EHTE' AND (l.alt < 705) AND (l.lat BETWEEN 52.23923 AND 52.24732 ) AND (l.lon BETWEEN 6.03629 AND 6.06650 )",5,''),
	'UKPRK'=> array('THE PARK',"l.rec='UKPRK' AND (l.alt < 911) AND (l.lat BETWEEN 51.12443 AND 51.13392 ) AND (l.lon BETWEEN -2.26132 AND -2.23278 )",211,''),		
	'LIDH'=> array('THIENE',"l.rec='LIDH' AND (l.alt < 802) AND (l.lat BETWEEN 45.6678 AND 45.68861 ) AND (l.lon BETWEEN 11.49012 AND 11.50059 )",102,''),	
	'LFCT'=> array('THOUARS',"l.rec='LFCT' AND (l.alt < 804) AND (l.lat BETWEEN 46.95684 AND 46.97078 ) AND (l.lon BETWEEN -0.16245 AND -0.14613 )",104,''),
	'TIRS'=> array('Tirschenreuth',"l.rec='Tirschenr' AND (l.alt < 1190) AND (l.lat BETWEEN 49.871299 AND 49.879043 ) AND (l.lon BETWEEN 12.31411 AND 12.33368 )",490,''),
	'LFIT'=> array('TOULOUSE Bourg Saint Bernard',"l.rec='LFIT' AND (l.alt < 860) AND (l.lat BETWEEN 43.60555 AND 43.61604 ) AND (l.lon BETWEEN 1.71585 AND 1.73801 )",160,''),	
	'EBTY'=> array('TOURNAI/MAUBRAY',"l.rec='EBTY' AND (l.alt < 749) AND (l.lat BETWEEN 50.5262 AND 50.53666 ) AND (l.lon BETWEEN 3.48087 AND 3.51177 )",49,''),
	'LFJT'=> array('TOURS Le Louroux',"l.rec='LFJT' AND (l.alt < 826) AND (l.lat BETWEEN 47.14304 AND 47.15574 ) AND (l.lon BETWEEN 0.70445 AND 0.71771 )",126,''),
	'LFQB'=> array('TROYES Barberey',"l.rec='LFQB' AND (l.alt < 812) AND (l.lat BETWEEN 48.30495 AND 48.34176 ) AND (l.lon BETWEEN 3.98910 AND 4.03897 )",112,''),	
	'TRUE'=> array('True',"l.rec='True' AND (l.alt < 768) AND (l.lat BETWEEN 56.17536 AND 56.18217 ) AND (l.lon BETWEEN 10.06477 AND 10.08825 )",68,''),	
	'ELUS'=> array('Useldange',"(l.rec='ELUS' OR l.rec='Useldange') AND (l.alt < 983) AND (l.lat BETWEEN 49.76309 AND 49.77372 ) AND (l.lon BETWEEN 5.95041 AND 5.98131 )",283,''),	
	'UKUSK'=> array('USK',"l.rec='UKUSK' AND (l.alt < 724) AND (l.lat BETWEEN 51.7162 AND 51.72274 ) AND (l.lon BETWEEN -2.86385 AND -2.8398 )",24,''),
	'LFLU'=> array('VALENCE Chabeuil',"l.rec='LFLU' AND (l.alt < 860) AND (l.lat BETWEEN 44.90797 AND 44.93593 ) AND (l.lon BETWEEN 4.9614 AND 4.97715 )",160,''),	
	'VEEN'=> array('Veendam',"l.rec='Veendam' AND (l.alt < 701) AND (l.lat BETWEEN 53.07735 AND 53.09261 ) AND (l.lon BETWEEN 6.79723 AND 6.84589 )",1,''),
	'VEIL'=> array('Vielbrunn',"l.rec='Vielbrunn' AND (l.alt < 1103) AND (l.lat BETWEEN 49.71015 AND 49.72813 ) AND (l.lon BETWEEN 9.07142 AND 9.08959 )",461,''),
	'LFHV'=> array('VILLEFRANCHE Tarare',"l.rec='LFHV' AND (l.alt < 1028) AND (l.lat BETWEEN 45.91153 AND 45.92603 ) AND (l.lon BETWEEN 4.62766 AND 4.64318 )",328,''),
	'LFNF'=> array('VINON',"l.rec='LFNF' AND (l.alt < 975) AND (l.lat BETWEEN 43.7304 AND 43.74654 ) AND (l.lon BETWEEN 5.77138 AND 5.79678)",275,''),	
	'EDEW'=> array('WALLDURN',"l.rec='EDEW' AND (l.alt < 1103) AND (l.lat BETWEEN 49.577 AND 49.586 ) AND (l.lon BETWEEN 9.389 AND 9.412)",403,''),
	'EBWE'=> array('WEELDE',"l.rec='EBWE' AND (l.alt < 732) AND (l.lat BETWEEN 51.38047 AND 51.40757 ) AND (l.lon BETWEEN 4.9221 AND 4.99471)",32,''),
	'EDQW'=> array('WEIDEN-OPF',"l.rec='EDQW' AND (l.alt < 1105) AND (l.lat BETWEEN 49.67523 AND 49.68242 ) AND (l.lon BETWEEN 12.11198 AND 12.12167)",405,''),
	'EDNW'=> array('WEISSENHORN',"l.rec='EDNW' AND (l.alt < 1200) AND (l.lat BETWEEN 48.28667 AND 48.29147 ) AND (l.lon BETWEEN 10.12956 AND 10.1494)",500,''),
	'EDLX'=> array('WESEL',"l.rec='EDLX' AND (l.alt < 722) AND (l.lat BETWEEN 51.6577 AND 51.66791 ) AND (l.lon BETWEEN 6.58123 AND 6.61213)",22,''),
	'WEST'=> array('Weston on the green',"l.rec='UKWOG' AND (l.alt < 778) AND (l.lat BETWEEN 51.868923 AND 51.889031 ) AND (l.lon BETWEEN -1.24235 AND -1.20042)",78,''),
	'EHWO'=> array('WOENSDRECHT',"l.rec='EHWO' AND (l.alt < 719) AND (l.lat BETWEEN 51.43654 AND 51.46238 ) AND (l.lon BETWEEN 4.31046 AND 4.37681)",19,''),
	'EGTB'=> array('Wycombe Air Park/Booker',"(l.rec='EGTB' OR l.rec='Booker') AND (l.alt < 858) AND (l.lat BETWEEN 51.60505 AND 51.61511 ) AND (l.lon BETWEEN -0.817 AND -0.799)",158,''),
	'LSGY'=> array('YVERDON-LES-BAINS',"l.rec='LSGY' AND (l.alt < 1133) AND (l.lat BETWEEN 46.75775 AND 46.76644 ) AND (l.lon BETWEEN 6.60604 AND 6.61939)",433,''),	
	'LKZM'=> array('ZAMBERK',"l.rec='LKZM' AND (l.alt < 1129) AND (l.lat BETWEEN 50.08008 AND 50.08735 ) AND (l.lon BETWEEN 16.43624 AND 16.45073)",429,''),
	'EPZR'=> array('ZAR',"l.rec='EPZR' AND (l.alt < 1093) AND (l.lat BETWEEN 49.76534 AND 49.77856 ) AND (l.lon BETWEEN 19.20728 AND 19.2293)",393,''),
	'EBZR'=> array('ZOERSEL',"l.rec='EBZR' AND (l.alt < 716) AND (l.lat BETWEEN 51.2511 AND 51.28014 ) AND (l.lon BETWEEN 4.72632 AND 4.78073)",16,'')
	);

?>