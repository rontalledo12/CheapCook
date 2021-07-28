CREATE SCHEMA chCook;
use chCook;

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
);

INSERT INTO `admin` (`username`, `password`, `role`) VALUES ('Marela', '12345', 'manager'), ('Audie', '12345', 'staff');

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
);

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(1, 'CHICKEN'),
(2, 'PORK'),
(3, 'FISH'),
(4, 'BEEF'),
(5, 'DRINKS');

CREATE TABLE  `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `productdetails` varchar(100) NOT NULL,
  `prodavail` int(3) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(150) NOT NULL
);

INSERT INTO `product` (`productid`, `categoryid`,  `productname`, `productdetails`, `prodavail`, `price`, `photo`) VALUES
(14, 1, 'Lemon Butter Chicken', '(1x)Chicken, (1x)Rice', 15, 65, 'upload/c1.jpg'),
(15, 1, 'Mango Tango Chicken', '(1x)Chicken, (1x)Rice', 14, 65, 'upload/c2.jpg'),
(16, 1, 'Breaded Chicken', '(1x)Chicken, (1x)Rice, (1x)Ice Tea', 13, 65, 'upload/c3.jpg'),
(17, 1, 'Chicken Teriyaki', '(1x)Chicken, (1x)Rice, (1x)Ice Tea', 18, 65, 'upload/c4.jpg'),
(18, 1, 'Buffalo Wings', '(1x)Chicken', 15, 90, 'upload/c5.jpg'),
(19, 1, 'Buffalo Fillet', '(1x)Chicken', 15, 80, 'upload/c6.jpg'),

(20, 2, 'Sweet n Sour Pork', '(1x)Pork, (1x)Rice', 21, 65, 'upload/p1.jpg'),
(21, 2, 'Breaded Porkchop', '(1x)Pork, (1x - Glass)Ice Tea, (1x)Rice', 23, 65, 'upload/p2.jpg'),
(22, 2, 'Pork Teriyaki', '(1x)Pork, (1x - Glass)Ice Tea, (1x)Rice', 15, 65, 'upload/p3.jpg'),
(23, 2, 'Sisig', '(1x)Pork, (1x - Glass)Ice Tea, (1x)Rice', 9, 65, 'upload/p4.jpg'),

(24, 3, 'Sweet n Sour Fish', '(1x)Fish, (1x)Rice', 8, 65, 'upload/f1.jpg'),
(25, 3, 'Creamy Dory', '(1x)Fish, (1x)Rice', 9, 75, 'upload/f2.jpg'),
(26, 3, 'Pan-Fried Oriental Fish', '(1x)Fish, (1x)Rice', 9, 65, 'upload/f3.jpg'),
(27, 3, 'Fish n Fries', '(1x)Fish, (1x)Fries', 10, 75, 'upload/f4.jpg'),

(28, 4, 'Burger', '(1x)Beef', 18, 55, 'upload/b1.jpg'),
(29, 4, 'Cheesburger', '(1x)Beef, (1x)Cheese', 19, 70, 'upload/b2.jpg'),
(30, 4, 'Burger w/ Fries', '(1x)Burger, (1x)Fries', 21, 75, 'upload/b3.jpg'),
(31, 4, 'Cheeseburger w/ Fries', '(1x)Beef, (1x)Cheese, (1x)Fries', 20, 90, 'upload/b4.jpg'),
(32, 4, 'Burgersteak', '(1x)Beef, (1x)Rice, (1x)Ice Tea', 19, 65, 'upload/b5.jpg'),

(33, 5, '7-UP', '250ml', 20, 10, 'upload/d1.jpg'),
(34, 5, 'Coke', '250ml', 30, 10, 'upload/d2.jpg'),
(35, 5, 'Mountain Dew', '300ml', 29, 12, 'upload/d3.jpg'),
(36, 5, 'Ice Tea(G)', '(1x - Glass)Ice Tea', 34, 10, 'upload/d4.jpg'),
(37, 5, 'Ice Tea(P)', '(1x - Pitcher)Ice Tea', 34, 30, 'upload/d5.jpg')
;

CREATE TABLE `purchase` (
  `purchaseid` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL
); 

INSERT INTO `purchase` (`purchaseid`, `customer`, `total`, `date_purchase`) VALUES
(12, 'Pautams', 222, '2019-12-06 15:29:00'),
(13, 'Vlz', 183, '2020-10-09 20:19:43');


CREATE TABLE `purchase_detail` (
  `pdid` int(11) NOT NULL,
  `purchaseid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
);

INSERT INTO `purchase_detail` (`pdid`, `purchaseid`, `productid`, `quantity`) VALUES
(13, 12, 15, 2),
(14, 12, 17, 2),
(15, 12, 18, 2),
(16, 13, 15, 3);


ALTER TABLE `category`
 ADD PRIMARY KEY (`categoryid`);

ALTER TABLE `product`
 ADD PRIMARY KEY (`productid`);

ALTER TABLE `purchase`
 ADD PRIMARY KEY (`purchaseid`);


ALTER TABLE `purchase_detail`
 ADD PRIMARY KEY (`pdid`);


ALTER TABLE `category`
MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;

ALTER TABLE `product`
MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;

ALTER TABLE `purchase`
MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;

ALTER TABLE `purchase_detail`
MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
