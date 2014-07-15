<?php
class Department {
    private $code;
    private $name;
    private $student_list;
    private $MAX_NO_OF_STUDENTS = 5;
    
    public function __construct($code, $name) {
        $this->name = $name;
        $this->code = $code;
        $this->student_list = array();
    }
    
    public function add_student($student)
    {
        
        $department = $_SESSION['department'];
        foreach ($department->get_all_students() as $a_student)
            {                
                if($a_student->get_reg_no() == $student->get_reg_no())
                {
                    return 'Already Added';
                    break;            
                }
            }
        if (count($this->student_list) < $this->MAX_NO_OF_STUDENTS)
            {
            
                $this->student_list[] = $student;
                return 'Student added';
            }
        else
        {
            return 'No vacancy';
        }
            
    }
            
    function get_name()
    {
        return $this->name;
    }
    
    function get_code()
    {
        return $this->code;
    }

    public function get_no_of_students() {
        return count($this->student_list);
    }
    
    public function get_all_students()
    {
        return $this->student_list;
    }

}
?>
