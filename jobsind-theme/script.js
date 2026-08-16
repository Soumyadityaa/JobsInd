function applyFilter() {
  const searchVal = document.getElementById('searchInput').value.toLowerCase().trim();
  const selectedCategory = document.getElementById('categorySelect').value;
  const rows = document.querySelectorAll('#recruitmentTable tbody tr:not(#noResultsRow)');
  const noResultsRow = document.getElementById('noResultsRow');

  let visibleCount = 0;

  rows.forEach(row => {
    // Exclude button text from search match logic
    const rowText = Array.from(row.querySelectorAll('td:not(:last-child)'))
      .map(td => td.textContent)
      .join(' ')
      .toLowerCase();

    const rowCategory = row.getAttribute('data-category');

    const matchesSearch = rowText.includes(searchVal);
    const matchesCategory = selectedCategory === "" || rowCategory === selectedCategory;

    if (matchesSearch && matchesCategory) {
      row.style.display = "";
      visibleCount++;
    } else {
      row.style.display = "none";
    }
  });

  // Show or hide the empty state row
  if (noResultsRow) {
    noResultsRow.style.display = visibleCount === 0 ? "table-row" : "none";
  }
}