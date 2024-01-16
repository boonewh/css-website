        <main>
            <h1>Contact</h1>
            <div class="form-container">
            <div id="form-div">
                <!-- notice the form attributes, I did NOT use method or action, see bottom of this page -->
                <form id="contact-form" name="contact-form">
                        <div class="input-div">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" maxlength="64" placeholder="Enter your name"><br>

                            <label for="phone">Phone number you want us to contact us you at:</label>
                            <input type="tel" id="phone" name="phone" maxlength="15" placeholder="123-456-7890" title="Phone number format: 123-456-7890"><br>
                    
                            <label for="from">Email:</label>
                            <input type="text" id="from" name="from" maxlength="64" placeholder="example@example.com"><br>
                    
                            <label for="confirm">Confirm Email:</label>
                            <input type="text" id="confirm" name="confirm" maxlength="64" placeholder="example@example.com"><br>

                            <label>Do you have a preferred counselor you would like to work with?</label>

                            <div class="checkbox-group">
                                <input type="checkbox" id="erin_lozano" name="counselor" value="Erin Lozano">
                                <label for="erin_lozano">Erin Lozano, M.Ed, LPC-Supervisor, RPT-S</label><br>

                                <input type="checkbox" id="holly_fedro" name="counselor" value="Holly Fedro">
                                <label for="holly_fedro">Holly Fedro, MS, LCSW</label><br>

                                <input type="checkbox" id="tobi_carter" name="counselor" value="Tobi Carter">
                                <label for="tobi_carter">Tobi Carter, MSW, LMSW</label><br>

                                <input type="checkbox" id="deliah_mooney" name="counselor" value="Deliah Mooney">
                                <label for="deliah_mooney">Deliah Mooney, MSW, LMSW</label><br>

                                <input type="checkbox" id="roy_rodriguez" name="counselor" value="Roy Rodriguez">
                                <label for="roy_rodriguez">Roy Rodriguez, MSW, LMSW</label><br>

                                <input type="checkbox" id="mattie_crownover" name="counselor" value="Mattie Crownover">
                                <label for="mattie_crownover">Mattie Crownover, MSW, LMSW</label><br>

                                <input type="checkbox" id="unsure" name="counselor" value="unsure">
                                <label for="unsure">I am unsure, please suggest someone for me.</label><br>
                            </div>

                            <label for="whoChoice">Are you seeking counseling for yourself or your child?</label>
                            <input type="text" id="whoChoice" name="whoChoice" maxlength="64"><br>

                            <label for="childAge">If you are seeking counseling for your child, please list child's age.</label>
                            <input type="text" id="childAge" name="childAge" maxlength="64"><br>

                            <label for="message">Message:</label><br>
                            <textarea id="message" name="message" maxlength="1000" placeholder="Enter your message" rows="5"></textarea><br>
                        </div>
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
