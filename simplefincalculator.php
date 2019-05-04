<?php
// code will be placed here

// method 1: calculate total income

// method 2: calculate total expense

// method 3: calculate total saving/investment

// method 4: calculate balance after each month

// method 5: use left balance to achieve goal, divide equally for each goal

// method 6: each month stats for next 12 months
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simple Financial Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col-md-6">
    <div class="alert alert-info">All amount should be considered as monthly basis</div>
    <form method="POST" action="">
        <div class="step1">
        <h3>Step 1: Your income summary</h3>
            <div class="form-group">
                <label for="salary">Salary | Primary Income (On Hand Income - after tax deductions)</label>
                <input type="number" required class="form-control" id="salary" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="otherincome">Other Income</label>
                <input type="number" class="form-control" id="otherincome" placeholder="Enter amount">
            </div>
            </div>
        <hr/>
        <div class="step2">
        <h3>Step 2: Your savings/investment summary</h3>
            <div class="form-group">
                <label for="fd">Fixed Deposit</label>
                <input type="number" class="form-control" id="fd" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="rd">Recurring Deposit</label>
                <input type="number" class="form-control" id="rd" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="ppf">PPF</label>
                <input type="number" class="form-control" id="ppf" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="pf">PF</label>
                <input type="number" class="form-control" id="pf" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="mf">Mutual Funds</label>
                <input type="number" class="form-control" id="mf" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="insurance">Insuarance</label>
                <input type="number" class="form-control" id="insurance" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="mediinsurance">Medical Insuarance</label>
                <input type="number" class="form-control" id="mediinsurance" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="othersaving">Other Saving/Investment</label>
                <input type="number" class="form-control" id="othersaving" placeholder="Enter amount">
            </div>
            </div>
        <hr/>
        <div class="step3">
        <h3>Step 3: Your expenses summary</h3>
            <div class="form-group">
                <label for="housingrent">Housing Rent</label>
                <input type="number" class="form-control" id="housingrent" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="utilitybills">Utility Bills</label>
                <input type="number" class="form-control" id="utilitybills" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="emi">EMI</label>
                <input type="number" class="form-control" id="emi" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="householdgroceries">Household/Groceries</label>
                <input type="number" class="form-control" id="householdgroceries" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="utilitybills">Transportation cost (fuel, maintenance, cab, auto, bus, train etc)</label>
                <input type="number" class="form-control" id="utilitybills" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="clothes">Clothes & Accessories</label>
                <input type="number" class="form-control" id="clothes" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="otherexp">Other Expenses</label>
                <input type="number" class="form-control" id="otherexp" placeholder="Enter amount">
            </div>
            </div>
        <hr/>
        <div class="step4">
        <h3>Step 4: Your goals/debts summary</h3>
            <div class="form-group">
                <label for="loanrepaysave">Save for Loan fast repay</label>
                <input type="number" class="form-control" id="loanrepaysave" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="marriagesave">Save for marriage</label>
                <input type="number" class="form-control" id="marriagesave" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="carsave">Save for car</label>
                <input type="number" class="form-control" id="carsave" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="homerepairsave">Save for home repair</label>
                <input type="number" class="form-control" id="homerepairsave" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="tripsave">Save for Vacation/Trip</label>
                <input type="number" class="form-control" id="tripsave" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="othersave">Other saving goal</label>
                <input type="number" class="form-control" id="othersave" placeholder="Enter amount">
            </div>
            </div>
        <button type="submit" class="btn btn-primary">Submit to see results!</button>
    </form>
    </div>
</div>
</body>
</html>
