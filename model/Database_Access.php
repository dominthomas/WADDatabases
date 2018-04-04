<?php
require_once "requireAllModels.php";
class Database_Access{
  private static $instance;
  private $pdo;

  private function __construct(){
    $this->pdo = new PDO("mysql:host=kunet.kingston.ac.uk;dbname=dbAk1507061",
      "k1507061",
      "Ouzen~1",
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    function getInstance(){
      if(!isset(static::$instance)){
        static::$instance = new Database_Access();
      }
      return static::$instance;
    }

  function getAllAircraft_Models(){
    $statement = $this->pdo->prepare("SELECT * FROM Aircrafts");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Aircraft");
    return $results;
  }

  function getAllAircrafts(){
    $statement = $this->pdo->prepare("SELECT * FROM Aircrafts");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Aircraft");
    return $results;
  }

  function getAllBookings(){
    $statement = $this->pdo->prepare("SELECT * FROM Aircrafts");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Aircraft");
    return $results;
  }

  function getAllAirports(){
    $statement =$this->pdo->prepare("SELECT * FROM Airports");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Airport");
    return $results;
  }

  function getAllFlights(){
    $statement = $this->pdo->prepare("SELECT * FROM Flights");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }

  function getAllCustomers(){
    $statement = $this->pdo->prepare("SELECT * FROM Customers");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Customer");
    return $results;
  }


  function getFlightsByAll($departure, $destination, $date){
    $statement = $this->pdo->prepare("SELECT * FROM Flights WHERE Departure_IATA_Code = ?
       AND Arrival_IATA_Code = ? AND Departure_Date = ?");

    $statement->execute([$departure,
                         $destination,
                         $date]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }

  function getFlightsByDate($search){
    $statement = $this->pdo->prepare("SELECT * FROM Flights WHERE Departure_Date = ?");
    $statement->execute([$search]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }

  function getFlightsByDestination($search){
    $statement = $this->pdo->prepare("SELECT * FROM Flights WHERE Arrival_IATA_Code = ?");
    $statement->execute([$search]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }

  function getFlightsByDepartureAirport($search){
    $statement = $this->pdo->prepare("SELECT * FROM Flights WHERE Departure_IATA_Code = ?");
    $statement->execute([$search]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }

  function getFlightsByDay($search){
    $statement = $this->pdo->prepare("SELECT * FROM Flights WHERE  WEEKDAY(Departure_Date) = ?");
    $statement->execute([$search]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Flight");
    return $results;
  }
  function addFlight($flight){
    $statement = $this->pdo->prepare("INSERT INTO Flights (Flight_Number,Aircraft_ID,Departure_IATA_Code,Departure_Date,Arrival_IATA_Code,Cost,Departure_Time,Flight_Duration) VALUES (?,?,?,?,?,?,?,?)");
    $statement->execute([$flight->Flight_Number,
    $flight->Aircraft_ID,
    $flight->Departure_IATA_Code,
    $flight->Departure_Date,
    $flight->Arrival_IATA_Code,
    $flight->Cost,
    $flight->Departure_Time,
    $flight->Flight_Duration]);
  }

  function updateFlight($flight,$flightNo){
    $statement = $this->pdo->prepare("UPDATE Flights SET Flight_Number = ?,Aircraft_ID = ?,Departure_IATA_Code = ?,Departure_Date = ?,Arrival_IATA_Code = ?,Cost = ?,Departure_Time = ?,Flight_Duration = ? WHERE Flight_Number = ?");
    $statement->execute([$flight->Flight_Number,
    $flight->Aircraft_ID,
    $flight->Departure_IATA_Code,
    $flight->Departure_Date,
    $flight->Arrival_IATA_Code,
    $flight->Cost,
    $flight->Departure_Time,
    $flight->Flight_Duration,
    $flightNo]);
  }

  function deleteFlight($flightNo){
    $statement = $this->pdo->prepare("DELETE FROM Flights WHERE Flight_Number = ?");
    $statement->execute([$flightNo]);
  }

  function addAirport($airport){
    $statement =  $this->pdo->prepare("INSERT INTO Airports (IATA_Code,Airport_Location,Airport_Information) VALUES (?,?,?)");
    $statement->execute([$airport->IATA_Code,$airport->Airport_Location,$airport->Airport_Information]);
  }

  function updateAirport($airport,$current_iata){
    $statement =  $this->pdo->prepare("UPDATE Airports SET IATA_Code = ?, Airport_Location = ?, Airport_Information = ? WHERE IATA_Code = ?");
    $statement->execute([$airport->IATA_Code, $airport->Airport_Location, $airport->Airport_Information, $current_iata]);
  }


  function deleteAirport($iata){
    $statement =  $this->pdo->prepare("DELETE FROM Airports WHERE IATA_Code = ?");
    $statement->execute([$iata]);
  }

  function customerLogin($customer){
    $access = false;
    $statement = $this->pdo->prepare("SELECT * FROM Customers WHERE Email_Address = ?");
    $statement->execute([$customer->Email_Address]);
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"Customer");
    if($result->Password == $customer->Password){
      $access = $result;
    }
    return $access;
  }

  function adminLogin($admin){
    $access = false;
    $statement = $this->pdo->prepare("SELECT * FROM Customers WHERE Email_Address = ?");
    $statement->execute([$admin->Email_Address]);
    $result = $statement->fetch(PDO::FETCH_CLASS,"Admin");
    if($result->Password == $admin->Password){
      $access = $result;
    }
    return $access;
  }
}
?>
