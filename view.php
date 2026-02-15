<?php
include("connection.php");

// Get category and function from URL
$category = $_GET['category'] ?? '';
$func = $_GET['func'] ?? '';

$sql = '';
$columns = [];

// ---------------- STRING FUNCTIONS ----------------
if ($category == 'string') {
    switch($func){
        case 'ASCII':
            $sql = "SELECT name, ASCII(name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'CHAR_LENGTH':
            $sql = "SELECT name, CHAR_LENGTH(name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'CHARACTER_LENGTH':
            $sql = "SELECT name, CHARACTER_LENGTH(name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'CONCAT':
            $sql = "SELECT CONCAT(name,' - ',department) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'CONCAT_WS':
            $sql = "SELECT CONCAT_WS(' | ',name,department) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'FIELD':
            $sql = "SELECT name, FIELD(department,'HR','Sales','IT') AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'FIND_IN_SET':
            $sql = "SELECT name, FIND_IN_SET(department,'HR,IT,Sales') AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'FORMAT':
            $sql = "SELECT name, FORMAT(salary,2) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'INSERT':
            $sql = "SELECT name, INSERT(name,2,3,'XYZ') AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'INSTR':
            $sql = "SELECT name, INSTR(name,'a') AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'LCASE':
            $sql = "SELECT name, LCASE(name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'LEFT':
            $sql = "SELECT name, LEFT(name,4) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'LENGTH':
            $sql = "SELECT name, LENGTH(name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'LOCATE':
            $sql = "SELECT name, LOCATE('a',name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'LOWER':
            $sql = "SELECT name, LOWER(name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'LPAD':
            $sql = "SELECT name, LPAD(name,10,'*') AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'LTRIM':
            $sql = "SELECT remarks, LTRIM(remarks) AS result FROM employees";
            $columns = ['remarks','result'];
            break;
        case 'MID':
            $sql = "SELECT name, MID(name,2,3) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'POSITION':
            $sql = "SELECT name, POSITION('a' IN name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'REPEAT':
            $sql = "SELECT name, REPEAT(name,2) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'REPLACE':
            $sql = "SELECT name, REPLACE(name,'a','@') AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'REVERSE':
            $sql = "SELECT name, REVERSE(name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'RIGHT':
            $sql = "SELECT name, RIGHT(name,4) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'RPAD':
            $sql = "SELECT name, RPAD(name,10,'*') AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'RTRIM':
            $sql = "SELECT remarks, RTRIM(remarks) AS result FROM employees";
            $columns = ['remarks','result'];
            break;
        case 'SPACE':
            $sql = "SELECT CONCAT(name,SPACE(5),'X') AS result FROM employees";
            $columns = ['result'];
            break;
        case 'STRCMP':
            $sql = "SELECT name, STRCMP(name,'Alice') AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'SUBSTR':
            $sql = "SELECT name, SUBSTR(name,2,3) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'SUBSTRING':
            $sql = "SELECT name, SUBSTRING(name,2,4) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'SUBSTRING_INDEX':
            $sql = "SELECT name, SUBSTRING_INDEX(name,' ',1) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'TRIM':
            $sql = "SELECT remarks, TRIM(remarks) AS result FROM employees";
            $columns = ['remarks','result'];
            break;
        case 'UCASE':
            $sql = "SELECT name, UCASE(name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'UPPER':
            $sql = "SELECT name, UPPER(name) AS result FROM employees";
            $columns = ['name','result'];
            break;
        default:
            echo "Invalid function!";
            exit;
    }
}


