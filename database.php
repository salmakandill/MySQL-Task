<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'school';
$conn=$conn = new mysqli($host, $user, $password, $database);

    //Viwe
    //     $result = $conn->query("SELECT * FROM students");
    // if ($result->num_rows > 0) {
    //     echo "<h3>Students List:</h3>";
    //     while ($row = $result->fetch_assoc()) {
    //         echo "ID: " . $row["id"] . 
    //         " - Name: " . $row["name"] . 
    //         " - Email: " . $row["email"] . 
    //         " - Age: " . $row["age"] . "<br>";
    //     }
    // } else {
    //     echo "No records found.";
    // }

        //Insertion
    // $name='Hana Ahmed';
    // $email='hanaahmed@gmail.com';
    // $age=19;
    // $photo='/upload/IMG-20220812-WA0062.jpg';
    // $stmt=$conn->prepare("INSERT INTO Students (name, email, age, photo) VALUES(?,?,?,?)");
    // $stmt->bind_param("ssis", $name, $email, $age, $photo);
    // $stmt->execute();
    // echo "Student added successfully ✅ <br>";
    // $conn->close();

    //Update
    // $newEmail = 'mohmed2001@gmail.com';
    // $targetId =3 ;
    // $stmt = $conn->prepare("UPDATE students SET email = ? WHERE id = ?");
    // $stmt->bind_param("si", $newEmail, $targetId);
    // $stmt->execute();
    // echo "Student updated successfully ✏️";
    // $targetId = 3;
    // $conn->close();

    //Delete
    $targetId=2;
    $stmt = $conn->prepare("DELETE FROM students WHERE id = ?");
    $stmt->bind_param("i", $targetId);
    $stmt->execute();
    echo "Student deleted successfully 🗑️";
    $conn->close();
?>