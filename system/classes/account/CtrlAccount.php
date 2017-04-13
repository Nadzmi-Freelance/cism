<?php
include_once "Account.php";

class CtrlAccount
{
    private $account;

    // constructor
    public function __construct($account)
    {
        $this->account = $account;
    }

    // getter
    public function getAccount() { return $this->account; }

    // setter
    public function setAccount(Account $account) { $this->account = $account; }

    // other methods
    /**
     * setup session for a user
     *
     * ## Pre-condition:
     *  initialize $conn
     *
     * ## Post-condition:
     *  go to index.php
     *
     * ## Normal flow:
     * 1. search all user in database
     * 2. compare input username and password with all user in db
     * 3. if exist, set session for user account by serializing Account object.
     * 4. else, refer E1
     *
     * ## Exception:
     * E1 - prompt that the user are not registered yet
     */
    public function signIn()
    {
        if($this->searchUserAcc() == null)
            echo "<script> alert('You have not registered yet.'); </script>";
        else
        {
            $accFile = fopen(USER_ACC, "r");
            $accData = fread($accFile, filesize(USER_ACC));
            $accList = json_decode($accData, true);

            foreach($accList["acc-list"] as $acc)
            {
                if($this->account->getUsername() == $acc["username"])
                {
                    if ($this->account->getPassword() == $acc["password"])
                    {
                        $_SESSION["user"] = serialize($this->account);
                        echo "<script> alert('Signed in.'); </script>";
                        break;
                    }
                }
            }

            fclose($accFile);
        }
    }

    /**
     * register a user
     *
     * ## pre-condition:
     *  session == null
     *
     * ## post-condition:
     *  goto index.php
     *
     * ## Normal flow:
     * 1. search all user in db
     * 2. compare input username and password with all user in db
     * 3. if not exist, add current user as new user and save to json file
     * 4. else, refer E1
     *
     * ## Exception:
     * E1 - prompt that the user has already registered
     */
    public function signUp()
    {
        if($this->searchUserAcc() != null)
            echo "<script> alert('User has been registered.'); </script>";
        else
        {
            // read file
            $readAccFile = fopen(USER_ACC, "r");
            $accData = fread($readAccFile, filesize(USER_ACC));
            fclose($readAccFile);

            // process data
            $newAccData = array(
                "username" => $this->account->getUsername(),
                "password" => $this->account->getPassword(),
                "email" => $this->account->getEmail()
            );

            $accList = json_decode($accData, true);
            array_push($accList["acc-list"], $newAccData);
            $encodedJson = json_encode($accList, JSON_PRETTY_PRINT);

            // overwrite file
            $writeAccFile = fopen(USER_ACC, "w");
            fwrite($writeAccFile, $encodedJson . "\n");
            fclose($writeAccFile);

            echo "<script> alert('Registered.'); </script>";
        }
    }

    /**
     * delete current user session
     *
     * ## Pre-condition:
     *  - session != null
     *  - $conn are initialized
     *
     * ## Post-condition:
     *  goto index.php
     *
     * ## Normal flow:
     * 1. destroy current session
     *
     * ## Exception:
     *  -
     */
    public function signOut()
    {
        session_destroy();
        echo "<script> alert('Signed out'); </script>";
    }

    /**
     * search for user account in the list and return it if found
     *
     * @return Account - return the user account object, null if not found
     */
    private function searchUserAcc()
    {
        $accFile = fopen(USER_ACC, "r");
        $accData = fread($accFile, filesize(USER_ACC));
        $accList = json_decode($accData, true);

        foreach($accList["acc-list"] as $acc)
        {
            if($this->account->getUsername() == $acc["username"])
            {
                fclose($accFile);
                return $acc;
            }
        }

        fclose($accFile);

        return null;
    }
}
?>