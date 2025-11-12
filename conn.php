<?php
$host = "db.ltqlcmtofvayqdjselaj.supabase.co";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "Olawale@7";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    echo "✅ Connected successfully to Supabase!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>
