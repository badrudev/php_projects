<?php
namespace ChatApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface{
    protected $clients;
    protected $activeUsers=array();
    function __construct(){
        $this->clients = new \SplObjectStorage;
        echo "Server Started \n";
    }
    // Called when the socket is opened
    public function onOpen(ConnectionInterface $conn){
        $this->clients->attach($conn);
        echo "New Connection : ID : ({$conn->resourceId})\n";
    }
    // Called when the message is sent
    public function onMessage(ConnectionInterface $from, $msg){
      
        try{
            $numRecv = count($this->clients) - 1;
            echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n",
                $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');
    
            foreach ($this->clients as $client) {
                if ($from !== $client) {
                    // Send message to all clients except the sender
                    $client->send($msg);
                }
            }
        }catch(Exception $e){
            print_r("err : ",$e->getMessage());
        }
        
    }

    public function onClose(ConnectionInterface $conn){
        $this->clients->detach($conn);
        // unset($this->activeUsers[$conn->resourceId]);
        echo "User {$conn->resourceId} has disconnected\n";
    }
    public function onError(ConnectionInterface $conn, \Exception $e){
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }
}