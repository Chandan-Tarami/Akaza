<?php 
    class Database{
        public $servername="localhost";
        public $username="root";
        public $password="";
        public $database="Akaza";
        public $connection;
    
        function __construct(){
            $this->connection=new mysqli($this->servername,$this->username,$this->password,$this->database);
            
            if($this->connection->connect_error){
                echo $this->connection->connect_error;
            }else{
                echo "<script> console.log('database connected successfully')</script>";
            }
        }

        function check_user($username, $password){
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = $this->connection->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_array();
                return $row['username'];
            } else {
                echo "<script>alert('Invalid Input')</script>";
                return false;
            }
        }

        function register_user($username, $email, $password) {
            $existingUserQuery = "SELECT * FROM users WHERE username = '$username'";
            $existingUserResult = $this->connection->query($existingUserQuery);
        
            if ($existingUserResult->num_rows > 0) {
                echo "<script>alert('Error: Username already exists')</script>";
                return false;
            }
            $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        
            if ($this->connection->query($query) === true) {
                echo "<script> console.log('User registered successfully')</script>";
                return true;
            } else {
                echo "Error: " . $query . "<br>" . $this->connection->error;
                return false;
            }
        }
        

        function get_anime_list(){
            $query = "SELECT * FROM anime_list ORDER BY vid_id DESC";
            $result = $this->connection->query($query);
            $anime_data = [];

            while ($row = mysqli_fetch_array($result)) {
                $anime_data[] = $row;
            }

            return $anime_data;
        }

        function get_anime_info($id){
            $query = "SELECT * FROM anime_list WHERE vid_id='$id'";
            $result = $this->connection->query($query);
            

            while ($row = mysqli_fetch_array($result)) {
                return $row;
            }

        }

    }
?>