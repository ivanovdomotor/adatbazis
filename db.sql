--------------------------------------------------------
--  File created - péntek-május-06-2022   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table ADMINMEGJEGYZES
--------------------------------------------------------

  CREATE TABLE "IVANOV"."ADMINMEGJEGYZES" 
   (	"ID" NUMBER(10,0), 
	"IDOPONT" DATE, 
	"TARTALOM" VARCHAR2(200 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table ALLASHIRDETO
--------------------------------------------------------

  CREATE TABLE "IVANOV"."ALLASHIRDETO" 
   (	"ID" NUMBER(10,0), 
	"TITULUS" VARCHAR2(10 BYTE), 
	"VEZETEKNEV" VARCHAR2(50 BYTE), 
	"KERESZTNEV" VARCHAR2(50 BYTE), 
	"FENYKEP_UT" VARCHAR2(200 BYTE), 
	"TELEFONSZAM" VARCHAR2(20 BYTE), 
	"EMAIL" VARCHAR2(50 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table ALLASKERESO
--------------------------------------------------------

  CREATE TABLE "IVANOV"."ALLASKERESO" 
   (	"ID" NUMBER(10,0), 
	"TITULUS" VARCHAR2(10 BYTE), 
	"VEZETEKNEV" VARCHAR2(50 BYTE), 
	"KERESZTNEV" VARCHAR2(50 BYTE), 
	"FENYKEP_UT" VARCHAR2(200 BYTE), 
	"SZULIDO" DATE, 
	"LAKCIM" VARCHAR2(50 BYTE), 
	"TARTHELY" VARCHAR2(50 BYTE), 
	"RADIUS" NUMBER(4,0), 
	"ONELETRAJZ_ID" NUMBER(10,0), 
	"ROVID_LEIRAS" VARCHAR2(100 BYTE), 
	"EGYEB_INFO" VARCHAR2(100 BYTE), 
	"TELEFONSZAM" VARCHAR2(20 BYTE), 
	"EMAIL" VARCHAR2(50 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table CEG
--------------------------------------------------------

  CREATE TABLE "IVANOV"."CEG" 
   (	"ID" NUMBER(10,0), 
	"NEV" VARCHAR2(50 BYTE), 
	"FENYKEP_UT" VARCHAR2(200 BYTE), 
	"ROVID_LEIRAS" VARCHAR2(250 BYTE), 
	"TELEFONSZAM" VARCHAR2(30 BYTE), 
	"EMAIL" VARCHAR2(50 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table FELHASZNALO
--------------------------------------------------------

  CREATE TABLE "IVANOV"."FELHASZNALO" 
   (	"ID" NUMBER(10,0), 
	"FELHASZNALONEV" VARCHAR2(20 BYTE), 
	"JELSZO" VARCHAR2(50 BYTE), 
	"STATUS" NUMBER(1,0), 
	"IS_ADMIN" NUMBER(1,0), 
	"ALLASKERESO_ID" NUMBER(10,0), 
	"ALLASHIRDETO_ID" NUMBER(10,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table HIRDETES
--------------------------------------------------------

  CREATE TABLE "IVANOV"."HIRDETES" 
   (	"ID" NUMBER(10,0), 
	"MEGNEVEZES" VARCHAR2(50 BYTE), 
	"MUNKAVEGZESHELYE" VARCHAR2(50 BYTE), 
	"IDO" NUMBER(1,0), 
	"MUNKAREND" VARCHAR2(20 BYTE), 
	"MUNKAFELADATLEIRAS" VARCHAR2(200 BYTE), 
	"KOTELVARAS" VARCHAR2(100 BYTE), 
	"OPCELVARAS" VARCHAR2(100 BYTE), 
	"JUTTATASOK" VARCHAR2(100 BYTE), 
	"JELENTKEZESIHATARIDO" DATE, 
	"STATUS" NUMBER(1,0), 
	"CEGID" NUMBER(10,0), 
	"ALLASHIRDETOID" NUMBER(10,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table ONELETRAJZ
--------------------------------------------------------

  CREATE TABLE "IVANOV"."ONELETRAJZ" 
   (	"ID" NUMBER(10,0), 
	"VEGZETTSEG_ID" VARCHAR2(200 BYTE), 
	"TAPASZTALAT_ID" VARCHAR2(200 BYTE), 
	"SOFTSKILL_ID" VARCHAR2(200 BYTE), 
	"REFERENCIA_ID" VARCHAR2(200 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table SOFTSKILL
--------------------------------------------------------

  CREATE TABLE "IVANOV"."SOFTSKILL" 
   (	"ID" NUMBER(10,0), 
	"NEV" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table TAPASZTALAT
--------------------------------------------------------

  CREATE TABLE "IVANOV"."TAPASZTALAT" 
   (	"ID" NUMBER(10,0), 
	"HELY" VARCHAR2(200 BYTE), 
	"IDO_KEZDET" DATE, 
	"IDO_VEG" DATE, 
	"LEIRAS" VARCHAR2(600 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table TEST
--------------------------------------------------------

  CREATE TABLE "IVANOV"."TEST" 
   (	"ID" NUMBER(3,0), 
	"FELHASZNALONEV" VARCHAR2(50 BYTE), 
	"JELSZO" VARCHAR2(50 BYTE), 
	"STATUS" NUMBER(1,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table VEGZETTSEG
--------------------------------------------------------

  CREATE TABLE "IVANOV"."VEGZETTSEG" 
   (	"ID" NUMBER(10,0), 
	"HELY" VARCHAR2(200 BYTE), 
	"IDO_KEZDET" DATE, 
	"IDO_VEG" DATE, 
	"LEIRAS" VARCHAR2(600 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
REM INSERTING into IVANOV.ADMINMEGJEGYZES
SET DEFINE OFF;
Insert into IVANOV.ADMINMEGJEGYZES (ID,IDOPONT,TARTALOM) values ('1',to_date('22-MÁJ.  -03','RR-MON-DD'),'Példa adminmegyjegyzés');
Insert into IVANOV.ADMINMEGJEGYZES (ID,IDOPONT,TARTALOM) values ('2',to_date('22-ÁPR.  -14','RR-MON-DD'),'Az adminok megjegyzéseket adhatnak hozzá, például ezt.');
Insert into IVANOV.ADMINMEGJEGYZES (ID,IDOPONT,TARTALOM) values ('3',to_date('22-MÁRC. -02','RR-MON-DD'),'Adminmegjegyzés példa');
Insert into IVANOV.ADMINMEGJEGYZES (ID,IDOPONT,TARTALOM) values ('4',to_date('21-MÁJ.  -21','RR-MON-DD'),'Ezt a kedvenc adminotok írta.');
Insert into IVANOV.ADMINMEGJEGYZES (ID,IDOPONT,TARTALOM) values ('5',to_date('18-MÁJ.  -19','RR-MON-DD'),'Ez az ötödik adminmegjegyzés az oldalon.');
REM INSERTING into IVANOV.ALLASHIRDETO
SET DEFINE OFF;
Insert into IVANOV.ALLASHIRDETO (ID,TITULUS,VEZETEKNEV,KERESZTNEV,FENYKEP_UT,TELEFONSZAM,EMAIL) values ('1',null,'Slendrion','Endre','4_pfpic.jpg','06-70-987-9876','slendrian70@gmail.com');
Insert into IVANOV.ALLASHIRDETO (ID,TITULUS,VEZETEKNEV,KERESZTNEV,FENYKEP_UT,TELEFONSZAM,EMAIL) values ('2',null,'Álláshirdető','Béla',null,'06-20-373-2393','allashirdeto.bela@gmail.com');
Insert into IVANOV.ALLASHIRDETO (ID,TITULUS,VEZETEKNEV,KERESZTNEV,FENYKEP_UT,TELEFONSZAM,EMAIL) values ('3',null,'Tordai','István',null,'06-50-276-2354','tordai.allas@citromail.hu');
Insert into IVANOV.ALLASHIRDETO (ID,TITULUS,VEZETEKNEV,KERESZTNEV,FENYKEP_UT,TELEFONSZAM,EMAIL) values ('4','Dr.','Herczeg','József',null,'06-20-658-9942','hercegmunka@freemail.hu');
Insert into IVANOV.ALLASHIRDETO (ID,TITULUS,VEZETEKNEV,KERESZTNEV,FENYKEP_UT,TELEFONSZAM,EMAIL) values ('5','Dr.','Vörös','Erzsébet',null,'06-30-123-5821','allashirdetes@gmail.com');
REM INSERTING into IVANOV.ALLASKERESO
SET DEFINE OFF;
Insert into IVANOV.ALLASKERESO (ID,TITULUS,VEZETEKNEV,KERESZTNEV,FENYKEP_UT,SZULIDO,LAKCIM,TARTHELY,RADIUS,ONELETRAJZ_ID,ROVID_LEIRAS,EGYEB_INFO,TELEFONSZAM,EMAIL) values ('1','Dr.','Példa','Béla',null,to_date('07-MÁJ.  -15','RR-MON-DD'),'6723 Szeged, Példa utca 1.','6723 Szeged, Példa utca 1.','30',null,'Rendkívüli módon átlagos','Szeret példa lenni.','06-20-999-9999','pelda.bela@pelda.com');
REM INSERTING into IVANOV.CEG
SET DEFINE OFF;
Insert into IVANOV.CEG (ID,NEV,FENYKEP_UT,ROVID_LEIRAS,TELEFONSZAM,EMAIL) values ('1','McDonalds','1_ceg.jpg','A Mcdonalds egy hamburgereket forgalmaz? nemzetk?zi gyors?ttereml?nc.','06-70-123-4567','mc@donal.ds');
Insert into IVANOV.CEG (ID,NEV,FENYKEP_UT,ROVID_LEIRAS,TELEFONSZAM,EMAIL) values ('2','Nike','2_ceg.png','A Nike, Inc. vagy röviden Nike a világ első számú edzőcipő-, sportruházat- és sportszergyártója.','06-30-578-3244','nike@citromail.hu');
Insert into IVANOV.CEG (ID,NEV,FENYKEP_UT,ROVID_LEIRAS,TELEFONSZAM,EMAIL) values ('3','Facebook','3_ceg.png','A Facebook amerikai alapítású közösségi hálózat, amely 2004. február 4-én kezdte meg működését.','06-20-948-3243','alien@mars.com');
Insert into IVANOV.CEG (ID,NEV,FENYKEP_UT,ROVID_LEIRAS,TELEFONSZAM,EMAIL) values ('4','SZTE','4_ceg.png','A Szegedi Tudományegyetem (röviden: SZTE) – Universitas Scientiarum Szegediensis / University of Szeged – Magyarországon, Szeged városában működő,  alapítvány által fenntartott felsőoktatási intézmény.','06-70-827-9125','szte@szte.hu');
Insert into IVANOV.CEG (ID,NEV,FENYKEP_UT,ROVID_LEIRAS,TELEFONSZAM,EMAIL) values ('5','Google','5_ceg.png','A Google LLC amerikai, tőzsdén bejegyzett részvénytársaság, amit eredetileg zártkörűen működő társaságként alapítottak 1998-ban, és aminek a nevéhez fűződik a Google keresőmotor kifejlesztése és üzemeltetése.','06-30-265-1958','google@yahoo.com');
REM INSERTING into IVANOV.FELHASZNALO
SET DEFINE OFF;
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('6','munkas','munkas','0','0','1','0');
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('7','munkahirdeto','munkahirdeto','0','0','0','3');
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('8','kistamas','kistamas','1','0','1','0');
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('9','erdekel','erdekel','1','0','1','0');
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('10','pekmester','pekmester','1','0','1','0');
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('11','munkakerulo','munkakerulo','1','0','1','0');
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('1','ivanov','ivanov','1','1',null,null);
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('2','admin','admin','1','1',null,null);
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('3','felh1','felh1','1','0','1',null);
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('4','slendrianodon','slendrianodon','1','0','0','5');
Insert into IVANOV.FELHASZNALO (ID,FELHASZNALONEV,JELSZO,STATUS,IS_ADMIN,ALLASKERESO_ID,ALLASHIRDETO_ID) values ('5','hespi','hespi','1','0','1','0');
REM INSERTING into IVANOV.HIRDETES
SET DEFINE OFF;
Insert into IVANOV.HIRDETES (ID,MEGNEVEZES,MUNKAVEGZESHELYE,IDO,MUNKAREND,MUNKAFELADATLEIRAS,KOTELVARAS,OPCELVARAS,JUTTATASOK,JELENTKEZESIHATARIDO,STATUS,CEGID,ALLASHIRDETOID) values ('6','Hentes','Szeged','1','Teljes munkaidő','Szarvasmarha, juh és ló levágásával kell foglalkozni.','Hentes végzettség','Saját autó.',null,to_date('23-MÁJ.  -20','RR-MON-DD'),'1','3','2');
Insert into IVANOV.HIRDETES (ID,MEGNEVEZES,MUNKAVEGZESHELYE,IDO,MUNKAREND,MUNKAFELADATLEIRAS,KOTELVARAS,OPCELVARAS,JUTTATASOK,JELENTKEZESIHATARIDO,STATUS,CEGID,ALLASHIRDETOID) values ('1','Takarító','Szeged','1','Teljes munkaidő','Áruházak tisztítása, parkolóban felmosás.','Egyetemi diploma','Külföldi doktorandusz képzés.','Napi egyszeri étkezés.',to_date('23-MÁJ.  -19','RR-MON-DD'),'1','1','1');
Insert into IVANOV.HIRDETES (ID,MEGNEVEZES,MUNKAVEGZESHELYE,IDO,MUNKAREND,MUNKAFELADATLEIRAS,KOTELVARAS,OPCELVARAS,JUTTATASOK,JELENTKEZESIHATARIDO,STATUS,CEGID,ALLASHIRDETOID) values ('2','Programozó','Pécs','0','Teljes munkaidő','Programok írása, diszkrét matekkal foglalkozás.','Smalltalk ismerete.','Kalkulus ismerete.','Utazási költésgtérítés.',to_date('24-MÁJ.  -24','RR-MON-DD'),'1','2','2');
Insert into IVANOV.HIRDETES (ID,MEGNEVEZES,MUNKAVEGZESHELYE,IDO,MUNKAREND,MUNKAFELADATLEIRAS,KOTELVARAS,OPCELVARAS,JUTTATASOK,JELENTKEZESIHATARIDO,STATUS,CEGID,ALLASHIRDETOID) values ('3','Hegesztő','Budapest','1','Részmunkaidő','Hegesztés megrendelések alapján.','Előzetes munkatapasztalat.',null,'Munkaegyenruha.',to_date('26-MÁJ.  -22','RR-MON-DD'),'1','3','3');
Insert into IVANOV.HIRDETES (ID,MEGNEVEZES,MUNKAVEGZESHELYE,IDO,MUNKAREND,MUNKAFELADATLEIRAS,KOTELVARAS,OPCELVARAS,JUTTATASOK,JELENTKEZESIHATARIDO,STATUS,CEGID,ALLASHIRDETOID) values ('4','Úrhajós','Szolnok','0','Részmunkaidő','Űrben hajózás.','Ne félj az űrtől.','Ne félj a hajóktól.','A munkábajárás munkaidőnek minősül.',to_date('22-JÚL.  -16','RR-MON-DD'),'1','4','4');
Insert into IVANOV.HIRDETES (ID,MEGNEVEZES,MUNKAVEGZESHELYE,IDO,MUNKAREND,MUNKAFELADATLEIRAS,KOTELVARAS,OPCELVARAS,JUTTATASOK,JELENTKEZESIHATARIDO,STATUS,CEGID,ALLASHIRDETOID) values ('5','Pék','Szeged','1','Teljes munkaidő','Kenyeret és cirkuszt adni a népnek.','Pék végzettség.',null,'Egyenruha és cipő.',to_date('22-AUG.  -19','RR-MON-DD'),'1','5','5');
REM INSERTING into IVANOV.ONELETRAJZ
SET DEFINE OFF;
Insert into IVANOV.ONELETRAJZ (ID,VEGZETTSEG_ID,TAPASZTALAT_ID,SOFTSKILL_ID,REFERENCIA_ID) values ('1','1,2','1,2,3','1,2,3,4',null);
REM INSERTING into IVANOV.SOFTSKILL
SET DEFINE OFF;
Insert into IVANOV.SOFTSKILL (ID,NEV) values ('1','pontos');
Insert into IVANOV.SOFTSKILL (ID,NEV) values ('2','j? vezet?');
Insert into IVANOV.SOFTSKILL (ID,NEV) values ('3','k?nnyen alkalmazkod?');
Insert into IVANOV.SOFTSKILL (ID,NEV) values ('4','hat?rozott');
REM INSERTING into IVANOV.TAPASZTALAT
SET DEFINE OFF;
Insert into IVANOV.TAPASZTALAT (ID,HELY,IDO_KEZDET,IDO_VEG,LEIRAS) values ('3','Egy?ni v?llalkoz?s',to_date('20-FEBR. -01','RR-MON-DD'),null,'Laboreszk?z?k ?s anyagok beszerz?se, elsz?ll?t?sa');
REM INSERTING into IVANOV.TEST
SET DEFINE OFF;
Insert into IVANOV.TEST (ID,FELHASZNALONEV,JELSZO,STATUS) values ('1','Asd','sdsasdsads','1');
Insert into IVANOV.TEST (ID,FELHASZNALONEV,JELSZO,STATUS) values ('1','Asd','sdsasdsads','1');
REM INSERTING into IVANOV.VEGZETTSEG
SET DEFINE OFF;
Insert into IVANOV.VEGZETTSEG (ID,HELY,IDO_KEZDET,IDO_VEG,LEIRAS) values ('2','Krúdy Szakközépiskola',to_date('20-MÁJ.  -07','RR-MON-DD'),to_date('21-MÁJ.  -07','RR-MON-DD'),'Vendéglátó végzettség');
Insert into IVANOV.VEGZETTSEG (ID,HELY,IDO_KEZDET,IDO_VEG,LEIRAS) values ('3','ÁMK TK',to_date('20-MÁJ.  -07','RR-MON-DD'),to_date('21-MÁJ.  -07','RR-MON-DD'),'Érettségi bizonyítvány');
Insert into IVANOV.VEGZETTSEG (ID,HELY,IDO_KEZDET,IDO_VEG,LEIRAS) values ('4','Tataházi Általános Iskola',to_date('20-MÁJ.  -07','RR-MON-DD'),to_date('21-MÁJ.  -07','RR-MON-DD'),'8 általános végzettség.');
Insert into IVANOV.VEGZETTSEG (ID,HELY,IDO_KEZDET,IDO_VEG,LEIRAS) values ('5','Szakképző Centrum',to_date('20-MÁJ.  -07','RR-MON-DD'),to_date('21-MÁJ.  -07','RR-MON-DD'),'Pék végzettség');
Insert into IVANOV.VEGZETTSEG (ID,HELY,IDO_KEZDET,IDO_VEG,LEIRAS) values ('6','Az élet iskolája',to_date('20-MÁJ.  -07','RR-MON-DD'),to_date('21-MÁJ.  -07','RR-MON-DD'),'Isten volt a tanár');
Insert into IVANOV.VEGZETTSEG (ID,HELY,IDO_KEZDET,IDO_VEG,LEIRAS) values ('1','SZTE',to_date('09-JAN.  -01','RR-MON-DD'),to_date('14-JAN.  -01','RR-MON-DD'),'Gyógyszerész BSc');
Insert into IVANOV.VEGZETTSEG (ID,HELY,IDO_KEZDET,IDO_VEG,LEIRAS) values ('8','PKE',to_date('14-JAN.  -01','RR-MON-DD'),to_date('16-JAN.  -01','RR-MON-DD'),'Laborbiztons?gi technikusi szakir?ny? tov?bbk?pz?s');
Insert into IVANOV.VEGZETTSEG (ID,HELY,IDO_KEZDET,IDO_VEG,LEIRAS) values ('9','SZTE',to_date('20-MÁJ.  -15','RR-MON-DD'),to_date('21-MÁJ.  -21','RR-MON-DD'),'Programtervező informatikus BSc');
Insert into IVANOV.VEGZETTSEG (ID,HELY,IDO_KEZDET,IDO_VEG,LEIRAS) values ('10','BME',to_date('22-JAN.  -05','RR-MON-DD'),to_date('22-MÁJ.  -02','RR-MON-DD'),'Villamosmérnök MSc');
--------------------------------------------------------
--  DDL for Index ALLASKERESO_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "IVANOV"."ALLASKERESO_PK" ON "IVANOV"."ALLASKERESO" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index ALLASHIRDETO_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "IVANOV"."ALLASHIRDETO_PK" ON "IVANOV"."ALLASHIRDETO" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index TABLE1_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "IVANOV"."TABLE1_PK" ON "IVANOV"."ONELETRAJZ" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index TAPASZTALAT_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "IVANOV"."TAPASZTALAT_PK" ON "IVANOV"."TAPASZTALAT" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index HIRDETES_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "IVANOV"."HIRDETES_PK" ON "IVANOV"."HIRDETES" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index FELHASZNALO_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "IVANOV"."FELHASZNALO_PK" ON "IVANOV"."FELHASZNALO" ("ID", "FELHASZNALONEV") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index VEGZETTSEG_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "IVANOV"."VEGZETTSEG_PK" ON "IVANOV"."VEGZETTSEG" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index SOFTSKILL_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "IVANOV"."SOFTSKILL_PK" ON "IVANOV"."SOFTSKILL" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index CEG_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "IVANOV"."CEG_PK" ON "IVANOV"."CEG" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index ADMINMEGJEGYZES_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "IVANOV"."ADMINMEGJEGYZES_PK" ON "IVANOV"."ADMINMEGJEGYZES" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  Constraints for Table FELHASZNALO
--------------------------------------------------------

  ALTER TABLE "IVANOV"."FELHASZNALO" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."FELHASZNALO" MODIFY ("FELHASZNALONEV" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."FELHASZNALO" MODIFY ("JELSZO" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."FELHASZNALO" MODIFY ("STATUS" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."FELHASZNALO" MODIFY ("IS_ADMIN" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."FELHASZNALO" ADD CONSTRAINT "FELHASZNALO_PK" PRIMARY KEY ("ID", "FELHASZNALONEV")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table HIRDETES
--------------------------------------------------------

  ALTER TABLE "IVANOV"."HIRDETES" ADD CONSTRAINT "HIRDETES_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "IVANOV"."HIRDETES" MODIFY ("STATUS" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."HIRDETES" MODIFY ("JELENTKEZESIHATARIDO" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."HIRDETES" MODIFY ("MUNKAVEGZESHELYE" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."HIRDETES" MODIFY ("MEGNEVEZES" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."HIRDETES" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."HIRDETES" MODIFY ("CEGID" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."HIRDETES" MODIFY ("ALLASHIRDETOID" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table ADMINMEGJEGYZES
--------------------------------------------------------

  ALTER TABLE "IVANOV"."ADMINMEGJEGYZES" ADD CONSTRAINT "ADMINMEGJEGYZES_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "IVANOV"."ADMINMEGJEGYZES" MODIFY ("TARTALOM" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ADMINMEGJEGYZES" MODIFY ("IDOPONT" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ADMINMEGJEGYZES" MODIFY ("ID" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table ALLASKERESO
--------------------------------------------------------

  ALTER TABLE "IVANOV"."ALLASKERESO" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ALLASKERESO" MODIFY ("VEZETEKNEV" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ALLASKERESO" MODIFY ("KERESZTNEV" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ALLASKERESO" MODIFY ("SZULIDO" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ALLASKERESO" MODIFY ("RADIUS" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ALLASKERESO" ADD CONSTRAINT "ALLASKERESO_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "IVANOV"."ALLASKERESO" MODIFY ("TELEFONSZAM" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ALLASKERESO" MODIFY ("EMAIL" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table ONELETRAJZ
--------------------------------------------------------

  ALTER TABLE "IVANOV"."ONELETRAJZ" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ONELETRAJZ" ADD CONSTRAINT "TABLE1_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table CEG
--------------------------------------------------------

  ALTER TABLE "IVANOV"."CEG" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."CEG" MODIFY ("NEV" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."CEG" MODIFY ("EMAIL" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."CEG" ADD CONSTRAINT "CEG_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "IVANOV"."CEG" MODIFY ("TELEFONSZAM" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table ALLASHIRDETO
--------------------------------------------------------

  ALTER TABLE "IVANOV"."ALLASHIRDETO" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ALLASHIRDETO" MODIFY ("VEZETEKNEV" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ALLASHIRDETO" MODIFY ("KERESZTNEV" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ALLASHIRDETO" MODIFY ("EMAIL" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."ALLASHIRDETO" ADD CONSTRAINT "ALLASHIRDETO_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "IVANOV"."ALLASHIRDETO" MODIFY ("TELEFONSZAM" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table VEGZETTSEG
--------------------------------------------------------

  ALTER TABLE "IVANOV"."VEGZETTSEG" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."VEGZETTSEG" MODIFY ("HELY" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."VEGZETTSEG" MODIFY ("IDO_KEZDET" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."VEGZETTSEG" MODIFY ("LEIRAS" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."VEGZETTSEG" ADD CONSTRAINT "VEGZETTSEG_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table SOFTSKILL
--------------------------------------------------------

  ALTER TABLE "IVANOV"."SOFTSKILL" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."SOFTSKILL" MODIFY ("NEV" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."SOFTSKILL" ADD CONSTRAINT "SOFTSKILL_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table TEST
--------------------------------------------------------

  ALTER TABLE "IVANOV"."TEST" MODIFY ("FELHASZNALONEV" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."TEST" MODIFY ("JELSZO" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."TEST" MODIFY ("STATUS" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table TAPASZTALAT
--------------------------------------------------------

  ALTER TABLE "IVANOV"."TAPASZTALAT" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."TAPASZTALAT" MODIFY ("HELY" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."TAPASZTALAT" MODIFY ("IDO_KEZDET" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."TAPASZTALAT" MODIFY ("LEIRAS" NOT NULL ENABLE);
  ALTER TABLE "IVANOV"."TAPASZTALAT" ADD CONSTRAINT "TAPASZTALAT_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
