function updateGood() {
document.goodsform.action = "approve.php";
document.goodsform.submit();
}
function deleteGood() {
if(confirm("Confirm to reject?")) {
document.goodsform.action = "reject.php";
document.goodsform.submit();
}
}