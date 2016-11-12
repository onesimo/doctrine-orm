<?php

namespace App\Entity;

/**
 * @Entity 
 * @Table(name="categories")
 */
class Category
{
    /** 
     *@Id
     *@Column(type="integer")
     *@GeneratedValue(strategy="AUTO") 
     */
    private $id;
    
    /**
     *@Column(type="string", length=100)
     */
    private $name;
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    
}