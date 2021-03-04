<?php
if (isset($message)) {
    echo '<p class="alert-info">$message</p>';
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Them moi khach hang</h1>
        </div>
        <div class="col-12">
            <form action="" method="post">
                <div class="form-group">
                    <label>Ten khach hang</label>
                    <input type="text" class="form-control" name="name" placeholder="Nhap ten" required>
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" class="form-control" name="email" placeholder="nhap mail" required>
                </div>
                <div class="form-group">
                    <label>Dia chi</label>
                    <input type="text" class="form-control" name="address" placeholder="nhap dia chi" required>
                </div>
                <button type="submit" class="btn btn-primary">them moi</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cancel</button>
            </form>
        </div>
    </div>
</div>
