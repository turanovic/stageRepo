create table weeklyAnswer
(
	id					int not null auto_increment,
	userID			int not null,									
	periodID		int not null,									
	candidateID	int not null,
	date 				datetime not null default current_timestamp,
	source1			varchar(30) not null,
	 article1		text(10000) not null,
    source2			varchar(30),
    article2		text(10000),
    source3			varchar(30),
    article3		text(10000),
    primary key (id)
);

create table userBackground
(
		userID				int not null,
    birthdate			date not null,
    gender				varchar(2) not null,	
		household			int not null,	
    educationID		int not null,				
    workID				int not null,		
    incomeID			int not null,       
    candidateID		int not null,	         
    channelID			int not null,          
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
	party					varchar(50),
	name					varchar(50),
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
