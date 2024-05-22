<div>
    

    <?php
   
        $host = "google.com";
         $result = dns_get_record("$host", DNS_A);

       print_r($result);

   
    ?>

    <form>
        <input type="text" required placeholder="type the url address"> <br>
        <button>Send</button>

</form>
    
</div>
