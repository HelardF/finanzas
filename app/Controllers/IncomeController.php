<?php
namespace App\Controllers;

use Database\PDO\Connection;

class IncomeController

{
    protected $connection;
    public function __construct()
    {
        $this->connection = Connection::getInstance()->get_database_instance();
    }
    //muestra la lista de los recursos
    public function index(){
        $stmt = $this->connection->prepare("SELECT * FROM incomes");
        $stmt->execute();
        $incomes = $stmt->fetchAll();
        var_dump($incomes);


    }
    //muestra un formulario para crear un nuevo recurso
    public function create()
    {

    }
    //Guarda un nuevo recurso en la base de datos
    public function store($data){

        $stmt = $this->connection->prepare("INSERT INTO incomes 
                (paymentMethod, type, date, amount, description) 
                VALUES ( :paymentMethod, :type, :date, :amount, :description )"
        );

        $stmt->bindParam(':paymentMethod', $data['paymentMethod']);
        $stmt->bindParam(':type', $data['type']);
        $stmt->bindParam(':date', $data['date']);
        $stmt->bindParam(':amount', $data['amount']);
        $stmt->bindParam(':description', $data['description']);

        $affected_rows =$stmt ->execute($data);
        echo "se han registrado # $affected_rows correctamente";

    }

    //muestra un recurso especificado
    public function show($id)
    {
        $stmt = $this->connection->prepare("SELECT * FROM incomes WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $income = $stmt->fetch();
        echo "se recibio el ingreso de {$income['amount']} por concepto de {$income['description']}";


    }

    //muestra un formulario para modificar un recurso especificado
    public function edit()
    {

    }
    //Actualiza los datos de un recurso especificado
    public function update($data)
    {
        $stmt = $this->connection->prepare("UPDATE incomes SET 
                   paymentMethod = :paymentMethod,
                   type = :type,
                   date = :date,
                   amount = :amount,
                   description = :description
                   Where id = :id");
        $stmt->bindParam(':paymentMethod', $data['paymentMethod']);
        $stmt->bindParam(':type', $data['type']);
        $stmt->bindParam(':date', $data['date']);
        $stmt->bindParam(':amount', $data['amount']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':id', $data['id']);
        $affected_rows =$stmt ->execute($data);
        echo "se han actualizado # $affected_rows correctamente";


    }
    //Elimina de la base de datos el recurso especificado
    public function destroy($id)
    {
        $stmt = $this->connection->prepare("DELETE FROM incomes WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        echo "se elimino # $id";

    }


}