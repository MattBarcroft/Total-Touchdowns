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
