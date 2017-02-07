create database TheDayAfterDB;

create table WeeklyAnswers
(
		id				int not null auto_increment,
		userID		int not null,
		date 			datetime not null default(curdate()),
	  source1		varchar(30) not null,
	  article1	varchar(10000) not null,
    source2		varchar(30),
    article2	varchar(10000),
    source3		varchar(30),
    article3	varchar(10000),
    candidate	varchar(30) not null,
    primary key (id)
);

create table Background
(
		userID				int not null,
    age						int not null,
    gender				varchar(10) not null,
		household			int not null,
    education			varchar(30) not null,
    worksituation	varchar(50) not null,
    income				varchar(20) not null,
    candidate			varchar(30) not null,
    socialmedia		varchar(100) not null,
    primary key (userID),
		foreign key (userID) references WeeklyAnswers(userID)
);
