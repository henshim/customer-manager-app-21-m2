<h1>ban co chac muon xoa khach hang nay</h1>
<h3><?php echo $customer->name; ?></h3>
<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>">
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger">
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
