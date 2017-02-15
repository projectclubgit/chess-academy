# chess-academy

## Database Configuration 
// Creating database
create database ashwa;
// Creating table
CREATE TABLE `users` (
  UID int(20) AUTO_INCREMENT Primary key ,
  NAME varchar(65) NOT NULL ,
  AGE int(65) NOT NULL ,
  GUARDIAN_NAME varchar(65) NOT NULL,  
  EMAIL varchar(65) NOT NULL, 
  ADDRESS varchar(65) NOT NULL,
  PHONE_O int(65) NOT NULL,
  PHONE_H int(65) NOT NULL
);

## Creator

Start Bootstrap was created by and is maintained by **David Miller**, Managing Parter at [Iron Summit Media Strategies](http://www.ironsummitmedia.com/).

* https://twitter.com/davidmillerskt
* https://github.com/davidtmiller

Start Bootstrap is based on the [Bootstrap](http://getbootstrap.com/) framework created by [Mark Otto](https://twitter.com/mdo) and [Jacob Thorton](https://twitter.com/fat).

## Copyright and License

Copyright 2013-2015 Iron Summit Media Strategies, LLC. Code released under the [Apache 2.0](https://github.com/IronSummitMedia/startbootstrap-grayscale/blob/gh-pages/LICENSE) license
