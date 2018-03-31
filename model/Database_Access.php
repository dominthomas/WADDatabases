<?php
$pdo = new PDO("mysql:host=kunet.kingston.ac.uk;dbname=dbAk1507061",
  "k1507061",
  "Ouzen~1",
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );

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
    $statement = $pdo->prepare("SELECT * FROM Airports");
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


  function getFlightsByAll($search){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Flights WHERE Departure_IATA_Code = ? AND Arrival_IATA_Code = ? AND Departure_Date = ?");
    $statement->execute([$search]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
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

  function addAirport($airport){
   global $pdo;
   $statement =  $pdo->prepare('INSERT INTO Airports (IATA_Code, Airport_Location, Airport_Information) VALUES (?,?,?)');
   $statement->execute([$airport->IATA_Code, $airport->Airport_Location, $airport->Airport_Information]);
  }

  function updateAiport($airport,$iata,$info,$airport){
    global $pdo;
    $statement =  $pdo->prepare("UPDATE Aiports SET IATA_Code = ?,Airport_Location = ?,Airport_Information = ?) WHERE IATA_Code = ?");
    $statement->execute([$airport,$iata,$info,$airport->IATA_Code]);
  }

  function deleteAiport($iata){
    global $pdo;
    $statement =  $pdo->prepare("DELETE FROM Aiports WHERE IATA_Code = ?");
    $statement->execute([$iata]);
  }
?>