// ---------------- NUMERIC FUNCTIONS ----------------
elseif ($category == 'numeric') {
    switch($func){
        case 'ABS':
            $sql = "SELECT salary, ABS(salary-40000) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'ACOS':
            $sql = "SELECT ACOS(0.5) AS result";
            $columns = ['result'];
            break;
        case 'ASIN':
            $sql = "SELECT ASIN(0.5) AS result";
            $columns = ['result'];
            break;
        case 'ATAN':
            $sql = "SELECT ATAN(1) AS result";
            $columns = ['result'];
            break;
        case 'ATAN2':
            $sql = "SELECT ATAN2(1,1) AS result";
            $columns = ['result'];
            break;
        case 'AVG':
            $sql = "SELECT AVG(salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'CEIL':
            $sql = "SELECT salary, CEIL(salary) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'CEILING':
            $sql = "SELECT salary, CEILING(salary) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'COS':
            $sql = "SELECT COS(0.5) AS result";
            $columns = ['result'];
            break;
        case 'COT':
            $sql = "SELECT COT(0.5) AS result";
            $columns = ['result'];
            break;
        case 'COUNT':
            $sql = "SELECT COUNT(*) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'DEGREES':
            $sql = "SELECT DEGREES(PI()/2) AS result";
            $columns = ['result'];
            break;
        case 'DIV':
            $sql = "SELECT salary, salary DIV 1000 AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'EXP':
            $sql = "SELECT EXP(1) AS result";
            $columns = ['result'];
            break;
        case 'FLOOR':
            $sql = "SELECT salary, FLOOR(salary) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'GREATEST':
            $sql = "SELECT salary, GREATEST(salary,1000,2000) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'LEAST':
            $sql = "SELECT salary, LEAST(salary,1000,2000) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'LN':
            $sql = "SELECT LN(salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'LOG':
            $sql = "SELECT LOG(salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'LOG10':
            $sql = "SELECT LOG10(salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'LOG2':
            $sql = "SELECT LOG2(salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'MAX':
            $sql = "SELECT MAX(salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'MIN':
            $sql = "SELECT MIN(salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'MOD':
            $sql = "SELECT salary, MOD(salary,5000) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'PI':
            $sql = "SELECT PI() AS result";
            $columns = ['result'];
            break;
        case 'POW':
            $sql = "SELECT salary, POW(salary,2) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'POWER':
            $sql = "SELECT salary, POWER(salary/10000,2) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'RADIANS':
            $sql = "SELECT RADIANS(180) AS result";
            $columns = ['result'];
            break;
        case 'RAND':
            $sql = "SELECT RAND() AS result";
            $columns = ['result'];
            break;
        case 'ROUND':
            $sql = "SELECT salary, ROUND(salary,0) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        case 'SIGN':
            $sql = "SELECT SIGN(salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'SIN':
            $sql = "SELECT SIN(0.5) AS result";
            $columns = ['result'];
            break;
        case 'SQRT':
            $sql = "SELECT SQRT(salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'SUM':
            $sql = "SELECT SUM(salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'TAN':
            $sql = "SELECT TAN(0.5) AS result";
            $columns = ['result'];
            break;
        case 'TRUNCATE':
            $sql = "SELECT salary, TRUNCATE(salary,0) AS result FROM employees";
            $columns = ['salary','result'];
            break;
        default:
            echo "Invalid function!";
            exit;
    }
}

// ---------------- DATE FUNCTIONS ----------------
elseif ($category == 'date') {
    switch($func){
        case 'ADDDATE':
            $sql = "SELECT hire_date, ADDDATE(hire_date, INTERVAL 10 DAY) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'ADDTIME':
            $sql = "SELECT ADDTIME('12:00:00','02:30:00') AS result";
            $columns = ['result'];
            break;
        case 'CURDATE':
            $sql = "SELECT CURDATE() AS result";
            $columns = ['result'];
            break;
        case 'CURRENT_DATE':
            $sql = "SELECT CURRENT_DATE() AS result";
            $columns = ['result'];
            break;
        case 'CURRENT_TIME':
            $sql = "SELECT CURRENT_TIME() AS result";
            $columns = ['result'];
            break;
        case 'CURRENT_TIMESTAMP':
            $sql = "SELECT CURRENT_TIMESTAMP() AS result";
            $columns = ['result'];
            break;
        case 'CURTIME':
            $sql = "SELECT CURTIME() AS result";
            $columns = ['result'];
            break;
        case 'DATE':
            $sql = "SELECT hire_date, DATE(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'DATEDIFF':
            $sql = "SELECT DATEDIFF(CURDATE(), hire_date) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'DATE_ADD':
            $sql = "SELECT hire_date, DATE_ADD(hire_date, INTERVAL 1 MONTH) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'DATE_FORMAT':
            $sql = "SELECT hire_date, DATE_FORMAT(hire_date,'%M %d, %Y') AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'DATE_SUB':
            $sql = "SELECT hire_date, DATE_SUB(hire_date, INTERVAL 5 DAY) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'DAY':
            $sql = "SELECT hire_date, DAY(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'DAYNAME':
            $sql = "SELECT hire_date, DAYNAME(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'DAYOFMONTH':
            $sql = "SELECT hire_date, DAYOFMONTH(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'DAYOFWEEK':
            $sql = "SELECT hire_date, DAYOFWEEK(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'DAYOFYEAR':
            $sql = "SELECT hire_date, DAYOFYEAR(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'EXTRACT':
            $sql = "SELECT hire_date, EXTRACT(YEAR FROM hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'FROM_DAYS':
            $sql = "SELECT FROM_DAYS(738000) AS result";
            $columns = ['result'];
            break;
        case 'HOUR':
            $sql = "SELECT HOUR('14:35:50') AS result";
            $columns = ['result'];
            break;
        case 'LAST_DAY':
            $sql = "SELECT hire_date, LAST_DAY(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'LOCALTIME':
            $sql = "SELECT LOCALTIME() AS result";
            $columns = ['result'];
            break;
        case 'LOCALTIMESTAMP':
            $sql = "SELECT LOCALTIMESTAMP() AS result";
            $columns = ['result'];
            break;
        case 'MAKEDATE':
            $sql = "SELECT MAKEDATE(2026, 45) AS result";
            $columns = ['result'];
            break;
        case 'MAKETIME':
            $sql = "SELECT MAKETIME(14,30,25) AS result";
            $columns = ['result'];
            break;
        case 'MICROSECOND':
            $sql = "SELECT MICROSECOND('12:30:45.123456') AS result";
            $columns = ['result'];
            break;
        case 'MINUTE':
            $sql = "SELECT MINUTE('12:35:50') AS result";
            $columns = ['result'];
            break;
        case 'MONTH':
            $sql = "SELECT hire_date, MONTH(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'MONTHNAME':
            $sql = "SELECT hire_date, MONTHNAME(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'NOW':
            $sql = "SELECT NOW() AS result";
            $columns = ['result'];
            break;
        case 'PERIOD_ADD':
            $sql = "SELECT PERIOD_ADD(202601,2) AS result";
            $columns = ['result'];
            break;
        case 'PERIOD_DIFF':
            $sql = "SELECT PERIOD_DIFF(202602,202601) AS result";
            $columns = ['result'];
            break;
        case 'QUARTER':
            $sql = "SELECT hire_date, QUARTER(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'SECOND':
            $sql = "SELECT SECOND('12:35:50') AS result";
            $columns = ['result'];
            break;
        case 'SEC_TO_TIME':
            $sql = "SELECT SEC_TO_TIME(3665) AS result";
            $columns = ['result'];
            break;
        case 'STR_TO_DATE':
            $sql = "SELECT STR_TO_DATE('15-02-2026','%d-%m-%Y') AS result";
            $columns = ['result'];
            break;
        case 'SUBDATE':
            $sql = "SELECT hire_date, SUBDATE(hire_date, INTERVAL 3 DAY) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'SUBTIME':
            $sql = "SELECT SUBTIME('14:30:00','01:15:30') AS result";
            $columns = ['result'];
            break;
        case 'SYSDATE':
            $sql = "SELECT SYSDATE() AS result";
            $columns = ['result'];
            break;
        case 'TIME':
            $sql = "SELECT TIME('14:35:50') AS result";
            $columns = ['result'];
            break;
        case 'TIME_FORMAT':
            $sql = "SELECT TIME_FORMAT('14:35:50','%h:%i %p') AS result";
            $columns = ['result'];
            break;
        case 'TIME_TO_SEC':
            $sql = "SELECT TIME_TO_SEC('01:01:05') AS result";
            $columns = ['result'];
            break;
        case 'TIMEDIFF':
            $sql = "SELECT TIMEDIFF('14:35:50','12:30:25') AS result";
            $columns = ['result'];
            break;
        case 'TIMESTAMP':
            $sql = "SELECT TIMESTAMP('2026-02-15','14:30:00') AS result";
            $columns = ['result'];
            break;
        case 'TO_DAYS':
            $sql = "SELECT TO_DAYS(hire_date) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'WEEK':
            $sql = "SELECT hire_date, WEEK(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'WEEKDAY':
            $sql = "SELECT hire_date, WEEKDAY(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'WEEKOFYEAR':
            $sql = "SELECT hire_date, WEEKOFYEAR(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'YEAR':
            $sql = "SELECT hire_date, YEAR(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        case 'YEARWEEK':
            $sql = "SELECT hire_date, YEARWEEK(hire_date) AS result FROM employees";
            $columns = ['hire_date','result'];
            break;
        default:
            echo "Invalid function!";
            exit;
    }
}


