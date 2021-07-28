CREATE SCHEMA silogan;
use silogan;

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
);

INSERT INTO `admin` (`username`, `password`) VALUES ('Marela', '12345'), ('Audie', '12345');

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
);

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(1, 'SILOGMEALS'),
(2, 'DRINKS');

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
(14, 1, 'Spamsilog', '(3x)Spam, (1x)Egg, (1x)Rice', 10, 45, 'upload/spam.jpg'),
(15, 1, 'Porksilog', '(1x)Pork, (1x)Egg, (1x)Rice', 8, 61, 'upload/pork.jpg'),
(16, 1, 'Chickenskinsilog', '(1x)Chickenskin, (1x)Egg, (1x)Rice', 3, 49, 'upload/skin.jpg'),
(17, 1, 'Cornsilog', '(1x)Cornbeef, (1x)Egg, (1x)Rice', 5, 35, 'upload/corn.jpg'),

(18, 2, 'Water', '(1x - 500ml)Water', 50, 15, 'upload/water.jpg'),
(19, 2, 'Coke', '(1x - 250ml)Coke', 40, 18, 'upload/coke.jpg'),
(20, 2, 'Mountain Dew', '(1x - 300ml)Mountain Dew', 35, 20, 'upload/dew.jpg'),
(21, 2, 'Ice Tea', '(1x - Pitcher)Ice Tea', 56, 45, 'upload/icetea.jpg');

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
