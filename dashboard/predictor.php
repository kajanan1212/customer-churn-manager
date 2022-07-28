<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class='container'>
        <div class='row form-row'>
            <div class='form-div'>
                <form action='./result.php' method="post" class="row g-3">
                    <div class="col-md-4">
                        <label for="account_length" class="form-label">Account Length</label>
                        <input type="number" class="form-control" id="account_length" min='1' name='account_length'>
                    </div>
                    <div class="col-md-4">
                        <label for="location_code" class="form-label">Location Code</label>
                        <select id="location_code" class="form-select" name='location_code'>
                            <option value='' selected>Choose...</option>
                            <option value='445'>445</option>
                            <option value='452'>452</option>
                            <option value='547'>547</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="international_plan" class="form-label">International Plan</label>
                        <select id="international_plan" class="form-select" name='international_plan'>
                            <option value='' selected>Choose...</option>
                            <option value='1'>Yes</option>
                            <option value='0'>No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="voice_mail_plan" class="form-label">Voice Mail Plan</label>
                        <select id="voice_mail_plan" class="form-select" name='voice_mail_plan'>
                            <option value='' selected>Choose...</option>
                            <option value='1'>Yes</option>
                            <option value='0'>No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="number_vm_messages" class="form-label">Number of Voice Mail Messages</label>
                        <input type="number" class="form-control" id="number_vm_messages" min='0' name='number_vm_messages'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_day_min" class="form-label">Total Day Minutes</label>
                        <input type="number" class="form-control" id="total_day_min" min='0' name='total_day_min'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_day_calls" class="form-label">Total Day Calls</label>
                        <input type="number" class="form-control" id="total_day_calls" min='0' name='total_day_calls'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_day_charge" class="form-label">Total Day Charge</label>
                        <input type="number" class="form-control" id="total_day_charge" min='0' name='total_day_charge'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_eve_min" class="form-label">Total Evening Minutes</label>
                        <input type="number" class="form-control" id="total_eve_min" min='0' name='total_eve_min'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_eve_calls" class="form-label">Total Evening Calls</label>
                        <input type="number" class="form-control" id="total_eve_calls" min='0' name='total_eve_calls'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_eve_charge" class="form-label">Total Evening Charge</label>
                        <input type="number" class="form-control" id="total_eve_charge" min='0' name='total_eve_charge'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_night_minutes" class="form-label">Total Night Minutes</label>
                        <input type="number" class="form-control" id="total_night_minutes" min='0' name='total_night_minutes'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_night_calls" class="form-label">Total Night Calls</label>
                        <input type="number" class="form-control" id="total_night_calls" min='0' name='total_night_calls'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_night_charge" class="form-label">Total Night Charge</label>
                        <input type="number" class="form-control" id="total_night_charge" min='0' name='total_night_charge'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_intl_minutes" class="form-label">Total International Minutes</label>
                        <input type="number" class="form-control" id="total_intl_minutes" min='0' name='total_intl_minutes'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_intl_calls" class="form-label">Total International Calls</label>
                        <input type="number" class="form-control" id="total_intl_calls" min='0' name='total_intl_calls'>
                    </div>
                    <div class="col-md-4">
                        <label for="total_intl_charge" class="form-label">Total International Charge</label>
                        <input type="number" class="form-control" id="total_intl_charge" min='0' name='total_intl_charge'>
                    </div>
                    <div class="col-md-4">
                        <label for="customer_service_calls" class="form-label">Customer Service Calls</label>
                        <input type="number" class="form-control" id="customer_service_calls" min='0' name='customer_service_calls'>
                    </div>
                    <div class="col-12" style='text-align:right'>
                        <button type="submit" class="btn btn-dark btn-predict" id="predict" name='predict'>Predict</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>