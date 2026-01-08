<div class="form-box" id="contact-form-box">
    <form method="POST" action="mail">
      <h2>Your Book Deserves Attention</h2>
      <p>Fill Out the Form to Begin Your Book Marketing Journey.</p>
      <input type="text" placeholder="Your Name" name="name" required>
      <input type="tel" name="phone" placeholder="Phone" required>
      <input type="email" placeholder="Email Address" name="email" required>
      <textarea name="msg" placeholder="Website, requirement details, amazon link.."></textarea>
      <input type="submit" value="Submit" name="submit">
      <input type="hidden" name="pageurl" value="<?php echo $actual_link;?>">
      <input type="hidden" name="ip2loc_ip" value="">
      <input type="hidden" name="ip2loc_isp" value="">
      <input type="hidden" name="ip2loc_org" value="">
      <input type="hidden" name="ip2loc_country" value="">
      <input type="hidden" name="ip2loc_region" value="">
      <input type="hidden" name="ip2loc_city" value="">
    </form>
</div>