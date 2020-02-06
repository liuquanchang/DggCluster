<?php


namespace Cluster\lio\Annotation\Mapping;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Doctrine\Common\Annotations\Annotation\Required;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * @Annotation()
 * @Target({"CLASS"})
 * @Attributes({
 *   @Attribute(name="prefix",type="string"),
 *   @Attribute(name="unique",type="string")
 *  })
 * Class WsRelation
 * @package Cluster\lio\Annotation\Mapping
 */
class WsRelation
{
    /**
     * @Required()
     * @var string
     */
    public $prefix;

    /**
     * @Required()
     * @var string
     */
    public $unique;

    public function __construct(array $values)
    {
        //定义注解获取到值
        if(isset($values['value'])){
            $this->prefix=$values['value'];
        }elseif (isset($values['prefix'])){
            $this->prefix=$values['prefix'];
        }

        if(isset($values['unique'])){
            $this->unique=$values;
        }
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }

    /**
     * @param string $unique
     */
    public function setUnique(string $unique): void
    {
        $this->unique = $unique;
    }

}