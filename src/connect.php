<?php
    $jkelamin = $_POST['jkelamin'];
    $usia = $_POST['usia'];
    $pekerjaan = $_POST['pekerjaan'];
    $sarankritik = $_POST['sarankritik'];

    //database connection
    $conn = new mysqli('localhost','rootknit','rootknit','crochetnknit');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into sarandankritik(jkelamin, usia, pekerjaan, sarankritik) values(?, ?, ?, ?)");
        $stmt->bind_param("siss", $jkelamin, $usia, $pekerjaan, $sarankritik);
        $execval = $stmt->execute();
        echo $execval;
        echo "Terima Kasih";
        $stmt->close();
        $conn->close();
    }
?>
