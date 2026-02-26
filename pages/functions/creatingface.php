<?php
$username = 'root';
$password = '';
$servername = 'localhost';
$dbname = 'facebook';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

$table = 'account'; 
$lastError = '';

function loginAuth(string $email, string $password): int {
    global $conn, $table;
    $sql = "SELECT user_id, password FROM {$table} WHERE email = :email LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user) {
       
        if (str_starts_with($user['password'], '$2')) {
            $passwordMatch = password_verify($password, $user['password']);
        } else {
            
            $passwordMatch = ($password === $user['password']);
        }
        
        if ($passwordMatch) {
            $_SESSION['user_id'] = (int)$user['user_id'];
            return (int)$user['user_id'];
        }
    }
    return 0;
}

function registerUser(array $data): bool {
    global $conn, $table, $lastError;

    
    if (empty($data['email']) || empty($data['username']) || empty($data['password'])) {
        $lastError = 'missing_required_fields';
        return false;
    }

    
    $sql = "SELECT COUNT(*) FROM {$table} WHERE email = :email OR username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':email' => $data['email'], ':username' => $data['username']]);
    if ($stmt->fetchColumn() > 0) {
        $lastError = 'duplicate';
        return false;
    }

    

    $sql = "INSERT INTO {$table} (email, username, first_name, last_name, mobile_num, birthday, gender, password)
            VALUES (:email, :username, :first_name, :last_name, :mobile_num, :birthday, :gender, :password)";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':email'      => $data['email'],
            ':username'   => $data['username'],
            ':first_name' => $data['first_name'],
            ':last_name'  => $data['last_name'],
            ':mobile_num' => $data['mobile_num'],
            ':birthday'   => $data['birthday'],
            ':gender'     => $data['gender'],
            ':password'   => $data['password'],
        ]);
        return true;
    } catch (PDOException $e) {
        $lastError = $e->getMessage();
        return false;
    }
}
?>