<?php

namespace OVGS\SecuredBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity
 */
class Module
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=50, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=20, nullable=false)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="tool_tip", type="string", length=100, nullable=false)
     */
    private $toolTip;

    /**
     * @var boolean
     *
     * @ORM\Column(name="shortcut", type="boolean", nullable=true)
     */
    private $shortcut;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="module")
     * @ORM\JoinTable(name="module_role",
     *   joinColumns={
     *     @ORM\JoinColumn(name="module_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     *   }
     * )
     */
    private $role;

    /**
     * @var \ModuleCategory
     *
     * @ORM\ManyToOne(targetEntity="ModuleCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="module_category_id", referencedColumnName="id")
     * })
     */
    private $moduleCategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

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
     * Set module
     *
     * @param string $module
     * @return Module
     */
    public function setModule($module)
    {
        $this->module = $module;
    
        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Module
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return Module
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
     * Set toolTip
     *
     * @param string $toolTip
     * @return Module
     */
    public function setToolTip($toolTip)
    {
        $this->toolTip = $toolTip;
    
        return $this;
    }

    /**
     * Get toolTip
     *
     * @return string 
     */
    public function getToolTip()
    {
        return $this->toolTip;
    }

    /**
     * Set shortcut
     *
     * @param boolean $shortcut
     * @return Module
     */
    public function setShortcut($shortcut)
    {
        $this->shortcut = $shortcut;
    
        return $this;
    }

    /**
     * Get shortcut
     *
     * @return boolean 
     */
    public function getShortcut()
    {
        return $this->shortcut;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Module
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
     * @return Module
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

    /**
     * Add role
     *
     * @param \OVGS\SecuredBundle\Entity\Role $role
     * @return Module
     */
    public function addRole(\OVGS\SecuredBundle\Entity\Role $role)
    {
        $this->role[] = $role;
    
        return $this;
    }

    /**
     * Remove role
     *
     * @param \OVGS\SecuredBundle\Entity\Role $role
     */
    public function removeRole(\OVGS\SecuredBundle\Entity\Role $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set moduleCategory
     *
     * @param \OVGS\SecuredBundle\Entity\ModuleCategory $moduleCategory
     * @return Module
     */
    public function setModuleCategory(\OVGS\SecuredBundle\Entity\ModuleCategory $moduleCategory = null)
    {
        $this->moduleCategory = $moduleCategory;
    
        return $this;
    }

    /**
     * Get moduleCategory
     *
     * @return \OVGS\SecuredBundle\Entity\ModuleCategory 
     */
    public function getModuleCategory()
    {
        return $this->moduleCategory;
    }
}