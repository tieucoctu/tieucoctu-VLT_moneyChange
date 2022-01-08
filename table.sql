
database:

-- table tien của đồng chí long

CREATE TABLE tien(
	id INT NOt NULL AUTO_INCREMENT,
	money_name VARCHAR(255) NOT NULL,
	money_id VARCHAR(255) NOT NULL,
	PRIMARY KEY(id)
);

insert into tien (money_name, money_id) value ('United States Dollar','USD');
insert into tien (money_name, money_id) value ('Australian Dollars','AUD');
insert into tien (money_name, money_id) value ('British Pound Sterling','GBP');
insert into tien (money_name, money_id) value ('Euros','EUR');
insert into tien (money_name, money_id) value ('Vietnamese Dong','VND');


--create table tygia_ngoaite của đồng chí long
CREATE TABLE tygia_ngoaite(
	id INT NOt NULL AUTO_INCREMENT,
	img_from BLOB NOT NULL,
	from_id VARCHAR(255) NOT NULL,
	img_to BLOB NOT NULL,
	to_id VARCHAR(255) NOT NULL,
	cur_1 DECIMAL(15,5),
	regDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY(id)
);

insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('USD.png','USD','VND.png','VND',23144.13261);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('USD.png','USD','eur.png','EUR',0.82028);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('USD.png','USD','JPY.png','JPY',103.44516);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('USD.png','USD','anh.png','GBP',0.73860);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('USD.png','USD','ucs.png','AUD',1.31588);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('USD.png','USD','THB.png','THB',29.98524);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('USD.png','USD','HKD.png','HKD',7.75285);

insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('VND.png','VND','USD.png','USD',0.00004);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('VND.png','VND','eur.png','EUR',0.00004);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('VND.png','VND','JPY.png','JPY',0.00447);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('VND.png','VND','anh.png','GBP',0.00447);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('VND.png','VND','ucs.png','AUD',0.00006);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('VND.png','VND','THB.png','THB',0.00130);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('VND.png','VND','HKD.png','HKD',0.00033);

insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('eur.png','EUR','VND.png','VND',28215.01207);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('eur.png','EUR','USD.png','USD',1.21910);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('eur.png','EUR','JPY.png','JPY',126.11000);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('eur.png','EUR','anh.png','GBP',0.91316);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('eur.png','EUR','ucs.png','AUD',1.60376);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('eur.png','EUR','THB.png','THB',36.55500);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('eur.png','EUR','HKD.png','HKD',9.45150);

insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('JPY.png','JPY','VND.png','VND',223.73334);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('JPY.png','JPY','USD.png','USD',0.00967);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('JPY.png','JPY','eur.png','EUR',0.00793);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('JPY.png','JPY','anh.png','GBP',0.00724);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('JPY.png','JPY','ucs.png','AUD',0.01272);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('JPY.png','JPY','THB.png','THB',0.28987);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('JPY.png','JPY','HKD.png','HKD',0.07495);

insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('anh.png','GBP','VND.png','VND',30898.21287);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('anh.png','GBP','USD.png','USD',1.35391);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('anh.png','GBP','eur.png','EUR',1.09510);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('anh.png','GBP','JPY.png','JPY',138.10285);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('anh.png','GBP','ucs.png','AUD',1.75627);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('anh.png','GBP','THB.png','THB',40.03132);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('anh.png','GBP','HKD.png','HKD',10.35032);

insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('ucs.png','AUD','VND.png','VND',17593.03890);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('ucs.png','AUD','USD.png','USD',0.75995);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('ucs.png','AUD','eur.png','EUR',0.62353);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('ucs.png','AUD','JPY.png','JPY',78.63396);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('ucs.png','AUD','anh.png','GBP',0.56939);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('ucs.png','AUD','THB.png','THB',22.79331);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('ucs.png','AUD','HKD.png','HKD',5.89334);

insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('THB.png','THB','VND.png','VND',771.85097);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('THB.png','THB','USD.png','USD',0.03335);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('THB.png','THB','eur.png','EUR',0.02736);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('THB.png','THB','JPY.png','JPY',3.44987);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('THB.png','THB','anh.png','GBP',0.02498);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('THB.png','THB','ucs.png','AUD',0.04387);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('THB.png','THB','HKD.png','HKD',0.25856);

insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('HKD.png','HKD','VND.png','VND',2985.24171);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('HKD.png','HKD','USD.png','USD',0.12898);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('HKD.png','HKD','eur.png','EUR',0.10580);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('HKD.png','HKD','JPY.png','JPY',13.34286);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('HKD.png','HKD','anh.png','GBP',0.09662);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('HKD.png','HKD','ucs.png','AUD',0.16968);
insert into tygia_ngoaite(img_from, from_id,img_to,to_id,cur_1) value('HKD.png','HKD','THB.png','THB',3.86764);

