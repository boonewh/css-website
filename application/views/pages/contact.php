        <main>
            <h1>Contact</h1>
            <div class="form-container">
            <div id="form-div">
                <!-- notice the form attributes, I did NOT use method or action, see bottom of this page -->
                <form id="contact-form" name="contact-form">
                        <div class="input-div">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" maxlength="64" placeholder="Enter your name"><br>
                    
                            <label for="from">Email:</label>
                            <input type="text" id="from" name="from" maxlength="64" placeholder="example@example.com"><br>
                    
                            <label for="confirm">Confirm Email:</label>
                            <input type="text" id="confirm" name="confirm" maxlength="64" placeholder="example@example.com"><br>
                    
                            <label for="subject">Subject:</label>
                            <input type="text" id="subject" name="subject" maxlength="64" placeholder="Enter the subject"><br>
                    
                            <label for="message">Message:</label><br>
                            <textarea id="message" name="message" maxlength="1000" placeholder="Enter your message" rows="5"></textarea><br>
                    </form>
            </div>
            <div id="msg">
                <!-- This is a blank area to talk to the user -->
                <br>
            </div>
            <div>
                <!-- These are not HTML submit and clear buttons. They are generic buttons to which
                I attached handlers to make them work as submit and clear buttons.
                Notice they are outside the form. -->
                <button id="names-send" type="button" class="">Send</button>&nbsp;&nbsp;
                <button id="names-clear" type="button" class="">Clear</button>
            </div>
        </div>
        </main>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/main.js"></script>
