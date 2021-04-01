<?php
include_once 'account.php';
    class User implements Account{
        //properties 
        protected $fullName;
        protected $email;        
        protected $city;
        protected $image;
        protected $password; 
    
        //setters and getters
        public function setFullName ($fullName){     
            $this->fullName = $fullName; 
        }      
        public function getFullName (){  
            return $this->fullName;      
        }    

        public function setMail ($email){     
            $this->email = $email; 
        }      
        public function getMail (){  
            return $this->email;      
        }    

        public function setCity ($city){     
            $this->city = $city; 
        }      
        public function getCity (){  
            return $this->city;      
        }    

        public function setImage ($image){     
            $this->image = $image; 
        }         
        public function getImage (){  
            return $this->image;      
        }       

        public function setPassword ($password){     
            $this->password = $password; 
        }      
        public function getPassword (){  
            return $this->password;      
        }    

        public function setNewPassword ($Password){     
            $this->newPassword = password_hash($Password,PASSWORD_DEFAULT); 
        }      
        public function getNewPassword (){  
            return $this->newPassword;      
        }   
           
        //implement methods in account interface
        public function register($pdo){
            $passwordHash = password_hash($this->password,PASSWORD_DEFAULT);  
            $sql = 'INSERT INTO users (fullName,email,city,image,password) VALUES(?,?,?,?,?)';
            $data = array($this->getFullName(), $this->getMail(), $this->getCity(), $this->getImage(), $passwordHash);
            $stmt = $pdo->prepare($sql);  
            try {
                 $stmt-> execute($data);
                 echo "Registration was successful";            
            } catch (PDOException $e) { 
                 return $e->getMessage(); 
            } 
        }     
        public function login ($pdo){ 
            try{
                $sql = 'SELECT * FROM users WHERE email=?';
                $data = array($this->getMail());
                $stmt = $pdo->prepare ($sql);
                $stmt-> execute($data);
                $row = $stmt->fetch();     
                if($row == null){ 
                    echo "This account does not exist";  
                } 
                else if (password_verify($this->password,$row['password'])){
                    header('location: userDetails.php');   
                }else{
                    //echo "Your username or password is not correct";
                    echo '<script>alert("Your username or password is not correct")</script>'; 
                    echo '<script>window.location="forms.php"</script>';
                }                 
            } catch (PDOException $e) {
                return $e->getMessage();       
            }        
        } 
        
        public function changePassword ($pdo){
            try{
                $sql = 'SELECT * FROM users WHERE userId = ?';
                $data = array($_SESSION['id']);
                $stmt = $pdo-> prepare($sql);
                $stmt ->execute($data);
                $row = $stmt -> fetch();
                if(!$row){
                    echo "Account does not exist";
                    return false;
                }else{
                    if(password_verify($this->getPassword(),$row['password'])){
                        try{
                            $updateSql = 'UPDATE users SET password = ? WHERE userId = ?';
                            $updateData = array($this -> newPassword, $_SESSION['id']);
                            $updateStmt = $pdo -> prepare($updateSql);
                            $updateStmt -> execute($updateData);
                            echo '<script>alert("Password Changed. Log in to access your account")</script>'; 
                            echo '<script>window.location="forms.php"</script>';
                        }catch(PDOException $e){
                            return $e->getMessage();
                        }
                    }else{
                        echo "Password does not match password in the database";
                    }           
                }
            }catch(Exception $e){
                echo $e;
            }
        }
        public function logout ($pdo){
            session_destroy();
            unset($_SESSION['id']);
            header("location: forms.php");
        }
    }
?>
