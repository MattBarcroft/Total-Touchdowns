
Create Database TotalTouchdownsDB;

/* create user 'user1'@'localhost' identified by 'mypass';

grant select, insert, update, delete, create, drop on TotalTouchdown.* to 'user1'@'localhost';
*/
use TotalTouchdownsDB;
CREATE TABLE Teams
(
	team_id int NOT NULL AUTO_INCREMENT,
  	name varchar(250) NOT NULL,
		logo varchar(50),
  	CONSTRAINT PK_teams_pk PRIMARY KEY (team_id)
);


CREATE TABLE Games
( 	game_id int NOT NULL AUTO_INCREMENT,
  	hometeam_id int NOT NULL,
  	awayteam_id int NOT NULL,
  	hometeamactualscore int NULL,
  	awayteamactualscore int NULL,
  	kickoff_datetime datetime NOT NULL,
  	location varchar(50) NOT NULL,
  	week_id int NOT NULL,
  	CONSTRAINT PK_game_id PRIMARY KEY (game_id),
    CONSTRAINT FK_hometeam FOREIGN KEY (hometeam_id)
    REFERENCES Teams(team_id),
    CONSTRAINT FK_awayteam FOREIGN KEY (awayteam_id)
    REFERENCES Teams(team_id)
);


CREATE TABLE Users
(
	user_id  int NOT NULL AUTO_INCREMENT,
	username varchar(100) NOT NULL,
	firstname varchar(100) NOT NULL,
	lastname varchar(100) NOT NULL,
	address varchar(500) NOT NULL,
	password varchar(100) NOT NULL,
	email varchar(50) NOT NULL,
	accountcreated DATETIME DEFAULT   CURRENT_TIMESTAMP,
	accountmodified DATETIME ON UPDATE CURRENT_TIMESTAMP,
	totalscore int NULL,
	rgoptout TINYINT(1) NOT NULL DEFAULT 0,
	admin TINYINT(1) NOT NULL DEFAULT 0,
	CONSTRAINT PK_user_id PRIMARY KEY (user_id),
	UNIQUE (username)
);


CREATE TABLE Bets
(
	bet_id int NOT NULL AUTO_INCREMENT,
	user_id int NOT NULL,
	betcreated DATETIME DEFAULT   CURRENT_TIMESTAMP,
	betmodified DATETIME ON UPDATE CURRENT_TIMESTAMP,
	CONSTRAINT PK_bet_id PRIMARY KEY (bet_id),
	CONSTRAINT FK_userid FOREIGN KEY (user_id)
    REFERENCES Users(user_id)
);


CREATE TABLE Selections
(
	selection_id int NOT NULL AUTO_INCREMENT,
	bet_id  int NOT NULL,
	game_id int NOT NULL,
	hometeamscore int NOT NULL,
	awayteamscore int NOT NULL,
	pointsawarded int NULL,
	CONSTRAINT PK_selection_id PRIMARY KEY (selection_id),
	CONSTRAINT FK_betid FOREIGN KEY (bet_id)
    REFERENCES Bets(bet_id),
    CONSTRAINT FK_gameid FOREIGN KEY (game_id)
    REFERENCES Games(game_id)
);
