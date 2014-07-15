<?php


class Department {
    private $code;
    private $name;
    private $student_list;
    private $MAX_NO_OF_STUDENTS = 5;
    
    function __construct($code, $name) {
        $this->code = $code;
        $this->name = $name;
        $this->student_list = array();
    }

    public function get_code() {
        return $this->code;
    }

    public function get_name() {
        return $this->name;
    }
    
    public function get_no_of_students() {
        return count($this->student_list);
    }
    
    public function get_all_students()
    {
        return $this->student_list;
    }

    public function add_student($a_student)
    {
        
        if (count($this->student_list) < $this->MAX_NO_OF_STUDENTS)
            {
                
                foreach ($this->student_list as $student)
                {
                    if($a_student->get_reg_no() == $student->get_reg_no())
                    {
                        //echo $student->update_student($a_student);
                        $student->set_reg_no($a_student->get_reg_no());
                        $student->set_email($a_student->get_email());
                        $student->set_name($a_student->get_name());
                        return "Data Updated";  
                    }

                }
                $this->student_list[] = $a_student;
                return 'Student added';
            }
        else
        {
            return 'No vacancy';
        }
            
    }
    
    public function update_student($a_student)
    {
        foreach ($this->student_list as $student)
        {
            $student->reg_no = $a_student->reg_no;
            $student->email = $a_student->email;
            $student->name = $a_student->name;
            
        }
        return "Data Updated";         
    }




}
