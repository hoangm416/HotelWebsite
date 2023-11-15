<?php 
    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'hotelwebsite';

    $con = mysqli_connect($hname, $uname, $pass, $db);

    if(!$con) 
    {
        die("Không thể kết nối tới database".mysqli_connect_error());
    }

    function filteration($data)
    {
        foreach($data as $key => $value)
        {
            $data[$key] = trim($value);
            $data[$key] = stripcslashes($value);
            $data[$key] = htmlspecialchars($value);
            $data[$key] = strip_tags($value);
        }
        return $data;
    }

    function select($sql, $values, $datatypes)
    {
        $con = $GLOBALS['con'];
        if ($statement = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($statement, $datatypes, ...$values);
            if (mysqli_stmt_execute($statement)) {
                $res = mysqli_stmt_get_result($statement);
                mysqli_stmt_close($statement);
                return $res;
            }
            else {
                mysqli_stmt_close($statement);
                die("Câu truy vấn select không thực hiện được");
            }
        }
        else {
            die("Câu truy vấn select không thực hiện được");
        }
    }
?>