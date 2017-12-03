<?php
$to = $_POST ["to"];
$from = $_POST ["from"];
$subject = $_POST ["subject"];
$message = $_POST ["message"];

?>








<!-- Adding a user To simplify things for this assignment, users can only be added by an administrator, there is no feature for new users to self-sign up. An administrator logs in and completes the new user form. Use regular expressions to ensure that passwords have at least one number and one letter, and one capital letter and are at least 8 characters long. The password MUST be hashed before being stored in the database. Also ensure the other ﬁelds are validated and that user inputs are escaped and sanitized. 
Messages id recipient_ids sender_id subject body date_sent
Messages_read id message_id reader_id date_read
User login A user goes to the login page and logs in. The system keeps track of the user using PHP sessions. Once logged in they are presented with the Home Screen which shows their recent messages which they can read and allows them to compose new messages. User logout There will be a logout link/button which a user may click in order to logout of the system. When this is done the PHP Session should be destroyed and the user redirected to the login screen. Home Screen The home screen allows a logged in user to see their 10 most recent messages. The list of messages should display the senders username, subject and date sent. There should also be a link/button to compose a new message. Compose and send a message The compose message screen includes a form with "recipients", "subject" and "body" input ﬁelds. Once a message is completed the logged in user can click the send button to make the message go to all recipients (please use commas "," to separate recipients). Also ensure the input ﬁelds are validated and that user inputs are escaped and sanitized. Receive and read a message Each recipient of the message should see only messages sent to them on their home screen. Messages that have not been read are to be bold. When a message is clicked it will open and show the details of the message. These details should include the ﬁrst and last name of the sender, the subject of the message, the body of the message and the date it was sent. The message opened is immediately "ﬂagged" as being read and should no longer be bold on the home screen. 
No Page Refreshes All new pages should load without browser refresh, in other words you will need to implement an AJAX based approach to loading new content into the browser.  -->