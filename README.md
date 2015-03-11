Dynamic PDO Database Class

It is easy, secured and reusable to any website projects development that uses PHP programming language.

How to use it?

Just extend your class with database class and use executeMySQL method

$this->executeMySQL("Query Here", Array Parameter (optional), Search (optional));

Example:
require_once 'security.inc.php';
Class User extends Database {

public function addUser($username, $password) {

  $this->executeMySQL("INSERT into User (username, password) VALUES (?, ?)", array(protectData($username), protectData($password)));

  if ($this->isInserted()) {

    return true;

  }  

}
