use TotalTouchdownsDB;

INSERT INTO users
(
username,
firstname,
lastname,
address,
password,
email,
rgoptout


)
VALUES
    (
    "frank99",
    "Frank",
    "Palmer",
    "100 Wellington Place",
    "letmein01",
    "frankpalmer@sbgmail.com",
    "0"),

    (
    "connor99",
    "Connor",
    "Smith",
    "2 Wellington Place",
    "letmein02",
    "connorsmith@sbgmail.com",
    "0"),

    (
    "matthew99",
    "Matthew",
    "Smith",
    "3 Wellington Place",
    "letmein03",
    "matthewsmith@sbgmail.com",
    "0"),

    (
    "mandy99",
    "Mandy",
    "Johnstone",
    "4 Wellington Place",
    "letmein04",
    "mandyjohnstone@sbgmail.com",
    "0"),

    (
    "jimbo99",
    "Jimbo",
    "Ricards",
    "5 Wellington Place",
    "letmein05",
    "jimboricards@sbgmail.com",
    "0"),

    (
    "emily99",
    "Emily",
    "Emmetson",
    "6 Wellington Place",
    "letmein06",
    "emilyemmetson@sbgmail.com",
    "0"),

    (
    "alex99",
    "Alex",
    "Banks",
    "7 Wellington Place",
    "letmein07",
    "alexbanks@sbgmail.com",
    "0"),

    (
    "jake99",
    "Jake",
    "Young",
    "8 Wellington Place",
    "letmein08",
    "jakeyoung@sbgmail.com",
    "0"),

    (
    "howard99",
    "Howard",
    "Howardson",
    "9 Wellington Place",
    "letmein09",
    "howardhowardson@sbgmail.com",
    "0"),

    (
    "jess99",
    "Jess",
    "Lee",
    "10 Wellington Place",
    "letmein10",
    "jessleel@sbgmail.com",
    "0"
);

INSERT INTO teams
(
name,
logo
)
VALUES
    ("Arizona Cardinals", "logo/cardinals.gif"),
    ("Atlanta Falcons", "logo/falcons.gif"),
    ("Baltimore Ravens", "logo/ravens.gif"),
    ("Buffalo Bills", "logo/bills.gif"),
    ("Carolina Panthers", "logo/panthers.gif"),
    ("Chicago Bears", "logo/bears.gif"),
    ("Cincinnati Bengals", "logo/bengals.gif"),
    ("Cleveland Browns", "logo/browns.gif"),
    ("Dallas Cowboys", "logo/cowboys.gif"),
    ("Denver Broncos", "logo/broncos.gif"),
    ("Detroit Lions", "logo/lions.gif"),
    ("Green Bay Packers", "logo/packers.gif"),
    ("Houston Texans", "logo/texans.gif"),
    ("Indianapolis Colts", "logo/colts.gif"),
    ("Jacksonville Jaguars", "logo/jaguars.gif"),
    ("Kansas City Chiefs", "logo/chiefs.gif"),
    ("Los Angeles Chargers", "logo/chargers.gif"),
    ("Los Angeles Rams", "logo/rams.gif"),
    ("Miami Dolphins", "logo/dolphins.gif"),
    ("Minnesota Vikings", "logo/vikings.gif"),
    ("New Orlean Saints", "logo/saints.gif"),
    ("New England Patriots", "logo/patriots.gif"),
    ("New York Jets", "logo/jets.gif"),
    ("New York Giants", "logo/giants.gif"),
    ("Oakland Raiders", "logo/raiders.gif"),
    ("Philidelphia Eagles", "logo/eagles.gif"),
    ("Pittsburgh Steelers", "logo/steelers.gif"),
    ("San Francisco 49ers", "logo/49ers.gif"),
    ("Seatle Seahawks", "logo/seahawks.gif"),
    ("Tampa Bay Buccanneers", "logo/bucaneers.gif"),
    ("Tennessee Titans", "logo/titans.gif"),
    ("Washington Redskins", "logo/redskins.gif");
    
use TotalTouchdownsDB;

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


VALUES

