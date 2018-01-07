<?php

namespace User\Model;


class User
{

  protected $id;
  protected $name;
  protected $email;

  public function exchangeArray(array $data)
  {
    $this->id=$data['id'];
    $this->name=$data['name'];
    $this->email=$data['email'];
  }

    public function getId()
    {
        return $this->id;
    }


    public function getName()
    {
      return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

}
