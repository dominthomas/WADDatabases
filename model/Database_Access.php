<?php
  $pdo = new PDO("mysql:host=kunet.kingston.ac.uk;dbname=db_k1507061",
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

  function getAllDestinations(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Destinations");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Destination");
    return $results;
  }

  function getAllFlights(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Flights");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }
?>
