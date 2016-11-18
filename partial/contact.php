<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#contactSubmit").button().click(function() {
        });
    });
</script>

<style type="text/css">
    .contact-div {
        color: #eeeeee;
        padding: 1em 15% 2em 15%;
        border-top: 2px ridge #555555;
        border-bottom: 2px ridge #555555;
        /*background-color: #333333;*/
        background-color: #cb9a34;
        opacity: .9;
    }

    .contact-div input[type='text'], .contact-div textarea {
        border-radius: 3px;
        margin-bottom: .5em;
    }
</style>

<div class="contact-div" style="margin: 2em 0px 0px 0px">
    <h1>C<span class="smaller-text">ONTACT</span> U<span class="smaller-text">S</span></h1>
    <div style="white-space: nowrap;">
        <div style="width: 50%; display: inline-block; vertical-align: top;">
            <a target="_blank" href="https://www.google.com/maps/place/40°34'47.2%22N+111°54'25.3%22W/@40.579781,-111.9075682,19z">
                <img src="images/officemap.png" style="border-radius: 6px; border: 2px ridge #555555;" />
            </a>
        </div>
        <div style="width: 50%; white-space: normal; display: inline-block; vertical-align: top;">
            <div style="white-space: pre-line; margin-bottom: 1.2em; font-weight: 600;">540 W 9460 S
                Sandy, Utah 84070
                info@gohoplite.com
                (855) 257-8665
            </div>
            <form id="contactForm" method="post" style="text-align: left;">
                <label for="contact_name">Name</label>
                <input type="text" name="contact_name" id="contact_name" style="width: 100%;" />

                <label for="contact_email">Email</label>
                <input type="text" name="contact_email" id="contact_email" style="width: 100%;" />

                <label for="contact_subject">Subject</label>
                <input type="text" name="contact_subject" id="contact_subject" style="width: 100%;" />

                <label for="contact_message">Message</label>
                <textarea name="contact_message" id="contact_message" style="width: 100%;" rows="5"></textarea>

                <div id="contactSubmit" onclick="if(validateContactForm()) { document.getElementById('contactForm').submit(); }" class="ui-button ui-stat-default" style="min-width: 100px;">
                    S<span class="smaller-text">UBMIT</span>
                </div>
            </form>
        </div>
    </div>
</div>