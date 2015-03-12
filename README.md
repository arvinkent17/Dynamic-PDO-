Dynamic PDO Database Class

It is easy, secured and reusable to any website project development that uses PHP programming language.

How to use it?

Just extend your class with database class and use the executeMySQL method

$this->executeMySQL('Query Here', Array Parameter (optional), Search (optional));

Example:

<?php
    Class User extends Database {
  
    /**
     * This will only insert username and password to your database table named User.
     * 
     * Every parameter will be automatically sanitize in the method executeMySQL
     *
     * @param string $username
     * @param string $password
     * @todo you can require security.inc.php to add more security to your inputs
     * @return true or false
     * @access public
     */
    public function addUser($username, $password) {
    
      $this->executeMySQL('INSERT into User (username, password) VALUES (?, ?)', array($username, $password));
      
      if ($this->isInserted()) {
    
        return true;
    
      }  
      else {
      
        return false;
    
      }
      
    }
    
    /**
     * This will only view the list of users in your database table named User.
     * 
     * @return list of users
     * @access public
     */
    public function viewUser() {
        
        $this->executeMySQL('SELECT * FROM User');
        
        if ($this->rowCount() >= 1) {
        
            while ($dataRow = $this->rowFetch()) {
            
                $dataSet[] = $dataRow;
            
            }
            
            return $dataSet;
            
        }
        
    }
  
  }
  
?>
<!-- This will only for insert data to your database table -->
<?php 

    $user = new User();
  
    $insertData = $user->addUser('TEST', 'TEST');
  
    if ($insertData) {
  
      echo "successfully added user";
  
    }
    
?>
<!-- 

This will only for view data from your database table 

The index key inside $userData is the column name from your database table.

-->
<?php

     $user = new User();
     
     $viewData = $user->viewUser();
     
     if ($viewData) {
     
        foreach ($viewData as $userData) {
            
            echo 'User: ' . $userData['username']; 
        
        }
     
     }
     
?>

Note: 

You can use any query either is it Create, Read, Update, Delete, and Search on the method executeMySQL.

Additional Note:

You can download a copy of this because it has already a working examples and all you have to do is to change the server details on config.inc.php.
