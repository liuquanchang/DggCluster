<?php


namespace Cluster\lio\Annotation\Mapping;

use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Doctrine\Common\Annotations\Annotation\Required;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * @Annotation()
 * @Target({"METHOD"})
 * @Attributes({
 *     @Attribute(name="topic",type="string"),
 *     @Attribute(name="number",type="int"),
 *     @Attribute(name="health",type="bool")
 *})
 * Class WsCluster
 * @package Cluster\lio\Annotation\Mapping
 */
class WsCluster
{
    /**
     * @Required()
     * @var string
     */
    public $topic;


    /**
     * @var int
     */
    public $number=2;

    /**
     * @var bool
     */
    public $health=true;

    public function __construct(array $values)
    {
        if(isset($values['value'])){
            $this->topic=$values['value'];
        }elseif (isset($values['topic'])){
            $this->topic=$values['topic'];
        }
        if(isset($values['number'])){
            $this->number=$values['number'];
        }
        if(isset($values['health'])){
            $this->health=$values['health'];
        }
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return bool
     */
    public function isHealth(): bool
    {
        return $this->health;
    }

    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }
}