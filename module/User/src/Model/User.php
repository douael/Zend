<?php

namespace User\Model;


class User
{

  protected $id;
  protected $name;

  public function exchangeArray(array $data)
  {
    $this->id=$data['id'];
    $this->name=$data['name'];
  }

    public function getId()
    {
        return $this->id;
    }


    public function getName()
    {
      return $this->name;
    }


}