-- week 1

    (
    "23",
    "4",
    "4",
    "2",
    "2017-09-10 13:00:00",
    "New York",
    "1"),

    (
    "26",
    "32",
    "3",
    "3",
    "2017-09-10 13:00:00",
    "Philadelphia",
    "1"),

    (
    "25",
    "31",
    "1",
    "1",
    "2017-09-10 13:00:00",
    "Oakland",
    "1"),

    (
    "15",
    "13",
    "2",
    "3",
    "2017-09-10 13:00:00",
    "Jacksonville",
    "1"),

    (
    "1",
    "11",
    "2",
    "3",
    "2017-09-10 13:00:00",
    "Arizona",
    "1"),


-- week 2

    (
    "8",
    "3",
    NULL,
    NULL,
    "2017-09-17 13:00:00",
    "Cleveland",
    "2"),

    (
    "6",
    "30",
    NULL,
    NULL,
    "2017-09-17 13:00:00",
    "Chicago",
    "2"),

    (
    "20",
    "27",
    NULL,
    NULL,
    "2017-09-17 13:00:00",
    "Minnesota",
    "2"),

    (
    "22",
    "21",
    NULL,
    NULL,
    "2017-09-17 13:00:00",
    "New England",
    "2"),

    (
    "26",
    "16",
    NULL,
    NULL,
    "2017-09-17 13:00:00",
    "Philadelphia",
    "2"),



-- week 3

    (
    "3",
    "15",
    NULL,
    NULL,
    "2017-09-24 13:00:00",
    "Baltimore",
    "3"),

    (
    "8",
    "14",
    NULL,
    NULL,
    "2017-09-24 13:00:00",
    "Cleveland",
    "3"),

    (
    "24",
    "26",
    NULL,
    NULL,
    "2017-09-24 13:00:00",
    "New York",
    "3"),

    (
    "19",
    "23",
    NULL,
    NULL,
    "2017-09-24 13:00:00",
    "Miami",
    "3"),

    (
    "10",
    "4",
    NULL,
    NULL,
    "2017-09-24 13:00:00",
    "Denver",
    "3"),

 

-- week 4

    (
    "21",
    "19",
    NULL,
    NULL,
    "2017-10-01 13:00:00",
    "New Orleans",
    "4"),

    (
    "31",
    "13",
    NULL,
    NULL,
    "2017-10-01 13:00:00",
    "Tennessee",
    "4"),

    (
    "15",
    "23",
    NULL,
    NULL,
    "2017-10-01 13:00:00",
    "Jacksonville",
    "4"),

    (
    "5",
    "22",
    NULL,
    NULL,
    "2017-10-01 13:00:00",
    "Carolina",
    "4"),

    (
    "11",
    "20",
    NULL,
    NULL,
    "2017-10-01 13:00:00",
    "Detroit",
    "4"),


-- week 5

    (
    "23",
    "8",
    NULL,
    NULL,
    "2017-10-08 13:00:00",
    "New York",
    "5"),

    (
    "5",
    "11",
    NULL,
    NULL,
    "2017-10-08 13:00:00",
    "Carolina",
    "5"),

    (
    "28",
    "14",
    NULL,
    NULL,
    "2017-10-08 13:00:00",
    "San Francisco",
    "5"),

    (
    "31",
    "19",
    NULL,
    NULL,
    "2017-10-08 13:00:00",
    "Tennessee",
    "5"),

    (
    "4",
    "7",
    NULL,
    NULL,
    "2017-10-08 13:00:00",
    "Buffalo",
    "5"),


-- week 6

    (
    "6",
    "3",
    NULL,
    NULL,
    "2017-10-15 13:00:00",
    "Chicago",
    "6"),

    (
    "8",
    "13",
    NULL,
    NULL,
    "2017-10-15 13:00:00",
    "Cleveland",
    "6"),

    (
    "12",
    "20",
    NULL,
    NULL,
    "2017-10-15 13:00:00",
    "Green Bay",
    "6"),

    (
    "11",
    "21",
    NULL,
    NULL,
    "2017-10-15 13:00:00",
    "Detroit",
    "6"),

    (
    "19",
    "2",
    NULL,
    NULL,
    "2017-10-15 13:00:00",
    "Miami",
    "6"),


