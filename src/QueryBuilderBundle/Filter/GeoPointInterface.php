<?php

namespace O2\QueryBuilder\Filter;

interface GeoPointInterface {
    
    public function getLat();
    
    public function setLat($lat);
    
    public function getLon();
    
    public function setLon($lon);
    
}