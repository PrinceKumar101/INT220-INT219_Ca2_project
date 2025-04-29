<?php
include_once __DIR__ . "/../includes/header.php";
include_once __DIR__ . "/../includes/utility_function.php";
include_once __DIR__ . "/../database/db_connect.php";


use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface
{
    protected $clients;
    public $db_conn;

    public function __construct($database_connection)
    {
        $this->clients = new \SplObjectStorage;
        $this->db_conn = $database_connection;
    }

    public function fetch_previous_messages()
    {
        echo "fetched method called";
        $db_conn = $this->db_conn;
        $query = "SELECT * FROM message ORDER BY id ASC";

        $result = mysqli_query($db_conn, $query);
        if (!$result) {
            $data = [
                "status" => false,
            ];
            return json_encode($data);
        }

        $messages = mysqli_fetch_all($result);
        if (!$messages) {
            $data = [
                "status" => false,
            ];
            return json_encode($data);
        }
        $data = [
            "status" => true,
            "prev_messages" => $messages,
        ];
        return json_encode($data);
    }

    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        $previous_message = $this->fetch_previous_messages();
        $conn->send($previous_message);
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        $data = json_decode($msg, true);
        var_dump($data);

        if ($data["user_name"] != null || $data["user_name"] != "") {
            $user_name = $data["user_name"];
            $user_role = $data["user_role"];
            $user_id = $data["user_id"];
            $message = $data["message"];
            $stmt = $this->db_conn->prepare("INSERT INTO message (user_name, message, role, user_id) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sssi", $user_name, $message, $user_role, $user_id);
            $result = $stmt->execute();
            if (!$result) echo "Error saving message.";
            $stmt->close();
        }


        foreach ($this->clients as $client) {
            if ($from !== $client) {
                $client->send($msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        $conn->close();
    }
}

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

$server = IoServer::factory(
    new HttpServer(new WsServer(new Chat($conn))),
    8080
);


echo "WebSocket Server Started on port 8080\n";
$server->run();