-- week 7

    (
    "30",
    "4",
    NULL,
    NULL,
    "2017-10-22 13:00:00",
    "Tampa Bay",
    "7"),

    (
    "3",
    "20",
    NULL,
    NULL,
    "2017-10-22 13:00:00",
    "Baltimore",
    "7"),

    (
    "23",
    "19",
    NULL,
    NULL,
    "2017-10-22 13:00:00",
    "New York",
    "7"),

    (
    "1",
    "18",
    NULL,
    NULL,
    "2017-10-22 13:00:00",
    "Arizona",
    "7"),

    (
    "15",
    "14",
    NULL,
    NULL,
    "2017-10-22 13:00:00",
    "Jacksonville",
    "7"),


-- week 8

    (
    "2",
    "23",
    NULL,
    NULL,
    "2017-10-29 13:00:00",
    "Atlanta",
    "8"),

    (
    "5",
    "30",
    NULL,
    NULL,
    "2017-10-29 13:00:00",
    "Carolina",
    "8"),

    (
    "28",
    "26",
    NULL,
    NULL,
    "2017-10-29 13:00:00",
    "San Francisco",
    "8"),

    (
    "6",
    "21",
    NULL,
    NULL,
    "2017-10-29 13:00:00",
    "Chicago",
    "8"),

    (
    "17",
    "22",
    NULL,
    NULL,
    "2017-10-29 13:00:00",
    "Los Angeles",
    "8"),


-- week 9

    (
    "14",
    "13",
    NULL,
    NULL,
    "2017-11-05 13:00:00",
    "Indianapolis",
    "9"),

    (
    "7",
    "15",
    NULL,
    NULL,
    "2017-11-05 13:00:00",
    "Cincinnati",
    "9"),

    (
    "30",
    "21",
    NULL,
    NULL,
    "2017-11-05 13:00:00",
    "Tampa Bay",
    "9"),

    (
    "18",
    "24",
    NULL,
    NULL,
    "2017-11-05 13:00:00",
    "Los Angeles",
    "9"),

    (
    "2",
    "5",
    NULL,
    NULL,
    "2017-11-05 13:00:00",
    "Atlanta",
    "9"),


-- week 10

    (
    "12",
    "6",
    NULL,
    NULL,
    "2017-11-12 13:00:00",
    "Green Bay",
    "10"),

    (
    "8",
    "11",
    NULL,
    NULL,
    "2017-11-12 13:00:00",
    "Cleveland",
    "10"),

    (
    "27",
    "14",
    NULL,
    NULL,
    "2017-11-12 13:00:00",
    "Pittsburgh",
    "10"),

    (
    "17",
    "15",
    NULL,
    NULL,
    "2017-11-12 13:00:00",
    "Los Angeles",
    "10"),

    (
    "21",
    "4",
    NULL,
    NULL,
    "2017-11-12 13:00:00",
    "New Orleans",
    "10"),



-- week 11

    (
    "11",
    "6",
    NULL,
    NULL,
    "2017-11-19 13:00:00",
    "Detroit",
    "11"),

    (
    "15",
    "8",
    NULL,
    NULL,
    "2017-11-19 13:00:00",
    "Jacksonville",
    "11"),

    (
    "3",
    "12",
    NULL,
    NULL,
    "2017-11-19 13:00:00",
    "Baltimore",
    "11"),

    (
    "1",
    "13",
    NULL,
    NULL,
    "2017-11-19 13:00:00",
    "Arizona",
    "11"),

    (
    "30",
    "19",
    NULL,
    NULL,
    "2017-11-19 13:00:00",
    "Tampa Bay",
    "11"),



-- week 12

    (
    "4",
    "16",
    NULL,
    NULL,
    "2017-11-26 13:00:00",
    "Buffalo",
    "12"),

    (
    "31",
    "14",
    NULL,
    NULL,
    "2017-11-26 13:00:00",
    "Tennessee",
    "12"),

    (
    "8",
    "7",
    NULL,
    NULL,
    "2017-11-26 13:00:00",
    "Cleveland",
    "12"),

    (
    "30",
    "2",
    NULL,
    NULL,
    "2017-11-26 13:00:00",
    "Tampa Bay",
    "12"),

    (
    "19",
    "22",
    NULL,
    NULL,
    "2017-11-26 13:00:00",
    "Miami",
    "12"),



