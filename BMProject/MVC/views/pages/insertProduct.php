<div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input
        type="text"
        name=""
        id=""
        class="form-control"
        placeholder=""
        aria-describedby="helpId"
    />
    <small id="helpId" class="text-muted">Help text</small>

<div class="mb-3">
    <label for="" class="form-label">Sized Input</label>
    <input
        type="text"
        class="form-control form-control-sm"
        name=""
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
    <small id="helpId" class="form-text text-muted">Help text</small>
</div>
<?php

if (isset($data["result"])) {
    if ($data["result"]) {
        echo "Them moi thanh cong.";
    } else {
        echo "Them moi khong thanh cong.";
    }
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newACTION = "";
} else{
    $newAction = "./insertProduct";
}

?>