// ---------------- ADVANCED FUNCTIONS ----------------
elseif ($category == 'advanced') {
    switch($func){
        case 'CASE':
            $sql = "SELECT name, CASE WHEN salary>40000 THEN 'High' ELSE 'Low' END AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'IFNULL':
            $sql = "SELECT name, IFNULL(bonus,0) AS result FROM employees";
            $columns = ['name','result'];
            break;
        case 'COALESCE':
            $sql = "SELECT COALESCE(bonus,salary) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'CAST':
            $sql = "SELECT CAST(salary AS CHAR) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'NULLIF':
            $sql = "SELECT NULLIF(salary,45000) AS result FROM employees";
            $columns = ['result'];
            break;
        case 'BIN':
            $sql = "SELECT id, BIN(id) AS result FROM employees";
            $columns = ['id','result'];
            break;
        case 'CONV':
            $sql = "SELECT id, CONV(id,10,2) AS result FROM employees";
            $columns = ['id','result'];
            break;
        case 'VERSION':
            $sql = "SELECT VERSION() AS result";
            $columns = ['result'];
            break;
        case 'DATABASE':
            $sql = "SELECT DATABASE() AS result";
            $columns = ['result'];
            break;
        case 'CURRENT_USER':
            $sql = "SELECT CURRENT_USER() AS result";
            $columns = ['result'];
            break;
        default:
            echo "Invalid function!";
            exit;
    }
}


// ---------------- EXECUTE QUERY ----------------
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Query Error: " . mysqli_error($conn);
    exit;
}

// ---------------- DISPLAY OUTPUT ----------------
echo "<h2>$func Function Output</h2>";
echo "<table border='1' style='border-collapse: collapse; padding:8px;'>";
echo "<tr>";
foreach ($columns as $col) {
    echo "<th>$col</th>";
}
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($columns as $col) {
        echo "<td>".$row[$col]."</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
