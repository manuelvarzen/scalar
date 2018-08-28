<?php
/**
 * Scalar    
 * Copyright 2013 The Alliance for Networking Visual Culture.
 * http://scalar.usc.edu/scalar
 * Alliance4NVC@gmail.com
 *
 * Licensed under the Educational Community License, Version 2.0 
 * (the "License"); you may not use this file except in compliance 
 * with the License. You may obtain a copy of the License at
 * 
 * http://www.osedu.org/licenses/ECL-2.0 
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an "AS IS"
 * BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express
 * or implied. See the License for the specific language governing
 * permissions and limitations under the License.       
 */                            
 
/**
 * @projectDescription		Helpful methods
 * @author					Craig Dietrich
 * @version					1.1
 */

class Resource_model extends CI_Model {

	var $resource_table = 'resources';

    public function __construct() {
    	
        parent::__construct();
        
    }
    
    public function get($field='') {
    	
    	$this->db->select('value');
    	$this->db->from($this->resource_table);
    	$this->db->where('field', $field);
    	$query = $this->db->get();
    	if ($query->num_rows==0) return null;
    	$result = $query->result();
    	return $result[0]->value;
    	
    }
    
}
?>