-- bang du lieu bieu do của đồng chí việt

CREATE TABLE bieudo (
	id VARCHAR(25) NOT NULL ,
    	N2000 float NOT NULL,
    	N2002 float NOT NULL,
	N2004 float NOT NULL,
	N2006 float NOT NULL,
	N2008 float NOT NULL,
	N2010 float NOT NULL,
	N2012 float NOT NULL,
	N2014 float NOT NULL,
	N2016 float NOT NULL,
	N2018 float NOT NULL,
	N2020 float NOT NULL,
    PRIMARY KEY (id)
);
INSERT INTO tyGia (id,	N2000,	N2002,	N2004,	N2006,	N2008,	N2010,	N2012,	N2014,	N2016,	N2018,	N2020	) 
VALUES ('VND', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO tyGia (id,	N2000,	N2002,	N2004,	N2006,	N2008,	N2010,	N2012,	N2014,	N2016,	N2018,	N2020	) 
VALUES ('EUR', 18003.20, 18381.42, 20986.12, 20307.50, 23367.93, 23104.51, 27060.36, 25812.01, 23487.32, 26279.00, 28342);
INSERT INTO tyGia (id,	N2000,	N2002,	N2004,	N2006,	N2008,	N2010,	N2012,	N2014,	N2016,	N2018,	N2020	) 
VALUES ('GBP', 26005.37, 26134.15, 30608.11, 30300.23, 24249.45, 30039.82, 33070.36, 32739.34, 27721.02, 29236.25, 31280.83);
INSERT INTO tyGia (id,	N2000,	N2002,	N2004,	N2006,	N2008,	N2010,	N2012,	N2014,	N2016,	N2018,	N2020	) 
VALUES ('AUD', 11050, 11105.50, 12013.69, 12103.93, 11545.27, 19539.79, 21901.40, 17322.52, 16181.45, 16725.44, 17629.34);
INSERT INTO tyGia (id,	N2000,	N2002,	N2004,	N2006,	N2008,	N2010,	N2012,	N2014,	N2016,	N2018,	N2020	) 
VALUES ('USD', 14930.00, 15089.00, 15265.00, 15483.00, 16782.00, 19460, 20805, 21370, 22283, 23277.50, 23125);

--bang du lieu ty gia cong cu doi tiên te của đồng chí thu

CREATE TABLE tygia(
	id VARCHAR(25) NOT NULL,
	VND VARCHAR(255) NOT NULL,
	USD VARCHAR(255) NOT NULL,
	AUD VARCHAR(255) NOT NULL,
	GBP VARCHAR(255) NOT NULL,
	EUR VARCHAR(255) NOT NULL,
	PRIMARY KEY (id)
);
-----------------------------------------------------------------
INSERT INTO tygia (id, VND, USD, AUD, GBP, EUR) VALUES ('VND', '1', '0.00004', '0.00006', '0.00003', '0.00004');
INSERT INTO tygia (id, VND, USD, AUD, GBP, EUR) VALUES ('USD', '23255.33054', '1', '1.32706', '1.4', '0.82127');
INSERT INTO tygia (id, VND, USD, AUD, GBP, EUR) VALUES ('AUD', '17524.41424', '0.75355', '1', '0.61887', '0,62379');
INSERT INTO tygia (id, VND, USD, AUD, GBP, EUR) VALUES ('GBP', '31349.65196', '	1.33608', '1,75627', '1', '1.11210');
INSERT INTO tygia (id, VND, USD, AUD, GBP, EUR) VALUES ('EUR', '28215.00000', '1.21975', '1.60313', '0.91316', '1');

--bang du lieu ng su dung của đồng chí thu

CREATE TABLE users(
	id VARCHAR(25) NOT NULL AUTO_INCREMENT,,
	tenDangnhap VARCHAR(255) NOT NULL,
	matKhau VARCHAR(255) NOT NULL,
	hoTen VARCHAR(255) NOT NULL,
	ngaySinh VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	dienThoai VARCHAR(255) NOT NULL,
	diaChi VARCHAR(255) NOT NULL,
	regDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
	);
insert into users (tenDangnhap,matKhau, hoTen, ngaySinh, email, dienThoai, diaChi )
value ('admin','1','admin',2000-09-11,'longtc123@gmail.com',0977234621,'18 phovien');
-- bảng người sử dụng của đồng chí việt
CREATE TABLE users(
	id int NOT NULL AUTO_INCREMENT,,
	tenDangnhap VARCHAR(255) NOT NULL,
	matKhau VARCHAR(255) NOT NULL,
	regDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
	);
insert into users (tenDangnhap,matKhau, hoTen )
value ('admin','1234','admin');