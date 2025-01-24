<?php
namespace App\Controllers;

use Database\PDO\Connection;

class IncomeController

{

    //muestra la lista de los recursos
    public function index(){

    }
    //muestra un formulario para crear un nuevo recurso
    public function create()
    {

    }
    //Guarda un nuevo recurso en la base de datos
    public function store($data){
        $connection = Connection::getInstance()->get_database_instance();

        $stmt = $connection->prepare("INSERT INTO incomes 
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
    public function show()
    {

    }

    //muestra un formulario para modificar un recurso especificado
    public function edit()
    {

    }
    //Actualiza los datos de un recurso especificado
    public function update()
    {

    }
    //Elimina de la base de datos el recurso especificado
    public function destroy()
    {

    }


}