<?php

namespace User\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

class UserTable
{

  protected $tableGateway;

  public function __construct(TableGatewayInterface $tableGateway)
  {
    $this->tableGateway = $tableGateway;
  }


  public function fetchAll(){
    return  $this->tableGateway->select();

  }

  public function saveUser(User $user){

    $data = [
      'name' => $user->getName(),
      'email' => $user->getEmail()

    ];
    return  $this->tableGateway->insert($data);

  }
}
