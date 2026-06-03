<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

if(isset($_POST['email'])) {
    $to = "angelwebgroup@outlook.com";
    $subject = "New Enquiry from A2Z Packaging Website";
    
    // Validation
    if(!isset($_POST['first_name']) || !isset($_POST['email']) || !isset($_POST['comments'])) {
        $response = array('status' => 'error', 'message' => 'Please fill all required fields.');
        echo json_encode($response);
        exit;
    }
    
    $name = $_POST['first_name'];
    $from = $_POST['email'];
    $phone = isset($_POST['telephone']) ? $_POST['telephone'] : 'Not provided';
    $message = $_POST['comments'];
    
    // Validate email
    if(!filter_var($from, FILTER_VALIDATE_EMAIL)) {
        $response = array('status' => 'error', 'message' => 'Invalid email address.');
        echo json_encode($response);
        exit;
    }
    
    // Validate name
    if(!preg_match("/^[A-Za-z .'-]+$/", $name)) {
        $response = array('status' => 'error', 'message' => 'Invalid name format.');
        echo json_encode($response);
        exit;
    }
    
    // Validate message
    if(strlen($message) < 2) {
        $response = array('status' => 'error', 'message' => 'Please enter a valid message.');
        echo json_encode($response);
        exit;
    }
    
    // Prepare email content with proper formatting
    $email_content = "Dear Admin,\n\n";
    $email_content .= "You have received a new enquiry from the A2Z Packaging website.\n\n";
    $email_content .= "Enquiry Details:\n";
    $email_content .= "-------------\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $from\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n\n";
    $email_content .= "Best regards,\n";
    $email_content .= "A2Z Packaging Website";
    
    // Improved email headers
    $domain = parse_url($_SERVER['HTTP_HOST'], PHP_URL_HOST) ?: 'aerpibm.com';
    $headers = array(
        'From' => "AERPIBM Website <no-reply@$domain>",
        'Reply-To' => "$name <$from>",
        'X-Mailer' => 'PHP/' . phpversion(),
        'Content-Type' => 'text/plain; charset=UTF-8',
        'MIME-Version' => '1.0',
        'X-Priority' => '3',
        'Message-ID' => '<' . time() . '-' . md5($from . $to) . '@' . $domain . '>',
        'X-Originating-IP' => $_SERVER['REMOTE_ADDR'],
        'Date' => date('r')
    );
    
    // Convert headers array to string
    $headers_str = '';
    foreach($headers as $key => $value) {
        $headers_str .= "$key: $value\r\n";
    }
    
    try {
        // Attempt to send email
        if(mail($to, $subject, $email_content, $headers_str)) {
            error_log("Email sent successfully to $to");
            $response = array('status' => 'success', 'message' => 'Thank you for contacting us. We will be in touch with you very soon.');
        } else {
            error_log("Failed to send email to $to");
            throw new Exception("Mail sending failed");
        }
    } catch (Exception $e) {
        error_log("Exception occurred: " . $e->getMessage());
        $response = array('status' => 'error', 'message' => 'Failed to send message. Please try again later.');
    }
    
    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>