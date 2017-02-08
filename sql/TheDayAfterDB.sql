create database TheDayAfterDB;

create table weeklyAnswer
(
		id					int not null auto_increment,
		userID			int not null,									--Unique
		periodID		int not null,									--Unique
		candidateID	int not null,
		date 				datetime not null default curdate(),
	  source1			varchar(30) not null,
	  article1		varchar(10000) not null,
    source2			varchar(30),
    article2		varchar(10000),
    source3			varchar(30),
    article3		varchar(10000),
    primary key (id),
		unique(userID),
		unique(periodID)
);

create table userBackground
(
		userID				int not null,
    birthdate			date not null,
    gender				varchar(2) not null,	 --M/F
		household			int not null,		       --1 t/m 5
    educationID		int not null,					 --Hoogste opleiding
    workID				int not null,			  	 --Werksituatie
    incomeID			int not null,          --Inkomen
    candidateID		int not null,	         --Kandidaat/partij
    channelID			int not null,          --Social media
    primary key (userID)
);

create table period
(
	periodID		int,
	startDate		datetime,
	endDate			datetime,
	primary key(periodID)
);

create table education
(
	educationID		int,
	description		varchar(50),
	primary key (educationID)
);

create table worksituation
(
	workID			int,
	description	varchar(50),
	primary key (workID)
);

create table income
(
	incomeID		int,
	description	varchar(50),
	primary key (incomeID)
);

create table candidate
(
	candidateID		int,
	description		varchar(50),
	primay key (candidateID)
);

create table socialMediaChannel
(
	channelID			int,
	description		varchar(50),
	primary key (channelID)
);

create table userChannel
(
	userchannelID		int,
	userID					int,
	channelID				int,
	description			varchar(25),
	primary key (userchannelID)
);

--Losse tabel
create table email
(
	hashedID		int,
	email				varchar(25),
	primary key(hashedID)
);

--relaties leggen
alter table userBackground
add foreign key (educationID)
references education(educationID)

alter table userBackground
add foreign key (workID)
references worksituation(workID)

alter table userBackground
add foreign key (incomeID)
references income(incomeID)

alter table userBackground
add foreign key (candidateID)
references candidate(candidateID)

alter table userBackground
add foreign key (channelID)
references socialMediaChannel(userchannelID)

alter table weeklyAnswer
add foreign key (userID)
references userBackground(userID)

alter table weeklyAnswer
add foreign key (periodID)
references period(periodID)

alter table weeklyAnswer
add foreign key (candidateID)
references candidate (candidateID)

alter table userChannel
add foreign key (channelID)
references socialMediaChannel(channelID)
