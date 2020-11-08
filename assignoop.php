<?php
    class User{
        public $Name;
        public $Username;
        public $Email;

        function __construct($Name, $Username, $Email){
            $this->name = $Name;
            $this->uname = $Username;
            $this->email = $Email;
        }

        function addFriend(){
            echo $this->name," added a friend.";
        }
        function postStatus(){
            echo $this->name," posted a status.";
        }
    }

    $me = new User("Joshua Concepcion", "Molted", "joshuaconcepcion12.jc@gmail.com");
    $me->addFriend();
    echo "<br>";
    $me->postStatus();
?>