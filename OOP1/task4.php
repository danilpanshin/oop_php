<?php 

class User 
{
    public $fio;
    public $email;
    public $gender;
    public $age;
    public $phone;

    public function __construct($fio, $email, $gender = null, $age = null, $phone = null) 
    {
        $this->fio = $fio;         
        $this->email = $email;
        $this->gender = $gender;
        $this->age = $age;
        $this->phone = $phone;    
    }

    private function send($channel, $message) 
    {
        echo "уведомление клиенту: " . $this->fio . "на " . $channel . ":" .  $message; 
    }

    private function notifyOnEmail($message) 
    {
        $this->send("email ", $message);
    }

    private function notifyOnPhone($message)
    {
        $this->send("телефон ", $message);
    }

    private function censor($message)
    {
        return str_replace("здравствуйте", "привет!", $message);         
    }

    public function notify($message) 
    {
        if ($this->age < 18 || ! $this->age) {  
            $message = $this->censor($message);          
        } 

        if ($this->phone) {
            $this->notifyOnPhone($message);
        } 
            
        $this->notifyOnEmail($message);
    }
}

