<div id="form_contact">
    <form id="contact" method="POST">
        <p>
            <label for="nom" class="nom">Nom</label>
            <br /><input id="nom" name="nom" type="text">
            <span id="msg_nom"></span>
        </p>
        <p>
            <label for="sujet" class="sujet">Sujet</label>
            <br /><input id="sujet" name="sujet" type="text">
            <span id="msg_sujet"></span>
        </p>
        <p>
            <label for="email">Email</label>
            <br /><input id="email" name="email" type="email">
            <span id="msg_email"></span>
        </p>
        <p>
            <label for="message">Message</label>
            <br /><textarea id="message" name="message" rows="10" cols="80"></textarea>
           <span id="msg_message"></span>
        </p>
        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </form>
    <span id="msg_all"></span> 
</div><!-- end of #form_contact -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="script.js"></script>