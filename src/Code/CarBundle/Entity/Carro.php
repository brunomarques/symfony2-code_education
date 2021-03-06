<?php

namespace Code\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Code\CarBundle\Entity\CarroRepository")
 */

class Carro {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=255)
     */
    private $modelo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fabricante", type="integer")
     */
    private $fabricante;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano", type="integer", length=4)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="cor", type="string", length=60)
     */
    private $cor;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Carro
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set fabricante
     *
     * @param integer $fabricante
     * @return Carro
     */
    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get fabricante
     *
     * @return integer 
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return Carro
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set cor
     *
     * @param string $cor
     * @return Carro
     */
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get cor
     *
     * @return string 
     */
    public function getCor()
    {
        return $this->cor;
    }
}
