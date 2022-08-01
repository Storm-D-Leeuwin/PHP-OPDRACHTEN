<?php

class Model
{
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "bakkerij";
    private $conn;

    public function __construct()
    {
        try {

            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }

    public function insert()
    {

        if (isset($_POST['submit'])) {
            if (isset($_POST['gewicht'])) {
                if (!empty($_POST['gewicht'])) {

                    $meel = $_POST['meel'];
                    $vorm = $_POST['vorm'];
                    $gewicht = $_POST['gewicht'];

                    $query = "INSERT INTO `brood` (`meel`, `vorm`, `gewicht`) VALUES ('$meel', '$vorm', '$gewicht')";

                    if ($this->conn->query($query)) {
                        echo "<script>alert('Toegevoegd');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    } else {
                        // echo "<script>alert('Niet gelukt om toe te voegen');</script>";
                        // echo "<script>window.location.href = 'index.php';</script>";

                        printf($this->conn->error);
                    }
                } else {

                    echo "<script>alert('Gewicht is niet ingevult');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }
    }

    public function fetch()
    {
        $data = null;

        $query = "SELECT * FROM brood";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
