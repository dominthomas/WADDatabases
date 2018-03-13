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

  function getFlightsByDate($date){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Flights WHERE Departure_Date = ?");
    $statement->execute([$date]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }
?>
