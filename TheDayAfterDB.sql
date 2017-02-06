#Database for the project "The Day After"
create database TheDayAfterDB;

#Creating the tables
create table user
(
	userID			int not null,
    age				int not null,
    gender			varchar(10) not null,
    education		varchar(30) not null,
    residence		varchar(30) not null,
    nationality		varchar(30) not null,
    primary key (userID)
);

create table answers
(
	
);

create table email
(
	email		varchar(40) not null
);