<?php
    class Student{
        public $name;
        public $surname;
        public $age;
        public $classes;
        public function printStudent(){
            echo "<td>".$this->name."</td>";
            echo "<td>".$this->surname."</td>";
            echo "<td>".$this->age."</td>";
            echo "<td>".$this->classes."</td>";
        }
    }
    
    $Nigar= new Student;
    $Nigar->name="Nigar";
    $Nigar->surname="Jafar";
    $Nigar->age=19;
    $Nigar->classes="Morning Class";

    $Memmed= new Student;
    $Memmed->name="Memmed";
    $Memmed->surname="Memmedli";
    $Memmed->age=19;
    $Memmed->classes="Morning Class";
    
    $students=[$Nigar,$Memmed];
?>
<!DOCTYPE>
<html> 
    <head></head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                <th>Class</th>
            </tr>
            <?php for($i=0;$i<count($students);$i++){ ?>
            <tr>
              <?php $students[$i]->printStudent(); ?>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>