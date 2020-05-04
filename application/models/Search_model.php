<?php 

class Search_model extends CI_Model
{
    public function __construct(){
        parent::__construct();


        $this->load->database(); // load database

    }

    

    public function getTypeByProvinceId($provinceId,$type)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_member'); 
        $this->db->where('provinceId',$provinceId);
        $this->db->where('type',$type);
        $query = $this->db->get();
        $result = $query->result();

        $output = '';

        $i = 0;
        foreach($query->result() as $row){
            $index = $i +1;
            if($index < 4){
                $output = ' <div class="container">';
                $output .= '    <div class="row text-center mt-3">';
                $output .= '        <div class="col-md-3 col-sm-6">';
                $output .= '            <div class="team wow slideInLeft">';
                $output .= '                <div>';
                $output .= '                    <img style="width:260px;height:260px;" src="<?php echo base_url(); ?>/assets/images/'.$type.'/'.$row->username.'.jpg" alt="">';
                $output .= '                    <span class="img-top"></span>';
                $output .= '                    <span class="img-bottom"></span>';
                $output .= '                </div> ';
                $output .= '                <div class="team-content">';
                $output .= '                    <h3>Vosgi Varduhi</h3>';
                $output .= '                    <p>Trainer</p>';
                $output .= '                    <div class="team-social">';

                if($row->facebook != null){
                    $output .= '                       <a class="fb" href="'.$row->facebook.'"><i class="fa fa-facebook"></i></i></a>';
                }
                
                if($row->line != null){
                    $output .= '                       <a class="linkdin" href="#"><i class="fab fa-line"></i></a> ';
                }

                if($row->telephone != null){
                    $output .= '                       <a class="fb" href="tel:'.$row->telephone.'"><i class="fa fa-phone"></i></a>'; 
                }
                 
                $output .= '                    </div> ';
                $output .= '                </div> ';
                $output .= '            </div> ';
                $output .= '        </div> ';
                $output .= '    </div> ';
                $output .= '</div> ';

            }else{
                $i = 0;
            }

        }
 
        return $output;
    }
   
					
						
							 

    public function getTypeByAmphuresId($amphureId,$type)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_member'); 
        $this->db->where('amphureId',$amphureId);
        $this->db->where('type',$type);
        $query = $this->db->get();
        $result = $query->result();
 
        return $result;
    }

    public function getTypeByDistrictId($districtId,$type)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_member'); 
        $this->db->where('districtId',$districtId);
        $this->db->where('type',$type);
        $query = $this->db->get();
        $result = $query->result();
 
        return $result;
    }



    public function getAmphures($provinceId)
    {
        $this->db->where('province_id',$provinceId);
        $this->db->order_by('name_th','ASC');
        $query = $this->db->get('amphures');
        
        $output = '<option value="" >เลือกอำเภอ</option>';
        
        foreach($query->result() as $row){
            $output .= '<option value="' .$row->id.'">'.$row->name_th.'</option>';
        }
 
        return $output;
    }

    public function getAmphuresById($amphureId)
    {
        $this->db->select('*');
        $this->db->from('tbl_amphures'); 
        $this->db->where('id',$amphureId);
        $query = $this->db->get();
        $result = $query->result();


        return $result;
    }

    public function getDistrict($amphureId)
    {
        $this->db->where('amphure_id',$amphureId);
        $this->db->order_by('name_th','ASC');
        $query = $this->db->get('districts');
        
        $output = '<option value="" >เลือกตำบล</option>';
        
        foreach($query->result() as $row){
            $output .= '<option value="' .$row->id.'">'.$row->name_th.'</option>';
        }

 

        return $output;
    }

    public function getDistrictById($districtId)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_districts'); 
        $this->db->where('id',$districtId);
        $query = $this->db->get();
        $result = $query->result();


        return $result;
    }

    public function getAllTrainner()
    {
        $this->db->select('*'); 
        $this->db->from('tbl_member');  
        $this->db->where('type','trainner');
        $query = $this->db->get();
        $result = $query->result();

        $output = array();
        $i = 0;
        $arrIndex = 0;
        foreach($query->result() as $row){ 
            $i++;
            if($i <= 4){ 
               // echo $row->member_id;
                $output[$arrIndex][$i] = $row; 
                
            }else{
                $arrIndex = $arrIndex+1;
                $i = 0;
                $output[$arrIndex][$i] = $row;
            } 
        }

        // foreach($output as $row){ 
        //     echo $row[3]->member_id;
        // }

        return $output;
    }


    public function getAllFitness()
    {
        $this->db->select('*'); 
        $this->db->from('tbl_member');  
        $this->db->where('type','fitness');
        $query = $this->db->get();
        $result = $query->result();

        $output = array();
        $i = 0;
        $arrIndex = 0;
        foreach($query->result() as $row){ 
            $i++;
            if($i <= 4){ 
               // echo $row->member_id;
                $output[$arrIndex][$i] = $row; 
                
            }else{
                $arrIndex = $arrIndex+1;
                $i = 0;
                $output[$arrIndex][$i] = $row;
            } 
        } 
        return $output;
    }

    public function getPortfolioById($id)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_img_portfolio'); 
        $this->db->where('member_id',$id);
        $query = $this->db->get();
        $result = $query->result();


        return $result;
    }

    public function searchMemberByProvinceId($provinceId,$type)
    {
        
        $this->db->select('*'); 
        $this->db->from('tbl_member');  
        $this->db->where('type',$type);

        if($provinceId != 0){
            $this->db->where('provinceId',$provinceId);
        }
       
        $query = $this->db->get();
        $result = $query->result();

        $output = array();
        $i = 0;
        $arrIndex = 0;
        foreach($query->result() as $row){ 
           
            if($i < 4){ 
               // echo $row->member_id;
                $output[$arrIndex][$i] = $row; 
                
            }else{
                $arrIndex = $arrIndex+1;
                $i = 0;
                $output[$arrIndex][$i] = $row;
            } 

            $i++;
        }
 
        return $output; 
    }

    public function searchMemberByAmphureId($amphureId,$type)
    {
        print_r($amphureId);
        $this->db->select('*'); 
        $this->db->from('tbl_member');  
        $this->db->where('type',$type);
        $this->db->where('amphureId',$amphureId);
       
        $query = $this->db->get();
        $result = $query->result();

        $output = array();
        $i = 0;
        $arrIndex = 0;
        foreach($query->result() as $row){ 
           
            if($i < 4){ 
               // echo $row->member_id;
                $output[$arrIndex][$i] = $row; 
                
            }else{
                $arrIndex = $arrIndex+1;
                $i = 0;
                $output[$arrIndex][$i] = $row;
            } 

            $i++;
        }
 
 
        return $output; 
    }

    public function searchMemberByDistrictId($districtId,$type)
    {
        $this->db->select('*'); 
        $this->db->from('tbl_member');  
        $this->db->where('type',$type);
        $this->db->where('districtId',$districtId);

        $query = $this->db->get();
        $result = $query->result();

        $output = array();
        $i = 0;
        $arrIndex = 0;
        foreach($query->result() as $row){ 
           
            if($i < 4){ 
               // echo $row->member_id;
                $output[$arrIndex][$i] = $row; 
                
            }else{
                $arrIndex = $arrIndex+1;
                $i = 0;
                $output[$arrIndex][$i] = $row;
            } 

            $i++;
        }
 
 
        return $output; 
    }

}
