INSERT INTO users
(
firstname,
lastname,
address,
password,
email,
rgoptout


)
VALUES
    (
    "Alice",
    "Palmer"
    "1 Wellington Place",
    "letmein01",
    "alicepalmer@sbgmail.com",
    "0"),

    (
    "Connor",
    "Jones",
    "2 Wellington Place",
    "letmein02",
    "connorjones@sbgmail.com",
    "0"),

    (
    "Matthew",
    "Barcroft"
    "3 Wellington Place",
    "letmein03",
    "matthewbarcroft@sbgmail.com",
    "0"),

    (
    "Mandy",
    "Thornton",
    "4 Wellington Place",
    "letmein04",
    "mandythornton@sbgmail.com",
    "0"),

    (
    "James",
    "Snape",
    "5 Wellington Place",
    "letmein05",
    "jamessnape@sbgmail.com",
    "0"),
    
    (
    "Emily",
    "O'Connor",
    "6 Wellington Place",
    "letmein06",
    "emilyoconnor@sbgmail.com",
    "0"),

    (
    "Alex",
    "Woodhouse",
    "7 Wellington Place",
    "letmein07",
    "alexwoodhouse@sbgmail.com",
    "0"),

    (
    "Jake",
    "Tongue",
    "8 Wellington Place",
    "letmein08",
    "jaketongue@sbgmail.com",
    "0"),

    (
    "Howard",
    "Jones",
    "9 Wellington Place",
    "letmein09",
    "howardjones@sbgmail.com",
    "0"),
    
    (
    "Jess",
    "Lettall",
    "10 Wellington Place",
    "letmein10",
    "jesslettall@sbgmail.com",
    "0"
);

INSERT INTO teams
(
name

)
VALUES
    ("Arizona Cardinals"),
    ("Atlanta Falcons"),
    ("Baltimore Ravens"),
    ("Buffalo Bills"),
    ("Chicago Bears"),
    ("Cincinnati Bengals"),
    ("Dallas Cowboys"),
    ("Denver Broncos"),
    ("Houston Texans"),
    ("Miami Dolphins")
    ;

INSERT INTO games
(

  	hometeam_id,
  	awayteam_id,
  	hometeamactualscore,
  	awayteamactualscore,
  	kickoff_datetime,
  	location,
  	week_id
)


VALUES (
    "1",
    "2",
    "4",
    "2",
    "2017-09-17 13:00:00",
    "Arizona",
    "1"),

(
    "3",
    "4",
    "2",
    "2",
    "2017-09-17 13:00:00",
    "Baltimore",
    "1"),

    (
    "5",
    "6",
    "1",
    "3",
    "2017-09-17 13:00:00",
    "Chicago",
    "1"),

    (
    "7",
    "8",
    "3",
    "3",
    "2017-09-17 13:00:00",
    "Dallas",
    "1"),

    (
    "9",
    "10",
    "2",
    "3",
    "2017-09-17 13:00:00",
    "Houston",
    "1")
    ;


INSERT INTO bets
(
user_id

)

VALUES 

("1"),("2"),("3"),("4"),("5"),("6"),("7"),("8"),("9"),("10")
;


INSERT INTO selections
(
	bet_id,
	game_id,
	hometeamscore,
	awayteamscore,
	pointsawarded
)

VALUES
("1","1","3","1",NULL),("1","2","1","2",NULL),("1","3","4","1",NULL),("1","4","1","3",NULL),("1","5","3","2",NULL),

("2","1","2","2",NULL),("2","2","2","3",NULL),("2","3","4","2",NULL),("2","4","2","2",NULL),("2","5","2","1",NULL),

("3","1","4","2",NULL),("3","2","2","1",NULL),("3","3","3","2",NULL),("3","4","2","3",NULL),("3","5","1","3",NULL),

("4","1","3","2",NULL),("4","2","4","2",NULL),("4","3","1","3",NULL),("4","4","3","2",NULL),("4","5","2","2",NULL),

("5","1","2","1",NULL),("5","2","3","3",NULL),("5","3","5","3",NULL),("5","4","4","2",NULL),("5","5","2","3",NULL),

("6","1","2","3",NULL),("6","2","3","2",NULL),("6","3","3","2",NULL),("6","4","2","3",NULL),("6","5","2","4",NULL),

("7","1","2","2",NULL),("7","2","1","3",NULL),("7","3","3","2",NULL),("7","4","4","1",NULL),("7","5","2","3",NULL),

("8","1","4","3",NULL),("8","2","2","3",NULL),("8","3","2","2",NULL),("8","4","4","4",NULL),("8","5","2","3",NULL),

("9","1","2","1",NULL),("9","2","3","3",NULL),("9","3","3","2",NULL),("9","4","4","2",NULL),("9","5","2","3",NULL),

("10","1","2","3",NULL),("10","2","4","3",NULL),("10","3","2","2",NULL),("10","4","3","1",NULL),("10","5","1","4",NULL)
;



