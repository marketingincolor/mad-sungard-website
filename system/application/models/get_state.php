<?
class Get_state extends Model {

    function Get_state()
    {
        parent::Model();
    }

	function get_dropdown_array($key, $value, $from){
        $result = array();
        $array_keys_values = $this->db->query('select '.$key.', '.$value.' from '.$from.' order by id asc');
       foreach ($array_keys_values->result() as $row)
        {
            $result[$row->$key]= $row->$value;
        }
        return $result;
    } 
    
}