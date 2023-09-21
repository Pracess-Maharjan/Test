<?php  
class a  
    {  
        function fun1()  
        {  
            echo "pracess";  
        }  
    }  
    class b extends a  
    {  
        /**
         * Summary of fun2
         * @return void
         */
        function fun2()  
        {  
            echo "SSSIT";  
        }  
    }  
    $obj= new b();  
    $obj->fun1();  
?>  