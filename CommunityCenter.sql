create database CommunityCenter;
use CommunityCenter;

create table Users(
user_id int auto_increment primary key,
first_name varchar(100) not null,
last_name varchar(100) not null,
username varchar(50) not null,
password varchar(255) not null,
email varchar(100) not null,
phone varchar(10) not null
);

create table Seats(
seat_id int auto_increment primary key,
seat text not null,
event_id int,
user_id int
);

create table Events(
event_id int auto_increment primary key,
name varchar(255) not null,
type varchar(255),
date date not null,
info text not null,
price double,
poster varchar(255) not null
);

create table Tickets(
ticket_id int auto_increment primary key,
event_id int,
seat_id int,
user_id int,
foreign key (event_id) references Events(event_id),
foreign key (seat_id) references Seats(seat_id),
foreign key (user_id) references Users(user_id)
);

create table News(
news_id int auto_increment primary key,
title varchar(255) not null,
info text not null
);

