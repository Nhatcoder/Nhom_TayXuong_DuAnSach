<?php
    function select__userByid($userID) {
        $sql = "SELECT * FROM nguoidung WHERE ma_nguoi_dung=?";
        return pdo_query_one($sql, $userID);
    }

    function insert__account($ho_ten,$email,$so_dien_thoai,$dia_chi,$hinh, $gioitinh,$mat_khau) {
        $sql = "INSERT INTO nguoidung (ho_ten,email,so_dien_thoai,dia_chi,hinh,gioitinh,mat_khau) VALUES (?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql,$ho_ten,$email,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$mat_khau);
    }

    function selectAllAccount($email) {
        $sql = "SELECT * FROM nguoidung WHERE email = ?";
        pdo_execute($sql,$email);
    }

    function checkPass($email) {
        $sql = "SELECT * FROM nguoidung WHERE email = ? OR so_dien_thoai = ?";
        return pdo_query_one($sql,$email,$email);
    }

    function update__account($ho_ten,$email,$so_dien_thoai,$dia_chi,$mat_khau,$user_id) {
        $sql = "UPDATE nguoidung SET ho_ten = ?, email = ?, so_dien_thoai = ?, dia_chi = ?, mat_khau = ? WHERE ma_nguoi_dung = ?";
        pdo_execute($sql,$ho_ten,$email,$so_dien_thoai,$dia_chi,$mat_khau, $user_id);
    }


    function sendMail($email){
        $sql = "SELECT * FROM duanxuong.nguoidung where email = '$email'";
        $sendMail = pdo_query_one($sql);
        return $sendMail;
    }
    function checkemailPass($email,$user,$pass) {
        include "models/PHPMailer/src/PHPMailer.php";
        include "models/PHPMailer/src/Exception.php";
        include "models/PHPMailer/src/SMTP.php";
    
    
        $mail = new PHPMailer\PHPMailer\PHPMailer(true); 
        $mail->CharSet = 'UTF-8';
        // print_r($mail);
    
        try {
            //Server settings
            $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'nguyenngocquoc4646@gmail.com';                 // SMTP username
            $mail->Password = 'qhjp tuzs dnxe zqgq';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
         
            //Recipients
        $mail->setFrom('nguyenngocquoc4646@gmail.com', 'QUỐC ĐẸP TRAI');
    
            $mail->addAddress($email,$user);     // Add a recipient            
            // Name is optional
    
            // $mail->addReplyTo('info@example.com', 'Information');
    
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
         
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
         
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'ĐẶT LẠI MẬT KHẨU';
            $mail->Body    = 'Mật khẩu của bạn là:' .$pass;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         
            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
?>