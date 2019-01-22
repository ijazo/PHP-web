<?php 
	print '
    <h1>Kontakt</h1>
    <div id="contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2375.302209650492!2d-2.293528784157149!3d53.46305888000367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bae72e7e47f69%3A0x6c930e96df4455fe!2sOld+Trafford!5e0!3m2!1shr!2shr!4v1541725127377" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <form action="" id="contact_form" name="contact_form" method="POST">
            <label for="fname">Ime *</label>
            <input type="text" id="fname" name="firstname" placeholder="Vaše Ime" required>

            <label for="lname">Prezime *</label>
            <input type="text" id="lname" name="lastname" placeholder="Vaše Prezime.." required>
            
            <label for="lname">E-mail *</label>
            <input type="email" id="email" name="email" placeholder="Vaš e-mail.." required>

            <label for="country">Država</label>
            <select id="country" name="country">
              <option value="">Molimo odaberite</option>
              <option value="BE">Belgium</option>
              <option value="HR" selected>Croatia</option>
              <option value="LU">Luxembourg</option>
              <option value="HU">Hungary</option>
            </select>

            <label for="subject">Opis</label>
            <textarea id="subject" name="subject" placeholder="Napišite nešto.." style="height:200px"></textarea>

            <input type="submit" value="Pošalji">
        </form>
    </div>;'
?>