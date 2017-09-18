CREATE DATABASE TotalTouchdownsDB;


CREATE TABLE Teams
( 	
	team_id int NOT NULL AUTO_INCREMENT,
  	name varchar(50) NOT NULL,
  	CONSTRAINT PK_teams_pk PRIMARY KEY (teams_pk)
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
	name varchar(20) NOT NULL,
	address int NOT NULL,
	password int NOT NULL,
	email int NOT NULL,
	accountcreated DATETIME NOT NULL,
	rgoptout TINYINT(1) NOT NULL,
	CONSTRAINT PK_user_id PRIMARY KEY (user_id)
);


CREATE TABLE Bets
(
	bet_id int NOT NULL AUTO_INCREMENT,
	user_id int NOT NULL,
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
	CONSTRAINT PK_selection_id PRIMARY KEY (selection_id)
	CONSTRAINT FK_betid FOREIGN KEY (bet_id)
    REFERENCES Bets(bet_id)
    CONSTRAINT FK_gameid FOREIGN KEY (game_id)
    REFERENCES Games(game_id)
);

