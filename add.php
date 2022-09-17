<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Expense</h2>

    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Category</label>
            <select name="class">
                <option value="" selected disabled>Category</option>
                <option value="1">Electricity Bill</option>
                <option value="2">Internet Fee</option>
                <option value="3">Grocery</option>
                <option value="4">Commetti</option>
                <option value="5">Petrol</option>
                <option value="6">Bike maintenance</option>
                <option value="7">Personal</option>
                <option value="8">Office Expense</option>
                <option value="9">Fruits</option>
                <option value="10">Vegitable</option>
                <option value="10">Milk</option>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="sphone" />
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="sname" />
        </div>
        <div class="form-group">
            <label>Time</label>
            <input type="time" name="saddress" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>

</div>
</div>
</body>
</html>
