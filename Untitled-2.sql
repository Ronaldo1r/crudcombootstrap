/*CREATE database samueldb;*/

use samueldb;

CREATE table `users`(
`user_id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`firstname` varchar(30) NOT NULL,
`lastname` varchar(30) NOT NULL,
`address` varchar(150) NOT NULL,
`contact` varchar(20) NOT NULL
);


