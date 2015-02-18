<?php $pageTitle='Paris - Contact' ; $bodyClass='pg-map' ; include( './templates/header.php'); ?>
<main>
    <header class="head-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d167967.87862456127!2d2.3913485352538943!3d48.86778031969029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1424216694343" width="1910" height="600"></iframe>
    </header>
    <!-- end of header -->
    <section class="section">
        <h1>Please fill this form</h1>
        <form class="column" action="thank-you.php#thank-you" method="post">
            <label for="input-name">Name*</label>
            <br />
            <input name="input-name" type="text" id="input-name" required>
            <br />
            <label for="input-email">Email*</label>
            <br />
            <input name="input-email" type="email" id="input-email" required>
            <br />
            <label for="city">Please leave a comment:</label>
            <br />
            <textarea name="comments" id="city" wrap="soft"></textarea>
            <br />

            <!-- age -->
            <label for="age">Age</label>
            <br />
            <select class="age" name="age" id="age">
                <option value="Prefer Not to Answer" selected>Prefer Not to Answer</option>
                <option value="Under 18">Under 18</option>
                <option value="18-24">18-24</option>
                <option value="25-34">25-34</option>
                <option value="35-44">35-44</option>
                <option value="45-54">45-54</option>
                <option value="55-64">55-64</option>
                <option value="65 or Above">65 or Above</option>
            </select>
            <br />
            <!-- end of age -->
            <!--gender -->
            <h3>Gender</h3>
            <input name="gender" id="radio-male" type="radio" value="male">
            <label for="radio-male">Male</label>
            <input name="gender" id="radio-female" type="radio" value="female">
            <label for="radio-female">Female</label>
            <input name="gender" id="radio-prefer-not-to-say" type="radio" value="Prefer Not to Say">
            <label for="radio-prefer-not-to-say">Prefer not to say</label>
            <!-- end of gender -->
            <!--check box-->
            <h3>Place visited</h3>
            <span class="bigcheck">
			<label class="bigcheck" for="place-01">
				<input class="check" type="checkbox" id="place-01" name="Eiffel Tower" value="Eiffel Tower"><span class="check-target"></span> Eiffel Tower
            </label>
            </span>
            <span class="bigcheck">
			<label class="bigcheck" for="place-02">
				<input class="check" type="checkbox" id="place-02" name="Opéra Bastille" value="Opéra Bastille"><span class="check-target"></span> Opéra Bastille
            </label>
            </span>
            <span class="bigcheck">
			<label class="bigcheck" for="place-03">
				<input class="check" type="checkbox" id="place-03" name="Alexandre III Bridge" value="Alexandre III Bridge"><span class="check-target"></span> Alexandre III Bridge
            </label>
            </span>
            <br />
            <span class="bigcheck">
			<label class="bigcheck" for="place-04">
				<input class="check" type="checkbox" id="place-04" name="Place Vendôme" value="Place Vendôme"><span class="check-target"></span> Place Vendôme
            </label>
            </span>
            <span class="bigcheck">
			<label class="bigcheck" for="place-05">
				<input class="check" type="checkbox" id="place-05" name="Concorde Square" value="Concorde Square"><span class="check-target"></span> Concorde Square
            </label>
            </span>
            <span class="bigcheck">
			<label class="bigcheck" for="place-06">
				<input class="check" type="checkbox" id="place-06" name="Élysée Palace" value="Élysée Palace"><span class="check-target"></span> Élysée Palace
            </label>
            </span>
            <br />
            <input name="submit" type="submit" id="btn-submit" value="Submit">
        </form>

    </section>
</main>
<?php include( './templates/footer.php'); ?>