-- week 13

    (
    "20",
    "2",
    NULL,
    NULL,
    "2017-12-03 13:00:00",
    "Minnesota",
    "13"),

    (
    "13",
    "31",
    NULL,
    NULL,
    "2017-12-03 13:00:00",
    "Houston",
    "13"),

    (
    "16",
    "23",
    NULL,
    NULL,
    "2017-12-03 13:00:00",
    "Kansas",
    "13"),

    (
    "5",
    "21",
    NULL,
    NULL,
    "2017-12-03 13:00:00",
    "Carolina",
    "13"),

    (
    "10",
    "19",
    NULL,
    NULL,
    "2017-12-03 13:00:00",
    "Denver",
    "13"),

-- week 14

    (
    "14",
    "4",
    NULL,
    NULL,
    "2017-12-10 13:00:00",
    "Indianapolis",
    "14"),

    (
    "11",
    "30",
    NULL,
    NULL,
    "2017-12-10 13:00:00",
    "Detroit",
    "14"),

    (
    "25",
    "16",
    NULL,
    NULL,
    "2017-12-10 13:00:00",
    "Oakland",
    "14"),

    (
    "29",
    "15",
    NULL,
    NULL,
    "2017-12-10 13:00:00",
    "Seattle",
    "14"),

    (
    "28",
    "13",
    NULL,
    NULL,
    "2017-12-10 13:00:00",
    "San Francisco",
    "14"),


-- week 15

    (
    "13",
    "15",
    NULL,
    NULL,
    "2017-12-17 13:00:00",
    "Houston",
    "15"),

    (
    "3",
    "8",
    NULL,
    NULL,
    "2017-12-17 13:00:00",
    "Baltimore",
    "15"),

    (
    "12",
    "5",
    NULL,
    NULL,
    "2017-12-17 13:00:00",
    "Green Bay",
    "15"),

    (
    "19",
    "4",
    NULL,
    NULL,
    "2017-12-17 13:00:00",
    "Miami",
    "15"),

    (
    "7",
    "20",
    NULL,
    NULL,
    "2017-12-17 13:00:00",
    "Cincinnati",
    "15"),


-- week 16

    (
    "11",
    "7",
    NULL,
    NULL,
    "2017-12-24 13:00:00",
    "Detroit",
    "16"),

    (
    "19",
    "16",
    NULL,
    NULL,
    "2017-12-24 13:00:00",
    "Miami",
    "16"),

    (
    "4",
    "22",
    NULL,
    NULL,
    "2017-12-24 13:00:00",
    "Buffalo",
    "16"),

    (
    "8",
    "6",
    NULL,
    NULL,
    "2017-12-24 13:00:00",
    "Cleveland",
    "16"),

    (
    "30",
    "5",
    NULL,
    NULL,
    "2017-12-24 13:00:00",
    "Tampa Bay",
    "16"),



-- week 17

    (
    "5",
    "2",
    NULL,
    NULL,
    "2017-12-31 13:00:00",
    "Carolina",
    "17"),

    (
    "7",
    "3",
    NULL,
    NULL,
    "2017-12-31 13:00:00",
    "Cincinnati",
    "17"),

    (
    "15",
    "31",
    NULL,
    NULL,
    "2017-12-31 13:00:00",
    "Jacksonville",
    "17"),

    (
    "21",
    "30",
    NULL,
    NULL,
    "2017-12-31 13:00:00",
    "New Orleans",
    "17"),

    (
    "8",
    "27",
    NULL,
    NULL,
    "2017-12-31 13:00:00",
    "Cleveland",
    "17")
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


update TotalTouchdownsDB.Users set password = '$2y$10$Bw6nqOrPFhBI2kLssvynq.rxSlZRHglZ1cjuNO0VeOltDEvfZWwfy';