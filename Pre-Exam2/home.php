<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
           include 'connect.php';
        ?>
                <?php
                    $listaEmployees = [];
                    $sqlConsulta_Employees = ("SELECT * FROM employees;");
                    $sqlResultado_Employees = mysqli_query($CONNECT, $sqlConsulta_Employees);
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
            <h2>Formulario</h2>
            <form method="post" action="dades.php">
                <label>Empleado:</label>
                <?php
                   
                ?>
            </form>
        <?php
            
        ?>
    </body>
</html>