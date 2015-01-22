<?php

namespace TQ\QueryBuilderBundle\Filter;

use TQ\QueryBuilderBundle\Filter\GeoPoint;

class GeoBounding {
    
    /**
     *
     * @var \TQ\QueryBuilderBundle\Filter\GeoPoint 
     */
    protected $topLeft = null;
    
    /**
     *
     * @var \TQ\QueryBuilderBundle\Filter\GeoPoint 
     */
    protected $bottomRigth = null;
    
    /**
     *
     * @var string
     */
    protected $field;
    
    public function __construct($field = null, GeoPoint $topLeft = null, GeoPoint $bottomRigth = null) {
        if ($field !== null) {
            $this->setField($field);
        }
        if ($topLeft !== null) {
            $this->setTopLeft($topLeft);
        }
        if ($bottomRigth !== null) {
            $this->setBottomRigth($bottomRigth);
        }
    }
    
    public function updateFromArray(array $array) {
        $this->setField(key($array)); 
        foreach($array[$this->getField()] as $point) {
            $geoPoing = new GeoPoint();
            $geoPoing->updateFromArray($point);
            if ($this->getTopLeft() === null) {
                $this->setTopLeft($geoPoing);
            }
            else {
                $this->setBottomRigth($geoPoing);
            }
        }
    }
    /**
     * 
     * @return \TQ\QueryBuilderBundle\Filter\GeoPoint
     */
    public function getTopLeft() {
        return $this->topLeft;
    }

    /**
     * 
     * @return \TQ\QueryBuilderBundle\Filter\GeoPoint
     */
    public function getBottomRigth() {
        return $this->bottomRigth;
    }

    public function setTopLeft(GeoPoint $topLeft) {
        $this->topLeft = $topLeft;
    }

    public function setBottomRigth(GeoPoint $bottomRigth) {
        $this->bottomRigth = $bottomRigth;
    }
    
    public function getField() {
        return $this->field;
    }

    public function setField($field) {
        $this->field = $field;
    }
    
    

}
