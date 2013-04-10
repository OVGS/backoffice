<?php

namespace OVGS\SecuredBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuleCategory
 *
 * @ORM\Table(name="module_category")
 * @ORM\Entity
 */
class ModuleCategory
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="module_category", type="string", length=50, nullable=false)
     */
    private $moduleCategory;

    /**
     * @var boolean
     *
     * @ORM\Column(name="priority", type="boolean", nullable=false)
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=20, nullable=true)
     */
    private $icon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_at", type="datetime", nullable=true)
     */
    private $modifiedAt;



    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set moduleCategory
     *
     * @param string $moduleCategory
     * @return ModuleCategory
     */
    public function setModuleCategory($moduleCategory)
    {
        $this->moduleCategory = $moduleCategory;
    
        return $this;
    }

    /**
     * Get moduleCategory
     *
     * @return string 
     */
    public function getModuleCategory()
    {
        return $this->moduleCategory;
    }

    /**
     * Set priority
     *
     * @param boolean $priority
     * @return ModuleCategory
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    
        return $this;
    }

    /**
     * Get priority
     *
     * @return boolean 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return ModuleCategory
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    
        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ModuleCategory
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set modifiedAt
     *
     * @param \DateTime $modifiedAt
     * @return ModuleCategory
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
    
        return $this;
    }

    /**
     * Get modifiedAt
     *
     * @return \DateTime 
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }
}