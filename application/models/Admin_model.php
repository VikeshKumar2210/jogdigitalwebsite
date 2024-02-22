<?php

Class Admin_model extends CI_Model {

	public function insert_data($tablename,$data) 
	{
		if($this->db->insert($tablename,$data))
		{
           $insert_id = $this->db->insert_id();
           return  $insert_id;
        }
        else
        {
            return false;
        }
	}
	public function update_data($tablename,$condition,$data)
	{
		$this->db->where($condition);
        if($this->db->update($tablename,$data))
        {
            return true;
        }
        else
        {
            return false;
        }
	
	}
	public function delete_data($tablename,$condition)
	{
		 $this->db->where($condition);
    	if(count($this->db->get($tablename)->result())>0)
    	{
    	    $this->db->where($condition);
		    $this->db->delete($tablename);
		    return true;
    	}
    	else
	    {
	        return false;
	    }
	}
    public function update_password($tablename,$data)
    {
        if($this->db->update($tablename,$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    
    }



}