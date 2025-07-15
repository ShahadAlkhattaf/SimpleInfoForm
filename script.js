function toggleStatus(id) {
  fetch("toggle.php?id=" + id)
    .then(res => res.text())
    .then(newStatus => {
      const statusElement = document.getElementById("status-" + id);
      statusElement.innerText = newStatus == 1 ? '1' : '0';
    });
}
