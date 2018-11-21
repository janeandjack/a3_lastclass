

<?php
include 'functins.php';



if (isset($_GET['movie'])) {
//pass the connection and th movie idto a function
$data = get_single_video($conn, $_GET['movie']);
echo json_encode($data);
}

else {
    //pass the connection and th movie idto a function
    $data = get_all_videos($conn);
    echo json_encode($data);
    }
?>