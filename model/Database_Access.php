<?php
  final class Database_Access{
    private static $instance = null;
    private $pdo;
    private function __construct(){
      global $pdo = new PDO("mysql:host=kunet.kingston.ac.uk;dbname=dbAk1507061",
      "k1507061",
      "Ouzen~1",
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
  }
  
    public static function getInstance(){
      if(self::$instance == null){
        self::$instance = new Database_Access();
      }
      return self::$instance;
    }
  function getAllAircraft_Models(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Aircrafts");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Aircraft");
    return $results;
  }

  function getAllAircrafts(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Aircrafts");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Aircraft");
    return $results;
  }

  function getAllBookings(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Aircrafts");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Aircraft");
    return $results;
  }

  function getAllAirports(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Airports WHERE NOT IATA_Code = 'STN'");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Airport");
    return $results;
  }

  function getAllFlights(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Flights");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }

  function getAllCustomers(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Customers");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Customer");
    return $results;
  }

  function getFlightsByDate($search){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Flights WHERE Departure_Date = ?");
    $statement->execute([$search]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }

  function getFlightsByDestination($search){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Flights WHERE Arrival_IATA_Code = ?");
    $statement->execute([$search]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }

  function getFlightsByDepartureAirport($search){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Flights WHERE Departure_IATA_Code = ?");
    $statement->execute([$search]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }

  function getFlightsByDay($search){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Flights WHERE  WEEKDAY(Departure_Date) = ?");
    $statement->execute([$search]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }
?>
