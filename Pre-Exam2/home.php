<html>
    <head>
        <title>Pre exam</title>
    </head>
    <body>
        <?php
           $SERVER = "localhost";
           $USER = "root";
           $PASS = "funky";
           $DB = "employees";
           $CONNECT = mysqli_connect($SERVER, $USER, $PASS, $DB);
        ?>
                <?php
                    
                    $sqlConsulta_Employees = ("SELECT * FROM employees;");
                    $sqlResultado_Employees = mysqli_query($CONNECT, $sqlConsulta_Employees);
                    $listaEmployees = [];

                    while($sqlDatos_Employees = mysqli_fetch_assoc($sqlResultado_Employees))
                    {
                        $employees_birthdate = $sqlDatos_Employees["birth_date"];
                        $employees_firstname = $sqlDatos_Employees["first_name"];
                        $employees_lastname = $sqlDatos_Employees["last_name"];
                        $employees_gender = $sqlDatos_Employees["gender"];
                        $employees_hiredate = $sqlDatos_Employees["hire_date"];
                        array_push($listaEmployees, $employees_birthdate);
                        array_push($listaEmployees, $employees_firstname);
                        array_push($listaEmployees, $employees_lastname);
                        array_push($listaEmployees, $employees_gender);
                        array_push($listaEmployees, $employees_hiredate);
                    }
                    print_r($listaEmployees[0]);
                    
                    
                ?>

    </body>
</html>