<?php
$conn = mysqli_connect("localhost", "root", "", "ecommers78");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function  mailsenderFunc($recipient_email, $sender_email, $mailbody, $subject)
{
    //Load Composer's autoloader
    require './PHPMailer/Exception.php';
    require './PHPMailer/PHPMailer.php';
    require './PHPMailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'anwarul.karimmsl@gmail.com';                     //SMTP username
        $mail->Password   = 'jlgilycytymrrezo';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($sender_email, 'Molla');
        $mail->addAddress($recipient_email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $mailbody;

        $mail->send();

        return "ok";
    } catch (Exception $e) {

        return "error";

        // $res = array(
        //     'status' => "Try again.!",
        //     'status_code' => "error",
        //     'status_text' => 'Something went Warning!'
        // );
        // return json_encode($res);
    }
}

function sefuda($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);

    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mailSend'])) {
    if (isset($_POST['cname']) && isset($_POST['cemail']) && isset($_POST['cphone']) && isset($_POST['csubject']) && isset($_POST['cmessage'])) {
        $cname = sefuda($_POST['cname']);
        $cemail = sefuda($_POST['cemail']);
        $cphone = sefuda($_POST['cphone']);
        $csubject = sefuda($_POST['csubject']);
        $cmessage = sefuda($_POST['cmessage']);

        if (empty($cname)) {
            $res = array(
                'status' => "Warning",
                'status_code' => "warning",
                'status_text' => 'Name field cannot be empty!'
            );
            exit(json_encode($res));
        } elseif (strlen($cname) < 4) {
            $res = array(
                'status' => "Warning",
                'status_code' => "warning",
                'status_text' => 'Name field must be at least 4 characters long.!'
            );
            exit(json_encode($res));
        } elseif (empty($cemail)) {
            $res = array(
                'status' => "Warning",
                'status_code' => "warning",
                'status_text' => 'Email field cannot be empty!'
            );
            exit(json_encode($res));
        } elseif (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
            $res = array(
                'status' => "Warning",
                'status_code' => "warning",
                'status_text' => 'Enter the correct email address.!'
            );
            exit(json_encode($res));
        } elseif (empty($cphone)) {
            $res = array(
                'status' => "Warning",
                'status_code' => "warning",
                'status_text' => 'Enter your phone number!'
            );
            exit(json_encode($res));
        } elseif (empty($csubject)) {
            $res = array(
                'status' => "Warning",
                'status_code' => "warning",
                'status_text' => 'Subject field cannot be empty!'
            );
            exit(json_encode($res));
        } elseif (strlen($csubject) < 5) {
            $res = array(
                'status' => "Warning",
                'status_code' => "warning",
                'status_text' => 'Subject field must be at least 5 characters long.'
            );
            exit(json_encode($res));
        } elseif (empty($cmessage)) {
            $res = array(
                'status' => "Warning",
                'status_code' => "warning",
                'status_text' => 'Fill in the message box!'
            );
            exit(json_encode($res));
        } elseif (strlen($cmessage) < 12) {
            $res = array(
                'status' => "Warning",
                'status_code' => "warning",
                'status_text' => 'Message field must be at least 12 characters long.'
            );
            exit(json_encode($res));
        } else {
            $query = $conn->query("SELECT * FROM `contact_details`");
            $contact_details_query = $query->fetch_assoc();

            // recipient email
            $recipient_email = $contact_details_query["email"];

            // sender mobile
            $mobile = $cphone;
            // sender name
            $sender_name = $cname;
            // sender email
            $sender_email = $cemail;
            // email subject
            $subject = $csubject;
            // text message
            $msg = $cmessage;

            // mail body
            $mailbody = "<div style='text-align:left' align='left'> 
            <a href='javascript:void(0)' style='color:#0A525F;text-decoration:none'>
            <h2>Subject: $subject</h2>
            </a>
            </div>
            <div style='background:#ffffff;background-color:#ffffff;border-radius:3px;padding:20px;border:1px solid #dddddd'><div style='border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left><p style='word-wrap:normal;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:18px;font-weight:normal;color:#333;line-height:20px;text-align:left;margin:15px 0 5px;padding:0'>
            <strong>From : </strong> $sender_email<br>
            <strong>To : </strong> $recipient_email (Me)<br>
            <strong>Subject : </strong> $subject<br>
            <br>
            <strong>Message : </strong> $msg<br>
            <br>
            Regards,<br>
            $sender_name<br>
            <strong>Mobile no : </strong> $mobile<br>
            <br>
            </p></div></div>
            ";

            $mailSend = mailsenderFunc($recipient_email, $sender_email, $mailbody, $subject);

            if ($mailSend != "error") {
                $res = array(
                    'status' => "Congratulations!",
                    'status_code' => "success",
                    'status_text' => 'Message sent successfully!'
                );
                exit(json_encode($res));
            } else {
                $res = array(
                    'status' => "Try again.!",
                    'status_code' => "error",
                    'status_text' => 'Something went Warning!'
                );
                exit(json_encode($res));
            }
        }
    }
}
?>

<div class="touch-container row justify-content-center">
    <div class="col-md-9 col-lg-7">
        <div class="text-center">
            <h2 class="title mb-1">Get In Touch</h2>
            <p class="lead text-primary">
                We collaborate with ambitious brands and people; we’d love to build something great
                together.
            </p>
            <p class="mb-3">Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu
                pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et,
                dapibus sed, urna.</p>
        </div>

        <form action="<?= htmlentities(substr($_SERVER['PHP_SELF'], 0, -4)) ?>" class="contact-form mb-2" id="mailsenderForm" method="POST">
            <div class="row">
                <div class="col-sm-4">
                    <label for="cname" class="sr-only">Name</label>
                    <input type="text" class="mb-0 form-control" id="cname" name="cname" placeholder="Name *">
                    <span class="error-name" style="padding-bottom: 12px; display:block; color:red"></span>
                </div>

                <div class="col-sm-4">
                    <label for="cemail" class="sr-only">Name</label>
                    <input type="email" class="mb-0 form-control" id="cemail" name="cemail" placeholder="Email *">
                    <span class="error-email" style="padding-bottom: 12px; display:block; color:red"></span>
                </div>

                <div class="col-sm-4">
                    <label for="cphone" class="sr-only">Phone</label>
                    <input type="tel" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="15" class="mb-0 form-control" name="cphone" id="cphone" placeholder="Phone">
                    <span class="error-phone" style="padding-bottom: 12px; display:block; color:red"></span>
                </div>
            </div>

            <label for="csubject" class="sr-only">Subject</label>
            <input type="text" class="mb-0 form-control" id="csubject" name="csubject" placeholder="Subject">
            <span class="error-subject" style="padding-bottom: 12px; display:block; color:red"></span>

            <label for="cmessage" class="sr-only">Message</label>
            <textarea class="mb-0 form-control" cols="30" rows="4" name="cmessage" id="cmessage" placeholder="Message *"></textarea>
            <span class="error-msg " style="padding-bottom: 12px; display:block; color:red"></span>

            <div class="text-center">
                <button type="button" id="mailSend" name="mailSend123" class="btn btn-outline-primary-2 btn-minwidth-sm">
                    <span>SUBMIT</span>
                    <i class="icon-long-arrow-right"></i>
                </button>
            </div>
        </form>
    </div>
</div>
</div>